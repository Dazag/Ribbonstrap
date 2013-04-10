/**
 * @name JRibbon
 * @link https://github.com/Dazag/.. The ribbon function for the ribbon actions and events
 *  
 * @author David Zamora Gutiérrez <david@ideatic.net>
 * @copyright (c) 2013, Ideatic España 
 * @param {type} $
 * @returns {undefined}
 */
!function($) {

    $.fn.ribbon = function(options) {

        /**
         * Evento cambia la clase active sobre evento click en el boton
         */
        $(this).find('.ribbon-tab').click(function() {
            var current_tab = $(this);

            $(this).closest('.ribbon-tabs').find('.ribbon-tab').each(function() {
                $(this).toggleClass('active', $(this) === current_tab);
            });

            $(this).closest('.ribbon-tabs').trigger('tab_changed');
        });

        /**
         * Change active tab when scrolling up,down hover the ribbon
         * @param {event} event 
         * @param {speed} delta 
         */
        $(this).bind('mousewheel', function(event, delta) {
            var dir = delta > 0 ? true : false;
            var current_active = $(this).find('.ribbon-tab.active');

            if (dir) {
                //arriba
                var next_tab = current_active.next('.ribbon-tab:not(.main-tab)');
                if (next_tab.length !== 0) {
                    current_active.toggleClass('active');
                    tab_content_select(next_tab);
                }
            } else {
                //abajo
                var prev_tab = current_active.prev('.ribbon-tab:not(.main-tab)');
                if (prev_tab.length !== 0) {
                    current_active.toggleClass('active');
                    tab_content_select(prev_tab);
                }
            }
            return false;
        });

        /**
         * Add active class to the ribbon_tab and select its appropiate content to show
         * @param {node} ribbon_tab
         */
        $.fn.tab_content_select = function(ribbon_tab) {
            ribbon_tab.addClass('active');
            var content = ribbon_tab.attr('id');
            var content_name = content.toLowerCase().replace("tab-", "");
//            ribbon_tab.find('#' + content_name);
        };

        /**
         * Add class active for first time
         */
        $.fn.add_active_class = function() {
            $('.ribbon-tabs').each(function() {
                var ribbon_tab_active = $(this).find('.ribbon-tab.active');
                if (ribbon_tab_active.length === 0) {
                    tab_content_select($(this).find('.ribbon-tab:not(.main-tab):first'));
                }
            });
        };

        $(this).on('tab_changed', function() {
           console.log('tab changed by: ' + this);
        });
    };

}(window.jQuery);