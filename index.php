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

    $protocol = is_ssl() ? 'https:' : 'http:';

    wp_enqueue_script( 'js-polyfill', "$protocol//cdn.rawgit.com/inexorabletash/polyfill/v0.1.27/polyfill.min.js" );
    wp_script_add_data( 'js-polyfill', 'conditional', 'lt IE 11' );

    wp_enqueue_script( 'js-polyfill-json', "$protocol//cdnjs.cloudflare.com/ajax/libs/json3/3.3.2/json3.min.js" );
    wp_script_add_data( 'js-polyfill-json', 'conditional', 'lt IE 11' );

}, 0 );

