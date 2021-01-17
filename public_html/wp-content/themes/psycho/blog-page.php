<?php
	/*
		Template Name: Blog Template
	*/
	get_header();
?>
<section class="intro intro--short">
	<h1 class="intro__title">Контакты</h1>
	<ul class="breadcrumbs">
		<li class="breadcrumbs__item">
			<a class="breadcrumbs__link" href="index.html">Главная</a>
		</li>
		<li class="breadcrumbs__item">
			Контакты
		</li>
	</ul>
</section>
<section class="main-contacts">
	<div class="container main-contacts__container">
		<div class="contacts">
			<img src="" alt="Логотип Инна Сотникова" class="logo-image">
			<h2 class="contacts__title">
				Инна Сотникова
			</h2>
			<ul class="contacts-list">
				<li class="contacts-list__item">
					<span class="contacts-list__label">Телефон:</span>
					<a href="tel:+79999999999" class="contacts-list__link">+7 (999) 999-99-99</a>
				</li>
				<li class="contacts-list__item">
					<span class="contacts-list__label">Email:</span>
					<a href="mailto:inna.sotnikova@yandex.ru" class="contacts-list__link">inna.sotnikova@yandex.ru</a>
				</li>
				<li class="contacts-list__item">
					будние дни с 9:00 до 18:00
				</li>
			</ul>
			<ul class="socials-list">
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
		<div class="map contacts__map">
			<p class="map__address">
				197376, Санкт-Петербург, ул. проф. Попова 15/17
			</p>
			<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4faa0987371f8f4fad41a8b965b0a77d3acafd0fb5e4a1da0a167d68dfaf4a5f&amp;source=constructor" width="100%" height="555" frameborder="0" class="map__frame"></iframe></div>
	</div>
</section>
<section id="consultation" class="section consultation">
	<div class="container">
		<div class="consultation__wrapper">
			<div class="consultation__text">
				<p class="consultation__title">Запишитесь на онлайн-консультацию!</p>
				<p class="consultation__content">
					Кроме экстренной психологической помощи также есть возможность предварительной бесплатной консультации со специалистом, что поможет определиться и понять, подходит ли Вам именно этот специалист и его подходы в Вашем конкретном случае.
				</p>
			</div>
			<form action="" class="form consultation-form">
				<div class="form__group form__group--full-width form__group--error">
					<input id="name" class="form__input" type="text" required>
					<label for="name" class="form__label">Имя</label>
					<span class="form__error">Это обязательное поле</span>
				</div>
				<div class="form__group form__group--half-width form__group--error">
					<input id="phone" class="form__input" type="tel" required>
					<label for="phone" class="form__label">Телефон</label>
					<span class="form__error">Это обязательное поле</span>
				</div>
				<div class="form__group form__group--half-width form__group--error">
					<input id="email" class="form__input" type="email" required>
					<label for="email" class="form__label">Электронная почта</label>
					<span class="form__error">Это обязательное поле</span>
				</div>
				<div class="form__group form__group--half-width form__group--check-wrapper">
					<label for="agreement" class="form__label">
						<input id="agreement" class="form__check-input" type="checkbox">
						<span class="form__checkbox"></span>
						Я согласен с условиями обработки персональных данных
					</label>
				</div>
				<div class="form__group form__group--half-width">
					<button type="submit" class="form__submit consultation-form__submit" disabled>
						Отправить
					</button>
				</div>
			</form>
		</div>
	</div>
</section>
<?php get_footer(); ?>
