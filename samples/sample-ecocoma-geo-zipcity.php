<?php
/**
 * Test with eCoComa Geo ZipCity
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-geo-zipcity/EccGeoZipCityAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','GEO-T90995416J');
define('ECC_WSDL','http://service.ecocoma.com/geo/zipcity.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccGeoZipCityWsdlClass::WSDL_URL=>ECC_WSDL);
$g = new EccGeoZipCityServiceGet($wsdl);
$g->GetCity(new EccGeoZipCityTypeGetCity(ECC_KEY_ID,'',10025));
print_r($g);
?>