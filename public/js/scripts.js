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
$(window).on('scroll', function () {

    var elmt = $('.from-left, .from-right');
    var topImg = $('.from-left, .from-right').offset().top;
    var scroll = $(window).scrollTop();

    $(elmt).each(function () {

        var topImg = $(this).offset().top - 900;

        if (topImg < scroll) {

            $(this).css("transform", "translate(0,0)");
            $(this).css("opacity", "1");

        };
    });
});

});