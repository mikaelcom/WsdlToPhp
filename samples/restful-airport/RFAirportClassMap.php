<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFAirportClassMap
{
	final public static function classMap()
	{
		return array (
  'Airport' => 'RFAirportTypeAirport',
  'GetDetailsByCity' => 'RFAirportTypeGetDetailsByCity',
  'GetDetailsByCityResponse' => 'RFAirportTypeGetDetailsByCityResponse',
  'GetDetailsByAirportName' => 'RFAirportTypeGetDetailsByAirportName',
  'GetDetailsByAirportNameResponse' => 'RFAirportTypeGetDetailsByAirportNameResponse',
  'GetDetailsByICAOCode' => 'RFAirportTypeGetDetailsByICAOCode',
  'GetDetailsByICAOCodeResponse' => 'RFAirportTypeGetDetailsByICAOCodeResponse',
  'GetDetailsByIATACode' => 'RFAirportTypeGetDetailsByIATACode',
  'GetDetailsByIATACodeResponse' => 'RFAirportTypeGetDetailsByIATACodeResponse',
  'DefaultFaultContract' => 'RFAirportTypeDefaultFaultContract',
  'char' => 'RFAirportTypeChar',
  'duration' => 'RFAirportTypeDuration',
  'guid' => 'RFAirportTypeGuid',
);
	}
}
?>