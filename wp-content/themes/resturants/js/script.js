$ = jQuery.noConflict();


$(document).ready(function () {
    $('.mobile-menu a').on('click', function () {
        // alert("Bro, you click mobile menu");
        $('nav.site-nav').toggle('slow');
    });

    var breakpoint = 768;
    $(window).resize(function () {
        // var size = $(document).width();
        // console.log("your window size is: " + size);
       if($(document).width() >= breakpoint) {
           $('nav.site-nav').show();
       }else {
           $('nav.site-nav').hide();
       }
    });
});