<?php
/**
 * Plugin Name: Profile Builder Datepicker Custom Date Format for specific field
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: 
 * Version: 0.1
 * Author: Kai Mindermann
 * Author URI: http://kmindi.de
 * License: MIT
 */

add_filter('wppb_datepicker_format', 'wppbc_custom_datepicker_format', 10, 2);
function wppbc_custom_datepicker_format($date_format, $field) {
	if ($field['meta-name'] == 'birthday')
		return 'dd.mm.yy';
	else
		return $date_format;
}
