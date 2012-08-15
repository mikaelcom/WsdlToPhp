<?php
/**
 * Test with BIOID WSDL
 * @date 15/08/2012
 */
ini_set('memory_limit','512M');
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/bioid-web-service/BioIDWSAutoload.php';
/**
 * BIOID Informations
 */
define('BIOID_WSDL','https://playground.bioid.com/Content/BWS/www.bioid.com.2011.12.bws.wsdl');
$wsdl = array(
			BioIDWSWsdlClass::WSDL_URL=>BIOID_WSDL);
/**
 * Enroll
 */
$e = new BioIDWSServiceEnroll($wsdl);
$e->Enroll(new BioIDWSTypeEnroll());
print_r($e);
/**
 * Identify
 */
$b = new BioIDWSServiceIdentify($wsdl);
$b->Identify(new BioIDWSTypeIdentify());
print_r($b);
?>