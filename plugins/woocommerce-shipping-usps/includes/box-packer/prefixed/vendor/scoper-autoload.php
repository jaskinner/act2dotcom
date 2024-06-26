<?php

// scoper-autoload.php @generated by PhpScoper

$loader = (static function () {
    // Backup the autoloaded Composer files
    $existingComposerAutoloadFiles = $GLOBALS['__composer_autoload_files'] ?? [];

    $loader = require_once __DIR__.'/autoload.php';
    // Ensure InstalledVersions is available
    $installedVersionsPath = __DIR__.'/composer/InstalledVersions.php';
    if (file_exists($installedVersionsPath)) require_once $installedVersionsPath;

    // Restore the backup and ensure the excluded files are properly marked as loaded
    $GLOBALS['__composer_autoload_files'] = \array_merge(
        $existingComposerAutoloadFiles,
        \array_fill_keys([], true)
    );

    return $loader;
})();

// Class aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#class-aliases
if (!function_exists('humbug_phpscoper_expose_class')) {
    function humbug_phpscoper_expose_class($exposed, $prefixed) {
        if (!class_exists($exposed, false) && !interface_exists($exposed, false) && !trait_exists($exposed, false)) {
            spl_autoload_call($prefixed);
        }
    }
}
humbug_phpscoper_expose_class('Container', 'WC_USPS\Container');
humbug_phpscoper_expose_class('Autoloader_Locator', 'WC_USPS\Autoloader_Locator');
humbug_phpscoper_expose_class('Latest_Autoloader_Guard', 'WC_USPS\Latest_Autoloader_Guard');
humbug_phpscoper_expose_class('PHP_Autoloader', 'WC_USPS\PHP_Autoloader');
humbug_phpscoper_expose_class('Autoloader_Handler', 'WC_USPS\Autoloader_Handler');
humbug_phpscoper_expose_class('Version_Selector', 'WC_USPS\Version_Selector');
humbug_phpscoper_expose_class('Path_Processor', 'WC_USPS\Path_Processor');
humbug_phpscoper_expose_class('Hook_Manager', 'WC_USPS\Hook_Manager');
humbug_phpscoper_expose_class('Manifest_Reader', 'WC_USPS\Manifest_Reader');
humbug_phpscoper_expose_class('Plugin_Locator', 'WC_USPS\Plugin_Locator');
humbug_phpscoper_expose_class('Plugins_Handler', 'WC_USPS\Plugins_Handler');
humbug_phpscoper_expose_class('Autoloader', 'WC_USPS\Autoloader');
humbug_phpscoper_expose_class('Shutdown_Handler', 'WC_USPS\Shutdown_Handler');
humbug_phpscoper_expose_class('Version_Loader', 'WC_USPS\Version_Loader');
humbug_phpscoper_expose_class('ComposerAutoloaderInit7c1c870a3b181d6d210094d5b549780f', 'WC_USPS\ComposerAutoloaderInit7c1c870a3b181d6d210094d5b549780f');
humbug_phpscoper_expose_class('PackerContext', 'WC_USPS\PackerContext');
humbug_phpscoper_expose_class('InfalliblePackerContext', 'WC_USPS\InfalliblePackerContext');

// Function aliases. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/further-reading.md#function-aliases
if (!function_exists('add_action')) { function add_action() { return \WC_USPS\add_action(...func_get_args()); } }
if (!function_exists('add_filter')) { function add_filter() { return \WC_USPS\add_filter(...func_get_args()); } }
if (!function_exists('did_action')) { function did_action() { return \WC_USPS\did_action(...func_get_args()); } }
if (!function_exists('get_option')) { function get_option() { return \WC_USPS\get_option(...func_get_args()); } }
if (!function_exists('get_site_option')) { function get_site_option() { return \WC_USPS\get_site_option(...func_get_args()); } }
if (!function_exists('get_transient')) { function get_transient() { return \WC_USPS\get_transient(...func_get_args()); } }
if (!function_exists('is_multisite')) { function is_multisite() { return \WC_USPS\is_multisite(...func_get_args()); } }
if (!function_exists('remove_filter')) { function remove_filter() { return \WC_USPS\remove_filter(...func_get_args()); } }
if (!function_exists('set_transient')) { function set_transient() { return \WC_USPS\set_transient(...func_get_args()); } }
if (!function_exists('trailingslashit')) { function trailingslashit() { return \WC_USPS\trailingslashit(...func_get_args()); } }
if (!function_exists('wp_normalize_path')) { function wp_normalize_path() { return \WC_USPS\wp_normalize_path(...func_get_args()); } }
if (!function_exists('wp_unslash')) { function wp_unslash() { return \WC_USPS\wp_unslash(...func_get_args()); } }

return $loader;
