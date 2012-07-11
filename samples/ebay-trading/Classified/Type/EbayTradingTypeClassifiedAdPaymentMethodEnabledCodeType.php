<?php
/**
 * Class file for EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'EnabledWithCheckout'
	 * Meta informations :
	 * 	- documentation : Display the payment method and permit checkout.
	 * @return string 'EnabledWithCheckout'
	 */
	const VALUE_ENABLEDWITHCHECKOUT = 'EnabledWithCheckout';
	/**
	 * Constant for value 'EnabledWithoutCheckout'
	 * Meta informations :
	 * 	- documentation : Display the payment method and suppress checkout.
	 * @return string 'EnabledWithoutCheckout'
	 */
	const VALUE_ENABLEDWITHOUTCHECKOUT = 'EnabledWithoutCheckout';
	/**
	 * Constant for value 'NotSupported'
	 * Meta informations :
	 * 	- documentation : Do not display the payment method.
	 * @return string 'NotSupported'
	 */
	const VALUE_NOTSUPPORTED = 'NotSupported';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeClassifiedAdPaymentMethodEnabledCodeType
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
		return in_array($_value,array(self::VALUE_ENABLEDWITHCHECKOUT,self::VALUE_ENABLEDWITHOUTCHECKOUT,self::VALUE_NOTSUPPORTED,self::VALUE_CUSTOMCODE));
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