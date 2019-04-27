/**
 *  feedback validation
 */
$("#feedback-form").validate({
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
            equalTo: "#pass1"

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





