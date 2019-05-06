/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'Magento_Checkout/js/view/payment/default'
    ],
    function(Component) {
        'use strict';
        console.log("Paymentmethod-method.js");
        return Component.extend({
            defaults: {
                template: 'Kemana_OfflinePayment/payment/paymentmethod'
            },
 
            /** Returns send check to info */
            getMailingAddress: function() {
                return window.checkoutConfig.payment.checkmo.mailingAddress;
            },
 
        });
    }
);