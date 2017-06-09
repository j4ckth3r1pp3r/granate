<?php get_header(); ?>

<section class="quality">
	<div class="container">
		<div class="row">
			<div class="quality__left justpage blog-single col-lg-12">
				<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
				<div class="block-ttl left">
					<?= get_the_title() ?>
				</div><!-- .block-ttl -->
				<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
					<?php the_post_thumbnail( 'medium', ['class' => 'floatleft'] ); ?>
					<?= preg_replace('/<a\s/', '<a class="blue-under-text" ', get_the_content()); ?>
				<?php endwhile; endif; ?>
			</div><!-- .quality__left col-lg-6 -->
		</div><!-- .row -->
	</div><!-- .contacts -->
</section><!-- .quality -->

<?php get_footer(); ?>
