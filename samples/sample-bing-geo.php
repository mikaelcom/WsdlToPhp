<?php
/**
 * Test with Bing Geocode WSDL
 * @date 01/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/bing-geo/BingGeoAutoload.php';
/**
 * Bing Geo Informations
 */
define('BING_KEY','AoU**********************************************************FpJ');
define('BING_WSDL','http://dev.virtualearth.net/webservices/v1/metadata/geocodeservice/geocodeservice.wsdl');
/**
 * init
 */
$g = new BingGeoServiceReverse(array(
									BingGeoWsdlClass::WSDL_URL=>BING_WSDL));
$request = new BingGeoTypeReverseGeocodeRequest(new BingGeoTypeLocation(null,48.860198,2.351704));
$request->setCredentials(new BingGeoTypeCredentials(BING_KEY));
$r = $g->ReverseGeocode(new BingGeoTypeReverseGeocode($request));
print_r($g);
?>