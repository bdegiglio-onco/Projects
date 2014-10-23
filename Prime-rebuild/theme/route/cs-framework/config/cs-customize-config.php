<?php
/**
 *
 * CSFramework Customize Config
 * @since 1.0.0
 * @version 1.0.0
 *
 */
$wp_customize_colors['accent'] = array(

  // accent colors
  'accent'        => array(
    'title'       => 'Accent Color',
    'priority'    => 1,
    'description' => 'All Elements Color, Just one click!',
    'settings'    => array(
      'accent_color'  => array(
        'transport'   => 'refresh',
        'control'     => array(
          'type'      => 'color',
        ),
      ),
    )
  ),

  // reset colors
  'cs_reset_customize' => array(
    'title'     => 'Reset',
    'priority'    => 2,
    'settings'    => array(
      'reset'   => array(
        'control'   => array(
          'type'    => 'cs_reset',
        )
      )
    )
  ),
);

$wp_customize_colors['custom'] = array(
  
  'accent'        => array(
    'title'       => 'Elements Colors',
    'settings'    => array(

      'accent_desc'   => array(
        'control'     => array(
          'label'     => 'This is for your all shortcode elements and etc colors of contents.',
          'type'      => 'cs_description',
        ),
      ),

      'accent_color'  => array(
        'control'     => array(
          'type'      => 'color',
        ),
      ),

    )
  ),

  # section
  'top_bar'   => array(
    'title'   => '01. Top Bar Colors',
    //'description' => '',

    # settings
    'settings'    => array(

      /*
      #setting
      'description_1' => array(
        'control'     => array(
          'label'     => '<span class="cs-label cs-label-info">INFO</span> This tutorial will explain in detail how to add support for the WordPress theme customizer to your WordPress theme.',
          'type'      => 'cs_description',
          'priority'  => 0,
        ),
      ),

      #setting
      'subtitle_1'    => array(
        'control'     => array(
          'label'     => 'Top Extras',
          'type'      => 'cs_subtitle',
          'priority'  => 1,
        ),
      ),

      #setting
      'description_2' => array(
        'control'     => array(
          'label'     => '<span class="cs-label cs-label-danger">WARNING</span> This tutorial will explain in detail how to add support for the WordPress theme customizer to your WordPress theme.',
          'type'      => 'cs_description',
          'priority'  => 3,
        ),
      ),

      #setting
      'description_3' => array(
        'control'     => array(
          'label'     => '<p class="cs-alert cs-alert-danger">This tutorial will explain in detail how to add support for the WordPress theme customizer to your WordPress theme.</p> ',
          'type'      => 'cs_content',
          'priority'  => 4,
        ),
      ),

      */

      'top_bar_bg'    => array(
        'control'     => array(
          'label'     => 'Background Color',
          'type'      => 'color',
        ),
      ),
      'top_bar_border'  => array(
        'control'       => array(
          'label'       => 'Border Color',
          'type'        => 'color',
        ),
      ),
      'top_bar_text'    => array(
        'control'       => array(
          'label'       => 'Text Color',
          'type'        => 'color',
        ),
      ),
      'top_bar_link'    => array(
        'control'       => array(
          'label'       => 'Link Color',
          'type'        => 'color',
        ),
      ),
      'top_bar_link_hover'   => array(
        'control'            => array(
          'label'            => 'Link Hover Color',
          'type'             => 'color',
        ),
      ),
      'top_bar_icon_color'   => array(
        'control'            => array(
          'label'            => 'Icon Color',
          'type'             => 'color',
        ),
      ),
      'top_bar_social_color' => array(
        'control'            => array(
          'label'            => 'Social Icons Color',
          'type'             => 'color',
        ),
      ),
      'top_bar_social_hover' => array(
        'control'            => array(
          'label'            => 'Social Icons Hover Color',
          'type'             => 'color',
        ),
      ),

    )
  ),

  # section
  'header'    => array(
    'title'   => '02. Header Colors',

    # settings
    'settings'    => array(

      'header_bg'   => array(
        'control'   => array(
          'label'   => 'Background Color',
          'type'    => 'color',
        ),
      ),

      'header_border' => array(
        'control'     => array(
          'label'     => 'Border Color',
          'type'      => 'color',
        ),
      ),

      'header_link'   => array(
        'control'     => array(
          'label'     => 'Link Color',
          'type'      => 'color',
        ),
      ),

      'header_link_hover' => array(
        'control'         => array(
          'label'         => 'Link Hover Color',
          'type'          => 'color',
        ),
      ),

      // submenu
      'submenu_colors'  => array(
        'control'       => array(
          'label'       => 'Submenu Colors',
          'type'        => 'cs_subtitle',
        ),
      ),

      'submenu_bg'   => array(
        'control'   => array(
          'label'   => 'Background Color',
          'type'    => 'color',
        ),
      ),

      'submenu_bg_hover'   => array(
        'control'   => array(
          'label'   => 'Background Hover Color',
          'type'    => 'color',
        ),
      ),

      'submenu_border'   => array(
        'control'   => array(
          'label'   => 'Border Color',
          'type'    => 'color',
        ),
      ),

      'submenu_link'  => array(
        'control'     => array(
          'label'     => 'Link Color',
          'type'      => 'color',
        ),
      ),

      'submenu_link_hover'  => array(
        'control'   => array(
          'label'   => 'Link Hover Color',
          'type'    => 'color',
        ),
      ),

      // mega-menu
      'megamenu_colors'  => array(
        'control'       => array(
          'label'       => 'Mega-Menu Colors',
          'type'        => 'cs_subtitle',
        ),
      ),
      'submenu_mega_title_color'  => array(
        'control'   => array(
          'label'   => 'Title Color',
          'type'    => 'color',
        ),
      ),
      'submenu_mega_title_bgcolor'  => array(
        'control'   => array(
          'label'   => 'Title Background Color',
          'type'    => 'color',
        ),
      ),

    )
  ),


  # section
  'page_header'    => array(
    'title'   => '03. Page Header Colors',

    # settings
    'settings'    => array(

      'page_header_bg'   => array(
        'control'   => array(
          'label'   => 'Background Color',
          'type'    => 'color',
        ),
      ),
      'page_header_color'   => array(
        'control'   => array(
          'label'   => 'Text Color',
          'type'    => 'color',
        ),
      ),

      // breadcrumb
      'breadcrumb_colors'  => array(
        'control'       => array(
          'label'       => 'Breadcrumb Colors',
          'type'        => 'cs_subtitle',
        ),
      ),
      'breadcrumb_bgcolor'   => array(
        'control'   => array(
          'label'   => 'Breadcrumb Background Color',
          'type'    => 'color',
        ),
      ),
      'breadcrumb_color'   => array(
        'control'   => array(
          'label'   => 'Breadcrumb Text Color',
          'type'    => 'color',
        ),
      ),
      'breadcrumb_link_color'   => array(
        'control'   => array(
          'label'   => 'Breadcrumb Link Color',
          'type'    => 'color',
        ),
      ),

    )
  ),

  # section
  'footer'    => array(
    'title'   => '04. Footer Colors',

    # settings
    'settings'    => array(

      'footer_bg'   => array(
        'control'   => array(
          'label'   => 'Background Color',
          'type'    => 'color',
        ),
      ),
      'footer_color'   => array(
        'control'   => array(
          'label'   => 'Text Color',
          'type'    => 'color',
        ),
      ),
      'footer_link_color'   => array(
        'control'   => array(
          'label'   => 'Link Color',
          'type'    => 'color',
        ),
      ),
      'footer_link_hover'   => array(
        'control'   => array(
          'label'   => 'Link Hover Color',
          'type'    => 'color',
        ),
      ),
      'footer_title_color'   => array(
        'control'   => array(
          'label'   => 'Title Color',
          'type'    => 'color',
        ),
      ),
      'footer_border_color'   => array(
        'control'   => array(
          'label'   => 'Border Color',
          'type'    => 'color',
        ),
      ),
    )
  ),

  # section
  'copyright'    => array(
    'title'   => '05. Copyright Colors',

    # settings
    'settings'    => array(

      'copyright_bg'   => array(
        'control'   => array(
          'label'   => 'Background Color',
          'type'    => 'color',
        ),
      ),
      'copyright_color'   => array(
        'control'   => array(
          'label'   => 'Text Color',
          'type'    => 'color',
        ),
      ),
      'copyright_link_color'   => array(
        'control'   => array(
          'label'   => 'Link Color',
          'type'    => 'color',
        ),
      ),
      'copyright_link_hover'   => array(
        'control'   => array(
          'label'   => 'Link Hover Color',
          'type'    => 'color',
        ),
      ),
    )
  ),

  // reset colors
  'cs_reset_customize' => array(
    'title'            => 'Reset',
    //'priority'       => 99,
    'settings'         => array(
      'reset'          => array(
        'control'      => array(
          'type'       => 'cs_reset',
        )
      )
    )
  ),

);

