<?php get_header(); ?>
<div class="bg">
    <div class="main single">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
        <h1 class="post-title"><?php the_title(); ?></h1>

        <div class="singleContainer">
                <?php
                $gallery = get_field('gallery_projects');
                if(!empty($gallery)) {
                    foreach ($gallery as $picture) { ?>

                    <div class="singleSlide">
                        <img src="<?=$picture['image_gallery'];?>" alt="">
                    </div>
                    <?php
                    }
                } ?> 
            </div>

        <div class="post-content">
            <?php the_content(); ?>
            <p class="post-info">
                Posté le <?php the_date(); ?> par <?php the_author(); ?>.
            </p>
            </div>

        </div>
    </div>
   



    <div class="post-comments">
        <div class="comments">
            <?php comments_template(); ?>
        </div>
    </div>



    <?php endwhile; ?>
    <?php endif; ?>
    
</div>





