<?php
/**
 * Utility class file.
 *
 * @package WC_Shipping_USPS
 */

namespace WooCommerce\USPS;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

trait Util {

	/**
	 * Helper method to check whether given zone_id has usps method instance.
	 *
	 * @param int $zone_id Zone ID.
	 *
	 * @return bool True if given zone_id has usps method instance.
	 *
	 * @since 4.4.0
	 */
	public function is_zone_has_usps( int $zone_id ): bool {
		global $wpdb;

		// phpcs:ignore --- Need to use WPDB::get_var() to check the existing USPS in the shipping zone
		return (int) $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(instance_id) FROM {$wpdb->prefix}woocommerce_shipping_zone_methods WHERE method_id = 'usps' AND zone_id = %d", $zone_id ) ) > 0;
	}

	/**
	 * Helper method to get the number of usps method instances.
	 *
	 * @return int The number of usps method instances
	 */
	public function instance_count(): int {
		global $wpdb;

		// phpcs:ignore --- Need to use WPDB::get_var() to count the existing USPS in the shipping zone
		return absint( $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->prefix}woocommerce_shipping_zone_methods WHERE method_id = 'usps'" ) );
	}

	/**
	 * Helper method to check if there are existing usps method instances.
	 *
	 * @return bool
	 */
	public function instances_exist(): bool {
		return $this->instance_count() > 0;
	}
}
