<?php
/**
 * Class file for EbayTradingTypeSetPromotionalSaleListingsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetPromotionalSaleListingsRequestType
 * Documentation : Changes which item listings are affected by a promotional sale.
 * @date 04/07/2012
 */
class EbayTradingTypeSetPromotionalSaleListingsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The PromotionalSaleID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the promotional sale that you want to add listings to or delete listings from.
	 * @var long
	 */
	public $PromotionalSaleID;
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : You must specify either Add or Delete. <br><br> This field determines whether you are adding listings to, or deleting listings from, the promotional sale you specify in the PromotionalSaleID field. <br><br> If you specify Delete, you must specify PromotionalSaleItemIDArray. Delete is applicable only in cases where you specify PromotionalSaleItemIDArray. Auction or auction/BIN format listings cannot be added to or deleted from a promotional sale if the item has bids.
	 * @var EbayTradingTypeModifyActionCodeType
	 */
	public $Action;
	/**
	 * The PromotionalSaleItemIDArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The IDs of the item listings to be affected by the action you specify in the Action field.
	 * @var EbayTradingTypeItemIDArrayType
	 */
	public $PromotionalSaleItemIDArray;
	/**
	 * The StoreCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Adds to the promotional sale all the seller's item listings with the StoreCategoryID specified in this field. Requires that you specify Add in the Action field.
	 * @var long
	 */
	public $StoreCategoryID;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Adds to the promotional sale all the seller's item listings with the CategoryID specified in this field. Requires that you specify Add in the Action field.
	 * @var long
	 */
	public $CategoryID;
	/**
	 * The AllFixedPriceItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Adds to the promotional sale all the seller's item listings that are fixed price items. Requires that you specify Add in the Action field.
	 * @var boolean
	 */
	public $AllFixedPriceItems;
	/**
	 * The AllStoreInventoryItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Adds to the promotional sale all the seller's item listings that are store inventory items. Requires that you specify Add in the Action field.
	 * @var boolean
	 */
	public $AllStoreInventoryItems;
	/**
	 * The AllAuctionItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Adds to the promotional sale all the seller's item listings that are auction items. Auction and auction/BIN format listings can be added to free shipping sales only. Requires that you specify Add in the Action field.
	 * @var boolean
	 */
	public $AllAuctionItems;
	/**
	 * Constructor
	 * @param long PromotionalSaleID
	 * @param EbayTradingTypeModifyActionCodeType Action
	 * @param EbayTradingTypeItemIDArrayType PromotionalSaleItemIDArray
	 * @param long StoreCategoryID
	 * @param long CategoryID
	 * @param boolean AllFixedPriceItems
	 * @param boolean AllStoreInventoryItems
	 * @param boolean AllAuctionItems
	 * @return EbayTradingTypeSetPromotionalSaleListingsRequestType
	 */
	public function __construct($_PromotionalSaleID = null,$_Action = null,$_PromotionalSaleItemIDArray = null,$_StoreCategoryID = null,$_CategoryID = null,$_AllFixedPriceItems = null,$_AllStoreInventoryItems = null,$_AllAuctionItems = null)
	{
		EbayTradingWsdlClass::__construct(array('PromotionalSaleID'=>$_PromotionalSaleID,'Action'=>$_Action,'PromotionalSaleItemIDArray'=>$_PromotionalSaleItemIDArray,'StoreCategoryID'=>$_StoreCategoryID,'CategoryID'=>$_CategoryID,'AllFixedPriceItems'=>$_AllFixedPriceItems,'AllStoreInventoryItems'=>$_AllStoreInventoryItems,'AllAuctionItems'=>$_AllAuctionItems));
	}
	/**
	 * Set PromotionalSaleID
	 * @param long PromotionalSaleID
	 * @return long
	 */
	public function setPromotionalSaleID($_PromotionalSaleID)
	{
		return ($this->PromotionalSaleID = $_PromotionalSaleID);
	}
	/**
	 * Get PromotionalSaleID
	 * @return long
	 */
	public function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
	}
	/**
	 * Set Action
	 * @param ModifyActionCodeType Action
	 * @return ModifyActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypeModifyActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypeModifyActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
	}
	/**
	 * Set PromotionalSaleItemIDArray
	 * @param ItemIDArrayType PromotionalSaleItemIDArray
	 * @return ItemIDArrayType
	 */
	public function setPromotionalSaleItemIDArray($_PromotionalSaleItemIDArray)
	{
		return ($this->PromotionalSaleItemIDArray = $_PromotionalSaleItemIDArray);
	}
	/**
	 * Get PromotionalSaleItemIDArray
	 * @return EbayTradingTypeItemIDArrayType
	 */
	public function getPromotionalSaleItemIDArray()
	{
		return $this->PromotionalSaleItemIDArray;
	}
	/**
	 * Set StoreCategoryID
	 * @param long StoreCategoryID
	 * @return long
	 */
	public function setStoreCategoryID($_StoreCategoryID)
	{
		return ($this->StoreCategoryID = $_StoreCategoryID);
	}
	/**
	 * Get StoreCategoryID
	 * @return long
	 */
	public function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * Set CategoryID
	 * @param long CategoryID
	 * @return long
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return long
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set AllFixedPriceItems
	 * @param boolean AllFixedPriceItems
	 * @return boolean
	 */
	public function setAllFixedPriceItems($_AllFixedPriceItems)
	{
		return ($this->AllFixedPriceItems = $_AllFixedPriceItems);
	}
	/**
	 * Get AllFixedPriceItems
	 * @return boolean
	 */
	public function getAllFixedPriceItems()
	{
		return $this->AllFixedPriceItems;
	}
	/**
	 * Set AllStoreInventoryItems
	 * @param boolean AllStoreInventoryItems
	 * @return boolean
	 */
	public function setAllStoreInventoryItems($_AllStoreInventoryItems)
	{
		return ($this->AllStoreInventoryItems = $_AllStoreInventoryItems);
	}
	/**
	 * Get AllStoreInventoryItems
	 * @return boolean
	 */
	public function getAllStoreInventoryItems()
	{
		return $this->AllStoreInventoryItems;
	}
	/**
	 * Set AllAuctionItems
	 * @param boolean AllAuctionItems
	 * @return boolean
	 */
	public function setAllAuctionItems($_AllAuctionItems)
	{
		return ($this->AllAuctionItems = $_AllAuctionItems);
	}
	/**
	 * Get AllAuctionItems
	 * @return boolean
	 */
	public function getAllAuctionItems()
	{
		return $this->AllAuctionItems;
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