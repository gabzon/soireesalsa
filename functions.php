<?php
/**
* Sage includes
*
* The $sage_includes array determines the code library included in your theme.
* Add or remove files to the array as needed. Supports child theme overrides.
*
* Please note that missing files will produce a fatal error.
*
* @link https://github.com/roots/sage/pull/1042
*/
$sage_includes = [
    'lib/utils.php',                 // Utility functions
    'lib/init.php',                  // Initial theme setup and constants
    'lib/wrapper.php',               // Theme wrapper class
    'lib/config.php',                // Configuration
    'lib/assets.php',                // Scripts and stylesheets
    'lib/titles.php',                // Page titles
    'lib/extras.php',                // Custom functions
    'model/taxonomy',                // List of custom taxonomies
    'model/post-type',               // List of custom post types
    'conf/menu.php'
];

foreach ($sage_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    if (is_dir($filepath)){
        foreach (glob("$filepath/*.php") as $filename) {
            require_once($filename);
        }
    }else{
        require_once $filepath;
    }
}
unset($file, $filepath);

// add_action('wp_head', 'show_template');
// function show_template() {
// 	global $template;
// 	print_r($template);
// }
