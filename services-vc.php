<?php
if( function_exists( 'vc_map' ) ) :
vc_map( array(
	"name" => __( "Services", 'avon'),
	"base" => "avon_services",
	"icon" => "fa fa-cogs avon-icon",
	"description" => __("", 'avon'),
	"class" => "",
	"category" => __( "Avon", 'avon'),
	"params" => array(
		array(
			"type"			=> "textfield",
			"heading"		=> esc_html__( "Title", "avon" ),
			"param_name"	=> "title",
			"description" => __("Enter Service title here", 'avon'),
		),
		array(
			"type" => "textarea",
			"class" => "",
			"heading" => __("Section description", 'avon'),
			"param_name" => "desc",
			"value" => "",
			"description" => __("Enter section description here", 'avon'),
		),
		array(
	        "type"			=> "param_group",
	        "heading"		=> esc_html__( "Services", "avon" ),
	        "param_name"	=> "services",
	        "description"	=> esc_html__( "Add Service items here", "avon" ),
	        "params"		=> array(
        		array(
        			"type"			=> "textfield",
        			"heading"		=> esc_html__( "Title", "avon" ),
        			"param_name"	=> "title",
        			"description" => __("Enter service item title here", 'avon'),
        		),
        		array(
					"type" => "textarea",
					"class" => "",
					"heading" => __("Description", 'avon'),
					"param_name" => "desc",
					"value" => "",
					"description" => __("Enter service item description here", 'avon'),
				),
				array(
					"type" => "textfield",
					'holder' => 'h3',
					"class" => "",
					"heading" => __( "Button Text", 'all-study'),
					"param_name" => "text",
					"value" => "Button",
					"description" => __( "Add the button's text.", 'all-study'),
					'group' => __( 'General', 'all-study'),
				),
				array(
		            'type' => 'vc_link',
		            'heading' => esc_html__( 'URL (Link)', 'all-study' ),
		            'param_name' => 'link',
		            'description' => esc_html__( 'Add link to button.', 'all-study' ),
		            'group' => __( 'General', 'all-study'),
		        ),
				array(
		            "type" => "dropdown",
		            "value" => array(
		                __("select Type", 'all-study') => "",
		                __("Image", 'all-study') => "icon-img",
		                __("Icon", 'all-study') => "icon-ico",
		            ),
		            "heading" => __("Icon Type", 'all-study'),
		            "param_name" => "icon_type",
		            "description" => __("Choose the icon alignment.", 'all-study'),
		            'group' => __( 'Icon', 'all-study'),
		        ),
		        array(
		            "type" => "attach_image",
		            "class" => "",
		            'group' => __( 'Icon', 'all-study'),
		            "heading" => __("Icon as Image", 'all-study'),
		            "param_name" => "icon_img",
		            "value" => "",
		            "description" => __("Upload or select icon as image", 'all-study'),
		            "dependency" => Array(
		                "element" => "icon_type",
		                "value" => array("icon-img")
		            ),
		        ),
		        array(
		            'type' => 'iconpicker',
		            'heading' => __( 'Icon', 'all-study' ),
		            'param_name' => 'icons',
		            'value' => 'fa fa-adjust',
		            'dependency' => array(
		                'element' => 'icon_type',
		                'value' => array('icon-ico')
		            ),
		            'description' => __( 'Select icon from library.', 'all-study' ),
		            'group' => __( 'Icon', 'all-study'),
		        ),
		        array(
        			"type"			=> "textfield",
        			"heading"		=> esc_html__( "Font Size", "avon" ),
        			"param_name"	=> "icon_size",
        			"description" => __("Enter icon font-size.", 'avon'),
        			'group' => __( 'Icon', 'all-study'),
        		),
	        ),
    	),
    	array(
		  "type" => "checkbox",
		  "class" => "",
		  "heading" => __( "Wave pattern", "avon" ),
		  "param_name" => "pattern",
		  "description" => __( "Enable/disable wave pattern", "avon" )
		),
		array(
            'type' => 'animation_style',
            'heading' => esc_html__( 'Animation Style', 'avon' ),
            'param_name' => 'animation',
            'description' => esc_html__( 'Choose your animation style', 'avon' ),
            'admin_label' => false,
            'weight' => 0,
            "group"	=> esc_html__( "Animation", "avon" ),
        ),
	)
));  

