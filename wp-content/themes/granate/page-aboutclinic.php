<?php get_header(); ?>
<div class="first-block">
	<div class="block-ttl center">
		<?= get_field( "title" )?:get_the_title() ?>
	</div>
	<div class="container">
		<div class="row">
			<a href="<?= get_field( "puzzle_link_1" ) ?>" class="puzzle col-xs-6 left">
				<figure>
					<?php if (get_field( "puzzle_img_1" )): ?>
						<img src="<?= get_field( "puzzle_img_1" ) ?>" alt="" />
					<?php endif; ?>
					<span class="puzzle__name">
						<?= get_field( "puzzle_title_1" ) ?>
					</span>
				</figure>
			</a><!-- .col-xs-6 -->
			<a href="<?= get_field( "puzzle_link_2" ) ?>" class="puzzle col-xs-6 right">
				<figure>
					<?php if (get_field( "puzzle_img_2" )): ?>
						<img src="<?= get_field( "puzzle_img_2" ) ?>" alt="" />
					<?php endif; ?>
					<span class="puzzle__name">
						<?= get_field( "puzzle_title_2" ) ?>
					</span>
				</figure>
			</a><!-- .col-xs-6 -->
			<a href="<?= get_field( "puzzle_link_3" ) ?>" class="puzzle col-xs-12">
				<figure>
					<?php if (get_field( "puzzle_img_3" )): ?>
						<img src="<?= get_field( "puzzle_img_3" ) ?>" alt="" />
					<?php endif; ?>
					<span class="puzzle__name">
						<?= get_field( "puzzle_title_3" ) ?>
					</span>
				</figure>
			</a><!-- .puzzle col-xs-12 -->
		</div><!-- .top-line -->
	</div><!-- .container -->
</div><!-- .first-block -->
<section class="about_clinic">

	<!-- <div class="img-wrap__about" style="background: url(<?= get_field('main_img') ?>) center center no-repeat;">

	</div> -->
	<div class="container">
		<div class="text__wrap">
			<?= preg_replace('/(<p>)/', '<p class="about__text">', get_field( "content" )) ?>
		</div><!-- .text__wrap -->
		<div class="modern__stomatology">
			<div class="row">
				<?php if (get_field( "photo_wlist" )): ?>
					<div class="modern__left col-xs-6">
						<img src="<?= get_field( "photo_wlist" ) ?>" alt="" />
					</div><!-- .modern__left col-xs-6 -->
				<?php endif; ?>
				<?php if (have_rows('service_list')): ?>
					<div class="modern__right col-xs-6">
						<div class="ttl">
							В гранат клиник доступны все услуги современной стоматологии:
						</div><!-- .form-ttl -->
						<ul>
							<?php while (have_rows('service_list')) : the_row(); ?>
								<li><?= get_sub_field( "text" ) ?>;</li>
							<?php endwhile; ?>
						</ul>
					</div><!-- .modern-right col-xs-6 -->
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .modern__stomatology -->
	</div><!-- .container -->
</section><!-- .about_clinic -->
<!--
<?php if (have_rows('certificate_list')): ?>
	<section class="certificate">
		<div class="container-fluid">
			<div class="swiper-container-certificate">
				<div class="swiper-wrapper">
					<?php while (have_rows('certificate_list')) : the_row(); ?>
						<div class="swiper-slide">
							<img src="<?= get_image_field( get_sub_field('img'), "certificate" ) ?>" alt="" />
						</div>
					<?php endwhile; ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>
<?php endif; ?>
-->
<section class="about-video">
	<div class="container">
		<div class="block-ttl center">
			Наше участие с международными компаниями по обслуживанию туристов
		</div>
		<iframe src="https://www.youtube.com/embed/g-WG9_A7wLg?ecver=2" width="100%" frameborder="0" style="width:100%;height:600px;" allowfullscreen></iframe>
	</div>
</section>

