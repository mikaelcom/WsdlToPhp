<?php
/**
 * Class file for PayPalTypeFailedPaymentActionType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFailedPaymentActionType
 * @date 14/07/2012
 */
class PayPalTypeFailedPaymentActionType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'CancelOnFailure'
	 * @return string 'CancelOnFailure'
	 */
	const VALUE_CANCELONFAILURE = 'CancelOnFailure';
	/**
	 * Constant for value 'ContinueOnFailure'
	 * @return string 'ContinueOnFailure'
	 */
	const VALUE_CONTINUEONFAILURE = 'ContinueOnFailure';
	/**
	 * Constructor
	 * @return PayPalTypeFailedPaymentActionType
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
		return in_array($_value,array(self::VALUE_CANCELONFAILURE,self::VALUE_CONTINUEONFAILURE));
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