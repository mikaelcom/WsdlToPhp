<?php
/**
 * Test with eCoComa Marketing Yahoo WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-marketing-yahoo/EccMktYahooAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','MKT-T91069231J');
define('ECC_WSDL','http://service.ecocoma.com/marketing/yahoo.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccMktYahooWsdlClass::WSDL_URL=>ECC_WSDL);
$g = new EccMktYahooServiceGet($wsdl);
$g->GetKeywordSuggest(new EccMktYahooTypeGetKeywordSuggest(ECC_KEY_ID,'','marketing'));
print_r($g);
$g->GetKeywordRankding(new EccMktYahooTypeGetKeywordRankding(ECC_KEY_ID,'http://www.yahoo.fr','potatoe','/'));
print_r($g);
$g->GetRelatedCount(new EccMktYahooTypeGetRelatedCount(ECC_KEY_ID,'http://www.yahoo.fr','/'));
print_r($g);
?>