<?php
/**
 * Get file/directory path in Vc.
 *
 * @param string $name - path name
 * @param string $file
 * @return string
 */
function cs_vc_path_filter( $path ){

  $changed_php = array(
    'map.php',
    'column_offset.php',
  );

  if( in_array( basename( $path ), $changed_php ) ) {
    return FRAMEWORK_PLUGIN_DIR . '/js-composer-init/changed-files/' . basename( $path );
  }

  return $path;

}
add_filter( 'vc_path_filter', 'cs_vc_path_filter' );