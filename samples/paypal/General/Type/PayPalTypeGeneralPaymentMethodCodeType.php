<?php
/**
 * Class file for PayPalTypeGeneralPaymentMethodCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGeneralPaymentMethodCodeType
 * @date 14/07/2012
 */
class PayPalTypeGeneralPaymentMethodCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Custom Code
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'Echeck'
	 * Meta informations :
	 * 	- documentation : Electronic check.
	 * @return string 'Echeck'
	 */
	const VALUE_ECHECK = 'Echeck';
	/**
	 * Constant for value 'ACH'
	 * Meta informations :
	 * 	- documentation : ACH.
	 * @return string 'ACH'
	 */
	const VALUE_ACH = 'ACH';
	/**
	 * Constant for value 'Creditcard'
	 * Meta informations :
	 * 	- documentation : Credit-card.
	 * @return string 'Creditcard'
	 */
	const VALUE_CREDITCARD = 'Creditcard';
	/**
	 * Constant for value 'PayPalBalance'
	 * Meta informations :
	 * 	- documentation : Pay balance.
	 * @return string 'PayPalBalance'
	 */
	const VALUE_PAYPALBALANCE = 'PayPalBalance';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeGeneralPaymentMethodCodeType
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
		return in_array($_value,array(self::VALUE_OTHER,self::VALUE_ECHECK,self::VALUE_ACH,self::VALUE_CREDITCARD,self::VALUE_PAYPALBALANCE,self::VALUE_CUSTOMCODE));
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