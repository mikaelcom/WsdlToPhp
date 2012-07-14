<?php
/**
 * Class file for PayPalTypeButtonStatusType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeButtonStatusType
 * @date 14/07/2012
 */
class PayPalTypeButtonStatusType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'DELETE'
	 * Meta informations :
	 * 	- documentation : Changes Button Status to DELETE
	 * @return string 'DELETE'
	 */
	const VALUE_DELETE = 'DELETE';
	/**
	 * Constructor
	 * @return PayPalTypeButtonStatusType
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
		return in_array($_value,array(self::VALUE_DELETE));
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