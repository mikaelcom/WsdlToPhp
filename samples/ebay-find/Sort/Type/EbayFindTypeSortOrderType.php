<?php
/**
 * Class file for EbayFindTypeSortOrderType
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeSortOrderType
 * @date 04/07/2012
 */
class EbayFindTypeSortOrderType extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'BestMatch'
	 * Meta informations :
	 * 	- documentation : Sorts items by Best Match, which is based on community buying activity and other relevance-based factors. <br><br> <span class="tablenote"><strong>Note:</strong> eBay site search results sorted by Best Match may not match the API search results sorted by Best Match. The site Best Match algorithm takes into account additional factors, such as user information, not available to the API. </span>
	 * @return string 'BestMatch'
	 */
	const VALUE_BESTMATCH = 'BestMatch';
	/**
	 * Constant for value 'CurrentPriceHighest'
	 * Meta informations :
	 * 	- documentation : Sorts items by their current price, with the highest price first.
	 * @return string 'CurrentPriceHighest'
	 */
	const VALUE_CURRENTPRICEHIGHEST = 'CurrentPriceHighest';
	/**
	 * Constant for value 'DistanceNearest'
	 * Meta informations :
	 * 	- documentation : Sorts items by distance from the buyer in ascending order. The request must also include a buyerPostalCode.
	 * @return string 'DistanceNearest'
	 */
	const VALUE_DISTANCENEAREST = 'DistanceNearest';
	/**
	 * Constant for value 'EndTimeSoonest'
	 * Meta informations :
	 * 	- documentation : Sorts items by end time, with items ending soonest listed first.
	 * @return string 'EndTimeSoonest'
	 */
	const VALUE_ENDTIMESOONEST = 'EndTimeSoonest';
	/**
	 * Constant for value 'PricePlusShippingLowest'
	 * Meta informations :
	 * 	- documentation : Sorts items by the combined cost of the item price plus the shipping cost, with the lowest combined price items listed first. Items are returned in the following groupings: lowest total-cost items (for items where shipping was properly specified) appear first, followed by freight- shipping items, and then items for which no shipping was specified. Each group is sorted by price.
	 * @return string 'PricePlusShippingLowest'
	 */
	const VALUE_PRICEPLUSSHIPPINGLOWEST = 'PricePlusShippingLowest';
	/**
	 * Constant for value 'PricePlusShippingHighest'
	 * Meta informations :
	 * 	- documentation : Sorts items by the combined cost of the item price plus the shipping cost, with highest combined price items listed first. Items are returned in the following groupings: highest total-cost items (for items where shipping was properly specified) appear first, followed by freight- shipping items, and then items for which no shipping was specified. Each group is sorted by price.
	 * @return string 'PricePlusShippingHighest'
	 */
	const VALUE_PRICEPLUSSHIPPINGHIGHEST = 'PricePlusShippingHighest';
	/**
	 * Constant for value 'StartTimeNewest'
	 * Meta informations :
	 * 	- documentation : Sorts items by the start time, the most recently listed (newest) items appear first.
	 * @return string 'StartTimeNewest'
	 */
	const VALUE_STARTTIMENEWEST = 'StartTimeNewest';
	/**
	 * Constant for value 'BidCountMost'
	 * Meta informations :
	 * 	- documentation : Sorts items by the number of bids they have received, with items that have received the most bids first. <br><br> Sorting by bid count is supported on the eBay US (global ID EBAY-US), eBay Germany (global ID EBAY-DE), and eBay Australia (global ID EBAY-AU) sites only. To sort by bid count, you must specify a listing type filter to limit results to auction listings only (e.g., <code>& itemFilter.name=ListingType&itemFilter.value=Auction</code>).
	 * @return string 'BidCountMost'
	 */
	const VALUE_BIDCOUNTMOST = 'BidCountMost';
	/**
	 * Constant for value 'BidCountFewest'
	 * Meta informations :
	 * 	- documentation : Sorts items by the number of bids they have received, with items that have received the fewest bids first. <br><br> Sorting by bid count is supported on the eBay US (global ID EBAY-US), eBay Germany (global ID EBAY-DE), and eBay Australia (global ID EBAY-AU) sites only. To sort by bid count, you must specify a listing type filter to limit results to auction listings only (e.g., <code>& itemFilter.name=ListingType&itemFilter.value=Auction</code>).
	 * @return string 'BidCountFewest'
	 */
	const VALUE_BIDCOUNTFEWEST = 'BidCountFewest';
	/**
	 * Constant for value 'CountryAscending'
	 * Meta informations :
	 * 	- documentation : Sorts items available on the the given site (as specified by <a href= "http://developer.ebay.com/DevZone/finding/Concepts/MakingACall.html#StandardURLParameters" >global ID in the HTTP header or URL parameter</a>) by the country in which they are located. For CountryAscending, items located in the country most closely associated with the site appear first, followed by items in related countries, and then items from other countries. <br><br> For example, when searching the Ireland site, items located in Ireland (IE) will be returned first, followed by items located in related countries like the United Kingdom (GB), the United States (US), Hong Kong (HK), and Singapore (SG) next. Remaining items are sorted in alphabetical order by English country name (regardless of the language for the site), with some exceptions (e.g., United States sorts first, APO/FPO sorts near the end). <br><br> CountryAscending applies to the following sites only: Austria (EBAY-AT), Belgium-French (EBAY-FRBE), Belgium-Netherlands (EBAY-NLBE), Germany (EBAY-DE), Ireland (EBAY-IE), Netherlands (EBAY-NL), Poland (EBAY-PL), Spain (EBAY-ES), and Switzerland (EBAY-CH).
	 * @return string 'CountryAscending'
	 */
	const VALUE_COUNTRYASCENDING = 'CountryAscending';
	/**
	 * Constant for value 'CountryDescending'
	 * Meta informations :
	 * 	- documentation : Sorts items available on the the given site (as specified by global ID in the HTTP header or URL parameter) by the country in which they are located. For CountryDescending, items are sorted in reverse order of CountryAscending. That is, items in countries not specifically related to the site appear first, sorted in descending alphabetical order by English country name. For example, when searching the Ireland site, items located in countries like Yugoslavia or Uganda are returned first. Items located in Ireland (IE) will be returned last. <br><br> CountryDescending applies to the following sites only: Austria (EBAY-AT), Belgium-French (EBAY-FRBE), Belgium-Netherlands (EBAY-NLBE), Germany (EBAY-DE), Ireland (EBAY-IE), Netherlands (EBAY-NL), Poland (EBAY-PL), Spain (EBAY-ES), and Switzerland (EBAY-CH).
	 * @return string 'CountryDescending'
	 */
	const VALUE_COUNTRYDESCENDING = 'CountryDescending';
	/**
	 * Constructor
	 * @return EbayFindTypeSortOrderType
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
		return in_array($_value,array(self::VALUE_BESTMATCH,self::VALUE_CURRENTPRICEHIGHEST,self::VALUE_DISTANCENEAREST,self::VALUE_ENDTIMESOONEST,self::VALUE_PRICEPLUSSHIPPINGLOWEST,self::VALUE_PRICEPLUSSHIPPINGHIGHEST,self::VALUE_STARTTIMENEWEST,self::VALUE_BIDCOUNTMOST,self::VALUE_BIDCOUNTFEWEST,self::VALUE_COUNTRYASCENDING,self::VALUE_COUNTRYDESCENDING));
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