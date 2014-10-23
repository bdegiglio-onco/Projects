<?php
/**
 *
 * CS Share
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function cs_share( $atts, $content = '', $id = '' ){

  extract( shortcode_atts( array(
    'id'      => '',
    'class'   => '',
  ), $atts ) );

  $id       = ( $id ) ? ' id="'. $id .'"' : '';
  $class    = ( $class ) ? ' '. $class : '';

  return;
}
add_shortcode('cs_share', 'cs_share');