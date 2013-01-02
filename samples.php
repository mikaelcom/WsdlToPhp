<?php
/**
 * Sample to show how to use WsdlToPhp class
 * @package WsdlToPhp
 * @deprecated In favor to samples-generator.php
 * @date 01/07/2012
 */
ini_set('display_errors',true);
ini_set('memory_limit',-1);
/**
 * In case function lcfirst doesn't exist 
 */
if(!function_exists('lcfirst'))
{
	function lcfirst($_s)
	{
		return strtolower(substr($_s,0,1)) . substr($_s,1);
	}
}
/**
 * Librairies
 */
$localDir = dirname(__FILE__) . '/';
require_once $localDir . 'Base/src/struct.php';
require_once $localDir . 'PhpGenerator/src/php_generator.php';
require_once $localDir . 'PhpGenerator/src/structs/php_generator_return_data.php';
require_once $localDir . 'PhpGenerator/src/structs/php_generator_parameter.php';
require_once $localDir . 'WsdlToPhp.php';
/**
 * Cleaning tests
 */
if(false)
{
	echo "\r\n Clean constant Name for '2And'is-go54  83od+*/you=yèçés_3' is " . WsdlToPhp::cleanConstantName("2And'is-go54  83od+*/you=yéçès_3") . " \r\n";
	echo "\r\n Clean class Name for '2And'is-go54  83od+*/you=yèçés_3' is " . WsdlToPhp::cleanClassName("2And'is-go54  83od+*/you=yéçès_3") . " \r\n";
	echo "\r\n Clean property Name for '2And'is-go54  83od+*/you=yèçés_3' is " . WsdlToPhp::cleanPropertyName("2And'is-go54  83od+*/you=yéçès_3") . " \r\n";
	return;
}
/**
 * OVH SOAP API
 */
