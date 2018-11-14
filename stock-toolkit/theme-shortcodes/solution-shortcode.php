<?php


function solution_shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'solution_image'=>'',  
        'solution_title'=>'',  
        'solution_details'=>'', 
        
         
	 
	),$atts)
	);
	
 	$Solution_image_array = wp_get_attachment_image_src( $solution_image,'full');
 	 
  
	$solution_shortcode_title_markep = ' 
        <div class="solution-box text-center">
			<img src="'.$Solution_image_array[0].'" alt="" />
			<h3>'.$solution_title.'</h3>
			 '.wpautop($solution_details).'
		</div>
	';	
	return $solution_shortcode_title_markep;
	
}
add_shortcode('solution_shortcode_title','solution_shortcode');














?>