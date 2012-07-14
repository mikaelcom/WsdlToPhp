<?php
/**
 * Class file for PayPalTypeAuctionTypeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAuctionTypeCodeType
 * @date 14/07/2012
 */
class PayPalTypeAuctionTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : Unknown auction type
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Chinese'
	 * Meta informations :
	 * 	- documentation : Chinese auction
	 * @return string 'Chinese'
	 */
	const VALUE_CHINESE = 'Chinese';
	/**
	 * Constant for value 'Dutch'
	 * Meta informations :
	 * 	- documentation : Dutch auction
	 * @return string 'Dutch'
	 */
	const VALUE_DUTCH = 'Dutch';
	/**
	 * Constant for value 'Live'
	 * Meta informations :
	 * 	- documentation : Live Auctions-type auction
	 * @return string 'Live'
	 */
	const VALUE_LIVE = 'Live';
	/**
	 * Constant for value 'Ad type'
	 * Meta informations :
	 * 	- documentation : Ad type auction
	 * @return string 'Ad type'
	 */
	const VALUE_AD_TYPE = 'Ad type';
	/**
	 * Constant for value 'Stores Fixed-price'
	 * Meta informations :
	 * 	- documentation : Stores Fixed-price auction (US only)
	 * @return string 'Stores Fixed-price'
	 */
	const VALUE_STORES_FIXED_PRICE = 'Stores Fixed-price';
	/**
	 * Constant for value 'Personal Offer'
	 * Meta informations :
	 * 	- documentation : Personal Offer auction
	 * @return string 'Personal Offer'
	 */
	const VALUE_PERSONAL_OFFER = 'Personal Offer';
	/**
	 * Constant for value 'Fixed Price Item'
	 * Meta informations :
	 * 	- documentation : Fixed Price item ("BIN only").
	 * @return string 'Fixed Price Item'
	 */
	const VALUE_FIXED_PRICE_ITEM = 'Fixed Price Item';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeAuctionTypeCodeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_CHINESE,self::VALUE_DUTCH,self::VALUE_LIVE,self::VALUE_AD_TYPE,self::VALUE_STORES_FIXED_PRICE,self::VALUE_PERSONAL_OFFER,self::VALUE_FIXED_PRICE_ITEM,self::VALUE_CUSTOMCODE));
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