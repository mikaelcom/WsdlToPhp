<?php
/**
 * Test with eCoComa Marketing Live WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-marketing-live/EccMktLiveAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','MKT-T91069231J');
define('ECC_WSDL','http://service.ecocoma.com/marketing/live.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccMktLiveWsdlClass::WSDL_URL=>ECC_WSDL);
$g = new EccMktLiveServiceGet($wsdl);
$g->GetKeywordSuggest(new EccMktLiveTypeGetKeywordSuggest(ECC_KEY_ID,'','marketing'));
print_r($g);
$g->GetKeywordRankding(new EccMktLiveTypeGetKeywordRankding(ECC_KEY_ID,'http://www.live.fr','potatoe','/'));
print_r($g);
$g->GetRelatedCount(new EccMktLiveTypeGetRelatedCount(ECC_KEY_ID,'http://www.live.fr','/'));
print_r($g);
?>