<?php
/**
 * Service table file.
 *
 * @package WC_Shipping_USPS
 */

?>
<tr valign="top" id="service_options">
	<th scope="row" class="titledesc"><?php esc_html_e( 'Services', 'woocommerce-shipping-usps' ); ?></th>
	<td class="forminp">
		<table class="usps_services widefat">
			<thead>
				<th class="sort">&nbsp;</th>
				<th><?php esc_html_e( 'Name', 'woocommerce-shipping-usps' ); ?></th>
				<th><?php esc_html_e( 'Service(s)', 'woocommerce-shipping-usps' ); ?></th>
				<th>
					<?php
					// translators: %s is a currency symbol.
					echo esc_html( sprintf( __( 'Price Adjustment (%s)', 'woocommerce-shipping-usps' ), get_woocommerce_currency_symbol() ) );
					?>
				</th>
				<th><?php esc_html_e( 'Price Adjustment (%)', 'woocommerce-shipping-usps' ); ?></th>
			</thead>
			<tbody>
				<?php
					ksort( $ordered_services );

				foreach ( $ordered_services as $value ) {
					$code   = $value[0];
					$values = $value[1];
					if ( ! isset( $this->custom_services[ $code ] ) ) {
						$this->custom_services[ $code ] = array();
					}
					?>
						<tr data-service_code="<?php echo esc_attr( $code ); ?>">
							<td class="sort">
								<input type="hidden" class="order" name="usps_service[<?php echo esc_attr( $code ); ?>][order]" value="<?php echo isset( $this->custom_services[ $code ]['order'] ) ? esc_attr( $this->custom_services[ $code ]['order'] ) : ''; ?>" />
							</td>
							<td>
								<input type="text" name="<?php echo esc_attr( "usps_service[$code][name]" ); ?>" placeholder="<?php echo esc_attr( $values['name'] . " ({$this->title})" ); ?>" value="<?php echo isset( $this->custom_services[ $code ]['name'] ) ? esc_attr( $this->custom_services[ $code ]['name'] ) : ''; ?>" size="35" />
							</td>
							<td>
								<ul class="sub_services">
									<?php
									foreach ( $values['services'] as $key => $name ) :
										if ( 0 === $key ) {
											foreach ( $name as $subsub_service_key => $subsub_service ) {
												?>
												<li>
													<label>
														<input type="checkbox" name="usps_service[<?php echo esc_attr( $code ); ?>][<?php echo esc_attr( $key ); ?>][<?php echo esc_attr( $subsub_service_key ); ?>][enabled]" <?php checked( ( ! isset( $this->custom_services[ $code ][ $key ][ $subsub_service_key ]['enabled'] ) || ! empty( $this->custom_services[ $code ][ $key ][ $subsub_service_key ]['enabled'] ) ), true ); ?> />
														<?php echo esc_html( $subsub_service ); ?>
													</label>
												</li>
												<?php
											}
										} else {
											$classes = ! empty( $values['commercial'] ) && in_array( $key, array_map( 'intval', $values['commercial'] ), true ) ? 'commercial' : '';
											?>
											<li class="<?php echo esc_attr( $classes ); ?>">
												<label>
													<input type="checkbox" name="usps_service[<?php echo esc_attr( $code ); ?>][<?php echo esc_attr( $key ); ?>][enabled]" <?php checked( ( ! isset( $this->custom_services[ $code ][ $key ]['enabled'] ) || ! empty( $this->custom_services[ $code ][ $key ]['enabled'] ) ), true ); ?> />
													<?php echo esc_html( $name ); ?>
												</label>
											</li>
											<?php
										}
									endforeach;
									?>
								</ul>
							</td>
							<td>
								<ul class="sub_services">
									<?php
									foreach ( $values['services'] as $key => $name ) :
										if ( 0 === $key ) {
											foreach ( $name as $subsub_service_key => $subsub_service ) {
												?>
												<li>
													<?php echo esc_html( get_woocommerce_currency_symbol() ); ?><input type="text" name="<?php echo esc_attr( "usps_service[$code][$key][$subsub_service_key][adjustment]" ); ?>" placeholder="N/A" value="<?php echo isset( $this->custom_services[ $code ][ $key ][ $subsub_service_key ]['adjustment'] ) ? esc_attr( $this->custom_services[ $code ][ $key ][ $subsub_service_key ]['adjustment'] ) : ''; ?>" size="4" />
												</li>
												<?php
											}
										} else {
											$classes = ! empty( $values['commercial'] ) && in_array( $key, array_map( 'intval', $values['commercial'] ), true ) ? 'commercial' : '';
											?>
											<li class="<?php echo esc_attr( $classes ); ?>">
												<?php echo esc_html( get_woocommerce_currency_symbol() ); ?><input type="text" name="<?php echo esc_attr( "usps_service[$code][$key][adjustment]" ); ?>" placeholder="N/A" value="<?php echo isset( $this->custom_services[ $code ][ $key ]['adjustment'] ) ? esc_attr( $this->custom_services[ $code ][ $key ]['adjustment'] ) : ''; ?>" size="4" />
											</li>
											<?php
										}
									endforeach;
									?>
								</ul>
							</td>
							<td>
								<ul class="sub_services">
									<?php
									foreach ( $values['services'] as $key => $name ) :
										if ( 0 === $key ) {
											foreach ( $name as $subsub_service_key => $subsub_service ) {
												?>
												<li>
													<input type="text" name="usps_service[<?php echo esc_attr( $code ); ?>][<?php echo esc_attr( $key ); ?>][<?php echo esc_attr( $subsub_service_key ); ?>][adjustment_percent]" placeholder="N/A" value="<?php echo isset( $this->custom_services[ $code ][ $key ][ $subsub_service_key ]['adjustment_percent'] ) ? esc_attr( $this->custom_services[ $code ][ $key ][ $subsub_service_key ]['adjustment_percent'] ) : ''; ?>" size="4" />%
												</li>
												<?php
											}
										} else {
											$classes = ! empty( $values['commercial'] ) && in_array( $key, array_map( 'intval', $values['commercial'] ), true ) ? 'commercial' : '';
											?>
											<li class="<?php echo esc_attr( $classes ); ?>">
												<input type="text" name="usps_service[<?php echo esc_attr( $code ); ?>][<?php echo esc_attr( $key ); ?>][adjustment_percent]" placeholder="N/A" value="<?php echo isset( $this->custom_services[ $code ][ $key ]['adjustment_percent'] ) ? esc_attr( $this->custom_services[ $code ][ $key ]['adjustment_percent'] ) : ''; ?>" size="4" />%
											</li>
											<?php
										}
									endforeach;
									?>
								</ul>
							</td>
						</tr>
						<?php
				}
				?>
			</tbody>
		</table>
	</td>
</tr>
