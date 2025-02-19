<?php
/**
 * Default theme options.
 *
 * @package Paper News
 */

if (!function_exists('papernews_get_default_theme_options')):

/**
 * Get default theme options
 *
 * @since 1.0.0
 *
 * @return array Default theme options.
 */
function papernews_get_default_theme_options() {

    $defaults = array();

    $defaults['select_trending_news_category'] = 0;
    $defaults['select_recent_post_category'] = 0;
    $defaults['show_main_news_section'] = 0;

	return $defaults;

}
endif;