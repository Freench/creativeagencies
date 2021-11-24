<div id="s2-title-container">
    <div class="letter"> <?= get_field('watermark_section_2')?></div>
    <h2 id="s2-title"><?= get_field("title_section_2") ?></h2>
</div>
<div id="s2-content-container">
    <?php 
    if(have_rows('blocs_section_2')){
        $blocs = get_field('blocs_section_2');
        foreach($blocs as $bloc){ ?>
            <div class="s2-bloc"> 
                <img src="<?=  $bloc['icon_bloc_section_2']?>" alt="icon picto">
                <h3><?= $bloc['title_bloc_section_2'] ?></h3>
                <p><?= $bloc['text_bloc_section_2'] ?></p>
            </div>
        <?php
        }
    }?>
</div>