<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_dev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://use.fontawesome.com/cef6882ae4.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://kit.fontawesome.com/950f5db42f.js" crossorigin="anonymous"></script>

	<script type="text/javascript">
    var MTUserId='4789e684-61ec-4731-a13e-6e85c22f700d';
    var MTFontIds = new Array();

    MTFontIds.push("5802668"); // ITC Franklin™ W01 Compressed Bold 
    (function() {
        var mtTracking = document.createElement('script');
        mtTracking.type='text/javascript';
        mtTracking.async='true';
        mtTracking.src='mtiFontTrackingCode.js';
  </script>

  <script>
(function(f,u,n,r,a,i,s,e){var data={window:window,document:document,tag:"script",data:"funraise",orgId:f,uri:u,common:n,client:r,script:a};var scripts;var funraiseScript;data.window[data.data]=data.window[data.data]||[];if(data.window[data.data].scriptIsLoading||data.window[data.data].scriptIsLoaded)return;data.window[data.data].loading=true;data.window[data.data].push("init",data);scripts=data.document.getElementsByTagName(data.tag)[0];funraiseScript=data.document.createElement(data.tag);funraiseScript.async=true;funraiseScript.src=data.uri+data.common+data.script+"?orgId="+data.orgId;scripts.parentNode.insertBefore(funraiseScript,scripts)})('a08b3e07-6fc2-4ebe-a0b7-9d5d4948464b','https://assets.funraise.io','/widget/common/2.0','/widget/client','/inject-form.js');
</script>



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<nav id="top-navigation" class="top-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'top-menu',
				'menu_id'        => 'top-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

	<header id="masthead" class="site-header">

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'left-menu',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<!-- Right Navigation -->
		<?php get_template_part('blocks/right-nav', 'block'); ?>

		<a href="#" class="dc-menu-trigger"><span>Menu</span></a>

	</header><!-- #masthead -->

	<div id="responsive-menu" class="responsive-nav">
		<div class="menu-overlay">
			<nav id="site-navigation" class="responsive-main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'left-menu',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<nav id="top-navigation" class="responsive-top-navigation ">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'top-menu',
					'menu_id'        => 'top-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</div>

	<div class="inner-hero">
			<div class="inner-hero-content">
				<div class="inner-hero-content--page-title">
					<h1><?php single_post_title(); ?></h1>
				</div>
				
				<div class="inner-hero-content--title">
					<h3><?php the_field('sub_title')?></h3>
				</div>
				<!-- <div class="inner-hero-content--paragraph">
					<p><?php the_field('paragraph')?></p>
				</div> -->
			</div>
			
	</div><!--- #site-hero --->


	<div id="content" class="site-content">
