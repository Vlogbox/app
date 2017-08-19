<section class="content-header clearfix manage-video">
    <div class="col-lg-6 col-xs-6 col-sm-6">
        <h2 class="heading-text-color">Manage Categories </h2>
    </div>
    <div class="col-lg-6 col-xs-6 col-sm-6 text-right">
        <?= $this->Html->link(
                __('New Category'), 
                'javascipt:void(0)', 
                [
                    'class' => "btn btn-orange",
                    'data-toggle' => "modal",
                    'data-target' => "#new"
                ]
            ) 
        ?>
    </div>
</section>
<article class="col-sm-12">
    <div class="table-responsive">
        <table class="table manage-video">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('is_active', 'Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->name) ?></td>
                <!-- <td><?= $category->has('parent_category') ? $this->Html->link($category->parent_category->id, ['controller' => 'Categories', 'action' => 'view', $category->parent_category->id]) : '' ?></td> -->
                <td>
                    <?= 
                        ($this->Number->format($category->is_active))? '<span class="text-success btn btn-success btn-xs">Active</span>' : '<span class="text-danger btn btn-danger btn-xs">Inactive</span>';
                    ?>
                        
                </td>
                <td><?= h($category->created) ?></td>
                <!-- <td><?= h($category->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(
                            __('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), 
                            'javascript:void(0)',
                            [
                                'escape' => false,
                                'data-id' => $category->id,
                                'data-name' => $category->name,
                                'class' => 'edit-category'
                            ]
                        ) 
                    ?>
                    <?= $this->Form->postLink(
                        __( ($category->is_active)
                            ? '<i class="fa fa-window-close text-danger" aria-hidden="true"></i>'
                            :'<i class="fa fa-check-square text-success" aria-hidden="true"></i>'
                        ), 
                        ['action' => 'change-status', base64_encode($category->id)], 
                        [
                            'confirm' => __('Are you sure you want to {0}?', ($category->is_active)?'Deactivate':'Activate',$category->id),
                            'title' => ($category->is_active)?'Deactivate Category':'Activate Category',
                            'escape' => false
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

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id = 'new'>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">New Category</h4>
            </div>
            <?= $this->Form->create($category, ['type' => 'post', 'url' => ['action' => 'add']]) ?>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <?= 
                            $this->Form->input('name',[
                                'class' => "form-control",
                                'placeholder' => "Category Name",
                                'label' => false
                            ]) 
                        ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?= $this->Form->end() ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id = 'edit'>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">New Category</h4>
            </div>
            <?= $this->Form->create($category, ['type' => 'post', 'url' => ['action' => 'edit']]) ?>
            <?= 
                $this->Form->hidden('id',[
                    'id' => 'cid'
                ]);
            ?>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <?= 
                            $this->Form->input('name',[
                                'class' => "form-control",
                                'placeholder' => "Category Name",
                                'label' => false,
                                'id' => 'cname'
                            ]) 
                        ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?= $this->Form->end() ?>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
    $this->Html->scriptStart(['block' => 'scriptInline']);    
?>  
        $('.edit-category').on('click',function(){
            $('#cid').val($(this).attr('data-id'));
            $('#cname').val($(this).attr('data-name'));
            $('#edit').modal('show');
        });
<?php
    $this->Html->scriptEnd();
?> 
