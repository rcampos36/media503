<div class="openings">
		<div class="openings-wrapper--title"><h2><?php the_field('opening_title')?></h2></div>
		<div class="openings-wrapper">
			<div class="job-openeings">
				<?php the_field('job_postings')?>
			</div>
		<?php
			
			// check if the repeater field has rows of data
			if( have_rows('openings') ):
			
			 	// loop through the rows of data
			    while ( have_rows('openings') ) : the_row(); ?>
			
			      <div class="openings-wrapper--card">
		        	<div class="openings-wrapper--card-title"><h5><?php the_sub_field('opening_title')?></h5></div>
		        	<div class="openings-wrapper--card-location"><p><?php the_sub_field('opening_location')?></p></div>
		        	<a class="openings-wrapper--link" href="<?php the_sub_field('opening_url');?>" target="_blank"><?php the_sub_field('opening_url_text');?></a> 
	      		</div>
				<?php
			    endwhile;
			
			else :
			
			    // no rows found
			
			endif;
			
			?> 

			
	</div>
	<div class="openings-wrapper--footer">
		<div class="openings-wrapper--footer-title"><h3><?php the_field('opening_footer_title')?></h3></div>
		<div class="openings-wrapper--footer-info"><p><?php the_field('opening_footer_info')?></p></div>
	</div>
</div>