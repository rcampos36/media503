<section class="quote">
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('slides') ): ?>
	<div class="flexslider">
		<ul class="slides">

	    <?php while ( have_rows('slides') ) : the_row();?>
							<?php $image = get_sub_field('image'); ?>
							<li>
								<div class="slide-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
								<div class="quote-box quote-box__<?php the_sub_field('text_color')?>" style="background-color:<?php the_sub_field('quote_slide_bg'); ?>">
									<div class="slide-title"><h2><?php the_sub_field('slide_title'); ?></h2></div>
									<div class="slide-title"><p><?php the_sub_field('slide_quote'); ?></p></div>
									<!-- <div class="slide-stat-wrapper">
										<div class="slide-stat"><p><?php the_sub_field('slide_stat'); ?></p></div>
										<div class="slide-stat-description"><p><?php the_sub_field('slide_stat_description'); ?></p></div>
									</div> -->
									<div class="slide-stat-link"><a href="<?php the_sub_field('blog_link_url');?>"><?php the_sub_field('blog_link_text');?></a></div>
								</div>
							</li>
	    <?php endwhile; ?>
		</ul>
	</div>
	<?php 
	endif;
	
	?>
</section>