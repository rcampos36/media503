<?php /* Template Name: Press Page Template */ 

get_header('inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-inner">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
		
			<?php get_template_part('blocks/press'); ?>
			
				<?php endwhile; ?>
			<?php endif; ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
