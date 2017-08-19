<!-- Sidebar Left-->
<aside class="main-sidebar">
    <div class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview active">
                
                <?=
                    $this->Html->link('<i class="fa fa-file-video-o" aria-hidden="true"></i>
                    <span>Manage Video</span>',[
                        'controller' => 'videos',
                        'prefix' => 'admin'
                    ],[
                        'escape' => false
                    ]);
                ?>
            </li>
            <li class="treeview">
            <?=
                $this->Html->link('<i class="fa fa-braille" aria-hidden="true"></i>
                <span>Categories</span>',[
                    'controller' => 'categories',
                    'prefix' => 'admin'
                ],[
                    'escape' => false
                ]);
            ?>
            </li>
        </ul>
    </div>
</aside>