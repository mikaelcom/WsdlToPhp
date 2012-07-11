<?php
/**
 * Test with ServiceObjects LeadEnhancementPlus WSDL
 * @date 06/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-lead-enhancement-plus/SOLeadEnhancementPlusAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS60-HRT2-DOI4');
define('SO_WSDL','http://trial.serviceobjects.com/lep/leadenhancementplus.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOLeadEnhancementPlusWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOLeadEnhancementPlusServiceEnhance($wsdl);
/**
 * 
 */
$e = new SOLeadEnhancementPlusTypeEnhanceResidentialLead();
$e->setLicenseKey(SO_KEY);
$e->setName('Johnson');
$e->setCity('New York');
$e->setCountry('US');
$e->setEmail('John@yahoo.com');
$e->setPostalCode('10025');
$g->EnhanceResidentialLead($e);
print_r($g);
?>