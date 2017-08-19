<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Network\Exception\BadRequestException;

/**
 * Homes Controller
 *
 *
 * @method \App\Model\Entity\Home[] paginate($object = null, array $settings = [])
 */
class HomesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('home');
        $this->Auth->allow(['index', 'videoDetail']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categoryTable = TableRegistry::get('Categories');
        $categories = $categoryTable->find()
            ->where([
                'Categories.is_active' => 1
            ]);
        $categories->contain('Videos', function ($q) {
           return $q
                ->where(['Videos.is_active' => 1])
                ->order(['Videos.created' => 'DESC'])
                ->limit(3);
        });
        $this->set(compact('categories'));        
    }

    /**
     * View method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $home = $this->Homes->get($id, [
            'contain' => []
        ]);

        $this->set('home', $home);
        $this->set('_serialize', ['home']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $home = $this->Homes->newEntity();
        if ($this->request->is('post')) {
            $home = $this->Homes->patchEntity($home, $this->request->getData());
            if ($this->Homes->save($home)) {
                $this->Flash->success(__('The home has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home could not be saved. Please, try again.'));
        }
        $this->set(compact('home'));
        $this->set('_serialize', ['home']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $home = $this->Homes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $home = $this->Homes->patchEntity($home, $this->request->getData());
            if ($this->Homes->save($home)) {
                $this->Flash->success(__('The home has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home could not be saved. Please, try again.'));
        }
        $this->set(compact('home'));
        $this->set('_serialize', ['home']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Home id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $home = $this->Homes->get($id);
        if ($this->Homes->delete($home)) {
            $this->Flash->success(__('The home has been deleted.'));
        } else {
            $this->Flash->error(__('The home could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function videoDetail($id){
        $videoTable = TableRegistry::get('Videos');
        $video = $videoTable->find()
            ->where(['id' => base64_decode($id)])
            ->first();
        $this->set(compact('video'));

    }
}
