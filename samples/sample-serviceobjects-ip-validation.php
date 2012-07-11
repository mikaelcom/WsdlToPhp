<?php
/**
 * Test with ServiceObjects IpValidation WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-ip-validation/SOIpValidationAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS1-YOL1-ATK4');
define('SO_WSDL','http://trial.serviceobjects.com/gpp/GeoPinPoint.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOIpValidationWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOIpValidationServiceGet($wsdl);
/**
 * Country by IP
 */
$g->GetCountryByIP(new SOIpValidationTypeGetCountryByIP('173.194.34.54',SO_KEY));
print_r($g);
/**
 * Location by IP
 */
$g->GetLocationByIP(new SOIpValidationTypeGetLocationByIP('207.71.246.84',SO_KEY));
print_r($g);
?>