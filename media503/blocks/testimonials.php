<!-- <div class="testimonials">
	<div class="testimonials-wrapper">
			<div class="testimonials-wrapper--title"><h2><?php the_field('testimonial_title')?></h2></div>
			<?php
			
			// check if the repeater field has rows of data
			if( have_rows('testimonials') ): ?>
			<div class="flexslider">
				<ul class="slides">

			    <?php while ( have_rows('testimonials') ) : the_row();?>
		    				<?php $image = get_sub_field('testimonial_image'); ?>
								<li>
									<div class="career-testimonial-box">
										<div class="career-testimonial-box--image"><img src="<?php echo $image['url']; ?>" /></div>
										<div class="career-testimonial-box--paragraph"><p><?php the_sub_field('testimonial_paragraph'); ?></p></div>
										<div class="career-testimonial-box--name">
											<div class="career-testimonial-box--first-name"><h4><?php the_sub_field('testimonial_first_name'); ?></h4></div>
											<div class="career-testimonial-box--last-name"><h4><?php the_sub_field('testimonial_last_name'); ?></h4></div>
											<div class="career-testimonial-box--business-title"><p><?php the_sub_field('testimonial_person_title'); ?></p></div>
										</div>
									</div>
								</li>
		    <?php endwhile; ?>
			</ul>
		</div>
		<?php 
		endif;
		
		?>
	</div>
</div> -->

<section class="quote testimonials">
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('slides') ): ?>
	<div class="flexslider">
		<ul class="slides">

	    <?php while ( have_rows('slides') ) : the_row();?>
							<?php $image = get_sub_field('image'); ?>
							<li>
								<div class="slide-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
								<div class="quote-box" style="background-color:<?php the_sub_field('slide_bg_color'); ?>">
									<div class="slide-title"><h2><?php the_sub_field('slide_title'); ?></h2></div>
									<div class="slide-title"><p><?php the_sub_field('slide_quote'); ?></p></div>
									<div class="slide-stat-wrapper">
										<div class="slide-stat"><p><?php the_sub_field('slide_stat'); ?></p></div>
										<div class="slide-stat-description"><p><?php the_sub_field('slide_stat_description'); ?></p></div>
									</div>
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