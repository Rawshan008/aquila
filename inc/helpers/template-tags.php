<?php
/**
 * Templates Tags
 * @package Aquila
 */

function aquila_postsed_on() {
    $time_string = '<time class="entry-data published updated" datetime="%1$s">%2$s</time>';

    /**
     * Posts in modified
     */
    if (get_the_title('U') !== get_the_modified_time('U')) {
        $time_string = '<time class="entry-data published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf($time_string,
        esc_attr(get_the_date(DATE_W3C)),
        esc_attr(get_the_date()),
        esc_attr(get_the_modified_date(DATE_W3C)),
        esc_attr(get_the_modified_date())
    );

    $posted_on = sprintf(
        esc_html_x('Posted on %s', 'post date', 'aquila'),
        '<a href="'.esc_url(get_permalink()).'">'.$time_string.'</a>'
    );

    echo '<span class="posted-one text-secondary">'.$posted_on.'</span>';
}

/**
 * Author
 */

function aquila_post_by() {
    $byline = sprintf(
      esc_html_x(' by %s', 'post author', 'aquila'),
      '<span class="author vcard"><a href="'.esc_url(get_author_posts_url(get_the_author_meta('ID'))).'">'.esc_html(get_the_author()).'</a></span>'
    );
    echo '<span class="byline text-secondary">'.$byline.'</span>';
}

/**
 * Excerpt length
 */
function aquila_the_excerpt($trim_character_count = 0) {
    if (!has_excerpt() || 0 === $trim_character_count) {
        the_excerpt();
        return;
    }

    $excerpt = wp_strip_all_tags(get_the_excerpt());
    $excerpt = substr($excerpt, 0, $trim_character_count);
    $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));

    echo $excerpt . " [...]";
}

/**
 * Excerpt More
 */
function aquila_excerpt_more() {
    if (!is_single()) {
        $more = sprintf(
            '<button class="d-block mt-4 mb-4 btn btn-info"><a class="aquil-read-more text-white" href="%1$s">%2$s</a></button>',
            esc_url(get_permalink(get_the_ID())),
            __('Read More', 'aquila')
        );
    }

    echo $more;
}
