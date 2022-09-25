<?php $image = get_field('inner_page_hero_image'); ?>
<section class="inner-page-hero-content" style="background-image: url(<?php echo $image['url']; ?>);">
	<div class="inner-page-hero-content-wrapper">
		<div class="inner-page-hero-content--title"><h2><?php the_field('inner_hero_title')?></h2></div>
	</div>
</section>