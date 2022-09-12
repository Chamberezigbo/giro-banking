jQuery(document).ready(function () {

    // Online Banking 1.10.1 by JP Larson, Copyright 2020 Fiserv. All rights reserved.
    jQuery('#login').onlineBanking({
        defaultAccountType: "personal",
        routingNumber: "231374916", //OB Routing Number
        retail: {
            version: "5.4-SecureNow-Load", //Use the Retail Online version number, or "custom" for the custom function. If that version isn't set, 5.1 will be used.
            server: "web2.secureinternetbank.com", //OB Server Subdomain
            profileNumber: null, //OB Profile Number (Integer)
            active: true
        },
        business: {
            version: "6.0-Load", //Use the Business Online version number, or "custom" for the custom function. If that version isn't set, 5.0 will be used.
            server: "web2.secureinternetbank.com", //OB Server Subdomain
            profileNumber: null, //OB Profile Number (Integer)
            active: true
        }
    });

    // Validate Form 1.4.2 by JP Larson, Copyright 2020 Fiserv. All rights reserved.
    //jQuery('form').validateForm();

    // Field History 2.0.1 by JP Larson, Copyright 2018 Fiserv. All rights reserved.
    if (typeof jQuery.fn.onlineBanking === "function") {
        jQuery('[name=loginTo]').fieldHistory({
            form: jQuery('#login').find('form')
        });
    }
    //jQuery('input, select, textarea').fieldHistory();

    // Pseudo Select 4.1.1 by JP Larson, Copyright 2020 Fiserv. All rights reserved.
    jQuery('label select').pseudoSelect();

});