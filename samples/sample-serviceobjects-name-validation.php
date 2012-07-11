<?php
/**
 * Test with ServiceObjects NameValidation WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-name-validation/SONameValidationAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS25-EIP3-YTK1');
define('SO_WSDL','http://trial.serviceobjects.com/nw/NameWizard.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SONameValidationWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SONameValidationServiceGet($wsdl);
/**
 * Name Info
 */
$g->GetNameInfo(new SONameValidationTypeGetNameInfo('Smith',SO_KEY));
print_r($g);
/**
 * Ordered Name
 */
$g->GetOrderedName(new SONameValidationTypeGetOrderedName('Smith',SO_KEY));
print_r($g);
$g->GetOrderedName(new SONameValidationTypeGetOrderedName('John',SO_KEY));
print_r($g);
?>