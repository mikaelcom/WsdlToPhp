<?php
/**
 * Class file for PayPalTypeSalesVenueType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSalesVenueType
 * @date 14/07/2012
 */
class PayPalTypeSalesVenueType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'Venue-Unspecified'
	 * @return string 'Venue-Unspecified'
	 */
	const VALUE_VENUE_UNSPECIFIED = 'Venue-Unspecified';
	/**
	 * Constant for value 'eBay'
	 * @return string 'eBay'
	 */
	const VALUE_EBAY = 'eBay';
	/**
	 * Constant for value 'AnotherMarketPlace'
	 * @return string 'AnotherMarketPlace'
	 */
	const VALUE_ANOTHERMARKETPLACE = 'AnotherMarketPlace';
	/**
	 * Constant for value 'OwnWebsite'
	 * @return string 'OwnWebsite'
	 */
	const VALUE_OWNWEBSITE = 'OwnWebsite';
	/**
	 * Constant for value 'Other'
	 * @return string 'Other'
	 */
	const VALUE_OTHER = 'Other';
	/**
	 * Constructor
	 * @return PayPalTypeSalesVenueType
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
		return in_array($_value,array(self::VALUE_VENUE_UNSPECIFIED,self::VALUE_EBAY,self::VALUE_ANOTHERMARKETPLACE,self::VALUE_OWNWEBSITE,self::VALUE_OTHER));
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