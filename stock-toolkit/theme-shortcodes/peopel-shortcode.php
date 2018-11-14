<?php


function peopel_shortocde($atts, $content = null){

	 extract( shortcode_atts( array( 
        'peopleaddressimage'=>'',  
        'peopleaddress_details'=>'',  
        'peopleaddress_title'=>'', 
        
         
	 
	),$atts)
	);
	
 	$people_address_image_array = wp_get_attachment_image_src( $peopleaddressimage,'full');
 	 
  
	$solution_shortcode_title_markep = ' 
        <div class="single-peopel-img">
        	<div class="single-img">
        		<img src="'.$people_address_image_array[0].'" alt="" />
            </div>
        	<div class="img-peopel-details">
        		<h2>'.$peopleaddress_details.'</h2>
        		<p>'.$peopleaddress_title.'</p>
        	</div>
        </div>
	';	
	return $solution_shortcode_title_markep;
	
}
add_shortcode('peopel_box','peopel_shortocde');














?>