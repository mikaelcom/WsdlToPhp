<?php
/**
 * Class file for PayPalTypeButtonSubTypeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeButtonSubTypeType
 * @date 14/07/2012
 */
class PayPalTypeButtonSubTypeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'PRODUCTS'
	 * Meta informations :
	 * 	- documentation : button subtype is PRODUCTS
	 * @return string 'PRODUCTS'
	 */
	const VALUE_PRODUCTS = 'PRODUCTS';
	/**
	 * Constant for value 'SERVICES'
	 * Meta informations :
	 * 	- documentation : button subtype is SERVICES
	 * @return string 'SERVICES'
	 */
	const VALUE_SERVICES = 'SERVICES';
	/**
	 * Constructor
	 * @return PayPalTypeButtonSubTypeType
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
		return in_array($_value,array(self::VALUE_PRODUCTS,self::VALUE_SERVICES));
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