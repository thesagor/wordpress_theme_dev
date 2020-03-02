<?php

    function myVcmap(){
        vc_map( array(
            "name" => __( "Themex Addon", "themex" ),
            "base" => "myvcshortcode",
            "description" => "This Addon is available only for Themex",
            "category" => __( "Themex", "themex"),
            'icon' => get_template_directory_uri().'/images/logo-x.png',
            "params" => 
                array(
                    array(                    
                        "type" => "textfield",
                        "heading" => __( "Please add 3rd section Title", "themex" ),
                        "param_name" => "themex_title",
                        "value" => __( "This is test param for creating new project", "themex" ),
                        "description" => __( "This is title zone.", "themex" )
                    ),
                    array(                    
                        "type" => "colorpicker",
                        "heading" => __( "Please add color for Title", "themex" ),
                        "param_name" => "themex_title_color",
                        "value" => __( "This is test param for creating new project", "themex" ),
                        "description" => __( "This is title zone.", "themex" )
                    ),
                    array(                    
                        "type" => "attach_image",
                        "heading" => __( "Please Add Images For First section", "themex" ),
                        "param_name" => "themex_images",
                        "value" => __( "This is default value for images", "themex" ),
                        "description" => __( "This is title zone.", "themex" )
                    ),
                    array(                    
                        "type" => "textarea",
                        "heading" => __( "Please Add Text box For 3rd section", "themex" ),
                        "param_name" => "themex_desc",
                        "value" => __( "This is default value for images", "themex" ),
                        "description" => __( "This is title zone.", "themex" )
                    )

                )

            )
        );
    }
    add_action('vc_before_init','myVcmap');


?>