<?php
/**
 * Test with ServiceObjects GeoCoder WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-geocoder/SOGeoCoderAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','**************');
define('SO_WSDL','http://trial.serviceobjects.com/gcr/GeoCoder.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOGeoCoderWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOGeoCoderServiceGet($wsdl);
/**
 * Location
 */
$r = $g->GetGeoLocationWorldwide(new SOGeoCoderTypeGetGeoLocationWorldwide('New York','','US',SO_KEY));
print_r($g);
/**
 * Distance to water
 */
$g->GetDistanceToWater(new SOGeoCoderTypeGetDistanceToWater($r->getGetGeoLocationWorldwideResult()->getGeocodeCityWorldwideInfo()->getLatitude(),$r->getGetGeoLocationWorldwideResult()->getGeocodeCityWorldwideInfo()->getLongitude(),SO_KEY));
print_r($g);
?>