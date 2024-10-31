<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* *** add menu page and add sub menu page *** */
add_action( 'admin_menu', function()  {
    add_menu_page( 'NS Custom Cart Message for WooCoomerce', 'NS Custom Cart Message', 'manage_options', plugin_dir_path( __FILE__ ).'/ns_admin_option_dashboard.php', '', plugin_dir_url( __FILE__ ).'img/backend-sidebar-icon.png', 60);
	add_submenu_page(plugin_dir_path( __FILE__ ).'/ns_admin_option_dashboard.php', 'How to install premium version', 'How to install premium version', 'manage_options', 'how-to-install-premium-version', function(){  wp_redirect('http://www.nsthemes.com/how-to-install-the-premium-version/'); exit; });
});

/* *** add style *** */
add_action( 'admin_enqueue_scripts', function() {
	wp_enqueue_style('ns-option-css-page', plugin_dir_url( __FILE__ ) . 'css/ns-option-css-page.css');
	wp_enqueue_style('ns-option-css-custom-page', plugin_dir_url( __FILE__ ) . 'css/ns-option-css-custom-page.css');
	wp_enqueue_script( 'ns-option-js-page-messagecart', plugins_url( '/js/ns-option-js-page.js' , __FILE__ ), array( 'jquery' ) );
});

/* *** add style *** */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style('ns-option-css-class', plugin_dir_url( __FILE__ ) . 'css/ns-option-css-class.css');
});
?>