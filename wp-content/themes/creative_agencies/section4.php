<?php
$title_section_4 = get_field("title_section_4");
$watermark_section_4 = get_field("watermark_section_4");
$subtitle_section_4 = get_field("subtitle_section_4");
?>

<div id="s4head">
    <h2> <?=$title_section_4;?> </h2>
    <span class="watermarkS4"> <?=$watermark_section_4;?> </span>

    <p><?=$subtitle_section_4;?></p>

</div>

<div class="recentPosts">
    <?php 

        $posts = query_posts('posts_per_page=4');
        if(!empty($posts)) {
            foreach ($posts as $post) {?>
                <div class="singleDisplay">
                        <a href="<?= get_permalink();?>"> 
                            <img src="<?= reset(array_shift(get_field('gallery_projects'))) ?>" alt="<?= $post -> post_name;?>"> 
                        </a>

                        <div class=singleContent>
                            <h5><?= $post -> post_title;?></h5>
                            <?= mb_strimwidth($post -> post_content, 0, 156, "...");?>
                        </div>
                </div>
                <?php
            }
        }

    ?>

</div>


