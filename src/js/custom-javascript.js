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

    $('.card.player').hover(function() {
        $(this).children('.card-player-photo').addClass("invisible");
        $(this).children('.card-player-info').removeClass("invisible");
    }, function() {
        $(this).find('.card-player-photo').removeClass("invisible");
        $(this).find('.card-player-info').addClass("invisible");
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