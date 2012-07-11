<?php
/**
 * Class file for EbayTradingTypeGetBidderListResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetBidderListResponseType
 * Documentation : Response to GetBidderListRequest.
 * @date 04/07/2012
 */
class EbayTradingTypeGetBidderListResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Bidder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Data for one eBay bidder.
	 * @var EbayTradingTypeUserType
	 */
	public $Bidder;
	/**
	 * The BidItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Array of items the bidder has bid on, has won or has lost.
	 * @var EbayTradingTypeItemArrayType
	 */
	public $BidItemArray;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserType Bidder
	 * @param EbayTradingTypeItemArrayType BidItemArray
	 * @return EbayTradingTypeGetBidderListResponseType
	 */
	public function __construct($_Bidder = null,$_BidItemArray = null)
	{
		EbayTradingWsdlClass::__construct(array('Bidder'=>$_Bidder,'BidItemArray'=>$_BidItemArray));
	}
	/**
	 * Set Bidder
	 * @param UserType Bidder
	 * @return UserType
	 */
	public function setBidder($_Bidder)
	{
		return ($this->Bidder = $_Bidder);
	}
	/**
	 * Get Bidder
	 * @return EbayTradingTypeUserType
	 */
	public function getBidder()
	{
		return $this->Bidder;
	}
	/**
	 * Set BidItemArray
	 * @param ItemArrayType BidItemArray
	 * @return ItemArrayType
	 */
	public function setBidItemArray($_BidItemArray)
	{
		return ($this->BidItemArray = $_BidItemArray);
	}
	/**
	 * Get BidItemArray
	 * @return EbayTradingTypeItemArrayType
	 */
	public function getBidItemArray()
	{
		return $this->BidItemArray;
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