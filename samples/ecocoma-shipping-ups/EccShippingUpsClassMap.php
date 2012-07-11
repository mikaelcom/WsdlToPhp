<?php
/**
 * ClassMap 
 * @date 03/07/2012
 */
/**
 * ClassMap
 * @date 03/07/2012
 */
class EccShippingUpsClassMap
{
	final public static function classMap()
	{
		return array (
  'GetUPSRate' => 'EccShippingUpsTypeGetUPSRate',
  'GetUPSRateResponse' => 'EccShippingUpsTypeGetUPSRateResponse',
  'Shipping' => 'EccShippingUpsTypeShipping',
  'ArrayOfPostage' => 'EccShippingUpsTypeArrayOfPostage',
  'Postage' => 'EccShippingUpsTypePostage',
  'GetExtendedUPSRate' => 'EccShippingUpsTypeGetExtendedUPSRate',
  'Options' => 'EccShippingUpsTypeOptions',
  'GetExtendedUPSRateResponse' => 'EccShippingUpsTypeGetExtendedUPSRateResponse',
);
	}
}
?>