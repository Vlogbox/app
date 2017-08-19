<header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
        VB
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
        Vlog Box
        </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top nav-custom" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs hidden-sm">
                    <?= __('Hello Admin') ?>
                    </span>
                    <?= 
                        $this->Html->image('profile-logo.png', [
                            'class' => "user-image",
                            'alt' => "User Image"
                        ]) 
                    ?>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul aria-labelledby="drop3" class="dropdown-menu">
                        <li>
                        <?= $this->Html->link(__('Logout'), ['controller' => 'users', 'action' => 'logout']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>