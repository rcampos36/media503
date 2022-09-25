<section class="ctas">
	<div class="hope-money-love">
		<div id="popup1" class="hope--popup">
			<span class="modal-close">&#10006;</span>
			<div class="popup-wrapper">
				<div class="popup-wrapper--content">
					<div class="hope--popup--title"><h3><?php the_field('hope_popup_title')?></h3></div>
					<div class="hope--popup--image">
						<?php if( get_field('hope_popup_image') ): ?>
							<img src="<?php the_field('hope_popup_image'); ?>" />
						<?php endif; ?>
						</div>
				</div>
				<p><?php the_field('hope_popup_content')?></p>
			</div>
		</div>
		<div id="popup2" class="money--popup">
			<span class="modal-close">&#10006;</span>
			<div class="popup-wrapper">
				<div class="popup-wrapper--content">
					<div class="money--popup--title"><h3><?php the_field('money_popup_title')?></h3></div>
					<div class="money--popup--image">
						<?php if( get_field('money_popup_image') ): ?>
							<img src="<?php the_field('money_popup_image'); ?>" />
						<?php endif; ?>
						</div>
				</div>
				<p><?php the_field('money_popup_content')?></p>
			</div>
		</div>
		<div id="popup3" class="love--popup">
			<span class="modal-close">&#10006;</span>
			<div class="popup-wrapper">
				<div class="popup-wrapper--content">
					<div class="love--popup--title"><h3><?php the_field('love_popup_title')?></h3></div>
					<div class="love--popup--image">
						<?php if( get_field('love_popup_image') ): ?>
							<img src="<?php the_field('love_popup_image'); ?>" />
						<?php endif; ?>
						</div>
				</div>
				<p><?php the_field('love_popup_content')?></p>
			</div>
		</div>
	</div>

		<div class="ctas--mission"><?php the_field('mission_statement')?></div>
		<h2 class="ctas--sub-mission"><?php the_field('sub_mission')?></h2>
		<div class="cta--wrapper">
			<div class="cta">
				<div class="cta-hope--icon"> 
					<?php if( get_field('hope_icon') ): ?>
					    <img src="<?php the_field('hope_icon'); ?>" />
					<?php endif; ?>
				</div>
				<div class="cta-hope--title"><h1><?php the_field('hope_title')?></h1></div>
				<div class="cta-hope--description align-text__<?php the_field('hope_align_text')?>"><p><?php the_field('hope_mission_description')?></p></div>
				<div class="cta-hope--link-1 popup" data-panelid="popup1" href="<?php the_field('hope_button_url');?>"><?php the_field('hope_button_text');?></div>
			</div>
			<div class="cta">
				<div class="cta-money--icon"> 
					<?php if( get_field('money_icon') ): ?>
					    <img src="<?php the_field('money_icon'); ?>" />
					<?php endif; ?>
				</div>
				<div class="cta-money--title"><h1><?php the_field('money_title')?></h1></div>
				<div class="cta-money--description align-text__<?php the_field('money_align_text')?>"><p><?php the_field('money_mission_description')?></p></div>
				<div class="cta-money--link-2 popup" data-panelid="popup2" href="<?php the_field('money_button_url');?>"><?php the_field('money_button_text');?></div>
			</div>
			<div class="cta">
				<div class="cta-love--icon"> 
					<?php if( get_field('love_icon') ): ?>
					    <img src="<?php the_field('love_icon'); ?>" />
					<?php endif; ?>
				</div>
				<div class="cta-love--title"><h1><?php the_field('love_title')?></h1></div>
				<div class="cta-love--description align-text__<?php the_field('love_align_text')?>"><p><?php the_field('love_mission_description')?></p></div>
				<div class="cta-love--link-3 popup" data-panelid="popup3" href="<?php the_field('love_button_url');?>"><?php the_field('love_button_text');?></div>
			</div>
	</div>
</section>