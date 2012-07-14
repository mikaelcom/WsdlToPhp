<?php
/**
 * Class file for PayPalTypeListingTypeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeListingTypeCodeType
 * @date 14/07/2012
 */
class PayPalTypeListingTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : Unknown Listing Type
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
	 * Constant for value 'AdType'
	 * Meta informations :
	 * 	- documentation : Ad type auction
	 * @return string 'AdType'
	 */
	const VALUE_ADTYPE = 'AdType';
	/**
	 * Constant for value 'StoresFixedPrice'
	 * Meta informations :
	 * 	- documentation : Stores Fixed-price auction (US only)
	 * @return string 'StoresFixedPrice'
	 */
	const VALUE_STORESFIXEDPRICE = 'StoresFixedPrice';
	/**
	 * Constant for value 'PersonalOffer'
	 * Meta informations :
	 * 	- documentation : Personal Offer auction
	 * @return string 'PersonalOffer'
	 */
	const VALUE_PERSONALOFFER = 'PersonalOffer';
	/**
	 * Constant for value 'FixedPriceItem'
	 * Meta informations :
	 * 	- documentation : Fixed Price item ("BIN only").
	 * @return string 'FixedPriceItem'
	 */
	const VALUE_FIXEDPRICEITEM = 'FixedPriceItem';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeListingTypeCodeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_CHINESE,self::VALUE_DUTCH,self::VALUE_LIVE,self::VALUE_ADTYPE,self::VALUE_STORESFIXEDPRICE,self::VALUE_PERSONALOFFER,self::VALUE_FIXEDPRICEITEM,self::VALUE_CUSTOMCODE));
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