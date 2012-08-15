<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFAustraliaPostalCodeClassMap
{
	final public static function classMap()
	{
		return array (
  'PostalCode' => 'RFAustraliaPostalCodeTypePostalCode',
  'GetPostCodeDetailByPostCode' => 'RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCode',
  'GetPostCodeDetailByPostCodeResponse' => 'RFAustraliaPostalCodeTypeGetPostCodeDetailByPostCodeResponse',
  'GetPostCodeDetailsByPlaceName' => 'RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceName',
  'GetPostCodeDetailsByPlaceNameResponse' => 'RFAustraliaPostalCodeTypeGetPostCodeDetailsByPlaceNameResponse',
  'DefaultFaultContract' => 'RFAustraliaPostalCodeTypeDefaultFaultContract',
  'char' => 'RFAustraliaPostalCodeTypeChar',
  'duration' => 'RFAustraliaPostalCodeTypeDuration',
  'guid' => 'RFAustraliaPostalCodeTypeGuid',
);
	}
}
?>