<?php
/**
 * Smart Marketing
 *
 *  @author    E-goi
 *  @copyright 2026 E-goi
 *  @license   LICENSE.txt
 *  @package upgrade
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Upgrade module to 3.1.9
 *
 * @param SmartMarketingPs $module
 * @return bool
 */
function upgrade_module_3_1_9($module)
{
    DebugLogger::log("[EGOI-PS8]::" . __FUNCTION__ . "::LOG: START UPGRADE TO 3.1.9");

    // No database changes required for this version, 
    // but the script is necessary for PrestaShop to register the version bump.
    
    DebugLogger::log("[EGOI-PS8]::" . __FUNCTION__ . "::UPGRADE TO 3.1.9 SUCCESSFUL");

    return true;
}
