<?php /* Template Name: Contact Page Template */ 

get_header('inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-inner">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
			<!-- Heading and Texty -->
 			<?php /* get_template_part('blocks/heading-and-text'); */ ?> 
			
				<div class="national-office">
						<div class="national-office-wrapper">
							<div class="national-office-wrapper-title"><h3><?php the_field('national_office_title')?></h3></div>
							<div class="national-office-wrapper-address"><address><?php the_field('national_office_address')?></address></div>
							<div class="national-office-wrapper-phone"><p><?php the_field('national_office_phone')?></p></div>
							<div class="national-office-wrapper-fax"><p><?php the_field('national_office_fax')?></p></div>
							<a href="mailto:<?php the_field('national_office_email')?>" class="national-office-wrapper-email"><?php the_field('national_office_email')?></a>
						</div>
						<div class="national-office-image-wrapper">
								<div class="national-office-image-wrapper-image">
									<?php if( get_field('national_office_image') ): ?>
											<img src="<?php the_field('national_office_image'); ?>" />
										<?php endif; ?>
								</div>
							</div>
				</div>

				<div class="office-locations-wrapper">
					<div class="office-locations-wrapper--info">
						<?php
						
						// check if the repeater field has rows of data
						if( have_rows('office_locations') ):
						
						 	// loop through the rows of data
						    while ( have_rows('office_locations') ) : the_row(); ?>
						
						    <div class="office-locations-wrapper--info-card">
						    	<div class="office-locations-wrapper--info-card-title"><h3><?php the_sub_field('office_location_title')?></h3></div>
									<div class="office-locations-wrapper--info-card-address"><address><?php the_sub_field('office_location_address')?></address></div>
									<div class="office-locations-wrapper--info-card-phone"><p><?php the_sub_field('office_location_phone')?></p></div>
									<div class="office-locations-wrapper--info-card-fax"><p><?php the_sub_field('office_location_fax')?></p></div>
									<a href="mailto:<?php the_sub_field('national_office_email')?>" class="office-locations-wrapper--info-card-email"><?php the_sub_field('office_location_email')?></a>
						    </div>
						
						   <?php endwhile;
						
						else :
						
						    // no rows found
						
						endif;
						
						?>
					</div>
				</div>
				
			
				<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
