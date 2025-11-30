<?php
if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly
// Load CMB2 and meta boxes after CMB2 is initialized
require_once MYTHEME_DIR . '/admin/meta-boxes/cmb2-tabs.php';
add_action('cmb2_init', 'load_meta_boxes');

function load_meta_boxes() {
    // Include meta box files
    $options_files = glob(__DIR__ . '/meta-boxes/*.php');

    foreach ($options_files as $file) {
        include $file;
    }
}
