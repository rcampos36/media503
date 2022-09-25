<?php /* Template Name: Regional Page Template */ 

get_header('blog');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if( have_rows('regional_page_content') ): ?>

    <?php while ( have_rows('regional_page_content') ) : the_row();?>

      <?php if (get_row_layout() == 'regional_page_intro'):?>
        <!-- 	regional intro block -->
        <?php get_template_part('blocks/partners-page-intro', 'block'); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'fy_impact'):?>
        <!-- 	  regional FY Impact block -->
        <?php get_template_part('blocks/fy-impact', 'block'); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'advocacy_work'):?>
        <!--    regional Advocacy block -->
        <?php get_template_part('blocks/advocacy-work', 'block'); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'button_component'):?>
        <!--    regional Button block -->
        <?php get_template_part('blocks/button', 'block'); ?>
      <?php endif;?>

       <?php if (get_row_layout() == 'partner_logos'):?>
        <!--  partners block -->
        <?php get_template_part('blocks/partners-page-logos', 'block'); ?>
      <?php endif;?>

      <?php if (get_row_layout() == 'contact_component'):?>
        <!--  contact block -->
        <?php get_template_part('blocks/contact-info', 'block'); ?>
      <?php endif;?>

  <?php endwhile; endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
