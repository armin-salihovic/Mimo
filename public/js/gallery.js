$(document).ready(function() {
    $(".gallery").justifiedGallery({
        rowHeight : 200,
        margins: 8,
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
