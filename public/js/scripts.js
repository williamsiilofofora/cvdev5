$(document).ready(function () {




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