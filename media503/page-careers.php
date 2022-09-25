<?php /* Template Name: Career Page Template */ 

get_header('inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-inner">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- Heading and Texty -->
 			<?php get_template_part('blocks/heading-and-text'); ?>

			<!-- VALUES -->
			<?php get_template_part('blocks/values'); ?>

			<!-- PERKS AND BENEFITS -->
			<?php get_template_part('blocks/perks', 'benefits'); ?>

 			<!-- TESTIMONIALS -->
 			<?php get_template_part('blocks/testimonials'); ?>

			<!-- OPENINGS -->
 			<?php get_template_part('blocks/openings'); ?>

		<?php endwhile; // End of the loop. ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
