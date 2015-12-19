<?php

add_filter('piklist_admin_pages', 'theme_setting_pages');
function theme_setting_pages($pages)
{
	$pages[] = array(
		'page_title' => __('Soiree Salsa Settings')
		,'menu_title' => __('Settings', 'piklist')
		,'sub_menu' => 'themes.php' //Under Appearance menu
		,'capability' => 'manage_options'
		,'menu_slug' => 'look-feel-settings'
		,'setting' => 'look_and_feel'
		,'menu_icon' => 'dashicons-editor-kitchensink'
		,'page_icon' => 'dashicons-editor-kitchensink'
		,'single_line' => true
		,'default_tab' => 'Basic'
		,'save_text' => 'Save Settings'
	);

	return $pages;
}

// add_filter('piklist_admin_pages', 'look_and_feel_admin_pages');
// function look_and_feel_admin_pages($pages){
// 	$pages[] = array(
// 		'page_title' => __('General', 'sage'),
// 		'menu_title' => __('Look & Feel', 'piklist'),
// 		'capability' => 'manage_options',
// 		'menu_slug' => 'look-feel-settings',
// 		'setting' => 'look_and_feel',
// 		'menu_icon' => 'dashicons-editor-kitchensink',
// 		'page_icon' => 'dashicons-editor-kitchensink',
// 		'default_tab' => 'General',
// 		'single_line' => true,
// 		'position'	=> 55,
// 		'save_text' => __('Save settings', 'sage')
// 	);
// 	return $pages;
// }

// add_filter('piklist_admin_pages', 'look_and_feel2_admin_pages');
// function look_and_feel2_admin_pages($pages){
// 	$pages[] = array(
// 		'page_title' => __('Feel', 'sage'),
// 		'menu_title' => __('Feel 2', 'piklist'),
// 		'capability' => 'manage_options',
// 		'sub_menu' => 'look-feel-settings',
// 		'menu_slug' => 'look-feel2-settings',
// 		'setting' => 'look_and_feel2',
// 		'single_line' => true,
// 		'save_text' => __('Save settings', 'sage')
// 	);
// 	return $pages;
// }
