<?php /* Template Name: About Page Template */ 

get_header('inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-inner">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
				<div class="main-content">
					
					<?php if( have_rows('about_content') ): ?>

					    <?php while ( have_rows('about_content') ) : the_row();?>

								
					    	<?php if (get_row_layout() == 'leadership_block'):?>
					    		<!-- LEADERSHIP -->
					    		<div class="leadership--title"><h2><?php the_sub_field('leadership_title')?></h2></div>
					    		<div class="leadership-wrapper grid" id="names">
										<?php 
											if( have_rows('leadership') ):

											 	// loop through the rows of data
											    while ( have_rows('leadership') ) : the_row();
											?>

											<div class="leadership-wrapper--card store-list-item grid-item <?php the_sub_field('leader_location')?>">
												<img class="leadership-wrapper--card-image" src="<?php the_sub_field('leader_image'); ?>" />
												<div class="leadership-wrapper--card-name">
													<div class="leadership-wrapper--card-first-name"><h3><?php the_sub_field('leader_first_name')?></h3></div>
													<div class="leadership-wrapper--card-first-last-name"><h3><?php the_sub_field('leader_first_last_name')?></h3></div>
													<div class="leadership-wrapper--card-last-name"><h3> <?php the_sub_field('leader_last_name')?></h3></div>
												</div>
												<div class="leadership-wrapper--card-title"><p><?php the_sub_field('leader_title')?></p></div>
												<div class="leadership-wrapper--card-button showSingleLeader"><p><?php the_sub_field('leadership_bio_btn')?></p></div>
											</div>

											<div class="leadership-overlay">
							      		<div class="leadership-overlay-wrapper">
							      			<span class="close">×</span>
								      		<div id="div<?php echo get_row_index(); ?>" class="leadership-wrapper--bios-bio targetDivLeader"><p><?php the_sub_field('leader_bio')?></p></div>
								      	</div>
							     	 	</div>
							     	 	<?php endwhile;

											else :

											    // no rows found

											endif;

											?>
									</div>

							
						    <?php elseif (get_row_layout() == 'board_block'):?>
						    		<!-- BOARD -->
									<div class="board-wrapper">

										<div class="board-wrapper--title"><h2 class="mobile-board-trigger"><?php the_sub_field('board_title')?></h2></div>

										<?php 
											// Get repeater value
											$repeater = get_field('board');

											// Obtain list of columns
											foreach ($repeater as $key => $row) {
												$the_board_location[$key] = $row['board_location'];
											}
											?>
									<div class="mobile-board-wrapper">
											<div class="leadership-button-group-wrapper">
												<div class="leadership-button-group board-filter-button-group">
													<div class="leadership-button-group-locations">Locations:</div>
												  <!-- <button class="board" data-filter="*">all</button> -->
												 <button class="board" data-filter=".national">National</button>
												 <button data-filter=".ch">Chicago</button>
												 <button data-filter=".dc">Washington, DC</button>
												 <button data-filter=".la">Los Angeles</button>
												 <button data-filter=".ny">New York</button>
												</div>
											</div>

									<div class="board-wrapper--content grid" id="names">

										<?php 
											if( have_rows('board') ):

											 	// loop through the rows of data
											    while ( have_rows('board') ) : the_row();
										
											// Display newly orded columns
											// Unsure if this is the optimal way to do this...?>
											<div class="board-wrapper--content-card store-list-item grid-item <?php the_sub_field('board_location')?>">
												<img class="board-wrapper--content-card-image" src="<?php the_sub_field('board_image'); ?>" />
												<div class="board-wrapper--content-card-name">
													<div class="board-wrapper--content-card-first-name"><h3><?php the_sub_field('board_first_name')?></h3></div>
													<div class="board-wrapper--content-card-first-last-name"><h3> <?php the_sub_field('board_first_last_name')?></h3></div>
													<div class="board-wrapper--content-card-last-name"><h3> <?php the_sub_field('board_last_name')?></h3></div>
												</div>
												<div class="board-wrapper--content-card-title"><p><?php the_sub_field('board_title')?></p></div>
												<div class="board-wrapper--content-card-button showSingleBoard"><p><?php the_sub_field('board_bio_btn')?></p></div>
											</div>

											<div class="board-overlay">
							      		<div class="board-overlay-wrapper">
							      			<span class="close">×</span>
								      		<div id="div<?php echo get_row_index(); ?>" class="board-wrapper--bios-bio targetDivBoard"><p><?php the_sub_field('board_bio')?></p></div>
								      	</div>
							     	 	</div>
							     	 	<?php endwhile;

											else :

											    // no rows found

											endif;

											?>
								</div>
							</div>
						</div>

								<?php elseif (get_row_layout() == 'staff_block'):?>
										<!-- STAFF -->
										<div class="staff--title"><h2 class="mobile-staff-trigger"><?php the_sub_field('staff_title')?></h2></div>

										

									<?php 
												// Get repeater value
												$repeater = get_field('staff');

												// Obtain list of columns
												foreach ($repeater as $key => $row) {
													$the_staff_location[$key] = $row['staff_location'];
												}
												?>
										<div class="mobile-staff-wrapper">
												<div class="leadership-button-group-wrapper">
													<div class="leadership-button-group staff-filter-button-group">
														<div class="leadership-button-group-locations">Locations:</div>
													  <button class="staff" data-filter="*">all</button>
													 <button data-filter=".national">National</button>
													 <button data-filter=".ch">Chicago</button>
													 <button data-filter=".dc">Washington, DC</button>
													 <button data-filter=".la">Los Angeles</button>
													 <button data-filter=".ny">New York</button>
													</div>
												</div>

										<div class="staff-wrapper grid" id="names">

											<?php 
												if( have_rows('staff') ):

											 	// loop through the rows of data
											  while ( have_rows('staff') ) : the_row(); ?>
											  	
												<div class="staff-wrapper--card store-list-item grid-item <?php the_sub_field('staff_location')?>">
													<img class="staff-wrapper--card-image" src="<?php the_sub_field('staff_image'); ?>" />
													<div class="staff-wrapper--card-name">
														<div class="staff-wrapper--card-first-name"><h3><?php the_sub_field('staff_first_name')?></h3></div>
														<div class="staff-wrapper--card-first-last-name"><h3> <?php the_sub_field('staff_first_last_name')?></h3></div>
														<div class="staff-wrapper--card-last-name"><h3> <?php the_sub_field('staff_last_name')?></h3></div>
													</div>
													<div class="staff-wrapper--card-title"><p><?php the_sub_field('staff_title')?></p></div>
													<div class="staff-wrapper--card-button showSingleStaff"><p><?php the_sub_field('staff_bio_btn')?></p></div>
												</div>

												<div class="staff-overlay">
								      		<div class="staff-overlay-wrapper">
								      			<span class="close">×</span>
									      		<div id="div<?php echo get_row_index(); ?>" class="staff-wrapper--bios-bio targetDivStaff"><p><?php the_sub_field('staff_bio')?></p></div>
									      	</div>
								     	 	</div>
								     	 	<?php endwhile;

											else :

											    // no rows found

											endif;

											?>
										</div>
									</div>
					    	<?php endif;?>
							<?php
					    endwhile;
					endif; ?>

				</div>

				  <div class="founder-block">
				  	<div class="founder--title"><h2>Our Story</h2></div>
				    <?php

				    $args = array(
					    'post_type' => 'people',
					    'tax_query' => array(
				        array(
			            'taxonomy' => 'categories',
			            'field'    => 'slug',
			            'terms'    => 'founder',
				        ),
					    ),
						);

				    $new_query = new WP_Query( $args );
				    ?>

				      <?php if ( $new_query->have_posts() ) :  while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
				      	<div class="founder-block-wrapper">
					      	<div class="founder-block--card store-list-item grid-item <?php the_sub_field('staff_location')?>">
						          <div class="featured-image founder-block--card-image">
						            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						          </div>
						          <h3 class="founder-block--card-first-name"><?php the_title(); ?></h3>
						          <div class="staff-wrapper--card-title"><p><?php the_field('people_title')?></p></div>
					        </div>
					        <div class="founder-block--bio">
					        	<div class="excerpt founder-block">
						            <?php the_field('people_bio')?>
						         </div>
					        </div>
					      </div>
				        <?php endwhile; wp_reset_postdata(); ?>
				      <?php endif; ?>
				  </div>

				  <div class="foundation-block">
					  <div class="founder-block">
					  	<div class="founder--title"><h2>The Lavine Family Innovation Fund</h2></div>
					    <?php

					    $args = array(
						    'post_type' => 'people',
						    'tax_query' => array(
					        array(
				            'taxonomy' => 'categories',
				            'field'    => 'slug',
				            'terms'    => 'foundation',
					        ),
						    ),
							);

					    $new_query = new WP_Query( $args );
					    ?>

					      <?php if ( $new_query->have_posts() ) :  while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
					      	<div class="founder-block-wrapper">
						      	<div class="founder-block--card store-list-item grid-item <?php the_sub_field('staff_location')?>">
							          <div class="featured-image founder-block--card-image">
							            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
							          </div>
							          <h3 class="founder-block--card-first-name"><?php the_title(); ?></h3>
							          <div class="staff-wrapper--card-title"><p><?php the_field('people_title')?></p></div>
						        </div>
						        <div class="founder-block--bio">
						        	<div class="excerpt founder-block">
							            <?php the_field('people_bio')?>
							         </div>
						        </div>
						      </div>
					        <?php endwhile; wp_reset_postdata(); ?>
					      <?php endif; ?>
					  </div>
					</div>


				<!-- PARTNERS -->
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

				<?php endwhile; ?>
			<?php endif; ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
