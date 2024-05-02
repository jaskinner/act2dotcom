<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

/**
 * Rename product data tabs
 */

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

	$tabs['additional_information']['title'] = __( 'Shipping Info' );	
// Rename the additional information tab


	return $tabs;

}
?>