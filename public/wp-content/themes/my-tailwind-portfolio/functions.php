<?php
function my_tailwind_portfolio_enqueue_scripts() {
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/output.css'); // Enqueue Tailwind output.css
}
add_action('wp_enqueue_scripts', 'my_tailwind_portfolio_enqueue_scripts');
