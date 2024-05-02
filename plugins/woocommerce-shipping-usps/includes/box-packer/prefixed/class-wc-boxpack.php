<?php

/**
 * WooCommerce Box Packer
 *
 * @version 1.0.3
 *
 * @package WC_Shipping_USPS
 */
namespace WC_USPS\WooCommerce\BoxPacker;

require_once 'vendor/autoload_packages.php';
/**
 * Boxpack class.
 * @internal
 */
class WC_Boxpack
{
    /**
     * Packer being used.
     *
     * @var Box
     */
    private $packer;
    /**
     * Box packer libraries.
     *
     * @var array
     */
    private array $libraries = array('original' => 'WC_USPS\\WooCommerce\\BoxPacker\\Original\\Packer', 'dvdoug' => 'WC_USPS\\WooCommerce\\BoxPacker\\DVDoug\\Packer');
    /**
     * Class constructor.
     *
     * @param string $dimension_unit Dimension unit.
     * @param string $weight_unit    Weight unit.
     * @param string $library        Library that will be used.
     * @param array  $options        Box packer options.
     */
    public function __construct(string $dimension_unit, string $weight_unit, string $library = 'original', array $options = array())
    {
        $library = \strtolower($library);
        /**
         * If the requested box packer library doesn't exist, use the original
         */
        if (!\array_key_exists($library, $this->libraries)) {
            $library = 'original';
        }
        /**
         * If the PHP version is older than 7.1, use the original
         */
        if (\version_compare(\phpversion(), '7.1', '<')) {
            $library = 'original';
        }
        $this->packer = new $this->libraries[$library]($dimension_unit, $weight_unit, $options);
    }
    /**
     * Get box packer object.
     */
    public function get_packer()
    {
        return $this->packer;
    }
}
