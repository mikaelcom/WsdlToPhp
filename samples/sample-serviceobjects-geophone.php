<?php
/**
 * Test with ServiceObjects GeoPhone WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-geophone/SOGeoPhoneAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS8-AMW1-ZHN1');
define('SO_WSDL','http://trial.serviceobjects.com/gp/GeoPhone.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOGeoPhoneWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOGeoPhoneServiceGet($wsdl);
/**
 * Contact Info
 */
$g->GetContactInfo(new SOGeoPhoneTypeGetContactInfo('805-963-1700',SO_KEY));
print_r($g);
/**
 * Exchange Info
 */
$g->GetExchangeInfo(new SOGeoPhoneTypeGetExchangeInfo('805-963-1700',SO_KEY));
print_r($g);
/**
 * Phone Info
 */
$g->GetPhoneInfo(new SOGeoPhoneTypeGetPhoneInfo('805-963-1700',SO_KEY));
print_r($g);
/**
 * Phone Info Last First
 */
$g->GetPhoneInfoLastFirst(new SOGeoPhoneTypeGetPhoneInfoLastFirst('805-963-1700',SO_KEY));
print_r($g);
?>