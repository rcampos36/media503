<div class="perks-benefits--title"><h2><?php the_field('perks_and_benefits_title')?></h2></div>
<div class="perks-benefits-wrapper">
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('perks_and_benefits') ):
	
	 	// loop through the rows of data
	    while ( have_rows('perks_and_benefits') ) : the_row(); ?>
	
	        <div class="perks-benefits-wrapper--card">
	        	<div class="perks-benefits-wrapper--card-image">
	        		<?php if( get_sub_field('perk_benefits_image') ): ?>
								<img src="<?php the_sub_field('perk_benefits_image'); ?>" />
							<?php endif; ?>
						</div>
	        	<div class="perks-benefits-wrapper--card-title"><h3><?php the_sub_field('perk_befit_title')?></h3></div>
	        	<div class="perks-benefits-wrapper--card-description"><p><?php the_sub_field('perk_benefit_description')?></p></div>
	      	</div>
	<?php
	    endwhile;
	
	else :
	
	    // no rows found
	
	endif;
	
	?>
</div>