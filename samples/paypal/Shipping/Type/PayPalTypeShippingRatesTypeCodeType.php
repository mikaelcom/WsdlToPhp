<?php
/**
 * Class file for PayPalTypeShippingRatesTypeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingRatesTypeCodeType
 * @date 14/07/2012
 */
class PayPalTypeShippingRatesTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Flat'
	 * Meta informations :
	 * 	- documentation : Flat shipping rate.
	 * @return string 'Flat'
	 */
	const VALUE_FLAT = 'Flat';
	/**
	 * Constant for value 'Calculated'
	 * Meta informations :
	 * 	- documentation : Calculated shipping rate.
	 * @return string 'Calculated'
	 */
	const VALUE_CALCULATED = 'Calculated';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeShippingRatesTypeCodeType
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
		return in_array($_value,array(self::VALUE_FLAT,self::VALUE_CALCULATED,self::VALUE_CUSTOMCODE));
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