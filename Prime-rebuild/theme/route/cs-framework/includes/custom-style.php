<?php
/**
 *
 * Style Parser
 * @since 1.0.0
 * @version 1.0.0
 *
 */

// custom style
// -------------------------------------------------------------
function cs_get_custom_style() {

  $cs_get_typography  = cs_get_typography();
  $non_responsive     = cs_get_option( 'non_responsive' );
  $header_height      = cs_get_option( 'header_height' );
  $menu_max_width     = cs_get_option( 'menu_max_width' );
  $height_sticky      = cs_get_option( 'header_height_sticky' );
  $logo_top           = cs_get_option( 'logo_top' );
  $logo_bottom        = cs_get_option( 'logo_bottom' );
  $visible_top_bar    = cs_get_option( 'visible_top_bar' );
  $header_height40    = ( $header_height + 40 );

ob_start();

// typography
// -----------------------------------------------------------
echo $cs_get_typography;

// header height
// -----------------------------------------------------------
if( $header_height ) {
echo <<<CSS
  .cs-sticky-item{
    line-height: {$header_height}px !important;
    height: {$header_height}px !important;
  }

  .is-transparent #navigation-mobile{
    padding-top: {$header_height}px;
  }

  .cs-header-transparent #page-header .md-padding{
    padding-top: {$header_height40}px;
  }
  
  .cs-header-transparent #navigation-mobile{
    padding-top: {$header_height}px;
  }
CSS;
}

// header sticky height
// -----------------------------------------------------------
if( $height_sticky ) {
echo <<<CSS
  .is-compact .cs-sticky-item{
    line-height: {$height_sticky}px !important;
    height: {$height_sticky}px !important;
  }
CSS;
}

// logo top
// -----------------------------------------------------------
if( cs_not_empty( $logo_top ) || cs_not_empty( $logo_bottom ) ) {
  $logo_top      = ( cs_not_empty( $logo_top ) ) ? 'padding-top:'. $logo_top .'px;' : '';
  $logo_bottom   = ( cs_not_empty( $logo_bottom ) ) ? 'padding-bottom:'. $logo_bottom .'px;' : '';
  echo '#site-logo img{'. $logo_top . $logo_bottom .'}'; 
}

// non responsive check
// -----------------------------------------------------------
if( ! $non_responsive ) {

$visible_top_bar = ( ! $visible_top_bar && ! $non_responsive ) ? '#top-bar{ display: none !important;}' : '';

echo <<<CSS
@media (max-width: {$menu_max_width}px) {

  #site-logo-right,
  #site-nav{
    display: none !important;
  }
  .cs-header-left .container{
    display: block !important;
  }

  .cs-header-left #site-logo{
    display: block !important;
    float: left;
  }

  #cs-mobile-icon{
    display: block;
  }

  #main{
    padding-top: 0 !important;
  }

  {$visible_top_bar}

}
@media (min-width: {$menu_max_width}px) {
  #navigation-mobile{
    display: none !important;
  }
}
CSS;
}

$output = ob_get_clean();

return $output;
}


