<?php
/**
 * Test with eCoComa Geo IPCtry
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-geo-ipcountry/EccGeoIPCtryAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','GEO-T90995416J');
define('ECC_WSDL','http://service.ecocoma.com/geo/ipcountry.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccGeoIPCtryWsdlClass::WSDL_URL=>ECC_WSDL);
$g = new EccGeoIPCtryServiceGet($wsdl);
$g->GetCountry(new EccGeoIPCtryTypeGetCountry(ECC_KEY_ID,'','216.117.130.117'));
print_r($g);
?>