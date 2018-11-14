 <?php

vc_map( array(
      "name" => __( "Stock Slider", "my-text-domain" ),
      "base" => "slide",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
         array(
            "type" => "textfield",
            "heading" => __( "Count", "my-text-domain" ),
            "param_name" => "count",
            "value" => __( "1", "my-text-domain" ),
            "description" => __( "Type slider number", "my-text-domain" )
         ),
		   
		 
      )
   ) );
   
   
   ?>