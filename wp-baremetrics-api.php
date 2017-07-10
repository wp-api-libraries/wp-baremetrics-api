<?php
/**
 * WP Baremetrics API
 *
 * @package wp-baremetrics-api
 */

/*
* Plugin Name: WP Baremetrics API
* Plugin URI: https://github.com/wp-api-libraries/wp-baremetrics-api
* Description: Perform API requests to Baremetrics in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-baremetrics-api
* GitHub Branch: master
* Text Domain: wp-baremetrics-api
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'BaremetricsAPI' ) ) {

	/**
	 * BaremetricsAPI Class.
	 */
	class BaremetricsAPI {

		/**
		 * API Key.
		 *
		 * @var string
		 */
		static private $api_key;
		
		/**
		 * Sandbox URI.
		 *
		 * (default value: 'https://api-sandbox.baremetrics.com')
		 *
		 * @var string
		 * @access private
		 * @static
		 */
		static private $sandbox_uri = 'https://api-sandbox.baremetrics.com';


		/**
		 * Base URI.
		 *
		 * (default value: 'https://api.baremetrics.com')
		 *
		 * @var string
		 * @access private
		 * @static
		 */
		static private $base_uri = 'https://api.baremetrics.com';

		/**
		 * __construct function.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct(  $api_key ) {

			static::$api_key = $api_key;

			$this->args['headers'] = array(
				'Content-Type' => 'application/json',
				'Authorization' => 'Bearer ' . $api_key
			);
		}

		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {

			$response = wp_remote_request( $request, $this->args );

			$code = wp_remote_retrieve_response_code($response );
			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'wp-baremetrics-api' ), $code ) );
			}
			$body = wp_remote_retrieve_body( $response );
			return json_decode( $body );
		}
		

		/* ACCOUNT. */
		
		public function get_account() {
			// https://api.baremetrics.com/v1/account
		}

		/* SOURCES. */
		
		public function list_sources() {
			// https://api.baremetrics.com/v1/sources
		}
		
		/* PLANS. */
		
		public function list_plans() {
			
		}
		
		public function show_plan() {
			
		}
		
		public function update_plan() {
			
		}
		
		public function create_plan() {
			
		}
		
		public function delete_plan() {
			
		}
		
		/* CUSTOMERS. */
		
		public function list_customers() {
			
		}
		
		public function show_customers() {
			
		}
		
		public function list_customer_events() {
			
		}
		
		public function update_customer() {
			
		}
		
		/* SUBSCRIPTIONS. */
		
		public function list_subscriptions() {
			
		}
		
		public function show_subscription() {
			
		}
		
		public function update_subscription() {
			
		}
		
		public function cancel_subscription() {
			
		}
		
		public function create_subscription() {
			
		}
		
		public function delete_subscription() {
			
		}
		
		/* ANNOTATIONS. */
		
		public function list_annotations() {
			
		}
		
		public function show_annotation() {
			
		}
		
		public function create_annotation() {
			
		}
		
		public function delete_annotation() {
			
		}
		
		/* GOALS. */
		
		public function list_goals() {
  
		}

		public function show_goal() {
  
		}

		public function create_goal() {
  
		}

		public function delete_goal() {

		}
			
		/* USERS. */
		
		public function list_users() {
			
		}
		
		public function show_user() {
			
		}
		
		/* CHARGES. */
		
		public function list_charges() {
  
		}

		public function show_charge() {
  
		}

		public function create_charge() {
  
		}
		
		/* EVENTS. */
		
		public function list_events() {
			
		}
		
		public function show_event() {
			
		}
		
		/* METRICS. */

		public function show_metrics_summary() {
			
		}
		
		public function show_metric() {
			
		}
		
		public function show_customers() {
			
		}
		
		public function show_plan_breakout() {
			
		}

	}
}
