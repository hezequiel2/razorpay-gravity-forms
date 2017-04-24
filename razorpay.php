<?php

/*
Plugin Name: Gravity Forms Razorpay
Plugin URI: http://www.gravityforms.com
Description: Integrates Gravity Forms with Razorpay Payments, enabling end users to purchase goods and services through Gravity Forms.
Version: 1.0
Author: ria
Text Domain: razorpay-gravity-forms
Domain Path: /languages
*/

define( 'GF_RAZORPAY_VERSION', '1.0' );

add_action( 'gform_loaded', array( 'GF_Razorpay_Bootstrap', 'load' ), 5 );

class GF_Razorpay_Bootstrap {

	public static function load() {

		if ( ! method_exists( 'GFForms', 'include_payment_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-razorpay.php' );

		GFAddOn::register( 'GFRazorpay' );
	}
}

function gf_razorpay() {
	return GFRazorpay::get_instance();
}
