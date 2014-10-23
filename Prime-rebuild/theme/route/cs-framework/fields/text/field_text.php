<?php
/**
 *
 * Field: Input Text
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_text extends CSFramework_Options_API {

  public function __construct( $field = array(), $value = '', $unique = '' ) {
    $this->field    = $field;
    $this->value    = $value;
    $this->unique   = $unique;
  }

  public function output(){

    echo $this->element_before();

    if( isset( $this->field['multilang'] ) && ( is_wpml_activated() || is_qtranslate_activated() ) ) {

      if( is_wpml_activated() ) {

        $languages  = icl_get_languages();
        $current    = ICL_LANGUAGE_CODE;

      } else if( is_qtranslate_activated() ) {

        global $q_config;
        $q_current  = $q_config['language'];
        $languages  = qtrans_getSortedLanguages();
        $languages  = array_flip( $languages );
        $current    = $q_current;

      }

      foreach ( $languages as $key => $value ) {
        $type = ( $key == $current ) ? 'text' : 'hidden';
        echo '<input type="'. $type .'" name="'. $this->element_name('['. $key .']') .'" value="'. $this->value[$key] .'"'. $this->element_class() . $this->element_attributes() .'/>';
      }

    } else {
      echo '<input type="text" name="'. $this->element_name() .'" value="'. $this->value .'"'. $this->element_class() . $this->element_attributes() .'/>';
    }
    echo $this->element_after();

  }

}