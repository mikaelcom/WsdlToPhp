<?php
/**
 * Class file for EbayTradingTypeAddFixedPriceItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddFixedPriceItemRequestType
 * Documentation : Defines and lists a new fixed-price listing (not auction-style listings). The main difference between AddFixedPriceItem and AddItem is that AddFixedPriceItem supports the creation of fixed-price listings only, whereas AddItem supports all listing formats.<br> <br> Also, only AddFixedPriceItem supports multi-variation listings and tracking inventory by SKU. AddItem does not support Variations or InventoryTrackingMethod.<br> <br> See the AddFixedPriceItem documentation for additional information.
 * @date 04/07/2012
 */
class EbayTradingTypeAddFixedPriceItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Root container holding all values that define a new fixed-price listing.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @return EbayTradingTypeAddFixedPriceItemRequestType
	 */
	public function __construct($_Item = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
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