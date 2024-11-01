<?php
/**
Plugin Name: WC Unlink Downloadable Product Title
Plugin URI: http://northwestmediacollective.com
Description: Removes the title link from the email that is sent for a downloadable product. 
 This helps eliminate confusion from customer orders
Version: 1.4
Author: NWMC, Inc
Author URI: https://northwestmediacollective.com
License: GPLv3
*/

add_filter( 'woocommerce_order_item_permalink', '__return_false' );
add_filter( 'woocommerce_cart_item_permalink', '__return_null' );