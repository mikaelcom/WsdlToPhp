<?php
/**
 * Test with eCoComa Shipping Dhl WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-shipping-dhl/EccShippingDhlAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','SHP-T91132057J');
define('ECC_WSDL','http://service.ecocoma.com/shipping/dhl.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccShippingDhlWsdlClass::WSDL_URL=>ECC_WSDL);
$s = new EccShippingDhlServiceGet($wsdl);
$s->GetDHLRate(new EccShippingDhlTypeGetDHLRate(ECC_KEY_ID,'',10020,'US',33320,'FR',1.2,120));
print_r($s);
?>