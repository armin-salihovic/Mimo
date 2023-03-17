$(document).ready(function() {
    $(".gallery").justifiedGallery({
        lastRow: 'center',
        captions: false
    }).on('jg.complete', function () {
        $('.gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    });
});
