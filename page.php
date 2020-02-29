<?php get_header();?>
    <div class="container">
        <?php
            if(have_posts()): while(have_posts()): the_post(); 
                get_template_part('template-parts/content','page');
                ?>
                <?php
                endwhile;
                ?>
                <?php
                    else:
                    get_template_part('template-parts/content', 'none');
            endif;
                    wp_reset_postdata();
                ?>
        </div>

        
<?php get_footer();?>