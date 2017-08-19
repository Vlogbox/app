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
                <tr>
                    <td><img class="video-thumb" src="img/video-thumb.png"></td>
                    <td>Fitness Training</td>
                    <td>Music</td>
                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                    <td><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><img class="video-thumb" src="img/video-thumb.png"></td>
                    <td>Fitness Training</td>
                    <td>Music</td>
                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                    <td><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><img class="video-thumb" src="img/video-thumb.png"></td>
                    <td>Fitness Training</td>
                    <td>Music</td>
                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                    <td><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><img class="video-thumb" src="img/video-thumb.png"></td>
                    <td>Fitness Training</td>
                    <td>Music</td>
                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                    <td><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <tr>
                    <td><img class="video-thumb" src="img/video-thumb.png"></td>
                    <td>Fitness Training</td>
                    <td>Music</td>
                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                    <td><a href="#"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</article>
<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Video[]|\Cake\Collection\CollectionInterface $videos
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Video'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="videos index large-9 medium-8 columns content">
    <h3><?= __('Videos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($videos as $video): ?>
            <tr>
                <td><?= $this->Number->format($video->id) ?></td>
                <td><?= $video->has('category') ? $this->Html->link($video->category->id, ['controller' => 'Categories', 'action' => 'view', $video->category->id]) : '' ?></td>
                <td><?= h($video->name) ?></td>
                <td><?= h($video->url) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $video->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]) ?>
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
