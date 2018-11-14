<?php


function addres_box_shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'addressimage'=>'',  
        'address_details'=>'',  
        'address_title'=>'', 
        
         
	 
	),$atts)
	);
	
 	$address_image_array = wp_get_attachment_image_src( $addressimage,'full');
 	 
  
	$solution_shortcode_title_markep = ' 
        <div class="address_box box-shadow">
    	<div class="addres-box-details">
    	    '.wpautop($address_details).'
    		<div class="get-derection">
    			<h2>'.$address_title.'</h2>
    		</div>
    	</div>
    	<div class="addres-img">
    		<img src="'.$address_image_array[0].'" alt="" />
    	</div>
       </div>
	';	
	return $solution_shortcode_title_markep;
	
}
add_shortcode('addres_box','addres_box_shortcode');














?>