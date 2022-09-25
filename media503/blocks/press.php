<div class="press-wrapper">
	<?php
	
	// check if the repeater field has rows of data
	if( have_rows('press') ):
	
	 	// loop through the rows of data
	    while ( have_rows('press') ) : the_row(); ?>
	    	<?php
	    	$image = get_sub_field('press_image_logo');
				$link = get_sub_field('press_url');
				?>
	
	        <div class="press-wrapper--card">

	        	<?php if( $link ): ?>
							<a href="<?php echo $link; ?>" target="_blank">
						<?php endif; ?>

							<img class="press-logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

						<?php if( $link ): ?>
							</a>
						<?php endif; ?>

	      	</div>
	<?php
	    endwhile;
	
	else :
	
	    // no rows found
	
	endif;
	
	?>
</div>