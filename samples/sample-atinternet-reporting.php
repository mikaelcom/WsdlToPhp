<?php
/**
 * Test with AT Internet WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/atinternet-reporting/ATReportingAutoload.php';
/**
 * AT Internet API Informations
 */
define('AT_REPORTING_WSDL','http://api.atinternet-solutions.com/toolbox/reporting.asmx?WSDL');
define('AT_REPORTING_GUID','********-****-****-****-************');
define('AT_SECURITY_KEY','***************');
define('AT_SITE_ID','******');
/**
 * init
 */
$h = new ATReportingTypeNXHeader(AT_REPORTING_GUID,AT_SECURITY_KEY,AT_SITE_ID);
$header = new SoapHeader('http://www.xiti.com/','NXHeader',$h,false);
$a = new ATReportingServiceGet(array(
									ATReportingWsdlClass::WSDL_URL=>AT_REPORTING_WSDL));
ATReportingWsdlClass::getSoapClient()->__setSoapHeaders($header);
/**
 * call for getLastMinute
 */
$a->getLastMinute(new ATReportingTypeGetLastMinute(ATReportingTypePTRFormat::VALUE_NONE));
print_r($a->getResult());
/**
 * call for getLevel2Sites
 */
$a->getLevel2Sites(new ATReportingTypeGetLevel2Sites());
print_r($a->getResult());
?>