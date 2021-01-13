<?php get_header(); ?>
<section class="section intro">
	<div class="intro__video-wrapper">
		<video class="intro__video" preload="auto" autoplay="autoplay" loop="loop" poster="<?= get_template_directory_uri() ?>/images/main-bg.jpg" muted="muted">
			<source src="<?= get_template_directory_uri() ?>/video/main-bg.mp4" type="video/mp4"></source>
			<source src="<?= get_template_directory_uri() ?>/video/main-bg.webm" type="video/webm"></source>
		</video>
	</div>
	<div class="container intro__container">
		<h1 class="intro__title main-title wow fadeInLeft">
			Экстренная <span class="main-title__small">психологическая помощь</span>
		</h1>
		<p class="intro__price wow fadeInLeft">онлайн <br class="desktop-hide">от 1000 ₽/час</p>
		<a href="#consultation" class="consultation-link intro__consultation-link wow fadeInLeft">
			Запись на консультацию
		</a>
	</div>
</section>
<section class="section start">
	<div class="container start__container">
		<div class="start__content wow fadeIn">
			<h2 class="start__title">Срочная психологическая помощь в кризисных ситуациях</h2>
			<p class="start__text">
				Инна Сотникова – кризисный психолог и лайф коуч, специализируется в вопросах экстренной психологической помощи в трудных жизненных ситуациях.
			</p>
			<p class="start__text">
				Имеет более чем 10 летний опыт работы. К ней обращаются, когда психолог срочно нужен для быстрого разрешения
				деликатных психологических проблем в различных областях, таких как отношения, конфликты, кризисы, зависимости, страхи, депрессии, мотивация для изменений.
			</p>
			<p class="start__text">
				Ее авторские методики и уникальный подход к каждому клиенту, позволяют в короткие сроки внести позитивные, значимые, и, что крайне не маловажно, стойкие изменения в Вашу жизнь.
			</p>
			<a href="#consultation" class="consultation-link start__consultation-link wow fadeInLeft">
				Обратиться к психологу
			</a>
		</div>
		<picture class="start__picture wow fadeInRight">
			<source srcset="<?= get_template_directory_uri() ?>/images/photo-1.webp, <?= get_template_directory_uri() ?>/images/photo-1@2x.webp 2x">
			<img class="start__image" 
					src="<?= get_template_directory_uri() ?>/images/photo-1.jpg" 
					srcset="<?= get_template_directory_uri() ?>/images/photo-1@2x.jpg 2x" 
					alt="Инна Сотникова - психологическая помощь">
		</picture>
	</div>
</section>
<section class="section directions">
	<div class="container">
		<h2 class="subtitle">Направления работы</h2>
		<ul class="directions-list">
			<li class="directions-list__item wow fadeIn" data-wow-delay="0s">
				<a href="/services/psiholog-pri-trevoge/" class="directions-list__link directions-list__link--worry">
					Тревога
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.1s">
				<a href="/services/psiholog-pri-konfliktah/" class="directions-list__link directions-list__link--conflicts">
					Конфликты
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.2s">
				<a href="/services/psiholog-pri-depressii/" class="directions-list__link directions-list__link--depression">
					Депрессия
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.3s">
				<a href="/services/psiholog-pri-zavisimosti/" class="directions-list__link directions-list__link--smoking">
					Зависимости
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.4s">
				<a href="/services/pomoshh-psihologa-pri-razvode/" class="directions-list__link directions-list__link--divorce">
					Развод
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.5s">
				<a href="/services/pomoshh-psihologa-pri-izmene/" class="directions-list__link directions-list__link--betrayal">
					Измена
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.6s">
				<a href="/services/pomoshh-pri-psihologicheskom-krizise/" class="directions-list__link directions-list__link--stress">
					Кризисы
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.7s">
				<a href="/services/pomoshh-psihologa-pri-strahe/" class="directions-list__link directions-list__link--clown">
					Страхи
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.8s">
				<a href="#" class="directions-list__link directions-list__link--loss-of-consciousness">
					Психосоматика
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="0.9s">
				<a href="#" class="directions-list__link directions-list__link--hospitalisation">
					Сопровождение при тяжелых заболеваниях
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="1s">
				<a href="#" class="directions-list__link directions-list__link--roof">
					Одиночество
				</a>
			</li>
			<li class="directions-list__item wow fadeIn" data-wow-delay="1.1s">
				<a href="#" class="directions-list__link directions-list__link--baby">
					Сопровождение при беременности
				</a>
			</li>
		</ul>
	</div>
