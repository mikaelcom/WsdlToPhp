<?php
/**
 * Class file for PayPalTypeBuyNowTextType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBuyNowTextType
 * @date 14/07/2012
 */
class PayPalTypeBuyNowTextType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BUYNOW'
	 * Meta informations :
	 * 	- documentation : button wording is BUYNOW
	 * @return string 'BUYNOW'
	 */
	const VALUE_BUYNOW = 'BUYNOW';
	/**
	 * Constant for value 'PAYNOW'
	 * Meta informations :
	 * 	- documentation : button wording is PAYNOW
	 * @return string 'PAYNOW'
	 */
	const VALUE_PAYNOW = 'PAYNOW';
	/**
	 * Constructor
	 * @return PayPalTypeBuyNowTextType
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
		return in_array($_value,array(self::VALUE_BUYNOW,self::VALUE_PAYNOW));
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