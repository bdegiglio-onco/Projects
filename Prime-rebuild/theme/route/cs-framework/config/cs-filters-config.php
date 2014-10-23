<?php
/**
 * 
 * Post formats filters in the_content
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_content_filter' ) ) {
  function cs_content_filter( $content ) {
    $post_format = get_post_format();
    if ( $post_format ) {
      $content = apply_filters( 'cs-post-format-'. $post_format, $content );
    }
    return $content;
  }
  add_filter( 'the_content', 'cs_content_filter', 2 );
}


/**
 * 
 * Post format "Link"
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_post_format_link' ) ) {
  function cs_post_format_link( $content ){
    $parse_content = post_format_link_helper( $content );
    return $parse_content['content'];
  }
  add_filter( 'cs-post-format-link', 'cs_post_format_link' );
}


/**
 * 
 * Post format "Video and Audio"
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_post_format_media' ) ) {
  function cs_post_format_media( $content ) {

    $media = get_first_url_from_string( $content );

    if( ! empty( $media ) ){

      $content  = str_replace( $media, '', $content );

    } else {

      $pattern = cs_get_shortcode_regex( cs_tagregexp() );
      preg_match( '/'.$pattern.'/s', $content, $media );
      if ( ! empty( $media[2] ) ) {
        $content = str_replace( $media[0], '', $content );
      }

    }

    return $content;
  }
  add_filter( 'cs-post-format-video', 'cs_post_format_media' );
  add_filter( 'cs-post-format-audio', 'cs_post_format_media' );
}


/**
 * 
 * Post format "Gallery"
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_post_format_gallery' ) ) {
  function cs_post_format_gallery( $content ) {

    $pattern = cs_get_shortcode_regex( 'gallery' );
    preg_match( '/'.$pattern.'/s', $content, $media );

    if ( ! empty( $media[2] ) ) {
      $content = str_replace( $media[0], '', $content );
    }

    return $content;
  }
  add_filter( 'cs-post-format-gallery', 'cs_post_format_gallery' );
}


/**
 * 
 * Post format "Chat"
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_post_format_chat' ) ) {
  function cs_post_format_chat( $content ) {

    $output = '<ul class="cs-chat">';
    $rows   = preg_split( "/(\r?\n)+|(<br\s*\/?>\s*)+/", $content );
    $i      = 0;

    foreach ( $rows as $row ) {

      if ( strpos( $row, ':' ) ) {

        $row_split  = explode( ':', trim( $row ), 2 );
        $author     = strip_tags( trim( $row_split[0] ) );
        $text       = trim( $row_split[1] );

        $output .= '<li class="cs-chat-row cs-chat-row-'. ($i%2 ? 'odd':'even') .'">';
        $output .= '<div class="cs-chat-author '. sanitize_html_class( strtolower( "chat-author-{$author}" ) ) . ' vcard"><span class="fa fa-comment"></span> <cite class="fn">' . $author . '</cite>' . ':' . '</div>';
        $output .= '<div class="cs-chat-text">'. $text .'</div>';
        $output .= '</li>';

        $i++;
      } else {
        $output .= $row;
      }

    }

    $output .= '</ul>';
    return $output;

  }
  add_filter( 'cs-post-format-chat', 'cs_post_format_chat' );
}


/**
 * 
 * The content more link modification
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_content_more_link' ) ) {
  function cs_content_more_link( $link ) {

    $offset = strpos( $link, '#more-' );

    if ( $offset ) {
      $end = strpos( $link, '"',$offset );
    }
    
    if ( $end ) {
      $link = substr_replace( $link, '', $offset, ( $end - $offset ) );
    }

    $link  = str_replace( 'more-link', 'entry-more ' . cs_get_button_class( array( 'size' => 'xxs' ) ), $link );

    return $link;
  }
  add_filter( 'the_content_more_link', 'cs_content_more_link' );
}


/**
 * 
 * Disable default wordpress gallery styles
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( '_use_default_gallery_style' ) ) {
  function _use_default_gallery_style() {
    return false;
  }
  add_filter( 'use_default_gallery_style', '_use_default_gallery_style' );
}

/**
 * 
 * Custom Image Sizes
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_image_size_names_choose' ) ) {
  function cs_image_size_names_choose( $image_sizes ) {

    $custom_image_sizes = cs_get_option( 'custom_image_sizes' );

    if( ! empty( $custom_image_sizes ) ) {
      $custom_sizes = array();
      foreach ( $custom_image_sizes as $image_size ) {
        $name = sanitize_title( $image_size['name'] );
        $custom_sizes[$name] = $image_size['name'];
      }
      return array_merge( $image_sizes, $custom_sizes );
    }

    return $image_sizes;

  }
  add_filter( 'image_size_names_choose', 'cs_image_size_names_choose' );
}


/**
 *
 * Retrieve protected post password form content.
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_the_password_form' ) ) {
  function cs_the_password_form( $output ) {
    $output = str_replace( 'type="submit"', 'type="submit" class="cs-password-btn '. cs_get_button_class( array( 'size' => 'sm' ) ) .'"', $output );
    return $output;
  }
  add_filter('the_password_form' , 'cs_the_password_form');
}


if( ! function_exists( 'cs_body_class_names' ) ) {
  function cs_body_class_names( $classes ) {

    $post_meta        = cs_get_post_meta();
    $boxed_layout     = cs_get_option( 'boxed_layout' );
    $header_style     = cs_get_option( 'header_style' );
    $menu_down_icon   = cs_get_option( 'menu_down_icon' );
    $menu_effect      = cs_get_option( 'menu_effect' );
    $menu_effect      = ( $menu_effect != 'none' ) ? 'cs-menu-effect cs-menu-effect-'. $menu_effect : '';
    $menu_down_icon   = ( $menu_down_icon ) ? 'cs-down-icon' : '';
    $boxed_layout     = ( $boxed_layout ) ? 'cs-boxed-layout' : '';
    $is_sticky        = ( cs_get_option( 'header_sticky' ) ) ? 'cs-header-sticky' : '';
    $is_transparent   = ( $header_style == 'default' && ! empty( $post_meta['header_transparent'] ) ) ? 'cs-header-transparent is-transparent' : '';

    $classes[]        = "$is_sticky cs-header-$header_style $menu_effect $menu_down_icon $boxed_layout $is_transparent";

    return $classes;
  }
  add_filter('body_class','cs_body_class_names');
}