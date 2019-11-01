$(document).ready(function () {

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        $('.fadeOut, .slogan').stop().animate(
            { opacity: ((180 - scroll) / 100) + 0.1 },
            "slow"
        );
    

$("#darkTrigger").click(function () {
    if ($("body").hasClass("dark")) {
        $("body").removeClass("dark");
    }
    else {
        $("body").addClass("dark");
    }
});
 $('.carousel').carousel(
     interval, 2000
 )

   
});