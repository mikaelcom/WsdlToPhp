<?php
/**
 * Class file for PayPalTypeAddressStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAddressStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypeAddressStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Confirmed'
	 * @return string 'Confirmed'
	 */
	const VALUE_CONFIRMED = 'Confirmed';
	/**
	 * Constant for value 'Unconfirmed'
	 * @return string 'Unconfirmed'
	 */
	const VALUE_UNCONFIRMED = 'Unconfirmed';
	/**
	 * Constructor
	 * @return PayPalTypeAddressStatusCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_CONFIRMED,self::VALUE_UNCONFIRMED));
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