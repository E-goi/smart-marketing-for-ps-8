<?php
/**
 * Smart Marketing upgrade to v3.2.0 (PrestaShop v9 compatibility)
 *
 * @author    E-goi
 * @copyright 2018 E-goi
 * @license   LICENSE.txt
 * @package SmartMarketingPs
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Upgrade module to version 3.2.0
 * Adds PrestaShop v9 compatibility
 *
 * @param SmartMarketingPs $module
 * @return bool
 */
function upgrade_module_3_2_0($module)
{
    // Clear cache for module
    if (method_exists($module, 'clearCache')) {
        $module->clearCache();
    }

    // Update module version in database
    Configuration::updateValue('smart_marketing_version', '3.2.0');

    // Register new hooks for PrestaShop v9
    $module->registerHook('displayBackOfficeHeader');
    $module->registerHook('actionFrontControllerSetMedia');

    // Log upgrade success
    PrestaShopLogger::addLog('[SmartMarketing] Successfully upgraded to v3.2.0 with PrestaShop v9 compatibility', 1);

    return true;
}