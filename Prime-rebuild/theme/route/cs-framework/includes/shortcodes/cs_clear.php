<?php
/**
 *
 * CS Clear
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function cs_clear( $atts, $content = '' ){
  return '<hr class="cs-clear">';
}
add_shortcode('cs_clear', 'cs_clear');