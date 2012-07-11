<?php
/**
 * Test with CDYNE Demographics Query WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-demographics-query/CdyneDemographicsQAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://ws.cdyne.com/DemographixWS/DemographixQuery.asmx?wsdl');
/**
 * Demographics
 */
$d = new CdyneDemographicsQServiceGet(array(
											CdyneDemographicsQWsdlClass::WSDL_URL=>CDYNE_WSDL));
$d->GetLocationInformationByAddress(new CdyneDemographicsQTypeGetLocationInformationByAddress('2125 Smith Ave','Chesapeake','VA','23320',CDYNE_KEY));
print_r($d);
?>