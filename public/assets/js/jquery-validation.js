$(document).ready(function () {
    // Add custom email validation
    $.validator.addMethod("emailRFCdns", function (value, element) {
        // Basic email regex to check RFC format
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

        // Check if email is in correct RFC format
        if (!emailRegex.test(value)) {
            return false;
        }

        // Extract the domain part of the email
        var domain = value.split('@')[1];

        // Check if the domain has valid MX (Mail Exchange) records
        try {
            var dnsRequest = new XMLHttpRequest();
            dnsRequest.open("GET", "https://dns.google/resolve?name=" + domain + "&type=MX", false);
            dnsRequest.send(null);

            if (dnsRequest.status === 200) {
                var response = JSON.parse(dnsRequest.responseText);
                if (response.Answer && response.Answer.length > 0) {
                    return true; // Valid MX records found
                }
            }
        } catch (e) {
            return false; // If DNS lookup fails, return false
        }

        return false; // If no MX records, return false
    }, "Please enter a valid email address.");
    $(".inquiry-form").validate({
        ignore: ":hidden:not(#hiddenRecaptcha)",
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            email: {
                required: false,
               
            },
            subject: {
                required: false,
            },
            qty: {
                required: false,
            },
            product_interest: {
                required: false,
            },
            description: {
                required: false
            },
            mobile: {
                required: true,
                digits: true
            },
            grecaptcha: {
                required: true
            },
            hiddenRecaptcha: {
                required: function () {
                    if (grecaptcha.getResponse() == '') {
                        return true;
                    } else {
                        return false;
                    }
                }
            },


        },
        messages: {
            name: {
                required: "Please enter your name", // Custom message for name
                maxlength: "Name cannot exceed 255 characters"
            },
            email: {
                required: "Please enter your email",
                emailRFCdns: "Please enter a valid email address"
            },
            mobile: {
                required: "Please enter your mobile number",
                minlength: "Mobile number must be exactly 10 digits",
                maxlength: "Mobile number must be exactly 10 digits",
                digits: "Please enter only digits"
            },
            grecaptcha: {
                required: "Please complete the captcha challenge."
            },
            hiddenRecaptcha: {
                required: "Security Verification Pending...!"
            }
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            error.addClass('text-danger');
            error.insertAfter(element); // Place error message after the input element
        },
        submitHandler: function (form) {
            form.submit(); // Submit the form when it's valid
        }
    });

    $(".modal-form").validate({
        ignore: ":hidden:not(#hiddenRecaptcha)",
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            email: {
                required: false,
                emailRFCdns: true
            },
            mobile: {
                required: true,
                digits: true
            },
         


        },
        messages: {
            name: {
                required: "Please enter your name", // Custom message for name
                maxlength: "Name cannot exceed 255 characters"
            },
            mobile: {
                required: "Please enter your mobile number",
                minlength: "Mobile number must be exactly 10 digits",
                maxlength: "Mobile number must be exactly 10 digits",
                digits: "Please enter only digits"
            },
           
        },
        errorElement: 'div',
        errorPlacement: function (error, element) {
            error.addClass('text-danger');
            error.insertAfter(element); // Place error message after the input element
        },
        submitHandler: function (form) {
            form.submit(); // Submit the form when it's valid
        }
    });

});

   