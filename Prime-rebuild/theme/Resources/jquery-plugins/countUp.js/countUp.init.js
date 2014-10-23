;(function ( $, window, document, undefined ) {
  'use strict';

  $.fn.countUp = function( options ) {
    
    var defaults = {
      useEasing: true,
      useGrouping: true, 
      separator: ',',
      decimal: '.'
    };

    options = $.extend({}, defaults, options);

    return this.each( function() {
      var elem      = $(this),
          from      = elem.data('from') || 0,
          to        = elem.data('to') || 0,
          decimals  = elem.data('decimals') || 0,
          duration  = elem.data('duration') || 1.5;

      options.separator     = elem.data('separator') || options.separator;
      options.useGrouping   = elem.data('separator') ? true : false;

      new countUp( this, from, to, decimals, duration, options ).start();

    });

  };

})( jQuery, window, document );