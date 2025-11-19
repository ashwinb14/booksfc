<?php
/**
 * Accounting Theme Functions
 */

function accounting_theme_enqueue_styles() {
    wp_enqueue_style('accounting-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'accounting_theme_enqueue_styles');

