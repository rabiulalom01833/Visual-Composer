<?php

vc_map( array(
      "name" => __( "Button", "my-text-domain" ),
      "base" => "button_shortcode_title",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
         array(
            "type" => "textfield",
            "heading" => __( "Button Url", "my-text-domain" ),
            "param_name" => "button_url", 
            "description" => __( "add url", "my-text-domain" )
         ), 
         array(
            "type" => "textfield",
            "heading" => __( "Button Name", "my-text-domain" ),
            "param_name" => "button_name", 
            "description" => __( "add Name", "my-text-domain" )
         ),
		 
 
		 
 
      )
   ) );