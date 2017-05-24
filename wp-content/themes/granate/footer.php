<?php if (option_field( "location" )): $location = option_field( "location" ) ?>
	<div id="map" data-lat="<?= $location['lat'] ?>" data-lng="<?= $location['lng'] ?>">
		<div id="map-canvas" style="position: relative; overflow: hidden;"></div>
		<div class="info-wrap">
			<div class="address">
				<span>
					<?= option_field( "address" ) ?>
				</span>
			</div><!-- .address -->
			<div class="enter">
				<span>
					<?= option_field( "address_desc" ) ?>
				</span>
			</div><!-- .enter -->
			<?php if (have_rows('phones', 'option')): ?>
				<div class="number">
					<span>
						044-36-36-003
					</span>
					<span>
						093-510-3-510
					</span>
					<span>
						095-558-29-29
					</span>
					<span>
						096-568-29-29
					</span>
				</div>
				<!-- <div class="number">
					<?php while (have_rows('phones', 'option')) : the_row(); ?>
						<span>
							<?= site_format_phone( get_sub_field( "phone" ) ) ?>
						</span>
					<?php endwhile; ?>
				</div> -->
			<?php endif; ?>
			<div class="buttons">
				<a href="#call-back" class="btn small-btn green popup-with-zoom-anim">
					Записаться на консультацию
				</a>
			</div><!-- .buttons -->
			<?php if (option_field( "facebook" ) || option_field( "instagram" )): ?>
				<div class="social">
					<span>
						Присоединяйтесь к нам в соц сетях
					</span>
					<?php if (option_field( "facebook" )): ?>
						<a href="<?= option_field( "facebook" ) ?>">
							<img src="<?= THEME_URL ?>/images/facebook-logo.svg" alt="" />
						</a>
					<?php endif; ?>
					<?php if (option_field( "instagram" )): ?>
						<a href="<?= option_field( "instagram" ) ?>">
							<img src="<?= THEME_URL ?>/images/instagram-symbol.svg" alt="" />
						</a>
					<?php endif; ?>
				</div><!-- .social -->
			<?php endif; ?>
		</div><!-- .info-wrap -->
	</div><!-- #map -->
<?php endif; ?>
<footer>
	<div class="container">
		<div class="row">
			<div class="footer__logo logo col-xs-2">
				<img src="<?= THEME_URL ?>/images/logo.png" alt="" class="logo__img" />
			</div><!-- .footer-logo logo -->
			<nav class="footer__navigation col-xs-6 col-xs-offset-1">
				<ul class="items">
					<?php site_menu([
						'id' => 2,
						'li_class' => 'item',
						'a_class' => 'footer-nav link'
					]); ?>
				</ul><!-- .items -->
			</nav><!-- .footer__navigation -->
			<div class="license col-xs-3">
				<span class="granate__license">
					<?= option_field( "license" ) ?>
				</span>
				<div class="developers">
					<span>Сделано в</span>
					<img src="<?= THEME_URL ?>/images/logo-dev.svg" alt="" />
				</div><!-- .developers -->
			</div><!-- .license col-xs-3 -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5LCK5V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_footer(); ?>
</div>
</body>
</html>
