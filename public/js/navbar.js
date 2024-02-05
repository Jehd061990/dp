$(document).ready(function () {
    $(".navbar-tg").click(function () {
        $(".navbar-bg").toggleClass("active");
        $(".notification").toggleClass("deactive");

        $(".top").toggleClass("active");
        $(".middle").toggleClass("active");
        $(".bottom").toggleClass("active");
    });
});
