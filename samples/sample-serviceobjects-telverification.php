<?php
/**
 * Test with ServiceObjects TelephoneVerification WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-telephoneverification/SOTelVerificationAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS58-FUJ2-YMG3');
define('SO_WSDL','http://trial.serviceobjects.com/tv/TelephoneVerification.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOTelVerificationWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOTelVerificationServiceGet($wsdl);
/**
 * Exchange Info
 */
$g->GetExchangeInfo(new SOTelVerificationTypeGetExchangeInfo('805-963-1700',SO_KEY));
print_r($g);
/**
 * Phone info
 */
$r = $g->GetPhoneInfo(new SOTelVerificationTypeGetPhoneInfo('805-963-1700',SO_KEY));
print_r($g);
/**
 * Transaction Detail
 */
$g->GetTransactionDetail(new SOTelVerificationTypeGetTransactionDetail($r->getGetPhoneInfoResult()->getTransactionID()));
print_r($g);
?>