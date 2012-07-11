<?php
/**
 * Class file for EbayTradingTypeAddressUsageCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddressUsageCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAddressUsageCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'DefaultShipping'
	 * Meta informations :
	 * 	- documentation : This is default shipping address which is rendered to buyer on checkout.
	 * @return string 'DefaultShipping'
	 */
	const VALUE_DEFAULTSHIPPING = 'DefaultShipping';
	/**
	 * Constant for value 'Shipping'
	 * Meta informations :
	 * 	- documentation : This is an address which is in user's address book. It can be used at the time of checkout.
	 * @return string 'Shipping'
	 */
	const VALUE_SHIPPING = 'Shipping';
	/**
	 * Constant for value 'Invalid'
	 * Meta informations :
	 * 	- documentation : This is not a valid address. Please use another address.
	 * @return string 'Invalid'
	 */
	const VALUE_INVALID = 'Invalid';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAddressUsageCodeType
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
		return in_array($_value,array(self::VALUE_DEFAULTSHIPPING,self::VALUE_SHIPPING,self::VALUE_INVALID,self::VALUE_CUSTOMCODE));
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