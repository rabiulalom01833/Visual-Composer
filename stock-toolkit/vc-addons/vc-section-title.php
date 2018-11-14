<?php

vc_map( array(
      "name" => __( "Section Title", "my-text-domain" ),
      "base" => "section_title",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
         array(
            "type" => "textfield",
            "heading" => __( "section Title", "my-text-domain" ),
            "param_name" => "sections_title", 
            "description" => __( "add title", "my-text-domain" )
         ),
		 
		 array(
            "type" => "textarea",
            "heading" => __( "Yello Title", "my-text-domain" ),
            "param_name" => "sections_details", 
            "description" => __( "add details", "my-text-domain" )
         ),
		 
		 
 
      )
   ) );