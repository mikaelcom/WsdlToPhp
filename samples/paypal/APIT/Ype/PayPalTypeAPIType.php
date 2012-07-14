<?php
/**
 * Class file for PayPalTypeAPIType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAPIType
 * @date 14/07/2012
 */
class PayPalTypeAPIType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CHECKOUT_AUTHORIZATION'
	 * Meta informations :
	 * 	- documentation : POS CHECKOUT AUTHORIZATION
	 * @return string 'CHECKOUT_AUTHORIZATION'
	 */
	const VALUE_CHECKOUT_AUTHORIZATION = 'CHECKOUT_AUTHORIZATION';
	/**
	 * Constant for value 'CHECKOUT_SALE'
	 * Meta informations :
	 * 	- documentation : POS CHECKOUT SALE
	 * @return string 'CHECKOUT_SALE'
	 */
	const VALUE_CHECKOUT_SALE = 'CHECKOUT_SALE';
	/**
	 * Constructor
	 * @return PayPalTypeAPIType
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
		return in_array($_value,array(self::VALUE_CHECKOUT_AUTHORIZATION,self::VALUE_CHECKOUT_SALE));
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