<?php

	
	$ewf_admin_defaults = array(
		
		
		//	General typography
		//
		'body_font_size' 			=> '13px',
		'body_font_lineheight' 		=> '23px',
		'body_font_margin' 			=> '0px',
	
		
		//	Custom typography
		//
		'h1_font_size' 				=> '40px',
		'h1_font_lineheight' 		=> '64px',
		'h1_font_margin' 			=> '11px',
		
		'h2_font_size' 				=> '30px',
		'h2_font_lineheight' 		=> '58px',
		'h2_font_margin' 			=> '18px',
		
		'h3_font_size' 				=> '18px',
		'h3_font_lineheight' 		=> '28px',
		'h3_font_margin' 			=> '20px',
		
		'h4_font_size' 				=> '16px',
		'h4_font_lineheight' 		=> '25px',
		'h4_font_margin' 			=> '21px',
		
		'h5_font_size' 				=> '14px',
		'h5_font_lineheight' 		=> '23px',
		'h5_font_margin' 			=> '23px',
		
		'h6_font_size' 				=> '12px',
		'h6_font_lineheight' 		=> '23px',
		'h6_font_margin' 			=> '0px',
		
		
		//	Colors
		//
		'color_accent_01'			=> '#65c5be',
		'color_accent_02'			=> '#7b7b7b',
		'color_header_top'			=> '#66c5bf',
		'color_header_top_font'		=> '#FFFFFF',
		'color_content'				=> '#494949',
		'color_footer_font'			=> '#FFFFFF',
		
	);
	
	
	
	$ewf_admin_options = array (
		
		#	General Settings
		#
		array("type" => "panel", "name" => "Home page", "mode"=>"open", "id" => "ewf-panel-general"),					   
			  

				array(    "type" => "ewf-ui-image", 
					"image-size" => "full",
					"image-height" => "32",
							"id" => EWF_SETUP_THNAME."_favicon",
				 "section-title" => __("Favicon", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Upload your favicon", EWF_SETUP_THEME_DOMAIN),
						   "std" => get_template_directory_uri().'/layout/images/favicon.png'),
				
				array(    "type" => "ewf-ui-image", 
					"image-size" => "full",
					"image-height" => "64",
							"id" => EWF_SETUP_THNAME."_favicon_retina",
				 "section-title" => __("Favicon Retina", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Upload your favicon", EWF_SETUP_THEME_DOMAIN),
						   "std" => get_template_directory_uri().'/layout/images/apple-touch-icon-144-precomposed.png'),

				
				array(    "type" => "ewf-ui-options", 
							"id" => EWF_SETUP_THNAME."_page_layout",
					   "options" => array(
							'boxed-in'=>array(
								'label' => __('Boxed in', EWF_SETUP_THEME_DOMAIN),
								'value' => 'boxed-in',
								'class' => 'ewf-layout-boxedin'
								
								), 
							'full-width' => array(
								'label' => __('Full Width', EWF_SETUP_THEME_DOMAIN),
								'value' => 'full-width',
								'class' => 'ewf-layout-fullwidth'
								)
						),
				 "section-title" => __("Layout style", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the layout", EWF_SETUP_THEME_DOMAIN),
						   "std" => 'full-width'),			
						   
						   
						   
				array(    "type" => "ewf-ui-select", 
							"id" => EWF_SETUP_THNAME."_page_404",
				 "section-title" => __("Page not found", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the 404 page from your existing pages", EWF_SETUP_THEME_DOMAIN),
					   "options" => ewf_load_site_pages(),		
						   "std" => 0),		
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_content_width",
						   "min" => '940px',
						   "max" => '1300px',
						  "step" => '5',
				 "section-title" => __("Content width", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the content width", EWF_SETUP_THEME_DOMAIN),
						   "std" => '1060px'),	
					
					
				array(    "type" => "ewf-ui-background", 
					"image-size" => "thumbnail",
					"image-height" => "50",
							"id" => EWF_SETUP_THNAME."_background",
				 "section-title" => __("Background", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Adjust background settings", EWF_SETUP_THEME_DOMAIN),
						   "std" => json_encode(array(  
										array('name' => 'background-color'			, 'value' => '#fff'			),
										array('name' => 'background-pattern'		, 'value' => ''				),
										array('name' => 'background-repeat'			, 'value' => 'repeat'		),
										array('name' => 'background-position'		, 'value' => 'center center'),
										array('name' => 'background-image'			, 'value' => ''				),
										array('name' => 'background-image-preview'	, 'value' => ''				),
										array('name' => 'background-attachment'		, 'value' => 'scroll'		),
										array('name' => 'background-stretch'		, 'value' => 'false'		),
									))
								),

				// array(    "type" => "ewf-ui-toggle", 
							// "id" => EWF_SETUP_THNAME."_backtotop_button",
				 // "section-title" => __("Show back to top button", EWF_SETUP_THEME_DOMAIN),
		   // "section-description" => __("You can show or hide the button", EWF_SETUP_THEME_DOMAIN),
						   // "std" => 'true'),	
								
						  
				array(    "type" => "textarea", 
							"id" => EWF_SETUP_THNAME."_include_analytics",
				 "section-title" => __('Google Analytics', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Paste the analytics code', EWF_SETUP_THEME_DOMAIN),
						   "std" => null ,
						  ),
						  
				array(    "type" => "textarea", 
							"id" => EWF_SETUP_THNAME."_include_css",
				 "section-title" => __('Extra CSS Code', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Paste extra css code here', EWF_SETUP_THEME_DOMAIN),
						   "std" => null,
						  ),
						  
		array("type" => "panel", "mode"=>"close"),	
	
	
		#	Typography settings
		#
		array("type" => "panel", "name" => "Typography settings", "mode"=>"open", "id" => "ewf-panel-typography"),

				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_fonts_custom",
				 "section-title" => __("Use custom typography", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("You can overwrite custom fonts", EWF_SETUP_THEME_DOMAIN),
					"dependency" => '.group-fonts-custom',
						   "std" => 'false'),	

						   
				array(    "type" => "ewf-ui-section", "name" => '<strong>'.__("Global Font", EWF_SETUP_THEME_DOMAIN).'</strong>', "group" => 'fonts-custom') ,
			

				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_body_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_body_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['body_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_body_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['body_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_body_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['body_font_margin']),
													
				
				//
				//	H1
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 1", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
				
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h1_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h1_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h1_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h1_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						    "std" => $ewf_admin_defaults['h1_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h1_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h1_font_margin']),
				
				
				
				//
				//	H2
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 2", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h2_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h2_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						    "std" => $ewf_admin_defaults['h2_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h2_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h2_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h2_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h2_font_margin']),
						 
				//
				//	H3
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 3", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h3_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h3_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h3_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h3_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h3_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h3_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h3_font_margin']),
						   
				//
				//	H4
				// 
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 4", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h4_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h4_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h4_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h4_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h4_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h4_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h4_font_margin']),
						   
				//
				//	H5
				// 
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 5", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),
						 
				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h5_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h5_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h5_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h5_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h5_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h5_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h5_font_margin']),
						   
				//
				//	H6
				//
				array(    "type" => "ewf-ui-section", 
						  "name" => "<strong>".__("Font - Heading 6", EWF_SETUP_THEME_DOMAIN)."</strong>",
						 "group" => 'fonts-custom'),

				array(    "type" => "ewf-ui-font", 
							"id" => EWF_SETUP_THNAME."_h6_font",
				 "section-title" => __("Font family", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font of the body", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => json_encode(array(
										array('name' => 'font-family', 'value' => 'Open sans'),
										array('name' => 'font-weight', 'value' => 'Regular'),
										array('name' => 'font-italic', 'value' => '')
									))
							),
		
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h6_font_size",
						   "max" => '60',
				 "section-title" => __("Font size", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set fize of the font", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h6_font_size']),
						  
		
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h6_font_lineheight",
						   "max" => '60',
				 "section-title" => __("Line height", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the font line height", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h6_font_lineheight']),
						   
						   
				array(    "type" => "ewf-ui-slider", 
							"id" => EWF_SETUP_THNAME."_h6_font_margin",
						   "max" => '60',
				 "section-title" => __("Margin bottom", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Set the bottom spacing", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'fonts-custom',
						   "std" => $ewf_admin_defaults['h6_font_margin']),
				
		
		array("type" => "panel", "mode"=>"close"),
				
				
	
		#	Header settings
		#
		array("type" => "panel", "name" => "Header settings", "mode"=>"open", "id" => "ewf-panel-header"),
		
				array(    "type" => "ewf-ui-image", 
					"image-size" => "full",
							"id" => EWF_SETUP_THNAME."_logo_url",
				 "section-title" => __("Header logo", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Upload logo in the header", EWF_SETUP_THEME_DOMAIN),
						   "std" => get_template_directory_uri().'/layout/images/logo.png'),
						   
						   
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_header_sticky",
				 "section-title" => __("Sticky header", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Keep the header visible after scrolling", EWF_SETUP_THEME_DOMAIN),
						   "std" => 'true'),	
						   
		array("type" => "panel", "mode"=>"close"),
		
		
		
		#	Footer settings
		#
		array("type" => "panel", "name" => "Footer settings", "mode"=>"open", "id" => "ewf-panel-footer"),
		
				array(    "type" => "ewf-ui-background", 
					"image-size" => "thumbnail",
					"image-height" => "50",
							"id" => EWF_SETUP_THNAME."_footer_background",
				 "section-title" => __("Background", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Adjust footer background settings", EWF_SETUP_THEME_DOMAIN),
						   "std" => json_encode(array(  
										array('name' => 'background-color'			, 'value' => '#626262'		),
										array('name' => 'background-pattern'		, 'value' => ''				),
										array('name' => 'background-repeat'			, 'value' => 'repeat'		),
										array('name' => 'background-position'		, 'value' => 'center center'),
										array('name' => 'background-image'			, 'value' => ''				),
										array('name' => 'background-image-preview'	, 'value' => ''				),
										array('name' => 'background-attachment'		, 'value' => 'scroll'		),
										array('name' => 'background-stretch'		, 'value' => 'false'		),
									))
								),
		
				array(    "type" => "ewf-ui-background", 
					"image-size" => "thumbnail",
					"image-height" => "50",
							"id" => EWF_SETUP_THNAME."_footer_top_background",
				 "section-title" => __("Background", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Adjust footer top background settings", EWF_SETUP_THEME_DOMAIN),
						   "std" => json_encode(array(  
										array('name' => 'background-color'			, 'value' => '#43A9AB'		),
										array('name' => 'background-pattern'		, 'value' => ''				),
										array('name' => 'background-repeat'			, 'value' => 'repeat'		),
										array('name' => 'background-position'		, 'value' => 'center center'),
										array('name' => 'background-image'			, 'value' => ''				),
										array('name' => 'background-image-preview'	, 'value' => ''				),
										array('name' => 'background-attachment'		, 'value' => 'scroll'		),
										array('name' => 'background-stretch'		, 'value' => 'false'		),
									))
								),
		
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_footer_section",
				 "section-title" => __("Footer section", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Show footer section at the bottom", EWF_SETUP_THEME_DOMAIN),
				    "dependency" => '.group-footer-custom',
						   "std" => 'true'),	
						   
						   
			   array(     "type" => "ewf-ui-columns", 
							"id" => EWF_SETUP_THNAME."_footer_columns",
					   "columns" => '3',
				 "section-title" => __("Footer columns", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the number of columns", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'footer-custom',
						   "std" => '4,4,4'),
						   
						   
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_footer_sub",
				 "section-title" => __("Footer sub", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Show sub footer section at the bottom", EWF_SETUP_THEME_DOMAIN),
					"dependency" => '.group-footer-sub',
						   "std" => 'true'),	
						   
						   
			   array(     "type" => "ewf-ui-columns", 
							"id" => EWF_SETUP_THNAME."_footer_sub_columns",
					   "columns" => '1',
				 "section-title" => __("Footer sub columns", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("Select the number of columns", EWF_SETUP_THEME_DOMAIN),
						 "group" => 'footer-sub',
						   "std" => '12'),
					
		array("type" => "panel", "mode"=>"close"),
		
		
	 
		#	Color schemes
		#
		array("type" => "panel", "name" => "Colors schemes", "mode"=>"open", "id" => "ewf-panel-colors"),
			
			
				array(    "type" => "ewf-ui-toggle", 
							"id" => EWF_SETUP_THNAME."_colors_custom",
				 "section-title" => __("Use custom colors", EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __("You can overwrite the default color scheme", EWF_SETUP_THEME_DOMAIN),
					"dependency" => '.group-colors-custom',
						   "std" => 'false'),	
		
		
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_accent_01",
				 "section-title" => __('Accent color 1', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_accent_01']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_accent_02",
				 "section-title" => __('Accent Color 2', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_accent_02']),
		
		
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_header_top",
				 "section-title" => __('Header top background color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_header_top']),
						  
						  						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_header_top_font",
				 "section-title" => __('Header top font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_header_top_font']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_content",
				 "section-title" => __('Content font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_content']),
						  
						  
				// array(    "type" => "ewf-ui-color", 
							// "id" => EWF_SETUP_THNAME."_color_footer_top",
				 // "section-title" => __('Footer top color', EWF_SETUP_THEME_DOMAIN),
		   // "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 // "group" => 'colors-custom',
						   // "std" => $ewf_admin_defaults['color_footer_top']),
						  
						  
				// array(    "type" => "ewf-ui-color", 
							// "id" => EWF_SETUP_THNAME."_color_footer_top_font",
				 // "section-title" => __('Footer top font color', EWF_SETUP_THEME_DOMAIN),
		   // "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 // "group" => 'colors-custom',
						   // "std" => $ewf_admin_defaults['color_footer_top_font']),
						  
						  
				// array(    "type" => "ewf-ui-color", 
							// "id" => EWF_SETUP_THNAME."_color_footer",
				 // "section-title" => __('Footer background color', EWF_SETUP_THEME_DOMAIN),
		   // "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 // "group" => 'colors-custom',
						   // "std" => $ewf_admin_defaults['color_footer']),
						  
						  
				array(    "type" => "ewf-ui-color", 
							"id" => EWF_SETUP_THNAME."_color_footer_font",
				 "section-title" => __('Footer font color', EWF_SETUP_THEME_DOMAIN),
		   "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 "group" => 'colors-custom',
						   "std" => $ewf_admin_defaults['color_footer_font']),
						  
						  
				// array(    "type" => "ewf-ui-color", 
							// "id" => EWF_SETUP_THNAME."_color_footer_bottom",
				 // "section-title" => __('Footer bottom background color', EWF_SETUP_THEME_DOMAIN),
		   // "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 // "group" => 'colors-custom',
						   // "std" => $ewf_admin_defaults['color_footer_bottom']),
						  
						  
				// array(    "type" => "ewf-ui-color", 
							// "id" => EWF_SETUP_THNAME."_color_footer_bottom_font",
				 // "section-title" => __('Footer bottom font color', EWF_SETUP_THEME_DOMAIN),
		   // "section-description" => __('Specify the color you want to use.', EWF_SETUP_THEME_DOMAIN),
						 // "group" => 'colors-custom',
						   // "std" => $ewf_admin_defaults['color_footer_bottom_font']),
		
		
		array("type" => "panel", "mode"=>"close"),


	);



	function ewf_admin_load_dynamicStyles(){
		global $ewf_admin_defaults;
		
		ob_start();
		
			
			//	Theme Options - Content Width
			//	
			$_eto_content_width = get_option(EWF_SETUP_THNAME."_content_width", '1060px');
			echo ".ewf-boxed-layout #wrap, \n";
			echo ".ewf-boxed-layout #header { max-width:".$_eto_content_width.";} "

			
			
		?>
		
		<?php	if (get_option(EWF_SETUP_THNAME."_colors_custom", "false") == 'true'){  ?> 	
		
				<?php

				$color_accent_01 = get_option(EWF_SETUP_THNAME."_color_accent_01"						, $ewf_admin_defaults['color_accent_01']);
				$color_accent_02 = get_option(EWF_SETUP_THNAME."_color_accent_02"						, $ewf_admin_defaults['color_accent_02']);
				$color_header_top = get_option(EWF_SETUP_THNAME."_color_header_top"						, $ewf_admin_defaults['color_header_top']);
				$color_header_top_font = get_option(EWF_SETUP_THNAME."_color_header_top_font"			, $ewf_admin_defaults['color_header_top_font']);
				$color_content = get_option(EWF_SETUP_THNAME."_color_content"							, $ewf_admin_defaults['color_content']);
				// $color_footer_top = get_option(EWF_SETUP_THNAME."_color_footer_top"						, $ewf_admin_defaults['color_footer_top']);
				// $color_footer_top_font = get_option(EWF_SETUP_THNAME."_color_footer_top_font"			, $ewf_admin_defaults['color_footer_top_font']);
				// $color_footer = get_option(EWF_SETUP_THNAME."_color_footer"								, $ewf_admin_defaults['color_footer']);
				$color_footer_font = get_option(EWF_SETUP_THNAME."_color_footer_font"					, $ewf_admin_defaults['color_footer_font']);
				// $color_footer_bottom = get_option(EWF_SETUP_THNAME."_color_footer_bottom"				, $ewf_admin_defaults['color_footer_bottom']);
				// $color_footer_bottom_font = get_option(EWF_SETUP_THNAME."_color_footer_bottom_font"		, $ewf_admin_defaults['color_footer_bottom_font']);
		
				?>
		
				/*	###	EWF Custom Colors 	*/

				/* ==========================================================================
				   #Typography
				   ========================================================================== */
				   
					body {
						color: <?php echo $color_content; ?>;
					}
					
					h1, 
					h2, 
					h3, 
					h4, 
					h5, 
					h6 {
						color: <?php echo $color_content; ?>;
					}
						
					abbr[title] {  
						border-bottom: 1px dotted #999; 
					}
					
					hr { 
					
						border: solid #efefef; 
					
					}

					code { 
						border: 1px solid #e1e1e8;
						background-color: #f7f7f7;  
						color: #d14;  
					}
					
					pre { 
						border: 1px solid #e1e1e8;   
						background-color: #f7f7f7; 
					}
					
					.hr { 
						border-top: 1px solid #efefef;  
					}

					.text-highlight { color: <?php echo $color_accent_01; ?>; }

					.mute { color: #aaa; }
					
				/* #Links
				   ========================================================================== */
					
					a, 
					a:visited { 
						color: <?php echo $color_accent_01; ?>; 
					}	

				/* #Tables
				   ========================================================================== */

					table th, 
					table td {
						border-top: 1px solid #aeaeae;
					}
					
				/* #Forms
				   ========================================================================== */

					label span { color: #ff0000; }
					
					input,
					textarea,
					select {
						border: 1px solid #a4a4a4;
						background: #fff;
						color: <?php echo $color_content; ?>; 
					}
					
					input[type="text"]:focus,
					input[type="email"]:focus,
					input[type="url"]:focus,
					textarea:focus {	
						border-color: #a2a2a2;
					}

				/* ==========================================================================
				   #Accordions and Toggles
				   ========================================================================== */

					

				/* ==========================================================================
				   #Alerts
				   ========================================================================== */

					.alert {
						border: 1px solid #aeaeae;
					}
					
					.alert.info i {
						color: #3194b1;
					}
					
					.alert.success i {
						color: #749958;
					}
					
					.alert.error i {
						color: #b55454;
					}
					
					.alert.warning i {
						color: #978c68;
					}

				/* ==========================================================================
				   #Buttons
				   ========================================================================== */

					.btn { 
						background-color: <?php echo $color_accent_01; ?>;
					}
					
					a.btn { color: #fff; }

					.btn:hover { 
						background-color: <?php echo $color_accent_01; ?>; 
					}

					.btn-white {
						border: 1px solid #a4a4a4;
						background-color: #fff;
						color: <?php echo $color_content; ?>;
					}
					
					a.btn-white { color: <?php echo $color_content; ?>; }
					.btn-white:hover { background-color: #f4f4f4; }
					
					.btn-black {
						background-color: #464646;
						color: #fff;
					}
					
					a.btn-black { color: #fff; }
					.btn-black:hover { background-color:#666; }

				/* ==========================================================================
				   #Custom Lists
				   ========================================================================== */

					ul.check li:before,
					ul.plus li:before,
					ul.pin li:before { 
						color: <?php echo $color_accent_01; ?>;
					}
					
					ul.fill-circle li:before { 
						color: <?php echo $color_accent_01; ?>;
					}

				/* ==========================================================================
				   #Dividers
				   ========================================================================== */

					.divider {
						border-top: 1px solid #e2e2e2;
					}

				/* ==========================================================================
				   #Headlines
				   ========================================================================== */

					.headline h1 {
						border: 1px solid <?php echo $color_accent_01; ?>;
						color: <?php echo $color_accent_01; ?>;
					}
					
					.headline i {
						border: 1px solid <?php echo $color_accent_01; ?>;
						color: <?php echo $color_accent_01; ?>;
					}

				/* ==========================================================================
				   #Icon Boxes
				   ========================================================================== */

				/* Icon Box 1
				   ========================================================================== */
				   
					.icon-box-1 > i { 
						color: <?php echo $color_accent_01; ?>; 
					} 

				/* Icon Box 2
				   ========================================================================== */
				   
					.icon-box-2 > i { 
						border: 1px solid #a4a4a4;
						color: #a4a4a4;
					}

				/* Icon Box 3
				   ========================================================================== */
				   
					.icon-box-3 > i  {
						border: 1px solid <?php echo $color_accent_01; ?>;
						color: <?php echo $color_accent_01; ?>;
					}

				/* Icon Box 4
				   ========================================================================== */
				   
					.icon-box-4 { 
						border: 1px solid #e0e0e0;
					}	
					
					.icon-box-4 > i {
						color: #444444;
					}
					
					.icon-box-4 h1 {
						color: <?php echo $color_accent_01; ?>;
					}
					
					.icon-box-4 h4 {
						color: <?php echo $color_accent_01; ?>;
					}
					
					.icon-box-4:hover { 
						background-color: <?php echo $color_accent_01; ?>;
						color: #fff;
					}
					
					.icon-box-4:hover i,
					.icon-box-4:hover h1,
					.icon-box-4:hover h4,
					.icon-box-4:hover a { color: #fff; }

				/* Icon Box 5
				   ========================================================================== */
						
					.icon-box-5 h4 a { color: <?php echo $color_content; ?>; }
					
					.icon-box-5 h4:after {
						border-bottom: 1px solid <?php echo $color_accent_01; ?>;
					}

				/* Icon Box 6
				   ========================================================================== */	

					.icon-box-6 > i { 
						color: <?php echo $color_accent_01; ?>;
					} 
				   
				/* ==========================================================================
				   #Milestones
				   ========================================================================== */

					
					.milestone.alt .milestone-content {
						border-right: 1px solid #bfbfbf;
					}
					
					.milestone.alt .milestone-content span { color: <?php echo $color_accent_01; ?>; }

				/* ==========================================================================
				   #Pie charts
				   ========================================================================== */

					.pie-chart i, 
					.pie-chart .pie-chart-custom-text, 
					.pie-chart .pie-chart-percent {
						color: <?php echo $color_accent_01; ?>;
					}
					
					.chart-description {
						color: <?php echo $color_accent_01; ?>;	
					}
					
					.chart-description h1 {
						color: <?php echo $color_accent_01; ?>;
					}
					
				/* ==========================================================================
				   #Pricing Tables
				   ========================================================================== */
						
					.pricing-table{ 
						border: 1px solid #ccc;
					}

					.price-table:hover {
						background-color: <?php echo $color_accent_01; ?>;
						color: #fff;
					}
					
					.price-heading h4 { 	
						color: <?php echo $color_accent_01; ?>; 
					}
					
					.price-heading h1 { 
						color: <?php echo $color_accent_01; ?>; 	
					}
					 
					.pricing-features li { 
						border-top: 1px solid #ccc; 
					}
					
				/* ==========================================================================
				   #ProgressBars
				   ========================================================================== */

					.progress-bar {
						background-color: rgba(0, 0, 0, 0.12);
					}
					
					.progress-bar .progress-bar-outer {
						background-color: <?php echo $color_accent_01; ?>;
					}

				/* ==========================================================================
				   #SocialMedia
				   ========================================================================== */

					a.social-icon {
						color: #979797;
					}
					
					a.facebook-icon:hover { color: #0e59a0 !important; }
					a.twitter-icon:hover { color: #0ea4ff !important; }
					a.vimeo-icon:hover { color: #63879c !important; }
					a.flickr-icon:hover { color: #0061db !important; }
					a.github-icon:hover { color: #3b3b3b !important; }
					a.googleplus-icon:hover { color: #282927 !important; }
					a.pinterest-icon:hover { color: #d73532 !important; }
					a.tumblr-icon:hover { color: #586980 !important; }
					a.linkedin-icon:hover { color: #018faf !important; }
					a.dribbble-icon:hover { color: #ea73a0 !important; }
					a.stumbleupon-icon:hover { color: #ea4b24 !important; }
					a.lastfm-icon:hover { color: #b80638 !important; }
					a.instagram-icon:hover { color: #82685a !important; }
					a.evernote-icon:hover { color: #3bab27 !important; }
					a.skype-icon:hover { color: #00b0f6 !important; }
					a.paypal-icon:hover { color: #0d3967 !important; }
					a.soundcloud-icon:hover { color: #e9702b !important; }
					a.behance-icon:hover { color: #0066ff !important; }
					a.rss-icon:hover { color: #f79638 !important; }	

				/* ==========================================================================
				   #Styled Tables
				   ========================================================================== */

					.table-bordered { 
						border: 1px solid #aeaeae; 
					}
					 
					.table-bordered td { 
						border-left: 1px solid #aeaeae; 
					}
					
					.table-bordered th {
						background-color: #81dad8;
						color: #fff;
					}
					
					.table-bordered th:first-child { border-left: 1px solid #aeaeae;  }
					
					.table-striped.alt tbody tr:nth-child(even) td,
					.table-striped.alt tbody tr:nth-child(even) th { background-color: #cef1f0; }
					
					.table-bordered.alt th:nth-child(even) { background-color: #6bc7c5; }

				/* ==========================================================================
				   #Tabs
				   ========================================================================== */

					
					
				/* ==========================================================================
				   #Testimonials
				   ========================================================================== */

					.testimonial a { color: <?php echo $color_content; ?>; }

				/* ==========================================================================
				   #WordPress Default Classes
				   ========================================================================== */
				   
					.wp-caption {
						background: #fff;
						border: 1px solid #f0f0f0;
					}
					
				/* ==========================================================================
				   #WordPress Widgets
				   ========================================================================== */
					
					.widget-title:after {
						border-bottom: 1px solid <?php echo $color_accent_01; ?>;
					}
					
					#footer .widget-title { 
						color: <?php echo $color_accent_01; ?>;
					}	

					/* Recent Entries Widget */
					
					.widget_recent_entries ul li a { color: <?php echo $color_content; ?>; }
					
					.widget_recent_entries ul li .post-date { 
						color: <?php echo $color_accent_01; ?>;
					}
					

					.widget_archive a { 
						color: <?php echo $color_content; ?>;
					}
					
					.widget_archive a:hover { color: #191919; }
					
					.widget_categories a { 
						color: <?php echo $color_content; ?>;
					}
					
					.widget_categories a:hover { color: #191919; }

					.ewf_widget_navigation li { border-bottom: 1px solid #efefef; }

					.ewf_widget_navigation li a { color: #222; }
					
					.ewf_widget_navigation li.current a { color: #303030; }

					/* EWF Flickr Widget */
					
					#footer-copyright-notice img {
						border-top: 1px solid <?php echo $color_accent_01; ?>;
					}
					
					/* EWF call to action widget */
					
					.ewf_widget_calltoaction a.btn {
						border-color: #fff;
						box-shadow: inset 0 0 0 0 rgba(255, 255, 255, 0.2);
						background-color: transparent; 
					}
					
					.ewf_widget_calltoaction a.btn:hover { box-shadow: inset 0 100px 0 0 rgba(255, 255, 255, 0.2); }
					
				/* ==========================================================================
				   #WordPress Comments
				   ========================================================================== */
				   
					
					
				/* ==========================================================================
				   #WordPress Comment Form
				   ========================================================================== */	
					
					#commentform #submit {
						background-color: <?php echo $color_accent_01; ?>;
						color: #fff;
					}
					
					#commentform #submit:hover { background-color: <?php echo $color_accent_01; ?>; }
					
				/* ==========================================================================
				   #Revolution slider
				   ========================================================================== */

					.title {
						color: #fff;
					}

					.title-2 {
						color: #fff;
						text-shadow: 1px 1px #999;
					}

					.sub-title {
						color: #fff;
						text-shadow: 1px 1px #999;
					}

					.fullwidthbanner-container .text { color: #fff; }

					.fullwidthbanner-container .text a.btn {
						border: 1px solid #fff;
						background-color: transparent;
						color: #fff;	
					}

					.fullwidthbanner-container .text a.btn:hover { background-color: rgba(0, 0, 0, 0.5); }

					.tp-bullets.simplebullets.round .bullet {
						border: 1px solid <?php echo $color_accent_02; ?>;
						background: <?php echo $color_accent_02; ?>;
					}

					.tp-bullets.simplebullets.round .bullet.selected,
					.tp-bullets.simplebullets.round .bullet:hover { background: transparent; }

					.tp-leftarrow.default {
						background: url(../images/prev.png) no-repeat center center;	
					}
					.tp-rightarrow.default { 
						background: url(../images/next.png) no-repeat center center;
					}
				   
				/* ==========================================================================
				   #ContactForm7
				   ========================================================================== */
				   
					.wpcf7-form p {  }
				   
					.wpcf7-form input[type="text"],
					.wpcf7-form input[type="email"],	
					.wpcf7-form textarea {
						border: 1px solid 1px solid #a4a4a4;
					}
					
					.wpcf7-form input[type="submit"] {
						background-color: <?php echo $color_accent_01; ?>;
					}	

				/* ==========================================================================
				   #General Layout 
				   ========================================================================== */

					.ewf-boxed-layout #wrap {

						-webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);  
						   -moz-box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);    
								box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);  
					}

				/* #Header Top
				   ========================================================================== */
					
					#header-top { 
						background-color: <?php echo $color_header_top; ?>;
						color: <?php echo $color_header_top_font; ?>;
					}
					
					#header-top a { color: <?php echo $color_header_top_font; ?>; }
					
				/* #Header
				   ========================================================================== */	
					
					#header { border-bottom: 1px solid #efefef; }
					
					@media (min-width: 1025px) {

						#header.stuck { background: none repeat scroll 0 0 rgba(255, 255, 255, 0.95) !important; }

					}
						
					/* Menu basics */

					.sf-menu a {
						border-bottom: 1px solid rgba(255, 255, 255, 0.25);
						color: #fff;
					}
					
					.sf-menu > li > a,
					.sf-menu > li.dropdown > a {
						border-bottom: 1px solid #efefef;
						color: <?php echo $color_accent_02; ?>;
					}

					.sf-menu > li.current-menu-ancestor > a,
					.sf-menu > li.current-menu-parent > a,
					.sf-menu > li.current-page-parent > a,
					.sf-menu > li.current > a  {
						color: <?php echo $color_accent_01; ?>;
						border-bottom: 1px solid <?php echo $color_accent_01; ?>;
						background-color: #fff; 
					}

					.sf-menu > li:hover > a,
					.sf-menu > li.sfHover > a {
						color: <?php echo $color_accent_01; ?>;
					}
					
					.sf-menu li.dropdown ul {
						background-color: rgba(0,0,0, 0.6);			
					}

					.sf-mega {
						background-color: rgba(0,0,0, 0.6);
					}
					
					.sf-mega-section {
						border-right: 1px solid rgba(255, 255, 255, 0.25);;
					}
					
					/* Mobile Menu  */
							
					#mobile-menu li a {
						border-bottom: 1px solid #efefef;
					}
					
					#mobile-menu .mobile-menu-submenu-arrow:hover { background-color: #f3f3f3; }

				/* #Footer Top
				   ========================================================================== */
					
					#footer-top { 
						color: <?php echo $color_footer_font; ?>;
					}
					
					#footer-top a { color: <?php echo $color_footer_font; ?>; }
					
					#footer-top h1,
					#footer-top h2,
					#footer-top h3,
					#footer-top h4,
					#footer-top h5,
					#footer-top h6 { color: <?php echo $color_footer_font; ?>; }
								
				/* #Footer
				   ========================================================================== */		
						
					#footer {
						color: <?php echo $color_footer_font; ?>;
					}
					
					#footer a { color: <?php echo $color_footer_font; ?>; }
					
					#footer h1,
					#footer h2,
					#footer h3,
					#footer h4,
					#footer h5,
					#footer h6 { color: <?php echo $color_footer_font; ?>; }
				   
				/* #Index
				   ========================================================================== */
				   
				   /* Client Logo */
				   
				   .client-logos {
					   border-top: 1px solid #cfcfcf;
					   border-bottom: 1px solid #cfcfcf;
					}
				   
				/* #About
				   ========================================================================== */
				   
				   .team-member { 
						border-bottom: 1px solid #ababab;
					}
					
				   .team-member span { color: <?php echo $color_accent_01; ?>; }
				   
				   .team-member h3 span {
					   border-bottom: 1px solid <?php echo $color_accent_01; ?>;
				   }

				/* #Services
				   ========================================================================== */
					
					.services-list li:after {
						border-left: 1px solid <?php echo $color_accent_01; ?>;
					}

					.services-list li i {
						border: 2px solid #aaaaaa;
					}

					.services-list li:hover i {
						border-color: <?php echo $color_accent_01; ?>;
						color: <?php echo $color_accent_01; ?>; 
					}

				/* #Portfolio
				   ========================================================================== */
				   
					.portfolio-filter ul li a { 
						color: <?php echo $color_content; ?>;
					}
					
					.portfolio-filter ul li a:hover,
					.portfolio-filter ul li a.active { color: <?php echo $color_accent_01; ?>; }
					
					.portfolio-item-overlay {
						background-color: <?php echo $color_accent_01; ?>;	
					}
					
					.portfolio-item-overlay:before {
						border-bottom: 100px solid <?php echo $color_accent_01; ?>;
						border-left: 150px solid rgba(0, 0, 0, 0);
						border-right: 150px solid rgba(0, 0, 0, 0);
					}
					
					.portfolio-item-overlay-actions .portfolio-item-zoom,
					.portfolio-item-overlay-actions .portfolio-item-link {
						border: 2px solid #fff; 
					}

					.pagination a { 
						border: 1px solid #c2c2c2;
						color: <?php echo $color_content; ?>; 
					}
					
					.pagination li a:hover,
					.pagination li.current a { 
						color: <?php echo $color_accent_01; ?>; 
						border-color: <?php echo $color_accent_01; ?>; 
					}

					/* #PAGER
					   ========================================================================== */

					.bx-wrapper .bx-pager {
						color: #666;
						text-align: center;
					}
					
					.bx-wrapper .bx-pager.bx-default-pager a {
						background: #b4b4b4;
					}
					
					.bx-wrapper .bx-pager.bx-default-pager a:hover,
					.bx-wrapper .bx-pager.bx-default-pager a.active { background: <?php echo $color_accent_01; ?>; }

					
		<?php	}	?>		
		<?php	
			
			

			//	Theme Options - Background
			//	
			$_body_background = ewf_hlp_font_decode(EWF_SETUP_THNAME."_background");
			echo "body { ".$_body_background."}\n" ;

			
			//	Theme Options - Footer background
			//	
			$_footer_background = ewf_hlp_font_decode(EWF_SETUP_THNAME."_footer_background");
			echo "#footer { ".$_footer_background."}\n" ;
			
			
			//	Theme Options - Footer top background
			//	
			$_footer_top_background = ewf_hlp_font_decode(EWF_SETUP_THNAME."_footer_top_background");
			echo "#footer-top { ".$_footer_top_background."}\n" ;
			
		
		
			//	Theme Options - Typography
			//	
			if (get_option(EWF_SETUP_THNAME."_fonts_custom", 'false') == 'true'){
				echo "\n/*	###	EWF Custom Typography  */ \n";
				 

				//	Global Font
				//
				$_body_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_body_font", true);
				$_body_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_body_font_size", $ewf_admin_defaults['body_font_size'])."; \n";
				$_body_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_body_font_lineheight", $ewf_admin_defaults['body_font_lineheight'])."; \n";
				echo "body { ".$_body_font['css'].$_body_font_size.$_body_font_lineheight."\n }" ;
				
				
				
				$_h1_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h1_font", true);
				$_h1_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h1_font_size", $ewf_admin_defaults['h1_font_size'])."; \n";
				$_h1_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h1_font_lineheight", $ewf_admin_defaults['h1_font_lineheight'])."; \n";
				$_h1_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h1_font_margin", $ewf_admin_defaults['h1_font_margin'])."; \n";
				echo "h1 { ".$_h1_font['css'].$_h1_font_size.$_h1_font_lineheight.$_h1_font_margin."}\n\n" ;
				
				
				$_h2_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h2_font", true);
				$_h2_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h2_font_size", $ewf_admin_defaults['h2_font_size'])."; \n";
				$_h2_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h2_font_lineheight", $ewf_admin_defaults['h2_font_lineheight'])."; \n";
				$_h2_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h2_font_margin", $ewf_admin_defaults['h2_font_margin'])."; \n";
				echo "h2 { ".$_h2_font['css'].$_h2_font_size.$_h2_font_lineheight.$_h2_font_margin."}\n\n" ;
				
				
				$_h3_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h3_font", true);
				$_h3_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h3_font_size", $ewf_admin_defaults['h3_font_size'])."; \n";
				$_h3_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h3_font_lineheight", $ewf_admin_defaults['h3_font_lineheight'])."; \n";
				$_h3_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h3_font_margin", $ewf_admin_defaults['h3_font_margin'])."; \n";
				echo "h3 { ".$_h3_font['css'].$_h3_font_size.$_h3_font_lineheight.$_h3_font_margin."}\n\n" ;
				
				
				$_h4_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h4_font", true);
				$_h4_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h4_font_size", $ewf_admin_defaults['h4_font_size'])."; \n";
				$_h4_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h4_font_lineheight", $ewf_admin_defaults['h4_font_lineheight'])."; \n";
				$_h4_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h4_font_margin", $ewf_admin_defaults['h4_font_margin'])."; \n";
				echo "h4 { ".$_h4_font['css'].$_h4_font_size.$_h4_font_lineheight.$_h4_font_margin."}\n\n" ;
				

				$_h5_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h5_font", true);
				$_h5_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h5_font_size", $ewf_admin_defaults['h5_font_size'])."; \n";
				$_h5_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h5_font_lineheight",$ewf_admin_defaults['h5_font_lineheight'])."; \n";
				$_h5_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h5_font_margin", $ewf_admin_defaults['h5_font_margin'])."; \n";
				echo "h5 { ".$_h5_font['css'].$_h5_font_size.$_h5_font_lineheight.$_h5_font_margin."}\n\n" ;
				

				$_h6_font = ewf_hlp_font_decode( EWF_SETUP_THNAME."_h6_font", true);
				$_h6_font_size = 'font-size:'.get_option(EWF_SETUP_THNAME."_h6_font_size", $ewf_admin_defaults['h6_font_size'])."; \n";
				$_h6_font_lineheight = 'line-height:'.get_option(EWF_SETUP_THNAME."_h6_font_lineheight", $ewf_admin_defaults['h6_font_lineheight'])."; \n";
				$_h6_font_margin = 'margin-bottom:'.get_option(EWF_SETUP_THNAME."_h6_font_margin", $ewf_admin_defaults['h6_font_margin'])."; \n";
				echo "h6 { ".$_h6_font['css'].$_h6_font_size.$_h6_font_lineheight.$_h6_font_margin."}\n\n" ;


			}	
		
		
		return ob_get_clean();
	
	}
	



	
?>