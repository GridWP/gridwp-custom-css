<?php
/*
Plugin Name: GridWP Custom CSS for WordPress
Plugin URI: http://gridwp.com
Description: Allows you to include inline CSS in the header or footer of your parent or child themes. On WordPress Multisite, this plugin must be "Network Activated".
Author:	Jason Jersey
Author URI: https://www.twitter.com/degersey
Version: 1.2
Text Domain: gridwp-custom-css
Domain Path: language
*/

/* Exit if accessed directly
 * Since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/* Load functions
 * Since 1.0
 */
require_once(dirname(__FILE__)."/functions.php");

/* Load panel
 * Since 1.0
 */
require_once(dirname(__FILE__)."/panel.php");

/* Enable panel menu
 * Since 1.0
 */
add_action('admin_menu', 'gridwp_custom_css_fp_panel_menu');

/* Enqueue panel page css
 * Since 1.0
 */
add_action('admin_enqueue_scripts', 'gridwp_custom_css_panel_style');

/* Language Support
 * Since 1.0
 */
add_action('plugins_loaded', 'gridwp_custom_css_textdomain');

/* Global Frontend Header CSS
 * Since 1.0
 */
function global_frontend_header_css() { 
/* If Header CSS On
 * Since 1.1
 */
if ( get_option("gridwp_custom_css_header_on") ) {
?>
<style type="text/css"><?php echo get_option("gridwp_custom_css_header"); ?></style>
<?php } }

/* Global Frontend Footer CSS
 * Since 1.0
 */
function global_frontend_footer_css() { 
/* If Footer CSS On
 * Since 1.1
 */
if ( get_option("gridwp_custom_css_footer_on") ) {
?>
<style type="text/css"><?php echo get_option("gridwp_custom_css_footer"); ?></style>
<?php } }

/* Add Global CSS Actions
 * Since 1.0
 */
add_action('wp_head', 'global_frontend_header_css');
add_action('wp_footer', 'global_frontend_footer_css');