<?php
/**
 * Class file for EbayTradingTypeGetHighBiddersRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetHighBiddersRequestType
 * Documentation : Retrieves a list of high bidders for the Dutch auction specified in the ItemId property of the request. A seller specifies a unique item ID in this call to determine which buyers are winning bidders and how many items each buyer can purchase. Note that bidder information is anonymous to everyone except the bidder and the seller during an active auction.
 * @date 04/07/2012
 */
class EbayTradingTypeGetHighBiddersRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID that identifies the Dutch auction listing for which to retrieve a list of the high bidders. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @return EbayTradingTypeGetHighBiddersRequestType
	 */
	public function __construct($_ItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>