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
    $('.carousel').carousel(
        interval, 2000
    )


});