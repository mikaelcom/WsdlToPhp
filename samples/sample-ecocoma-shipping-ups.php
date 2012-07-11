<?php
/**
 * Test with eCoComa Shipping Ups WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-shipping-ups/EccShippingUpsAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','SHP-T91132057J');
define('ECC_WSDL','http://service.ecocoma.com/shipping/ups.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccShippingUpsWsdlClass::WSDL_URL=>ECC_WSDL);
$s = new EccShippingUpsServiceGet($wsdl);
$s->GetUPSRate(new EccShippingUpsTypeGetUPSRate(ECC_KEY_ID,'','SW7','UK',33320,'FRA',1.2,120));
print_r($s);
?>