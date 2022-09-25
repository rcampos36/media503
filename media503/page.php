<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress_dev
 */

get_header('inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
				
				<div class="main-content">

					<?php get_template_part('blocks/heading-and-text'); ?> 

					
					<?php if( have_rows('default_content') ): ?>

					    <?php while ( have_rows('default_content') ) : the_row();?>

								
					    	<?php if (get_row_layout() == 'black_heading'):?>
					    		<!-- heading block -->
					    		<div class="content-section">				                
			                <div class="black-heading">    
			                    <div class="black-heading--title">
			                        <h2><?php the_sub_field('heading')?></h2>
			                    </div>
			                </div>		                    
			            </div>

							
						    <?php elseif (get_row_layout() == 'button_block'):?>
						    		<!-- button block -->	
					    		<div class="content-section">      
			                <div class="button-block--link button-block__<?php the_sub_field('align_button')?>">
			                    <a href="<?php the_sub_field('button_url');?>"><?php the_sub_field('button_text');?></a>
			                </div>      
			            </div>

								
				        <?php elseif (get_row_layout() == 'image_block'):?>
    							<!-- image block -->
			            <div class="image-block">
			              <div class="image-block--title">
			                <h3><?php the_sub_field('title')?></h3>
			              </div>

			        			<div class="image-block--<?php the_sub_field('align_image')?>">
			                <?php $image = get_sub_field('image'); ?>
			                <div class="image-block--image">
			                	<img src="<?php echo $image['url']; ?>" />
			                	<p class="image-caption"><?php the_sub_field('image_caption')?></p>
			              	</div>
			                <div class="image-block--paragraph">
			                    <p><?php the_sub_field('paragraph')?></p>
			                </div>     
			              </div>
			            </div>
									
									
		            <?php elseif (get_row_layout() == 'blue_heading'):?>
  								<!-- blue heading block -->
					    		<div class="content-section">
			              <div class="blue-heading">    
			                <div class="blue-heading--title">
			                    <h1><?php the_sub_field('blue_heading')?></h1>
			                </div>    
			            	</div>
			          	</div>

										
		            <?php elseif (get_row_layout() == 'text_block'):?>
									<!-- text block -->
					    		<div class="content-section">
			                <div class="text-block text-block__<?php the_sub_field('align_text_content')?>">    
			                    <div class="text-block--paragraph">
			                        <p><?php the_sub_field('text_block_paragraph')?></p>
			                    </div>
			                </div>     
			            </div>
											
											
		            <?php elseif (get_row_layout() == 'black_heading_text'):?>
									<!-- Black heading with text block -->
					    		<div class="content-section">
		                <div class="black-heading-with-text black-heading-with-text__<?php the_sub_field('align_text')?>">    
	                    <div class="black-heading-with-text--title">
	                        <h2><?php the_sub_field('heading')?></h2>
	                    </div>
	                    <div class="paragraph">
	                        <p><?php the_sub_field('text')?></p>
	                    </div>
		                </div>						                    
			            </div>

			            <?php elseif (get_row_layout() == 'accordion_black_heading_w_text'):?>
									<!-- Accordion heading with text block -->
					    		<div class="content-section accordion">
		                <div class="black-heading-with-text accordion-heading-with-text black-heading-with-text__<?php the_sub_field('align_text')?>">    
	                    <a class="black-heading-with-text--title" href="javascript:void(0);">
	                        <h2 class="accordion-trigger"><?php the_sub_field('accordion_heading')?></h2>
	                    </a>
	                    <div class="paragraph">
	                        <p><?php the_sub_field('accordion_text')?></p>
	                    </div>
		                </div>						                    
			            </div>
						          
		            <?php elseif (get_row_layout() == 'list_block'):?>
									<!-- list block -->  
					    		<div class="content-section">
		                <div class="list-block-text"> 
		                <?php
		                   
		                   // check if the repeater field has rows of data
		                   if( have_rows('list') ):
		                   
		                    	// loop through the rows of data
		                       while ( have_rows('list') ) : the_row(); ?>
		                   
		                           <ul class="list">
					                        <li><?php the_sub_field('list')?></li>
					                    </ul>
		                   
		                       <?php endwhile;
		                   
		                   else :
		                   
		                       // no rows found
		                   
		                   endif;
		                   
		                   ?>   
		                </div>						                    
			            </div>

						          
		            <?php elseif (get_row_layout() == 'divider_block'):?>
									<!-- divider block -->
					    		<div class="content-section">
					    			<div class="block-top-padding__<?php the_sub_field('top_padding')?> block-bottom-padding__<?php the_sub_field('bottom_padding')?>">
                    	<div class="content-divider"></div>
                    </div>					                    
			            </div>

						           
		           	<?php elseif (get_row_layout() == 'cta_block'):?>
									<!-- cta block -->
									<div class="content-section">
								<section class="ctas">
									<div class="hope-money-love">
										<div id="popup1" class="hope--popup">
											<span class="modal-close">&#10006;</span>
											<div class="popup-wrapper">
												<div class="popup-wrapper--content">
													<div class="hope--popup--title"><h3><?php the_sub_field('hope_popup_title')?></h3></div>
													<div class="hope--popup--image">
														<img src="<?php the_sub_field('hope_popup_image'); ?>" />
													</div>
												</div>
												<p><?php the_sub_field('hope_popup_content')?></p>
											</div>
										</div>
										<div id="popup2" class="money--popup">
											<span class="modal-close">&#10006;</span>
											<div class="popup-wrapper">
												<div class="popup-wrapper--content">
													<div class="money--popup--title"><h3><?php the_sub_field('money_popup_title')?></h3></div>
													<div class="money--popup--image">
														<img src="<?php the_sub_field('money_popup_image'); ?>" />
													</div>
												</div>
												<p><?php the_sub_field('money_popup_content')?></p>
											</div>
										</div>
										<div id="popup3" class="love--popup">
											<span class="modal-close">&#10006;</span>
											<div class="popup-wrapper">
												<div class="popup-wrapper--content">
													<div class="love--popup--title"><h3><?php the_sub_field('love_popup_title')?></h3></div>
													<div class="love--popup--image">
														<img src="<?php the_sub_field('love_popup_image'); ?>" />
													</div>
												</div>
												<p><?php the_sub_field('love_popup_content')?></p>
											</div>
										</div>
									</div>

									<div class="ctas--mission"><?php the_sub_field('mission_statement')?></div>
									<h2 class="ctas--sub-mission"><?php the_sub_field('sub_mission')?></h2>
									<div class="cta--wrapper">
										<div class="cta">
											<div class="cta-hope--icon"> 
												 <img src="<?php the_sub_field('hope_icon'); ?>" />
											</div>
											<div class="cta-hope--title"><h1><?php the_sub_field('hope_title')?></h1></div>
											<div class="cta-hope--description align-text__<?php the_sub_field('hope_align_text')?>"><p><?php the_sub_field('hope_mission_description')?></p></div>
											<div class="cta-hope--link-1 popup" data-panelid="popup1" href="<?php the_sub_field('hope_button_url');?>"><?php the_sub_field('hope_button_text');?></div>
										</div>
										<div class="cta">
											<div class="cta-money--icon"> 
												<img src="<?php the_sub_field('money_icon'); ?>" />
											</div>
											<div class="cta-money--title"><h1><?php the_sub_field('money_title')?></h1></div>
											<div class="cta-money--description align-text__<?php the_sub_field('money_align_text')?>"><p><?php the_sub_field('money_mission_description')?></p></div>
											<div class="cta-money--link-2 popup" data-panelid="popup2" href="<?php the_sub_field('money_button_url');?>"><?php the_sub_field('money_button_text');?></div>
										</div>
										<div class="cta">
											<div class="cta-love--icon"> 
												<img src="<?php the_sub_field('love_icon'); ?>" />
											</div>
											<div class="cta-love--title"><h1><?php the_sub_field('love_title')?></h1></div>
											<div class="cta-love--description align-text__<?php the_sub_field('love_align_text')?>"><p><?php the_sub_field('love_mission_description')?></p></div>
											<div class="cta-love--link-3 popup" data-panelid="popup3" href="<?php the_sub_field('love_button_url');?>"><?php the_sub_field('love_button_text');?></div>
										</div>
									</div>
								</section>
									</div>

								<?php elseif (get_row_layout() == 'quote_block'):?>
									<!-- quote block -->

									<section class="quote">
										<?php
										
										// check if the repeater field has rows of data
										if( have_rows('no_quote_slides') ): ?>
										<div class="flexslider">
											<ul class="slides">

										    <?php while ( have_rows('no_quote_slides') ) : the_row();?>
												<?php $image = get_sub_field('image'); ?>
												<li>
													<div class="slide-image" style="background-image: url(<?php echo $image['url']; ?>);"></div>
													<div class="quote-box quote-box__<?php the_sub_field('text_color')?>" style="background-color:<?php the_sub_field('quote_slide_bg'); ?>">
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

									<?php elseif (get_row_layout() == 'no_quote_block'):?>
									<!-- no quote block -->

									<section class="quote no-quote">
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

									<?php elseif (get_row_layout() == 'how_we_lift_block'):?>
									<!-- how we lift block -->
									<div class="content-section">
										<section class="how-we-lift">
											<div class="how-we-lift--title"><h2><?php the_sub_field('lift_title')?></h2></div>
											<div class="how-we-lift--desc"><?php the_sub_field('lifts_description')?></div>
											<ul class="how-we-lift--card accordion">
											<?php

											// check if the repeater field has rows of data
											if( have_rows('how_we_lift') ):

											 	// loop through the rows of data
											    while ( have_rows('how_we_lift') ) : the_row();?>

														
															<li class="how-we-lift--card-accordion-wrapper">
																<div id="div-block<?php echo get_row_index(); ?>" class="how-we-lift--card-toggle" href="javascript:void(0);"><h1><?php the_sub_field('lift_title')?></h1></div>
																<ul id="div-block<?php echo get_row_index(); ?>" data-aos="fade-up" class="how-we-lift--card--info-inner">
																	<li class="how-we-lift--card--description">
																		<div class="how-we-lift--card--image"> 
																			<?php $image = get_sub_field('graphic'); ?>
																			<img src="<?php echo $image['url']; ?>" />
																		</div>
																		<div class="how-we-lift--card--desc"><p><?php the_sub_field('lift_description')?></p></div>
																		<div class="how-we-lift--card--story"><p><?php the_sub_field('lift_story')?></p></div>
																	</li>
																</ul>
															</li>

											    <?php endwhile;

											else :

											    // no rows found

											endif;

											?>
											</ul>
										</section>
									</div>

									<?php elseif (get_row_layout() == 'where_we_lift_block'):?>
									<!-- where we lift block -->
									
									<section class="where-we-lift-wrapper">
										<div class="where-we-lift">
												<div class="where-we-lift--title"><h2><?php the_sub_field('locations_title')?></h2></div>
												<div class="where-we-lift--description"><p><?php the_sub_field('location_description')?></p></div>
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

					    	<?php endif;?>

							<?php
					    endwhile;
					endif; ?>

				</div>
			
			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
