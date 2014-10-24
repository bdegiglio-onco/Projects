<?php


	add_shortcode( 'ewf_ewf_client_logos', 'ewf_vc_client_logos' );

	
	function ewf_vc_client_logos( $atts, $content ) {
		extract( shortcode_atts( array(
			'background' => '#F6F1ED'
		), $atts ) ); 
		
		return '<div class="testimonial-slider"><div class="slides">'.do_shortcode($content).'</div></div>';
	}
	
	
	vc_map( array(
		"name" => __("Client Logos List", EWF_SETUP_THEME_DOMAIN),
		"base" => "ewf_slider_testimonials",
		"as_parent" => array('only' => 'ewf-client-logo'),
		"content_element" => true,
		"icon" => "icon-wpb-ewf-slider-testimonials",
		"description" => __("Create a slider with testimonials", EWF_SETUP_THEME_DOMAIN),  
		"show_settings_on_create" => false,
		"params" => array(
			
			array(
				"type" => "textfield",
				"heading" => __("Extra class name", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "el_class",
				"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", EWF_SETUP_THEME_DOMAIN)
			),
		),
		"js_view" => 'VcColumnView'
	) );
	
	
	
	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
		class WPBakeryShortCode_ewf_slider_testimonials extends WPBakeryShortCodesContainer {
		}
	}




?>