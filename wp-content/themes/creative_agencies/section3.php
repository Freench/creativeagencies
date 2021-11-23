<?php
    
$args = array(
    'post_type'=> 'projects',
    'posts_per_page' => '2',
    'order'    => 'DESC'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : 
    $i=-1;
    while ( $the_query->have_posts() ) : 
        $i+=1;
        $the_query->the_post(); 

        // echo $the_query -> post_title;
        if(have_rows('gallery_projects')){
            $gallery = get_field('gallery_projects');
            //print_r($gallery);
        }
        ?>
        <div class="s3-project">

            <a href="<?= get_permalink();?>" class="s3-project-content">
                    <h3><?= $the_query->posts[$i]->post_title; ?></h3>
                    <p><?= mb_strimwidth($the_query->posts[$i]->post_content, 0, 160, "... ") ; ?></p>
            </a>

            <div class="s3-img-container">
            
                <img src="<?= $gallery[0]['image_gallery'] ; ?>" alt="Une image">
            </div>
        </div>

        <?php

        // content goes here
    endwhile;
    wp_reset_postdata();
else:
endif;

?>