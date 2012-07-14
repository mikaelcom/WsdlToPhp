<?php
/**
 * Class file for PayPalTypePaymentActionCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentActionCodeType
 * @date 14/07/2012
 */
class PayPalTypePaymentActionCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Authorization'
	 * @return string 'Authorization'
	 */
	const VALUE_AUTHORIZATION = 'Authorization';
	/**
	 * Constant for value 'Sale'
	 * @return string 'Sale'
	 */
	const VALUE_SALE = 'Sale';
	/**
	 * Constant for value 'Order'
	 * @return string 'Order'
	 */
	const VALUE_ORDER = 'Order';
	/**
	 * Constructor
	 * @return PayPalTypePaymentActionCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_AUTHORIZATION,self::VALUE_SALE,self::VALUE_ORDER));
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