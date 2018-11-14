<?php

vc_map( array(
      "name" => __( "Support Box", "my-text-domain" ),
      "base" => "support_shortcode_title",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
       
         array(
            "type" => "textfield",
            "heading" => __( "Support Title", "my-text-domain" ),
            "param_name" => "sup_title", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
		 array(
            "type" => "textarea",
            "heading" => __( "Support List 1", "my-text-domain" ),
            "param_name" => "sup_title_1", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
		array(
            "type" => "textarea",
            "heading" => __( "Support List 1", "my-text-domain" ),
            "param_name" => "sup_title_2", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
		array(
            "type" => "textarea",
            "heading" => __( "Support List 1", "my-text-domain" ),
            "param_name" => "sup_title_3", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
		 
		 array(
            "type" => "textfield",
            "heading" => __( "Button name", "my-text-domain" ),
            "param_name" => "free_trial", 
            "description" => __( "add button", "my-text-domain" )
         ),
		 
		 
		 
			
		 
 
      )
   ) );