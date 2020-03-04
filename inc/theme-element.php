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
                                            <i class="<?php echo esc_attr($s_value['service_icon']);?>"></i>
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

function WorkingSec($atts){
        extract(shortcode_atts(
            array(

                'working_group'=>
                array(
                    'working_icon'=> '',                    
                    'working_title'=> '',
                    'working_amount'=> ''

                )

        ),$atts));


    ob_start();?>

        <div class="Counter_section_digital_home">
            <div class="container">
                <div class="numbers_resume_home text-center">
                    <div class="row">
                        <?php
                            $vc_group_working = vc_param_group_parse_atts( $atts['working_group'] );
                            if($vc_group_working){
                                foreach ($vc_group_working as $wkey => $wvalue) { ?>
                                    <div class="number_tem_resume col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                                        <!-- <img src="images/flat_img/resume_home_counter_single_01.png" alt=""> -->
                                        <i class="<?php echo esc_attr($wvalue['working_icon']);?>"></i>
                                        <span class="counter"><?php echo esc_html($wvalue['working_amount']);?></span>
                                        <h6><?php echo esc_html($wvalue['working_title']);?></h6>
                                    </div><!-- number_tem_resume  -->
                            <?php } } ?>
                        

                        

                    </div><!--.row-->
                </div><!--.numbers-->
            </div><!--.container-->
        </div><!--.Counter_section_digital_home-->



    <?php return ob_get_clean();


    }
add_shortcode('workingsec','WorkingSec');

function pricing_sec($atts){
    extract(shortcode_atts(
        array(

            'pricing_group'=>
            array(
                'pricing_title'=> '',                    
                'pricing_package_group'=> array(
                    'package_icon'=>'',
                    'package_amount'=>'',
                    'package_date'=>'',
                ),
                'package_body_list'=>array(
                    'package_pricing_list'=>'',
                ),
                'pricing_btn_text'=> ''

            )

    ),$atts));


ob_start();?>

    <div class="service_page_twO pricing_table_digital">
        <div class="container">
            <div class="row">
                <div class="pricing_table_LIst pricing_table_digital">
                    <?php
                        $vc_group_pricing = vc_param_group_parse_atts( $atts['pricing_group'] );
                        if($vc_group_pricing){
                            foreach ($vc_group_pricing as $p_key => $p_value) { ?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="single_price_item_e text-center wow fadeInUp" data-wow-delay="300ms">
                                        <h3><?php echo esc_html( $p_value['pricing_title'] )?></h3>
                                        <hr class="hr_top">

                                        <?php $vc_group_pricing_package = vc_param_group_parse_atts( $p_value['pricing_package_group'] );
                                            if($vc_group_pricing_package){
                                                foreach ($vc_group_pricing_package as $pp_key => $pp_value) { ?>
                                                    <p><sub> <i class="<?php echo esc_attr( $pp_value['package_icon'] )?>"></i> </sub> <b><?php echo esc_html( $pp_value['package_amount'] )?></b> / <?php echo esc_html( $pp_value['package_date'] )?> </p>

                                               <?php } } ?>
                                        


                                        <hr class="hr_bottom">


                                        <ul class="pricing_list_thex">
                                                                                      
                                            <?php $vc_group_pricing_list = vc_param_group_parse_atts( $p_value['package_body_list'] );
                                            if($vc_group_pricing_list){
                                                foreach ($vc_group_pricing_list as $pl_key => $pl_value) { ?>
                                                    
                                                    <li><?php echo esc_html( $pl_value['package_pricing_list'] )?></li> 
                                                    

                                            <?php } } ?>
                                        </ul>


                                        <a href="#" class="order_now_s_price"><?php echo esc_html( $p_value['pricing_btn_text'] )?></a>
                                    </div>
                                </div><!-- col-md-4 -->

                                

                            <?php } } ?>


                    

                </div>
            </div>
        </div>
    </div>



<?php return ob_get_clean();


}
add_shortcode('pricing_sec_shortcode','pricing_sec');

?>