<?php /* Template Name: Search Results Page Template */ 

/**
 * The search results template file.
 *
 * @package LIFT Communities
 * @since LIFT Communities 1.0
 */

get_header('search');
$s = get_search_query();
?>

<div class="container">

	<?php get_search_form(); ?>

	<?php if (!empty($s)) : ?>
		<h2>Results for: <b><?php echo $s; ?></b></h2>
	<?php endif; ?>

	<!-- google custom search -->
	<script type="text/javascript">
		window.__gcse = {
			callback: liftCustomSearchCallback
		};
		function liftCustomSearchCallback() {
			// when performing a new search,
			// use the same refinement label that is currently active
			$('#searchform').submit(function(e){
				var $refinement = $('#searchform [name=refinement]');
				// all
				if (!$('.gsc-tabhActive:visible').length || $('.gsc-tabhActive:visible').text().toLowerCase() == 'all') {
					$refinement.attr('disabled', 'disabled');
				}
				// blog
				else {
					$refinement.removeAttr('disabled');
				}
			});
		}
		(function() {
			var cx = 'd50d759a868c7dd4e';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		})();
	</script>
	<div id="lift-search-results">

		<?php
			$gcse_attributes = array(
				'gname' => 'lift-search-results',
				'queryParameterName' => 's',
				'linkTarget' => '_self'
			);

			if (!empty($_REQUEST['refinement']) && $_REQUEST['refinement'] == 'blog') {
				$gcse_attributes['defaultToRefinement'] = 'blog';
			}

			// build html attribute string
			$gcse_attribute_string = '';
			foreach ($gcse_attributes as $att=>$val) {
				$gcse_attribute_string .= ' ' . $att . '="' . $val . '"';
			}
		?>

		<gcse:searchresults-only<?php echo $gcse_attribute_string; ?>></gcse:searchresults-only>

	</div><!-- #lift-search-results -->

</div><!-- .container -->

<?php get_footer(); ?>