<?php
/**
 * Class file for PayPalTypePaymentTransactionStatusCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentTransactionStatusCodeType
 * @date 14/07/2012
 */
class PayPalTypePaymentTransactionStatusCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Pending'
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'Processing'
	 * @return string 'Processing'
	 */
	const VALUE_PROCESSING = 'Processing';
	/**
	 * Constant for value 'Success'
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Denied'
	 * @return string 'Denied'
	 */
	const VALUE_DENIED = 'Denied';
	/**
	 * Constant for value 'Reversed'
	 * @return string 'Reversed'
	 */
	const VALUE_REVERSED = 'Reversed';
	/**
	 * Constructor
	 * @return PayPalTypePaymentTransactionStatusCodeType
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
		return in_array($_value,array(self::VALUE_PENDING,self::VALUE_PROCESSING,self::VALUE_SUCCESS,self::VALUE_DENIED,self::VALUE_REVERSED));
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