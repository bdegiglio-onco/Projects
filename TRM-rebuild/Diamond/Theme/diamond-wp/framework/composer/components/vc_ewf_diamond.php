<?php

	
	
	#	Register image size for diamond shape
	#
	add_image_size( 'ewf-diamond-shape', 220, 220, true);
	
	add_shortcode( 'ewf-diamond', 'ewf_vc_diamond' );
	
	
	function ewf_vc_diamond( $atts, $content ) {
	   extract( shortcode_atts( array(
		  'image_id' => 0
	   ), $atts ) );
	 
		
		if ($image_id){
			$image_url = wp_get_attachment_image_src($image_id, 'ewf-diamond-shape'); 
			$image_url = $image_url[0]; 
		}
	 
		ob_start();
		
		echo '<div class="diamond-shape fixed"><div class="dim1">';
				if ($image_id){
					echo '<img src="'.$image_url.'" alt="'.$image_id.'" />';
				}			
		echo '</div></div><!-- end .diamond-shape -->';
		
		return ob_get_clean();
	}

	
	vc_map( array(
	   "name" => __("Diamond Shape Image", EWF_SETUP_THEME_DOMAIN),
	   "base" => "ewf-diamond",
	   "icon" => "icon-wpb-ewf-diamond",
	   // "description" => __("Add atitle and a percentage loaded", EWF_SETUP_THEME_DOMAIN), 
	   "class" => "",
	   "category" => __('Typography', EWF_SETUP_THEME_DOMAIN),
	   "params" => array(
		  array(
			 "type" => "attach_image",
			 "holder" => "div",
			 "class" => "",
			 "heading" => __("Image", EWF_SETUP_THEME_DOMAIN),
			 "param_name" => "image_id",
			 "description" => __("Add the image of in the diamond shape", EWF_SETUP_THEME_DOMAIN)
		  )
	   )
	));


?>