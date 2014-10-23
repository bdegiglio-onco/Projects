<?php
/**
 *
 * CS Font Awesome Shortcode
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function cs_fa( $atts, $content = '' ){
  extract( shortcode_atts( array(
    'icon'  => '',
    'class' => '',
    'style' => '',
  ), $atts ) );

  $style = ( $style ) ? ' style="'. $style .'"' : '';
  $class = ( $class ) ? ' '. $class : '';

  return '<i class="fa fa-'. $icon . $class .'"'. $style .'></i>';
}
add_shortcode('cs_fa', 'cs_fa');