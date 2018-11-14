<?php

vc_map( array(
      "name" => __( "Counter Box", "my-text-domain" ),
      "base" => "couner_Shortcode_title",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
       
         array(
            "type" => "textfield",
            "heading" => __( "Counter Title", "my-text-domain" ),
            "param_name" => "counter_nubmer", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
	     array(
            "type" => "textfield",
            "heading" => __( "Counter Title", "my-text-domain" ),
            "param_name" => "counter_title", 
            "description" => __( "add Title", "my-text-domain" )
         ),
		 
	 
		 
 
      )
   ) );