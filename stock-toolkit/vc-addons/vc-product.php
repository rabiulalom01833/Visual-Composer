<?php

vc_map( array(
      "name" => __( "Product", "my-text-domain" ),
      "base" => "product_shortcode_box",
      "category" => __( "codemetro", "my-text-domain"),
      "params" => array(
          
         array(
            "type" => "attach_image",
            "heading" => __( "Product Image", "my-text-domain" ),
            "param_name" => "product_solution_image", 
            "description" => __( "add Image", "my-text-domain" )
         ), 
         array(
            "type" => "textfield",
            "heading" => __( "Product Title", "my-text-domain" ),
            "param_name" => "product_solution_title", 
            "description" => __( "add title", "my-text-domain" )
         ),
		 
		 array(
            "type" => "textarea",
            "heading" => __( "Product Details", "my-text-domain" ),
            "param_name" => "product_solution_details", 
            "description" => __( "add details", "my-text-domain" )
         ),
		 
		 
 
      )
   ) );