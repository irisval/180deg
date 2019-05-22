// https://discourse.getgrav.org/t/conditional-field-creating-a-flexible-content-field-like-advanced-custom-fields-wordpress-plugin/7293/2

var flexibleContentField = (function (w, d, $, undefined) {

    'use strict';

    var s = {
            selectors: {
                theRepeater: '.field-selection',
                theSelect: '.field-selection__select'
            }
        },
        els = {},
        init = function () {
            console.log("HELLO THIS IS SHOWING UP");
            console.log("HELLO THIS IS SHOWING UP");
            // define elements
            els.theRepeater = $(s.selectors.theRepeater);

            // no elements
            if (!els.theRepeater.length) { return; }

            // theloop
            els.theRepeater.each(function() {
                // the bind
                $(this).on('change', checkTarget);

                // adjust existing selections
                var theRepeaterItems = $(this).children('li');
                theRepeaterItems.each(function(index, element) {
                    var theRepeaterItem = $(element),
                        theSelect = theRepeaterItem.find(s.selectors.theSelect);

                    showHide(theRepeaterItem, theSelect);
                });
            });
            
        },
        checkTarget = function(event) {
            console.log("HELLO THIS IS SHOWING UP");
            // The vars
            var theRepeaterItem = $(event.target).closest('li'),
                theSelect = event.target;

            // Target is Select?
            theSelect.nodeName.toLowerCase() === 'select' ? showHide(theRepeaterItem, theSelect) : '';
        },
        showHide = function (theRepeaterItem, theSelect) {
                console.log("HELLO THIS IS SHOWING UP");
            // the vars
            var theRepeaterItem = $(theRepeaterItem),
                theSelect = $(theSelect),
                theSelectParent = theSelect.closest('.form-field'),

                theValue = theSelect.val(),
                theRefererPrefix = 'field-selection__',
                theReferer = theRefererPrefix + theValue,

                theSelectedFields = theRepeaterItem.find('input[type="hidden"][value="'+theReferer+'"]'),
                theFieldToShow = theSelectedFields.closest('.form-fieldset');

            // Exeption - default selected
            if (theValue === 'default') { return; }

            // show the selected field
            theFieldToShow.addClass('field-selection--show');

            // hide the select
            theSelectParent.css('display','none');
        }

    return {
        init: init
    };

}(window, window.document, window.jQuery));

// theCall - on window loaded
(function (w, d, undefined) {

    "use strict";
        console.log("HELLO THIS IS SHOWING UP");
    var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame,
        init = function () { w.flexibleContentField.init(); };

    // when all is loaded
    raf ? raf(function () { w.setTimeout(init, 0); }) : w.addEventListener('load', init);

}(window, window.document));