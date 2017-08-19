<?php foreach($videos as $index => $video): ?>						
	<div class="row">
		<div class="col-lg-12">
			<div class="bg-cat-pop">
				<div class="video-play-btn-cat">					
					<!-- <a href="#"><img src="img/home/video-play-btn.png"></a> -->
					<?php 
						echo $this->Html->link($this->Html->image('home/video-play-btn.png'),
							[
								'controller' => 'homes',
								'action'	=> 'video-detail',
								base64_encode($video->id)
							],['escape' => false]
						); 
					?>
				</div>
				<div class="top-video-category">
					<!-- <img class="img-responsive" src="img/home/cat-img-3.png"> -->
					<?php $thumb = $this->Video->getVedioThumbLink($video); ?>
                    <?php 
                    	echo $this->Html->image($thumb, [
                    		'calss' => 'img-responsive'
                    	]);
                    
                    ?>
					<div class="video-duration">1:20</div>
				</div>
			<div class="strip-bottom clearfix">
				<div class="pop-cat-name"><?= __($video->name) ?></div>
				<div class="col-lg-6 padding-left"><span class="orange-text">3 minute ago</span></div>
				<div class="col-lg-6 text-right"><span class="view"> <i class="fa fa-eye" aria-hidden="true"></i> 500 View</span></div>
			</div>
			</div>
		</div>
	</div>
<?php endforeach ?>