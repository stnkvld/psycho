<?php
	/*
		Template Name: About Template
	*/
	get_header();
?>
<div class="category">
	<section class="intro intro--short intro--forest">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<h1 class="intro__title">
				<?php the_title(); ?>
			</h1>
		<?php endwhile; endif; ?>
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
	</section>
	<section class="category__section education">
		<div class="container">
			<h2 class="subtitle">Образование и опыт</h2>
			<div class="tabs">
				<ul class="tabs__list">
					<li class="tabs__item">
						<input id="education-first" class="tabs__input" type="radio" name="education" data-type="base" checked>
						<label class="tabs__label" for="education-first">
							Базовое образование
						</label>
					</li>
					<li class="tabs__item">
						<input id="education-second" class="tabs__input" type="radio" name="education" data-type="up">
						<label class="tabs__label" for="education-second">
							Повышение квалификации
						</label>
					</li>
					<li class="tabs__item">
						<input id="education-third" class="tabs__input" type="radio" name="education" data-type="teacher">
						<label class="tabs__label" for="education-third">
							Преподавательская деятельность
						</label>
					</li>
				</ul>
				<div class="tabs__content">
					<p class="tabs__text tabs__text--active" data-type="base">
						Я окончила Северо-Западную академию госслужбы (СЗАГС) по специальности "Практический психолог" в 2000 году, и на сегодняшний день имею 10 - летний опыт интенсивной работы с клиентами. 
					</p>
					<p class="tabs__text" data-type="up">
						Я систематически повышаю свою квалификацию, расширяю набор инструментов для практики и осваиваю новые методики: участвую в тренингах, семинарах и мастер-классах лучших специалистов. В 2016 году я получила дополнительное образование по программе Мастер Коуч в международном центре коучинга ICU. В своей работе я использую как классические методы психологии, так и инновационные нетрадиционные методики из области арт-технологий (метафорические карты, работа с архетипами ) и этнопсихологии   (инстуктор Рейки Иггдрассиль, таролог, славянское и руническое искусство).
					</p>
					<p class="tabs__text" data-type="teacher">
						Свою психологическую и кочинговую работу с клиентами я сочетаю с преподаванием (Школа Развития Личности «Радужный Мост», независимый преподаватель), в рамках программ школы я провожу вебинары, мастер-классы и обучающие программы. Также я являюсь основателем проекта Школа помогающих психологических практик «Твоя скорая помощь». Целью данного проекта является обучение как можно большего числа людей основным принципам счастливой и гармоничной жизни и освоение ими ряда психологических  помогающих методик, позволяющих в дальнейшем самостоятельно достигать своих жизненных целей и самореализовываться.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="category__section diplomas">
		<div class="container">
			<h2 class="subtitle">Дипломы и сертификаты</h2>
			<?php if (!empty(get_field('diplomas'))): ?>
			<div class="gallery">
				<?php foreach (get_field('diplomas') as $key => $item): ?>
					<a class="gallery__item wow fadeInUp" data-wow-delay="<?= $key/10 ?>s" href="<?= $item['url'] ?>">
						<img class="gallery__image" src="<?= $item['sizes']['medium_large'] ?>" alt="<?= $item['alt'] ?>" title="<?= $item['title'] ?>"/>
					</a>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>