// custom skin
// -------------------------------------------------------------
function cs_get_custom_skin() {

  $skin               = cs_get_option( 'skin' );
  $accent             = ( cs_get_option( 'accent_color' ) ) ? cs_get_option( 'accent_color' ) : '#428bca';
  $accent_brightness  = cs_brightness( $accent, 0.7901 );
  $accent_darkness    = cs_brightness( $accent, -0.7901 );
  $accent_rgba_06     = cs_hex2rgba( $accent_brightness, 0.6 );

  // accent elements colors
  // -----------------------------------------------------------
  if( $skin == 'accent' ) {

return <<<CSS
  .cs-tab .cs-tab-nav ul li a:hover,
  .cs-tab .cs-tab-nav ul li.active a,
  .cs-toggle-title .cs-in,
  .cs-progress-icon .active,
  .cs-icon-accent.cs-icon-outlined,
  .cs-icon-default,
  .cs-faq-filter a.active,
  .cs-faq-filter a:hover,
  .cs-counter,
  .ajax-close:hover,
  .isotope-filter a:hover, .isotope-filter a.active,
  .cs-accordion-title .cs-in,
  #sidebar .widget_nav_menu ul li.current-menu-item > a,
  #sidebar .widget_nav_menu ul li a:hover,
  .route_widget .widget-title h4,
  .route_widget ul li a:hover,
  .portfolio-item-description .item-title a:hover,
  .cs-lang-top-modal ul li a:hover,
  .comment-reply-link,
  .related-posts ul li a:hover,
  .entry-title a:hover,
  .entry-meta a:hover,
  .post-navigation a:hover,
  .page-pagination a:hover,
  #site-nav ul li ul li .cs-link:hover,
  #site-nav > ul > li > .cs-link:hover,
  #site-nav .current-menu-ancestor > .cs-link,
  #site-nav .current-menu-item > .cs-link,
  #site-logo h1 a:hover,
  .cs-lang-top-modal ul li a:hover,
  .cs-top-module > a:hover,
  .cs-top-module .cs-open-modal:hover,
  a,
  .cs-accent-color {
    color: {$accent};
  }


  .cs-cart-count,
  .cs-tab .cs-tab-nav ul li.active a:after,
  .cs-progress-bar,
  .cs-pricing-column-accent .cs-pricing-price,
  .cs-icon-accent.cs-icon-bordered,
  .cs-icon-accent.cs-icon-bgcolor,
  .cs-highlight,
  .cs-fancybox-accent.cs-fancybox-bgcolor,
  .cs-cta-bgcolor,
  .cs-btn-outlined-accent:hover,
  .cs-btn-flat-accent,
  .page-pagination .current,
  .widget_calendar tbody a,
  #sidebar .widget_nav_menu ul li.current-menu-item > a:after,
  .ajax-pagination .cs-loader:after,
  #page-header,
  .cs-menu-effect-7 .cs-depth-0:hover .cs-link-depth-0,
  .cs-menu-effect .cs-link-depth-0:before,
  .cs-module-social a:hover,
  .cs-accent-background {
    background-color: {$accent};
  }


  .cs-icon-accent.cs-icon-outlined,
  .cs-icon-accent.cs-icon-outer,
  .cs-faq-filter a.active,
  .cs-fancybox-outlined,
  .cs-cta-outlined,
  blockquote,
  .ajax-close:hover,
  .isotope-filter a:hover, .isotope-filter a.active,
  .page-pagination .current,
  .cs-menu-effect-6 .cs-link-depth-0:before,
  #site-nav > ul > li > ul,
  .cs-modal-content,
  .cs-accent-border  {
    border-color: {$accent};
  }

  .cs-menu-effect-4 .cs-link-depth-0:before{
    color: {$accent};
    text-shadow: 0 0 {$accent};
  }

  .cs-menu-effect-4 .cs-link-depth-0:hover::before{
    text-shadow: 8px 0 {$accent}, -8px 0 {$accent};
  }

  .cs-btn-flat-accent:hover {
    background-color: {$accent_brightness};
  }

  .cs-btn-outlined-accent {
    color: {$accent} !important;
    border-color: {$accent};
  }

  .cs-btn-3d-accent {
    background-color: {$accent};
    -webkit-box-shadow: 0 0.3em 0 {$accent_darkness};
    box-shadow: 0 0.3em 0 {$accent_darkness};
  }

  .cs-pricing-column-accent .cs-pricing-title{
    background-color: {$accent_darkness};
  }

  select:focus,
  textarea:focus,
  input[type="text"]:focus,
  input[type="password"]:focus,
  input[type="email"]:focus,
  input[type="url"]:focus,
  input[type="search"]:focus {
    border-color: {$accent};
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px {$accent_rgba_06};
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px {$accent_rgba_06};
  }

  ::selection{
    background-color: {$accent};
  }
 
  ::-moz-selection{
    background-color: {$accent};
  }
CSS;

  } else if ( $skin == 'custom' ) {

  // top-bar
  // -----------------------------------------------------------------
  $top_bar_bg                 = cs_get_option('top_bar_bg');
  $top_bar_border             = cs_get_option('top_bar_border');
  $top_bar_text               = cs_get_option('top_bar_text');
  $top_bar_link               = cs_get_option('top_bar_link');
  $top_bar_link_hover         = cs_get_option('top_bar_link_hover');
  $top_bar_icon_color         = cs_get_option('top_bar_icon_color');
  $top_bar_social_color       = cs_get_option('top_bar_social_color');
  $top_bar_social_hover       = cs_get_option('top_bar_social_hover');

  // header
  // -----------------------------------------------------------------
  $header_bg                  = cs_get_option('header_bg');
  $header_bg_opacity          = cs_hex2rgba( $header_bg, 0.95 );
  $header_border              = cs_get_option('header_border');
  $header_link                = cs_get_option('header_link');
  $header_link_hover          = cs_get_option('header_link_hover');

  // sub-menu
  // -----------------------------------------------------------------
  $submenu_bg                 = cs_get_option('submenu_bg');
  $submenu_bg_hover           = cs_get_option('submenu_bg_hover');
  $submenu_border             = cs_get_option('submenu_border');
  $submenu_link               = cs_get_option('submenu_link');
  $submenu_link_hover         = cs_get_option('submenu_link_hover');
  $submenu_mega_title_color   = cs_get_option('submenu_mega_title_color');
  $submenu_mega_title_bgcolor = cs_get_option('submenu_mega_title_bgcolor');

  // page-header
  // -----------------------------------------------------------------
  $page_header_bg             = cs_get_option('page_header_bg');
  $page_header_color          = cs_get_option('page_header_color');
  $breadcrumb_bgcolor         = cs_hex2rgba( cs_get_option('breadcrumb_bgcolor'), 0.5 );
  $breadcrumb_color           = cs_hex2rgba( cs_get_option('breadcrumb_color'), 0.7 );
  $breadcrumb_link_color      = cs_get_option('breadcrumb_link_color');

  // footer
  // -----------------------------------------------------------------
  $footer_bg                  = cs_get_option('footer_bg');
  $footer_color               = cs_get_option('footer_color');
  $footer_link_color          = cs_get_option('footer_link_color');
  $footer_link_hover          = cs_get_option('footer_link_hover');
  $footer_title_color         = cs_get_option('footer_title_color');
  $footer_border_color        = cs_get_option('footer_border_color');

  // copyright
  // -----------------------------------------------------------------
  $copyright_bg               = cs_get_option('copyright_bg');
  $copyright_color            = cs_get_option('copyright_color');
  $copyright_link_color       = cs_get_option('copyright_link_color');
  $copyright_link_hover       = cs_get_option('copyright_link_hover');


return <<<CSS
#top-bar{
  color: {$top_bar_text};
  background-color: {$top_bar_bg};
  border-color: {$top_bar_border};
}

#top-bar .cs-top-module{
  border-color: {$top_bar_border};
}

