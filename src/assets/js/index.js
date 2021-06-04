import SimpleBar from 'simplebar';
import youtubePlayer from 'youtube-iframe/index';

$(document).ready(function() {
    let playerActive = '';

    $('select').niceSelect();

    $('.nice-select .list').each(function H(i, elem) {
        new SimpleBar(elem, { autoHide: false });
    });

    $('.nice-select .option').on('click', function H() {
        if($(this).attr('data-value') !== '') {
            $(this).parents('.nice-select').addClass('not-empty');
        } else {
            $(this).parents('.nice-select').removeClass('not-empty');
        }
    });

    // youtube video play
    $('.js-video-play').on('click', function() {
        $(this).parent().fadeOut(1000);
        let id_youtube = $(this).parents('.video-wrap').find('.js-video-player').attr('data-youtube-id'),
            id_player = $(this).parents('.video-wrap').find('.js-video-player').attr('id');

        $(this).parents('.video-wrap').css('height', 'auto');

        youtubePlayer.load(function(YT) {
            new YT.Player(id_player, {
                videoId: id_youtube,
                events: {
                    'onReady': onPlayerReady
                }
            });
        });
        function onPlayerReady(event) {
            event.target.playVideo();
        }
    });
    // youtube video play

    // youtube video modal play
    $('.js-video-modal-play').on('click', function() {
        let modal_id = $(this).attr('data-target'),
            id_youtube = $(modal_id).find('.js-video-player').attr('data-youtube-id'),
            id_player = $(modal_id).find('.js-video-player').attr('id');

        youtubePlayer.load(function(YT) {
            playerActive = new YT.Player(id_player, {
                videoId: id_youtube,
                events: {
                    'onReady': onPlayerReady
                }
            });
        });
        function onPlayerReady(event) {
            event.target.playVideo();
        }
    });

    $('.modal').on('hidden.bs.modal', function () {
        if (playerActive !== '') {
            playerActive.destroy();
            playerActive = '';
        }
    });
    // youtube video modal play
});

//mobilemenu
$(document).ready(function() {
    $('.submenu-toggle').on('click', function(e) {
        e.preventDefault();
        $(this).next('.submenu').addClass('open');
    });

    $('.btn-close-submenu').on('click', function(e) {
        e.preventDefault();
        $(this).closest('.submenu').removeClass('open');
    });

    $('.navbar-toggler').on('click', function(e) {
        $('.submenu').removeClass('open');
    });

    $('.js-mobile-menu').on('click', function(e) {
        $('body').toggleClass('mobile-menu-open');
        // $('.header-top').toggleClass('mobile-menu-open');
        $('.header').toggleClass('mobile-menu-open');
    });

    $('.js-tablet-menu').on('click', function(e) {
        $('body').toggleClass('tablet-menu-open');
        // $('.header-top').toggleClass('mobile-menu-open');
        $('.header').toggleClass('tablet-menu-open');
    });
});
//
// $(window).on('resize', function() {
//     if($('body').hasClass('fixed') && window.innerWidth >= 768) {
//         $('body').removeClass('fixed');
//     }
// });