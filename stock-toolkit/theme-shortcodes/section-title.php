<?php


function section_title_shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'sections_title'=>'',  
        'sections_details'=>'', 
        
         
	 
	),$atts)
	);
	
 	$section_border_img_array = wp_get_attachment_image_src( $section_border_img,'full');
 	 
  
	$section_titel_markup = ' 
        
         
        <div class="section-title">
				<h2>'.$sections_title.'</h2>
				'.wpautop($sections_details).' 
			</div>
		</div>
	';	
	return $section_titel_markup;
	
}
add_shortcode('section_title','section_title_shortcode');














?>