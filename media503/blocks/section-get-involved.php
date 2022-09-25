<section class="get-involved">
	<div class="get-involved--title"><h1><?php the_field('get_involved_title')?></h1></div>
	<div class="get-involved--description"><p><?php the_field('get_involved_description')?></p></div>
	
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('get_involved_cta') ):
	
	 	// loop through the rows of data
	    while ( have_rows('get_involved_cta') ) : the_row();
	
	?>
				<div class="get-involved--cta"> 
	       	<div class="get-involved--cta-link">
	       		<a href="<?php the_sub_field('link_url');?>" target="_blank" ><?php the_sub_field('link_text');?></a>
	       	</div>
	      </div>
	<?php      
	
	    endwhile;
	
	else :
	
	    // no rows found
	
	endif;
	
	?>
</section>