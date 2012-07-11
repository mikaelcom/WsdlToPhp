<?php
/**
 * Test with ServiceObjects LeadValidation WSDL
 * @date 06/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-lead-validate/SOLeadValidateAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS40-PWC3-JTR1');
define('SO_WSDL','http://trial.serviceobjects.com/lv/leadvalidation.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOLeadValidateWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOLeadValidateServiceValidate($wsdl);
/**
 * 
 */
$g->ValidateLead(new SOLeadValidateTypeValidateLead('','1 East 23rd Street','','New York','NY',10010,'US','','','','','normal1p',SO_KEY));
print_r($g);
?>