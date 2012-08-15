<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFUSAZipCodeClassMap
{
	final public static function classMap()
	{
		return array (
  'PostalCode' => 'RFUSAZipCodeTypePostalCode',
  'GetPostCodeDetailByPostCode' => 'RFUSAZipCodeTypeGetPostCodeDetailByPostCode',
  'GetPostCodeDetailByPostCodeResponse' => 'RFUSAZipCodeTypeGetPostCodeDetailByPostCodeResponse',
  'GetPostCodeDetailsByPlaceName' => 'RFUSAZipCodeTypeGetPostCodeDetailsByPlaceName',
  'GetPostCodeDetailsByPlaceNameResponse' => 'RFUSAZipCodeTypeGetPostCodeDetailsByPlaceNameResponse',
  'DefaultFaultContract' => 'RFUSAZipCodeTypeDefaultFaultContract',
  'char' => 'RFUSAZipCodeTypeChar',
  'duration' => 'RFUSAZipCodeTypeDuration',
  'guid' => 'RFUSAZipCodeTypeGuid',
);
	}
}
?>