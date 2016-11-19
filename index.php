<?php
/*
Plugin Name: JS Polyfill
Description: JavaScript polyfill for old browsers
Version: 0.1
Plugin URI: https://github.com/shtrihstr/wp-js-polyfill
Author: Oleksandr Strikha
Author URI: https://github.com/shtrihstr
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'wp_enqueue_scripts', function() {
    $handle = 'js-polyfill';
    $version = 'v0.1.27';
    $protocol = is_ssl() ? 'https:' : 'http:';
    $script_url = "$protocol//cdn.rawgit.com/inexorabletash/polyfill/$version/polyfill.min.js";

    wp_enqueue_script( $handle, $script_url );
    wp_script_add_data( $handle, 'conditional', 'lt IE 11' );
}, 0 );

