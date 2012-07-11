<?php
/**
 * Class file for EbayTradingTypeGetHighBiddersResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetHighBiddersResponseType
 * Documentation : Returns a list of high bidders for the Dutch auction specified in the ItemId property of the request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetHighBiddersResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The BidArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of zero, one, or multiple OfferType objects. Each OfferType object represents the data for one high bidder. See the schema documentation for OfferType for details on its properties and their meanings.
	 * @var EbayTradingTypeOfferArrayType
	 */
	public $BidArray;
	/**
	 * The ListingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., winning bidder) and other information. This processing can take several minutes. If you retrieve a sold item, use this listing status information to determine whether eBay has finished processing the listing so that you can be sure the winning bidder and other details are correct and complete. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var EbayTradingTypeListingStatusCodeType
	 */
	public $ListingStatus;
	/**
	 * Constructor
	 * @param EbayTradingTypeOfferArrayType BidArray
	 * @param EbayTradingTypeListingStatusCodeType ListingStatus
	 * @return EbayTradingTypeGetHighBiddersResponseType
	 */
	public function __construct($_BidArray = null,$_ListingStatus = null)
	{
		EbayTradingWsdlClass::__construct(array('BidArray'=>$_BidArray,'ListingStatus'=>$_ListingStatus));
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