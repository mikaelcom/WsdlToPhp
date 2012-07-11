<?php
/**
 * Class file for EbayTradingTypeItemTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeItemTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AuctionItemsOnly'
	 * Meta informations :
	 * 	- documentation : (in) Retrieve listings only eligible for competitive bidding at auction. That is, only retrieve listings for which ListingType is Chinese (single-item auction), regardless of the BuyItNowEnabled value. Items with any of the following listing types are not retrieved: StoresFixedPrice, FixedPriceItem, and AdType. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @return string 'AuctionItemsOnly'
	 */
	const VALUE_AUCTIONITEMSONLY = 'AuctionItemsOnly';
	/**
	 * Constant for value 'FixedPricedItem'
	 * Meta informations :
	 * 	- documentation : (in) Retrieves only listings that can be purchased at a fixed price. That is, only retrieves listings for which listing type is StoresFixedPrice or FixedPriceItem. Whether StoresFixedPrice items are retrieved depends on the site default. If StoresFixedPrice items are retrieved, they are returned after the other retrieved items. Also retrieves competitive-bid auction listings for which BuyItNowEnabled is true. Does not retrieve listings for which listing type is AdType, and does not retrieve auction listings for which BuyItNowEnabled is false.
	 * @return string 'FixedPricedItem'
	 */
	const VALUE_FIXEDPRICEDITEM = 'FixedPricedItem';
	/**
	 * Constant for value 'AllItems'
	 * Meta informations :
	 * 	- documentation : (in) Returns all listing types (the default for FindItemsAdvanced). It is recommended that you use AllItemTypes instead of AllItems. Whether StoresFixedPrice items are retrieved depends on the site default.
	 * @return string 'AllItems'
	 */
	const VALUE_ALLITEMS = 'AllItems';
	/**
	 * Constant for value 'StoreInventoryOnly'
	 * Meta informations :
	 * 	- documentation : (in) Only retrieves listings for which the listing type is StoresFixedPrice.
	 * @return string 'StoreInventoryOnly'
	 */
	const VALUE_STOREINVENTORYONLY = 'StoreInventoryOnly';
	/**
	 * Constant for value 'FixedPriceExcludeStoreInventory'
	 * Meta informations :
	 * 	- documentation : (in) Excludes listings that have listing type set to StoresFixedPrice. Excludes listings that have listing type set to AdType. Excludes auction listings in which BuyItNowEnabled is false.
	 * @return string 'FixedPriceExcludeStoreInventory'
	 */
	const VALUE_FIXEDPRICEEXCLUDESTOREINVENTORY = 'FixedPriceExcludeStoreInventory';
	/**
	 * Constant for value 'ExcludeStoreInventory'
	 * Meta informations :
	 * 	- documentation : (in) Excludes listings that have listing type set to StoresFixedPrice.
	 * @return string 'ExcludeStoreInventory'
	 */
	const VALUE_EXCLUDESTOREINVENTORY = 'ExcludeStoreInventory';
	/**
	 * Constant for value 'AllItemTypes'
	 * Meta informations :
	 * 	- documentation : (in) Retrieves listings whether or not listing type is set to StoresFixedPrice; include auction items. In searches for items, you must specify the AllItemTypes value if you want Store Inventory format (StoresFixedPrice) items to be returned.
	 * @return string 'AllItemTypes'
	 */
	const VALUE_ALLITEMTYPES = 'AllItemTypes';
	/**
	 * Constant for value 'AllFixedPriceItemTypes'
	 * Meta informations :
	 * 	- documentation : (in) Retrieves fixed-price items. Whether StoresFixedPrice items are retrieved does not depend on the site default. The StoresFixedPrice items are retrieved after the basic fixed price items. Items are retrieved whether or not listing type is set to StoresFixedPrice. Does not retrieve items for which listing type is AdType. Does not retrieve auction items for which BuyItNowEnabled is false.
	 * @return string 'AllFixedPriceItemTypes'
	 */
	const VALUE_ALLFIXEDPRICEITEMTYPES = 'AllFixedPriceItemTypes';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'ClassifiedItemsOnly'
	 * Meta informations :
	 * 	- documentation : (in) Only retrieves Classified Ad format listings.
	 * @return string 'ClassifiedItemsOnly'
	 */
	const VALUE_CLASSIFIEDITEMSONLY = 'ClassifiedItemsOnly';
	/**
	 * Constant for value 'AdFormat'
	 * Meta informations :
	 * 	- documentation : Restricts listings to return only items that have the Ad Format feature.
	 * @return string 'AdFormat'
	 */
	const VALUE_ADFORMAT = 'AdFormat';
	/**
	 * Constructor
	 * @return EbayTradingTypeItemTypeCodeType
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
		return in_array($_value,array(self::VALUE_AUCTIONITEMSONLY,self::VALUE_FIXEDPRICEDITEM,self::VALUE_ALLITEMS,self::VALUE_STOREINVENTORYONLY,self::VALUE_FIXEDPRICEEXCLUDESTOREINVENTORY,self::VALUE_EXCLUDESTOREINVENTORY,self::VALUE_ALLITEMTYPES,self::VALUE_ALLFIXEDPRICEITEMTYPES,self::VALUE_CUSTOMCODE,self::VALUE_CLASSIFIEDITEMSONLY,self::VALUE_ADFORMAT));
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