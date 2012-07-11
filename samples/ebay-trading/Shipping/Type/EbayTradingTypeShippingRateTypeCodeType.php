<?php
/**
 * Class file for EbayTradingTypeShippingRateTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingRateTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShippingRateTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'OnDemand'
	 * Meta informations :
	 * 	- documentation : "On-demand" shipping rate scale.
	 * @return string 'OnDemand'
	 */
	const VALUE_ONDEMAND = 'OnDemand';
	/**
	 * Constant for value 'DailyPickup'
	 * Meta informations :
	 * 	- documentation : "Daily pickup" shipping rate scale.
	 * @return string 'DailyPickup'
	 */
	const VALUE_DAILYPICKUP = 'DailyPickup';
	/**
	 * Constant for value 'StandardList'
	 * Meta informations :
	 * 	- documentation : "Standard List" shipping rate scale.
	 * @return string 'StandardList'
	 */
	const VALUE_STANDARDLIST = 'StandardList';
	/**
	 * Constant for value 'Counter'
	 * Meta informations :
	 * 	- documentation : "Counter" shipping rate scale.
	 * @return string 'Counter'
	 */
	const VALUE_COUNTER = 'Counter';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeShippingRateTypeCodeType
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
		return in_array($_value,array(self::VALUE_ONDEMAND,self::VALUE_DAILYPICKUP,self::VALUE_STANDARDLIST,self::VALUE_COUNTER,self::VALUE_CUSTOMCODE));
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