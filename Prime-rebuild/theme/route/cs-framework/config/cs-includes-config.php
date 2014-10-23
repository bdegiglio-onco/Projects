<?php
/**
 *
 * Load all of shortcode from folder
 * @since 1.0.0
 * @version 1.0.0
 *
 */
//
// Require plugin.php to use is_plugin_active() below
// ----------------------------------------------------------------------------------------------------
if ( ! function_exists( 'is_plugin_active' ) ) {
  include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

//
// Load Shortcodes
// ----------------------------------------------------------------------------------------------------
foreach ( glob( FRAMEWORK_INCLUDE_DIR . '/shortcodes/cs_*.php', GLOB_NOSORT ) as $shortcode) {
  require_once( $shortcode );
}

foreach ( glob( FRAMEWORK_INCLUDE_DIR . '/shortcodes/vc_*.php', GLOB_NOSORT ) as $shortcode) {
  require_once( $shortcode );
}

//
// Custom Style Adapted
// ----------------------------------------------------------------------------------------------------
require_once( FRAMEWORK_INCLUDE_DIR . '/custom-style.php' );

//
// woocommerce integration
// ----------------------------------------------------------------------------------------------------
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
  include_once( FRAMEWORK_PLUGIN_DIR . '/woocommerce/woocommerce-config.php' );
}

//
// gravityforms integration
// ----------------------------------------------------------------------------------------------------
if( is_plugin_active( 'gravityforms/gravityforms.php' ) ) {
  include_once( FRAMEWORK_PLUGIN_DIR . '/gravityforms/gravityforms-config.php' );
}

//
// tgm integration
// ----------------------------------------------------------------------------------------------------
require_once( FRAMEWORK_PLUGIN_DIR . '/tgm-plugin-activation/tgm-route-plugins.php' );

//
// Visual Composer integration
// ----------------------------------------------------------------------------------------------------
if ( is_vc_activated() ) {
  include_once( FRAMEWORK_PLUGIN_DIR . '/js-composer-init/includes/paths.php' );
  include_once( FRAMEWORK_PLUGIN_DIR . '/js-composer-init/includes/init.php' );
}