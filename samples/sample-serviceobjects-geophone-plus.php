<?php
/**
 * Test with ServiceObjects GeoPhonePlus WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-geophone-plus/SOGeoPhonePlusAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS50-KTG4-OED3');
define('SO_WSDL','http://trial.serviceobjects.com/gppl/GeoPhonePlus.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOGeoPhonePlusWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOGeoPhonePlusServiceGet($wsdl);
/**
 * Phone Info FULL
 */
$g->GetPhoneInfo(new SOGeoPhonePlusTypeGetPhoneInfo('805-963-1700','FULL',SO_KEY));
print_r($g);
/**
 * Phone Info STANDARD
 */
$g->GetPhoneInfo(new SOGeoPhonePlusTypeGetPhoneInfo('805-963-1700','STANDARD',SO_KEY));
print_r($g);
?>