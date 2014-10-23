<?php
/**
 *
 * The Sidebar containing the main widget areas.
 * @since 1.0.0
 * @version 1.0.0
 *
 */
?>
<aside id="sidebar">
<?php

  if( is_woocommerce_shop() || is_tax( 'product_cat' ) || is_tax( 'product_tag' ) || is_singular( 'product' ) ) {

    $cs_post_id = wc_get_page_id( 'shop' );
    $cs_meta    = get_post_meta( $cs_post_id, '_custom_page_options', true );
    $cs_widget  = ( ! empty( $cs_meta['sidebar_widget'] ) ) ? $cs_meta['sidebar_widget'] : '';

  } elseif ( is_page() && ! empty( $post ) ) {

    $cs_post_id = $post->ID;
    $cs_meta    = get_post_meta( $cs_post_id, '_custom_page_options', true );
    $cs_widget  = ( ! empty( $cs_meta['sidebar_widget'] ) ) ? $cs_meta['sidebar_widget'] : '';

  } else {

    $cs_widget  = cs_get_option( 'blog_widget' );

  }

  $cs_widget    = ( ! empty( $cs_widget ) ) ? $cs_widget : 'sidebar-1';

  dynamic_sidebar( $cs_widget );

?>
</aside><!-- /aside -->