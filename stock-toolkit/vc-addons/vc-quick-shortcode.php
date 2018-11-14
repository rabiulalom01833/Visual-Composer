<?php

vc_map( array(
      "name" => __( "Quick Box", "my-text-domain" ),
      "base" => "quick_shortcode_box",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
       
         array(
            "type" => "textfield",
            "heading" => __( "Quick Title", "my-text-domain" ),
            "param_name" => "quick_title", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
	     array(
            "type" => "textarea",
            "heading" => __( "Quick Details", "my-text-domain" ),
            "param_name" => "quick_details", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
	 
		 
 
      )
   ) );