#top-bar .cs-top-module > a,
#top-bar .cs-top-module .cs-open-modal{
  color: {$top_bar_link};
}

#top-bar .cs-top-module > a:hover,
#top-bar .cs-top-module .cs-open-modal:hover {
  color: {$top_bar_link_hover};
}

#top-bar .cs-in {
  color: {$top_bar_icon_color};
}

#top-bar .cs-module-social a {
  color: {$top_bar_social_color};
}

#top-bar .cs-module-social a:hover {
  background-color: {$top_bar_social_hover};
}

#top-bar .cs-modal-content{
  border-color: {$top_bar_border};
}

#masthead{
  background-color: {$header_bg};
}

#masthead.is-compact{
  background-color: {$header_bg_opacity};
}

#site-nav > ul > li > .cs-link{
  color: {$header_link};
}

#site-nav .current-menu-ancestor > .cs-link,
#site-nav .current-menu-item > .cs-link,
#site-nav > ul > li > .cs-link:hover {
  color: {$header_link_hover};
}

#site-nav > ul > li > ul,
#site-nav .cs-modal-content{
  border-color: {$header_link_hover};
}

.cs-header-center #masthead,
.cs-header-center .cs-depth-0,
.cs-header-left #masthead,
.cs-header-left .cs-depth-0{
  border-color: {$header_border};
}

#site-nav ul li ul{
  background-color: {$submenu_bg};
}

#site-nav ul li ul li .cs-link{
  color: {$submenu_link};
  border-top-color: {$submenu_border};
}

#site-nav ul li ul li .cs-link:hover{
  color: {$submenu_link_hover};
}

#site-nav .cs-mega-menu > ul > li{
  border-right-color: {$submenu_border};
}

