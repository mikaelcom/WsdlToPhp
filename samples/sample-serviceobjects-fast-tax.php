<?php
/**
 * Test with ServiceObjects FastTax WSDL
 * @date 08/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/serviceobjects-fast-tax/SOFastTaxAutoload.php';
/**
 * ServiceObjects Informations
 */
define('SO_KEY','WS19-QPS1-BFN1');
define('SO_WSDL','http://trial.serviceobjects.com/ft/FastTax.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			SOFastTaxWsdlClass::WSDL_URL=>SO_WSDL);
$g = new SOFastTaxServiceGet($wsdl);
/**
 * Canadian Tax Info By Province
 */
$g->GetCanadianTaxInfoByProvince(new SOFastTaxTypeGetCanadianTaxInfoByProvince('Ontario',SO_KEY));
print_r($g);
/**
 * Tax info
 */
$g->GetTaxInfo(new SOFastTaxTypeGetTaxInfo(10025,'Sales',SO_KEY));
print_r($g);
$g->GetTaxInfo(new SOFastTaxTypeGetTaxInfo(10025,'Use',SO_KEY));
print_r($g);
/**
 * Tax Info By City State
 */
$g->GetTaxInfoByCityState(new SOFastTaxTypeGetTaxInfoByCityState('New York','NY','Sales',SO_KEY));
print_r($g);
?>