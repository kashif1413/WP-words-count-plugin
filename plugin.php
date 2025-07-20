<?php
/*
Plugin Name: ToolsMenia's Words Count Tool
Plugin URI:  https://github.com/kashif1413/WP-words-count-plugin
Description: A simple case converter tool.
Version: 1
Author: Kashif Ajmal
Author URI: https://github.com/kashif1413
GitHub Plugin URI: kashif1413/WP-words-count-plugin
Primary Branch: main
*/


function cc_tool_shortcode() {
    ob_start(); ?>
    <!-- Include your tool HTML/CSS/JS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

    <?php include plugin_dir_path(__FILE__) . 'index.html'; ?>
    <?php
    return ob_get_clean();
}
add_shortcode('words-count', 'cc_tool_shortcode');
