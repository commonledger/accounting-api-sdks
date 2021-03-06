<?php
/*
 * CarInformationAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 11/01/2014
 */
// This snippet is adopted from Stripe SDK.
if (!function_exists('curl_init')) {
  throw new Exception('CarInformationAPILib needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('CarInformationAPILib needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('CarInformationAPILib needs the Multibyte String PHP extension.');
}

// This dependency shall be resolved by composer
require_once('packages/apimatic/unirest-php/lib/Unirest.php');

// APIMATIC Helper Files
require_once(dirname(__FILE__) . '/CarInformationAPILib/APIHelper.php');
require_once(dirname(__FILE__) . '/CarInformationAPILib/APIException.php');
require_once(dirname(__FILE__) . '/CarInformationAPILib/Configuration.php');

// Controllers
require_once(dirname(__FILE__) . '/CarInformationAPILib/Controllers/Group1Controller.php');

// Models
require_once(dirname(__FILE__) . '/CarInformationAPILib/Models/CarInfoModel.php');
require_once(dirname(__FILE__) . '/CarInformationAPILib/Models/CarTypesEnum.php');
