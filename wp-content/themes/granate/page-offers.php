<?php get_header(); ?>
<div class="container">
	<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
</div>

<section class="shares">
	<div class="container">
		<div class="block-ttl">
			<?= (get_field( "title" ))?:get_the_title();  ?>
		</div><!-- .block-ttl -->
		<div class="row">
			<?php if (get_field( "title_1" )): ?>
				<div class="shares__item left__photo col-xs-8 js-auto-height">
					<div class="item__wrap">
						<div class="photo__wrap">
							<?php if (get_field( "img_1" )): ?>
								<img src="<?= get_field('img_1') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
						<div class="info__wrap">
							<div class="ttl__item blue">
								<?= get_field( "title_1" ) ?>
							</div><!-- .ttl__item -->
							<div class="descr__item">
								<?= get_field( "text_1" ) ?>
							</div><!-- .descr__item -->
						</div><!-- .info__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "title_2" )): ?>
				<div class="shares__item bottom__photo col-xs-4 js-auto-height">
					<a href="http://granate.com.ua/kompleksnaya-terapiya/">
						<div class="item__wrap">
							<div class="info__wrap">
								<div class="ttl__item green">
									<?= get_field( "title_2" ) ?>
								</div><!-- .ttl__item -->
								<div class="descr__item">
									<?= get_field( "text_2" ) ?>
								</div><!-- .descr__item -->
							</div><!-- .info__wrap -->
							<div class="photo__wrap">
								<?php if (get_field( "img_2" )): ?>
									<img src="<?= get_field('img_2') ?>" alt="" />
								<?php endif; ?>
							</div><!-- .photo__wrap -->
						</div><!-- .item-wrap -->
					</a>
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_3" )): ?>
				<div class="shares__item bottom__photo col-xs-6 js-auto-height">
					<div class="item__wrap">
						<div class="photo__wrap">
							<?php if (get_field( "img_3" )): ?>
								<img src="<?= get_field('img_3') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
						<div class="info__wrap">
							<div class="descr__item">
								<?= site_without_p(get_field( "text_3" )) ?>
							</span>
						</div><!-- .descr__item -->
					</div><!-- .info__wrap -->
				</div><!-- .item-wrap -->
			</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_4" )): ?>
				<div class="shares__item right__photo col-xs-6 js-auto-height">
					<div class="item__wrap">
						<div class="info__wrap">
							<?= site_without_p(get_field( "text_4" )) ?>
						</div><!-- .info__wrap -->
						<div class="photo__wrap">
							<?php if (get_field( "img_4" )): ?>
								<img src="<?= get_field('img_4') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_5" )): ?>
				<div class="shares__item right__photo famaly col-xs-8 js-auto-height">
					<div class="item__wrap">
						<div class="info__wrap">
							<div class="descr__item">
								<?= site_without_p(get_field( "text_5" )) ?>
							</div><!-- .descr__item -->
						</div><!-- .info__wrap -->
						<div class="photo__wrap">
							<?php if (get_field( "img_5" )): ?>
								<img src="<?= get_field('img_5') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_6" )): ?>
				<div class="shares__item bottom__photo col-xs-4 js-auto-height">
					<div class="item__wrap">
						<div class="photo__wrap">
							<?php if (get_field( "img_6" )): ?>
								<img src="<?= get_field('img_6') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
						<div class="info__wrap">
							<?= site_without_p(get_field( "text_6" )) ?>
						</div><!-- .info__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_7" )): ?>
				<div class="shares__item right__photo pensioners col-xs-6 js-auto-height">
					<div class="item__wrap">
						<div class="info__wrap">
							<div class="descr__item">
								<?= site_without_p(get_field( "text_7" )) ?>
							</div><!-- .descr__item -->
						</div><!-- .info__wrap -->
						<div class="photo__wrap">
							<?php if (get_field( "img_7" )): ?>
								<img src="<?= get_field('img_7') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_8" )): ?>
				<div class="shares__item bottom__photo col-xs-6 js-auto-height">
					<div class="item__wrap">
						<div class="photo__wrap">
							<?php if (get_field( "img_8" )): ?>
								<img src="<?= get_field('img_8') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
						<div class="info__wrap">
							<?= site_without_p(get_field( "text_8" )) ?>
						</div><!-- .info__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_9" )): ?>
				<div class="shares__item bottom__photo col-xs-4 js-auto-height">
					<div class="item__wrap">
						<div class="photo__wrap">
							<?php if (get_field( "img_9" )): ?>
								<img src="<?= get_field('img_9') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
						<div class="info__wrap">
							<?= site_without_p(get_field( "text_9" )) ?>
						</div><!-- .info__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_10" )): ?>
				<div class="shares__item right__photo date col-xs-8 js-auto-height">
					<div class="item__wrap">
						<div class="info__wrap">
							<div class="descr__item">
								<?= site_without_p(get_field( "text_10" )) ?>
							</div><!-- .descr__item -->
						</div><!-- .info__wrap -->
						<div class="photo__wrap">
							<?php if (get_field( "img_10" )): ?>
								<img src="<?= get_field('img_10') ?>" alt="" />
							<?php endif; ?>
						</div><!-- .photo__wrap -->
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>

			<?php if (get_field( "text_11" )): ?>
				<div class="shares__item col-xs-12 js-auto-height">
					<div class="item__wrap">
						<?php if (get_field( "img_11" )): ?>
							<img src="<?= get_field('img_11') ?>" alt="" />
						<?php endif; ?>
						<?= site_without_p(get_field( "text_11" )) ?>
					</div><!-- .item-wrap -->
				</div><!-- .shares__item -->
			<?php endif; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .action -->

<?php get_footer(); ?>