if(false)
{
	$w = new WsdlToPhp('http://www.ovh.com/soapi/soapi-dlw-1.52.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionResponseAsWsdlObject(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('ovh',dirname(__FILE__) . '/samples/ovh/');
}
/**
 * BING Web Search API
 */
if(false)
{
	$w = new WsdlToPhp('http://api.bing.net/search.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendParametersAsArray(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->setOptionGenerateTutorialFile(true);
	$w->generateClasses('bing',dirname(__FILE__) . '/samples/bing-search/');
}
/**
 * BING Geocode API
 */
if(false)
{
	$w = new WsdlToPhp('http://dev.virtualearth.net/webservices/v1/metadata/geocodeservice/geocodeservice.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('BingGeo',dirname(__FILE__) . '/samples/bing-geo/');
}
/**
 * YAHOO Mail API
 */
if(false)
{
	$w = new WsdlToPhp('http://mail.yahooapis.com/ws/mail/v1.1/wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('YMail',dirname(__FILE__) . '/samples/yahoo-mail/');
}
/**
 * CDYNE IP to Geo API
 */
if(false)
{
	$w = new WsdlToPhp('http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneIp2geo',dirname(__FILE__) . '/samples/cdyne-ip2geo/');
}
/**
 * CDYNE Address verification API
 */
if(false)
{
	$w = new WsdlToPhp('http://ws.cdyne.com/psaddress/addresslookup.asmx?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneAddress',dirname(__FILE__) . '/samples/cdyne-address/');
}
/**
 * CDYNE Email verification API
 */
if(false)
{
	$w = new WsdlToPhp('http://ws.cdyne.com/emailverify/Emailvernotestemail.asmx?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneEmail',dirname(__FILE__) . '/samples/cdyne-email/');
}
/**
 * CDYNE Weather API
 */
if(false)
{
	$w = new WsdlToPhp('http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneWeather',dirname(__FILE__) . '/samples/cdyne-weather/');
}
/**
 * CDYNE Phone Notify API
 */
if(false)
{
	$w = new WsdlToPhp('http://ws.cdyne.com/NotifyWS/PhoneNotify.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdynePhoneNotify',dirname(__FILE__) . '/samples/cdyne-phone-notify/');
}
/**
 * CDYNE Phone Verify API
 */
if(false)
{
	$w = new WsdlToPhp('http://ws.cdyne.com/phoneverify/phoneverify.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdynePhoneVerify',dirname(__FILE__) . '/samples/cdyne-phone-verify/');
}
/**
 * CDYNE Death Index API
 */
if(false)
{
	$w = new WsdlToPhp('http://di3.cdyne.com/DeathIndexService.svc?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneDeathIndex',dirname(__FILE__) . '/samples/cdyne-death-index/');
}
/**
 * CDYNE Demographics Query API
 */
if(false)
{
	$w = new WsdlToPhp('http://ws.cdyne.com/DemographixWS/DemographixQuery.asmx?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneDemographicsQ',dirname(__FILE__) . '/samples/cdyne-demographics-query/');
}
/**
 * CDYNE International Address Verification API
 */
if(false)
{
	$w = new WsdlToPhp('http://pav3.cdyne.com/i/PavInternationalService.svc?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneIntAddress',dirname(__FILE__) . '/samples/cdyne-international-address/');
}
/**
 * CDYNE Spell Checker API
 */
if(false)
{
	$w = new WsdlToPhp('http://wsf.cdyne.com/SpellChecker/check.asmx?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CdyneSpellChecker',dirname(__FILE__) . '/samples/cdyne-spell-checker/');
}
/**
 * PayPal Invoice API
 */
if(false)
{
	$w = new WsdlToPhp('https://svcs.paypal.com/Invoice?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('PPInvoice',dirname(__FILE__) . '/samples/paypal-invoice/');
}
/**
 * PayPal API
 * @todo : some structs have attributes that have incompatible name (ccp-header-image) to generate it properly...
 * @date 13/07/2012 : bug fix with clean*Name methods
 */
if(false)
{
	$w = new WsdlToPhp('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('PayPal',dirname(__FILE__) . '/samples/paypal/');
}
/**
 * AT Internet Reporting API
 */
if(false)
{
	$w = new WsdlToPhp('http://api.atinternet-solutions.com/toolbox/reporting.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('ATReporting',dirname(__FILE__) . '/samples/atinternet-reporting/');
}
/**
 * Google Adwords Api
 */
if(false)
{
	$w = new WsdlToPhp('https://adwords.google.com/api/adwords/cm/v201206/CampaignService?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_START_NAME);
	$w->generateClasses('GGAdwords',dirname(__FILE__) . '/samples/google-adwords/');
}
/**
 * eCoComa Video
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/video/video.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccVideo',dirname(__FILE__) . '/samples/ecocoma-video/');
}
/**
 * eCoComa Marketing Google
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/marketing/google.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccMktGoogle',dirname(__FILE__) . '/samples/ecocoma-marketing-google/');
}
/**
 * eCoComa Marketing Yahoo
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/marketing/yahoo.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccMktYahoo',dirname(__FILE__) . '/samples/ecocoma-marketing-yahoo/');
}
/**
 * eCoComa Marketing Live
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/marketing/live.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccMktLive',dirname(__FILE__) . '/samples/ecocoma-marketing-live/');
}
/**
 * eCoComa RSS Custom
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/rss/custom.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccRssCustom',dirname(__FILE__) . '/samples/ecocoma-rss-custom/');
}
/**
 * eCoComa RSS News
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/rss/news.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccRssNews',dirname(__FILE__) . '/samples/ecocoma-rss-news/');
}
/**
 * eCoComa Video Msn
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/video/msn.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccVideoMsn',dirname(__FILE__) . '/samples/ecocoma-video-msn/');
}
/**
 * eCoComa Convert Unicode
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/convert/unicode.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccConvertUnic',dirname(__FILE__) . '/samples/ecocoma-convert-unicode/');
}
/**
 * eCoComa Convert Csharp
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/convert/csharp.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccConvertCsharp',dirname(__FILE__) . '/samples/ecocoma-convert-csharp/');
}
/**
 * eCoComa Convert UnixTimeStamp
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/convert/unixtimestamp.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccConvertUnixTmp',dirname(__FILE__) . '/samples/ecocoma-convert-unixtimestamp/');
}
/**
 * eCoComa Convert Chinese
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/convert/chinese.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccConvertChinese',dirname(__FILE__) . '/samples/ecocoma-convert-chinese/');
}
/**
 * eCoComa Email Pop3
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/email/pop3.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccEmailPop3',dirname(__FILE__) . '/samples/ecocoma-email-pop3/');
}
/**
 * eCoComa Email Validate
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/email/validate.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccEmailValidate',dirname(__FILE__) . '/samples/ecocoma-email-validate/');
}
/**
 * eCoComa Domain Host
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/domain/host.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccDomainHost',dirname(__FILE__) . '/samples/ecocoma-domain-host/');
}
/**
 * eCoComa Domain Ip
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/domain/ip.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccDomainIp',dirname(__FILE__) . '/samples/ecocoma-domain-ip/');
}
/**
 * eCoComa Domain Whois
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/domain/whois.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccDomainWhois',dirname(__FILE__) . '/samples/ecocoma-domain-whois/');
}
/**
 * eCoComa Geo Distance
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/geo/distance.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccGeoDist',dirname(__FILE__) . '/samples/ecocoma-geo-distance/');
}
/**
 * eCoComa Geo ZipCity
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/geo/zipcity.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccGeoZipCity',dirname(__FILE__) . '/samples/ecocoma-geo-zipcity/');
}
/**
 * eCoComa Geo CityZip
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/geo/cityzip.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccGeoCityZip',dirname(__FILE__) . '/samples/ecocoma-geo-cityzip/');
}
/**
 * eCoComa Geo IPCountry
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/geo/ipcountry.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccGeoIPCtry',dirname(__FILE__) . '/samples/ecocoma-geo-ipcountry/');
}
/**
 * eCoComa Video Aol
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/video/aol.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccVideoAol',dirname(__FILE__) . '/samples/ecocoma-video-aol/');
}
/**
 * eCoComa Shipping Ups
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/shipping/ups.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccShippingUps',dirname(__FILE__) . '/samples/ecocoma-shipping-ups/');
}
/**
 * eCoComa Shipping Fedex
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/shipping/fedex.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccShippingFedex',dirname(__FILE__) . '/samples/ecocoma-shipping-fedex/');
}
/**
 * eCoComa Shipping Fedex
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/shipping/dhl.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccShippingDhl',dirname(__FILE__) . '/samples/ecocoma-shipping-dhl/');
}
/**
 * eCoComa Shipping Usps
 */
if(false)
{
	$w = new WsdlToPhp('http://service.ecocoma.com/shipping/usps.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EccShippingUsps',dirname(__FILE__) . '/samples/ecocoma-shipping-usps/');
}
/**
 * eBay Find Service
 */
if(false)
{
	$w = new WsdlToPhp('http://developer.ebay.com/webservices/finding/latest/FindingService.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EbayFind',dirname(__FILE__) . '/samples/ebay-find/');
}
/**
 * eBay Trading Service
 */
if(false)
{
	$w = new WsdlToPhp('http://developer.ebay.com/webservices/latest/ebaySvc.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EbayTrading',dirname(__FILE__) . '/samples/ebay-trading/');
}
/**
 * eBay Shopping Service
 */
if(false)
{
	$w = new WsdlToPhp('http://developer.ebay.com/webservices/latest/ShoppingService.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('EbayShopping',dirname(__FILE__) . '/samples/ebay-shopping/');
}
/**
 * Microsoft Research API
 */
if(false)
{
	$w = new WsdlToPhp('http://office.microsoft.com/Research/query.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('MicrosoftResearch',dirname(__FILE__) . '/samples/microsoft-research/');
}
/**
 * Microsoft SensorMap DataHub API
 */
if(false)
{
	$w = new WsdlToPhp('http://atom.research.microsoft.com/sensordatahub/service.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('MicrosoftSmDh',dirname(__FILE__) . '/samples/microsoft-sensormap-datahub/');
}
/**
 * Microsoft Translator API
 */
if(false)
{
	$w = new WsdlToPhp('http://api.microsofttranslator.com/V2/Soap.svc');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('MicrosoftTranslator',dirname(__FILE__) . '/samples/microsoft-translator/');
}
/**
 * Microsoft Content Service API
 * @todo : SOAP-ERROR: Parsing WSDL: Missing message attribute for <header>
 */
if(false)
{
	$w = new WsdlToPhp('http://services.msdn.microsoft.com/ContentServices/ContentService.asmx?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('MicrosoftContent',dirname(__FILE__) . '/samples/microsoft-content/');
}
/**
 * ServiceObjects AddressPlus API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/ap/AddressPlus.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOAddressPlus',dirname(__FILE__) . '/samples/serviceobjects-addressplus/');
}
/**
 * ServiceObjects AddressValidate API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/av2/AddressValidate.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOAddressValidate',dirname(__FILE__) . '/samples/serviceobjects-addressvalidate/');
}
/**
 * ServiceObjects ValidateCanada API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/avca/ValidateCanada.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOValidateCanada',dirname(__FILE__) . '/samples/serviceobjects-validatecanada/');
}
/**
 * ServiceObjects GeoCoder API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gcr/GeoCoder.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOGeoCoder',dirname(__FILE__) . '/samples/serviceobjects-geocoder/');
}
/**
 * ServiceObjects GeoCoderCanada API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gcc/GeoCoderCanada.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOGeoCoderCanada',dirname(__FILE__) . '/samples/serviceobjects-geocoder-canada/');
}
/**
 * ServiceObjects GeoDemographics API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gce/GeoCensus.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOGeoCensus',dirname(__FILE__) . '/samples/serviceobjects-geocensus/');
}
/**
 * ServiceObjects GeoDemographicsPlus API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/dgp/DemographicsPlus.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SODemographicsPlus',dirname(__FILE__) . '/samples/serviceobjects-demographics-plus/');
}
/**
 * ServiceObjects NCOA API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/nl/NCOALive.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SONcoaLive',dirname(__FILE__) . '/samples/serviceobjects-ncoa-live/');
}
/**
 * ServiceObjects LeadValidation API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/lv/leadvalidation.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOLeadValidate',dirname(__FILE__) . '/samples/serviceobjects-lead-validate/');
}
/**
 * ServiceObjects LeadEnhancement API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/le/leadenhancement.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOLeadEnhancement',dirname(__FILE__) . '/samples/serviceobjects-lead-enhancement/');
}
/**
 * ServiceObjects LeadEnhancementPlus API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/lep/leadenhancementplus.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOLeadEnhancementPlus',dirname(__FILE__) . '/samples/serviceobjects-lead-enhancement-plus/');
}
/**
 * ServiceObjects GeoPhone API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gp/GeoPhone.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOGeoPhone',dirname(__FILE__) . '/samples/serviceobjects-geophone/');
}
/**
 * ServiceObjects GeoPhonePlus API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gppl/GeoPhonePlus.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOGeoPhonePlus',dirname(__FILE__) . '/samples/serviceobjects-geophone-plus/');
}
/**
 * ServiceObjects PhoneAppend API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/pa/phoneappend.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOPhoneAppend',dirname(__FILE__) . '/samples/serviceobjects-phoneappend/');
}
/**
 * ServiceObjects PhoneExchange API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/pe/PhoneExchange.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOPhoneExchange',dirname(__FILE__) . '/samples/serviceobjects-phoneexchange/');
}
/**
 * ServiceObjects TelephoneVerification API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/tv/TelephoneVerification.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOTelVerification',dirname(__FILE__) . '/samples/serviceobjects-telephoneverification/');
}
/**
 * ServiceObjects EmailValidation2 API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/ev2/emailvalidation2.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOEmailValidation',dirname(__FILE__) . '/samples/serviceobjects-email-validation/');
}
/**
 * ServiceObjects EmailAppend API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/ea/emailappend.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOEmailAppend',dirname(__FILE__) . '/samples/serviceobjects-email-append/');
}
/**
 * ServiceObjects NameValdidation API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/nw/NameWizard.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SONameValidation',dirname(__FILE__) . '/samples/serviceobjects-name-validation/');
}
/**
 * ServiceObjects IPValidation API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gpp/GeoPinPoint.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOIpValidation',dirname(__FILE__) . '/samples/serviceobjects-ip-validation/');
}
/**
 * ServiceObjects Sales Taxe Append API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/ft/FastTax.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOFastTax',dirname(__FILE__) . '/samples/serviceobjects-fast-tax/');
}
/**
 * ServiceObjects Credit Card Information API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/bv/BinValidation.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOBinValidation',dirname(__FILE__) . '/samples/serviceobjects-bin-validation/');
}
/**
 * ServiceObjects ContactValidation API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/cv/ContactValidation.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOContactValidation',dirname(__FILE__) . '/samples/serviceobjects-contact-validation/');
}
/**
 * ServiceObjects CurrencyExchange API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/ce/CurrencyExchange.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOCurrencyExchange',dirname(__FILE__) . '/samples/serviceobjects-currency-exchange/');
}
/**
 * ServiceObjects FastQuote API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/sq/FastQuote.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOFastQuote',dirname(__FILE__) . '/samples/serviceobjects-fast-quote/');
}
/**
 * ServiceObjects FastWeather API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/fw/FastWeather.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOFastWeather',dirname(__FILE__) . '/samples/serviceobjects-fast-weather/');
}
/**
 * ServiceObjects FraudProtection API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/fp/FraudProtection.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOFraudProtection',dirname(__FILE__) . '/samples/serviceobjects-fraud-protection/');
}
/**
 * ServiceObjects GeoCash API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gc/GeoCash.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOGeoCash',dirname(__FILE__) . '/samples/serviceobjects-geocash/');
}
/**
 * ServiceObjects NameAppend API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/na/NameAppend.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SONameAppend',dirname(__FILE__) . '/samples/serviceobjects-name-append');
}
/**
 * ServiceObjects PackTrack API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/pt/PackTrack.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOPackTrack',dirname(__FILE__) . '/samples/serviceobjects-packtrack');
}
/**
 * ServiceObjects SICAppend API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/sa/SICAppend.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOSICAppend',dirname(__FILE__) . '/samples/serviceobjects-sic-append');
}
/**
 * ServiceObjects YellowPages API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/yp/YellowPages.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOYellowPages',dirname(__FILE__) . '/samples/serviceobjects-yallow-pages');
}
/**
 * ServiceObjects BusinessInformation API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/bi/BusinessInformation.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOBusinessInformation',dirname(__FILE__) . '/samples/serviceobjects-business-information');
}
/**
 * ServiceObjects ContactFixer API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/cf/ContactFixer.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOContactFixer',dirname(__FILE__) . '/samples/serviceobjects-contact-fixer');
}
/**
 * ServiceObjects Disconnected API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/dc/Disconnected.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SODisconnected',dirname(__FILE__) . '/samples/serviceobjects-disconnected');
}
/**
 * ServiceObjects GeoPhoneWireless API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/gpw/GeoPhoneWireless.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOGeoPhoneWireless',dirname(__FILE__) . '/samples/serviceobjects-geo-phone-wireless');
}
/**
 * ServiceObjects Phone2Name API
 */
if(false)
{
	$w = new WsdlToPhp('http://trial.serviceobjects.com/p2n/Phone2Name.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SOPhone2Name',dirname(__FILE__) . '/samples/serviceobjects-phone2name');
}
/**
 * Sharepoint Lists API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/lists.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPLists',dirname(__FILE__) . '/samples/sharepoint-lists/');
}
/**
 * Sharepoint Copy API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/copy.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPCopy',dirname(__FILE__) . '/samples/sharepoint-copy/');
}
/**
 * Sharepoint Alerts API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/alerts.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPAlerts',dirname(__FILE__) . '/samples/sharepoint-alerts/');
}
/**
 * Sharepoint Authentication API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/authentication.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPAuthentication',dirname(__FILE__) . '/samples/sharepoint-authentication/');
}
/**
 * Sharepoint Document Workspace API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/dws.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPDocumentWk',dirname(__FILE__) . '/samples/sharepoint-document-workspace/');
}
/**
 * Sharepoint Forms API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/forms.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPForms',dirname(__FILE__) . '/samples/sharepoint-forms/');
}
/**
 * Sharepoint Imaging API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/imaging.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPImaging',dirname(__FILE__) . '/samples/sharepoint-imaging/');
}
/**
 * Sharepoint ListDataRetrieval API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/dspsts.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPListDataRetrieval',dirname(__FILE__) . '/samples/sharepoint-list-data-retrievel/');
}
/**
 * Sharepoint ListDataRetrieval API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/dspsts.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPListDataRetrieval',dirname(__FILE__) . '/samples/sharepoint-list-data-retrievel/');
}
/**
 * Sharepoint ListDataRetrieval API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/dspsts.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPListDataRetrieval',dirname(__FILE__) . '/samples/sharepoint-list-data-retrievel/');
}
/**
 * Sharepoint Meetings API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/meetings.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPMeetings',dirname(__FILE__) . '/samples/sharepoint-meetings/');
}
/**
 * Sharepoint People API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/people.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPPeople',dirname(__FILE__) . '/samples/sharepoint-people/');
}
/**
 * Sharepoint Permissions API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/permissions.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPPermissions',dirname(__FILE__) . '/samples/sharepoint-permissions/');
}
/**
 * Sharepoint Sitedata API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/sitedata.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPSitedata',dirname(__FILE__) . '/samples/sharepoint-sitedata/');
}
/**
 * Sharepoint Sites API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/sites.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPSites',dirname(__FILE__) . '/samples/sharepoint-sites/');
}
/**
 * Sharepoint Search API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/search.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPSearch',dirname(__FILE__) . '/samples/sharepoint-search/');
}
/**
 * Sharepoint UserGroup API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/usergroup.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPUserGroup',dirname(__FILE__) . '/samples/sharepoint-usergroup/');
}
/**
 * Sharepoint Versions API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/versions.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPVersions',dirname(__FILE__) . '/samples/sharepoint-versions/');
}
/**
 * Sharepoint Views API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/views.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPViews',dirname(__FILE__) . '/samples/sharepoint-views/');
}
/**
 * Sharepoint WebPartPages API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/webpartpages.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPWebPartPages',dirname(__FILE__) . '/samples/sharepoint-webpartpages/');
}
/**
 * Sharepoint Webs API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/webs.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPWebs',dirname(__FILE__) . '/samples/sharepoint-webs/');
}
/**
 * Sharepoint SharepointEmailWs API
 */
if(false)
{
	$w = new WsdlToPhp('*******************************/_vti_bin/sharepointemailws.asmx?WSDL','*******************************','*******************************');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('SPEmailWs',dirname(__FILE__) . '/samples/sharepoint-sharepointemailws/');
}
/**
 * MaxMind API
 */
if(false)
{
	$w = new WsdlToPhp('http://www.maxmind.com/app/minfraud_soap_wsdl14');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('MaxMind',dirname(__FILE__) . '/samples/maxmind/');
}
/**
 * USGS DownloadService API
 */
if(false)
{
	$w = new WsdlToPhp('http://extract.cr.usgs.gov/axis2/services/DownloadService?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('UsgsDownload',dirname(__FILE__) . '/samples/usgs-download/');
}
/**
 * USGS Request API
 */
if(false)
{
	$w = new WsdlToPhp('http://extract.cr.usgs.gov/requestValidationService/wsdl/RequestValidationService.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('UsgsRequest',dirname(__FILE__) . '/samples/usgs-request/');
}
/**
 * USGS Elevation API
 */
if(false)
{
	$w = new WsdlToPhp('http://gisdata.usgs.gov/xmlwebservices2/elevation_service.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('UsgsElevation',dirname(__FILE__) . '/samples/usgs-elevation/');
}
/**
 * USGS Gazettteer API
 */
if(false)
{
	$w = new WsdlToPhp('http://gisdata.usgs.gov/XMLWebServices2/TNM_Gazetteer_Service.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('UsgsGazettteer',dirname(__FILE__) . '/samples/usgs-gazettteer/');
}
/**
 * USGS USNG API
 */
if(false)
{
	$w = new WsdlToPhp('http://gisdata.usgs.gov/XmlWebServices/USNG.asmx?WSDL&AspxAutoDetectCookieSupport=1');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('UsgsUsng',dirname(__FILE__) . '/samples/usgs-usng/');
}
/**
 * Xignite.com services
 */
if(false)
{
	$services = array(
					'http://bondmaster.xignite.com/xBondMaster.asmx?WSDL',
					'http://globalmaster.xignite.com/xglobalmaster.asmx?WSDL',
					'http://globalbondmaster.xignite.com/xGlobalBondMaster.asmx?WSDL',
					'http://www.xignite.com/xSecurity.asmx?WSDL',
					'http://www.xignite.com/xWatchLists.asmx?WSDL',
					'http://globalrealtime.xignite.com/xglobalrealtime.asmx?WSDL',
					'http://globalquotes.xignite.com/xglobalquotes.asmx?WSDL',
					'http://www.xignite.com/xQuotes.asmx?WSDL',
					'http://www.xignite.com/xRealTime.asmx?WSDL',
					'http://www.xignite.com/xBATSRealTime.asmx?WSDL',
					'http://www.xignite.com/xBATSLastSale.asmx?WSDL',
					'http://www.xignite.com/xNASDAQLastSale.asmx?WSDL',
					'http://www.xignite.com/xGlobalHistorical.asmx?WSDL',
					'http://www.xignite.com/xHistorical.asmx?WSDL',
					'http://www.xignite.com/xFinancials.asmx?WSDL',
					'http://www.xignite.com/xFundamentals.asmx?WSDL',
					'http://www.xignite.com/xGlobalFundamentals.asmx?WSDL',
					'http://www.xignite.com/xAnalysts.asmx?WSDL',
					'http://www.xignite.com/xCompensation.asmx?WSDL',
					'http://www.xignite.com/xEdgar.asmx?WSDL',
					'http://www.xignite.com/xEstimates.asmx?WSDL',
					'http://www.xignite.com/xInsider.asmx?WSDL',
					'http://www.xignite.com/xEarningsCalendar.asmx?WSDL',
					'http://www.xignite.com/xHoldings.asmx?WSDL',
					'http://www.xignite.com/xLogos.asmx?WSDL',
					'http://www.xignite.com/xReleases.asmx?WSDL',
					'http://www.xignite.com/xTranscripts.asmx?WSDL',
					'http://www.xignite.com/xOFAC.asmx?WSDL',
					'http://www.xignite.com/xNews.asmx?WSDL',
					'http://www.xignite.com/xFunds.asmx?WSDL',
					'http://www.xignite.com/xFundData.asmx?WSDL',
					'http://www.xignite.com/xFundHoldings.asmx?WSDL',
					'http://bonds.xignite.com/xBonds.asmx?WSDL',
					'http://bondsrealtime.xignite.com/xBondsRealTime.asmx?WSDL',
					'http://www.xignite.com/xRates.asmx?WSDL',
					'http://www.xignite.com/xInterBanks.asmx?WSDL',
					'http://www.xignite.com/xMoneyMarkets.asmx?WSDL',
					'http://www.xignite.com/xFutures.asmx?WSDL',
					'http://www.xignite.com/xEnergy.asmx?WSDL',
					'http://globaloptions.xignite.com/xglobaloptions.asmx?WSDL',
					'http://globalrealtimeoptions.xignite.com/xglobalrealtimeoptions.asmx?WSDL',
					'http://www.xignite.com/xCurrencies.asmx?WSDL',
					'http://www.xignite.com/xMetals.asmx?WSDL',
					'http://www.xignite.com/xIndices.asmx?WSDL',
					'http://www.xignite.com/xIndexComponents.asmx?WSDL',
					'http://www.xignite.com/xCalendar.asmx?WSDL',
					'http://www.xignite.com/xExchanges.asmx?WSDL',
					'http://www.xignite.com/xHousing.asmx?WSDL',
					'http://www.xignite.com/xStatistics.asmx?WSDL',
					'http://www.xignite.com/xChart.asmx?WSDL',
					'http://www.xignite.com/xScreener.asmx?WSDL',
					'http://www.xignite.com/xVWAP.asmx?WSDL');
	foreach($services as $serviceUrl)
	{
		$w = new WsdlToPhp($serviceUrl);
		$w->setOptionGenerateAutoloadFile(true);
		$w->setOptionGenerateWsdlClassFile(true);
		$w->setOptionSendArrayAsParameter(true);
		$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
		$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
		$pathinfo = pathinfo($serviceUrl);
		$serviceName = str_replace('.asmx?WSDL','',$pathinfo['basename']);
		$serviceName = preg_replace('/(^x)\.*/','',$serviceName);
		echo "\r\n$serviceName\r\n";
		$w->generateClasses('Xi' . ucfirst($serviceName),dirname(__FILE__) . '/samples/xignite-' . strtolower($serviceName) . '/');
	}
}
/**
 * Xwebservices.com services
 */
if(false)
{
	$services = array(
					'http://ws.xwebservices.com/XWebEmailValidation/V2/XWebEmailValidation.wsdl',
					'http://ws.xwebservices.com/XWeb1003/V2.1/XWeb1003.wsdl',
					'http://ws.xwebservices.com/XWebACHDirectory/V1/XWebACHDirectory.wsdl',
					'http://ws.xwebservices.com/XWebCheckOut/V2/XWebCheckOut.wsdl',
					'http://ws.xwebservices.com/XWebTD/V1/Availability.wsdl',
					'http://ws.xwebservices.com/XWebTD/V1/PriceAvailability.wsdl',
					'http://ws.xwebservices.com/XWebTD/V1/Order.wsdl',
					'http://ws.xwebservices.com/XWebTD/V1/OrderStatus.wsdl',
					'http://ws.xwebservices.com/XWebTD/V1/ShipVia.wsdl',
					'http://ws.xwebservices.com/XWebTD/V1/PriceList.wsdl',
					'http://ws.xwebservices.com/XWebTD/V1/InvoiceDetailByPO.wsdl',
					'http://ws.xwebservices.com/XWebBlog/V2/XWebBlog.wsdl',
					'http://ws.xwebservices.com/XWebFAQs/V2/XWebFAQs.wsdl',
					'http://ws.xwebservices.com/XWebForum/V2/XWebForum.wsdl',
					'http://ws.xwebservices.com/XWebNews/V2/XWebNews.wsdl',
					'http://ws.xwebservices.com/XWebSurvey/V2/XWebSurvey.wsdl',
					'http://ws.xwebservices.com/XWebLead/V2/XWebLead.wsdl');
	foreach($services as $serviceUrl)
	{
		$w = new WsdlToPhp($serviceUrl);
		$w->setOptionGenerateAutoloadFile(true);
		$w->setOptionGenerateWsdlClassFile(true);
		$w->setOptionSendArrayAsParameter(true);
		$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
		$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
		$pathinfo = pathinfo($serviceUrl);
		$serviceName = str_replace('.wsdl','',$pathinfo['basename']);
		if(strpos($serviceName,'XWeb') === false)
			$serviceName = 'XWeb' . $serviceName;
		echo "\r\n$serviceName\r\n";
		$w->generateClasses(ucfirst($serviceName),dirname(__FILE__) . '/samples/xweb-' . strtolower(str_replace('XWeb','',$serviceName)) . '/');
	}
}
/**
 * Yandex SpellService
 */
if(false)
{
	$w = new WsdlToPhp('http://speller.yandex.net/services/spellservice?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('YandexSpell',dirname(__FILE__) . '/samples/yandex-spell/');
}
/**
 * www.seismicportal.eu
 */
if(false)
{
	$w = new WsdlToPhp('http://www.seismicportal.eu/services/ws/quakeml?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Quakeml',dirname(__FILE__) . '/samples/seismicportal-quakeml/');
}
/**
 * JM Data
 */
if(false)
{
	$w = new WsdlToPhp('http://services.jm-data.no/movieapp.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('JmDataMovieApp',dirname(__FILE__) . '/samples/jmdata-movieapp/');
}
/**
 * OnlineTalentManager
 * @todo : some structs have attributes that have incompatible name (api-version, etc) to geenrate it properly...
 */
if(false)
{
	$w = new WsdlToPhp('http://otmapi.onlinetalentmanager.com/1.0/otmapi.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('OnlineTalentManager',dirname(__FILE__) . '/samples/online-talent-manager/');
}
/**
 * Payline
 */
if(false)
{
	$w = new WsdlToPhp('http://www.payline.com/wsdl/v4_0/homologation/WebPaymentAPI.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('PaylineWebPayment',dirname(__FILE__) . '/samples/payline-webpayment/');
}
/**
 * Amazon services
 */
if(false)
{
	$services = array(
					'http://webservices.amazon.com/AWSECommerceService/AWSECommerceService.wsdl',
					'http://s3.amazonaws.com/ec2-downloads/ec2.wsdl',
					'http://elasticloadbalancing.amazonaws.com/doc/2012-06-01/ElasticLoadBalancing.wsdl',
					'http://sdb.amazonaws.com/doc/2009-04-15/AmazonSimpleDB.wsdl',
					'https://fps.amazonaws.com/doc/2010-08-28/AmazonFPS.wsdl',
					'https://ls.amazonaws.com/doc/2008-04-28/AmazonLS.wsdl',
					'http://soap.amazon.com/schemas2/AmazonWebServices.wsdl',
					'http://queue.amazonaws.com/doc/2011-10-01/QueueService.wsdl',
					'http://awis.amazonaws.com/doc/2005-07-11/AWSAlexa.wsdl');
	foreach($services as $serviceUrl)
	{
		$w = new WsdlToPhp($serviceUrl);
		$w->setOptionGenerateAutoloadFile(true);
		$w->setOptionGenerateWsdlClassFile(true);
		$w->setOptionSendArrayAsParameter(true);
		$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
		$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
		$pathinfo = pathinfo($serviceUrl);
		$serviceName = str_replace('.wsdl','',$pathinfo['basename']);
		$serviceName = str_replace(array(
										'Amazon',
										'AWS'),'',$serviceName);
		echo "\r\n$serviceName\r\n";
		$w->generateClasses('Amazon' . ucfirst($serviceName),dirname(__FILE__) . '/samples/amazon-' . strtolower($serviceName) . '/');
	}
}
/**
 * BarCodeSoft
 */
if(false)
{
	$w = new WsdlToPhp('http://www.barcodesoft.com/bcdgen.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('BarCodeSoft',dirname(__FILE__) . '/samples/barcodesoft/');
}
/**
 * DirectSmile
 */
if(false)
{
	$w = new WsdlToPhp('http://dsmo.directsmile.de/dsmo/lb.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('DirectSmile',dirname(__FILE__) . '/samples/directsmile/');
}
/**
 * LifePics
 */
if(false)
{
	$w = new WsdlToPhp('https://api.lifepics.com/v3/LPWebService.asmx?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('LifePics',dirname(__FILE__) . '/samples/lifepics/');
}
/**
 * BioIDWS
 */
if(false)
{
	$w = new WsdlToPhp('https://playground.bioid.com/Content/BWS/www.bioid.com.2011.12.bws.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('BioIDWS',dirname(__FILE__) . '/samples/bioid-web-service/');
}
/**
 * RESTFUL
 */
if(false)
{
	$restfuls = array(
					'http://www.restfulwebservices.net/wcf/AirportService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/BibleASVService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/EmailValidationService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/StockQuoteService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/GeoIPService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/HCPCSService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/AustraliaPostalCodeService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/UNSPSCService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/USAZipCodeService.svc?wsdl',
					'http://www.restfulwebservices.net/wcf/WeatherForecastService.svc?wsdl');
	foreach($restfuls as $restful)
	{
		$w = new WsdlToPhp($restful);
		$pathinfo = pathinfo($restful);
		$serviceName = str_replace('Service.svc?wsdl','',$pathinfo['basename']);
		$w->setOptionGenerateAutoloadFile(true);
		$w->setOptionGenerateWsdlClassFile(true);
		$w->setOptionSendArrayAsParameter(true);
		$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
		$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
		echo "\r\n$serviceName\r\n";
		$w->generateClasses('RF' . $serviceName,dirname(__FILE__) . '/samples/restful-' . strtolower($serviceName) . '/');
	}
}
/**
 * ConeSearchWS
 */
if(false)
{
	$w = new WsdlToPhp('http://skyserver.sdss.org/vo/dr2cone/sdssconesearch.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('ConeSearch',dirname(__FILE__) . '/samples/cone-search/');
}
/**
 * Science Search Service
 */
if(false)
{
	$w = new WsdlToPhp('http://www.science.gov/strata_scigov/services/searchService.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('ScienceGovSearch',dirname(__FILE__) . '/samples/science-gov-search/');
}
/**
 * Magento : Axiom Telecom Staging
 */
if(false)
{
	$w = new WsdlToPhp(__DIR__ . '/axiomtelecomstaging.xml');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('AxiomTelecomStaging',dirname(__FILE__) . '/samples/axiom-telecom-staging/');
}
/**
 * http://schemas.xmlsoap.org/soap/encoding/
 */
if(false)
{
	$w = new WsdlToPhp('http://schemas.xmlsoap.org/soap/encoding/');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Schemas',dirname(__FILE__) . '/samples/schemas/');
}
/**
 * Konakart
 */
if(false)
{
	$w = new WsdlToPhp('http://www.konakart.com/konakart/services/KKWebServiceEng?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Konakart',dirname(__FILE__) . '/samples/Konakart/');
}
/**
 * AmeriCommerce
 */
if(false)
{
	$w = new WsdlToPhp('https://americommerce.com/store/ws/AmeriCommerceDb.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('AmeriCommerce',dirname(__FILE__) . '/samples/ameri-commerce/');
}
/**
 * Sushi
 */
if(false)
{
	$w = new WsdlToPhp('http://up2.in.revues.org/~durand/statsedito/sushi/counter_sushi.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Sushi',dirname(__FILE__) . '/samples/sushi_/');
}
/**
 * Sushi
 */
if(false)
{
	$w = new WsdlToPhp(__DIR__ . '/wsdl_01112012.xml');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Wsdl',dirname(__FILE__) . '/samples/wsdl/');
}
/**
 * https://api.authorize.net/soap/v1/Service.asmx?WSDL
 */
if(false)
{
	$w = new WsdlToPhp('https://api.authorize.net/soap/v1/Service.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Authorize',dirname(__FILE__) . '/samples/authorize/');
}
/**
 * https://moa.mazdaeur.com/mud-services/ws/PartnerService?wsdl 
 */
if(false)
{
	$w = new WsdlToPhp('https://moa.mazdaeur.com/mud-services/ws/PartnerService?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Mazda',dirname(__FILE__) . '/samples/mazda/');
}
/**
 * https://www.mygate.co.za/enterprise/4x0x0/ePayService.cfc?wsdl
 */
if(false)
{
	$w = new WsdlToPhp('https://www.mygate.co.za/enterprise/4x0x0/ePayService.cfc?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionSendParametersAsArray(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('MyGate',dirname(__FILE__) . '/samples/mygate/');
}
/**
 * Enumeratio with integers
 * http://www.wsdltophp.com/var/wsdltophp.com/storage/wsdls/970208c6e378d60c44668e0851956443/wsdl.xml
 */
if(false)
{
	$w = new WsdlToPhp('http://www.wsdltophp.com/var/wsdltophp.com/storage/wsdls/970208c6e378d60c44668e0851956443/wsdl.xml');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionSendParametersAsArray(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('NeCom',dirname(__FILE__) . '/samples/necom/');
}
/**
 * https://services.pwsdemo.com/CreditCardTransactionService.svc?wsdl
 */
if(false)
{
	$w = new WsdlToPhp('https://services.pwsdemo.com/CreditCardTransactionService.svc?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionSendParametersAsArray(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('CreditCardTransaction',dirname(__FILE__) . '/samples/CreditCardTransaction/');
}
/**
 * 
 */
if(false)
{
	$w = new WsdlToPhp(__DIR__ . '/wsdl_14112012.xml');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionSendParametersAsArray(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Ip',dirname(__FILE__) . '/samples/ip/');
}
/**
 * http://api.ean.com/ean-services/ws/hotel/v3?wsdl&apiKey=6qsezn6f5mjxw6k3zgv9msnu
 */
if(false)
{
	$w = new WsdlToPhp('http://api.ean.com/ean-services/ws/hotel/v3?wsdl&apiKey=6qsezn6f5mjxw6k3zgv9msnu');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionSendParametersAsArray(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('Hotel',dirname(__FILE__) . '/samples/Hotel/');
}
/**
 * http://partners.a2zinc.net/dataservices/public/exhibitorprovider.asmx?WSDL
 */
if(false)
{
	$w = new WsdlToPhp('http://partners.a2zinc.net/dataservices/public/exhibitorprovider.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('a2zinc',dirname(__FILE__) . '/samples/a2zinc/');
}
/**
 * http://www.kalaninformatique.fr/test/wsdl/books.wsdl
 */
if(false)
{
	$w = new WsdlToPhp('http://www.kalaninformatique.fr/test/wsdl/books.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('books',dirname(__FILE__) . '/samples/books/');
}
/**
 * http://www.joelhainley.com/examples/soap/scramble.wsdl
 */
if(false)
{
	$w = new WsdlToPhp('http://www.joelhainley.com/examples/soap/scramble.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('scramble',dirname(__FILE__) . '/samples/scramble/');
}
/**
 * http://api.temando.com/schema/2009_06/server.wsdl
 */
if(false)
{
	$w = new WsdlToPhp('http://api.temando.com/schema/2009_06/server.wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('temando',dirname(__FILE__) . '/samples/temando/');
}
/**
 * http://api.myngp.com/Contact.svc?wsdl
 */
if(false)
{
	$w = new WsdlToPhp('http://api.myngp.com/Contact.svc?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('contact',dirname(__FILE__) . '/samples/contact/');
}
/**
 * http://api.fromdoppler.com/Default.asmx?WSDL
 */
if(false)
{
	$w = new WsdlToPhp('http://api.fromdoppler.com/Default.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('doppler',dirname(__FILE__) . '/samples/doppler/');
}
/**
 * https://apps.vinmanager.com/CarDashboard/services/DealService.asmx?WSDL
 */
if(false)
{
	$w = new WsdlToPhp('https://apps.vinmanager.com/CarDashboard/services/DealService.asmx?WSDL');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('DealService',dirname(__FILE__) . '/samples/DealService/');
}
/**
 * http://secapp.euroconsumers.org/partnerservice/PartnerService.svc?wsdl
 */
if(true)
{
	$w = new WsdlToPhp('http://secapp.euroconsumers.org/partnerservice/PartnerService.svc?wsdl');
	$w->setOptionGenerateAutoloadFile(true);
	$w->setOptionGenerateWsdlClassFile(true);
	$w->setOptionSendArrayAsParameter(true);
	$w->setOptionGenerateTutorialFile(true);
	$w->setOptionCategory(WsdlToPhp::OPT_CAT_START_NAME);
	$w->setOptionSubCategory(WsdlToPhp::OPT_SUB_CAT_END_NAME);
	$w->generateClasses('PartnerService',dirname(__FILE__) . '/samples/PartnerService/');
}
?>