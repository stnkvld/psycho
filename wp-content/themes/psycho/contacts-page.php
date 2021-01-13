<?php
	/*
		Template Name: Contacts Template
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
	<section class="main-contacts">
		<div class="container main-contacts__container">
			<picture class="contacts__image-wrapper wow fadeIn">
				<source srcset="<?= get_template_directory_uri() ?>/images/photo-1.webp, <?= get_template_directory_uri() ?>/images/photo-1@2x.webp 2x">
				<img class="contacts__image" 
						src="<?= get_template_directory_uri() ?>/images/photo-1.jpg" 
						srcset="<?= get_template_directory_uri() ?>/images/photo-1@2x.jpg 2x" 
						alt="Инна Сотникова - психологическая помощь">
			</picture>
			<h2 class="contacts__title">
				Инна Сотникова
			</h2>
			<ul class="contacts-list">
				<li class="contacts-list__item">
					<span class="contacts-list__label">Телефон:</span>
					<a href="tel:<?= get_field('phone_number_link', 'options'); ?>" class="contacts-list__link">
						<?= get_field('phone_number', 'options'); ?>
					</a>
				</li>
				<li class="contacts-list__item">
					<span class="contacts-list__label">Email:</span>
					<a href="mailto:<?= get_field('email', 'options'); ?>" class="contacts-list__link">
						<?= get_field('email', 'options'); ?>
					</a>
				</li>
				<li class="contacts-list__item">
					будние дни с 9:00 до 18:00
				</li>
			</ul>
			<ul class="social-list social-list--big">
				<li class="social-list__item">
					<a href="<?= get_field('social_vk', 'options'); ?>" class="social-list__link social-list__link--vk" target="_blank" rel="nofollow noopener">
						<span class="sr-only">В контакте</span>
					</a>
				</li>
				<li class="social-list__item">
					<a href="<?= get_field('social_inst', 'options'); ?>" class="social-list__link social-list__link--ig" target="_blank" rel="nofollow noopener">
						<span class="sr-only">Instagram</span>
					</a>
				</li>
				<li class="social-list__item">
					<a href="<?= get_field('social_tg', 'options'); ?>" class="social-list__link social-list__link--tg" target="_blank" rel="nofollow noopener">
						<span class="sr-only">Telegram</span>
					</a>
				</li>
				<li class="social-list__item">
					<a href="<?= get_field('social_whats_app', 'options'); ?>" class="social-list__link social-list__link--wa" target="_blank" rel="nofollow noopener">
						<span class="sr-only">WhatsApp</span>
					</a>
				</li>
				<li class="social-list__item">
					<a href="<?= get_field('social_viber', 'options'); ?>" class="social-list__link social-list__link--vb" target="_blank" rel="nofollow noopener">
						<span class="sr-only">Viber</span>
					</a>
				</li>
			</ul>
		</div>
	</section>
</div>
<?php get_footer(); ?>