#site-nav .cs-mega-menu > ul > li .cs-title{
  color: {$submenu_mega_title_color} !important;
  background-color: {$submenu_mega_title_bgcolor} !important;
  border-color: {$submenu_mega_title_bgcolor} !important;
}

.cs-menu-effect .cs-link-depth-0:before{
  background-color: {$header_link_hover};
}

#page-header{
  color: {$page_header_color};
  background-color: {$page_header_bg};
}

#page-header .page-title{
  color: {$page_header_color};
}

.cs-breadcrumb .cs-inner{
  color: {$breadcrumb_color};
  background-color: {$breadcrumb_bgcolor};
}

.cs-breadcrumb a {
  color: {$breadcrumb_link_color};
}

.cs-breadcrumb a:hover{
  color: {$breadcrumb_color};
}

#colophon{
  color: {$footer_color};
  background-color: {$footer_bg};
}

#colophon a{
  color: {$footer_link_color};
}

#colophon a:hover{
  color: {$footer_link_hover};
}

#colophon .route_widget .widget-title h4{
  color: {$footer_title_color};
}

#colophon .route_widget ul li,
#colophon .route_widget ul ul{
  border-color: {$footer_border_color};
}

#copyright{
  color: {$copyright_color};
  background-color: {$copyright_bg};
}

#copyright a{
  color: {$copyright_link_color};
}

#copyright a:hover{
  color: {$copyright_link_hover};
}

.cs-tab .cs-tab-nav ul li a:hover,
.cs-tab .cs-tab-nav ul li.active a,
.cs-toggle-title .cs-in,
.cs-progress-icon .active,
.cs-icon-accent.cs-icon-outlined,
.cs-icon-default,
.cs-faq-filter a.active,
.cs-faq-filter a:hover,
.cs-counter,
.ajax-close:hover,
.isotope-filter a:hover, .isotope-filter a.active,
.cs-accordion-title .cs-in,
#sidebar .widget_nav_menu ul li.current-menu-item > a,
#sidebar .widget_nav_menu ul li a:hover,
.route_widget .widget-title h4,
.route_widget ul li a:hover,
.portfolio-item-description .item-title a:hover,
.cs-lang-top-modal ul li a:hover,
.comment-reply-link,
.related-posts ul li a:hover,
.entry-title a:hover,
.entry-meta a:hover,
.post-navigation a:hover,
.page-pagination a:hover,
a,
.cs-accent-color {
  color: {$accent};
}

.cs-cart-count,
.cs-tab .cs-tab-nav ul li.active a:after,
.cs-progress-bar,
.cs-pricing-column-accent .cs-pricing-price,
.cs-icon-accent.cs-icon-bordered,
.cs-icon-accent.cs-icon-bgcolor,
.cs-highlight,
.cs-fancybox-accent.cs-fancybox-bgcolor,
.cs-cta-bgcolor,
.cs-btn-outlined-accent:hover,
.cs-btn-flat-accent,
.page-pagination .current,
.widget_calendar tbody a,
#sidebar .widget_nav_menu ul li.current-menu-item > a:after,
.ajax-pagination .cs-loader:after,
.cs-accent-background {
  background-color: {$accent};
}

.cs-icon-accent.cs-icon-outlined,
.cs-icon-accent.cs-icon-outer,
.cs-faq-filter a.active,
.cs-fancybox-outlined,
.cs-cta-outlined,
blockquote,
.ajax-close:hover,
.isotope-filter a:hover, .isotope-filter a.active,
.page-pagination .current,
.cs-accent-border  {
  border-color: {$accent};
}

.cs-btn-flat-accent:hover {
  background-color: {$accent_brightness};
}

.cs-btn-outlined-accent {
  color: {$accent} !important;
  border-color: {$accent};
}

.cs-btn-3d-accent {
  background-color: {$accent};
  -webkit-box-shadow: 0 0.3em 0 {$accent_darkness};
  box-shadow: 0 0.3em 0 {$accent_darkness};
}

.cs-pricing-column-accent .cs-pricing-title{
  background-color: {$accent_darkness};
}

select:focus,
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus {
  border-color: {$accent};
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px {$accent_rgba_06};
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px {$accent_rgba_06};
}

::selection{
  background-color: {$accent};
}

::-moz-selection{
  background-color: {$accent};
}

CSS;

  } else {
    return;
  }

}