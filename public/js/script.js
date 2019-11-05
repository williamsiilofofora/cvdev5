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
    document.body.addEventListener('scroll', function () {
        // console.log($(document.body).height());
        scroll_pos = $('body').scrollTop() + $('body').height();
        element_pos = $('.animated').offset().top + $('.animated').height();
        if (scroll_pos > element_pos) {
              $(".animated").css("animation-play-state", "running");
             
        }

    });

});