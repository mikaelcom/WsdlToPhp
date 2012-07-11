<?php
/**
 * ClassMap 
 * @date 03/07/2012
 */
/**
 * ClassMap
 * @date 03/07/2012
 */
class EccShippingUspsClassMap
{
	final public static function classMap()
	{
		return array (
  'GetUSPSRate' => 'EccShippingUspsTypeGetUSPSRate',
  'GetUSPSRateResponse' => 'EccShippingUspsTypeGetUSPSRateResponse',
  'Shipping' => 'EccShippingUspsTypeShipping',
  'ArrayOfPostage' => 'EccShippingUspsTypeArrayOfPostage',
  'Postage' => 'EccShippingUspsTypePostage',
  'GetExtendedUSPSRate' => 'EccShippingUspsTypeGetExtendedUSPSRate',
  'Options' => 'EccShippingUspsTypeOptions',
  'GetExtendedUSPSRateResponse' => 'EccShippingUspsTypeGetExtendedUSPSRateResponse',
);
	}
}
?>