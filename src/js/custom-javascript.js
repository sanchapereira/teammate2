// Add your JS customizations here
jQuery(function($) {

    if (!$('.players-nav-buttons[data-position="all"]').is(':visible')) {
        $('button.players-nav-buttons[data-position="gk"]').addClass('active');

        $('.card.player').hide();
        $('.card.player.gk').show();
    }

    $('.card.player:not(.placeholder)').hover(function() {
        $(this).children('.card-player-photo').addClass('invisible');
        $(this).children('.card-player-info').removeClass('invisible');
    }, function() {
        $(this).find('.card-player-photo').removeClass('invisible');
        $(this).find('.card-player-info').addClass('invisible');
    });

    $('.service-symbol-border').hover(function() {
        $('#services-info-text').html($(this).parent('.service-symbol-frame').attr('data-text'));
        $('#services-info-title').html($(this).parent('.service-symbol-frame').attr('data-title'));
        $('.service-symbol-border').removeClass('active');
        $(this).addClass('active');
    }, function() {
    });

    $('button.players-nav-buttons').on('click', function (e) {
        $('button.players-nav-buttons').removeClass('active');
        $(this).addClass('active');

        $('.card.player').hide();
        $('.card.player.' + $(this).attr('data-position')).show();
    });

    $('#highlightsModal').on('show.bs.modal', function (e) {
        $('#player-video-frame').attr('src', $(e.relatedTarget).attr('data-media'));
    });

    $('#highlightsModal').on('hide.bs.modal', function (e) {
       $('#player-video-frame').attr('src', '');
    });

    $('body').materialScrollTop();

    $(".slider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 6,
        slidesToScroll: 1,
        prevArrow:'#prev-arrow',
        nextArrow:'#next-arrow',
        swipe:true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    // $('#main').slick();

    $('#navbarNavDropdown li').on('click', function(e) {
        $('#navbarNavDropdown').collapse('hide');
    });

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    };

    if (getUrlParameter('lang') == 'en') {
        $('.lang-en').addClass('highlighted-lang');
    } else if (getUrlParameter('lang') == 'es') {
        $('.lang-es').addClass('highlighted-lang');
    } else {
        $('.lang-pt').addClass('highlighted-lang');
    }
});

//   document.addEventListener( 'wpcf7invalid', function( event ) {
//     alert('yo');
// }, false );
// document.addEventListener( 'wpcf7spam', function( event ) {
//     alert('yo');
// }, false );
// document.addEventListener( 'wpcf7mailfailed', function( event ) {
//     alert('yo');
// }, false );
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//     alert('yo');
// }, false );