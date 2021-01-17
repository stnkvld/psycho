$(function() {
    var jWindow = $(window);
    var header = $('.header');

    jWindow.on('scroll', function() {
        window.scrollY > 0 ? header.addClass('header--dark') : header.removeClass('header--dark');
    });
});