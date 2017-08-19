<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Inflector;
use Cake\Network\Exception\BadRequestException;
use Cake\Filesystem\File;
use Cake\Utility\Text;
use Cake\I18n\Time;
use Cake\Routing\Router;
/**
 * Videos Controller
 *
 *
 * @method \App\Model\Entity\Video[] paginate($object = null, array $settings = [])
 */
class VideosController extends AppController
{
     public $paginate = [
        'limit' => 10,
        
    ];
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('admin');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $videos = $this->paginate($this->Videos->find()->contain(['Categories']));
        // pr($videos->toArray());die;
        $video = $this->Videos->newEntity();
        $categories = TableRegistry::get('Categories');
        $categories = $categories->find('list', [
            'keyField' => 'id',
            'valueField' => 'name',
        ]);
        $this->set(compact('videos', 'video', 'categories'));
        $this->set('_serialize', ['videos', 'video', 'categories']);
    }

    /**
     * View method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $video = $this->Videos->get($id, [
            'contain' => []
        ]);

        $this->set('video', $video);
        $this->set('_serialize', ['video']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $video = $this->Videos->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['uuid'] = Text::uuid(); 
            $this->request->data['user_id'] = $this->Auth->user('id'); 
            $video = $this->Videos->patchEntity($video, $this->request->getData());
            if ($this->Videos->save($video)) {
                $this->generateThumb(ROOT.DS.$video->dir.$video->url);
                // pr($this->getDuration(ROOT.DS.$video->dir.$video->url));die;
                $this->Flash->success(__('The video has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $video = $this->Videos->get(base64_decode($id), [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $video = $this->Videos->patchEntity($video, $this->request->getData());
            if(!empty($this->request->data['url']) && $this->request->data['url']['error'] != 0){
                unset($this->request->data['url']);
            }
            // pr($this->request->getData());
            if ($this->Videos->save($video)) {
                $this->Flash->success(__('The video has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            pr($video->errors());die;
            $this->Flash->error(__('The video could not be saved. Please, try again.'));
            return $this->redirect(['action' => 'index']);
        }
        $categories = TableRegistry::get('Categories');
        $categories = $categories->find('list', [
            'keyField' => 'id',
            'valueField' => 'name',
        ]);
        $this->set(compact('video', 'categories'));
        $this->set('_serialize', ['video', 'categories']);
        if($this->request->is('ajax')) {
            $this->viewBuilder()->layout('ajax');
            $this->render('/Element/Admin/videos/edit');
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $video = $this->Videos->get($id);
        if ($this->Videos->delete($video)) {
            $this->Flash->success(__('The video has been deleted.'));
        } else {
            $this->Flash->error(__('The video could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function test() {
        $a = $this->generateThumb(WWW_ROOT.'files'. DS. 'Videos'.DS. 'url'.DS. 'small.mp4');
        pr($a);die;
    }

    public function generateThumb($myFileUrl){
         // //Generating ScreenShot of Video
        $file = new File($myFileUrl, true, 0644);
        //$FFmEG
        $ffmpeg = \FFMpeg\FFMpeg::create();
        $video = $ffmpeg->open($file->path);
        $video
            ->filters()
            ->resize(new \FFMpeg\Coordinate\Dimension(320, 240))
            ->synchronize();
        
        $thumb = $file->Folder->path.DS.$file->name().'.jpg';
        $video
            ->frame(\FFMpeg\Coordinate\TimeCode::fromSeconds(2))
            ->save($thumb);

        //JPG to GD OBJ
        $source = imagecreatefromjpeg($thumb);
        //GD RESIZE
        $gd = imagescale($source,616,320);
        //BACK TO JPEG
        imagejpeg($gd,$thumb);

        return $thumb;
    }

    protected function getDuration($path) {
        $ffprobe = \FFMpeg\FFProbe::create();
        return $ffprobe
            ->format($path) // extracts file informations
            ->get('duration');             // returns the duration property
    }
}
