<?php
/**
 * Test with PackageName for WSDL_PATH
 * @package PackageName
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/PackageNameAutoload.php';
/**
 * Wsdl instanciation infos
 * 
 * This is an associative array as:
 * - the key must be a PackageNameWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * Here is below an example of how you can set the array:
 * 
 * $wsdl = array();
 * $wsdl[PackageNameWsdlClass::WSDL_URL] = WSDL_PATH;
 * $wsdl[PackageNameWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[PackageNameWsdlClass::WSDL_TRACE] = true;
 * $wsdl[PackageNameWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[PackageNameWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $processor = new ProcessorServiceGet($wsdl);
 */
/**
 * Examples
 */
$content;