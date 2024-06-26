<?php
/**
 * Admin handler class.
 *
 * @package WC_Shipping_USPS
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin handler.
 */
class WC_Shipping_USPS_Admin {

	const META_KEY_ENVELOPE       = '_shipping-usps-envelope';
	const META_KEY_DECLARED_VALUE = '_shipping-usps-declared-value';

	/**
	 * Class constructor.
	 */
	public function __construct() {
		add_action( 'woocommerce_product_options_dimensions', array( $this, 'product_options' ) );
		add_action( 'woocommerce_process_product_meta', array( $this, 'process_product_meta' ) );
		add_action( 'woocommerce_variation_options_dimensions', array( $this, 'variation_options' ), 10, 3 );
		add_action( 'woocommerce_save_product_variation', array( $this, 'process_product_variation_meta' ), 10, 2 );
	}

	/**
	 * Add option in the product edit page.
	 */
	public function product_options() {
		woocommerce_wp_checkbox(
			array(
				'id'          => self::META_KEY_ENVELOPE,
				'label'       => __( 'Envelope', 'woocommerce-shipping-usps' ),
				'description' => __( 'Use Envelope rates to ship package', 'woocommerce-shipping-usps' ),
				'desc_tip'    => true,
			)
		);

		woocommerce_wp_text_input(
			array(
				'id'          => self::META_KEY_DECLARED_VALUE,
				'data_price'  => 'price',
				'label'       => __( 'Declared Value', 'woocommerce-shipping-usps' ) . ' (' . get_woocommerce_currency_symbol() . ')',
				'placeholder' => __( "Use Product's Price", 'woocommerce-shipping-usps' ),
				'description' => __( 'Items value sent with rate request for international shipping.', 'woocommerce-shipping-usps' ),
				'desc_tip'    => true,

			)
		);
	}

	/**
	 * Add options in product variations.
	 *
	 * @param int     $loop           Loop index.
	 * @param array   $variation_data Variation data.
	 * @param WP_Post $variation      Product variation object.
	 */
	public function variation_options( $loop, array $variation_data, WP_Post $variation ) {
		woocommerce_wp_text_input(
			array(
				'id'            => 'variable_' . self::META_KEY_DECLARED_VALUE . $loop,
				'name'          => 'variable_' . self::META_KEY_DECLARED_VALUE . '[' . $loop . ']',
				'data_price'    => 'price',
				'label'         => __( 'Declared Value', 'woocommerce-shipping-usps' ) . ' (' . get_woocommerce_currency_symbol() . ')',
				'placeholder'   => __( "Use Product's Price", 'woocommerce-shipping-usps' ),
				'description'   => __( 'Items value sent with rate request for international shipping.', 'woocommerce-shipping-usps' ),
				'desc_tip'      => true,
				'wrapper_class' => 'form-row form-row-first hide_if_variation_virtual',
				'value'         => get_post_meta( $variation->ID, self::META_KEY_DECLARED_VALUE, true ),
			)
		);

		woocommerce_wp_checkbox(
			array(
				'id'            => 'variable_' . self::META_KEY_ENVELOPE . $loop,
				'name'          => 'variable_' . self::META_KEY_ENVELOPE . '[' . $loop . ']',
				'label'         => __( 'Envelope', 'woocommerce-shipping-usps' ),
				'description'   => __( 'Use Envelope rates to ship package', 'woocommerce-shipping-usps' ),
				'desc_tip'      => true,
				'wrapper_class' => 'form-row form-row-last hide_if_variation_virtual',
				'value'         => get_post_meta( $variation->ID, self::META_KEY_ENVELOPE, true ),
			)
		);
	}

	/**
	 * Save custom fields
	 *
	 * @param int $post_id Product ID.
	 */
	public function process_product_meta( $post_id ) {
		// phpcs:disable WordPress.Security.NonceVerification.Missing --- security handled by WooCommerce
		if ( ! empty( $_POST[ self::META_KEY_ENVELOPE ] ) ) {
			update_post_meta( $post_id, self::META_KEY_ENVELOPE, 'yes' );
		} else {
			delete_post_meta( $post_id, self::META_KEY_ENVELOPE );
		}

		if ( isset( $_POST[ self::META_KEY_DECLARED_VALUE ] ) ) {
			// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
			$declared_value = wc_format_decimal( wp_unslash( $_POST[ self::META_KEY_DECLARED_VALUE ] ) );
			if ( '' !== $declared_value ) {
				update_post_meta( $post_id, self::META_KEY_DECLARED_VALUE, $declared_value );
			} else {
				delete_post_meta( $post_id, self::META_KEY_DECLARED_VALUE );
			}
		} else {
			delete_post_meta( $post_id, self::META_KEY_DECLARED_VALUE );
		}
		// phpcs:enable WordPress.Security.NonceVerification.Missing
	}

	/**
	 * Save custom fields
	 *
	 * @param int $post_id Product ID.
	 * @param int $loop    Loop index.
	 */
	public function process_product_variation_meta( $post_id, $loop ) {
		// phpcs:disable WordPress.Security.NonceVerification.Missing --- security handled by WooCommerce
		if ( ! empty( $_POST[ 'variable_' . self::META_KEY_ENVELOPE ][ $loop ] ) ) {
			update_post_meta( $post_id, self::META_KEY_ENVELOPE, 'yes' );
		} else {
			delete_post_meta( $post_id, self::META_KEY_ENVELOPE );
		}

		if ( isset( $_POST[ 'variable_' . self::META_KEY_DECLARED_VALUE ][ $loop ] ) ) {
			$declared_value = wc_format_decimal( wp_unslash( $_POST[ 'variable_' . self::META_KEY_DECLARED_VALUE ][ $loop ] ) );
			// phpcs:enable WordPress.Security.NonceVerification.Missing --- security handled by WooCommerce
			if ( '' !== $declared_value ) {
				update_post_meta( $post_id, self::META_KEY_DECLARED_VALUE, $declared_value );
			} else {
				delete_post_meta( $post_id, self::META_KEY_DECLARED_VALUE );
			}
		} else {
			delete_post_meta( $post_id, self::META_KEY_DECLARED_VALUE );
		}
	}
}
