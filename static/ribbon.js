/**
 * @name JRibbon
 * @link https://github.com/Dazag/.. The ribbon function for the ribbon actions and events
 *  
 * @author David Zamora Gutiérrez <david@ideatic.net>
 * @copyright (c) 2013, Ideatic España 
 */

(function($) {

    var methods = {//implementar más tarde
        init: function(options) {
            this.settings = $.extend({
                disable_scroll: false
            }, options);
        }
        //Any other methods you want to implement?? 
        //--Here--
    };

    $.fn.ribbon = function(method_or_options) {

        var ribbon_object = this;

        // Method | Options calling logic
        if (methods[method_or_options]) {
            //Call the method
            return methods[ method_or_options ].apply(ribbon_object, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method_or_options === 'object' || !method_or_options) {
            //Initialize
            methods.init.apply(ribbon_object, arguments);
        } else {
            $.error('Method ' + method_or_options + ' does not exist on jQuery.tooltip');
        }


        /*Events*/

        /**
         * Click event on .ribbon-tabs li change to the active class
         */
        ribbon_object.find('li').click(function() {

            if (!$(this).hasClass('main-tab')) {
                var current_tab = this;

                $(this).closest('.ribbon-tabs').find('li').each(function() {
                    $(this).toggleClass('active', this === current_tab);
                });

                var tab_actived = $(this).closest('.ribbon-tabs').find('li.active');
                $(this).trigger('tab_changed', tab_actived);
            }
        });

        if (!ribbon_object.settings.disable_scroll) {
            /**
             * Change active tab when scrolling up,down hover the ribbon
             * @param {event} event 
             * @param {speed} delta 
             * @return {boolean} always return false
             */
            ribbon_object.on('mousewheel', function(event, delta) {
                var dir = delta > 0 ? true : false;
                var current_active = ribbon_object.find('li.active');

                if (!dir) {//sentido del movimiento
                    //arriba
                    var next_tab = current_active.next('.ribbon-tabs li:not(.main-tab):not(.context-tab)');
                    if (next_tab.length !== 0) {
                        current_active.toggleClass('active');
                        next_tab.trigger('tab_changed', next_tab);
                    }
                } else {
                    //abajo
                    var prev_tab = current_active.prev('.ribbon-tabs li:not(.main-tab):not(.context-tab)');
                    if (prev_tab.length !== 0) {
                        current_active.toggleClass('active');
                        prev_tab.trigger('tab_changed', prev_tab);
                    }
                }
                return false;
            });
        }

        /**
         * tab_changed triggers when a new tab is selected
         */
        ribbon_object.on('tab_changed', function(event) {
            var tab = $(event.target);

            if (!tab.hasClass('active'))
                tab.addClass('active');

            tab = tab.find('a');

            if (tab.data('toggle') === 'tab') {
                var pane_id = tab.attr('href');
                var select_pane = ribbon_object.find(pane_id);

                ribbon_object.find('.ribbon-pane.active').toggleClass('active');
                select_pane.addClass('active');
            }//posibilidad de añadir otro tipo de tab o pagina

        });

    };
})(jQuery);
