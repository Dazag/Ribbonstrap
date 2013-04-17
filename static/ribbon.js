/**
 * @name JRibbon
 * @link https://github.com/Dazag/.. The ribbon function for the ribbon actions and events
 *  
 * @author David Zamora Gutiérrez <david@ideatic.net>
 * @copyright (c) 2013, Ideatic España 
 */

(function($) {

    var methods = {
        init: function(options) {

            var ribbon_object = this;

            ribbon_object.settings = $.extend({
                disable_scroll: false,
                closable_tab: false
            }, options);

            return this.each(function() {
                /**
                 * Click event on .ribbon-tabs li change to the active class
                 */
                ribbon_object.find('li').click(function() {

                    var current_tab = this;

                    $(this).closest('.ribbon-tabs').find('li').each(function() {
                        $(this).toggleClass('active', this === current_tab);
                    });

                    var tab_actived = $(this).closest('.ribbon-tabs').find('li.active');
                    $(this).trigger('tab_changed', tab_actived);

                    //does not follow the href
                    return false;

                });

                /**
                 * tab_changed triggers when a new tab is selected
                 */
                ribbon_object.on('tab_changed', function(event) {

                    var tab = $(event.target);

                    if (!tab.hasClass('active'))
                        tab.addClass('active');

                    if (tab.hasClass('main-tab')) {
                        var main_tab = tab;
                    }

                    tab = tab.find('a');

                    if (tab.data('toggle') === 'tab') {

                        var pane_id = tab.attr('href');
                        var select_pane = ribbon_object.find(pane_id);

                        ribbon_object.find('.ribbon-pane.active').toggleClass('active');
                        select_pane.addClass('active');

                        if (main_tab) {
                            select_pane.addClass('main-tab');
                            var position = main_tab.position();
                            select_pane.css({
                                top: (position.top + main_tab.height()),
                                left: position.left
                            });
                        }
                    }//you can still add some differents toggle
                    //more for different actions

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
                        if (!dir) {
                            //up
                            var next_tab = current_active.next('.ribbon-tabs li:not(.main-tab):not(.context-tab)');
                            if (next_tab.length !== 0) {
                                current_active.toggleClass('active');
                                next_tab.trigger('tab_changed', next_tab);
                            }
                        } else {
                            //down
                            var prev_tab = current_active.prev('.ribbon-tabs li:not(.main-tab):not(.context-tab)');
                            if (prev_tab.length !== 0) {
                                current_active.toggleClass('active');
                                prev_tab.trigger('tab_changed', prev_tab);
                            }
                        }
                        return false;
                    });
                }
            });
        }
//Any other methods you want to implement?? 
//--Here--
    };

    $.fn.ribbon = function(methods_or_options) {

        // Method | Options calling logic
        if (methods[methods_or_options]) {
            //Call the method
            return methods[ methods_or_options ].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof methods_or_options === 'object' || !methods_or_options) {
            //Initialize
            methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + methods_or_options + ' does not exist on jQuery.tooltip');
        }

    };
})(jQuery);