<?php if (have_rows('doctors') && false): ?>
	<section class="our-specialists">
		<div class="container">
			<div class="block-ttl center">
				Наши специалисты
			</div><!-- .block-ttl -->
			<div class="row top-line">
				<?php while (have_rows('doctors')) : the_row(); ?>
					<figure class="specialist col-xs-3">
						<div class="img-wrap">
							<?php
							  $image = (get_sub_field( "photo" )) ? get_image_field( get_sub_field( "photo" ), "300-square" ) : DOCTOR_PLACEHOLDER;
							?>
							<img src="<?= $image ?>" alt="" />
						</div><!-- .img-wrap -->
						<div class="specialist__name">
							<?= preg_replace('/(.*?)\s(.*)/', '<span class="stong__name">\1</span>\2', get_sub_field( "name" )) ?>
						</div><!-- .specialist__name -->
						<?php if ( get_sub_field( "position" ) ): ?>
							<span class="position">
								<?= get_sub_field( "position" ) ?>
							</span>
						<?php endif; ?>
						<?php if (have_rows('worktime')): ?>
							<div class="admission-schedule">
								<h3 class="admission-schedule__name">
									График приема:
								</h3>
								<ul>
									<?php while (have_rows('worktime')) : the_row(); ?>
										<li>
											<?= get_sub_field( "day" ) ?> <?= (get_sub_field( "from" )) ? 'с '.get_sub_field( "from" ) : '' ?> <?= (get_sub_field( "to" )) ? 'до '.get_sub_field( "to" ) : '' ?>
										</li>
									<?php endwhile; ?>
								</ul>
							</div><!-- .admission-schedule -->
						<?php endif; ?>
					</figure>
				<?php endwhile; ?>

			</div><!-- .top-line -->
			<div class="row bottom-line hidden">
				<figure class="specialist col-xs-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-xs-3 -->
				<figure class="specialist col-xs-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-xs-3 -->
				<figure class="specialist col-xs-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-xs-3 -->
				<figure class="specialist col-xs-3">
					<div class="img-wrap">
						<img src="<?= THEME_URL ?>/images/specialist.png" alt="" />
					</div><!-- .img-wrap -->
					<div class="specialist__name">
						<span class="stong__name">РЫДВАНСКАЯ</span>
						Ирина Васильевна
					</div><!-- .specialist__name -->
					<span class="position">
						Стоматолог, терапевт, ортопед.
					</span>
					<div class="admission-schedule">
						<h3 class="admission-schedule__name">
							График приема:
						</h3>
						<ul>
							<li>
								Понедельник с 09:00 до 20:00
							</li>
							<li>
								Среда с 09:00 до 20:00
							</li>
							<li>
								Пятница с 09:00 до 20:00
							</li>
							<li>
								Суббота с 09:00 до 17:00
							</li>
						</ul>
					</div><!-- .admission-schedule -->
				</figure><!-- .specialist col-xs-3 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .our-specialists -->
