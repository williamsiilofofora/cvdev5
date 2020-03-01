$(document).ready(function () {

    $('.skillbar').each(function () {
        $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent')
        }, 6000);
    });
    $("#darkTrigger").click(function () {
        if ($('.navbar').hasClass("navbar-light")) {
            $('.navbar').removeClass("navbar-light");
            $('.navbar').addClass("navbar-dark");

        } else if ($('.navbar').hasClass("navbar-dark")) {
            $('.navbar').removeClass("navbar-dark");
            $('.navbar').addClass("navbar-light");
        }
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
         } 
       // else {
        //     $("body").addClass("dark");

        // }
    });

    $(".js-cookie-consent-agree ").addClass("btn btn-success").css("margin-left", "15px");
    $(window).on('scroll', function () {
        // console.log($(document.body).height());
        scroll_pos = $(window).scrollTop() + $(window).height();
        // console.log(scroll_pos);
        element_pos = $('.animation').offset().top + $('.animation').height();
        element_pos1 = $('.animation1').offset().top + $('.animation1').height();
        element_pos2 = $('.animation2').offset().top + $('.animation2').height();
        // element_pos3 = $('.animation3').offset().top + $('.animation3').height();


        if (scroll_pos > element_pos) {
            $(".animation").css("animation-play-state", "running");

        }
        if (scroll_pos > element_pos1) {
            $(".animation1").css("animation-play-state", "running");

        };
        if (scroll_pos > element_pos2) {
            $(".animation2").css("animation-play-state", "running");

        };
        // if (scroll_pos > element_pos3) {
        //     $(".animation3").css("animation-play-state", "running");

        // };


    });

    setInterval(function () {
        $(".slideshow ").animate({
            marginLeft: -350
        }, 800, function () {
            $(this).css({
                marginLeft: 0
            }).find("li:last").after($(this).find("li:first"));
        })
    }, 3500);

    $('.menuAccueil').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $(".slider").offset().top - 100
            }, 1000);
    });

    $('.menuAbout').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $("#aboutMe").offset().top-100
            }, 1000);
    });
    $('.menuServices').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $("#services").offset().top - 100
            }, 1000);
    });
    $('.menuPortfolio').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $("#portfolio").offset().top - 100
            }, 1000);
    });
    $('.menuContact').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $("#contact").offset().top - 100
            }, 1000);
    });
    $('.ancre').on('click', function (e) {
        e.preventDefault();
        $('html, body')
            .stop()
            .animate({
                scrollTop: $(".slider").offset().top -100
            }, 1600);
    });

});