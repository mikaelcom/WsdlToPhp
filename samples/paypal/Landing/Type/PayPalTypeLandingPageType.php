<?php
/**
 * Class file for PayPalTypeLandingPageType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeLandingPageType
 * @date 14/07/2012
 */
class PayPalTypeLandingPageType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Login'
	 * @return string 'Login'
	 */
	const VALUE_LOGIN = 'Login';
	/**
	 * Constant for value 'Billing'
	 * @return string 'Billing'
	 */
	const VALUE_BILLING = 'Billing';
	/**
	 * Constructor
	 * @return PayPalTypeLandingPageType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_LOGIN,self::VALUE_BILLING));
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