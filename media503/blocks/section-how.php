<section class="how-we-lift">
	<div class="how-we-lift--title"><h2><?php the_field('lift_title')?></h2></div>
	<div class="how-we-lift--desc"><?php the_field('lifts_description')?></div>
	<ul class="how-we-lift--card accordion" id="what-we-do">
		<div id="skrollr-body" class="line skrollable" data--50-bottom-top="opacity:0;" data--100-bottom-top="height:0%; opacity:1;" data--100-bottom-bottom="height:83%;" data-anchor-target="#what-we-do"></div>
	<?php

	// check if the repeater field has rows of data
	if( have_rows('how_we_lift') ):

	 	// loop through the rows of data
	    while ( have_rows('how_we_lift') ) : the_row();?>

				
					<li class="how-we-lift--card-accordion-wrapper skrollable skrollable-after" data--200-bottom-top="opacity:0;" data--300-bottom-top="opacity:1;">
						<div id="div<?php echo get_row_index(); ?>" class="how-we-lift--card-toggle" href="javascript:void(0);"><h1><?php the_sub_field('lift_title')?></h1></div>
						<ul id="div<?php echo get_row_index(); ?>" data-aos="fade-up" class="how-we-lift--card--info-inner">
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