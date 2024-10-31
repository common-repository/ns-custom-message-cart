<?php
/*
Plugin Name: NS Custom Cart Message for WooCoomerce
Plugin URI: https://www.nsthemes.com/
Description: This plugin allow to add custom message to cart page
Version: 1.2.4
Author: NsThemes
Author URI: http://www.nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** 
 * @author        PluginEye
 * @copyright     Copyright (c) 2019, PluginEye.
 * @version         1.0.0
 * @license       https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
 * PLUGINEYE SDK
*/

require_once('plugineye/plugineye-class.php');
$plugineye = array(
    'main_directory_name'       => 'ns-custom-message-cart',
    'main_file_name'            => 'ns-custom-message-cart.php',
    'redirect_after_confirm'    => 'admin.php?page=ns-custom-message-cart%2Fns-admin-options%2Fns_admin_option_dashboard.php',
    'plugin_id'                 => '249',
    'plugin_token'              => 'NWNmZmMzYWE5ODljMjEzYjNmMzljYjc0Njg2YTE3NmViMGYzNjRmZmU0ZTVlMzhjOWJmYTViYjlhOGJkMTYyNDEzNWNlMzA2ZWYzZDA=',
    'plugin_dir_url'            => plugin_dir_url(__FILE__),
    'plugin_dir_path'           => plugin_dir_path(__FILE__)
);

$plugineyeobj249 = new pluginEye($plugineye);
$plugineyeobj249->pluginEyeStart();      


/* *** plugin options *** */
require_once( plugin_dir_path( __FILE__ ).'ns-custom-message-cart-option.php');

require_once( plugin_dir_path( __FILE__ ).'ns-admin-options/ns-admin-options-setup.php');

if(get_option("ns_message_position_message",'') == "top")
add_action( 'woocommerce_before_cart_table', 'ns_add_message_cart', 9 );
else if(get_option("ns_message_position_message",'') == "middle")
add_action( 'woocommerce_after_cart_table', 'ns_add_message_cart', 9 );
else add_action( 'woocommerce_after_cart', 'ns_add_message_cart', 9 );

function ns_add_message_cart() { ?>
<div class="ns-woocommerce-<?php echo get_option('ns_message_select_class','');?>">
  <span><?php echo get_option('ns_message_cart_text', ''); ?></span>
</div>
<?php
}



/* *** add link premium *** */
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'nscustommessagecart_add_action_links' );

function nscustommessagecart_add_action_links ( $links ) {	
 $mylinks = array('<a id="nscmclinkpremium" href="https://www.nsthemes.com/join-the-club/?ref-ns=2&campaign=CMC-linkpremium" target="_blank">'.__( 'Join NS Club', 'ns-facebook-pixel-for-wp' ).'</a>');
return array_merge( $links, $mylinks );
}