<?php
/**
 *
 * CSFramework Customize API
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Customize_API extends CSFramework_Abstract {

  public function __construct( $sections ) {
    $this->sections = apply_filters( 'csframework_customize', $sections );
    $this->addAction( 'customize_register', 'register' );
    $this->addAction( 'customize_save_after', 'save_after' );
    $this->addAction( 'cs_framework_save', 'save', 1, 2 );
    $this->addAction( 'wp_ajax_cs-reset-customize', 'reset', 99 );
  }

  public function save( $request, $options ) {

    if ( isset( $request['import'] ) && ! empty( $request['import'] ) ) {
      $decode_string = $this->decodeString( $request['import'] );
      if( is_array( $decode_string ) ) {
        if( isset( $decode_string['customize_options'] ) ) {
          update_option( CUSTOMIZE_OPTION_NAME, $decode_string['customize_options'] );
        }
      }
    }

    if ( isset( $request['resetall'] ) ) {
      delete_option( CUSTOMIZE_OPTION_NAME );
    }

    return $request;
  }

  /**
   *
   * Customize Register
   * @since 1.0.0
   * @version 1.0.0
   *
   */
  public function register ( $wp_customize ) {

    require_once ( FRAMEWORK_DIR . '/classes/cs-framework-customize-helper.php' );

    $section_priority = 0;
    foreach ($this->sections as $section_key => $section_value) {

      $wp_customize->add_section( $section_key, array(
        'title'       => $section_value['title'],
        'priority'    => ( isset( $section_value['priority'] ) ) ? $section_value['priority'] : $section_priority,
        'description' => ( isset( $section_value['description'] ) ) ? $section_value['description'] : '',
      ) );

      $setting_priority = 0;
      foreach ( $section_value['settings'] as $setting_key => $setting_value ) {
        
        $setting_name         = CUSTOMIZE_OPTION_NAME . '[' . $setting_key .']';
        $predefined_colors    = get_predefined_colors();
        $transport            = ( isset( $setting_value['js_callback'] ) ) ? 'postMessage' : 'refresh';

        $default_setting_args = array(
          'default'               => ( isset( $predefined_colors[$setting_key] ) ) ? $predefined_colors[$setting_key] : '',
          'theme-supports'        => '',
          'type'                  => 'option',
          'capability'            => 'edit_theme_options',
          'sanitize_callback'     => '',
          'sanitize_js_callback'  => '',
          'transport'             => $transport,
        );
        $settings_args = wp_parse_args( $setting_value, $default_setting_args );
        $wp_customize->add_setting( $setting_name, $settings_args );
        
        $setting_control  = $setting_value['control'];
        $setting_ids      = array(
          'section'       => $section_key,
          'settings'      => $setting_name,
          'unique'        => CUSTOMIZE_OPTION_NAME,
          'priority'      => $setting_priority,
        );
        $control_args     = wp_parse_args( $setting_ids, $setting_control );

        switch ( $setting_control['type'] ) {
          
          case 'text':
          case 'radio':
          case 'checkbox':
          case 'select':
          case 'dropdown-pages':
            $wp_customize->add_control( $setting_key, $control_args );
          break;

          case 'color':
          case 'image':
          case 'upload':
          default:
            $call_class =  'WP_Customize_'. ucfirst( $setting_control['type'] ) .'_Control';
            $wp_customize->add_control( new $call_class( $wp_customize, $setting_key, $control_args ) );
          break;

        }

        $setting_priority++;
      }

      $section_priority++;
    }

    if ( $wp_customize->is_preview() && ! is_admin() ) {
      $this->addAction( 'wp_footer', 'live', 20 );
    }

  }

  /**
   * 
   * Live Changes
   * @since 1.0.0
   * @version 1.0.0
   *
   */
  public function live() {

    echo '<script type="text/javascript">';
    echo ';(function($,window,document,undefined){';

    foreach ( $this->sections as $key => $section ) {
      
      foreach ( $section['settings'] as $setting_key => $setting ) {

        if( isset( $setting['js_callback'] ) ) {
          
          $setting_id = CUSTOMIZE_OPTION_NAME . '[' . $setting_key .']';
          $callback = $setting['js_callback'];
          echo 'wp.customize("'. $setting_id .'",function(value){';
            echo 'value.bind(function(to){';
              
              if( is_array( $callback ) ) {

                switch( $callback['method'] ) {
                  case 'html':
                    echo '$("'. $callback['target'] .'").'. $callback['method'] .'(to);';
                  break;
                  default:
                  case 'css':
                    echo '$("'. $callback['target'] .'").'. $callback['method'] .'("'. $callback['prop'] .'", to);';
                  break;
                }

              } else {
                echo $callback;
              }

          echo '});';
          echo '});';
        }

      }

    }

    echo '})(jQuery,window,document);';
    echo '</script>';
  }

  /**
   * 
   * Save After
   * @since 1.0.0
   * @version 1.0.0
   *
   */
  public function save_after() {
    update_option( CACHED_OPTION_NAME, false );
  }

  /**
   * 
   * Reset Customize Settings
   * @since 1.0.0
   * @version 1.0.0
   *
   */
  public function reset() {
    delete_option( CUSTOMIZE_OPTION_NAME );
    update_option( CACHED_OPTION_NAME, false );
    die();
  }

}