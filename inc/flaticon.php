<?php
    function vc_iconpicker_type_flaticon( $icons ) {
        $flaticon = array(
            array( 'flaticon-monitor' => 'Monitor' ),
            array( 'flaticon-coding' => 'flaticon coding' ),
            array( 'flaticon-contract' => 'flaticon contract' ),
            array( 'flaticon-lightbulb' => 'flaticon Lightbulb' ),
            array( 'flaticon-clinic-history' => 'flaticon clinic-history' ),
            array( 'flaticon-laptop-outline' => 'flaticon laptop-outline' ),
            array( 'flaticon-colored-pencils' => 'flaticon colored-pencils' ),
            array( 'flaticon-gift' => 'flaticon-gift' ),
            array( 'flaticon-smartphone' => 'flaticon smartphone' ),
            array( 'flaticon-customer' => 'flaticon customer' ),
            array( 'flaticon-tool' => 'flaticon tool' ),
            array( 'flaticon-search' => 'flaticon search' ),
            array( 'flaticon-settings' => 'flaticon settings' ),
            array( 'flaticon-dollars' => 'flaticon Dollar' ),
            array( 'flaticon-contact' => 'flaticon contact' )

        );

        return array_merge( $icons, $flaticon );


        
    }
    add_filter( 'vc_iconpicker-type-flaticon', 'vc_iconpicker_type_flaticon' );


    function themex_flaticon_register_css(){
        wp_register_style( 'flaticon-css', get_template_directory_uri().'/assets/css/flaticon.css');
    }
    add_action('vc_base_register_front_css','themex_flaticon_register_css');
    add_action('vc_base_register_admin _css','themex_flaticon_register_css');

    function themx_enquee_js_flaticon(){
        wp_enqueue_style( 'flatiocn', get_stylesheet_directory_uri().'/assets/css/flaticon.css');

    }
    add_action('vc_backend_editor_enqueue_js_css','themx_enquee_js_flaticon');
    add_action('vc_backend_editor_enqueue_js_css','themx_enquee_js_flaticon');

?>