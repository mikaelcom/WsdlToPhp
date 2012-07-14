<?php
/**
 * Class file for PayPalTypeRefundSourceCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRefundSourceCodeType
 * @date 14/07/2012
 */
class PayPalTypeRefundSourceCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'any'
	 * @return string 'any'
	 */
	const VALUE_ANY = 'any';
	/**
	 * Constant for value 'default'
	 * @return string 'default'
	 */
	const VALUE_DEFAULT = 'default';
	/**
	 * Constant for value 'instant'
	 * @return string 'instant'
	 */
	const VALUE_INSTANT = 'instant';
	/**
	 * Constant for value 'echeck'
	 * @return string 'echeck'
	 */
	const VALUE_ECHECK = 'echeck';
	/**
	 * Constructor
	 * @return PayPalTypeRefundSourceCodeType
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
		return in_array($_value,array(self::VALUE_ANY,self::VALUE_DEFAULT,self::VALUE_INSTANT,self::VALUE_ECHECK));
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