<?php
/*
Plugin Name: ToolsMenia's Words Count Tool
Plugin URI:  https://github.com/kashif1413/WP-words-count-plugin
Description: A simple words/characters counting tool.
Version: 1.0
Author: Kashif Ajmal
Author URI: https://github.com/kashif1413
GitHub Plugin URI: kashif1413/WP-words-count-plugin
Primary Branch: main
*/

// Shortcode output
function tm_words_count_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'index.html'; // your single file
    return ob_get_clean();
}
add_shortcode('words-count', 'tm_words_count_shortcode');
