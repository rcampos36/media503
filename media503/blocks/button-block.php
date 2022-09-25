<div class="rergional-page-wrapper">
	
	<div class="rergional-page-wrapper__buttons">
		
		<?php
		
		// check if the repeater field has rows of data
		if( have_rows('button') ):
		
		 	// loop through the rows of data
		    while ( have_rows('button') ) : the_row(); ?>
		
		    <a href="<?php the_sub_field('button_link'); ?>" class="rergional-page-wrapper__buttons__button">
	        <?php the_sub_field('button_text'); ?>
	      </a>
			<?php
		    endwhile;
		
		else :
		
		    // no rows found
		
		endif;
		
		?>
	</div>
</div>