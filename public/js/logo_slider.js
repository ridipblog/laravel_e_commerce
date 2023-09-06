$(document).on("click", "#logo_perv", function () {
    $right = $(".logo_slider_div").scrollLeft() + 350;
    $(".logo_slider_div").animate(
        {
            scrollLeft: $right,
        },
        400
    );
});
$(document).on("click", "#logo_next", function () {
    $left = $(".logo_slider_div").scrollLeft() - 350;
    // $left = $(".logo_slider_div").scrollLeft() - screen.width + 350;
    $(".logo_slider_div").animate(
        {
            scrollLeft: $left,
        },
        400
    );
});
function fun() {
    $(".logo_slider_div").css("overflow", "hidden");
}
