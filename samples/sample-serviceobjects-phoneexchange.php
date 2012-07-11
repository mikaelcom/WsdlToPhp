<?php
/**
 * Test with ServiceObjects PhoneExchange WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-phoneexchange/SOPhoneExchangeAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS39-JID3-EKW1');
define('SO_WSDL','http://trial.serviceobjects.com/pe/phoneexchange.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOPhoneExchangeWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOPhoneExchangeServiceGet($wsdl);
/**
 * Exchange Info
 */
$g->GetExchangeInfo(new SOPhoneExchangeTypeGetExchangeInfo('805-963-1700',SO_KEY));
print_r($g);
/**
 * SMS Info
 */
$g->GetSMSInfo(new SOPhoneExchangeTypeGetSMSInfo('805-963-1700',SO_KEY));
print_r($g);
?>