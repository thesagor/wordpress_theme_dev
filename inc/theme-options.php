<?php

function myFirstVC(){
    vc_map(
        array(
            'name'        => 'Title',
            'category'    => 'ThemeX',
            'base'        => 'themexVC',
            'class'       => 'edor',
            'description' =>'This is my first visual composer file',
            'icon'        => get_template_directory_uri().'/images/logo-x.png',
            'params'      => array(
                array(
                    "param_name" => "get_touch",
                    "type" => "textfield",
                    "class" => "gettouch_title",
                    "heading" => __( "Get Touch", "themex" ),
                    "value" => __( "This is Defallt value", "themex" ),
                    "description" => __( "Description for hget touch value.", "themex" )
                ),
                array(
                    "param_name" => "get_touch_desc",
                    "type" => "textarea",
                    "heading" => __( "Get Touch Description", "themex" ),
                    "value" => __( "This is Defallt value", "themex" ),
                    "description" => __( "Description for hget touch value.", "themex" )
                ),
                array(
                    "param_name" => "get_touch_color",
                    "type" => "colorpicker",
                    "heading" => __( "Title Color", "themex" ),
                    "value" => __( "This is Defallt value", "themex" ),
                    "description" => __( "Description for hget touch value.", "themex" )
                ),
                array(
                    "param_name" => "first_sec_image",
                    "type" => "attach_image",
                    "heading" => __( "First Section Image", "themex" ),
                    "value" => __( "This is Defallt value Imagee", "themex" ),
                    "description" => __( "Description for get touch value.", "themex" )
                )
            )

        )       
    );
}
add_action( 'vc_before_init','myFirstVC');


?>
