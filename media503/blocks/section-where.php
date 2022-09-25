<section class="where-we-lift-wrapper">
	<div class="where-we-lift">
			<div class="where-we-lift--title"><h2><?php the_field('locations_title')?></h2></div>
			<div class="where-we-lift--description"><p><?php the_field('location_description')?></p></div>
			<div class="where-we-lift--location--wrapper">

			<?php
			
			// check if the repeater field has rows of data
			if( have_rows('locations') ):
			
			 	// loop through the rows of data
			    while ( have_rows('locations') ) : the_row();
			
			?>
						<div class="where-we-lift--location"> 
							<div class="where-we-lift--location_affect">
								<a href="<?php the_sub_field('location_text_link'); ?>">
									<div class="where-we-lift--location_affect--text">
										<h3><?php the_sub_field('location_text'); ?></h3>
									</div>
								</a>
								<div class="where-we-lift--location_affect--image">
									<?php $image = get_sub_field('image'); ?>
									<a href="<?php the_sub_field('location_link'); ?>" class="where-we-lift--location_affect--image--city" style="background-image: url(<?php echo $image['url']; ?>);"> </a>
								</div>
							</div>
							<div class="where-we-lift--location--title">
			       		<a href="<?php the_sub_field('location_link'); ?>"><h2><?php the_sub_field('location'); ?></h2></a>
			      	</div>
			      </div>
			<?php
			    endwhile;
			
			else :
			
			    // no rows found
			
			endif;
			
			?>
		</div>
	</div>
</section>