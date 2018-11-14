<?php

vc_map( array(
      "name" => __( "Peopel box", "my-text-domain" ),
      "base" => "peopel_box",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
         array(
            "type" => "attach_image",
            "heading" => __( "Address Image", "my-text-domain" ),
            "param_name" => "peopleaddressimage", 
            "description" => __( "add Image", "my-text-domain" )
         ), 
     
		 array(
            "type" => "textarea",
            "heading" => __( "Solution Details", "my-text-domain" ),
            "param_name" => "peopleaddress_details", 
            "description" => __( "add details", "my-text-domain" )
         ),
		 
		    array(
            "type" => "textfield",
            "heading" => __( "Solution Title", "my-text-domain" ),
            "param_name" => "peopleaddress_title", 
            "description" => __( "add title", "my-text-domain" )
         ),
		 
 
      )
   ) );