class WPBakeryShortcode_avon_services extends WPBakeryShortcode {
	protected function content( $atts, $content = null ) {
		extract( shortcode_atts( array(
            'services' => '',
            'title' => '',
            'desc' => '',
            'pattern' => '',
			'animation' => '',
		), $atts ) );
		$services = vc_param_group_parse_atts($atts['services']);
        $atts['content'] = $content;
		ob_start();

		avon_services( $services, $title, $desc, $pattern, $animation);
		
        return ob_get_clean();
	}
}
endif;

function avon_services( $services, $title, $desc, $pattern, $animation) { 

		$attributes = array();
        $class = array('service-section');
        if($animation){
            $class[] = 'wpb_animate_when_almost_visible wpb_'.$animation.' '.$animation.' wpb_start_animation animated';
        }
        if($pattern == true){
            $class[] = 'pattern';
        }
        $attributes[] = 'class="'. implode(' ',$class).'"'; ?>

	<div <?php echo implode( ' ', $attributes ); ?>>
		<div class="service-left">
			<h3 class="title"><?php echo esc_html($title); ?></h3>
			<p><?php echo esc_html($desc); ?></p>
			<div class="swiper-control">
				<div class="control prev"><i class="fa fa-arrow-left"></i></div>
				<div class="control next"><i class="fa fa-arrow-right"></i></div>
	    	</div>
		</div>
		<div class="service-right">
			<div class="swiper-container service-slider">
                <div class="swiper-wrapper">
                	<?php foreach ($services as $key => $service) :
                	$btn_attr = array();
					$button_class = array('button-default');
			        $btn_attr[] = 'class="'. implode(' ',$button_class).'"';

                	$link = $service['link'];
                	//parse link
					$link = ( '||' === $link ) ? '' : $link;
					$link = vc_build_link( $link );
					$use_link = false;
					if ( strlen( $link['url'] ) > 0 ) {
					    $use_link = true;
					    $a_href = $link['url'];
					    $a_href = apply_filters( 'vc_btn_a_href', $a_href );
					    $a_title = $link['title'];
					    $a_title = apply_filters( 'vc_btn_a_title', $a_title );
					    $a_target = $link['target'];
					    $a_rel = $link['rel'];
					}

					if ( $use_link ) {
					    $btn_attr[] = 'href="' . trim( $a_href ) . '"';
					    $btn_attr[] = 'title="' . esc_attr( trim( $a_title ) ) . '"';
					    if ( ! empty( $a_target ) ) {
					        $btn_attr[] = 'target="' . esc_attr( trim( $a_target ) ) . '"';
					    }
					    if ( ! empty( $a_rel ) ) {
					        $btn_attr[] = 'rel="' . esc_attr( trim( $a_rel ) ) . '"';
					    }
					}
					if (empty($service['icon_type'])) {
						$service['icon_type'] = '';
					}
					if (empty($service['icon_img'])) {
						$service['icon_img'] = '';
					}
					
                	$icon_img_url = wp_get_attachment_url($service['icon_img']);

                	$icon = '';
                	if($service['icon_type'] == 'icon-ico'){
			            $icon_style = !empty($service['icon_size']) ? 'style="font-size:' . esc_attr($service['icon_size']) . 'px;"' : '';
			            $icon = '<i class="counter-icon fa '. esc_attr($service['icons']) .'" ' . $icon_style . ' ></i>';
			        }elseif($service['icon_type'] == 'icon-img'){
			            $icon_style = !empty($service['icon_size']) ? 'style="width:' . esc_attr($service['icon_size']) . 'px;"' : '';
			            $icon = '<img src="'. esc_url($icon_img_url) .'" alt="icon" class="img-responsive" ' . $icon_style . '>';
			        } ?>
                    <div class="swiper-slide">
                        <div class="service-item">
                            <div class="service-thumb">
                                <?php echo wp_kses_post($icon); ?>
                            </div>
                            <h4><?php echo esc_html($service['title']); ?></h4>
                            <p><?php echo esc_html($service['desc']); ?></p>
                            <a <?php echo implode( ' ', $btn_attr ); ?>><?php echo esc_html($service['text']); ?></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
		</div>
  	</div>

<?php }