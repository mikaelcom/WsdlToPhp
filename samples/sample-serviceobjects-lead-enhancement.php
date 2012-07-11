<?php
/**
 * Test with ServiceObjects LeadEnhancement WSDL
 * @date 06/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-lead-enhancement/SOLeadEnhancementAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS59-ZFA2-JYV4');
define('SO_WSDL','http://trial.serviceobjects.com/le/LeadEnhancement.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOLeadEnhancementWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOLeadEnhancementServiceEnhance($wsdl);
/**
 * 
 */
$e = new SOLeadEnhancementTypeEnhanceResidentialLead();
$e->setLicenseKey(SO_KEY);
$e->setName('Johnson');
$e->setCity('New York');
$e->setCountry('US');
$e->setEmail('John@yahoo.com');
$e->setPostalCode('10025');
$g->EnhanceResidentialLead($e);
print_r($g);
?>