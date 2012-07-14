<?php
/**
 * Class file for PayPalTypeSellerPaymentMethodCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSellerPaymentMethodCodeType
 * @date 14/07/2012
 */
class PayPalTypeSellerPaymentMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : No payment method specified - some other payment method.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Amex'
	 * Meta informations :
	 * 	- documentation : Amex
	 * @return string 'Amex'
	 */
	const VALUE_AMEX = 'Amex';
	/**
	 * Constant for value 'Visa'
	 * Meta informations :
	 * 	- documentation : Visa
	 * @return string 'Visa'
	 */
	const VALUE_VISA = 'Visa';
	/**
	 * Constant for value 'Mastercard'
	 * Meta informations :
	 * 	- documentation : Mastercard
	 * @return string 'Mastercard'
	 */
	const VALUE_MASTERCARD = 'Mastercard';
	/**
	 * Constant for value 'Discover'
	 * Meta informations :
	 * 	- documentation : Discover
	 * @return string 'Discover'
	 */
	const VALUE_DISCOVER = 'Discover';
	/**
	 * Constant for value 'JCB'
	 * Meta informations :
	 * 	- documentation : JCB
	 * @return string 'JCB'
	 */
	const VALUE_JCB = 'JCB';
	/**
	 * Constant for value 'Diners'
	 * Meta informations :
	 * 	- documentation : Diners
	 * @return string 'Diners'
	 */
	const VALUE_DINERS = 'Diners';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeSellerPaymentMethodCodeType
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
		return in_array($_value,array(self::VALUE_OTHER,self::VALUE_AMEX,self::VALUE_VISA,self::VALUE_MASTERCARD,self::VALUE_DISCOVER,self::VALUE_JCB,self::VALUE_DINERS,self::VALUE_CUSTOMCODE));
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