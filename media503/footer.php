<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_dev
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="site-footer--content">
			<div class="site-footer--widgets">
				<div class="site-footer--widgets-1">
					<?php
						if(is_active_sidebar('footer-1')){
						dynamic_sidebar('footer-1');
						}
					?>
				</div>

				<div class="site-footer--widgets-2">
					<?php
						if(is_active_sidebar('footer-2')){
						dynamic_sidebar('footer-2');
						}
					?>
				</div>

				<div class="site-footer--widgets-3">
					<div class="social-icons text-left">
						<p>Follow Us:</p>
					  <a href="https://www.instagram.com/liftcommunities/" target="_blank"><i class="fab fa-instagram"></i></a>

					  <a href="https://www.facebook.com/LIFTcommunities" target="_blank"><i class="fab fa-facebook"></i></a>

					  <a href="https://www.youtube.com/user/liftcommunities" target="_blank"><i class="fab fa-youtube"></i></a>

					   <a href="https://twitter.com/LIFTcommunities" target="_blank"><i class="fab fa-twitter"></i></a>

					   <a href="https://www.linkedin.com/company/lift-inc/" target="_blank"><i class="fab fa-linkedin"></i></i></a>

					</div>
				</div>

				<div class="email-signup">
					<div class="email-signup-title">
						<P>Stay Informed:</P>
					</div>
				  <a title="Sign Up for Updates" rel="signup-modal" href="http://whywelift.org" class="stay-conneted-btn signup-link modal-open" data-modal-target="#signup-modal">Sign-up To Our Newsletter</a>
				  <div class="search-button">
						<a href="/search_gcse/"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></a>
					</div>
				</div>
		</div>
		
	</footer><!-- #colophon -->
	<div class="overlay modal signup-modal hidden" id="signup-modal">
		<div class="container">
			<div class="section white">
				<h3>Stay Connected</h3>
				<p class="small">Subscribe to our email list for updates on the latest LIFT news and events.</p>
				
					<form id="subForm" class="js-cm-form cf" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="2BE4EF332AA2E32596E38B640E905619FDA6269D1DE0859E6D10F8C006D5E66F787FA305C3AE235E80C932E6900B7EE31D63841E8993DCD48DEE830A6689979A">
						<p class="half left">
							<label for="fieldName">Name</label>
							<input id="fieldName" name="cm-name" type="text">
						</p>
						<p class="half right">
							<label class="required" for="fieldEmail">Email</label>
							<input id="fieldEmail" name="cm-ediqt-ediqt" type="email" class="js-cm-email-input" required="">
						</p>
						<button class="js-cm-submit-button right" type="submit">Subscribe</button>
					</form>
				<script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
				<div class="close" title="Close">Close</div>
			</div><!-- .section.white -->
		</div><!-- .container -->
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>
<div id="scroll-bottom"></div>

<script type="text/javascript">
	var s = skrollr.init({
		beforerender: function(data) {
        return data.curTop > data.lastTop;
    }
	});
	</script>

	<!-- Funraise embed code -->
	<script>
	(function(f,u,n,r,a,i,s,e){var data={window:window,document:document,tag:"script",data:"funraise",orgId:f,uri:u,common:n,client:r,script:a};var scripts;var funraiseScript;data.window[data.data]=data.window[data.data]||[];if(data.window[data.data].scriptIsLoading||data.window[data.data].scriptIsLoaded)return;data.window[data.data].loading=true;data.window[data.data].push("init",data);scripts=data.document.getElementsByTagName(data.tag)[0];funraiseScript=data.document.createElement(data.tag);funraiseScript.async=true;funraiseScript.src=data.uri+data.common+data.script+"?orgId="+data.orgId;scripts.parentNode.insertBefore(funraiseScript,scripts)})("a08b3e07-6fc2-4ebe-a0b7-9d5d4948464b","https://assets.funraise.io","/widget/common/2.0","/widget/client","/inject-form.js");
	</script>

	<!-- Funraise form code -->
	<script>
	window.funraise.push('create', {form: 8463});
	</script>
</body>
</html>
