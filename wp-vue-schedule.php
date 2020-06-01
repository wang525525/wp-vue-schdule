<?php
/*
Plugin Name:  Wp-Vue Schedule
Plugin URI:   http://zota_schedule.test/
Description:  A WordPress plugin boilerplate with Vue.js
Version:      0.1
Author:       Your name
Author URI:   http://zota_schedule.test/
License:      Your license
License URI:  http://zota_schedule.test/
Text Domain:  yourplugin
Domain Path:  /languages
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// TODO: replace PLUGIN_NAME with yours
define( 'PLUGIN_NAME_FILE', __FILE__ );
define( 'PLUGIN_NAME_VERSION', '0.1.0.0' );

require plugin_dir_path( PLUGIN_NAME_FILE ) . 'includes/shortcodes.php';

add_action( 'wp_enqueue_scripts', function() {

  wp_enqueue_script('jquery-3.5.1.min', plugin_dir_url(__FILE__) . 'static/js/jquery-3.5.1.min.js');
  wp_enqueue_script('jquery-steps', plugin_dir_url(__FILE__) . 'static/js/jquery-steps.js');
  wp_enqueue_script('jquery-ui', plugin_dir_url(__FILE__) . 'static/js/jquery-ui.js');

  wp_enqueue_style('jquery-ui', plugin_dir_url(__FILE__) . 'static/css/jquery-ui.css');
  wp_enqueue_style('style', plugin_dir_url(__FILE__) . 'static/css/style.css');
  wp_enqueue_style('responsive', plugin_dir_url(__FILE__) . 'static/css/responsive.css');
  wp_enqueue_style('custom', plugin_dir_url(__FILE__) . 'static/css/custom.css');

  wp_register_script(
    'vue-simple-example',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/simple-example.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
  wp_register_script(
    'vue-schedule-home',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/schedule-home.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
  wp_register_script(
    'vue-schedule-multi',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/schedule-multi.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );
  wp_register_script(
    'vue-schedule-thank',
    plugin_dir_url( PLUGIN_NAME_FILE ) . 'public/js/schedule-thank.js',
    array(),
    PLUGIN_NAME_VERSION,
    true
  );


} );
