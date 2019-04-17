/**
 * datepicker handler
 */
$('#birth-date').datepicker({
    format: "yyyy/mm/dd",
    uiLibrary: 'bootstrap4'
});

/**
 *  ajax-request function
 */
$('form').submit(function(e) {
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        dataType: 'json',
        success: function (data) {
            if(data['success']){

            }
            else {
                document.getElementById('fail-body').innerHTML = 'Server answer: ' + data.message;
                $('#fail').modal('show');
            }
        }
    });
    e.preventDefault();
})

/**
 *  Login form validation
 */
$("#login-form").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        pass: {
            required: true,
            rangelength: [8, 25]
        },
    },
    messages: {
        email:{
            required: "Email is required field",
            email: "Email must contain '@' character in middle"
        },
        pass:{
            required: "Password is required field",
            rangelength: "Password must contain at least 8 characters"
        }

    }
});

/**
 *  Register form validation
 */
$("#register-form").validate({
    rules: {
        email: {
            required: true,
            email: true
        },
        passNew: {
            required: true,
            rangelength: [8, 25]
        },
        passConf:{
            required: true,
            equalTo: "#password_new"

        },
        firstName:{
            required: true,
        },
        lastName:{
            required: true,
        }
    },
    messages: {
        email:{
            required: "Email is required field",
            email: "Email must contain '@' character in middle"
        },
        passNew:{
            required: "Password is required field",
            rangelength: "Password must contain at least 8 characters"
        },
        passConf:{
            required: "You must confirm password",
            equalTo: "Passwords are not equal"
        },
        firstName:{
            required: "This is required field",
        },
        lastName: {
            required: "This is required field",
        }
    }
});