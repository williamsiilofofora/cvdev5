$(document).ready(function () {

    $('.skillbar').each(function () {
        $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent')
        }, 6000);
    });
    $("#darkTrigger").click(function () {
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
        element_pos = $('.animated').offset().top + $('.animated').height();
        if (scroll_pos > element_pos) {
            $(".animated").css("animation-play-state", "running");

        }

    });

});