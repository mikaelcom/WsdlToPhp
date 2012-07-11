<?php
/**
 * Test with CDYNE International Address WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/cdyne-international-address/CdyneIntAddressAutoload.php';
/**
 * CDYNE Informations
 */
define('CDYNE_KEY','F01d89fd-5155-5455-5585-e84ab8de8591');
define('CDYNE_WSDL','http://pav3.cdyne.com/i/PavInternationalService.svc?wsdl');
/**
 * init
 */
$wsdl = array(
			CdyneIntAddressWsdlClass::WSDL_URL=>CDYNE_WSDL);
$c = new CdyneIntAddressServiceVerify($wsdl);
/**
 * Address
 */
$address = new CdyneIntAddressTypeArrayOfKeyValue();
$address->add(new CdyneIntAddressTypeKeyValue('Via del Governo Vecchio, 114, 00186 Roma, Italy'));
$return = new CdyneIntAddressTypeArrayOfstring();
$return->add('ADDR');
$return->add('RESCODE');
$return->add('OUTPUTSTATUS');
$return->add('ORGANISATION');
$return->add('BUILDINGNUMBER');
$return->add('BUILDINGNAME');
$return->add('SUBBUILDING');
$return->add('STREET');
$return->add('DEPSTREET');
$return->add('LOCALITY');
$return->add('DEPLOCALITY');
$return->add('POSTTOWN');
$return->add('COUNTY');
$return->add('POSTCODE');
$return->add('COUNTRY');
$return->add('COUNTRYCODE');
$return->add('MATCHLVL');
$c->VerifyAddressInternational(new CdyneIntAddressTypeVerifyAddressInternational(new CdyneIntAddressTypeAddressInternationalRequest($address->toSend(),CDYNE_KEY,$return->toSend(),true)));
print_r($c->getSoapClient());
?>