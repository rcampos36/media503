<!-- CORE VALUES -->
<div class="core-values--title"><h2><?php the_field('core_values_title')?></h2></div>
<div class="core-values-wrapper">
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('core_values') ):
	
	 	// loop through the rows of data
	    while ( have_rows('core_values') ) : the_row(); ?>
	
	        <div class="core-values-wrapper--card">
	        	<div class="core-values-wrapper--card-title"><h1><?php the_sub_field('core_value_title')?></h1></div>
	        	<div class="core-values-wrapper--card-description"><p><?php the_sub_field('core_value_description')?></p></div>
	      	</div>
	<?php
	    endwhile;
	
	else :
	
	    // no rows found
	
	endif;
	
	?>
	</div>