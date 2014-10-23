// the semi-colon before the function invocation is a safety
// net against concatenated scripts and/or other plugins
// that are not closed properly.
;(function ( $, window, document, undefined ) {
  'use strict';

  // exists element
  $.exists = function ( selector ) {
    return ( $(selector).length > 0 );
  };

  // exists jquery plugin
  $.jqexists = function ( fnc ) {
    return ( $.fn[fnc] !== undefined );
  };

})( jQuery, window, document );