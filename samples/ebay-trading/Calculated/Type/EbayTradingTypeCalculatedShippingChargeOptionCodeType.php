<?php
/**
 * Class file for EbayTradingTypeCalculatedShippingChargeOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCalculatedShippingChargeOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCalculatedShippingChargeOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ChargeEachItem'
	 * Meta informations :
	 * 	- documentation : Charge the actual shipping cost and my full packaging and handling fee for each item.
	 * @return string 'ChargeEachItem'
	 */
	const VALUE_CHARGEEACHITEM = 'ChargeEachItem';
	/**
	 * Constant for value 'ChargeEntireOrder'
	 * Meta informations :
	 * 	- documentation : Charge the actual shipping cost and a packaging and handling fee of X amount for the entire order.
	 * @return string 'ChargeEntireOrder'
	 */
	const VALUE_CHARGEENTIREORDER = 'ChargeEntireOrder';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCalculatedShippingChargeOptionCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_CHARGEEACHITEM,self::VALUE_CHARGEENTIREORDER,self::VALUE_CUSTOMCODE));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>