<?php get_header(); ?>

<div class="contacts">
	<div class="container">
		<div class="block-ttl left">
			<?= get_the_title(); ?>
		</div><!-- .block-ttl left -->
		<div class="row">
			<div class="col-xs-12">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php comments_template( ); ?>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div><!-- .container -->
</div><!-- .contacts -->

<?php get_footer(); ?>
