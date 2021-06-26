/*global define*/
define([
    "jquery",
    "Magento_Ui/js/form/form",
    "ko",
    "uiComponent",
    "underscore",
    "Magento_Checkout/js/model/step-navigator",
    "Magento_Customer/js/model/customer",
    "Magento_Checkout/js/model/quote",
    "mage/url",
    "mage/storage",
], function(Component) {
    'use strict';
    return Component.extend({
        defaults: {
            template: "TaskModule_TaskShipping/custom_checkout_form",
        },

        initialize: function () {
            this._super();
            // component initialization logic
            return this;
        },
       
        /**
         * Form submit handler
         *
         * This method can have any name.
         */
        onSubmit: function() {
            // // trigger form validation
            // this.source.set('params.invalid', false);
            // this.source.trigger('customCheckoutForm.data.validate');

            // // verify that form data is valid
            // if (!this.source.get('params.invalid')) {
            //     // data is retrieved from data provider by value of the customScope property
            //     var formData = this.source.get('customCheckoutForm');
            //     // do something with form data
            //     console.dir(formData);
           // }
        }
    });
});
