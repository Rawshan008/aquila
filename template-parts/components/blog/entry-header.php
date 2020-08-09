<?php
/**
 * Entry Header Template
 *
 * @package Aquila
 */

$the_post_id = get_the_ID();
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id, 'blog-image' );
?>
<header class="entry-header">
    <?php
    /**
     * Post Thumbnail
     */
        if ($has_post_thumbnail) {
            ?>
            <div class="entry-image mb-3">
                <?php if (is_single() || is_page()) :?>
                    <?php the_post_thumbnail(); ?>
                <?php else :?>
                    <a href="<?php esc_url(the_permalink());?>">
                        <?php echo $has_post_thumbnail; ?>
                    </a>
                <?php endif; ?>
            </div>
            <?php
        }

    /**
     * Title
     */
    if (is_single() || is_page()) {
        printf(
            '<h1 class="page-title text-dark mb-3">%1$s</h1>',
            wp_kses_post(get_the_title())
        );
    } else {
        printf(
          '<h2 class="entry-title"><a class="text-dark" href="%1$s">%2$s</a></h2>',
            esc_url(get_the_permalink()),
            wp_kses_post(get_the_title())
        );
    }
    ?>
</header>
