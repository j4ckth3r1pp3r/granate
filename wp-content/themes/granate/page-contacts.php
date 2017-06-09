<?php get_header(); ?>
<div class="container">
	<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
</div>

<div class="contacts">
	<div class="container">
		<div class="block-ttl left">
			<?= get_the_title(); ?>
		</div><!-- .block-ttl left -->
	</div><!-- .container -->
</div><!-- .contacts -->

<?php get_footer(); ?>
