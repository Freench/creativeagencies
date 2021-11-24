<?php get_header(); ?>

<div class="main single">

<?php if (have_posts()) { ?>
<?php while (have_posts()) { the_post(); ?>

    <h1 class="post-title"><?php the_title(); ?></h1>

    <div class="singleContainer">
            <?php
            $gallery = get_field('gallery_projects');
            if(!empty($gallery)) {
                foreach ($gallery as $picture) { ?>

                <div class="singleSlide fade">
                    <img src="<?=$picture['image_gallery'];?>" alt="">
                </div>
                <?php
                } 
                if(count($gallery) > 1) {?>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
            <?php }
            } ?> 


        </div>

    <div class="post-content">
        <?php the_content(); ?>
        <p class="post-info">
            Posté le <?php the_date(); ?> par <?php the_author(); ?>.
        </p>
        </div>
</div>




<div class="post-comments">
    <div class="comments">
        <?php comments_template(); ?>
    </div>
</div>



<?php } } ?>


<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}

function showSlides(n) {
var i;
var slides = document.getElementsByClassName("singleSlide");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}
slides[slideIndex-1].style.display = "block";
}
</script>

<?php get_footer(); ?>