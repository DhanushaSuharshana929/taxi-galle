
//--------------------------------------------------check one by one on blur--------------------------------------------------
jQuery(document).ready(function () {
      jQuery("#txtName").blur(function () {
        validateEmpty("txtName", "spanName");
    });
        
    jQuery("#txtEmail").blur(function () {
        ValidateEmail("txtEmail", "spanEmail");
    });
    
    jQuery("#datepicker").blur(function () {
        validateEmpty("datepicker", "spanArrival");
    });

    jQuery("#datepicker1").blur(function () {
        validateEmpty("datepicker1", "spanDeparture");
    });
    
    jQuery("#tour_package").blur(function () {
        validateEmpty("tour_package", "spanPackage");
    });
    
    jQuery("#txtAdults").blur(function () {
        validateEmpty("txtAdults", "spanAdults");
    });
    
        jQuery("#txtChildren").blur(function () {
        validateEmpty("txtChildren", "spanChildren");
    });
//    jQuery("#txtSubject").blur(function () {
//
//        validateEmpty("txtSubject", "spanSubject");
//
//    });
   /* jQuery("#txtDate").blur(function () {
     
     validateEmpty("txtDate", "spanDate");
     
     });
     jQuery("#txtNoDate").blur(function () {
     
     validateEmpty("txtNoDate", "spanNoDate");
     
     });*/
     
     
     
     
//     jQuery("#txtMessage").blur(function () {
//     
//     validateEmpty("txtMessage", "spanMessage");
//     
//     });
    jQuery("#captchacode").blur(function () {
        validateEmpty("captchacode", "capspan");
    });
    jQuery("#btnSubmit").bind('click', function () {
        if (!validate()) {
            return;
        }
        jQuery("#checking").show();
        sendForm();
    });
    jQuery('.input-validater').keypress(function (e) {
        if (e.keyCode == 13) {
            if (!validate()) {
                return;
            }
            jQuery("#checking").show();
            sendForm();
        }
    });
});
//--------------------------------------------------function to check button click --------------------------------------------------
function validate() {
    if (
            validateEmpty("txtName", "spanName") &
            ValidateEmail("txtEmail", "spanEmail") &
            validateEmpty("datepicker", "spanArrival") &
            validateEmpty("datepicker1", "spanDeparture") &
            validateEmpty("tour_package", "spanPackage") &
            validateEmpty("txtAdults", "spanAdults") &
            validateEmpty("txtChildren", "spanChildren") &
            validateEmpty("captchacode", "capspan")
            )
    {
        return true;
    } else {
        return false;
    }
}
//--------------------------------------------------Ajax call --------------------------------------------------
function sendForm() {
    jQuery.ajax({
        url: "booking-form/send-email.php",
        cache: false,
        dataType: "json",
        type: "POST",
        data: {
            captchacode: jQuery('#captchacode').val(),
            visitor_name: jQuery('#txtName').val(),
            visitor_email: jQuery('#txtEmail').val(),
            visitor_country: jQuery('#txtCountry').val(),
            visitor_phone: jQuery('#txtPhone').val(),
            start_date: jQuery('#datepicker').val(),
            no_of_date: jQuery('#datepicker1').val(),
            tour_package: jQuery('#tour_package').val(), 
            adults: jQuery('#txtAdults').val(), 
            children: jQuery('#txtChildren').val(), 
            message: jQuery('#txtMessage').val()
        },
        success: function (html) {
            var status = html.status;
            var msg = html.msg;
            if (status == "incorrect") {
                jQuery("#capspan").addClass("notvalidated");
                jQuery("#capspan").html(msg);
                jQuery("#capspan").show();
                jQuery("#checking").fadeOut(2000);

            } else if (status == "correct") {
                jQuery("#checking").hide();
                jQuery("#dismessage").html(msg).delay(1000).show(1000);

                jQuery('#txtName').val("");
                jQuery('#txtEmail').val("");
                jQuery('#txtCountry').val("");
                jQuery('#txtPhone').val("");
                jQuery('#datepicker').val("");
                jQuery('#datepicker1').val("");
                jQuery('#tour_package').val("");
                jQuery('#txtAdults').val("");
                jQuery('#txtChildren').val("");
                jQuery('#txtMessage').val("");
                jQuery('#captchacode').val("");
                
                
                
                
                
                
//                jQuery('#datepicker').val("");
//                jQuery('#datepicker1').val("");
//                jQuery('#tour_package').val("");
//                jQuery('#txtAdults').val("");
//                jQuery('#txtChildren').val("");
//                jQuery('#txtMessage').val("");
                
            }
        }
    });
}
//-----------------   function to check empty -------------------------------------------------------
function validateEmpty(field, validatorspan)
{
    if (jQuery('#' + field).val().length != 0)
    {
        jQuery('#' + validatorspan).addClass("validated");
        jQuery('#' + validatorspan).removeClass("notvalidated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("");
        return true;
    } else
    {
        jQuery('#' + validatorspan).addClass("notvalidated");
        jQuery('#' + validatorspan).removeClass("validated");
        jQuery('#' + validatorspan).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatorspan).text("This field can not be empty");
        return false;
    }
}
//--------------------------------------------------function to check email--------------------------------------------------
function ValidateEmail(field, validatordiv)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (jQuery('#' + field).val().match(mailformat))
    {
        jQuery('#' + validatordiv).addClass("validated");
        jQuery('#' + validatordiv).removeClass("notvalidated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("");
        return true;
    } else
    {
        jQuery('#' + validatordiv).addClass("notvalidated");
        jQuery('#' + validatordiv).removeClass("validated");
        jQuery('#' + validatordiv).fadeIn('slow').fadeOut(3000);
        jQuery('#' + validatordiv).text("You have entered an invalid Email Address");
        return false;
    }
}
