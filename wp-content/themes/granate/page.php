<?php get_header(); ?>

<section class="quality">
	<div class="container">
		<div class="row">
			<div class="quality__left justpage col-lg-12">
				<div class="block-ttl left">
					<?= get_the_title() ?>
				</div><!-- .block-ttl -->
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
					<?= preg_replace('/<a\s/', '<a class="blue-under-text" ', get_the_content()); ?>
				<?php endwhile; endif; ?>
			</div><!-- .quality__left col-lg-6 -->
			<div class="quality__right col-lg-6">
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
			</div><!-- .quality__right col-lg-6 -->
		</div><!-- .row -->
	</div><!-- .contacts -->
</section><!-- .quality -->

<?php get_footer(); ?>
