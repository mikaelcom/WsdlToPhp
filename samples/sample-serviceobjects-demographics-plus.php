<?php
/**
 * Test with ServiceObjects DemographicsPlus WSDL
 * @date 06/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-demographics-plus/SODemographicsPlusAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS53-GBC2-XUO5');
define('SO_WSDL','http://trial.serviceobjects.com/dgp/DemographicsPlus.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SODemographicsPlusWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SODemographicsPlusServiceGet($wsdl);
/**
 * Demographics
 */
$g->GetDemographicsByAddress(new SODemographicsPlusTypeGetDemographicsByAddress('1 East 23rd Street','New York','NY',10010,SO_KEY));
print_r($g);
/**
 * ZIP
 */
$g->GetDemographicsByZIP(new SODemographicsPlusTypeGetDemographicsByZIP(10010,SO_KEY));
print_r($g);
?>