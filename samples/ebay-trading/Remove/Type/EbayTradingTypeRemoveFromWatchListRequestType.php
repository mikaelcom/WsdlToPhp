<?php
/**
 * Class file for EbayTradingTypeRemoveFromWatchListRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRemoveFromWatchListRequestType
 * Documentation : Enables a user to remove one or more items from their My eBay watch list.
 * @date 04/07/2012
 */
class EbayTradingTypeRemoveFromWatchListRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ID of the item to be removed from the watch list. Either ItemID, RemoveAllItems, or VariationKey must be specified, but NOT more than one of these. Multiple ItemID fields can be specified in the same request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The RemoveAllItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, then all the items in the user's watch list are removed. Either ItemID, RemoveAllItems, or VariationKey must be specified, but NOT more than one of these.
	 * @var boolean
	 */
	public $RemoveAllItems;
	/**
	 * The VariationKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A variation (or set of variations) that you want to remove from the watch list. Either ItemID, RemoveAllItems, or VariationKey must be specified, but NOT more than one of these.
	 * @var EbayTradingTypeVariationKeyType
	 */
	public $VariationKey;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param boolean RemoveAllItems
	 * @param EbayTradingTypeVariationKeyType VariationKey
	 * @return EbayTradingTypeRemoveFromWatchListRequestType
	 */
	public function __construct($_ItemID = null,$_RemoveAllItems = null,$_VariationKey = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'RemoveAllItems'=>$_RemoveAllItems,'VariationKey'=>$_VariationKey));
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
	 * Set RemoveAllItems
	 * @param boolean RemoveAllItems
	 * @return boolean
	 */
	public function setRemoveAllItems($_RemoveAllItems)
	{
		return ($this->RemoveAllItems = $_RemoveAllItems);
	}
	/**
	 * Get RemoveAllItems
	 * @return boolean
	 */
	public function getRemoveAllItems()
	{
		return $this->RemoveAllItems;
	}
	/**
	 * Set VariationKey
	 * @param VariationKeyType VariationKey
	 * @return VariationKeyType
	 */
	public function setVariationKey($_VariationKey)
	{
		return ($this->VariationKey = $_VariationKey);
	}
	/**
	 * Get VariationKey
	 * @return EbayTradingTypeVariationKeyType
	 */
	public function getVariationKey()
	{
		return $this->VariationKey;
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