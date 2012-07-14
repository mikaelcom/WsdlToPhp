<?php
/**
 * Class file for PayPalTypeDyneticClientType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDyneticClientType
 * @date 14/07/2012
 */
class PayPalTypeDyneticClientType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'none'
	 * @return string 'none'
	 */
	const VALUE_NONE = 'none';
	/**
	 * Constant for value 'WAP'
	 * @return string 'WAP'
	 */
	const VALUE_WAP = 'WAP';
	/**
	 * Constant for value 'J2MEClient'
	 * @return string 'J2MEClient'
	 */
	const VALUE_J2MECLIENT = 'J2MEClient';
	/**
	 * Constructor
	 * @return PayPalTypeDyneticClientType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_WAP,self::VALUE_J2MECLIENT));
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