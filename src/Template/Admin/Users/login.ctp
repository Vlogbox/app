<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vlog</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <?= 
            $this->Html->css([
                'bootstrap.min',
                'login',
            ]) 
        ?>   
        <!-- Font Awesome -->
        <link href="https://fonts.googleapis.com/css?family=Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i" rel="stylesheet">
        <!-- Ionicons -->
        <!--     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
        <!-- Theme style -->
        <!-- iCheck -->
        <!-- Morris chart -->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?= 
            $this->Html->script([
                'jQuery-2.1.4.min',
                'bootstrap.min',
            ],
            [
                'block' => true
            ]) 
        ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
    <body>
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <h1>Vlog Box</h1>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="#" method="post" role="form" style="display: block;">
                                <?=
                                    $this->Form->create('',[
                                        'id' => 'login-form',
                                        'style' => 'display:block;'
                                    ])
                                ?>
                                    <div class="form-group">
                                        <?=
                                            $this->Form->input('email', [
                                                'id' => 'username', 
                                                'tabindex' => 1, 
                                                'class' => 'form-control', 
                                                'placeholder' => 'email',
                                                'label' => false
                                            ]) 
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?=
                                            $this->Form->input('password', [
                                                'type' => 'password',
                                                'id' => 'password', 
                                                'tabindex' => 2, 
                                                'class' => 'form-control', 
                                                'placeholder' => 'Password',
                                                'label' => false
                                            ]) 
                                        ?>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <?= $this->Form->submit(__('Log In'), ['class' => 'btn btn-login'])
                                                ?>
                                            </div>
                                        </div>
                                    <?= $this->Form->end() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- jQuery 2.1.4 -->
        <?= $this->fetch('script') ?>
    </body>
</html>