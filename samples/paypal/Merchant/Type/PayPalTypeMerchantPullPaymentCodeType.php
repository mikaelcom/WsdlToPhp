<?php
/**
 * Class file for PayPalTypeMerchantPullPaymentCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMerchantPullPaymentCodeType
 * @date 14/07/2012
 */
class PayPalTypeMerchantPullPaymentCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Any'
	 * @return string 'Any'
	 */
	const VALUE_ANY = 'Any';
	/**
	 * Constant for value 'InstantOnly'
	 * @return string 'InstantOnly'
	 */
	const VALUE_INSTANTONLY = 'InstantOnly';
	/**
	 * Constant for value 'EcheckOnly'
	 * @return string 'EcheckOnly'
	 */
	const VALUE_ECHECKONLY = 'EcheckOnly';
	/**
	 * Constructor
	 * @return PayPalTypeMerchantPullPaymentCodeType
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
		return in_array($_value,array(self::VALUE_ANY,self::VALUE_INSTANTONLY,self::VALUE_ECHECKONLY));
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