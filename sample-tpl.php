<?php
/**
 * Test with PackageName
 * @date generation_date
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/PackageNameAutoload.php';
/**
 * PackageName Informations
 */
define('PACKAGENAME_WSDL_URL','WSDL_PATH');
define('PACKAGENAME_USER_LOGIN','');
define('PACKAGENAME_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[PackageNameWsdlClass::WSDL_URL] = PACKAGENAME_WSDL_URL;
$wsdl[PackageNameWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[PackageNameWsdlClass::WSDL_TRACE] = true;
if(PACKAGENAME_USER_LOGIN !== '')
	$wsdl[PackageNameWsdlClass::WSDL_LOGIN] = PACKAGENAME_USER_LOGIN;
if(PACKAGENAME_USER_PASSWORD !== '')
	$wsdl[PackageNameWsdlClass::WSDL_PASSWD] = PACKAGENAME_USER_PASSWORD;
// etc....
/**
 * Examples
 */
$content;
?>