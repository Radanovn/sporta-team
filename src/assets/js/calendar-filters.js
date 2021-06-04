$(document).ready(function() {
    let filtersSelected = $('.filters-selected');

    $('#form-filters input[type="checkbox"].js-filter').on('click', function() {
        let filtersSpan = filtersSelected.find('.filter-picked');

        if(filtersSpan.length === 0) {
            filtersSelected.append('<span class="js-filter-picked filter-picked clear-all">Clear all</span>');
        }

        if($(this).prop('checked')) {
            filtersSelected.append('<span class="js-filter-picked filter-picked">'+$(this).val()+'</span>');
        } else {
            let currentFilter = $(this).val().toLowerCase();

            filtersSpan.each(function(i, elem) {
                if($(elem).text().toLowerCase() === currentFilter) {
                    $(elem).remove();
                    return false
                }
            });

            filtersSpan = filtersSelected.find('.js-filter-picked');
            if(filtersSpan.length === 1) {
                filtersSelected.find('.js-filter-picked.clear-all').remove();
            }
        }
    });
});

$(document).on('click', '.js-filter-picked.clear-all', function(){
    let checkboxChecked = $('#form-filters input[type="checkbox"].js-filter:checked');

    checkboxChecked.prop('checked', false);
    $('.filters-selected').find('.js-filter-picked').remove();
});

$(document).on('click', '.js-filter-picked', function(){
    let currentFilter = $(this),
        checkboxChecked = $('#form-filters input[type="checkbox"].js-filter:checked');

    checkboxChecked.each(function() {
        if(currentFilter.text().toLowerCase() === $(this).val().toLowerCase()) {
            $(this).prop('checked', false);
            currentFilter.remove();
            return false;
        }
    });

    let filtersSpan = $('.filters-selected').find('.js-filter-picked');
    if(filtersSpan.length === 1) {
        $('.filters-selected').find('.js-filter-picked.clear-all').remove();
    }
});

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