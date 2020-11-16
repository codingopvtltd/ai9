$(function() {
    $('#send-request').on("click", function(e) {
        e.preventDefault();
        // if(!this.form.checkbox.checked)
        // {
        //     $("#check-terms").show();
        // }
        formData = new FormData($("#request-submit")[0]);

        formData.set('method','save');

        formData.set('_token',csrf_token);
        console.log(formData);
        $.ajax({
            url: "contact-actions",
            type: "POST",
            data: formData,
            dataType: 'json',
            contentType: false,
            async:false,
            cache: false,
            processData: false,
            success: function(response) {
                console.log(response);
                if (response.status == 'success') {
                    $("#request-save").hide();
                    $("#request-mesage").hide();
                    $("#sucess-msg").show();
                } else if (response.status == 'failed') {
                    // toasterMessage('Failed To Create', 'error');
                }
            },
            error: function(xhr) {




              $('.error_custom').remove();
                  $.each(xhr.responseJSON.errors, function(key,value) {

                    $('#'+key).after('<div class="error_custom">'+value+'</div>');
                    setTimeout(function() {
                      $('.error_custom').fadeOut('fast');

                  }, 5000);

                  });



            },
        });
    });



});
