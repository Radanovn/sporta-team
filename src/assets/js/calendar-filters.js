$(document).ready(function() {
    $('.js-filters-show-more').on('click', function () {
        $(this).parents('.filters__item').find('.block-collapsed').toggleClass('show');
        $(this).toggleClass('hide');
    });
});

// open filters in mobile
$(document).ready(function() {
    $('.js-filters-open').on('click', function () {
        $('.calendar-sidebar').addClass('active');
    });
});
// close filters in mobile
$(document).ready(function() {
    $('.js-filters-close').on('click', function () {
        $('.calendar-sidebar').removeClass('active');
    });
});

$(document).ready(function() {
    if(window.innerWidth >= 992) {
        if($('.calendar-sidebar').hasClass('active')) {
            $('.calendar-sidebar').removeClass('active');
        }

        $('.js-filters-item-title').attr('aria-expanded', 'true');
        $('.js-filters-item-body').addClass('show');
    } else {
        $('.js-filters-item-title').attr('aria-expanded', 'false');
        $('.js-filters-item-body').removeClass('show');
    }
});

$(window).on('resize', function() {
    if(window.innerWidth >= 992) {
        if($('.calendar-sidebar').hasClass('active')) {
            $('.calendar-sidebar').removeClass('active');
        }

        $('.js-filters-item-title').attr('aria-expanded', 'true');
        $('.js-filters-item-body').addClass('show');
    } else {
        $('.js-filters-item-title').attr('aria-expanded', 'false');
        $('.js-filters-item-body').removeClass('show');
    }
});
