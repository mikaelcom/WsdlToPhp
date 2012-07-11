<?php
/**
 * Class file for EbayTradingTypeEndFixedPriceItemRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEndFixedPriceItemRequestType
 * Documentation : Ends the specified fixed-price listing before the date and time at which it would normally end (per the listing duration).
 * @date 04/07/2012
 */
class EbayTradingTypeEndFixedPriceItemRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID that identifies the item listing that you want to end. <br><br> In the EndFixedPriceItem request, either ItemID or SKU is required. If both are passed in and they don't refer to the same listing, eBay ignores SKU and considers only the ItemID.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The EndingReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the seller's reason for ending the listing early. This field is required if the seller is ending the item early and the item did not successfully sell.
	 * @var EbayTradingTypeEndReasonCodeType
	 */
	public $EndingReason;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique SKU of the item being ended. A SKU (stock keeping unit) is an identifier defined by a seller. SKU can only be used to end an item if you listed the item by using AddFixedPriceItem or RelistFixedPriceItem, and you set Item.InventoryTrackingMethod to SKU at the time the item was listed. (These criteria are necessary to uniquely identify the listing by a SKU.) <br><br> In the EndFixedPriceItem request, either ItemID or SKU is required. If both are passed in and they don't refer to the same listing, eBay ignores SKU and considers only the ItemID. <br><br> To remove a SKU when you revise or relist an item, use DeletedField in the revision or relist call.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeEndReasonCodeType EndingReason
	 * @param EbayTradingTypeSKUType SKU
	 * @return EbayTradingTypeEndFixedPriceItemRequestType
	 */
	public function __construct($_ItemID = null,$_EndingReason = null,$_SKU = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'EndingReason'=>$_EndingReason,'SKU'=>$_SKU));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set EndingReason
	 * @param EndReasonCodeType EndingReason
	 * @return EndReasonCodeType
	 */
	public function setEndingReason($_EndingReason)
	{
		return ($this->EndingReason = EbayTradingTypeEndReasonCodeType::valueIsValid($_EndingReason)?$_EndingReason:null);
	}
	/**
	 * Get EndingReason
	 * @return EbayTradingTypeEndReasonCodeType
	 */
	public function getEndingReason()
	{
		return $this->EndingReason;
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