<?php endif; ?>
<?php if (have_rows('specialists_list')): $i = 1; ?>
	<div class="our-specialists-photo">
		<div class="container">
			<div class="block-ttl">
				Наши специалисты
			</div><!-- .block-ttl -->
			<div class="row">
				<!-- <div class="photo-wrap col-xs-12">
					<img src="<?= get_field('specialists_photo') ?>" alt="" />
					<div class="cols-wrap">
						<?php while (have_rows('specialists_list')) : the_row(); ?>
							<div class="col-xs-<?= get_sub_field( "width" ) ?> col">
								<div class="face-radius-<?= $i ?> radius">
								</div>
								<div class="info-<?= $i ?> info">
									<div class="info-ttl">
										<?= get_sub_field( "name" ) ?>
									</div>
									<div class="more-info-wrap">
										<span><?= get_sub_field( "desc" ) ?></span>
										<div class="list-ttl">
											<?= get_sub_field( "list_title" ) ?>
										</div>
										<?php if (have_rows('list')): ?>
											<ul>
												<?php while (have_rows('list')) : the_row(); ?>
													<li><?= get_sub_field( "text" ) ?></li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php $i++; endwhile; ?>
					</div>
				</div> -->
				<div class="photo-wrap col-xs-12">
					<img src="<?= get_field('specialists_photo') ?>" alt="" />
					<div class="cols-wrap">
						<div class="col-1 col js-auto-height">
							<div class="face-radius-1 radius">
							</div>
							<div class="info-1 info">
								<div class="info-ttl">
									Кубрак Людмила Владимировна
								</div>
								<div class="more-info-wrap">
								    <span>Врач Хирург имплантолог-ортопед. Опыт работы 12 лет. Действительный Член ассоциации имплантологов Украины с 2010г. Действительный Член ассоциации стоматологов Украины.</span>
									<div class="list-ttl">
										Специализация, виды деятельности:
									</div><!-- .list-ttl -->
									<ul>
										<li>Удаление зубов любой сложности атипичные удаления; </li>
										<li>Костоктомии резекции верхушки корней</li>
										<li> Работа с мягкими тканями</li>
										<li>Хирургические вмешательства у пациентов  с проведением седации в сопровождении врача-анестезиолога</li>
										<li>Полные сьёмные и частично сьёмные протезы(акрил, нейлон); 	</li>
										<li>Имплантация: -одномоментная; -двухэтапная; -с немедленной нагрузкой</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-2 col -->
						<div class="col-2 col js-auto-height">
							<div class="face-radius-2 radius">
							</div>
							<div class="info-2 info">
								<div class="info-ttl">
									Жуков Валерий Валентинович
								</div>
								<div class="more-info-wrap">
								    <span>Стоматолог, челюстно-лицевой хирург, доктор медицинских наук, врач высшей категории. Опыт работы – 18 лет. Установил более 4000 имплантов различных систем и производителей.</span>
									<div class="list-ttl">
										Специалист международного уровня по:
									</div><!-- .list-ttl -->
									<ul>
										<li>дентальной имплантации</li>
										<li>пьезо-хирургии</li>
										<li>костной пластике</li>
										<li>мягкотканной аугментации</li>
										<li>микрохирургии мягких тканей в полости рта</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-2 col -->
						<div class="col-3 col js-auto-height">
							<div class="face-radius-3 radius">

							</div>
							<div class="info-3 info">
								<div class="info-ttl">
									Евтушенко Александр Юрьевич
								</div>
								<div class="more-info-wrap">
								    <span>Врач-стоматолог,ортопед. Действительный член ассоциации стоматологов Украины. Опыт работы более 7 лет.</span>
									<div class="list-ttl">
										Специализация, виды деятельности:
									</div><!-- .list-ttl -->
									<ul>
										<li>компетентное консультирование и диагностика; </li>
										<li>составления плана лечения</li>
										<li>профессиональная гигиена полости рта</li>
										<li>техника эндодонтического лечения и пломбировки корневых каналов</li>
										<li>несъемное протезирование</li>
										<li>съемное протезирование</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-3 col -->
						<div class="col-4 col js-auto-height">
							<div class="face-radius-4 radius">

							</div>
							<div class="info-4 info">
								<div class="info-ttl">
									Батова Ирина Валентиновна
								</div>
								<div class="more-info-wrap">
									<span>Детский врач-стоматолог. Опыт работы 17 лет. Член ассоциации стоматологов Украины.</span>
									<div class="list-ttl">
										Специализация и проведение работ:
									</div><!-- .list-ttl -->
									<ul>
										<li>детский прием</li>
										<li>техника пломбирования корневых каналов</li>
										<li>современные технологии протезирования</li>
										<li>эндодонтическое лечение</li>
										<li>профессиональная гигиена полости рта</li>
										<li>cъемное протезирование</li>
										<li>несъемное протезирование</li>
										<li>протезы с опорами на штифтах</li>
										<li>протезирование пресс керамикой, церконий</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-4 col -->
						<div class="col-5 col js-auto-height">
							<div class="face-radius-5 radius">

							</div>
							<div class="info-5 info">
								<div class="info-ttl">
									Саенко Ирина Владимировна
								</div>
								<div class="more-info-wrap">
									<span>Зубной гигиенист. Действительный Член ассоциации стоматологов Украины. Опыт работы 16 лет.</span>
									<div class="list-ttl">
										Специализация, виды деятельности:
									</div><!-- .list-ttl -->
									<ul>
										<li>Профессиональная гигиена полости рта</li>
										<li>Обучение пациентов уходу за полостью рта</li>
										<li>Диспансеризация пациентов</li>
										<li>Реминирализирующие терапии</li>
										<li>Герметизация фиссур,показания и протипоказания</li>
										<li>Отбеливание зубов</li>
										<li>Диагностика основных стоматологических заболеваний</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-5 col -->
						<div class="col-6 col js-auto-height">
							<div class="face-radius-6 radius">

							</div>
							<div class="info-6 info">
								<div class="info-ttl">
									Чаркина Наталия Владимировна
								</div>
								<div class="more-info-wrap">
									<span>Врач стоматолог-ортодонт. Опыт работы - более 15 лет. Член ассоциации Ортодонтов Украины.</span>
									<div class="list-ttl">
										Специализация и проведение работ:
									</div><!-- .list-ttl -->
									<ul>
										<li>Исправление прикуса</li>
										<li>Использование брекет-систем, суставных капп.</li>
										<li>Коррекция эстетических и функциональных недостатков прикуса</li>
										<li>Ортодонтическая подготовка перед проведением протезирования, операций по установке имплантатов, восстановления режущих и жевательных поверхностей зубов, а также реставраций</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-6 col -->
						<div class="col-7 col js-auto-height">
							<div class="face-radius-7 radius">

							</div>
							<div class="info-7 info">
								<div class="info-ttl">
									Палидвор Роман Ярославович
								</div>
								<div class="more-info-wrap">
									<span>Врач-стоматолог. Действительный член ассоциации стоматологов Украины. Опыт работы 5 лет.</span>
									<div class="list-ttl">
										Специализация, виды деяльности:
									</div><!-- .list-ttl -->
									<ul>
										<li>Комплексная професиональная гигиена полости рта</li>
										<li>Лечение кариеса</li>
										<li>Лечение пульпита</li>
										<li>Лечение периодонтита</li>
										<li>Художественная реставрация зубов при помощи современных реставрационных фотополимерних материалов</li>
										<li>Протезирование-изготовление металокерамических коронок і мостовидных протезов</li>
										<li>Протезирование безметалловыми конструкциями</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-7 col -->
						<div class="col-8 col js-auto-height">
							<div class="face-radius-8 radius">

							</div>
							<div class="info-8 info">
								<div class="info-ttl">
									Медик Ольга Александровна
								</div>
								<div class="more-info-wrap">
									<span>Действительный член ассоциации стоматологов Украины. Врач стоматолог,терапевт,ортопед.Детский приём. Опыт работы 9лет.</span>
									<div class="list-ttl">
										Специализация, виды деяльности:
									</div><!-- .list-ttl -->
									<ul>
										<li>гигиеническая обработка ротовой области</li>
										<li>лечение кариеса, пульпита и периодонтита с помощью современных материалов и методик</li>
										<li>съемное протезирование : бюгельные протезы с кламерной и замковой фиксацией, ЧСП, ПСП</li>
										<li>лечение бруксизма</li>
										<li>удаление зубов постоянного и молочного прикуса</li>
										<li>закрытый кюретаж пародонтальных карманов</li>
										<li>гигиеническая обработка ротовой области</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-8 col -->
						<div class="col-9 col js-auto-height">
							<div class="face-radius-9 radius">

							</div>
							<div class="info-9 info">
								<div class="info-ttl">
									Рыдванская Ирина Васильевна
								</div>
								<div class="more-info-wrap">
									<span>Опыт работы более 16лет.</span>
									<div class="list-ttl">
										Специализация, виды деяльности:
									</div><!-- .list-ttl -->
									<ul>
										<li>Современные методы и технологии эстетического протезирования</li>
										<li>Протезирование всеми современными методиками в эстетической реабилитации функуионального восстановления</li>
										<li>Артикуляционные диагностики ортопедическая стабилизация и лечение ВНЧС</li>
										<li>Ортопедическоеизготовление и воссоздание утерянной высоты при патологической стиремости любой степени</li>
										<li>Эстетическое протезирование на имплантах</li>
										<li>Безметаловоя керамика</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-9 col -->
						<div class="col-10 col js-auto-height">
							<div class="face-radius-10 radius">

							</div>
							<div class="info-10 info">
								<div class="info-ttl">
									Мельник Лилия Николаевна
								</div>
								<div class="more-info-wrap">
									<span>Врач стоматолог-гигиенист. Опыт работы 5 лет.</span>
									<div class="list-ttl">
										Специализация, виды деяльности:
									</div><!-- .list-ttl -->
									<ul>
										<li>Комплексная проыессиональная гигиена полости рта взрослым и детям</li>
										<li>Отбеливание зубов</li>
										<li>Гермитизация фисур</li>
										<li>Реминирализующая терапия</li>
										<li>Обучение населения гигиене полости рта взрослым и детям.</li>
										<li>Диагностика основных стоматологических заболеваний</li>
									</ul>
								</div><!-- .more-info -->
							</div><!-- .info -->
						</div><!-- .col-xs-10 col -->
					</div><!-- .cols-wrap -->
				</div><!-- .photo-wrap col-xs-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .our-specialists -->
