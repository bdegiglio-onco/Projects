<?php
/**
 *
 * Framework Get Option
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_option' ) ) {
  function cs_get_option( $option_name = '' ) {

    $options      = get_option( FRAMEWORK_OPTION_NAME );
    $customizes   = get_option( CUSTOMIZE_OPTION_NAME );
    $options      = wp_parse_args( $customizes, $options );
    $options      = apply_filters( 'cs_get_option', $options ); // Preview Helper!

    if( isset( $options[$option_name] ) && isset( $option_name ) ) {
      return $options[$option_name];
    } else {
      return null;
    }

  }
}

/**
 *
 * Framework Set Option
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_set_option' ) ) {
  function cs_set_option( $option_name = '', $new_value = '' ) {

    $options    = get_option( FRAMEWORK_OPTION_NAME );
    $customizes = get_option( CUSTOMIZE_OPTION_NAME );

    if( isset( $options[$option_name] ) ) {

      $options[$option_name] = $new_value;
      update_option( FRAMEWORK_OPTION_NAME, $options );

    } else if( isset( $customizes[$option_name] ) ) {

      $customizes[$option_name] = $new_value;
      update_option( CUSTOMIZE_OPTION_NAME, $customizes );

    } else {

      return;

    }

  }
}

/**
 *
 * Framework Get All Option
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_all_option' ) ) {
  function cs_get_all_option() {

    $options    = get_option( FRAMEWORK_OPTION_NAME );
    $customizes = get_option( CUSTOMIZE_OPTION_NAME );
    $options    = wp_parse_args( $customizes, $options );

    return $options;

  }
}

/**
 *
 * Framework Fields
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_field' ) ) {
  function cs_get_field( $field = array(), $value = '', $unique = '' ) {

    $unique = ( isset( $unique ) ) ? $unique : '';

    // check for field type
    if ( isset( $field['type'] ) ) {

      // set class name
      $class = 'CSFramework_Option_' . $field['type'];

      // check class
      if( class_exists( $class ) ) {

        $el_wrap_id     = ( isset( $field['id'] ) ) ? ' id="element-'. $field['id'] .'"' : '';
        $el_class       = ( isset( $field['el_class'] ) ) ? ' class_' . $field['el_class'] : '';
        $el_wrap_class  = ( !isset( $field['pseudo'] ) )  ? 'cs-element-wrap' : 'pseudo-field';

        // add dependencies attributes
        $depend = '';
        $hidden = '';
        $sub    = ( isset( $field['sub'] ) ) ? 'sub-': '';
        
        if ( isset( $field['dependency'] ) ) {
          $hidden  = ' hidden';
          $depend .= ' data-'. $sub .'controller="'. $field['dependency'][0] .'"';
          $depend .= ' data-'. $sub .'condition="'. $field['dependency'][1] .'"';
          $depend .= " data-". $sub ."value='". htmlspecialchars( $field['dependency'][2] ) ."'";
        }

        $fieldset_class = ( isset( $field['title'] ) )    ? 'cs-element-fieldset ' : '';

        echo '<div'. $el_wrap_id .' class="'. $el_wrap_class . $el_class . $hidden .'"' . $depend.'>';

        if( isset( $field['title'] ) ) {
          $field_desc = ( isset( $field['desc'] ) ) ? '<p class="cs-text-desc">'. $field['desc'] .'</p>' : '';
          echo '<div class="cs-element-title"><h4>' . $field['title'] . '</h4>'. $field_desc .'</div>';
        }

        echo '<div class="'. $fieldset_class .'cs_field cs_field_'. $field['type'] .'">';


        $value   = ( !isset( $value ) && isset( $field['default'] ) ) ? $field['default'] : $value;
        $value   = ( isset( $field['value'] ) ) ? $field['value'] : $value;
        $element = new $class( $field, $value, $unique );
        $element->output();
        
        echo '</div>';

        echo '<div class="clear"></div>';

        echo '</div>';

      } else {
        echo '<p><span class="label label-danger">Field class is not available.</span></p>';
      }

    } else {
      echo '<p><span class="label label-danger">Field type is not available.</span></p>';
    }

  }
}