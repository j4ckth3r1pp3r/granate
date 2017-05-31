<?php get_header(); ?>
<div class="first-block">
	<div class="block-ttl center">
		<?= get_the_title() ?>
	</div>

<?php if (have_rows('equipment', 80)): ?>
	<section class="new-equipment">
		<div class="container">
			<div class="row">

				<div class="swiper-container-new-equipment without-slider">
			        <div class="swiper-wrapper">
						<?php while (have_rows('equipment', 80)) : the_row(); ?>
							<div class="swiper-slide js-auto-height">
								<a href="<?= get_sub_field( "link" )?:'#' ?>" class="equipment-item">
									<div class="img-wrap">
										<img src="<?= get_image_field( get_sub_field( "img" ), "equipment" ) ?>" alt="" />
									</div><!-- .img-wrap -->
									<h3 class="equipment-item__ttl">
										<?= get_sub_field( "title" ) ?>
									</h3><!-- .equipment-item__ttl -->
									<span class="equipment-item__descr">
										<?= get_sub_field( "desc" ) ?>
									</span>
									<?php if (have_rows('list')): ?>
										<h4 class="equipment-item__advantages__ttl">
											<?= (get_sub_field( "title_list" ))?:'Преимущества пьезо-имплантации:' ?>
										</h4><!-- .equipment-item__advantages__ttl -->
										<ul class="advantages__list">
											<?php while (have_rows('list')) : the_row(); ?>
												<li class="list__item">
													<?= get_sub_field( "text" ) ?>
												</li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</a>
							</div>
						<?php endwhile; ?>
			        </div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
<?php endif; ?>

<?php get_footer(); ?>
