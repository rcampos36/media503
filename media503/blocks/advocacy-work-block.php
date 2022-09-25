<div class="rergional-page-wrapper">
	
	<div class="rergional-page-wrapper__advocacy-work">
		<div class="rergional-page-wrapper__advocacy-work_content">
			<div class="rergional-page-wrapper__advocacy-work_content__title">
				<h2><?php the_sub_field('advocacy_work_title')?></h2>
			</div>
			<div class="rergional-page-wrapper__advocacy-work_content__description">
				<?php the_sub_field('advocacy_work_description')?>
			</div>
		</div>

		<div class="rergional-page-wrapper__advocacy-work_image">
				<?php $image = get_sub_field('advocacy_work_image'); ?>
				<img src="<?php echo $image['url']; ?>" />
			</div>
	</div>
</div>