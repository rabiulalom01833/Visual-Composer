<?php

vc_map( array(
      "name" => __( "Solution", "my-text-domain" ),
      "base" => "solution_shortcode_title",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
         array(
            "type" => "attach_image",
            "heading" => __( "Solution Image", "my-text-domain" ),
            "param_name" => "solution_image", 
            "description" => __( "add Image", "my-text-domain" )
         ), 
         array(
            "type" => "textfield",
            "heading" => __( "Solution Title", "my-text-domain" ),
            "param_name" => "solution_title", 
            "description" => __( "add title", "my-text-domain" )
         ),
		 
		 array(
            "type" => "textarea",
            "heading" => __( "Solution Details", "my-text-domain" ),
            "param_name" => "solution_details", 
            "description" => __( "add details", "my-text-domain" )
         ),
		 
		 
 
      )
   ) );