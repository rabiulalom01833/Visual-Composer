<?php


function support_shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'sup_title'=>'',  
        'sup_title_1'=>'',  
        'sup_title_2'=>'',  
        'sup_title_3'=>'',  
        'free_trial'=>'',  
         
	 
	),$atts)
	);
	
 	 
	$support_shortcode_title_markep = ' 
    
	 <div class="display-table">
		<div class="table-cell">
			<div class="support-box">
			<h2>'.$sup_title.'</h2>
			<ul>
				<li>
				 '.$sup_title_1.'
				</li>
				 <li>
				 '.$sup_title_2.'
				</li>
				 <li>
				 '.$sup_title_3.'
				</li>
				 
				
			</ul>
			<button class="btn-read">'.$free_trial.'</button>
		</div>
		</div>
	</div>
 

	 
	';	
	return $support_shortcode_title_markep;
	
}
add_shortcode('support_shortcode_title','support_shortcode');














?>