<?php

	add_shortcode( 'ewf-headline', 'ewf_vc_headline' );
	
	function ewf_vc_headline( $atts, $content ) {
	   extract( shortcode_atts( array(
		  'title' => __('Sample title', EWF_SETUP_THEME_DOMAIN),
		  'align' => 'left',
		  'icon' => null,
		  'details' => null,
		  'style' => 'ewf-headline-style-4'
	   ), $atts ) );
	 
		$src = null;
		$class_headline = 'headline';
			
		
		switch($style){
			
			case "ewf-headline-style-1":
				$src .= '<div class="headline">';
					$src .= '<h1>'.$title.'</h1>';
					
					if ($details){
						$src .= '<h3>'.$details.'</h3>';
					}
					
					$src .= '<span class="bullet"></span>';
				$src .= '</div>';
				break;
			
			case "ewf-headline-style-2":
				$src .= '<div class="headline-2">';
					
					if ($icon){
						$src .= '<i class="'.$icon.'"></i>';
					}
					
					$src .= '<h1>'.$title.'</h1>';
					
					if ($details){
						$src .= '<p>'.$details.'</p>';
					}
					
				$src .= '</div>';
				break;

			case "ewf-headline-style-3":
				$src .= '<div class="headline-3">';
					$src .= '<h1 class="text-uppercase">';
					if ($icon){
						$src .= '<i class="'.$icon.'"></i> ';
					}					
					$src .= $title.'</h1>';
					
				$src .= '</div>';
				break;
		
			case "ewf-headline-style-4":
				$src .= '<div class="headline">';
					
					if ($icon){
						$src .= '<i class="'.$icon.'"></i>';
					}
					
					$src .= '<h2>'.$title.'</h2>';
					
					if ($details){
						$src .= '<p>'.$details.'</p>';
					}
					
				$src .= '</div>';
				break;
		
		
		}
				
		return $src;
	}
		

	vc_map( array(
	   "name" => __("Headline", EWF_SETUP_THEME_DOMAIN),
	   "base" => "ewf-headline",
	   "class" => "",
	   "icon" => "icon-wpb-ewf-headline",
	   // "description" => __("Use normal and accent color on headline", EWF_SETUP_THEME_DOMAIN),  
	   "category" => __('Typography', EWF_SETUP_THEME_DOMAIN),
	   "params" => array(
		  array(
			 "type" => "ewf-icon",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Select Icon", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "icon",
			 "value" => null,
			 "description" => __("Select the icon you want to have at the top of the section", EWF_SETUP_THEME_DOMAIN)
		  ),
		  array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Title", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "title",
			 "value" => __("Sample title", EWF_SETUP_THEME_DOMAIN),
			 "description" => __("Specify the text of the headline", EWF_SETUP_THEME_DOMAIN)
		  ),
		  array(
			 "type" => "textfield",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Details", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "details",
			 "value" => __("Sample details field from here", EWF_SETUP_THEME_DOMAIN),
			 "description" => __("Specify the detaild text of the headline", EWF_SETUP_THEME_DOMAIN)
		  )
	   )
	));

?>