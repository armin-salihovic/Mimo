$(document).ready(function() {
    $(".gallery").justifiedGallery({
        lastRow: 'center',
        captions: false
    });
    $('.gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled:true
        }
    });
});