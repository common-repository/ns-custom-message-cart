<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ns_view_activate_set_options()
{
    add_option('ns_message_cart_text', '');
    add_option('ns_message_select_class', '');
    add_option('ns_message_position_message', '');
}

register_activation_hook( __FILE__, 'ns_view_activate_set_options');



function ns_view_register_options_group()
{
    register_setting('ns_message_cart_options_group', 'ns_message_cart_text');
    register_setting('ns_message_cart_options_group', 'ns_message_select_class');
    register_setting('ns_message_cart_options_group', 'ns_message_position_message');      
}
 
add_action ('admin_init', 'ns_view_register_options_group');

?>