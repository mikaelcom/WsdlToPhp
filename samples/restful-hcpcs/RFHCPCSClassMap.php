<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class RFHCPCSClassMap
{
	final public static function classMap()
	{
		return array (
  'HCPCS' => 'RFHCPCSTypeHCPCS',
  'ArrayOfHCPCS' => 'RFHCPCSTypeArrayOfHCPCS',
  'GetDetailsByCode' => 'RFHCPCSTypeGetDetailsByCode',
  'GetDetailsByCodeResponse' => 'RFHCPCSTypeGetDetailsByCodeResponse',
  'GetDetailsByDescription' => 'RFHCPCSTypeGetDetailsByDescription',
  'GetDetailsByDescriptionResponse' => 'RFHCPCSTypeGetDetailsByDescriptionResponse',
  'GetDetailsBySeqNmber' => 'RFHCPCSTypeGetDetailsBySeqNmber',
  'GetDetailsBySeqNmberResponse' => 'RFHCPCSTypeGetDetailsBySeqNmberResponse',
  'DefaultFaultContract' => 'RFHCPCSTypeDefaultFaultContract',
  'char' => 'RFHCPCSTypeChar',
  'duration' => 'RFHCPCSTypeDuration',
  'guid' => 'RFHCPCSTypeGuid',
);
	}
}
?>