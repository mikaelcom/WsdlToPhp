<?php
/**
 * Class file for EbayTradingTypeListingStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeListingStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : The listing is still active or the listing has ended with a sale but eBay has not completed processing the sale details (e.g., total price and high bidder). A multi-item listing is considered active until all items have winning bids or purchases or the listing ends with at least one winning bid or purchase. If the listing has ended with a sale but this Active status is returned, please allow several minutes for eBay to finish processing the listing.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Ended'
	 * Meta informations :
	 * 	- documentation : The listing has ended. If the listing ended with a sale, eBay has completed processing of the sale. All sale information returned from eBay (e.g., total price and high bidder) should be considered accurate and complete. However, the final value fee is not yet available.
	 * @return string 'Ended'
	 */
	const VALUE_ENDED = 'Ended';
	/**
	 * Constant for value 'Completed'
	 * Meta informations :
	 * 	- documentation : The listing has closed and eBay has completed processing the sale. All sale information returned from eBay (e.g., total price and high bidder) should be considered accurate and complete. Although the Final Value Fee (FVF) for FixedPriceItem and StoresFixedPrice items is returned by GetSellerTransactions and GetItemTransactions, all other listing types (excluding Buy It Now purchases) require the listing status to be Completed before the Final Value Fee is returned. <br>
	 * @return string 'Completed'
	 */
	const VALUE_COMPLETED = 'Completed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'Custom'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'Custom'
	 */
	const VALUE_CUSTOM = 'Custom';
	/**
	 * Constructor
	 * @return EbayTradingTypeListingStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_ENDED,self::VALUE_COMPLETED,self::VALUE_CUSTOMCODE,self::VALUE_CUSTOM));
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