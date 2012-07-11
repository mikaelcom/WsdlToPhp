<?php
/**
 * Class file for EbayShoppingTypeListingStatusCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeListingStatusCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeListingStatusCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : (out) The listing is still live, or it has recently ended but eBay has not completed processing the listing (e.g., we're still determining the high bidder). A multi-item listing is considered active until all items have winning bids or purchases or the listing's end time has passed. (That is, if the listing has a Quantity of 10, the sale of 1 of those items doesn't end the listing.) If the listing has ended but this Active status is returned, please allow several minutes for eBay to finish processing the listing.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Ended'
	 * Meta informations :
	 * 	- documentation : (out) The listing has ended and eBay has completed processing of the sale (if any), such as determining the high bidder.
	 * @return string 'Ended'
	 */
	const VALUE_ENDED = 'Ended';
	/**
	 * Constant for value 'Completed'
	 * Meta informations :
	 * 	- documentation : (out) The listing has ended and eBay has completed processing of the sale (if any), such as determining the high bidder. You can think of Completed and Ended as essentially equivalent. (The difference is only meaningful to the seller of the item, as Completed indicates whether eBay has finished calculating certain selling fees.)
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeListingStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_ENDED,self::VALUE_COMPLETED,self::VALUE_CUSTOMCODE));
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