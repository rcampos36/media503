<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wordpress_dev
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			// Get the featured image
			if( has_post_thumbnail() ){
				$featuredimg = get_the_post_thumbnail_url();
			} else {
				$featuredimg = 'PATH-TO-DEFAULT-IMAGE';
			}

			// Get title field
			if( get_field('sample_label') ){
				$title = get_field('sample_label');
			}
			?>

		<?php
		while ( have_posts() ) : the_post(); 	?>
			<div class="hero" style="background-image: url(<?php echo $featuredimg; ?>);"> 

				<div class="title">
					<?php echo $title; ?>
				</div>
				
			</div>
			
		<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
