<?php
/**
 * Plugin Name:     Restore WP Custom Fields
 * Plugin URI:      https://github.com/jonathanbossenger/restore-wp-custom-fields
 * Description:     Restore WP Custom Fields disabled by ACF
 * Author:          Jonathan Bossenger
 * Author URI:      https://github.com/jonathanbossenger/
 * Text Domain:     restore-wp-custom-fields
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Restore_Wp_Custom_Fields
 */

// Your code starts here.
add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );
