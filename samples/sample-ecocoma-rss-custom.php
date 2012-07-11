<?php
/**
 * Test with eCoComa Rss WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-rss-custom/EccRssCustomAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','RSS-T91133500J');
define('ECC_WSDL','http://service.ecocoma.com/rss/custom.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccRssCustomWsdlClass::WSDL_URL=>ECC_WSDL);
$r = new EccRssCustomServiceGet($wsdl);
$r->GetExtendedRSS(new EccRssCustomTypeGetExtendedRSS(ECC_KEY_ID,''));
print_r($r);
?>