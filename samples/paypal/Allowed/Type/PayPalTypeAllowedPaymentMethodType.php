<?php
/**
 * Class file for PayPalTypeAllowedPaymentMethodType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAllowedPaymentMethodType
 * @date 14/07/2012
 */
class PayPalTypeAllowedPaymentMethodType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Default'
	 * @return string 'Default'
	 */
	const VALUE_DEFAULT = 'Default';
	/**
	 * Constant for value 'InstantPaymentOnly'
	 * @return string 'InstantPaymentOnly'
	 */
	const VALUE_INSTANTPAYMENTONLY = 'InstantPaymentOnly';
	/**
	 * Constant for value 'AnyFundingSource'
	 * @return string 'AnyFundingSource'
	 */
	const VALUE_ANYFUNDINGSOURCE = 'AnyFundingSource';
	/**
	 * Constant for value 'InstantFundingSource'
	 * @return string 'InstantFundingSource'
	 */
	const VALUE_INSTANTFUNDINGSOURCE = 'InstantFundingSource';
	/**
	 * Constructor
	 * @return PayPalTypeAllowedPaymentMethodType
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
		return in_array($_value,array(self::VALUE_DEFAULT,self::VALUE_INSTANTPAYMENTONLY,self::VALUE_ANYFUNDINGSOURCE,self::VALUE_INSTANTFUNDINGSOURCE));
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