</section>
<section class="section online">
	<div class="container online__container">
		<h3 class="subtitle online__title">Срочная помощь психолога</h3>
		<p class="online__text">
			Обратившись к этому специалисту, Вы получите срочно помощь психолога <strong>онлайн</strong> – не нужно записываться заранее и ждать длительное время. Вместе с тем, Инна также проводит плановые индивидуальные консультации в режиме
			онлайн по всему миру по скайп и очно в Санкт-Петербурге, а также является руководителем онлайн школы помогающих психологических практик «Твоя Скорая Помощь», где проводит групповые тренинги и персональные программы на темы психологической
			самопомощи.
		</p>
		<div class="online__bottom">
			<a href="#consultation" class="consultation-link online__consultation-link">Запись на консультацию</a>
			<ul class="socials-list online__socials-list">
				<li class="socials-list__item">
					<a href="#" class="socials-list__link" target="_blank" rel="nofollow" title="Ссылка на группу ВКонтакте">
						<object type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/vk.svg">
							<img class="socials-list__image" src="<?= get_template_directory_uri() ?>/images/vk.png" alt="ВКонтакте">
						</object>
					</a>
				</li>
				<li class="socials-list__item">
					<a href="#" class="socials-list__link" target="_blank" rel="nofollow" title="Ссылка на Instagram">
						<object type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/instagram.svg">
							<img class="socials-list__image" src="<?= get_template_directory_uri() ?>/images/instagram.png" alt="Instagram">
						</object>
					</a>
				</li>
				<li class="socials-list__item">
					<a href="#" class="socials-list__link" target="_blank" rel="nofollow" title="Ссылка на Viber">
						<object type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/viber.svg">
							<img class="socials-list__image" src="<?= get_template_directory_uri() ?>/images/viber.png" alt="Viber">
						</object>
					</a>
				</li>
				<li class="socials-list__item">
					<a href="#" class="socials-list__link" target="_blank" rel="nofollow" title="Ссылка на Whatsapp">
						<object type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/whatsapp.svg">
							<img class="socials-list__image" src="<?= get_template_directory_uri() ?>/images/whatsapp.png" alt="Whatsapp">
						</object>
					</a>
				</li>
				<li class="socials-list__item">
					<a href="#" class="socials-list__link" target="_blank" rel="nofollow" title="Ссылка на Telegram">
						<object type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/telegram.svg">
							<img class="socials-list__image" src="<?= get_template_directory_uri() ?>/images/telegram.png" alt="Telegram">
						</object>
					</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="section about">
	<div class="container">
		<div class="about__element">
			<picture class="about__picture wow fadeInUp">
				<source srcset="<?= get_template_directory_uri() ?>/images/real@1x.webp, <?= get_template_directory_uri() ?>/images/real@2x.webp 2x">
				<img class="about__image" 
					 src="<?= get_template_directory_uri() ?>/images/real@1x.jpg" 
					 srcset="<?= get_template_directory_uri() ?>/images/real@2x.jpg 2x" 
					 alt="Реалистичные сроки и быстрое достижение стойких качественных результатов">
			</picture> 
			<div class="about__content">
				<p class="about__title">
					Реалистичные сроки и быстрое достижение стойких качественных результатов
				</p>
				<p class="about__text">
					Во время прохождения консультаций Вы не будете годами исследовать свое детство и анализировать ошибки прошлого. Достаточно одной первичной консультации, чтобы совместно со специалистом Вы определили круг вопросов для решения и в дальнейшем четко двигались
					к намеченному результату. В среднем, для разрешения каждой конкретной ситуации, Вам потребуется от 5 до 10 встреч со специалистом. В зависимости от сложности проблемы и пожеланий клиента в индивидуальном порядке количество
					консультаций может быть увеличено.
				</p>
			</div>
		</div>
		<div class="about__element">
			<div class="about__content">
				<p class="about__title">
					Навыки психологической самопомощи
				</p>
				<p class="about__text">
					В результате тренингов, курсов и индивидуальных консультаций Вы познакомитесь с основными принципами психологической саморегуляции, получите необходимые навыки самопомощи. Вы овладеете инструментами для самодиагностики в трудных жизненных ситуациях и
					научитесь с многими из них справляться самостоятельно, что в дальнейшем сэкономит ваш бюджет. Также Вам не придется быть пожизненно привязанными к консультациям кого бы то ни было.
				</p>
			</div>
			<picture class="about__picture wow fadeInUp">
				<source srcset="<?= get_template_directory_uri() ?>/images/selfhelp@1x.webp, <?= get_template_directory_uri() ?>/images/selfhelp@2x.webp 2x">
				<img class="about__image" 
					 src="<?= get_template_directory_uri() ?>/images/selfhelp@1x.jpg" 
					 srcset="<?= get_template_directory_uri() ?>/images/selfhelp@2x.jpg 2x" 
					 alt="Навыки психологической самопомощи">
			</picture> 
		</div>
	</div>
