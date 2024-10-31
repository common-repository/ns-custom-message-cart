<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php // PUT YOUR settings_fields name and your input // ?>
<?php settings_fields('ns_message_cart_options_group'); ?>
<div class="genRowNssdc">
<table>
	<tr valign="top">
	    <th scope="row" colspan="2">
		    <br>
		    <label><?php _e('General Settings', $ns_text_domain); ?></label>
		    <hr>
	    </th>
	</tr>

	<tr valign="top">
	    <th scope="row">
	   		 <label><?php _e('Message', $ns_text_domain); ?></label>
	    </th>
	    <td>
			<input type="text" id="ns_message_cart_text" placeholder="Alternative name " name="ns_message_cart_text" value ="<?php echo get_option('ns_message_cart_text', ''); ?>">
			<span class="description"><?php _e('Insert the text to apply on message in cart page', $ns_text_domain); ?></span>
		</td>
	</tr>
	<tr valign="top">
	    <th scope="row">
	   		 <label>Color</label>
	    </th>
	    <td>
		<select name="ns_message_select_class">
		    <option value="info" <?php selected( get_option('ns_message_select_class'), "info" ); ?>><?php _e('Info - Blue', $ns_text_domain); ?></option>
		    <option value="message" <?php selected( get_option('ns_message_select_class'), "message" ); ?>><?php _e('Success - Green', $ns_text_domain); ?></option>
		    <option value="warning" <?php selected( get_option('ns_message_select_class'), "warning" ); ?>><?php _e('Warning - Yellow', $ns_text_domain); ?></option>
		    <option value="error" <?php selected( get_option('ns_message_select_class'), "error" ); ?>><?php _e('Error - Red', $ns_text_domain); ?></option>
		</select>
		<span class="description"> <?php _e('Select the color of background', $ns_text_domain); ?></span>
		</td>
	</tr>
	<tr valign="top">
	    <th scope="row">
	   		 <label><?php _e('Position', $ns_text_domain); ?></label>
	    </th>
	    <td>
		<select name="ns_message_position_message">
		    <option value="top" <?php selected( get_option('ns_message_position_message'), "top" ); ?>>top</option>
		    <option value="middle" <?php selected( get_option('ns_message_position_message'), "middle" ); ?>>middle</option>
		    <option value="bottom" <?php selected( get_option('ns_message_position_message'), "bottom" ); ?>>bottom</option>
		</select>
		<span class="description"> <?php _e('Select the position of message', $ns_text_domain); ?></span>
		</td>
	</tr>
</table>
</div>


