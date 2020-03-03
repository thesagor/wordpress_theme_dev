<?php 

    function myShortcode($atts,$content = null){
        extract(shortcode_atts(array(
            'first_title'=>'',
            'first_desc'=>'',
            'first_title_color'=>'',
            'first_section_image'=>'',
            'themexgroup'=> array(
                'progress_title'=> '',
                'progress_amount_color'=> '',
                'progress_amount'=> ''

            )

        ),$atts));
        ob_start();?>

            <div class="get_in_tuch_skill">
                <div class="container-fluid nopadding">
                    <div class="col-md-6 col-sm-6 padding_left">
                        <div class="left_image_get_in">

                        <?php
                             $image_attributes = wp_get_attachment_image_src( $first_section_image,'full ' );
                            if ( $image_attributes ) : ?>
                                <img src="<?php echo $image_attributes[0]; ?>" />
                            <?php endif; ?>
                        </div>
                    </div><!-- col-md-6  -->

                    <div class="col-md-3 col-sm-6">
                        <div class="middle_skill_get_in heroo_get_in_tuch">
                            <div class="middle_skill_get_in_cell">
                                <div class="hero-progress">

                                    <?php
                                        $vc_group_themex = vc_param_group_parse_atts( $atts['themexgroup'] );
                                        if($vc_group_themex){
                                            foreach ($vc_group_themex as $key => $value) { ?>
                                                <div class="progress-item">
                                                    <p><?php echo esc_html( $value['progress_title'] )?><span class="pull-right"><?php echo esc_html( $value['progress_amount'] )?>%</span></p>
                                                    <div class="progress-main"><span class="progress-bar" style="background-color:<?php echo esc_html( $value['progress_amount_color'] )?>" data-value="<?php echo esc_html( $value['progress_amount'] )?>%"></span></div>
                                                </div><!-- progress-item  -->

                                    <?php  } } ?>
                                    
                                </div>
                            </div><!-- middle_skill_get_in_cell -->
                        </div><!-- middle_skill_get_in -->
                    </div><!-- col-md-3  -->

                    <div class="col-md-3 padding_right col-sm-6">
                        <div class="right_skill_get_in_text">
                            <div class="right_skill_get_in_text_cell">
                                <h3 style="color:<?php echo esc_attr( $first_title_color )?>"><?php echo esc_html( $first_title )?></h3>
                                <p><?php echo esc_html( $first_desc )?></p>
                                <a href="#" class="MESSAGE_uS">MESSAGE US</a>
                            </div>
                        </div>
                    </div><!-- col-md-3  -->
                </div><!-- container-fluid  -->
            </div><!-- get_in_tuch_skill  -->



        <?php return ob_get_clean();


    }
    add_shortcode('myVcShortcode','myShortcode');


    function serviceSection($atts){
        extract(shortcode_atts(
            array(

                'services_group'=>
                 array(
                    'service_icon'=> '',                    
                    'service_title'=> '',
                    'service_desc'=> ''

                )

        ),$atts));


    ob_start();?>

        <div class="service_section_digital">
            <div class="container">
                <div class="row">
                    <div class="service_section_digital_list">
                        <?php
                            $vc_group_service = vc_param_group_parse_atts( $atts['services_group'] );
                            foreach ($vc_group_service as $s_key => $s_value) { ?>

                                <div class="col-md-3 col-sm-6">
                                    <div class="single_service_digitAl text-center">
                                        <div class="c_column_digital_text">
                                            <i class="fas fa-american-sign-language-interpreting"></i>
                                            <h3><a href="#"><?php echo esc_html($s_value['service_title']);?></a></h3>
                                            <p><?php echo esc_html($s_value[service_desc]);?></p>
                                        </div>
                                    </div>  
                                </div><!-- col-md-3  -->

                                
                                
                           <?php }
                            ?>
                                              


                    </div><!-- service_section_digital_list  -->
                </div><!-- row  -->
            </div><!-- container  -->
        </div><!-- service_section_digital  -->



    <?php return ob_get_clean();


}
add_shortcode('serviceSec','serviceSection');
    


?>