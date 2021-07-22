// Add your JS customizations here

jQuery(function($) {
    $('.carousel .carousel-item').each(function(){
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
        next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        for (var i=0;i<minPerSlide;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
        
            next.children(':first-child').clone().appendTo($(this));
        }
    });

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