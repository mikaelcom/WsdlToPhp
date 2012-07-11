<?php
/**
 * Test with ServiceObjects EmailAppend WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-email-append/SOEmailAppendAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS63-YZF1-QGU4');
define('SO_WSDL','http://trial.serviceobjects.com/ea/emailappend.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOEmailAppendWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOEmailAppendServiceGet($wsdl);
/**
 * Consumer Email By Name And Address
 */
$g->GetConsumerEmailByNameAndAddress(new SOEmailAppendTypeGetConsumerEmailByNameAndAddress('Johnson','Peter','1 East 23rd Street','New York','NY','10010',SO_KEY));
print_r($g);
/**
 * Consumer Email By Name And Postal Code US
 */
$g->GetConsumerEmailByNameAndPostalCodeUS(new SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS('Johnson','Peter','93101-2228',SO_KEY));
print_r($g);
?>