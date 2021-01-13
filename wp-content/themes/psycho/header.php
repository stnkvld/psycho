<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="MWPEnYS1ija4V8sdCeSEuxfWaEjXPy-PDkCqEevbn3s" />
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="header<?= is_front_page() ? '' : ' header--dark' ?>">
        <div class="container header__container">
            <?php if (is_front_page()): ?>
                <div class="logo header__logo">
                    <img class="logo__image" src="<?= get_template_directory_uri() ?>/svg/logo-white.svg" alt="Логотип Инна Сотникова">
                </div>
            <?php else: ?>
                <a href="/" class="logo header__logo">
                    <img class="logo__image" src="<?= get_template_directory_uri() ?>/svg/logo-white.svg" alt="Логотип Инна Сотникова">
                </a>
            <?php endif; ?>
            <?php
                wp_nav_menu([
                    'menu' => 'Главное меню',
                    'container' => 'nav',
                    'container_class' => 'menu header__menu',
                    'menu_class' => 'menu__list'
                ]);
            ?>
            <a href="tel:<?= get_field('phone_number_link', 'options'); ?>" class="phone header__phone">
                <span class="header__phone-tel"><?= get_field('phone_number', 'options'); ?></span>
            </a>
            <button class="btn-mobile-menu" type="button">
                <span class="sr-only">Открыть/закрыть меню</span>
            </button>
        </div>
    </header>
    <main class="main<?= !is_front_page() ? ' main--padding-top' : '' ?>">