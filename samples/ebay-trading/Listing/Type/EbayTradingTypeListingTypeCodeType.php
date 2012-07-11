<?php
/**
 * Class file for EbayTradingTypeListingTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeListingTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : Unknown or undefined auction type. Applicable to user preferences and other informational use cases.
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Chinese'
	 * Meta informations :
	 * 	- documentation : Single-quantity online auction format. A Chinese auction has a Quantity of 1. Buyers engage in competitive bidding, although Buy It Now may be offered as long as no bids have been placed. Online auctions are listed on eBay.com, and they are also listed in the seller's eBay Store if the seller is a Store owner.
	 * @return string 'Chinese'
	 */
	const VALUE_CHINESE = 'Chinese';
	/**
	 * Constant for value 'Dutch'
	 * Meta informations :
	 * 	- documentation : Multiple-quantity online auction format. A Dutch auction has a Quantity greater than 1. Buyers engage in competitive bidding. Some sites also offer Buy It Now for Dutch auctions. Online auctions are listed on eBay.com, and they are also listed in the seller's eBay Store if the seller is a Store owner. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'Dutch'
	 */
	const VALUE_DUTCH = 'Dutch';
	/**
	 * Constant for value 'Live'
	 * Meta informations :
	 * 	- documentation : Live auction, on-site auction that can include non-eBay bidders. (Use AddLiveAuctionItem to list live auctions.) Live auctions are listed on the eBay Live Auctions site, in live auction categories. They can also appear on eBay if the seller lists the lot in a secondary category that is an eBay category.
	 * @return string 'Live'
	 */
	const VALUE_LIVE = 'Live';
	/**
	 * Constant for value 'Auction'
	 * Meta informations :
	 * 	- documentation : An optional input parameter used with GetMyeBaySelling. When used in the request, returns items of competitive-bid auctions (Chinese).
	 * @return string 'Auction'
	 */
	const VALUE_AUCTION = 'Auction';
	/**
	 * Constant for value 'AdType'
	 * Meta informations :
	 * 	- documentation : Advertisement to solicit inquiries on listings such as real estate. Permits no bidding on that item, service, or property. To express interest, a buyer fills out a contact form that eBay forwards to the the seller as a lead. This format does not enable buyers and sellers to transact online through eBay, and eBay Feedback is not available for ad format listings.
	 * @return string 'AdType'
	 */
	const VALUE_ADTYPE = 'AdType';
	/**
	 * Constant for value 'StoresFixedPrice'
	 * Meta informations :
	 * 	- documentation : This enumeration value should no longer be used in the Add/Revise/Relist family of calls. The <b>FixedPriceItem</b> listing type replaced the <b>StoresFixedPrice</b> listing type on all eBay sites on March 30, 2010. <br><br> For <b>GetItem</b> and other 'Get' calls, this enumeration value may still be returned as the listing type if the listing was created before this value was deprecated.
	 * @return string 'StoresFixedPrice'
	 */
	const VALUE_STORESFIXEDPRICE = 'StoresFixedPrice';
	/**
	 * Constant for value 'PersonalOffer'
	 * Meta informations :
	 * 	- documentation : Second chance offer made to a non-winning bidder on an ended listing. A seller can make an offer to a non-winning bidder when either the winning bidder has failed to pay for an item or the seller has a duplicate of the item. A seller can create a Second Chance Offer immediately after a listing ends and up to 60 days after the end of the listing. eBay does not charge an Insertion Fee, but if the bidder accepts the offer, the regular Final Value Fee is charged. In the case of an Unpaid Item, the seller should ensure that everything has been done to resolve the issue with the winning bidder before sending a Second Chance Offer to another bidder. See the Unpaid Items Process for details. Make sure you're aware of other rules and restrictions surrounding Second Chance Offers. Use AddSecondChanceItem to submit Second Chance Offers. Listed on eBay, but does not appear when browsing or searching listings.
	 * @return string 'PersonalOffer'
	 */
	const VALUE_PERSONALOFFER = 'PersonalOffer';
	/**
	 * Constant for value 'FixedPriceItem'
	 * Meta informations :
	 * 	- documentation : A basic fixed-price item format. Bids do not occur. The quantity of items is one or more. <br><br> Also known as Buy It Now Only on some sites (not to be confused with the BuyItNow option that is available for Chinese auctions). <br><br> Sellers must meet certain feedback requirements and/or be ID Verified to use this format. See Minimum Feedback Requirements for Various Features in the Trading Web Services guide. <br><br> Fixed-price listings are listed on eBay.com, and they are listed in the seller's eBay Store if the seller is a Store owner. Stores fixed price items will be treated as basic fixed-price items. Permitted durations of 30 days and GTC are now available for store and non-store subscribers (in addition to the existing durations of 3, 5, 7, and 10 days).
	 * @return string 'FixedPriceItem'
	 */
	const VALUE_FIXEDPRICEITEM = 'FixedPriceItem';
	/**
	 * Constant for value 'Half'
	 * Meta informations :
	 * 	- documentation : Half.com listing (item is listed on Half.com, not on eBay). You must be a registered Half.com seller to use this format.
	 * @return string 'Half'
	 */
	const VALUE_HALF = 'Half';
	/**
	 * Constant for value 'LeadGeneration'
	 * Meta informations :
	 * 	- documentation : Lead Generation format (advertisement-style listing to solicit inquiries or offers, no bidding or fixed price, listed on eBay).
	 * @return string 'LeadGeneration'
	 */
	const VALUE_LEADGENERATION = 'LeadGeneration';
	/**
	 * Constant for value 'Express'
	 * Meta informations :
	 * 	- documentation : For Germany Express site only, which is no longer in service.
	 * @return string 'Express'
	 */
	const VALUE_EXPRESS = 'Express';
	/**
	 * Constant for value 'Shopping'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use. You can ignore Shopping.com items in your results.
	 * @return string 'Shopping'
	 */
	const VALUE_SHOPPING = 'Shopping';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeListingTypeCodeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_CHINESE,self::VALUE_DUTCH,self::VALUE_LIVE,self::VALUE_AUCTION,self::VALUE_ADTYPE,self::VALUE_STORESFIXEDPRICE,self::VALUE_PERSONALOFFER,self::VALUE_FIXEDPRICEITEM,self::VALUE_HALF,self::VALUE_LEADGENERATION,self::VALUE_EXPRESS,self::VALUE_SHOPPING,self::VALUE_CUSTOMCODE));
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