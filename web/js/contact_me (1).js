var locale = 'fr';
$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var firstname = $("input#contact-firstname").val();
            var lastname = $("input#contact-lastname").val();
            var email = $("input#contact-email").val();

            var message = $("textarea#message").val();
            // Check for white space in name for Success/Fail message
            if (firstname.indexOf(' ') >= 0) {
                firstname = firstname.split(' ').slice(0, -1).join(' ');
            }

            if(window.analytics){
                analytics.track("Sent ContactMessage", {
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    message: message,
                    locale: locale || 'fr'
                });
            }


            $.ajax({
                url: "/contact",
                type: "POST",
                data: {
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    message: message,
                    locale: locale || 'fr',
                    status: "Contact message"
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#contact-success').html("<div class='alert alert-success'>");
                    $('#contact-success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>").append("<strong>Votre message a bien été envoyé. </strong>").append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>").append("<strong>Désolé " + firstname + ", Le serveur d'envoi ne répond pas. Ressayes dans quelques minutes !")
                    .append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                }
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });


    $("#mc-embedded-subscribe-form input").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM



            var firstname = $("input#firstname").val();
            var lastname = $("input#lastname").val();
            var email = $("input#email").val();
            // Check for white space in name for Success/Fail message
            if (firstname.indexOf(' ') >= 0) {
                firstname = firstname.split(' ').slice(0, -1).join(' ');
            }
            var data = {
                firstname: firstname,
                lastname: lastname,
                email: email,
                locale: locale || 'fr',
                status: "Registered ForBeta"
            };
            if(window.analytics){
                analytics.track("Registered ForBeta", data);
                analytics.identify(email, data);
            }

            if(window.fbq){
                fbq('track', 'Lead');
            }
            $.ajax({
                url: "/contact",
                type: "POST",
                data: data,
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Ta demande d'accès a bien été envoyée. On revient vers toi dans moins de 24h. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstname + ", Le serveur d'envoi ne répond pas. Ressaye dans quelques minutes !");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                }
            })
        },
        filter: function() {
            return $(this).is(":visible");
        }
    });
    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
