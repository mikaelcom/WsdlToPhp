<?php
/**
 * Class file for EbayTradingTypeSimpleItemSortCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSimpleItemSortCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSimpleItemSortCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'BestMatch'
	 * Meta informations :
	 * 	- documentation : Sorts items by Best Match, and no sort order applies. If specified, then Best Match sort also applies to CategoryHistogram.
	 * @return string 'BestMatch'
	 */
	const VALUE_BESTMATCH = 'BestMatch';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'EndTime'
	 * Meta informations :
	 * 	- documentation : Sorts items by end time in ascending or descending order.
	 * @return string 'EndTime'
	 */
	const VALUE_ENDTIME = 'EndTime';
	/**
	 * Constant for value 'BidCount'
	 * Meta informations :
	 * 	- documentation : Sort by number of bids on the item in ascending or descending order.
	 * @return string 'BidCount'
	 */
	const VALUE_BIDCOUNT = 'BidCount';
	/**
	 * Constant for value 'Country'
	 * Meta informations :
	 * 	- documentation : Sort by country; no sort order can be specified.
	 * @return string 'Country'
	 */
	const VALUE_COUNTRY = 'Country';
	/**
	 * Constant for value 'CurrentBid'
	 * Meta informations :
	 * 	- documentation : Sort by current bid; descending order only.
	 * @return string 'CurrentBid'
	 */
	const VALUE_CURRENTBID = 'CurrentBid';
	/**
	 * Constant for value 'Distance'
	 * Meta informations :
	 * 	- documentation : Sort by distance, ascending order only.
	 * @return string 'Distance'
	 */
	const VALUE_DISTANCE = 'Distance';
	/**
	 * Constant for value 'StartDate'
	 * Meta informations :
	 * 	- documentation : Sort by start date, recently-listed first.
	 * @return string 'StartDate'
	 */
	const VALUE_STARTDATE = 'StartDate';
	/**
	 * Constant for value 'BestMatchCategoryGroup'
	 * Meta informations :
	 * 	- documentation : (in) Sort by BestMatchCategoryGroup, so results are grouped by Best Match within a category.
	 * @return string 'BestMatchCategoryGroup'
	 */
	const VALUE_BESTMATCHCATEGORYGROUP = 'BestMatchCategoryGroup';
	/**
	 * Constant for value 'PricePlusShipping'
	 * Meta informations :
	 * 	- documentation : (in) This value is part of the Price Plus Shipping Sort feature, to be enabled by the end of Sept. 2007 for the following sites: US (site ID 0), Germany (77), Canada (2), and Australia (15). The Price Plus Shipping Sort feature causes item sorting to consider shipping costs. Specify PricePlusShippingAsc to sort items by lowest cost first, as follows: Lowest-total-cost (for items where shipping was properly specified), then freight-shipping items, then items for which shipping was not specified (sorted by price).
	 * @return string 'PricePlusShipping'
	 */
	const VALUE_PRICEPLUSSHIPPING = 'PricePlusShipping';
	/**
	 * Constructor
	 * @return EbayTradingTypeSimpleItemSortCodeType
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
		return in_array($_value,array(self::VALUE_BESTMATCH,self::VALUE_CUSTOMCODE,self::VALUE_ENDTIME,self::VALUE_BIDCOUNT,self::VALUE_COUNTRY,self::VALUE_CURRENTBID,self::VALUE_DISTANCE,self::VALUE_STARTDATE,self::VALUE_BESTMATCHCATEGORYGROUP,self::VALUE_PRICEPLUSSHIPPING));
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