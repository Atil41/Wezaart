jQuery(document).ready(function ($) {


    $("#owl-slide").owlCarousel({
        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: true

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false
    });
    $("#owl-artistes").owlCarousel({
        items: 6, //10 items above 1000px browser width
        itemsDesktop: [1000, 1], //5 items between 1000px and 901px
        itemsDesktopSmall: [900, 1], // betweem 900px and 601px
        itemsTablet: [600, 2], //2 items between 600 and 0
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        navigation: true,
        autoPlay: false,
        pagination: false
    });
    $('#content').toggleClass("navhide").toggleClass("col-md-10").toggleClass("col-md-12");
    $('#navhidebtn').click(function () {
        $('#content').removeClass('notransition').toggleClass("navhide").toggleClass("col-md-10").toggleClass("col-md-12");
    });
});
