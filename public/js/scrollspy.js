$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

setTimeout(function() {
    if ($('nav').length) {
        $('.toc-wrapper').pushpin({
            top: $('nav').height(),
        });
    }
}, 100);