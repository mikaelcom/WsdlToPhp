<?php
/**
 * Test with eCoComa Geo Distance
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-geo-distance/EccGeoDistAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','GEO-T90995416J');
define('ECC_WSDL','http://service.ecocoma.com/geo/distance.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccGeoDistWsdlClass::WSDL_URL=>ECC_WSDL);
$g = new EccGeoDistServiceGet($wsdl);
$g->GetDistance(new EccGeoDistTypeGetDistance(ECC_KEY_ID,'',10010,10025));
print_r($g);
$g->GetExtendDistance(new EccGeoDistTypeGetExtendDistance(ECC_KEY_ID,'','1 East 23rd Street, New York, NY 10010','1047 Amsterdam Avenue, New York, NY 10025'));
print_r($g);
?>