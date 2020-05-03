<?php
/**
 * Plugin Name: Vayne Must Plugin
 * Plugin URI:  https://minhtuanchannhan.com/
 * Description: An autoloader that enables standard plugins to be required just like must-use plugins. The autoloaded plugins are included during mu-plugin loading. An asterisk (*) next to the name of the plugin designates the plugins that have been autoloaded.
 * Version:     1.0
 * Author:      Tuan Le Minh <minhtuanchannhan@gmail.com>
 * Author URI:  https://minhtuanchannhan.com/
 * License:     MIT License
 */

/**
 * Disable index if isn't production...
 */
if (defined('WP_ENV') && WP_ENV !== 'production' && !is_admin()) {
	add_action('pre_option_blog_public', '__return_zero');
}

/**
 * Register theme directory...
 */
if (!defined('WP_DEFAULT_THEME')) {
	register_theme_directory(ABSPATH . 'wp-content/themes');
}
