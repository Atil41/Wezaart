$(document).ready(function () {


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
    $(".soutiensbox").stop().fadeOut(0);
    $("#filter button").on('click', function () {
        $("#filter button").removeClass("active");
        $(this).addClass("active");
    });
    $("#filter .profil").on('click', function () {
        $("#content .body").attr("src", "../images/nav/profil.jpg");
    });
    $("#filter .creation").on('click', function () {
        $("#content .body").attr("src", "../images/nav/creation.jpg");
    });
    $("#filter .event").on('click', function () {
        $("#content .body").attr("src", "../images/nav/event.jpg");
    });
    $("#intro-close").on('click', function () {
        $(".intro-box").stop().fadeOut(300);
    });
    $(".popinclose").on('click', function () {
        $(".soutiensbox").stop().fadeOut(300);
    });
    $(".slidend").on('click', function () {
        $(".intro-box").stop().fadeOut(300);
    });
    $("#soutiens").on('click', function () {
        $(".soutiensbox").stop().fadeIn(300);
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
    $.ajax({
        url: 'http://api.randomuser.me/?results=20',
        dataType: 'json',
        success: function (data) {
            var contact = JSON.stringify(data);
            var obj = jQuery.parseJSON(contact);
            console.log(data);

            //colone droite artiste

            $(' .artiste img').each(function (i) {
                $(this).attr("src", obj.results[i].user.picture.thumbnail);
            });
            $(' .artiste .info .firstname').each(function (i) {
                $(this).text(obj.results[i].user.name.first);
            });
            $(' .artiste .info .lastname').each(function (i) {
                $(this).text(obj.results[i].user.name.last);
                var name = obj.results[i].user.name.last;
                var index = i + 1;
                var profil = $('.profil' + index);
                profil.attr('href', 'profile.php?name=' + name);
            });

            //top artiste caroussel
            // profile.php?nom=monnom&prenom=monprenom&img=adresse/de/limage.png

            $('#topartiste #owl-artistes .artiste a.name .lastname').each(function (i) {
                $(this).text(obj.results[i].user.name.last);
            });
            $('#topartiste #owl-artistes .artiste img').each(function (i) {
                $(this).attr("src", obj.results[i].user.picture.thumbnail);
            });
            $('#topartiste #owl-artistes .artiste a.name .firstname').each(function (i) {
                $(this).text(obj.results[i].user.name.first);
            });
            $('#topartiste > span').each(function (i) {
                $(this).text(obj.results[i].user.name.first);
            });
            var bgheadurl = $('.projectheadimg').css('background-image');
            $('#projecthead').css('background-image', bgheadurl);
            var bgheadurl = $('.categorieheadimg').css('background-image');
            $('#categoriehead').css('background-image', bgheadurl);
        }
    });
    $('.popup').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function (openerElement) {
                // openerElement is the element on which popup was initialized, in this case its <a> tag
                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }

    });
});