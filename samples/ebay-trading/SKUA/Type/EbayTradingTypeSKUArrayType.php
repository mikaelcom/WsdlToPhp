<?php
/**
 * Class file for EbayTradingTypeSKUArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSKUArrayType
 * Documentation : A list of stock-keeping unit (SKU) identifiers that a seller uses in listings.
 * @date 04/07/2012
 */
class EbayTradingTypeSKUArrayType extends EbayTradingWsdlClass
{
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A SKU (stock keeping unit) is an identifier defined by a seller. Some sellers use SKUs to track complex flows of products and information on the client side. A seller can specify a SKU when listing an item with AddItem and related calls. eBay preserves the SKU on the item, enabling you to obtain it before and after an order line item is created. (SKU is recommended as an alternative to ApplicationData.)<br> <br> A SKU is not required to be unique. A seller can specify a particular SKU value on one item or on multiple items. Different sellers can use the same SKUs.<br> <br> If the SKU is unique across a seller's active listings, and if the seller listed the item by using AddFixedPriceItem or RelistFixedPriceItem, the seller can also set Item.InventoryTrackingMethod to SKU. This allows the seller to use SKU instead of ItemID as a unique identifier in subsequent calls, such as GetItem and ReviseInventoryStatus.<br> <br> <span class="tablenote"><b>Note:</b> AddFixedPriceItem and RelistFixedPriceItem are defined in the Merchant Data API (part of Large Merchant Services). </span>
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * Constructor
	 * @param EbayTradingTypeSKUType SKU
	 * @return EbayTradingTypeSKUArrayType
	 */
	public function __construct($_SKU = null)
	{
		parent::__construct(array('SKU'=>$_SKU));
	}
	/**
	 * Set SKU
	 * @param SKUType SKU
	 * @return SKUType
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = EbayTradingTypeSKUType::valueIsValid($_SKU)?$_SKU:null);
	}
	/**
	 * Get SKU
	 * @return EbayTradingTypeSKUType
	 */
	public function getSKU()
	{
		return $this->SKU;
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