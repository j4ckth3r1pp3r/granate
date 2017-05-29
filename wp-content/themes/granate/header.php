<!DOCTYPE html>
<html lang="ru">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M5LCK5V');</script>
<!-- End Google Tag Manager -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <meta name="viewport" content="initial-scale=1, minimum-scale=1, user-scalable=yes"> -->
	<title><?php echo wp_get_document_title(); ?></title>
	<link href="<?= THEME_URL ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<div id="main">
	<div id="check" class="zoom-anim-dialog mfp-hide">
		<div class="top">
			<h3>Спасибо за заявку!</h3>
		</div>
		<div class="bottom">
			<span>
				Мы свяжемся свами в ближайшее время
			</span>
		</div>
	</div>
	<div id="call-back" class="header-callback zoom-anim-dialog mfp-hide">
		<h2>Записаться на консультацию</h2>
		<?= do_shortcode('[contact-form-7 id="551" title="Header"]') ?>
	</div>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="left col-xs-6">
							<a href="<?= SITE_URL ?>" class="logo">
								<img src="<?= THEME_URL ?>/images/logo.png" alt="logo" />
							</a>
							<?php if ( option_field( "tagline" ) ): ?>
								<span class="desc"><?= option_field( "tagline" ) ?></span>
							<?php endif; ?>
							<div class="address">
								<span>
									<?= str_replace('<br />', '', option_field( "address" )) ?>
								</span>
							</div>
						</div>
						<div class="stock stock-more">
							<img src="<?= THEME_URL ?>/images/logo_Granate.png">
							<p><?= get_field( "yellow_text", "option" ) ?> <a href="<?= get_field( "yellow_link", "option" ) ?>"><?= (get_field( "yellow_link_text" ))?:preg_replace('/((http:\/\/){0,1}([^\/]*).*)/', '$3', get_field( "yellow_link", "option" )) ?></a></p>
						</div>
						<div class="right">
							<div class="wrap">
								<div class="left-phone-bl">
									<?php if (option_field( "phones" )): ?>
										<a href="tel:+38<?= option_field( "phones" )[0]['phone'] ?>"><?= site_format_phone( option_field( "phones" )[0]['phone'] ) ?></a><br>
									<?php endif; ?>
									<?php if (option_field( "worktime" )): ?>
										<div class="work-time"><?= site_without_p(option_field( "worktime" )) ?></div>
									<?php endif; ?>
								</div>
								<?php if (option_field( "phones" )): $i = 0; ?>
									<!-- <ul class="right-phone-bl">
										<?php while (have_rows('phones', 'option')) : the_row(); ?>
											<?php if ($i > 0): ?>
												<li><a href="tel:+38<?= get_sub_field( "phone" ) ?>" class="dr_down"><?= site_format_phone( get_sub_field( "phone" ) ) ?></a></li>
											<?php endif; ?>
										<?php $i++; endwhile; ?>
									</ul> -->
									<ul class="right-phone-bl">															<li><a href="tel:+380935103510" class="dr_down">093-510-3-510</a></li>
										<li><a href="tel:+380955582929" class="dr_down">095-558-29-29</a></li>
										<li><a href="tel:+380965682929" class="dr_down">096-568-29-29</a></li>
									</ul>
								<?php endif; ?>
								<div class="clr"></div>
							</div>
							<a href="#call-back" class="btn small-btn green popup-with-zoom-anim">
								Записаться на консультацию
							</a>
							<div class="clr"></div>
							<?php if (option_field( "facebook" ) || option_field( "instagram" )): ?>
								<div class="social">
								<a href="<? SITE_URL ?>/blog" class="blog">блог</a>
									<?php if (option_field( "facebook" )): ?>
										<a href="<?= option_field( "facebook" ) ?>">
											<img src="<?= THEME_URL ?>/images/facebook-logo-black.svg" alt="" />
										</a>
									<?php endif; ?>
									<?php if (option_field( "instagram" )): ?>
										<a href="<?= option_field( "instagram" ) ?>">
											<img src="<?= THEME_URL ?>/images/instagram-symbol-black.svg" alt="" />
										</a>
									<?php endif; ?>
								</div><!-- .social -->
							<?php endif; ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</header>
	<nav class="navigation">
		<div class="container">
			<ul class="navigation__items items">
				<?php site_menu([
					'id' => 2,
					'li_class' => 'items__item item',
					'a_class' => 'item__link'
				]); ?>
			</ul><!-- .navigation-items items -->
		</div><!-- .container -->
	</nav><!-- .navigation -->
