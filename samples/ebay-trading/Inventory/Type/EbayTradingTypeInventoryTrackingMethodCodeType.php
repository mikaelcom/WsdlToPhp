<?php
/**
 * Class file for EbayTradingTypeInventoryTrackingMethodCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeInventoryTrackingMethodCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeInventoryTrackingMethodCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ItemID'
	 * Meta informations :
	 * 	- documentation : The seller prefers to track the listing by its eBay item ID. This is the default for all listings.
	 * @return string 'ItemID'
	 */
	const VALUE_ITEMID = 'ItemID';
	/**
	 * Constant for value 'SKU'
	 * Meta informations :
	 * 	- documentation : The seller prefers to track the listing by their own SKU. When you track by SKU, it means you can pass your SKU instead of the eBay item ID in other calls that support SKU as an input field. If you choose SKU as your tracking preference for a listing, the value in Item.SKU must be unique across your active listings. You cannot create new listings with the same Item.SKU value while the listing is active (that is, until the existing listing with that SKU has ended). However, you can use ReviseInventoryStatus to update the quantity and/or price for the existing SKU as needed. When revising a listing where the InventoryTrackingMethod was set to SKU, you must pass in both the InventoryTrackingMethod tag (with the value set to SKU) and the SKU tag with the SKU value from your original listing.
	 * @return string 'SKU'
	 */
	const VALUE_SKU = 'SKU';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeInventoryTrackingMethodCodeType
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
		return in_array($_value,array(self::VALUE_ITEMID,self::VALUE_SKU,self::VALUE_CUSTOMCODE));
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