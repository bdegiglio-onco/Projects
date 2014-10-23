<?php
/**
 *
 * Codestar Framework
 *
 * @author Codestar
 * @license Commercial License
 * @link http://codestar.me
 * @copyright 2014 Codestar Themes
 * @since 1.0.0
 * @version 1.0.0
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }

defined( 'THEME_DIR' )              or  define( 'THEME_DIR', get_template_directory() );
defined( 'THEME_URI' )              or  define( 'THEME_URI', get_template_directory_uri() );
defined( 'THEME_CACHE_DIR' )        or  define( 'THEME_CACHE_DIR', THEME_DIR . '/cache' );
defined( 'THEME_CACHE_URI' )        or  define( 'THEME_CACHE_URI', THEME_URI . '/cache' );
defined( 'FRAMEWORK_DIR' )          or  define( 'FRAMEWORK_DIR', THEME_DIR . '/cs-framework' );
defined( 'FRAMEWORK_URI' )          or  define( 'FRAMEWORK_URI', THEME_URI . '/cs-framework' );
defined( 'FRAMEWORK_ASSETS' )       or  define( 'FRAMEWORK_ASSETS', THEME_URI . '/cs-framework/assets' );
defined( 'FRAMEWORK_INCLUDE_DIR' )  or  define( 'FRAMEWORK_INCLUDE_DIR', THEME_DIR . '/cs-framework/includes' );
defined( 'FRAMEWORK_INCLUDE_URI' )  or  define( 'FRAMEWORK_INCLUDE_URI', THEME_URI . '/cs-framework/includes' );
defined( 'FRAMEWORK_PLUGIN_DIR' )   or  define( 'FRAMEWORK_PLUGIN_DIR', THEME_DIR . '/cs-framework/plugins' );
defined( 'FRAMEWORK_PLUGIN_URI' )   or  define( 'FRAMEWORK_PLUGIN_URI', THEME_URI . '/cs-framework/plugins' );
defined( 'FRAMEWORK_OPTION_NAME' )  or  define( 'FRAMEWORK_OPTION_NAME', 'framework_option' );
defined( 'CUSTOMIZE_OPTION_NAME' )  or  define( 'CUSTOMIZE_OPTION_NAME', 'customize_option' );
defined( 'CACHED_OPTION_NAME' )     or  define( 'CACHED_OPTION_NAME', 'cs_skin_cached' );

// base classes
require_once ( FRAMEWORK_DIR . '/classes/cs-framework-helpers-api.php'    );
require_once ( FRAMEWORK_DIR . '/classes/cs-framework-abstract.class.php' );
require_once ( FRAMEWORK_DIR . '/classes/cs-framework-mega-menu-api.php'  );
require_once ( FRAMEWORK_DIR . '/classes/cs-framework-post-types-api.php' );
require_once ( FRAMEWORK_DIR . '/classes/cs-framework-sidebars-api.php'   );
require_once ( FRAMEWORK_DIR . '/classes/cs-framework-customize-api.php'  );
require_once ( FRAMEWORK_DIR . '/classes/cs-framework.class.php'          );

// is admin init
function is_admin_init(){

  // admin class
  require_once ( FRAMEWORK_DIR . '/classes/cs-framework-shortcodes-api.php' );
  require_once ( FRAMEWORK_DIR . '/classes/cs-framework-actions-api.php'    );
  require_once ( FRAMEWORK_DIR . '/classes/cs-framework-enqueue-api.php'    );
  require_once ( FRAMEWORK_DIR . '/classes/cs-framework-options-api.php'    );
  require_once ( FRAMEWORK_DIR . '/classes/cs-framework-metabox-api.php'    );

  // admin config
  require_once ( FRAMEWORK_DIR . '/config/cs-metabox-config.php'        );
  require_once ( FRAMEWORK_DIR . '/config/cs-shortcode-config.php'      );

}
add_action('admin_init', 'is_admin_init');

// theme config
require_once ( FRAMEWORK_DIR . '/config/cs-helper-functions.php'      );
require_once ( FRAMEWORK_DIR . '/config/cs-actions-config.php'        );
require_once ( FRAMEWORK_DIR . '/config/cs-filters-config.php'        );
require_once ( FRAMEWORK_DIR . '/config/cs-framework-config.php'      );
require_once ( FRAMEWORK_DIR . '/config/cs-enqueue-config.php'        );
require_once ( FRAMEWORK_DIR . '/config/cs-customize-config.php'      );
require_once ( FRAMEWORK_DIR . '/config/cs-includes-config.php'       );
require_once ( FRAMEWORK_DIR . '/config/cs-post-formats-helper.php'   );
require_once ( FRAMEWORK_DIR . '/config/cs-front-end-functions.php'   );
require_once ( FRAMEWORK_DIR . '/config/cs-widgets-config.php'        );