<?php
/**
 * Test with eBay Find Service
 * https://www.x.com/developers/ebay/php-perl-and-python-developer-center
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ebay-find/EbayFindAutoload.php';
/**
 * eBay Informations
 */
define('EBAY_WSDL','http://developer.ebay.com/webservices/finding/latest/FindingService.wsdl');
define('EBAY_APPNAME','************************************');
/**
 * header
 */
$ebayHeaders = array(
					'X-EBAY-SOA-MESSAGE-PROTOCOL:SOAP12',
					'X-EBAY-SOA-SERVICE-NAME:FindingService',
					'X-EBAY-SOA-SERVICE-VERSION:1.12.0',
					'X-EBAY-SOA-GLOBAL-ID:EBAY-US',
					'X-EBAY-SOA-SECURITY-APPNAME:' . EBAY_APPNAME,
					'X-EBAY-SOA-REQUEST-DATA-FORMAT:XML',
					'X-EBAY-SOA-RESPONSE-DATA-FORMAT:XML',
					'X-EBAY-SOA-OPERATION-NAME:findItemsByCategory');
$streamContextOptions = array();
$streamContextOptions['http'] = array();
$streamContextOptions['http']['method'] = 'POST';
$streamContextOptions['http']['header'] = implode("\r\n",$ebayHeaders);
$streamContext = stream_context_create($streamContextOptions);
/**
 * Init 
 */
$wsdl = array(
			EbayFindWsdlClass::WSDL_URL=>EBAY_WSDL,
			EbayFindWsdlClass::WSDL_STREAM_CONTEXT=>$streamContext);
if(false)
{
	$e = new EbayFindServiceGet($wsdl);
	$e->getHistograms(new EbayFindTypeGetHistogramsRequest(11233));
	print_r($e);
	print_r(EbayFindWsdlClass::getSoapClient()->__getLastRequest());
}
if(false)
{
	$e = new EbayFindServiceFind($wsdl);
	$e->findItemsByCategory(new EbayFindTypeFindItemsByCategoryRequest(11233));
	print_r($e);
	print_r(EbayFindWsdlClass::getSoapClient()->__getLastRequest());
}
?>