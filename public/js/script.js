$(document).ready(function () {

    $('.skillbar').each(function () {
        $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent')
        }, 6000);
    });
    $("#darkTrigger").click(function () {
        if($('.navbar').hasClass("navbar-light")){
            $('.navbar').removeClass("navbar-light");
            $('.navbar').addClass("navbar-dark");

        } else if ($('.navbar').hasClass("navbar-dark")) {
            $('.navbar').removeClass("navbar-dark");
            $('.navbar').addClass("navbar-light");
        }
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
        } else {
            $("body").addClass("dark");

        }
    });
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



});