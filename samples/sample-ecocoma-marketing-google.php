<?php
/**
 * Test with eCoComa Marketing Google WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-marketing-google/EccMktGoogleAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','MKT-T91069231J');
define('ECC_WSDL','http://service.ecocoma.com/marketing/google.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccMktGoogleWsdlClass::WSDL_URL=>ECC_WSDL);
$g = new EccMktGoogleServiceGet($wsdl);
$g->GetKeywordSuggest(new EccMktGoogleTypeGetKeywordSuggest(ECC_KEY_ID,'','marketing'));
print_r($g);
$g->GetKeywordRankding(new EccMktGoogleTypeGetKeywordRankding(ECC_KEY_ID,'http://www.google.fr','potatoe','/'));
print_r($g);
$g->GetRelatedCount(new EccMktGoogleTypeGetRelatedCount(ECC_KEY_ID,'http://www.google.fr','/'));
print_r($g);
?>