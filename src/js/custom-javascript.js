// Add your JS customizations here

jQuery(function($) {
    // $('.carousel .carousel-item').each(function(){
    //     var minPerSlide = 3;
    //     var next = $(this).next();
    //     if (!next.length) {
    //     next = $(this).siblings(':first');
    //     }
    //     next.children(':first-child').clone().appendTo($(this));
        
    //     for (var i=0;i<minPerSlide;i++) {
    //         next=next.next();
    //         if (!next.length) {
    //             next = $(this).siblings(':first');
    //         }
        
    //         next.children(':first-child').clone().appendTo($(this));
    //     }
    // });

    $('.card.player:not(.placeholder)').hover(function() {
        $(this).children('.card-player-photo').addClass("invisible");
        $(this).children('.card-player-info').removeClass("invisible");
    }, function() {
        $(this).find('.card-player-photo').removeClass("invisible");
        $(this).find('.card-player-info').addClass("invisible");
    });

    $('.service-symbol-frame').hover(function() {
        $('#services-info-text').html($(this).attr('data-text'));
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
        // $("#player-video-frame")[0].contentWindow.postMessage('{"method":"pause"}', '*');
        // $("#player-video-frame")[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
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
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

});



  document.addEventListener( 'wpcf7invalid', function( event ) {
    alert('yo');
}, false );
document.addEventListener( 'wpcf7spam', function( event ) {
    alert('yo');
}, false );
document.addEventListener( 'wpcf7mailfailed', function( event ) {
    alert('yo');
}, false );
document.addEventListener( 'wpcf7mailsent', function( event ) {
    alert('yo');
}, false );