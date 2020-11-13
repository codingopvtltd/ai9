$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $(".navbar").addClass("navbar-fix");
        } else {
            $(".navbar").removeClass("navbar-fix");
        }
    });
    $(".request-form .form-control").on("focus", function() {
        $(this).parent('.form-group').addClass('focused');
    });

    $(".request-form .form-control").on("blur", function() {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).parent('.form-group').removeClass('focused');
        } else {
            $(this).parent('.form-group').addClass('focused');
        }
    });
    $(".custom-btn").on("click", function() {
        $('html, body').animate({
            scrollTop: $(".footer-main").offset().top
        }, 1000);
    });
});