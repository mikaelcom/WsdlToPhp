<?php
/**
 * Test with ServiceObjects AddressPlus WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-addressplus/SOAddressPlusAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','**************');
define('SO_WSDL','http://trial.serviceobjects.com/ap/AddressPlus.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOAddressPlusWsdlClass::WSDL_URL=>SO_WSDL);
$a = new SOAddressPlusServiceGet($wsdl);
/**
 * Address
 */
$a->GetAddressPlus(new SOAddressPlusTypeGetAddressPlus('1 East 23rd Street','','New York','NY','10010',SO_KEY));
print_r($a);
/**
 * Census
 */
$a->GetAddressPlusNoCensus(new SOAddressPlusTypeGetAddressPlusNoCensus('1 East 23rd Street','','New York','NY','10010',SO_KEY));
print_r($a);
/**
 * DPV
 */
$a->GetAddressPlusWithDPV(new SOAddressPlusTypeGetAddressPlusWithDPV('1 East 23rd Street','','New York','NY','10010',SO_KEY));
print_r($a);
?>