<section class="content-header clearfix manage-video">
    <div class="col-lg-6 col-xs-6 col-sm-6">
        <h2 class="heading-text-color">Manage Video </h2>
    </div>
    <div class="col-lg-6 col-xs-6 col-sm-6 text-right"><a href="#" data-toggle="modal" data-target="#addVideo" class="btn btn-orange">Add Video</a></div>
</section>
<article class="col-sm-12">
    <div class="table-responsive">
        <table class="table manage-video">
            <thead>
                <tr>
                    <th>Video Thumb</th>
                    <th>Video Name</th>
                    <th>Category Assign</th>
                    <th>Video Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($videos as $video): ?>
                <tr>
                    <td>
                        <?php $thumb = $this->Video->getVedioThumbLink($video); ?>
                        <?php 
                            echo $this->Html->image($thumb, [
                                'class' => 'video-thumb'
                            ]); 
                        ?>
                    </td>
                    <td><?= h($video->name) ?></td>
                    <td><?= h($video->category->name) ?></td>
                    <td><?= h($video->description) ?></td>
                    <td>
                        <?= 
                            $this->Html->link(
                                '<i class="fa fa-pencil-square" aria-hidden="true"></i>',
                                'javascript:void(0)',
                                [
                                    'class' => 'edit-video',
                                    'escape' => false,
                                    'data-url' => $this->Url->build([
                                        'controller' => 'videos',
                                        'action' => 'edit',
                                        'prefix' => 'admin',
                                        base64_encode($video->id)
                                    ])
                                ]
                            );
                        ?>
                        <?= $this->Form->postLink(
                            __('<i class="fa fa-trash" aria-hidden="true"></i>'), 
                            ['action' => 'delete', $video->id], 
                            [
                                'confirm' => __('Are you sure you want to delete {0}?', $video->name),
                                'escape' => false,

                            ]) 
                        ?>
                    </td>
                </tr>
             <?php endforeach; ?>                
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
</article>
 
<?php
    echo $this->Html->script(
        ['jquery.validate.min', 'additional-methods.min'], ['block' => 'scriptInline']);
    $this->Html->scriptStart(['block' => 'scriptInline']);    
?>  
    $('.edit-video').on('click',function() {
        var url = $(this).attr('data-url');
        $.ajax({
            url: url,
            type: 'GET',
                     
        }).done(function(data) {

            $('#editVideo').find('.modal-content').html(data);
            $('#editVideo').modal('show');
        });
    }); 

    $('#add-video-form').validate( { 
        rules: {
            'url': {
                    required: true,
                    extension: "mp4|3gp|mkv|flv|mpg|wmv"
                }
            },
        messages: {
            'url': {
                    required: true,
                    extension: "only these file types are allowed mp4|3gp|mkv|avi|AVI"
                }
            }
        }
    );
    
<?php
    $this->Html->scriptEnd();
?>     
<style>
.main-sidebar, .left-side {
    min-height: 160%; !importent
}
</style>