<?php endif; ?>
<section class="equipment">
	<div class="container">
		<?php if (have_rows('equipment_list')): ?>
			<div class="swiper-container-equipment">
				<div class="swiper-wrapper">
					<?php while (have_rows('equipment_list')) : the_row(); ?>
						<div class="swiper-slide">
							<a href="<?= get_sub_field('img')['url'] ?>">
								<img src="<?= get_image_field( get_sub_field( "img" ), "equipment-list" ) ?>" alt="" />
							</a>
						</div>
					<?php endwhile; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		<?php endif; ?>
		<?php if (get_field( "text_title" ) && get_field( "text_text" )): ?>
			<div class="text-wrap">
				<div class="block-ttl">
					<?= get_field( "text_title" ) ?>
				</div><!-- .block-ttl -->
				<?= get_field( "text_text" ) ?>
			</div><!-- .text wrap -->
		<?php endif; ?>
	</div><!-- .container -->
</section><!-- .equipment -->
<?php if (have_rows('equipment')): ?>
	<section class="new-equipment">
		<div class="container">
			<div class="block-ttl">
				Новейшее оборудование
			</div><!-- .block-ttl -->
			<div class="row">

				<div class="swiper-container-new-equipment">
			        <div class="swiper-wrapper">
						<?php while (have_rows('equipment')) : the_row(); ?>
							<div class="swiper-slide">
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
			        <!-- Add Pagination -->
							<a href="<?= SITE_URL ?>/equipment" class="all-equipment-link">Все оборудование</a>
			        <div class="swiper-pagination"></div>
			        <div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
<?php endif; ?>

<?php get_footer(); ?>
