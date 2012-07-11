<?php
/**
 * Test with eCoComa Geo CityZip
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-geo-cityzip/EccGeoCityZipAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','GEO-T90995416J');
define('ECC_WSDL','http://service.ecocoma.com/geo/cityzip.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccGeoCityZipWsdlClass::WSDL_URL=>ECC_WSDL);
$g = new EccGeoCityZipServiceGet($wsdl);
$g->GetZipCode(new EccGeoCityZipTypeGetZipCode(ECC_KEY_ID,'','New York','NY'));
print_r($g);
?>