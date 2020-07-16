<?php
get_header();
?>
<div class="content">

    <?php
    if (is_page()) {
        get_template_part('/template-parts/content', 'page');
    } else {
        get_template_part('/template-parts/content', 'post');
    }
    ?>
</div>

<?php get_footer(); ?>