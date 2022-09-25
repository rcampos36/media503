<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wordpress_dev
 */

get_header('blog-inner');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="blog-post">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="post-image" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
				<?php
				the_content();

				the_post_navigation();
				
				// // If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
