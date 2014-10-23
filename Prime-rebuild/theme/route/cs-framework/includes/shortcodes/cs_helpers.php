<?php
/**
 *
 * CS Current Year Shortcode
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function cs_current_year(){
  return date('Y');
}
add_shortcode('cs_current_year', 'cs_current_year');

/**
 *
 * CS Home URL Shortcode
 * @version 1.0.0
 * @since 1.0.0
 *
 */
function cs_home_url(){
  return esc_url( home_url( '/' ) );
}
add_shortcode('cs_home_url', 'cs_home_url');