<?php
/**
 * Test with ServiceObjects AddressValidate WSDL
 * @date 05/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-addressvalidate/SOAddressValidateAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','**************');
define('SO_WSDL','http://trial.serviceobjects.com/av2/AddressValidate.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOAddressValidateWsdlClass::WSDL_URL=>SO_WSDL);
/**
 * Possible Matches
 */
$a = new SOAddressValidateServiceGet($wsdl);
$a->GetPossibleMatches(new SOAddressValidateTypeGetPossibleMatches('1 East 23rd Street','','New York','NY','10010',SO_KEY));
print_r($a);
/**
 * Validate
 */
$v = new SOAddressValidateServiceValidate($wsdl);
$v->ValidateAddress(new SOAddressValidateTypeValidateAddress('1 East 23rd Street','','New York','NY','10010',SO_KEY));
print_r($v);
/**
 * Validate
 */
$p = new SOAddressValidateServiceParse($wsdl);
$p->ParseAddress(new SOAddressValidateTypeParseAddress('1 East 23rd Street','','New York','NY','10010',SO_KEY));
print_r($p);
?>