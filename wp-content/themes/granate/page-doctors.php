<?php get_header(); ?>
<div id="small-dialog" class="zoom-anim-dialog mfp-hide">
</div>
<div class="doctors__wrap">
	<div class="container">
		<div class="block-ttl">
			<?= (get_field( "doctors" )) ? ((get_field( "title" ))?:get_the_title()) : 'Специалисты отсутствуют' ?>
		</div><!-- .block-ttl -->
		<div class="row">
			<?php $i = 0; ?>
			<?php while (have_rows('doctors')) : the_row(); ?>
				<div class="col-xs-4 doctor__wrap js-auto-height">
					<a class="popup-with-zoom-anim doctorpopup" href="#small-dialog" data-id="<?= $i ?>">
						<?php
						  $image = (get_sub_field( "photo" )) ? get_image_field( get_sub_field( "photo" ), "doctor" ) : DOCTOR_PLACEHOLDER;
						?>
						<img src="<?= $image  ?>" alt="" />
						<div class="info">
							<div class="doctor__name">
								<?= preg_replace('/(.*?)\s(.*)/', '<span>\1</span>\2', get_sub_field( "name" )) ?>
							</div><!-- .doctor__name -->
							<?php if (get_sub_field( "desc" )): ?>
								<span class="info__descr">
									<?= get_sub_field( "desc" ) ?>
								</span>
							<?php endif; ?>
						</div>
					</a>
				</div>
				<div class="hide-doctors" style="display:none" data-id="<?= $i ?>">
					<h2><?=  get_sub_field( "name" ) ?></h2>
					<div class="container-fluid">
						<div class="row">
							<div class="photo">
								<img src="<?= $image  ?>" alt="doctor1" />
							</div>
							<div class="text">
								<?= get_sub_field( "fulldesc" ) ?>
								<?php $gallery = get_sub_field( "gallery" ) ?>
								<?php if ($gallery): ?>
									<div class="certificate-wrap">
										<div class="row">
											<?php foreach ($gallery as $image): ?>
												<div class="col-xs-4">
													<a target="_blank" class="image-popup-no-margins" href="<?= get_image_field( $image, "300-square" ) ?>">
														<img src="<?= get_image_field( $image, "300-square" ) ?>" alt="doctor1">
													</a>
												</div>
											<?php endforeach; ?>

										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php $i++; endwhile; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .doctors__wrap -->

<?php get_footer(); ?>
