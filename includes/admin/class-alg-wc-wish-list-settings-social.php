<?php
/**
 * Wish List for WooCommerce - Social Section Settings
 *
 * @version 1.0.0
 * @since   1.0.0
 * @author  Algoritmika Ltd.
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'Alg_WC_Wish_List_Settings_Social' ) ) :

class Alg_WC_Wish_List_Settings_Social extends Alg_WC_Wish_List_Settings_Section {

	/**
	 * Constructor.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function __construct() {
		$this->id   = 'social';
		$this->desc = __( 'Social Networks', 'wish-list-for-woocommerce' );
		parent::__construct();
	}

	/**
	 * get_settings.
	 *
	 * @version 1.0.0
	 * @since   1.0.0
	 */
	function get_settings() {
		$settings = array(
			array(
				'title'     => __( 'Social Networks Options', 'wish-list-for-woocommerce' ),
				'type'      => 'title',
				'id'        => 'alg_wc_wish_list_social_options',
			),
			array(
				'type'      => 'sectionend',
				'id'        => 'alg_wc_wish_list_social_options',
			),
		);
		$this->settings = $settings;
		return $settings;
	}

}

endif;