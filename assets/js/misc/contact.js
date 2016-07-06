var $j = jQuery.noConflict();

$j(document).ready(function() {
    /*Contact Form - Borrowed code*/
    var loading = '<div class="loading"><div class="loader" title="0">' +
  '<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"'+
   'width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">' +
  '<path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946'+
    's14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634'+
    'c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>'+
  '<path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0'+
    'C22.32,8.481,24.301,9.057,26.013,10.047z">'+
    '<animateTransform attributeType="xml"'+
      'attributeName="transform"'+
      'type="rotate"'+
      'from="0 20 20"'+
      'to="360 20 20"'+
      'dur="0.5s"'+
      'repeatCount="indefinite"/>'+
    '</path>'+
  '</svg>'+
'</div></div>';
    var Messages = {
        loader: $j(loading),
        thanks: $j('<div class="success">Thanks for getting in touch!</div>'),
        error: $j('<div class="success errorm er">There seems to be a problem with the form, please try again.</div>'),
        code: $j('<div class="success errorm ercode">There seems to be a problem: </div>'),
    };
    var contact_form = $j('#contact_form');

    var color = $j('#check').attr('value');

    $j('#contactform').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            name: {
                required: true
            },
            subject: {
                required: true
            },
            message: {
                required: true,
                minlength: 1
            },
            check: {
                required: true,
                remote: "http://www.mikemattner.com/process/check.php"
            }
        },
        messages: {
            name: "What's your name?",
            message: "What do you want to say?",
            subject: "What do you want to talk about?",
            email: {
                required: "How do I get a hold of you?",
                email: "I need a valid email."
            },
            check: "Seems invalid."
        },
        errorElement: "label",
        errorPlacement: function(error, element) {
            error.insertAfter(element)
        },
        showErrors: function(errorMap, errorList, element, errorClass) {
            var errorListSize = errorList.length;
            this.defaultShowErrors();
        },
        success: function(label) {
            label.remove()
        },
        submitHandler: function(form) {
            var $jthis = jQuery(form);
            $jthis.fadeTo('fast', 0.25); //this hides the form

            if (contact_form.find('.loading').length <= 0) {
                contact_form.prepend(Messages.loader);
            } else {
                contact_form.find('.loading').show();
            }

            jQuery.ajax({
                type: "POST",
                url: $jthis.attr("action"),
                data: $jthis.serialize(),
                success: function(data, status) {
                    contact_form.find('.loading').delay('1000').fadeOut('fast');

                    $jthis.delay('1000').clearForm();
                    $j("dl.details label").unbind().delay('1000').show().animate({
                        opacity: 1.0
                    }, 'fast').inFieldLabels({
                        fadeOpacity: 0.25
                    });
                    $jthis.fadeTo('fast', 1.0);

                    if (contact_form.find('.success').length <= 0) {
                        setTimeout(function() {
                            contact_form.prepend(Messages.thanks);
                            contact_form.find('.success').delay('5000').fadeOut('fast');
                        }, 1000);
                    } else {
                        contact_form.find('.success').delay('1000').show();
                        contact_form.find('.success').delay('5000').fadeOut('fast');
                    }

                },
                error: function(xhr, status, error) {

                    contact_form.find('.loading').hide();

                    if (contact_form.find('.er').length <= 0) {
                        contact_form.prepend(Messages.error);
                        contact_form.find('.er').delay('5000').fadeOut('fast');
                    } else {
                        contact_form.find('.er').show();
                        contact_form.find('.er').delay('5000').fadeOut('fast');
                    }
                    $jthis.fadeTo('fast', 1.0);
                }
            });
        }
    });
});