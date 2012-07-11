<?php
/**
 * Class file for EbayShoppingTypeListingTypeCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeListingTypeCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeListingTypeCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : Unknown auction type. (This is not normally used.)
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
	 * 	- documentation : Multiple-quantity online auction format. A Dutch auction has a Quantity greater than one (1). Buyers engage in competitive bidding. Some sites also offer Buy It Now for Dutch auctions. Online auctions are listed on eBay.com. They are also listed in a seller's eBay Store if the seller is a Store owner. <br /><br /> <span class="tablenote"><strong>Note:</strong> Dutch-style (multi-item) auctions are being deprecated and will soon be unsupported. Although you can retrieve information relating to a Dutch-style listing, starting with version 615, you cannot submit a Dutch item listing with AddItem or VerifyAddItem on the following sites: US, CA, CAFR, DE, or UK. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the quantity to 1. To ensure forward compliance, please avoid listing multi-item auctions. </span> <br/>
	 * @return string 'Dutch'
	 */
	const VALUE_DUTCH = 'Dutch';
	/**
	 * Constant for value 'Live'
	 * Meta informations :
	 * 	- documentation : Live auction, on-site auction that can include non-eBay bidders. Live auctions are listed on the eBay Live Auctions site, in live auction categories. They can also appear on eBay if the seller lists the lot in a secondary, eBay category.
	 * @return string 'Live'
	 */
	const VALUE_LIVE = 'Live';
	/**
	 * Constant for value 'Auction'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
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
	 * 	- documentation : A fixed-price format for eBay Store sellers. Store Inventory listings appear after other listings in regular browse and search item lists on eBay. They have a lower Insertion Fee and longer listing durations. This item type can only be specified by sellers who have an eBay Store. Store Inventory listings are listed on eBay.com as well as in the seller's eBay Store.
	 * @return string 'StoresFixedPrice'
	 */
	const VALUE_STORESFIXEDPRICE = 'StoresFixedPrice';
	/**
	 * Constant for value 'PersonalOffer'
	 * Meta informations :
	 * 	- documentation : Second chance offer made to a non-winning bidder on an ended listing. A seller can make an offer to a non-winning bidder when either the winning bidder has failed to pay for an item or the seller has a duplicate of the item. Second- chance offer items are on eBay, but they do not appear when browsing or searching listings. You need to already know the item ID in order to retrieve a second-chance offer.
	 * @return string 'PersonalOffer'
	 */
	const VALUE_PERSONALOFFER = 'PersonalOffer';
	/**
	 * Constant for value 'FixedPriceItem'
	 * Meta informations :
	 * 	- documentation : A basic fixed-price listing with a Quantity of 1. Allows no auction-style bidding. Also known as Buy It Now Only on some sites, this should not to be confused with the BuyItNow option that is available for competitive-bid auctions. Fixed-price listings appear on eBay.com. They are also listed in a seller's eBay Store if the seller is a Store owner. <br /><br /> <span class="tablenote"><strong>Note:</strong> Dutch-style (multi-item) auctions are being deprecated and will soon be unsupported. Although you can retrieve information relating to a Dutch-style listing, starting with version 615, you cannot submit a Dutch item listing with AddItem or VerifyAddItem on the following sites: US, CA, CAFR, DE, or UK. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the quantity to 1. To ensure forward compliance, please avoid listing multi-item auctions. </span> <br/>
	 * @return string 'FixedPriceItem'
	 */
	const VALUE_FIXEDPRICEITEM = 'FixedPriceItem';
	/**
	 * Constant for value 'Half'
	 * Meta informations :
	 * 	- documentation : Half.com listing (item is listed on Half.com, not on eBay). Reserved for future use.
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
	 * 	- documentation : For Germany only: eBay Express-only format (item is listed only on eBay Express Germany, not on eBay).
	 * @return string 'Express'
	 */
	const VALUE_EXPRESS = 'Express';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeListingTypeCodeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_CHINESE,self::VALUE_DUTCH,self::VALUE_LIVE,self::VALUE_AUCTION,self::VALUE_ADTYPE,self::VALUE_STORESFIXEDPRICE,self::VALUE_PERSONALOFFER,self::VALUE_FIXEDPRICEITEM,self::VALUE_HALF,self::VALUE_LEADGENERATION,self::VALUE_EXPRESS,self::VALUE_CUSTOMCODE));
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