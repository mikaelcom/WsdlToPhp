<?php
/**
 * Test with ServiceObjects PhoneAppend WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-phoneappend/SOPhoneAppendAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS20-PMX5-ROB3');
define('SO_WSDL','http://trial.serviceobjects.com/pa/phoneappend.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOPhoneAppendWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOPhoneAppendServiceGet($wsdl);
/**
 * Business Append
 */
$g->GetBusinessPhoneAppend(new SOPhoneAppendTypeGetBusinessPhoneAppend('Service Objects','133 East de la Guerra Street','Santa Barbara','CA',93101,SO_KEY));
print_r($g);
/**
 * Phone Append
 */
$g->GetPhoneAppend(new SOPhoneAppendTypeGetPhoneAppend('Johnson','Peter','1 East 23rd Street','New York','NY','10010',SO_KEY));
print_r($g);
?>