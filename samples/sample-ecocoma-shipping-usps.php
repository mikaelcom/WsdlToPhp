<?php
/**
 * Test with eCoComa Shipping Usps WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-shipping-usps/EccShippingUspsAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','SHP-T91132057J');
define('ECC_WSDL','http://service.ecocoma.com/shipping/usps.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccShippingUspsWsdlClass::WSDL_URL=>ECC_WSDL);
$s = new EccShippingUspsServiceGet($wsdl);
$s->GetUSPSRate(new EccShippingUspsTypeGetUSPSRate(ECC_KEY_ID,'',10025,'USA',33320,'FRA',1.2,120));
print_r($s);
?>