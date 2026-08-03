<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Paper News
 */
?>
<!-- </main> -->
<?php do_action('newsair_action_footer_missed_section'); ?>
<!--==================== FOOTER AREA ====================-->
<?php $newsair_footer_widget_background = get_theme_mod('newsair_footer_widget_background');
$newsair_footer_overlay_color = get_theme_mod('newsair_footer_overlay_color');
if ($newsair_footer_widget_background != '') { ?>
    <footer class="back-img" style="background-image:url('<?php echo esc_url($newsair_footer_widget_background); ?>');">
    <?php } else { ?>
        <footer>
        <?php } ?>
        <div class="overlay" style="background-color: <?php echo esc_html($newsair_footer_overlay_color); ?>;">
            <!--Start bs-footer-widget-area-->
            <?php if (is_active_sidebar('footer_widget_area')) { ?>
                <div class="bs-footer-widget-area">
                    <div class="container">
                        <div class="row">
                            <?php dynamic_sidebar('footer_widget_area'); ?>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/container-->
                </div>
            <?php } ?>
            <!--End bs-footer-widget-area-->
            <?php $hide_copyright = esc_attr(get_theme_mod('hide_copyright', true));
            $fcols = $hide_copyright == true ? '4' : '6';
            $falign = $hide_copyright == true ? '' : ' text-md-start';
            ?>
            <div class="bs-footer-copyright py-3">
                <div class="container">
                    <div class="row d-flex-space align-items-center ">
                        <?php if ($hide_copyright == true) { ?>
                            <div class="col-md-<?php echo esc_attr($fcols) ?> footer-inner text-center text-md-start">
                                <div class="copyright ">
                                    <p class="mb-0">
                                        <?php $newsair_footer_copyright = get_theme_mod('newsair_footer_copyright', 'Copyright &copy; All rights reserved');
                                        echo esc_html($newsair_footer_copyright); ?>
                                        <span class="sep"> | </span>
                                        <?php
                                        $themeName = !empty(NEWSAIR_THEMEURI) ? '<a href="' . esc_url(NEWSAIR_THEMEURI) . '" target="_blank">' . esc_html(NEWSAIR_THEME_NAME) . '</a>' : esc_html(NEWSAIR_THEME_NAME);
                                        printf(esc_html__('%1$s by %2$s.', 'paper-news'), $themeName, '<a href="https://themeansar.com" target="_blank">Themeansar</a>'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="col-md-<?php echo esc_attr($fcols) ?>">
                            <div class="footer-logo text-center<?php echo esc_attr($falign) ?>">
                                <?php the_custom_logo();
                                do_action('newsair_action_footer_site_title_tagline'); ?>
                            </div>
                        </div>
                        <div class="col-md-<?php echo esc_attr($fcols) ?>">
                            <?php do_action('newsair_action_footer_social_section'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/overlay-->
    </footer>
    <!--/footer-->
    </div>
    <!--/wrapper-->
    <?php
    //Scroll To Top 
    newsair_scrolltoup();
    //Search Popup
    newsair_search_popup();
    //wp_footer
    wp_footer();
    ?>
    </body>

    </html>