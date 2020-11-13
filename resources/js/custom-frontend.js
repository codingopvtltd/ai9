$(document).ready(function() {

    $(".filter-item-title").click(function(e) {
        var moreclick = $(this).parent(".filter-item");
        var hasFocus = $(moreclick).hasClass("focused");
        $(".filter-item").removeClass("focused");
        if (hasFocus) {
            $(moreclick).removeClass("focused");
        } else {
            $(moreclick).addClass("focused");
        }
        e.stopPropagation();
    });



    $("select").select2({
        minimumResultsForSearch: -1,
    });
    $('b[role="presentation"]').hide();
    $('.select2-selection__arrow').append('<i class="fas fa-caret-down"></i>');


    var owl = $('.product-slider');
    owl.owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            960: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    });
    // owl.on('mousewheel', '.owl-stage', function (e) {
    //     if (e.deltaY > 0) {
    //         owl.trigger('next.owl');
    //     } else {
    //         owl.trigger('prev.owl');
    //     }
    //     e.preventDefault();
    // });

    $('.add').click(function() {
        if ($(this).prev().val() < 5) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').click(function() {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        slideSpeed: 2000,
        autoplay: true,
        thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item'
    });
    $('.add').click(function() {
        if ($(this).prev().val() < 5) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').click(function() {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });

    $(document).on('click', '.tree label', function(e) {
        $(this).next('ul').fadeToggle();
        e.stopPropagation();
    });

    $(document).on('change', '.tree input[type=checkbox]', function(e) {
        $(this).siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);
        $(this).parentsUntil('.tree').children("input[type='checkbox']").prop('checked', this.checked);
        e.stopPropagation();
    });

    $(document).on('click', 'button', function(e) {
        switch ($(this).text()) {
            case 'Collepsed':
                $('.tree ul').fadeOut();
                break;
            case 'Expanded':
                $('.tree ul').fadeIn();
                break;
            case 'Checked All':
                $(".tree input[type='checkbox']").prop('checked', true);
                break;
            case 'Unchek All':
                $(".tree input[type='checkbox']").prop('checked', false);
                break;
            default:
        }
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        slideSpeed: 2000,
        autoplay: true,
        thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item'
    });
    // jQuery code
    // Prevent closing from click inside dropdown
    $(document).on('mouseover', '.has-megamenu .dropdown-toggle', function(e) {
        $(this).parent(".has-megamenu").addClass("show");
        $(this).attr("aria-expanded", "true");
        $(".megamenu").addClass("show");

    });
    $(document).on('mouseover', '.dropdown-main', function(e) {
        $(".dropdown-main").removeClass("focused");
        $(this).addClass("focused");
        // e.stopPropagation();
    });
    console.log("ferfgergrtgrtgrthg");
    /* setTimeout(function() {
        $(document).on('click', '.dropdown-main a', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log("sdsdsd");
            console.log($(this).attr("href"));
            var target = $(this).attr("target");
            window.open($(this).attr("href"), target ? target : "_self");
            // $(".dropdown-main").removeClass("focused");
            // $(this).addClass("focused");

        })
    }, 3000); */

    $("html").click(function() {
        $(".has-megamenu").removeClass("show");
        $(".dropdown-toggle").attr("aria-expanded", "false");
        $(".megamenu").removeClass("show");
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 75) {
            //clearHeader, not clearheader - caps H
            $(".header-main").addClass("top-fixed");
        } else {
            $(".header-main").removeClass("top-fixed");
        }
    }); //missing );

    // $(document).on('mouseleave', '.has-megamenu .dropdown-toggle', function(e) {
    //     $(this).parent(".has-megamenu").removeClass("show");
    //     $(this).attr("aria-expanded", "false");
    //     $(".megamenu").removeClass("show");

    // });
    // $(document).on('mouseleave', '.dropdown-main', function(e) {
    //     $(".dropdown-main").removeClass("focused");
    //     e.stopPropagation();
    // });


    // $(document).on('hover', '.dropdown-main', function(e) {
    //     e.stopPropagation();
    // });
    // $(document).on('hover', '.dropdown-main', function(e) {
    //     $(".dropdown-main").removeClass("focused");
    //     $(this).addClass("focused");
    //     e.stopPropagation();
    // });

    // $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
    //     $(this).find('li.dropdown').removeClass('show open');
    //     $(this).find('ul.dropdown-menu').removeClass('show open');
    // });

    $('.add').click(function() {
        if ($(this).prev().val() < 5) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').click(function() {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });
})