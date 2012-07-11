<?php
/**
 * Class file for EbayTradingTypeGetAllBiddersResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAllBiddersResponseType
 * Documentation : Includes the list of bidders for the requested item as part of the general item listing data. Some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual ids of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual id will be returned. Information for all competing bidders or outside watchers will be returned as anonymized userIDs. See See <a href="http://developer.ebay.com/DevZone/XML/docs/WebHelp/index.htm?context=eBay_XML_API&topic=AnonymousUserInfo">Working with Anonymous User Information</a>in the eBay Web Services Guide for more information.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAllBiddersResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The BidArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of OfferType objects. Each OfferType object represents the data for one bidder and bid.
	 * @var EbayTradingTypeOfferArrayType
	 */
	public $BidArray;
	/**
	 * The HighBidder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay user ID for the user with the highest bid (or the earliest timestamp, in the event of a tie); a second chance offer candidate.
	 * @var EbayTradingTypeUserIDType
	 */
	public $HighBidder;
	/**
	 * The HighestBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Bid amount offered by the HighBidder.
	 * @var EbayTradingTypeAmountType
	 */
	public $HighestBid;
	/**
	 * The ListingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., winning bidder) and other information. This processing can take several minutes. If you retrieve a sold item, use this listing status information to determine whether eBay has finished processing the listing so that you can be sure the winning bidder and other details are correct and complete.
	 * @var EbayTradingTypeListingStatusCodeType
	 */
	public $ListingStatus;
	/**
	 * Constructor
	 * @param EbayTradingTypeOfferArrayType BidArray
	 * @param EbayTradingTypeUserIDType HighBidder
	 * @param EbayTradingTypeAmountType HighestBid
	 * @param EbayTradingTypeListingStatusCodeType ListingStatus
	 * @return EbayTradingTypeGetAllBiddersResponseType
	 */
	public function __construct($_BidArray = null,$_HighBidder = null,$_HighestBid = null,$_ListingStatus = null)
	{
		EbayTradingWsdlClass::__construct(array('BidArray'=>$_BidArray,'HighBidder'=>$_HighBidder,'HighestBid'=>$_HighestBid,'ListingStatus'=>$_ListingStatus));
	}
	/**
	 * Set BidArray
	 * @param OfferArrayType BidArray
	 * @return OfferArrayType
	 */
	public function setBidArray($_BidArray)
	{
		return ($this->BidArray = $_BidArray);
	}
	/**
	 * Get BidArray
	 * @return EbayTradingTypeOfferArrayType
	 */
	public function getBidArray()
	{
		return $this->BidArray;
	}
	/**
	 * Set HighBidder
	 * @param UserIDType HighBidder
	 * @return UserIDType
	 */
	public function setHighBidder($_HighBidder)
	{
		return ($this->HighBidder = EbayTradingTypeUserIDType::valueIsValid($_HighBidder)?$_HighBidder:null);
	}
	/**
	 * Get HighBidder
	 * @return EbayTradingTypeUserIDType
	 */
	public function getHighBidder()
	{
		return $this->HighBidder;
	}
	/**
	 * Set HighestBid
	 * @param AmountType HighestBid
	 * @return AmountType
	 */
	public function setHighestBid($_HighestBid)
	{
		return ($this->HighestBid = $_HighestBid);
	}
	/**
	 * Get HighestBid
	 * @return EbayTradingTypeAmountType
	 */
	public function getHighestBid()
	{
		return $this->HighestBid;
	}
	/**
	 * Set ListingStatus
	 * @param ListingStatusCodeType ListingStatus
	 * @return ListingStatusCodeType
	 */
	public function setListingStatus($_ListingStatus)
	{
		return ($this->ListingStatus = EbayTradingTypeListingStatusCodeType::valueIsValid($_ListingStatus)?$_ListingStatus:null);
	}
	/**
	 * Get ListingStatus
	 * @return EbayTradingTypeListingStatusCodeType
	 */
	public function getListingStatus()
	{
		return $this->ListingStatus;
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