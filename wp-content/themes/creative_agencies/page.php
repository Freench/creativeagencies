<?php



include('header.php');
?>
<!-- Gabarit par défault des pages -->

<article id="main-content">
        <h1><?= the_title(); ?></h1>
        <?= the_content(); ?>
</article>


<?php
include('footer.php');

?>

