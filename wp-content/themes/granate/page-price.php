<?php get_header(); ?>
<div class="container">
	<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
</div>

<div class="prices">
	<div class="container">
		<div class="row">
			<div class="block-ttl">
				<?= (get_field( "title" ))?:get_the_title() ?>
			</div><!-- .block-ttl -->
			<div class="row">
				<div class="left col-xs-6">
					<?= get_field( "desc" ) ?>
				</div><!-- .left -->
				<div class="right col-xs-5 col-xs-offset-1">
					<div class="form-wrap">
						<span>
							<?= get_field( "border_desc" ) ?>
						</span>
						<?php
						  $phones = option_field( "phones" );
						?>
						<?php if ($phones): ?>
							<div class="contacts-ttl">
								Наши контактные телефоны:
							</div>
							<!-- <a href="tel:<?= $phones[0]['phone'] ?>" class="number first"><?= site_format_phone( $phones[0]['phone'] ) ?>,</a>
							<a href="tel:<?= $phones[1]['phone'] ?>" class="number"><?= site_format_phone( $phones[1]['phone'] ) ?></a>
							<a href="tel:<?= $phones[2]['phone'] ?>" class="number"><?= site_format_phone( $phones[2]['phone'] ) ?>,</a>
							<a href="tel:<?= $phones[3]['phone'] ?>" class="number"><?= site_format_phone( $phones[3]['phone'] ) ?></a> -->
							<a href="tel:0443636003" class="number first">044-36-36-003,</a><!-- .number -->
							<a href="tel:0935103510" class="number">093-510-3-510</a><!-- .number -->
							<a href="tel:0955582929" class="number">095-558-29-29,</a><!-- .number -->
							<a href="tel:0965682929" class="number">096-568-29-29</a><!-- .number -->
						<?php endif; ?>
					</div><!-- .form-wrap -->
				</div><!-- .right -->
			</div><!-- .row -->
			<?php if (have_rows('table_list')): ?>
				<div class="tabels-wrap">
					<?php while (have_rows('table_list')) : the_row(); ?>
						<header class="tabel__head">
							<?= get_sub_field( "title" ) ?>
						</header><!-- .tabel__head -->
						<?php if (have_rows('service_list')): $i = 0; ?>
							<table class="table">
								<tbody>
									<?php while (have_rows('service_list')) : the_row(); ?>
										<tr <?= ($i % 2)? 'class="info"':'' ?>>
											<th scope="row"><?= get_sub_field( "title" ) ?></th>
											<td><?= (get_sub_field( "free" ) || !get_sub_field( "price" )) ? 'Бесплатно' : get_sub_field( "price" ) ?></td>
										</tr>
									<?php $i++; endwhile; ?>
								</tbody>
							</table>
						<?php endif; ?>
					<?php endwhile; ?>
					<?php if (get_field( "bottom_text" )): ?>
						<div class="text">
							<?= get_field( "bottom_text" ) ?>
						</div>
					<?php endif; ?>
				</div><!-- .tabels-wrap -->
			<?php endif; ?>
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .prices -->

<?php get_footer(); ?>
