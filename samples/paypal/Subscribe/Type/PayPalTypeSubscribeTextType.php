<?php
/**
 * Class file for PayPalTypeSubscribeTextType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSubscribeTextType
 * @date 14/07/2012
 */
class PayPalTypeSubscribeTextType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'BUYNOW'
	 * Meta informations :
	 * 	- documentation : button wording is BUYNOW
	 * @return string 'BUYNOW'
	 */
	const VALUE_BUYNOW = 'BUYNOW';
	/**
	 * Constant for value 'SUBSCRIBE'
	 * Meta informations :
	 * 	- documentation : button wording is SUBSCRIBE
	 * @return string 'SUBSCRIBE'
	 */
	const VALUE_SUBSCRIBE = 'SUBSCRIBE';
	/**
	 * Constructor
	 * @return PayPalTypeSubscribeTextType
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
		return in_array($_value,array(self::VALUE_BUYNOW,self::VALUE_SUBSCRIBE));
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