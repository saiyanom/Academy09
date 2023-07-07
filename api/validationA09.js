$(document).ready(function() {


$.validator.addMethod('mobile', function (value, element, param) {
    if (value) {
        var pattern = /^[0-9]{10}$/;
        return pattern.test(value);
    } else {
        return true;
    }
}, 'Please enter a valid mobile number.');

$.validator.addMethod('email', function (value, element, param) {
    if (value) {
        var pattern = new RegExp(/^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);
        return pattern.test(value);
    } else {
        return true;
    }
}, 'Please enter a valid email address.');



$('#login_form').validate({
    ignore: [],
    rules: {
        username: {
            required: true,
            minlength: 2,
            maxlength: 100,
        },
        password: {
            required: true,
        }
    },
    errorPlacement: function (error, element) {
        // error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    submitHandler: function (form) {
    console.log('inside function..............');

        var formData = new FormData(form);
        $('.response-error').html('');
        console.log(formData);
        // return false;
        $button = $('#login-btn');
        $button.attr('disabled', 'disabled');
        $button.text('Processing...');

        //  grecaptcha.ready(function () {
            //  grecaptcha.execute('6LexSFEhAAAAACny7WHnbJJYwDKfuPVOL4vUhNj3', { action: 'contact_submit' }).then(function (token) {
                formData.append('token', token);

                $.ajax({
                    type: 'post',
                    url: $(form).attr('action'),
                    //url: "api/loginApi.php",
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function ($res) {
                        console.log($res);
                        $button.text('Submit');
                        $button.removeAttr('disabled');
                        $form_id = $(form).attr('id');

                        try {
                            // $res = JSON.parse(response);
                            if ($res.status == 1) {
                                $('#' + $form_id + ' input').val('');
                                // $('#contactForm_3').hide();
                                $('.response-success').show();
                                setTimeout(() => {
                                    $('.response-success').hide();
                                }, 5000);
                            } else {
                                $('.response-error3').html('<span class="error">' + $res.message + '</span>');
                            }
                        }
                        catch (err) {
                            console.log(err);
                            if ($res.indexOf("success") != -1) {
                                $('#' + $form_id + ' input').val('');
                                // $('#contactForm_3').hide();
                                $('.response-success').show();
                                setTimeout(() => {
                                    $('.response-success').hide();
                                }, 5000);
                            } else {
                                $('.response-error').html('<span class="error">Failed to save data.</span>');
                            }
                        }
                    },
                    error: function (error, textStatus, errorMessage) {
                        alert('Some error occured.');
                        $button.text('Submit');
                        $button.removeAttr('disabled');
                    }
                }); //end ajax
            //  }); //end grecaptcha execute 

        //  }); //end grecaptcha 
    }//end submithandler
});

}); //end doc ready