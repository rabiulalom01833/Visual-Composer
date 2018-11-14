<?php


function quick_shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'quick_title'=>'',  
        'quick_details'=>'',  
        
	),$atts)
	);
	
 	 
	$support_shortcode_title_markep = ' 
    
		<div class="cutomer-box">
			<h2>'.$quick_title.'</h2>
			 '.wpautop($quick_details).'
		</div>
	 
	';	
	return $support_shortcode_title_markep;
	
}
add_shortcode('quick_shortcode_box','quick_shortcode');














?>