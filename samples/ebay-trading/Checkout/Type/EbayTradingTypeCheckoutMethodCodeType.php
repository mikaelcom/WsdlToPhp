<?php
/**
 * Class file for EbayTradingTypeCheckoutMethodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCheckoutMethodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeCheckoutMethodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Other'
	 * Meta informations :
	 * 	- documentation : Other Checkout Method was used.
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constant for value 'ThirdPartyCheckout'
	 * Meta informations :
	 * 	- documentation : As of July 1, 2011, third-party applications can no longer be used for checkout. All purchased items must go through the eBay Checkout flow.
	 * @return string 'ThirdPartyCheckout'
	 */
	const VALUE_THIRDPARTYCHECKOUT = 'ThirdPartyCheckout';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeCheckoutMethodCodeType
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
		return in_array($_value,array(self::VALUE_OTHER,self::VALUE_THIRDPARTYCHECKOUT,self::VALUE_CUSTOMCODE));
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