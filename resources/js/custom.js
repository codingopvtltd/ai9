var homeDataTable;


$(function() {


    $('.photo-big, .edit-Spanphoto').click(function() {
        $(".userupload-block").toggleClass("focused");
    });
    $('.js-example-basic-multiple').select2();

    $('.datepicker').datepicker();

    $('.tree-toggle').click(function() {
        $(this).parent().children('.nav-list-inner').toggle(200);
    });

    $(document).on("click", ".custom-table tr td:not('.action-button')", function(event) {

        //event.preventDefault();
        $(this).parents(".window-custom-inner").addClass("window-change");
        // $(".window-right").find(".form-control").addClass("view-form");
    });


    // $(".view-form").on("focus", function() {
    //     $(this).removeClass("view-form");
    // });

    $(".view-form").prop("readonly", true);
    $(".view-form").attr("readonly", "readonly");
    $('.view-form option:not(:selected)').prop('disabled', true);
    // $(".form-control").on("focus", function() {
    //     $(this).removeClass("view-form");
    // });
    // $(".form-control").on("blur", function() {
    //     $(this).addClass("view-form");
    // });

    $('.add-btn').click(function(event) {
        $(this).parents(".window-custom-inner").addClass("window-change");
    });

    $('.close-window').click(function() {
        $(".window-custom-inner").removeClass("window-change");
        setTimeout(() => {
            homeDataTable.columns.adjust().draw(); //responsive.recalc();
        }, 500);

    });

    $('.user-block').click(function(e) {
        $(".user-popup-main").toggleClass("focused");
        e.stopPropagation();
    });

    $('.user-popup-main').click(function(e) {
        e.stopPropagation();
    });

    $(document).click(function() {
        $('.custom-table tr').removeClass("border-blue");
        $(".user-popup-main").removeClass("focused");
    });



    homeDataTable = $('.data-customTable').DataTable({
        "autowidth": "false",
        "fixedColumns": "true",
        "fixedHeader": "true",
        "scrollX": "true",
        "ordering": false,
        "oLanguage": {
            "sSearch": ""
        },
        "language": {
            "searchPlaceholder": "Search..."
        }
    });
});


$(function() {
    $('.tree-toggle').parent().children('.nav-list-inner').toggle(200);
});