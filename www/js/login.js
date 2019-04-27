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