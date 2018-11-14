<?php


function product_shortcode($atts, $content = null){

	 extract( shortcode_atts( array( 
        'product_solution_image'=>'',  
        'product_solution_title'=>'',  
        'product_solution_details'=>'', 
        
         
	 
	),$atts)
	);
	
 	$Solution_image_array = wp_get_attachment_image_src( $product_solution_image,'full');
 	 
  
	$solution_shortcode_title_markep = ' 
        <div class="product-selection">
			<img src="'.$Solution_image_array[0].'" alt="" />
			<h2>'.$product_solution_title.'</h2>
			'.wpautop($product_solution_details).'
		</div>
	';	
	return $solution_shortcode_title_markep;
	
}
add_shortcode('product_shortcode_box','product_shortcode');














?>