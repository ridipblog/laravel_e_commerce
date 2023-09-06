$(document).ready(function () {
    $("#side_bar").on("click", function () {
        $(".side_nav").eq(0).css("display", "flex");
    });
    $("#side_nav_close").on("click", function () {
        $(".side_nav").eq(0).css("display", "none");
    });
});
