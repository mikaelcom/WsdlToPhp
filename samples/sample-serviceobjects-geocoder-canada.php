<?php
/**
 * Test with ServiceObjects GeoCode0rCanada WSDL
 * @date 06/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-geocoder-canada/SOGeoCoderCanadaAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS37-BSJ4-YZW4');
define('SO_WSDL','http://trial.serviceobjects.com/gcc/GeoCoderCanada.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOGeoCoderCanadaWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOGeoCoderCanadaServiceGet($wsdl);
/**
 * Location
 */
$g->GetGeoLocationByMunicipalityProvince(new SOGeoCoderCanadaTypeGetGeoLocationByMunicipalityProvince('Ottawa','Ontario',SO_KEY));
print_r($g);
?>