<?php
/**
 * Class file for EbayTradingTypeGetAllBiddersRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAllBiddersRequestType
 * Documentation : Provides three modes for retrieving a list of the users that bid on a listing.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAllBiddersRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the item. The bidders who bid on this item are returned.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The CallMode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies which bidder information to return.
	 * @var EbayTradingTypeGetAllBiddersModeCodeType
	 */
	public $CallMode;
	/**
	 * The IncludeBiddingSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether return BiddingSummary container for each offer.
	 * @var boolean
	 */
	public $IncludeBiddingSummary;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeGetAllBiddersModeCodeType CallMode
	 * @param boolean IncludeBiddingSummary
	 * @return EbayTradingTypeGetAllBiddersRequestType
	 */
	public function __construct($_ItemID = null,$_CallMode = null,$_IncludeBiddingSummary = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'CallMode'=>$_CallMode,'IncludeBiddingSummary'=>$_IncludeBiddingSummary));
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
	 * Set CallMode
	 * @param GetAllBiddersModeCodeType CallMode
	 * @return GetAllBiddersModeCodeType
	 */
	public function setCallMode($_CallMode)
	{
		return ($this->CallMode = EbayTradingTypeGetAllBiddersModeCodeType::valueIsValid($_CallMode)?$_CallMode:null);
	}
	/**
	 * Get CallMode
	 * @return EbayTradingTypeGetAllBiddersModeCodeType
	 */
	public function getCallMode()
	{
		return $this->CallMode;
	}
	/**
	 * Set IncludeBiddingSummary
	 * @param boolean IncludeBiddingSummary
	 * @return boolean
	 */
	public function setIncludeBiddingSummary($_IncludeBiddingSummary)
	{
		return ($this->IncludeBiddingSummary = $_IncludeBiddingSummary);
	}
	/**
	 * Get IncludeBiddingSummary
	 * @return boolean
	 */
	public function getIncludeBiddingSummary()
	{
		return $this->IncludeBiddingSummary;
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