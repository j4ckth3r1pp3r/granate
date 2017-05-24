<?php get_header(); ?>
	<div class="first-screen">
		<div class="container">
			<div class="row">
				<?php if (option_field( "slider" )): ?>
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php while (have_rows('slider', 'option')) : the_row(); ?>
								<div class="swiper-slide">
									<div class="container">
										<div class="row">
											<div class="info col-xs-6">
												<div class="text__wrap">
													<?= get_sub_field( "title" ) ?>
												</div><!-- .text__wrap -->
											</div><!-- .info col-xs-6 -->
											<div class="slide-photo col-xs-6">

											</div><!-- .photo col-xs-6 -->
										</div><!-- .row -->
									</div><!-- .container -->
								</div>
							<?php endwhile; ?>

						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				<?php endif; ?>
			</div><!-- .row -->
			<div class="form-of-record_wrap">
				<div class="form-of-record">
					<h4 class="ttl">
						Записаться на прием к врачу
					</h4><!-- .ttl -->
					<span class="close">
						<img src="<?= THEME_URL ?>/images/close.png" alt="">
					</span>
					<form action="">
						<div class="row">
							<div class="col-xs-6">
								<input type="text" name=name/ placeholder="Имя">
								<input type="text" name=tel/ placeholder="Телефон">
							</div><!-- .col-xs-6 -->
							<div class="col-xs-6">
								<input type="text" id="datepicker" placeholder="Дата">
								<select name="consultation" id="">
									<option value="Консультация">Консультация</option>
									<option value="Консультация">Консультация</option>
									<option value="Консультация">Консультация</option>
									<option value="Консультация">Консультация</option>
								</select>
								<button class="btn green small-btn" type="submit">Записаться</button>
							</div><!-- .col-xs-6 -->
						</div><!-- .row -->
					</form>
				</div>
			</div><!-- .form-of-record -->
			<button class="btn green bottom">Записаться</button>
		</div><!-- .container -->
	</div><!-- .first-screen -->
	<section id="our-services" class="our-services">
		<div class="container">
			<h2 class="block-ttl center">
				Наши услуги
			</h2><!-- .block-ttl -->
			<div class="row">
				<div class="our-services__items items">
					<div class="row">
						<?php if (option_field( "services_title_1" )): ?>
							<div class="items__implant item col-xs-4">
								<div class="item__name">
									<?= option_field( "services_title_1" ) ?>
								</div><!-- .item__name -->
								<div class="item__img-wrap img-wrap">
									<img src="<?= option_field( "services_img_1" ) ?>" alt="" class="img-wrap__img" />
									<?php if (option_field( "services_link_1" )): ?>
										<a class="img-wrap__btn btn" href="<?= option_field('services_link_1') ?>">
											Подробнее
										</a><!-- .img-wrap__btn btn -->
									<?php endif; ?>
								</div><!-- .item__img-wrap img-wrap -->
							</div><!-- .items_implant item -->
						<?php endif; ?>

						<div class="items__implants-two item col-xs-4">
							<?php if (option_field( "services_title_2" )): ?>
								<div class="items__implant item">
									<div class="item__name">
										<?= option_field( "services_title_2" ) ?>
									</div><!-- .item__name -->
									<div class="item__img-wrap img-wrap">
										<img src="<?= option_field( "services_img_2" ) ?>" alt="" class="img-wrap__img" />
										<?php if (option_field( "services_link_2" )): ?>
											<a class="img-wrap__btn btn" href="<?= option_field('services_link_2') ?>">
												Подробнее
											</a><!-- .img-wrap__btn btn -->
										<?php endif; ?>
									</div><!-- .item__img-wrap img-wrap -->
								</div><!-- .items_implant item -->
							<?php endif; ?>
							<?php if (option_field( "services_title_3" )): ?>
								<div class="items__implant item">
									<div class="item__name">
										<?= option_field( "services_title_3" ) ?>
									</div><!-- .item__name -->
									<div class="item__img-wrap img-wrap">
										<img src="<?= option_field( "services_img_3" ) ?>" alt="" class="img-wrap__img" />
										<?php if (option_field( "services_link_3" )): ?>
											<a class="img-wrap__btn btn" href="<?= option_field('services_link_3') ?>">
												Подробнее
											</a><!-- .img-wrap__btn btn -->
										<?php endif; ?>
									</div><!-- .item__img-wrap img-wrap -->
								</div><!-- .items_implant item -->
							<?php endif; ?>

						</div><!-- .items__implants-two item col-xs-4 -->
						<?php if (option_field( "services_title_4" )): ?>
							<div class="items__implant item col-xs-4">
								<div class="item__name">
									<?= option_field( "services_title_4" ) ?>
								</div><!-- .item__name -->
								<div class="item__img-wrap img-wrap">
									<img src="<?= option_field( "services_img_4" ) ?>" alt="" class="img-wrap__img" />
									<?php if (option_field( "services_link_4" )): ?>
										<a class="img-wrap__btn btn" href="<?= option_field('services_link_4') ?>">
											Подробнее
										</a><!-- .img-wrap__btn btn -->
									<?php endif; ?>
								</div><!-- .item__img-wrap img-wrap -->
							</div><!-- .items_implant item -->
						<?php endif; ?>
						<?php if (option_field( "services_title_5" )): ?>
							<div class="items__implant item col-xs-6">
								<div class="item__name">
									<?= option_field( "services_title_5" ) ?>
								</div><!-- .item__name -->
								<div class="item__img-wrap img-wrap">
									<img src="<?= option_field( "services_img_5" ) ?>" alt="" class="img-wrap__img" />
									<?php if (option_field( "services_link_5" )): ?>
										<a class="img-wrap__btn btn" href="<?= option_field('services_link_5') ?>">
											Подробнее
										</a><!-- .img-wrap__btn btn -->
									<?php endif; ?>
								</div><!-- .item__img-wrap img-wrap -->
							</div><!-- .items_implant item -->
						<?php endif; ?>
						<?php if (option_field( "services_title_6" )): ?>
							<div class="items__implant item col-xs-6">
								<div class="item__name">
									<?= option_field( "services_title_6" ) ?>
								</div><!-- .item__name -->
								<div class="item__img-wrap img-wrap">
									<img src="<?= option_field( "services_img_6" ) ?>" alt="" class="img-wrap__img" />
									<?php if (option_field( "services_link_6" )): ?>
										<a class="img-wrap__btn btn" href="<?= option_field('services_link_6') ?>">
											Подробнее
										</a><!-- .img-wrap__btn btn -->
									<?php endif; ?>
								</div><!-- .item__img-wrap img-wrap -->
							</div><!-- .items_implant item -->
						<?php endif; ?>

					</div><!-- .row -->
				</div><!-- .our-services__items items -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- #our-services.our-services -->
	<?php if (have_rows('why_us_list', 'option')): ?>
		<section class="why-we">
			<div class="container">
				<div class="block-ttl center">
					Почему выбирают нас
				</div><!-- .block-ttl -->
				<!-- <div class="advantages">
					<div class="row">
						<?php while (have_rows('why_us_list', 'option')) : the_row(); ?>
							<div class="advantages-item col-xs-4 js-auto-height">
								<div class="item__wrap">
									<div class="wrap-ttl">
										<?php
										  $image = (get_sub_field( "icon" )) ? get_image_field( get_sub_field( "icon" ), "why-us-icon" ) : THEME_URL.'/images/map.png';
										?>
										<img src="<?= $image ?>" alt="" class="ttl__img" />
										<h3 class="ttl__text"><?= get_sub_field( "title" ) ?></h3>
									</div>
									<span class="wrap-text">
										<?= site_without_p(get_sub_field( "desc" )) ?>
									</span>
									<a href="" class="wrap__button btn hidden">
										Посмотреть карту
									</a>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div> -->
				<?php $whyus_slider = get_field( "whyus_slider", "option" ) ?>
				<?php if ($whyus_slider): ?>
					<div class="swiper-container-why-we">
						<div class="swiper-wrapper">
							<?php foreach ($whyus_slider as $image): ?>
								<div class="swiper-slide">
									<img src="<?= get_image_field($image, 'xlarge') ?>"></img>
								</div>
							<?php endforeach; ?>
						</div>
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>
					</div>
				<?php endif; ?>
			</div><!-- .container -->
		</section><!-- .why-we -->
	<?php endif; ?>
	<?php if (option_field( "desc_title" ) || option_field( "desc_text" )): ?>
		<section class="best-dentistry">
			<div class="container">
				<div class="block-ttl center">
					<?= option_field( "desc_title" ) ?>
				</div><!-- .block-ttl -->
				<div class="text-wrap">
					<p class="text-wrap__p">
						<?= option_field( "desc_text" ) ?>
					</p><!-- .text-wrap__p -->
					<a href="#" class="open-bottom">
						<img src="<?= THEME_URL ?>/images/bottom-btn.svg" alt="" class="open-bottom__img" />
					</a>
				</div><!-- .text-wrap -->
			</div><!-- .container -->
		</section><!-- .best-dentistry -->
	<?php endif; ?>
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

<?php get_footer(); ?>
