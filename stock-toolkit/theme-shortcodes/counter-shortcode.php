<?php


function couner_Shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'counter_nubmer'=>'',  
        'counter_title'=>'',  
        
	),$atts)
	);
	
 	 
	$support_shortcode_title_markep = ' 
    
		<div class="helping-box text-center"> 
			<h3>'.$counter_nubmer.'</h3>
			<p>'.$counter_title.'</p>
		</div>
	 
	';	
	return $support_shortcode_title_markep;
	
}
add_shortcode('couner_Shortcode_title','couner_Shortcode');














?>