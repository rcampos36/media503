<?php /* Template Name: Home Page Template */ 

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="main-content">
				<!-- mobile hero content -->
				<?php get_template_part('blocks/mobile-hero', 'content'); ?>
				
				<!-- CTAS section -->
				<?php get_template_part('blocks/section', 'ctas'); ?>

				<!-- Quote section -->
				<?php get_template_part('blocks/section', 'quote'); ?>
				
				<!-- How We Lift section -->
				<?php get_template_part('blocks/section', 'how'); ?>

				<!-- Where We Lift section -->
				<?php get_template_part('blocks/section', 'where'); ?>

				<!-- Get Involved section -->
				<?php get_template_part('blocks/section-get', 'involved'); ?>

				<!-- Newsletter section -->
				<?php get_template_part('blocks/section', 'email'); ?>

				<!-- Blog section -->
				<?php //get_template_part('blocks/section', 'blog'); ?>
				
				<!-- Social Feed section -->
				<?php get_template_part('blocks/section', 'social'); ?>
				
			</div>

		<?php endwhile; // End of the loop. ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
