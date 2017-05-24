<?php
/**
 * Template Name: Галерея
 */
get_header(); ?>

<div class="galery-wrap">
	<div class="container">
		<div class="block-ttl">
			<?= get_the_title() ?>
		</div><!-- .block-ttl -->
		<?php if (have_rows('gallery_list')): ?>
			<?php while (have_rows('gallery_list')) : the_row(); ?>
				<?php if (get_sub_field( "title" )): ?>
					<div class="sub-ttl"><?= get_sub_field( "title" ) ?></div>
				<?php endif; ?>
				<?php if ($gallery = get_sub_field( "photo_list" )): ?>
					<div class="grid row">
						<?php foreach ($gallery as $photo): ?>
							<div class="grid-item col-xs-3">
								<a href="<?= $photo['url'] ?>">
									<img src="<?= get_image_field( $photo, "300-square" ) ?>">
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div><!-- .container -->
</div><!-- .galery-wrap -->

<?php get_footer(); ?>
