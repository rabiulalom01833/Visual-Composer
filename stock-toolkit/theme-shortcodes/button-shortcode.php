<?php


function button_shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'button_url'=>'',  
        'button_name'=>'',  
         
	 
	),$atts)
	);
	
 	$Solution_image_array = wp_get_attachment_image_src( $solution_image,'full');
 	 
  
	$solution_shortcode_title_markep = ' 
     
		 <a href="'.$button_url.'"> <div class="btn-read btn-read-pic">'.$button_name.'</div></a>
 
	';	
	return $solution_shortcode_title_markep;
	
}
add_shortcode('button_shortcode_title','button_shortcode');














?>