<?php
/*
Plugin Name: myplugin
Plugin URI: http://www.examplesp.com
Description: A simple WordPress plugin that show feeds in Dashboard widgets area.
Version: 1.0.0
Author: TEst User
Author URI: http://www.examplesp.com
License: GPL2
*/

add_action( 'wp_dashboard_setup', 'ci_dashboard_add_widgets' );
function ci_dashboard_add_widgets() {
	wp_add_dashboard_widget( 'dw_dashboard_widget_news', __( 'CSSIgniter News', 'dw' ), 'dw_dashboard_widget_news_handler' );
}

function dw_dashboard_widget_news_handler() {
	$feeds = array(
		array(
			'url'          => 'ht://www.cssigniter.com/blog/feed/',
			'items'        =>2,
			'show_summary' => 1,
			'show_author'  => 0,
			'show_date'    => 1,
		),
	);

	wp_dashboard_primary_output( 'dw_dashboard_widget_news', $feeds );
}