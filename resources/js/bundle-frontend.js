$(function() {
    $('#send-request').on("click", function(e) {
        e.preventDefault();
        formData = new FormData($("#request-submit")[0]);
        console.log(formData);
        $.ajax({
            url: "contact-actions",
            type: "POST",
            data: {
                "_token": csrf_token,
                "method": 'save',
                type: "POST",
                data : formData,
            },dataType: 'json',
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {
                    // toasterMessage('Learning Objectives Created Succesfully', 'success');
                    // setTimeout(function() {
                    //     window.location.reload();
                    // }, 1000);
                } else if (response.status == 'failed') {
                    // toasterMessage('Failed To Create', 'error');
                }
            },
            error: function(xhr) {




            //   $('.error_custom').remove();
            //       $.each(xhr.responseJSON.errors, function(key,value) {

            //         $('#'+key).after('<div class="error_custom">'+value+'</div>');
            //         setTimeout(function() {
            //           $('.error_custom').fadeOut('fast');

            //       }, 5000);

            //       });



            },
        });
    });



});
