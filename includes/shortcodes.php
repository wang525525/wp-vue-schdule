<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_shortcode( 'simple_example', function() {
  wp_enqueue_script( 'vue-simple-example' );

  return '<div class="vue-simple-example"></div>';
} );

add_shortcode( 'schedule_home', function() {
  wp_enqueue_script( 'vue-schedule-home' );

  return '<div class="vue-schedule-home"></div>';
} );

add_shortcode( 'schedule_multi', function() {
  wp_enqueue_script( 'vue-schedule-multi' );

  return '<div class="vue-schedule-multi"></div>';
} );

add_shortcode( 'schedule_thank', function() {
  wp_enqueue_script( 'vue-schedule-thank' );

  return '<div class="vue-schedule-thank"></div>';
} );