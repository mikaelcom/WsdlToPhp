<?php
/**
 * Class file for PayPalTypePayPalUserStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePayPalUserStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypePayPalUserStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'verified'
	 * @return string 'verified'
	 */
	const VALUE_VERIFIED = 'verified';
	/**
	 * Constant for value 'unverified'
	 * @return string 'unverified'
	 */
	const VALUE_UNVERIFIED = 'unverified';
	/**
	 * Constructor
	 * @return PayPalTypePayPalUserStatusCodeType
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
		return in_array($_value,array(self::VALUE_VERIFIED,self::VALUE_UNVERIFIED));
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