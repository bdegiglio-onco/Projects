<?php
/**
 *
 * VC COLUMN and VC COLUMN INNER
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function ro_column_offset_class_merge($column_offset, $width) {
  // Remove offset settings if
  if( vc_settings()->get( 'not_responsive_css' ) === '1') {
    $column_offset = preg_replace('/col\-(lg|md|xs)[^\s]*/', '', $column_offset);
  }
  if(preg_match('/col\-sm\-\d+/', $column_offset)) return $column_offset;
  return $width.(empty($column_offset) ? '' : ' '.$column_offset);
}

function cs_column( $atts, $content = '', $id = '' ){

  extract( shortcode_atts( array(
    'id'                  => '',
    'class'               => '',
    'in_style'            => '',
    'width'               => '1/1',
    'offset'              => '',
    'animation'           => '',
    'animation_delay'     => '',
    'animation_duration'  => '',
  ), $atts ) );

  $id               = ( $id ) ? ' id="'. $id .'"' : '';
  $class            = ( $class ) ? ' '. $class : '';
  $in_style         = ( $in_style ) ? ' style="'. $in_style .'"' : '';
  $offset           = ( $offset ) ? ' '. str_replace( 'vc_', '', $offset ) : '';

  // element animation
  $animation        = ( $animation ) ? ' cs-animation '. $animation : '';
  $animation_data   = ( $animation && $animation_delay ) ? ' data-delay="'. $animation_delay .'"' : '';
  $animation_data   = ( $animation && $animation_duration ) ? $animation_data . ' data-duration="'. $animation_duration .'"' : $animation_data;
  
  return '<div'. $id .' class="col-md-'. cs_get_bootstrap_col( $width ) . $offset . $animation . $class .'"'. $animation_data . $in_style .'>'. do_shortcode( $content ) .'</div>';
}
add_shortcode( 'vc_column', 'cs_column' );
add_shortcode( 'vc_column_inner', 'cs_column' );