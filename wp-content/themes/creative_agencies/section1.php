<?php
$title_section_1 = get_field("title_section_1");
$background_image_section_1 = get_field("background_image_section_1");
$text_scroll_button_section_1 = get_field("text_scroll_button_section_1");
?>


<div class="section1">
    <div class="backgroundImage">
        <img src="<?=$background_image_section_1?>" alt="">
    </div>
<h1 id="page_title"> <?=$title_section_1?> </h1>

    <div class="scrollDown">
        <span class="iconify" data-icon="mdi:chevron-down"></span>
    </div>

</div>