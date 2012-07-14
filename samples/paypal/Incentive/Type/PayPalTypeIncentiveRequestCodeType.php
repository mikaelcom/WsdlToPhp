<?php
/**
 * Class file for PayPalTypeIncentiveRequestCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveRequestCodeType
 * @date 14/07/2012
 */
class PayPalTypeIncentiveRequestCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'InCheckout'
	 * @return string 'InCheckout'
	 */
	const VALUE_INCHECKOUT = 'InCheckout';
	/**
	 * Constant for value 'PreCheckout'
	 * @return string 'PreCheckout'
	 */
	const VALUE_PRECHECKOUT = 'PreCheckout';
	/**
	 * Constructor
	 * @return PayPalTypeIncentiveRequestCodeType
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
		return in_array($_value,array(self::VALUE_INCHECKOUT,self::VALUE_PRECHECKOUT));
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