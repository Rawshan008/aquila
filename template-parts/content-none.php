<?php
/**
 * Content None Template
 *
 * @package Aquila
 */
?>
<section class="no-result not-found">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <header class="page-header">
                    <h1 class="page-title"><?php echo esc_html_e('Nothing Found', 'aquila'); ?></h1>
                </header>
                <div class="page-content">
                    <?php
                      if(is_home() && current_user_can('publish_posts')) {
                          ?>
                          <p>
                              <?php
                                printf(
                                    wp_kses(
                                    __('Ready to publish your first post? <a href="%s">Get Started Here</a>','aquila'),
                                    [
                                        'a' => [
                                            'href' => []
                                        ]
                                    ]
                                ),
                                esc_url(admin_url('post-new.php'))
                              )
                              ?>
                          </p>
                          <?php
                      } elseif (is_search()) {
                          ?>
                          <p><?php echo esc_html_e('It seamses That we could not found, search again by different keyword','aquila')?></p>
                          <?php get_search_form();?>
                          <?php
                      }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
