<?php

	add_shortcode( 'ewf-testimonial', 'ewf_vc_testimonial' );
	
	
	function ewf_vc_testimonial( $atts, $content ) {
	   extract( shortcode_atts( array(
		  'image_id' => 0,
		  'image_url' => null,
		  'style' => 'ewf-testimonial-style-1',
		  'name' => __("Sample Name", EWF_SETUP_THEME_DOMAIN),
		  'description' => __("Client", EWF_SETUP_THEME_DOMAIN)
	   ), $atts ) );
	   
	   $extra_class = null;
	   
		if ($image_id){
			$image_url = wp_get_attachment_image_src($image_id, 'large'); 
			$image_url = $image_url[0]; 
		}else{
			$extra_class = 'class="no-image"';
		}
	   
	   
		ob_start();
				
			switch($style){
				case 'ewf-testimonial-style-1':
					echo '<div class="testimonial">'; 
						if ($image_id){ echo '<img src="'.$image_url.'" alt="'.$image_id.'" />';  }

						echo '<blockquote>'; 
							echo '<p>';
								echo $content;
							echo '</p>';
						
							echo '<h5 class="text-uppercase"><span>'.$name.', '.$description.'</span></h5>';
						echo '</blockquote>';
					echo '</div><!-- end .testimonial -->';
					break;
					
				case 'ewf-testimonial-style-2':
					echo '<div class="testimonial-2">'; 
						if ($image_id){ echo '<div class="diamond-shape fixed"><div class="dim1"><img src="'.$image_url.'" alt="'.$image_id.'" /></div></div>';  }

						echo '<blockquote>'; 
							echo '<p>';
								echo $content;
							echo '</p>';
						
							echo '<h5 class="text-uppercase"><span>'.$name.', '.$description.'</span></h5>';
						echo '</blockquote>';
					echo '</div><!-- end .testimonial -->';
					break;
					
				case 'ewf-testimonial-style-3':
					echo '<div class="testimonial-3">'; 
					
						echo '<div class="ewf-row">';
							echo '<div class="ewf-span9">';
								
								echo '<blockquote>'; 
									echo '<p>';
										echo $content;
									echo '</p>';
								echo '</blockquote>';							
								
							echo '</div>';
							echo '<div class="ewf-span3">';
							
								if ($image_id){ 
									echo '<div class="diamond-shape fixed"><div class="dim1"><img src="'.$image_url.'" alt="'.$image_id.'" /></div></div>';  
								}
								
								echo '<p>'.$name.', '.$description.'</p>';
							
							echo '</div>';
						echo '</div>';
					echo '</div><!-- end .testimonial -->';
					break;
			}

			
		
			

		
		return ob_get_clean();
	}

	
	vc_map( array(
	   "name" => __("Testimonial", EWF_SETUP_THEME_DOMAIN),
	   "base" => "ewf-testimonial",
	   "class" => "",
	   "icon" => "icon-wpb-ewf-testimonial",
	   "description" => __("Add a quote, image and description", EWF_SETUP_THEME_DOMAIN),  
	   "category" => __('Typography', EWF_SETUP_THEME_DOMAIN),
	   "params" => array(
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => __("Image", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "image_id",
				"description" => __("Add an image to the right side of the testimonial", EWF_SETUP_THEME_DOMAIN)
			),
			array(
				"type" => "ewf-image-select",
				"holder" => "div",
				"class" => "",
				"heading" => __("Style", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "style",
				"options" => array(
					'Style 1' => 'ewf-testimonial-style-1', 
					'Style 2' => 'ewf-testimonial-style-2', 
					'Style 3' => 'ewf-testimonial-style-3', 
				),
				"value" => 'ewf-testimonial-style-1',
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Name", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "name",
				"value" => __("Sample Name", EWF_SETUP_THEME_DOMAIN),
				"description" => __("Specify the the name of the testimonial author", EWF_SETUP_THEME_DOMAIN)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => __("Description", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "description",
				"value" => __("Description", EWF_SETUP_THEME_DOMAIN),
				"description" => __("Specify a description of the author", EWF_SETUP_THEME_DOMAIN)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => __("Testimonial", EWF_SETUP_THEME_DOMAIN),
				"param_name" => "content",
				"value" => null,
				"description" => __("Specify the text of the testimonial", EWF_SETUP_THEME_DOMAIN)
			)
	   )
	));


?>