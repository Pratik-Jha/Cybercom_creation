        function signupValidation() {
            var valid = true;

            $("#fname").removeClass("error-field");
            $("#lname").removeClass("error-field");
            $("#email").removeClass("error-field");
            $("#password").removeClass("error-field");
            $("#confirm-password").removeClass("error-field");

            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var Password = $('#signup-password').val();
            var ConfirmPassword = $('#confirm-password').val();
            var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

            $("#fname-info").html("").hide();
            $("#email-info").html("").hide();

            if (fname.trim() == "") {
                $("#fname-info").html("required.").css("color", "#ee0000").show();
                $("#fname").addClass("error-field");
                valid = false;
            }
            if (lname.trim() == "") {
                $("#lname-info").html("required.").css("color", "#ee0000").show();
                $("#lname").addClass("error-field");
                valid = false;
            }
            if (email == "") {
                $("#email-info").html("required").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (email.trim() == "") {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
                $("#email").addClass("error-field");
                valid = false;
            } else if (!emailRegex.test(email)) {
                $("#email-info").html("Invalid email address.").css("color", "#ee0000")
                    .show();
                $("#email").addClass("error-field");
                valid = false;
            }
            if (Password.trim() == "") {
                $("#signup-password-info").html("required.").css("color", "#ee0000").show();
                $("#signup-password").addClass("error-field");
                valid = false;
            }
            if (ConfirmPassword.trim() == "") {
                $("#confirm-password-info").html("required.").css("color", "#ee0000").show();
                $("#confirm-password").addClass("error-field");
                valid = false;
            }
            if (Password != ConfirmPassword) {
                $("#error-msg").html("Both passwords must be same.").show();
                valid = false;
            }
            if (valid == false) {
                $('.error-field').first().focus();
                valid = false;
            }
            return valid;
        }