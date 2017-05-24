<?php get_header(); ?>

<?php
  $args = [
		'post_type' => 'service',
		'post_status' => 'publish',
		'order' => 'ASC',
    'posts_per_page' => -1
	];

	if (!get_field( "hide_service" )) $services = new WP_Query($args);
?>

<section class="services">
	<div class="container">
		<h2 class="block-ttl">
			<?= (get_field( "title" ))?:get_the_title() ?>
		</h2><!-- .block-ttl -->
		<?php if ( !get_field( "hide_service" )): ?>
			<?php if ($services->have_posts()): ?>
				<div class="services_wrap">
					<div class="services_wrap">
            <?php while ($services->have_posts()) : $services->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="item js-auto-height" style="height: 196px;">
							<div class="img_wrap">
								<img class="not-hover" src="<?= (get_field( "thumb_main" )?:PLACEHOLDER) ?>" alt="">
								<img class="hover" src="<?= (get_field( "thumb_hover" )?:PLACEHOLDER) ?>" alt="">
							</div><!-- .img_wrap -->
							<span class="item__name"><?php the_title(); ?></span>
						</a>
          <?php endwhile; ?>

					</div>
				</div><!-- .services_wrap -->
			<?php else: ?>
				Услуг нет
			<?php endif; wp_reset_postdata(); ?>
		<?php endif; ?>
	</div><!-- .container -->
</section><!-- .services -->
<div class="set">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 img js-auto-height">
				<img src="<?= get_image_field( get_field( "img_1" ), "300-square" ) ?>" alt="" />
			</div><!-- .col-xs-3 -->
			<div class="col-xs-3 text js-auto-height">
				<div><?= get_field( "text_1" ) ?></div>
			</div><!-- .col-xs-3 text -->
			<div class="col-xs-3 img js-auto-height">
				<img src="<?= get_image_field( get_field( "img_2" ), "300-square" ) ?>" alt="" />
			</div><!-- .col-xs-3 -->
			<div class="col-xs-3 text js-auto-height">
				<div><?= get_field( "text_2" ) ?></div>
			</div><!-- .col-xs-3 text -->
			<div class="col-xs-3 text js-auto-height">
				<div><?= get_field( "text_3" ) ?></div>
			</div><!-- .col-xs-3 text -->
			<div class="col-xs-3 img js-auto-height">
				<img src="<?= get_image_field( get_field( "img_3" ), "300-square" ) ?>" alt="" />
			</div><!-- .col-xs-3 -->
			<div class="col-xs-3 text js-auto-height">
				<div><?= get_field( "text_4" ) ?></div>
			</div><!-- .col-xs-3 text -->
			<div class="col-xs-3 img js-auto-height">
				<img src="<?= get_image_field( get_field( "img_4" ), "300-square" ) ?>" alt="" />
			</div><!-- .col-xs-3 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .set -->
<section class="individual-consultation">
	<div class="container">
		<div class="block-ttl">
			<?= get_field( "list_title" ) ?>
		</div><!-- .block-ttl -->
		<div class="row">
			<div class="left col-xs-6">
				<?php if (have_rows('ind_list')): ?>
					<ul>
						<?php while (have_rows('ind_list')) : the_row(); ?>
							<li class="consultation__item">
								<?= get_sub_field( "text" ) ?>
							</li><!-- .consultation__item -->
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<div class="callback-form">
					<?= get_field( "callback_text" ) ?>
				</div><!-- .call-back-form -->
			</div><!-- .left -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .individual-consultation -->

<?php get_footer(); ?>
