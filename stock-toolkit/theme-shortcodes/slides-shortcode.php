<?php

function slider_shortcode_code($atts , $content = null){
    extract( shortcode_atts( array( 
		'count'=> 3, 
    ), $atts) );
     
    $qq = new WP_Query(
        array(
 		'post_type' => 'slide',
		 
		)
    );      
         
    $slider_amrkeutp = '
		 <script type="text/javascript">
			jQuery(window).load(function(){
				 jQuery(".hero-slider").owlCarousel({
					dots: true,
					nav: false, 
					items: 1, 
					loop: false,
					autoplay:true,   
				  });
			});
		</script>
        
			<section id="header-banner">
		<div class="container"> 
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-slider owl-carousel owl-theme">
					
	';
    
    while($qq->have_posts()) : $qq->the_post();
        $idd = get_the_ID();
        $stock_slider_filed = get_post_meta($idd, 'stock_slide_option', true);
		
        $post_content = get_the_content();
        $slider_amrkeutp .= '
        
		 
			
			<div class="singl-slider">
					
					<div class="slider-img">
						<img src="'.get_the_post_thumbnail_url($idds,'full').'" alt="">
					</div>	
					<div class="sldier-detiasl">
						<h1>'.get_the_title($idd).'</h1>
						 '.wpautop($post_content).'
						<button class="btn-read">Start Your Free Trial</button>
					</div>
					
				</div>
		
				 
        
        ';        
    endwhile;
    $slider_amrkeutp.= '
	 			
						
						
					</div>
				</div>
			</div>
			 <div class="row">
				 
                 <div class="scroll-img">
					 
				 </div>
                
			</div>
		</div>
	</section> 
	 
	 ';
    wp_reset_query();
    return $slider_amrkeutp;
}
add_shortcode('slide', 'slider_shortcode_code');  

?>