<?php
/**
* Plugin Name: Beautify Code Blocks via Highlight.js
* Plugin URI: https://ugurtasar.com/wordpress-beautify-code-blocks-via-highlight-js
* Description: Automatically beautify code blocks via Highlight.js
* Version: 1.0
* Text Domain: beautify-code-blocks
* Author: Ugur Tasar
* Author URI: https://ugurtasar.com
*/

function beautify_code_blocks(){
wp_enqueue_script('beautify-code-blocks', plugins_url('js/highlight.min.js',__FILE__ ));
wp_enqueue_style('beautify-code-blocks', plugins_url('css/default.min.css',__FILE__));
wp_add_inline_script('beautify-code-blocks', 'hljs.highlightAll();');
}

add_action( 'wp_enqueue_scripts', 'beautify_code_blocks' );
?>