<div class="container">
	<nav class="category-scroll">
	    <ul class="control-box pager">
	        <li><a data-slide="prev" href="#myCarousel1" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
	        <li>
	            <a data-slide="next" href="#myCarousel1" class="">
	                <i class="glyphicon glyphicon-chevron-right"></i>
	        </li>
	    </ul>
	</nav>
	<div class="carousel slide" id="myCarousel1">
		<div class="carousel-inner">
			<?php if(!$categories->isEmpty()): $closeDiv = true; ?>
				<?php foreach($categories as $key => $category): $closeDiv = true; ?>

				<?php if($key%4 == 0):  ?>
					<div class="item <?= ($key==0)?'active':'' ?>">
				<?php endif ?>

						<div class="col-sm-3 ">
							<div class="category-box text-center">
								<div class="fitness-icon">
									<?= $this->Html->image('home/fitness-icon.png') ?>
								</div>
								<div class="category-box-img">
									<?= $this->Html->image('home/category-box.png', ['class' => 'img-responsive']) ?>

								</div>
								<div class="category-name"><?= __($category->name) ?></div>
							</div>
							<?= $this->element('Home/videos', ['videos' => $category->videos]) ?>
						</div>

				<?php if( ($key + 1) % 4 == 0): $closeDiv = false; ?>
					</div>
				<?php endif ?>
					
				<?php endforeach; ?>
					<?php if($closeDiv): ?>
							</div>
					<?php endif; ?>
			<?php endif; ?>
			<div class="col-sm-12 text-right view-all-category">
				<a href="view-all-category">View All Categories</a>
			</div>
		</div>
	</div>
</div>