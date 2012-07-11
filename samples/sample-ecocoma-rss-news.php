<?php
/**
 * Test with eCoComa Rss NewsWSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-rss-news/EccRssNewsAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','RSS-T91133500J');
define('ECC_WSDL','http://service.ecocoma.com/rss/news.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccRssNewsWsdlClass::WSDL_URL=>ECC_WSDL);
$r = new EccRssNewsServiceGet($wsdl);
$r->GetExtendedRSS(new EccRssNewsTypeGetExtendedRSS(ECC_KEY_ID,'','UTF-8','marketing'));
print_r($r);
?>