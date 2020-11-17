$(function() {

    $.fn.removeReadyonly = function() {
        this.removeClass("view-form");
        this.attr("readonly", false);
        this.children().attr("disabled", false);
        return true;
      };
      $.fn.addReadyonly = function() {
          this.addClass("view-form");
          this.attr("readonly", true);
          this.children().attr("disabled", true);
          return true;
        };

    $(document).on("click",".custom-table tbody tr", function(e) {
        $('.custom-table tbody tr').removeClass("tractive border-blue");
        $(this).addClass("tractive border-blue");
    });
    $(document).on("click",".leadView", function(e) {
        e.preventDefault();
        $(".form-element").addReadyonly();
        var lead_id = $(this).attr('data-id');
        $.ajax({
            url: "lead-view",
            type: "POST",
            data: {
                "_token": csrf_token,
                lead_id: lead_id
            },
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {

                    $("#first_name").val(response.first_name);
                    $("#last_name").val(response.last_name);
                    $("#email").val(response.email );
                    $("#company").val(response.company);
                    $("#city").val(response.city);
                    $("#country").val(response.country);
                    $("#phone_number").val(response.phone_number);
                    $("#project_details").val(response.project_details);

                } else if (response.status == 'failed') {



                }
            },
            error: function(xhr) {
                console.log(xhr);
            },
        });

    });



});
