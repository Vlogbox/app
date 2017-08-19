<?= $this->Html->docType() ?>
<html>
	<head>
		<?= $this->Html->charset(); ?>
		
		<?= $this->Html->meta(
			    'keywords',
			    'enter any meta keyword here'
			);
		?>
		<?= $this->Html->meta(
			    'description',
			    'enter any meta description here'
			);
		?>
		<?= $this->Html->meta(
			    'viewport',
			    'width=device-width, initial-scale=1'
			);
		?>
		<title>		<?= (!empty($title) ) ? $title : 'Volg' ?> 		</title>

		<?= $this->Html->meta('favicon.ico', '/favicon.ico', ['type' => 'icon']); ?>
		<link href="https://fonts.googleapis.com/css?family=Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i" rel="stylesheet">
		
		<?= 
			$this->Html->css([
				'bootstrap.min',
				'style',
				'font-awesome.min',
				'AdminLTE',
				'skin-blue'	
			]) 
		?>	    
	    <?= 
	    	$this->Html->script([
	    		'jQuery-2.1.4.min',
	    		'bootstrap.min',
	    		'app'
	    	],
	    	[
	    		'block' => true
	    	]) 
	    ?>

	    <?= $this->fetch('meta') ?>
	    <?= $this->fetch('css') ?>

	</head>
	<body class="hold-transition skin-blue sidebar-mini ">
		<div class="wrapper">
			<?php
	            echo $this->element('Admin/header'); 
	            echo $this->element('Admin/sidebar'); 
	        ?>
            <div class="content-wrapper clearfix ">
                <?php  
                    echo $this->Flash->render(); 
                    echo $this->fetch('content'); 
                ?>
            </div>
		</div> 
		<!-- Modal -->
        <div class="modal fade" id="addVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle" aria-hidden="true"></i></span></button>
                        <h3 class="modal-title" id="myModalLabel">Add Video</h3>
                    </div>
                    <?= 
                    	$this->Form->create($video, [
                			'type' => 'file',
                			'url' => ['action' => 'add'],
                            'id' => 'add-video-form'
                    	]) 
                    ?>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Upload Video</label>
                            <?= 
                            	$this->Form->input('url',[
                            		'type' => 'file',
                            		'class' => "form-control input-lg",
                            		'label' => false
                            	]) 
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Video Name</label>
                            <?= 
                            	$this->Form->input('name',[
                            		'class' => "form-control input-lg",
                            		'label' => false
                            	]) 
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <?= 
                            	$this->Form->input('category_id',[
                            		'options' => $categories,
                            		'class' => "form-control input-lg",
                            		'label' => false
                            	]) 
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Video Description</label>
                            <?= 
                            	$this->Form->input('description',[
                            		'class' => "form-control input-lg",
                            		'label' => false
                            	]) 
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-orange">Save</button>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div> 
        <div class="modal fade" id="editVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    
                </div>
            </div>
        </div>
        <?= $this->fetch('script') ?>
	    <?= $this->fetch('scriptBottom') ?>
	    <?= $this->fetch('scriptInline') ?>
        <style type="text/css">
            .error {
                color:red;
            }
        </style>
	</body>
</html>