/**
 *
 * Set predefined colors for reset!
 * @since 1.0.0
 *
 */
function get_predefined_colors( $skin = '' ) {
  
  $skin   = ( !empty( $skin ) ) ? $skin : cs_get_option( 'skin' );
  $accent = '#428bca';

  if ( $skin == 'accent' ) {

    $predefined_colors    = array( 'accent_color' => $accent );

  } else if( $skin == 'custom' ) {

    $predefined_colors             = array(
      'accent_color'               => $accent,

      // top bar
      'top_bar_bg'                 => '#f1f1f1',
      'top_bar_border'             => '#e8e8e8',
      'top_bar_text'               => '#555555',
      'top_bar_link'               => '#555555',
      'top_bar_link_hover'         => $accent,
      'top_bar_icon_color'         => '#555555',
      'top_bar_social_color'       => '#555555',
      'top_bar_social_hover'       => $accent,

      //header
      'header_bg'                  => '#ffffff',
      'header_border'              => '#eeeeee',
      'header_link'                => '#555555',
      'header_link_hover'          => $accent,

      // submenu
      'submenu_bg'                 => '#ffffff',
      'submenu_bg_hover'           => '#f8f8f8',
      'submenu_border'             => '#eeeeee',
      'submenu_link'               => '#555555',
      'submenu_link_hover'         => $accent,

      // mega-menu
      'submenu_mega_title_color'   => '#555555',
      'submenu_mega_title_bgcolor' => '#f5f5f5',

      // page-header
      'page_header_bg'             => $accent,
      'page_header_color'          => '#ffffff',
      'breadcrumb_bgcolor'         => '#000000',
      'breadcrumb_color'           => '#ffffff',
      'breadcrumb_link_color'      => '#ffffff',

      // footer
      'footer_bg'                  => '#222222',
      'footer_color'               => '#999999',
      'footer_link_color'          => '#cccccc',
      'footer_link_hover'          => '#ffffff',
      'footer_title_color'         => '#ffffff',
      'footer_border_color'        => '#444444',

      // copyright
      'copyright_bg'               => '#111111',
      'copyright_color'            => '#555555',
      'copyright_link_color'       => '#555555',
      'copyright_link_hover'       => '#ffffff',

    );

  }
  
  $predefined_colors = apply_filters( 'cs_predefined_colors', $predefined_colors );

  return $predefined_colors;
}

/**
 *
 * CSFramework_Customize_API init
 * @since 1.0.0
 * @version 1.0.0
 *
 */
$skin = cs_get_option( 'skin' );
if ( ! empty( $skin ) && $skin != 'default' ) {
  new CSFramework_Customize_API( $wp_customize_colors[$skin] );
}