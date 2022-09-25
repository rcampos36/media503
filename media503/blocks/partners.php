<div class="partners">
	 			<div class="partners-wrapper">
	 				<div class="partners-wrapper--title"><h2><?php the_field('partners_title')?></h2></div>
						<?php
						
						// check if the repeater field has rows of data
						if( have_rows('partners') ): ?>
						<div class="partners-wrapper--logos">
		
					    <?php while ( have_rows('partners') ) : the_row();?>

					    	<?php
						    	$image = get_sub_field('partners_image');
									$link = get_sub_field('partners_url');
								?>

								<div class="slide">

									<?php if( $link ): ?>
										<a href="<?php echo $link; ?>" target="_blank">
									<?php endif; ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"  />

									<?php if( $link ): ?>
										</a>
									<?php endif; ?>
								</div>

				    <?php endwhile; ?>
					</div>
					<?php 
					endif;
					
					?>
				</div>
			</div>