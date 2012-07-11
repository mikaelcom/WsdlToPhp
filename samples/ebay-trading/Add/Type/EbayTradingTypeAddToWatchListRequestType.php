<?php
/**
 * Class file for EbayTradingTypeAddToWatchListRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddToWatchListRequestType
 * Documentation : Adds one or more items to the user's My eBay watch list.
 * @date 04/07/2012
 */
class EbayTradingTypeAddToWatchListRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ItemID of the item that is to be added to the watch list. The item must be a currently active item, and the total number of items in the watchlist (after the items in the request have been added) cannot exceed the maximum allowed number of watch list items. One or more ItemID fields can be specified. A separate error node will be returned for each item that fails.<br> <br> Either ItemID or VariationKey is required (but do not pass in both).
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The VariationKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A variation (or set of variations) that you want to watch. Use this to watch a particular variation (not the entire item). Either the top-level ItemID or VariationKey is required (but do not pass in both).
	 * @var EbayTradingTypeVariationKeyType
	 */
	public $VariationKey;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeVariationKeyType VariationKey
	 * @return EbayTradingTypeAddToWatchListRequestType
	 */
	public function __construct($_ItemID = null,$_VariationKey = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'VariationKey'=>$_VariationKey));
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