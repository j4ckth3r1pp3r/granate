<?php get_header(); ?>


<div class="galery template">
	<div class="container">
		<div class="block-ttl left">
			<?= get_the_title() ?>
		</div><!-- .block-ttl left -->
		<?php if (get_field( "main_img" ) && get_field( "main_text" )): ?>
			<div class="galery_wrap">
				<div class="galery-item">
					<div class="row">
						<div class="img col-lg-6">
							<img src="<?= get_image_field( get_field( "main_img" ), "single-main" ) ?>" alt="" />
						</div><!-- .img -->
						<div class="text col-lg-6">
							<?= get_field( "main_text" ) ?>
						</div><!-- .text -->
					</div><!-- .row -->
				</div><!-- .galery-item -->
			</div><!-- .galery_wrap -->
		<?php endif; ?>
	</div><!-- .container -->
</div><!-- .contacts -->

<?php if (get_field( "second_title" )): ?>
	<section class="prf">
		<div class="container">
			<h3 class="block-ttl">
				<?= get_field( "second_title" ) ?>
			</h3><!-- .block-ttl -->
			<div class="row vertical">
				<div class="left col-lg-6">
					<p class="descr">
						<?= get_field( "second_desc" ) ?>
					</p><!-- .descr -->
					<?php if (have_rows('second_list')): ?>
						<ul class="checked">
							<?php while (have_rows('second_list')) : the_row(); ?>
								<li><?= get_sub_field( "text" ) ?></li>
							<?php endwhile; ?>
						</ul><!-- .checked -->
					<?php endif; ?>
				</div><!-- .left col-lg-6 -->
				<?php if (get_field( "second_quote" )): ?>
					<div class="right col-lg-6">
						<div class="citation white">
							<p><?= get_field( "second_quote" ) ?></p>
						</div><!-- .citation -->
					</div><!-- .right col-lg-6 -->
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .prf -->
<?php endif; ?>

<?php if (get_field( "third_title" )): ?>
	<section class="making">
		<div class="container">
			<h3 class="block-ttl">
				<?= get_field( "third_title" ) ?>
			</h3><!-- .block-ttl -->
			<div class="row">
				<div class="left col-lg-6">
					<?php if (have_rows('third_left_list')): $i = 1; ?>
						<h4 class="sub-ttl">
							<?= get_field( "third_left_list_title" ) ?>
						</h4><!-- .sub-ttl -->
						<ul>
							<?php while (have_rows('third_left_list')) : the_row(); ?>
								<li>
									<span class="blue-text"><?= $i ?>.</span> <?= get_sub_field( "text" ) ?>
								</li>
							<?php $i++; endwhile; ?>
						</ul>
					<?php endif; ?>
				</div><!-- .left col-lg-6 -->
				<div class="right col-lg-6">
					<?php if (have_rows('third_right_list')): ?>
						<h4 class="sub-ttl">
							<?= get_field( "third_right_list_title" ) ?>
						</h4><!-- .sub-ttl -->
						<ul class="checked">
							<?php while (have_rows('third_right_list')) : the_row(); ?>
								<li><?= get_sub_field( "text" ) ?></li>
							<?php endwhile; ?>
						</ul><!-- .checked -->
					<?php endif; ?>
					<?php if (get_field( "third_quote" )): ?>
						<div class="citation blue">
							<p><?= get_field( "third_quote" ) ?></p>
						</div><!-- .citation -->
					<?php endif; ?>
				</div><!-- .right col-lg-6 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .making -->
<?php endif; ?>

<?php $gallery = get_field( "gallery" ) ?>
<?php if ($gallery): ?>
	<div class="photo">
		<div class="container">
			<div class="row">
				<?php foreach ($gallery as $photo): ?>
					<a class="image-popup-no-margins photo-wrap col-lg-4" href="<?= $photo['url'] ?>">
						<img src="<?= get_image_field( $photo, "large" ) ?>" alt="" />
					</a>
				<?php endforeach; ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .photo -->
<?php endif; ?>
<?php if (get_field( "youtube" )): ?>
	<?php
		preg_match('/src="(.+?)"/', get_field( "youtube" ), $youtubeUrl);
	  $youtubeUrl = $youtubeUrl[1];
	?>
	<div class="youtube">
		<div class="container">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="<?= $youtubeUrl ?>" frameborder="0" style="width:100%;height:700px" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<?php endif; ?>
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
