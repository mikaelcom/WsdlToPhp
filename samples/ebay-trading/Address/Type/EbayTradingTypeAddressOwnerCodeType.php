<?php
/**
 * Class file for EbayTradingTypeAddressOwnerCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddressOwnerCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAddressOwnerCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PayPal'
	 * Meta informations :
	 * 	- documentation : PayPal owns the address.
	 * @return string 'PayPal'
	 */
	const VALUE_PAYPAL = 'PayPal';
	/**
	 * Constant for value 'eBay'
	 * Meta informations :
	 * 	- documentation : eBay owns the address.
	 * @return string 'eBay'
	 */
	const VALUE_EBAY = 'eBay';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAddressOwnerCodeType
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
		return in_array($_value,array(self::VALUE_PAYPAL,self::VALUE_EBAY,self::VALUE_CUSTOMCODE));
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