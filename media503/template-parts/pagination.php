<?php
/**
 * Pagination
 */

$perpage = !empty($wp_query->query_vars['posts_per_page']) ? $wp_query->query_vars['posts_per_page'] : get_option('posts_per_page');
$found = $wp_query->found_posts;
?>

<?php if ($found > $perpage) : ?>
	<div class="pagination">
		<?php echo paginate_links(array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => 'page/%#%',
			'total' => ceil($found/$perpage),
			'current' => max(1, get_query_var('paged')),
			'prev_text' => '&lsaquo; Prev',
			'next_text' => 'Next &rsaquo;'
		)); ?>
	</div>
<?php endif; ?>
