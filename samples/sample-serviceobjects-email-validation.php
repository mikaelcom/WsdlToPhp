<?php
/**
 * Test with ServiceObjects EmailValidation WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-email-validation/SOEmailValidationAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS42-CJW3-UZI1');
define('SO_WSDL','http://trial.serviceobjects.com/ev2/emailvalidation2.asmx?WSDL');
define('SO_EMAIL','contac@serviceobjects.com');
/**
 * init
 */
$wsdl = array(
			SOEmailValidationWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOEmailValidationServiceCorrect($wsdl);
/**
 * Correct Email
 */
$g->CorrectEmail(new SOEmailValidationTypeCorrectEmail(SO_EMAIL,SO_KEY));
print_r($g);
/**
 * 
 */
$g = new SOEmailValidationServiceValidate($wsdl);
/**
 * Validate Email Fast
 */
$g->ValidateEmailFast(new SOEmailValidationTypeValidateEmailFast(SO_EMAIL,SO_KEY));
print_r($g);
/**
 * Validate Email Fast No Names
 */
$g->ValidateEmailFastNoNames(new SOEmailValidationTypeValidateEmailFastNoNames(SO_EMAIL,SO_KEY));
print_r($g);
/**
 * Validate Email Full
 */
$g->ValidateEmailFull(new SOEmailValidationTypeValidateEmailFull(SO_EMAIL,SO_KEY));
print_r($g);
?>