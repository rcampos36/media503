<?php /* Template Name: Major Gifts Page Template */ 

get_header('inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-inner">
        
        <div class="inner-page-hero">
        <?php get_template_part('blocks/inner-page-hero-block'); ?>
        </div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- quote -->
 			<?php get_template_part('blocks/the-table-quote'); ?>

			<!-- content -->
			<?php get_template_part('blocks/the-table-content'); ?>

			<!-- carousel -->
			<?php get_template_part('blocks/the-table-carousel'); ?>

 			<!-- contact -->
 			<?php get_template_part('blocks/the-table-contact'); ?>

            <!-- Newsletter section -->
				<?php get_template_part('blocks/section', 'email'); ?>


		<?php endwhile; // End of the loop. ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
