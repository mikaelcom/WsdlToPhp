<?php
/**
 * Test with CDYNE Address WSDL
 * @date 01/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-address/CdyneAddressAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY',0);
define('CDYNE_WSDL','http://ws.cdyne.com/psaddress/addresslookup.asmx?wsdl');
/**
 * init
 */
$wsdl = array(
			CdyneAddressWsdlClass::WSDL_URL=>CDYNE_WSDL);
$c = new CdyneAddressServiceCheck($wsdl);
/**
 * Address
 */
$c->CheckAddress(new CdyneAddressTypeCheckAddress('1 Avenue Dutuit','75008','Paris',null,CDYNE_KEY));
print_r($c);
/**
 * City
 */
$c = new CdyneAddressServiceCity($wsdl);
$c->CityStateToZipCodeMatcher(new CdyneAddressTypeCityStateToZipCodeMatcher('Paris',null,null,CDYNE_KEY));
print_r($c);
?>