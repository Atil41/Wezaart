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
    $.ajax({
        url: 'http://api.randomuser.me/?results=20',
        dataType: 'json',
        success: function (data) {
            var contact = JSON.stringify(data);
            var obj = jQuery.parseJSON(contact);
            console.log(data);

            //colone droite artiste

            $('#rightcolumn .artiste img').each(function (i) {
                $(this).attr("src", obj.results[i].user.picture.thumbnail);
            });
            $('#rightcolumn .artiste .info .firstname').each(function (i) {
                $(this).text(obj.results[i].user.name.first);
            });
            $('#rightcolumn .artiste .info .lastname').each(function (i) {
                $(this).text(obj.results[i].user.name.last);
            });

            //top artiste caroussel

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
            var bgheadurl = $('#profilhead').css('background-image');
            $('#profilhead > .profilheadimg').css('background-image', bgheadurl);
        }
    });
});