<div class="partners-page-wrapper">
	
	<div class="partners-page-wrapper__content <?php the_sub_field('partner_level')?> bg-<?php the_sub_field('partner_bg')?>">
		<div class="partners-page-wrapper__title"><h2><?php the_sub_field('partner_level_title')?></h2></div>
			<div class="partners-page-wrapper__logos">
			<?php
			
			// check if the repeater field has rows of data
			if( have_rows('partner_logos') ):
			
			 	// loop through the rows of data
			    while ( have_rows('partner_logos') ) : the_row(); ?>

			    		<div class="partners-page-wrapper__logo-image">
				        <?php $image = get_sub_field('partner_logo_image'); ?>
								<img src="<?php echo $image['url']; ?>" />
							</div>
					<?php
			    endwhile;
			
			else :
			
			    // no rows found
			
			endif;
			
			?>
		</div>
	</div>
</div>