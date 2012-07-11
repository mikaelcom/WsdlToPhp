<?php
/**
 * Class file for EbayTradingTypeEndReasonCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndReasonCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeEndReasonCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'LostOrBroken'
	 * Meta informations :
	 * 	- documentation : The item was lost or broken.
	 * @return string 'LostOrBroken'
	 */
	const VALUE_LOSTORBROKEN = 'LostOrBroken';
	/**
	 * Constant for value 'NotAvailable'
	 * Meta informations :
	 * 	- documentation : The item is no longer available for sale.
	 * @return string 'NotAvailable'
	 */
	const VALUE_NOTAVAILABLE = 'NotAvailable';
	/**
	 * Constant for value 'Incorrect'
	 * Meta informations :
	 * 	- documentation : The start price or reserve price is incorrect.
	 * @return string 'Incorrect'
	 */
	const VALUE_INCORRECT = 'Incorrect';
	/**
	 * Constant for value 'OtherListingError'
	 * Meta informations :
	 * 	- documentation : The listing contained an error (other than start price or reserve price).
	 * @return string 'OtherListingError'
	 */
	const VALUE_OTHERLISTINGERROR = 'OtherListingError';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'SellToHighBidder'
	 * Meta informations :
	 * 	- documentation : The listing has qualifying bids (i.e., there is a current high bid that, when applicable, meets the minimum reserve price) and there are more than 12 hours before the listing ends. Sell the item to the highest eligible bidder. <br> In the last 12 hours of an item listing, you cannot end an item early if it has bids.
	 * @return string 'SellToHighBidder'
	 */
	const VALUE_SELLTOHIGHBIDDER = 'SellToHighBidder';
	/**
	 * Constant for value 'Sold'
	 * Meta informations :
	 * 	- documentation : The vehicle was sold. Applies to local classified listings for vehicles only.
	 * @return string 'Sold'
	 */
	const VALUE_SOLD = 'Sold';
	/**
	 * Constructor
	 * @return EbayTradingTypeEndReasonCodeType
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
		return in_array($_value,array(self::VALUE_LOSTORBROKEN,self::VALUE_NOTAVAILABLE,self::VALUE_INCORRECT,self::VALUE_OTHERLISTINGERROR,self::VALUE_CUSTOMCODE,self::VALUE_SELLTOHIGHBIDDER,self::VALUE_SOLD));
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