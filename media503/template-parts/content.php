<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress_dev
 */

?>
<a class="post" href="<?php the_permalink(); ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-image" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
			<header class="entry-header">
				<div class="entry-meta">
					<?php echo get_the_date('F j, Y'); ?> 
				</div><!-- .entry-meta -->
				<div class="post-title">
					<h2><?php the_title(); ?></h2>
				</div>
			</header><!-- .entry-header -->
	</article><!-- #post-<?php the_ID(); ?> -->
</a>