</section>
<section class="section skills">
	<div class="container">
		<h2 class="subtitle skills__title">Чему Вы научитесь?</h2>
		<div class="card wow fadeIn">
			<p class="card__title">
				В результате консультаций и прохождении индивидуальных и групповых курсов с психологом<br>и лайф коучем Инной Сотниковой Вы сможете:
			</p>
			<ul class="card__list">
				<li class="card__list-item">
					Научиться управлять собой и своими состояниями
				</li>
				<li class="card__list-item">
					Выявить и убрать ваши ограничивающие убеждения, страхи, комплексы, которые мешают успешно достигать поставленных целей
				</li>
				<li class="card__list-item">
					Определите Ваши индивидуальные особенности, а также научитесь использовать свои ресурсы и природный потенциал себе на благо с максимальной эффективностью
				</li>
				<li class="card__list-item">
					Овладеете основами саморегуляции и научитесь успешно справляться со стрессами и тревожными состояниями
				</li>
				<li class="card__list-item">
					Сможете эффективно взаимодействовать в отношениях, научитесь выходить из зависимых отношений и не вступать в отношения, которые Вам не нужны
				</li>
				<li class="card__list-item">
					Научитесь четко определять свои цели и выстраивать наиболее оптимальный путь к успеху в любых задуманных областях и сделать вашу жизнь более гармоничной и осмысленной
				</li>
				<li class="card__list-item">
					Стать самому себе психологом и уметь справляться с трудностями психологического характера самостоятельно в экстренных ситуациях
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="section advantages">
	<div class="container">
		<h2 class="subtitle advantages__title">Преимущества</h2>
		<ul class="advantages__list">
			<li class="advantages__item wow fadeIn" data-wow-delay="0s">
				<object class="advantages__icon" type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/discount.svg">
					<img src="<?= get_template_directory_uri() ?>/images/discount.png" alt="Скидки и акции">
				</object>
				<h3 class="advantages__item-title">Скидки и акции</h3>
			</li>
			<li class="advantages__item wow fadeIn" data-wow-delay="0.25s">
				<object class="advantages__icon" type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/cash.svg">
					<img src="<?= get_template_directory_uri() ?>/images/cash.png" alt="Рассрочка и льготы">
				</object>
				<h3 class="advantages__item-title">Рассрочка и льготы</h3>
			</li>
			<li class="advantages__item wow fadeIn" data-wow-delay="0.5s">
				<object class="advantages__icon" type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/books.svg">
					<img src="<?= get_template_directory_uri() ?>/images/books.png" alt="Бесплатные материалы">
				</object>
				<h3 class="advantages__item-title">Бесплатные материалы</h3>
			</li>
			<li class="advantages__item wow fadeIn" data-wow-delay="0.75s">
				<object class="advantages__icon" type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/interview.svg">
					<img src="<?= get_template_directory_uri() ?>/images/interview.png" alt="Консультации">
				</object>
				<h3 class="advantages__item-title">Онлайн-консультации</h3>
			</li>
			<li class="advantages__item wow fadeIn" data-wow-delay="1s">
				<object class="advantages__icon" type="image/svg+xml" data="<?= get_template_directory_uri() ?>/svg/teacher.svg">
					<img src="<?= get_template_directory_uri() ?>/images/teacher.png" alt="Программы-тренинги">
				</object>
				<h3 class="advantages__item-title">Онлайн программы-тренинги</h3>
			</li>
		</ul>
		<p class="advantages__text">
			Большинство, впервые обратившись к Инне Сотниковой за помощью, и далее остаются приверженцами ее стиля работы с клиентами, так как получают быстрые и оптимальные результаты по разумным ценам. Кроме того, гибкая система скидок, возможность рассрочек и
			льгот, а также акции и бесплатные материалы для постоянных клиентов и их друзей существенно сокращают финансовые затраты на курсовые консультации и программы – тренинги. Это делает взаимодействие с этим специалистом финансово доступным
			практически для всех категорий.
		</p>
	</div>
</section>
<?php get_footer(); ?>
