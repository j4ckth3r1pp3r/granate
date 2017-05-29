<?php get_header(); ?>

<?php
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = [
		'post_type' => 'blog',
		'status' => 'publish',
		'posts_per_page' => 6,
		'paged' => $paged,
	];
	query_posts($args);
?>

<section class="quality">
	<div class="container">
		<div class="row">
			<div class="quality__left justpage archive-blog col-lg-12">
				<div class="block-ttl left">
					Блог
				</div><!-- .block-ttl -->
				<?php if (have_posts()) :
					while(have_posts()) : the_post(); ?>
					<div class="col-lg-12 archive-blog-box">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail( 'medium', ['class' => 'floatleft', 'title' => get_the_title(), 'alt' => get_the_title()] ); ?>
							<?php else: ?>
								<img src="<?= PLACEHOLDER ?>" alt="placeholder" class="floatleft" alt="<?= the_title() ?>" title="<?= the_title() ?>">
							<?php endif; ?>
						</a>
						<?= kama_excerpt( array('maxchar'=>300) ); ?>
						<a href="<?= the_permalink(); ?>">Далее</a>
					</div>
				<?php endwhile; ?>
				<?php get_template_part('pagination') ?>
			<?php else: ?>
				<div class="col-lg-12">
					<h2>Записей нет</h2>
				</div>
			<?php endif; ?>
			</div><!-- .quality__left col-lg-6 -->
		</div><!-- .row -->
	</div><!-- .contacts -->
</section><!-- .quality -->

<?php get_footer(); ?>
