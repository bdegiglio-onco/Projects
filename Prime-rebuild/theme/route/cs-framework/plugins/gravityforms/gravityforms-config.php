<?php
// changing submit button style
function form_submit_button( $button, $form ){
  return str_replace( 'button gform', cs_get_button_class(). ' gform', $button );
}
add_filter('gform_next_button', 'form_submit_button', 10, 2);
add_filter('gform_previous_button', 'form_submit_button', 10, 2);
add_filter('gform_submit_button', 'form_submit_button', 10, 2);