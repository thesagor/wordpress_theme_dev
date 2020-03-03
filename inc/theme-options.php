<?php
    function VCmapAddon(){
        vc_map(array(
            'base'=>'myVcShortcode',
            'name'=>'Themex Hero Setion',
            'category'=>'ThemeX',
            'params'=>array(
                array(
                    'type'=>'textfield',
                    'param_name'=>'first_title',
                    'heading'=>'This is Title Section'
                ),
                array(
                    'type'=>'textarea',
                    'param_name'=>'first_desc',
                    'heading'=>'This is Desctinon 3rd Section'
                ),
                array(
                    'type'=>'colorpicker',
                    'param_name'=>'first_title_color',
                    'heading'=>'This is Desctinon 3rd Section title color'
                ),
                array(
                    'type'=>'attach_image',
                    'param_name'=>'first_section_image',
                    'heading'=>'This is First setion image '
                ),
                
                  // params group
                array(
                    'type' => 'param_group',
                    'value' => '',
                    'group'=>'Progress Bar',
                    'param_name' => 'themexgroup',
                    // Note params is mapped inside param-group:
                    'params' => array(
                        array(
                        'type' => 'textfield',
                        'value' => '',
                        'heading' => 'Enter your title(multiple field)',
                        'param_name' => 'progress_title',
                        ),
                        array(
                            'type' => 'textfield',
                            'value' => '',
                            'heading' => 'Enter your title(multiple field)',
                            'param_name' => 'progress_amount',
                        ),
                        array(
                            'type' => 'colorpicker',
                            'value' => '',
                            'heading' => 'Enter your title(multiple field)',
                            'param_name' => 'progress_amount_color',
                        )
                    )
                )   
            )

            ));
        vc_map(array(
            'base'=>'serviceSec',
            'name'=>'Themex Service',
            'category'=>'ThemeX',
            'icon'=>get_template_directory_uri( )."/images/logo-x.png",
            'params'=>array(
                array(
                    'type'=>'param_group',
                    'heading'=>'Service Sec',
                    'param_name'=>'services_group',
                    'params'=>array(
                        array(
                            'type'=>'iconpicker',
                            'heading'=>'Select the icon',
                            'param_name'=>'service_icon',
                            'settings' => array(
                                'emptyIcon'=>true,
                                'type'=>'flaticon',
                                'iconsPerPage'=>200
                            )
                        ),
                        array(
                            'type'=>'textfield',
                            'heading'=>'Service Title',
                            'param_name'=>'service_title'
                        ),
                        array(
                            'type'=>'textfield',
                            'heading'=>'Service Description',
                            'param_name'=>'service_desc'
                        )
                        
                        
                    )

                )
            )

        ));

    }
    add_action('vc_before_init','VCmapAddon');
?>