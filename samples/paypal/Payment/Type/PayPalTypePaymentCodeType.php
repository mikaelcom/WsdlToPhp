<?php
/**
 * Class file for PayPalTypePaymentCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentCodeType
 * @date 14/07/2012
 */
class PayPalTypePaymentCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'echeck'
	 * @return string 'echeck'
	 */
	const VALUE_ECHECK = 'echeck';
	/**
	 * Constant for value 'instant'
	 * @return string 'instant'
	 */
	const VALUE_INSTANT = 'instant';
	/**
	 * Constructor
	 * @return PayPalTypePaymentCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ECHECK,self::VALUE_INSTANT));
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