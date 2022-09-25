<?php /* Template Name: Partners Page Template */ 

get_header('blog');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if( have_rows('partners_page_content') ): ?>

    <?php while ( have_rows('partners_page_content') ) : the_row();?>

      <?php if (get_row_layout() == 'partners_page_intro'):?>
        <!-- 	partners block -->
        <?php get_template_part('blocks/partners-page-intro', 'block'); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'partner_logos'):?>
        <!-- 	partners block -->
        <?php get_template_part('blocks/partners-page-logos', 'block'); ?>
      <?php endif;?>

  <?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
