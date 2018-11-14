<?php

function client_carosual($atts , $content = null){
    extract( shortcode_atts( array( 
		'count'=> 3, 
    ), $atts) );
     
    $qqq = new WP_Query(
        array(
 		'post_type' => 'user',
		 
		)
    );      
         
    $listss = '
		 <script type="text/javascript">
			jQuery(window).load(function(){
				 jQuery(".customer-slider").owlCarousel({
					dots: true,
					nav: false, 
					items: 1,  
					autoplay:false,
				  });
			});
		</script>
		
	 
       <div class="customer-slider owl-carousel owl-theme">
					
	';
    
    while($qqq->have_posts()) : $qqq->the_post();
	   
        $idd = get_the_ID(); 
        $stock_slider_filed = get_post_meta($idd, 'stock_slide_option', true);  
        $post_content = get_the_content();
        $listss .= ' 
			 
					 <div class="single-cusomer">
				<div class="customer-detaisl">
					<div class="customr-img">
						<div class="cutsomer-box">
							<img src="'.get_the_post_thumbnail_url($idds,'full').'" alt="">
						</div>
						<div class="customr-title">
							<h3>'.get_the_title($idd).'</h3>  
						</div>
					</div>
					<div class="single-details"> 
					     '.wpautop($post_content).' 
					</div>
				</div>
			</div> 
			 
			';        
		endwhile;
		$listss.= '
				 
		</div>
 
	 
	 ';
    wp_reset_query();
    return $listss;
}
add_shortcode('user', 'client_carosual');  

?>