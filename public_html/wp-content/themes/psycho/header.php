<!doctype html>
<html lang="ru">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="MWPEnYS1ija4V8sdCeSEuxfWaEjXPy-PDkCqEevbn3s" />
	<!-- <meta name="yandex-verification" content="0ea67eab6fc349f4" /> -->
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="preconnect" href="https://yastatic.net">
	<link rel="preconnect" href="https://mc.yandex.ru">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/css/preload.min.css" as="style">
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/Montserrat/Montserrat-Medium.ttf" type="font/ttf" as="font" crossorigin>
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/Montserrat/Montserrat-Bold.ttf" type="font/ttf" as="font" crossorigin>
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/Montserrat/Montserrat-Regular.ttf" type="font/ttf" as="font" crossorigin>
	<link rel="preload" href="<?php bloginfo('template_url'); ?>/fonts/Montserrat/Montserrat-SemiBold.ttf" type="font/ttf" as="font" crossorigin>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/preload.min.css">
    <?php wp_deregister_script('jquery'); ?>
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