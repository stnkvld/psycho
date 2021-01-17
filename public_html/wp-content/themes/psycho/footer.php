        <section id="consultation" class="section consultation">
            <div class="container">
                <div class="consultation__wrapper wow fadeInUp">
                    <div class="consultation__text">
                        <p class="consultation__title">Запишитесь на онлайн-консультацию!</p>
                        <p class="consultation__content">
                            Кроме экстренной психологической помощи также есть возможность предварительной бесплатной консультации со специалистом, что поможет определиться и понять, подходит ли Вам именно этот специалист и его подходы в Вашем конкретном случае.
                        </p>
                        <p class="consultation__socials-title">Также Вы можете записаться на консультацию через социальные сети</p>
                        <ul class="social-list social-list--big consulation__social-list">
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
                    <?= do_shortcode('[contact-form-7 id="19" title="Запись на онлайн-консультацию" html_class="form consultation-form"]') ?>
                </div>
            </div>
        </section>
    </main>
	<footer class="footer">
        <div class="container">
            <div class="footer__top">
                <?php
                    wp_nav_menu([
                        'menu' => 'Главное меню',
                        'container' => false,
                        'menu_class' => 'menu__list footer__list'
                    ]);
                ?>
                <ul class="social-list footer__socials">
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
                <div class="footer__contacts">
                    <p class="footer__title">Остались вопросы?</p>
                    <a href="tel:<?= get_field('phone_number_link', 'options'); ?>" class="footer__link">
                        <?= get_field('phone_number', 'options'); ?>
                    </a>
                    <a href="mailto:<?= get_field('email', 'options'); ?>" class="footer__link"><?= get_field('email', 'options'); ?></a>
                </div>
            </div>
            <p class="footer__bottom">
                &copy; Сотникова Инна Павловна, <?= date('Y') ?>
            </p>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>
