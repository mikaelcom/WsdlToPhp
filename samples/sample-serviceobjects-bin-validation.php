<?php
/**
 * Test with ServiceObjects Credit Card Information WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-bin-validation/SOBinValidationAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS45-UDW3-ERG4');
define('SO_WSDL','http://trial.serviceobjects.com/bv/BinValidation.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOBinValidationWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOBinValidationServiceValidate($wsdl);
$g->ValidateBIN(new SOBinValidationTypeValidateBIN('896141',SO_KEY));
print_r($g);
?>