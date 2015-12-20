<?php

// add_action( 'admin_menu', 'register_my_custom_menu_page' );
//
// function register_my_custom_menu_page(){
// 	add_menu_page( 'custom menu title', 'custom menu', 'manage_options', 'custompage', 'my_custom_menu_page', plugins_url( 'myplugin/images/icon.png' ), 55 );
// }
//
// function my_custom_menu_page(){
// 	echo "Admin Page Test";
// }
//
//
// add_filter('piklist_admin_pages', 'piklist_demo_admin_pages');
// function piklist_demo_admin_pages($pages)
//   {
//     $pages[] = array(
//       'page_title' => __('Piklist Settingskjhkjh', 'piklist')
//       ,'menu_title' => __('blu', 'piklist')
//       ,'capability' => 'read' // allow users with the capability of read to VIEW this page.
//       ,'sub_menu' => 'edit.php?post_type=piklist_demo'
//       ,'menu_slug' => 'my-settings'
//       ,'setting' => 'custom_settings'
//       ,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
//       ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
//       ,'default_tab' => 'General'
//       ,'single_line' => true
//       ,'save_text' => 'Save these settings'
//     );
//
//     return $pages;
//   }
