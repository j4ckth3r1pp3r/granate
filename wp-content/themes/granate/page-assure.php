<?php get_header(); ?>

<section class="quality">
	<div class="container">
		<div class="row">
			<div class="quality__left col-xs-6">
				<div class="block-ttl left">
					<?= (get_field( "title" ))?:get_the_title() ?>
				</div><!-- .block-ttl -->
				<?= preg_replace('/<a\s/', '<a class="blue-under-text" ', get_field( "left_text" )) ?>
					<?php if (get_field( "left_img" )): ?>
						<img class="second-photo" src="<?= get_image_field(get_field( "left_img" ), 'large') ?>" alt="">
					<?php endif; ?>
			</div><!-- .quality__left col-xs-6 -->
			<div class="quality__right col-xs-6">
				<?php if (get_field( "right_img" )): ?>
					<div class="photo-wrap">
						<img src="<?= get_field( "right_img" ) ?>" alt="" />
					</div><!-- .photo-wrap -->
				<?php endif; ?>
				<?php if (get_field( "right_img_text" )): ?>
					<div class="right-text">
						<span>
							<?= get_field( "right_img_text" ) ?>
						</span>
					</div><!-- .right-text -->
				<?php endif; ?>
			</div><!-- .quality__right col-xs-6 -->
		</div><!-- .row -->
	</div><!-- .contacts -->
</section><!-- .quality -->
<section class="security">
	<div class="container">
		<div class="row">
			<div class="security__left col-xs-6 js-auto-height">
				<div class="left-ttl">
					<?= get_field( "sec_title" ) ?>
				</div><!-- .block-ttl -->
				<div class="left-sub-ttl">
					<?= get_field( "sec_subtitle" ) ?>
				</div><!-- .left-sub-ttl -->
			</div><!-- .security__left col-xs-6 -->
			<div class="security__right col-xs-6 js-auto-height">
				<?php if (have_rows('sec_list')): ?>
					<ul>
						<?php while (have_rows('sec_list')) : the_row(); ?>
							<li><?= field_color_highlight(get_sub_field( "text" )) ?></li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div><!-- .security__right col-xs-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .security -->
<section class="disinfectants">
	<div class="container">
		<div class="row">
			<div class="disinfectants__left col-xs-6">
				<span>
					<?= get_field( "dis_title" ) ?>
				</span>
				<img src="<?= get_field('dis_img') ?>" alt="" />
			</div><!-- .disinfectants__left col-xs-6 -->
			<div class="disinfectants__right col-xs-6">
				<?= preg_replace('/p>/', 'span>', get_field( "dis_text" )) ?>
				<?php if (have_rows('dis_list')): ?>
					<ul>
						<?php while (have_rows('dis_list')) : the_row(); ?>
							<li class="green-point"><?= get_sub_field( "text" ) ?></li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div><!-- .disinfectants__right col-xs-6 -->
		</div><!-- .row -->
	</div><!-- .contaiter -->
</section><!-- .isinfectants -->
<section class="points">
	<div class="container">
		<div class="row">
			<div class="points__left col-xs-4 col-xs-offset-1">
				<?php if (have_rows('left_list')): ?>
					<ul>
						<?php while (have_rows('left_list')) : the_row(); ?>
							<li class="green-point">
								<?= get_sub_field( "text" ) ?>
							</li><!-- .green-point -->
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div><!-- .points__left -->
			<div class="points__right col-xs-4 col-xs-offset-2">
				<?php if (have_rows('right_list')): ?>
					<ul>
						<?php while (have_rows('right_list')) : the_row(); ?>
							<li class="green-point">
								<?= get_sub_field( "text" ) ?>
							</li><!-- .green-point -->
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div><!-- .points__right -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- .points -->
<?php if (get_field( "blue_text" )): ?>
	<div class="blue-section">
		<div class="container">
			<span>
				<?= get_field( "blue_text" ) ?>
			</span>
		</div><!-- .content -->
	</div><!-- .blue-section -->
<?php endif; ?>

<?php get_footer(); ?>
