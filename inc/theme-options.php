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

        vc_map(array(
            'base'=>'workingsec',
            'name'=>'Themex working',
            'category'=>'ThemeX',
            'icon'=>get_template_directory_uri( )."/images/logo-x.png",
            'params'=>array(
                array(
                    'type'=>'param_group',
                    'heading'=>'working Sec',
                    'param_name'=>'working_group',
                    'params'=>array(
                        array(
                            'type'=>'iconpicker',
                            'heading'=>'Select the icon',
                            'param_name'=>'working_icon',
                            'settings' => array(
                                'emptyIcon'=>true,
                                'type'=>'flaticon',
                                'iconsPerPage'=>200
                            )
                        ),                        
                        array(
                            'type'=>'textfield',
                            'heading'=>'working Amount',
                            'param_name'=>'working_amount'
                        ),
                        array(
                            'type'=>'textfield',
                            'heading'=>'working Title',
                            'param_name'=>'working_title'
                        )
                        
                        
                    )

                )
            )

        ));

        vc_map(array(
            'base'=>'pricing_sec_shortcode',
            'name'=>'Themex Pricing',
            'category'=>'ThemeX',
            'icon'=>get_template_directory_uri( )."/images/logo-x.png",
            'params'=>array(
                array(
                    'type'=>'param_group',
                    'heading'=>'Pricing Sec',
                    'param_name'=>'pricing_group',
                    'params'=>array(
                        array(
                            'type'=>'textfield',
                            'heading'=>'pricing Title',
                            'param_name'=>'pricing_title'
                        ),
                        array(
                            'type'=>'param_group',
                            'heading'=>'Pricing package',
                            'param_name'=>'pricing_package_group',
                            'params'=>array(
                                array(
                                    'type'=>'iconpicker',
                                    'heading'=>'Select the icon',
                                    'param_name'=>'package_icon',
                                    'settings' => array(
                                        'emptyIcon'=>true,
                                        'type'=>'flaticon',
                                        'iconsPerPage'=>200
                                    )
                                ),
                                array(
                                    'type'=>'textfield',
                                    'heading'=>'package amount',
                                    'param_name'=>'package_amount'

                                ),
                                array(
                                    'type'=>'textfield',
                                    'heading'=>'package Date',
                                    'param_name'=>'package_date'

                                )

                            )
                        ),
                        array(
                            'type'=>'param_group',
                            'heading'=>'pricing body',
                            'param_name'=>'package_body_list',
                            'params'=>array(
                                array(
                                    'type'=>'textfield',
                                    'heading'=>'pricing list',
                                    'param_name'=>'package_pricing_list'
                                )
                            )
                        ),                        
                        array(
                            'type'=>'textfield',
                            'heading'=>'pricing Button Text',
                            'param_name'=>'pricing_btn_text'
                        )
                        
                    )

                )
            )

        ));

        vc_map(array(
            'base'=>'testimonial_sec',
            'name'=>'Themex Testimonial',
            'category'=>'ThemeX',
            'icon'=>get_template_directory_uri( )."/images/logo-x.png",
            'params'=>array(
                array(
                    'type'=>'textfield',
                    'heading'=>'Heading Text',
                    'param_name'=>'heading_text'
                ),
                array(
                    'type'=>'param_group',
                    'heading'=>'working Sec',
                    'param_name'=>'testimonial_group',
                    'params'=>array(
                        array(
                            'type'=>'textarea',
                            'heading'=>'Type the Testimonial Heading',
                            'param_name'=>'testimonial_heading'
                        ),
                        array(
                            'type'=>'attach_image',
                            'heading'=>'Select the Image',
                            'param_name'=>'testimonial_image'
                        ),                        
                        array(
                            'type'=>'textfield',
                            'heading'=>'Your Name',
                            'param_name'=>'clients_name'
                        ),
                        array(
                            'type'=>'textfield',
                            'heading'=>'Testimonial Company',
                            'param_name'=>'clients_company'
                        )
                        
                        
                    )

                )
            )

        ));

    }
    add_action('vc_before_init','VCmapAddon');
?>