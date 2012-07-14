<?php
/**
 * Class file for PayPalTypeTransactionEntityType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTransactionEntityType
 * @date 14/07/2012
 */
class PayPalTypeTransactionEntityType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Auth'
	 * @return string 'Auth'
	 */
	const VALUE_AUTH = 'Auth';
	/**
	 * Constant for value 'Reauth'
	 * @return string 'Reauth'
	 */
	const VALUE_REAUTH = 'Reauth';
	/**
	 * Constant for value 'Order'
	 * @return string 'Order'
	 */
	const VALUE_ORDER = 'Order';
	/**
	 * Constant for value 'Payment'
	 * @return string 'Payment'
	 */
	const VALUE_PAYMENT = 'Payment';
	/**
	 * Constructor
	 * @return PayPalTypeTransactionEntityType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_AUTH,self::VALUE_REAUTH,self::VALUE_ORDER,self::VALUE_PAYMENT));
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