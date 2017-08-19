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
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        
		<?= 
			$this->Html->css([
				'bootstrap.min',
				'font-awesome.min',
				'home/style',
				'home/sticky-footer'
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
	<body>
		<?php
            echo $this->element('Home/header'); 
        ?>
        <?php  
            echo $this->Flash->render(); 
            echo $this->fetch('content'); 
        ?>
		<?=  $this->element('Home/footer'); ?>
        <?= $this->fetch('script') ?>
	    <?= $this->fetch('scriptBottom') ?>
	    <?= $this->fetch('scriptInline') ?>
	    <script>
         // Carousel Auto-Cycle
            $(document).ready(function() {
                    $('.carousel').carousel({
                    interval: 6000
            })
            });

            function openNav() {
                document.getElementById("mySidenav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
	</body>
</html>