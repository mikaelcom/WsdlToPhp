<?php
/**
 * AutoloadFile 
 * @date 02/07/2012
 */
/**
 * AutoloadFile
 * @date 02/07/2012
 */
require_once dirname(__FILE__) . '/CdyneAddressWsdlClass.php';
require_once dirname(__FILE__) . '/Standardized/Address/CdyneAddressTypeStandardizedAddress.php';
require_once dirname(__FILE__) . '/Address/CdyneAddressTypeAddress.php';
require_once dirname(__FILE__) . '/Standardized/Response/CdyneAddressTypeStandardizedAddressResponse.php';
require_once dirname(__FILE__) . '/Advanced/Standardization/CdyneAddressTypeAdvancedStandardization.php';
require_once dirname(__FILE__) . '/Advanced/Response/CdyneAddressTypeAdvancedStandardizationResponse.php';
require_once dirname(__FILE__) . '/Array/Type/CdyneAddressTypeArrayOfAnyType.php';
require_once dirname(__FILE__) . '/Return/State/CdyneAddressTypeReturnCityState.php';
require_once dirname(__FILE__) . '/Return/Response/CdyneAddressTypeReturnCityStateResponse.php';
require_once dirname(__FILE__) . '/Barcode/URL/CdyneAddressTypeBarcodeFontURL.php';
require_once dirname(__FILE__) . '/Barcode/Response/CdyneAddressTypeBarcodeFontURLResponse.php';
require_once dirname(__FILE__) . '/CC/Check/CdyneAddressTypeCCServerCheck.php';
require_once dirname(__FILE__) . '/CC/Response/CdyneAddressTypeCCServerCheckResponse.php';
require_once dirname(__FILE__) . '/Check/Address/CdyneAddressTypeCheckAddress.php';
require_once dirname(__FILE__) . '/Check/Response/CdyneAddressTypeCheckAddressResponse.php';
require_once dirname(__FILE__) . '/Check/W2lines/CdyneAddressTypeCheckAddressW2lines.php';
require_once dirname(__FILE__) . '/Check/Response/CdyneAddressTypeCheckAddressW2linesResponse.php';
require_once dirname(__FILE__) . '/Advanced/Address/CdyneAddressTypeAdvancedCheckAddress.php';
require_once dirname(__FILE__) . '/Advanced/Response/CdyneAddressTypeAdvancedCheckAddressResponse.php';
require_once dirname(__FILE__) . '/Version/Information/CdyneAddressTypeVersionInformation.php';
require_once dirname(__FILE__) . '/Version/Response/CdyneAddressTypeVersionInformationResponse.php';
require_once dirname(__FILE__) . '/Calculate/Miles/CdyneAddressTypeCalculateDistanceInMiles.php';
require_once dirname(__FILE__) . '/Calculate/Response/CdyneAddressTypeCalculateDistanceInMilesResponse.php';
require_once dirname(__FILE__) . '/Alternate/Cities/CdyneAddressTypeAlternateCities.php';
require_once dirname(__FILE__) . '/Alternate/Response/CdyneAddressTypeAlternateCitiesResponse.php';
require_once dirname(__FILE__) . '/City/Matcher/CdyneAddressTypeCityStateToZipCodeMatcher.php';
require_once dirname(__FILE__) . '/City/Response/CdyneAddressTypeCityStateToZipCodeMatcherResponse.php';
require_once dirname(__FILE__) . '/Get/Zip/CdyneAddressTypeGetCongressionalDistrictByZip.php';
require_once dirname(__FILE__) . '/Get/Response/CdyneAddressTypeGetCongressionalDistrictByZipResponse.php';
require_once dirname(__FILE__) . '/Standardized/CdyneAddressServiceStandardized.php';
require_once dirname(__FILE__) . '/Advanced/CdyneAddressServiceAdvanced.php';
require_once dirname(__FILE__) . '/Return/CdyneAddressServiceReturn.php';
require_once dirname(__FILE__) . '/Barcode/CdyneAddressServiceBarcode.php';
require_once dirname(__FILE__) . '/CC/CdyneAddressServiceCC.php';
require_once dirname(__FILE__) . '/Check/CdyneAddressServiceCheck.php';
require_once dirname(__FILE__) . '/Version/CdyneAddressServiceVersion.php';
require_once dirname(__FILE__) . '/Calculate/CdyneAddressServiceCalculate.php';
require_once dirname(__FILE__) . '/Alternate/CdyneAddressServiceAlternate.php';
require_once dirname(__FILE__) . '/City/CdyneAddressServiceCity.php';
require_once dirname(__FILE__) . '/Get/CdyneAddressServiceGet.php';
require_once dirname(__FILE__) . '/CdyneAddressClassMap.php';
?>