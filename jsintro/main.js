$(document).ready(function () {

//    // Top Slider Full Screen
//    $('.slider').css("height", $(window).height() - $('.top-artiste').height() - 60 + 'px');
//    $(window).on('resize', function () {
//        $('.slider').css("height", $(window).height() - $('.top-artiste').height() - 60 + 'px');
//    });
//
//    // Navigation ------------------------------------------------ //
//    // Initialisation
//    $('.wrapper').animate({
//        width: $(window).width() - $('.header').width() + 'px'
//    }, 0);
//    $(window).on('resize', function () {
//        $('.wrapper').stop().animate({
//            width: $(window).width() - $('.header').width() + 'px'
//        }, 0);
//    });

//	// Slider Owl
//	$('.slider .owl-carousel').owlCarousel({
//	    autoplay: true,
//		autoplaySpeed: 1000,
//		navSpeed: 1000,
//		dotsSpeed: 1000,
//		mouseDrag: false,
//	    nav:true,
//        items: 1,
//		responsive: true,
//		callbacks: true
//	});
//
//	// Slider Owl
//	var owl = $('.top-artiste .owl-carousel');
//	var parameters = {
//		margin:30,
//		mouseDrag: false,
//	    //autoplay: true,
//	    nav:true,
//	    items: 5,
//	    loop: true,
//	    responsive:{
//	        750:{
//	            items:3,
//	            nav:true
//	        },
//	        970:{
//	            items:4,
//	            nav:false
//	        },
//	        1170:{
//	            items:5,
//	            nav:true,
//	            loop:false
//	        }
//		}
//	};
//	owl.owlCarousel(parameters);
//
//	// Open
//    $('.burger-nav').click(function() {
//
//        $(this).toggleClass('active');
//        if ($(this).hasClass('active')) {
//            $('.header').animate({
//                left: 0 + 'px'
//            }, 150);
//            $('.wrapper').animate({
//                left: 190 + 'px'
//            }, 150);
//			// Header Dimension
//			$('.wrapper').animate({
//				width: $(window).width() - $('.header').width() + 'px'
//			}, 150,function(){
//				//owl.trigger('refresh.owl');
//            	//owl.owlCarousel(parameters);
//			});
//			$(window).on('resize', function(){
//				$('.wrapper').stop().animate({
//					width: $(window).width() - $('.header').width() + 'px'
//				}, 0);
//			});
//        } else {
//
//            $('.header').animate({
//                left: - 190 + 'px'
//            }, 150);
//            $('.wrapper').animate({
//                left: 0 + 'px'
//            }, 150);
//			// Header Dimension
//			$('.wrapper').css({"width" : $(window).width() + 'px'}, function(){
//				//owl.trigger('refresh.owl');
//			});
//			$(window).on('resize', function(){
//				$('.wrapper').stop().animate({
//					width: $(window).width() + 'px'
//				}, 0);
//			});
//        }
//    });

// Rollover Navigation
//    $(".navigation li > a").click(function () {
//        var parent = $(this).parent().find("ul");
//        if (parent.is(':visible')) {
//            $(".navigation .active ul").stop().slideUp(150);
//            parent.stop().slideUp(150);
//            $(this).parent().removeClass("active");
//        } else if (!parent.is(':visible')) {
//            $(".navigation li ul").stop().slideUp(150);
//            $(".navigation li").removeClass("active");
//            parent.stop().slideDown(150);
//            $(this).parent().addClass("active");
//        }
//    });

// Rollover Informations Home
    $('.explication .illustration .info').click(function () {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).parent().find('.roll').stop().fadeOut(150);
        } else {
            $(this).parent().find('.roll').stop().fadeIn(150);
        }
    });
    // Intro - One Page Scroll ------------------------------------------------ //

    $("#intro-close").on('click', function () {
        $(".intro-box").stop().fadeOut(300);
    });
    $("#intro").on('click', function () {
        $(".intro-box").stop().fadeIn(300);
    });
    $(".prehome").on('click', function () {
        $(".intro-box").stop().fadeIn(300);
    });
    $(".intro-box").stop().fadeOut(0).fadeIn(300);


    function introTimer() {
        var nbrSlide = $('.intro .slide').length;
        var timerWidth = 100 / nbrSlide;
        var numSlide = $('.intro .slide.active').attr('data-index');
        $('.intro-timer').animate({
            width: timerWidth * numSlide + '%'
        }, 300);
        window.setTimeout(function () {
            introTimer()
        }, 300)
    }
    if ($.cookie('intro') == undefined) {
        $.cookie('intro', "viewed");

    }
    else {
        $(".intro-box").stop().fadeOut(0);
    }
    $(".intro").onepage_scroll({
        sectionContainer: ".slide",
        animationTime: 1000,
        responsiveFallback: 600,
        loop: true,
        beforeMove: introTimer()
    });


});










