$(function() {
    var bodyHtml = $('body, html');

    $('.btn-mobile-menu').on('click', function() {
        $('.header__menu').toggleClass('header__menu--active');
        bodyHtml.toggleClass('body--hidden');
    });

    $('a[href^="#"]').on('click', function(evt) {
        evt.preventDefault();

        let id = $(this).attr('href');
        bodyHtml.stop().animate({ scrollTop: $(id).offset().top - 100 }, 1000);
    });

    let wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
    })
    wow.init();
});