$(function() {
    $('.tabs__input').on('change', function() {
        var type = $(this).data('type');
        $('.tabs__text').removeClass('tabs__text--active');
        $('.tabs__text[data-type="' + type + '"]').addClass('tabs__text--active');
    });

    var lightbox = $('.gallery a').simpleLightbox({

    });
});