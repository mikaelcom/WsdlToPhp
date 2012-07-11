<?php
/**
 * ClassMap 
 * @date 03/07/2012
 */
/**
 * ClassMap
 * @date 03/07/2012
 */
class EccShippingFedexClassMap
{
	final public static function classMap()
	{
		return array (
  'GetFedExRate' => 'EccShippingFedexTypeGetFedExRate',
  'GetFedExRateResponse' => 'EccShippingFedexTypeGetFedExRateResponse',
  'Shipping' => 'EccShippingFedexTypeShipping',
  'ArrayOfPostage' => 'EccShippingFedexTypeArrayOfPostage',
  'Postage' => 'EccShippingFedexTypePostage',
  'GetExtendedFedExRate' => 'EccShippingFedexTypeGetExtendedFedExRate',
  'Options' => 'EccShippingFedexTypeOptions',
  'GetExtendedFedExRateResponse' => 'EccShippingFedexTypeGetExtendedFedExRateResponse',
);
	}
}
?>