<?php
/**
 * Class file for EbayTradingTypeSellingStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingStatusType
 * Documentation : Contains various details about the current status of a listing. These values are computed by eBay and cannot be specified at listing time.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingStatusType extends EbayTradingWsdlClass
{
	/**
	 * The BidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of bids placed so far against the item. Only applicable to competitive-bid item listings (Chinese auctions).
	 * @var int
	 */
	public $BidCount;
	/**
	 * The BidIncrement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Smallest amount a bid must be above the current high bid. Only applicable to competitive-bid item listings (Chinese auctions). Returns zero (0.00) for Ad type, eBay Stores Inventory (Stores Fixed-price), and Basic Fixed-Price (Fixed Price Item) listings.
	 * @var EbayTradingTypeAmountType
	 */
	public $BidIncrement;
	/**
	 * The ConvertedCurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Converted value of the CurrentPrice in the currency of the site that returned this response. For active items, refresh the listing's data every 24 hours to pick up the current conversion rates. Only returned when the item's CurrentPrice on the listing site is in different currency than the currency of the host site for the user/application making the API call. ConvertedCurrentPrice is not returned for Classified listings (Classified listings are not available on all sites).<br> <br> In multi-variation listings, this value matches the lowest-priced variation that is still available for sale.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConvertedCurrentPrice;
	/**
	 * The CurrentPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For competitive-bid item listings (Chinese auctions), current minimum asking price (start price) or the current highest bid for the item if bids have been placed. Shows minimum bid if no bids have been placed on the item. For Basic Fixed-Price (FixedPriceItem), Store Inventory (StoresFixedPrice), or Ad type (AdType) listings this returns the original price specified when the item was listed/re-listed or the revised price if the item was revised using the ReviseItem call.<br> <br> In multi-variation listings, this value matches the lowest-priced variation that is still available for sale.
	 * @var EbayTradingTypeAmountType
	 */
	public $CurrentPrice;
	/**
	 * The HighBidder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For ended Chinese auction listings that have a winning bidder, this field is a container for the high bidder's user ID. For ended, single-item, basic fixed price (FixedPriceItem) and ended Store Inventory (StoresFixedPrice) listings, this field is a container for the user ID of the purchaser. This field isn't returned for auctions with no bids, or for active fixed price listings, or for active Store Inventory listings. In the case of PlaceOffer, for chinese auctions, this field is a container for the high bidder's user ID. In the PlaceOffer response, the following applies: For multiple-quantity, fixed-price listings, the high bidder is only returned if there is just one order line item (or only for the first order line item that is created).
	 * @var EbayTradingTypeUserType
	 */
	public $HighBidder;
	/**
	 * The LeadCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable to Ad type listings only. Indicates how many leads to potential buyers are associated with this item. Returns 0 (zero) for listings in other formats. You must be the seller of the item to retrieve the lead count.
	 * @var int
	 */
	public $LeadCount;
	/**
	 * The MinimumToBid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Smallest amount the next bid on the item can be. Returns same value as Item.StartPrice (if no bids have yet been placed) or CurrentPrice plus BidIncrement (if at least one bid has been placed). Only applicable to competitive-bid item listings (Chinese auctions). Returns null for basic Fixed Price (FixedPriceItem), Store Inventory (StoresFixedPrice), and Ad type listings. <br><br> In multi-variation listings, this value matches the lowest-priced variation that is still available for sale. <br><br> <span class="tablenote"><strong>Note:</strong> As of version 619, Dutch-style (multi-item) competitive-bid auctions are deprecated. eBay throws an error if you submit a Dutch item listing with AddItem or VerifyAddItem. If you use RelistItem to update a Dutch auction listing, eBay generates a warning and resets the Quantity value to 1. </span> <br>
	 * @var EbayTradingTypeAmountType
	 */
	public $MinimumToBid;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of items purchased so far (in the listing's lifetime). Subtract this from Quantity to determine the quantity available. <br> <br> If the listing has Item Variations, then in GetItem (and related calls) and GetItemTransactions, Item.SellingStatus.QuantitySold contains the sum of all quantities sold across all variations in the listing, and Variation.SellingStatus.QuantitySold contains the number of items sold for that variation. In GetSellerTransactions, Transaction.Item.SellingStatus.QuantitySold contains the number of items sold in that order line item.<br> <br> For order line item calls, also see Transaction.QuantityPurchased for the number of items purchased in the order line item.<br> In multi-variation listings, this value matches total quantity sold across all variations.
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The ReserveMet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the reserve price has been met for the listing. Returns true if the reserve price was met or no reserve price was specified.
	 * @var boolean
	 */
	public $ReserveMet;
	/**
	 * The SecondChanceEligible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Part of the Second Chance Offer feature, indicates whether the seller can extend a second chance offer for the item.
	 * @var boolean
	 */
	public $SecondChanceEligible;
	/**
	 * The BidderCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of bidders for an item. Only applicable to competitive-bid item listings (Chinese auctions). Only returned for the seller of the item.
	 * @var long
	 */
	public $BidderCount;
	/**
	 * The ListingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an active or ended listing's status in eBay's processing workflow. If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final value fee. This processing can take several minutes. If you retrieve a sold item and no details about the buyer/high bidder are returned or no final value fee is available, use this listing status information to determine whether eBay has finished processing the listing.
	 * @var EbayTradingTypeListingStatusCodeType
	 */
	public $ListingStatus;
	/**
	 * The FinalValueFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : You are charged a Final Value Fee (FVF) if your item is sold, ends with a winning bid, or is purchased. This fee applies whether or not you actually complete the sale with the buyer. The Final Value Fee is returned in Transaction.FinalValueFee. See the eBay.com Web site online help for more information about the final value fee. <br><br> The Final Value Fee for fixed price format (FixedPriceItem) and Store Inventory (StoresFixedPrice) items is returned by GetSellerTransactions, GetItemTransactions, and GetOrderTransactions in a Transaction container, regardless of the listing status. For all other listing types, (excluding Buy It Now purchases), the Final Value Fee is returned when the listing status is Completed. <br/ > <br /> If you request a Final Value Fee Credit, the value of Transaction.FinalValueFee will not change for the item if a credit is issued. (The credit only appears in the seller's account data.) <br>
	 * @var EbayTradingTypeAmountType
	 */
	public $FinalValueFee;
	/**
	 * The PromotionalSaleDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a seller has reduced the price of a listed item with the Promotional Price Display feature, this field contains the original price of the discounted item, along with the start-time and end-time of the discount.
	 * @var EbayTradingTypePromotionalSaleDetailsType
	 */
	public $PromotionalSaleDetails;
	/**
	 * The AdminEnded
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included in the response as true, indicates that the listing was administratively canceled due to a violation of eBay's listing policies and that the item can be relisted using RelistItem. Note that GetItem returns an error (invalid item ID) in the response if Item.SellingStatus.AdminEnded is true and the requesting user is not the seller of the item.
	 * @var boolean
	 */
	public $AdminEnded;
	/**
	 * The SoldAsBin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If this flag appears in the <b>GetItem</b> response, the auction has ended due to the item being sold to a seller using the <b>Buy It Now</b> option. This flag is not relevant for fixed-priced listings.
	 * @var boolean
	 */
	public $SoldAsBin;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int BidCount
	 * @param EbayTradingTypeAmountType BidIncrement
	 * @param EbayTradingTypeAmountType ConvertedCurrentPrice
	 * @param EbayTradingTypeAmountType CurrentPrice
	 * @param EbayTradingTypeUserType HighBidder
	 * @param int LeadCount
	 * @param EbayTradingTypeAmountType MinimumToBid
	 * @param int QuantitySold
	 * @param boolean ReserveMet
	 * @param boolean SecondChanceEligible
	 * @param long BidderCount
	 * @param EbayTradingTypeListingStatusCodeType ListingStatus
	 * @param EbayTradingTypeAmountType FinalValueFee
	 * @param EbayTradingTypePromotionalSaleDetailsType PromotionalSaleDetails
	 * @param boolean AdminEnded
	 * @param boolean SoldAsBin
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingStatusType
	 */
	public function __construct($_BidCount = null,$_BidIncrement = null,$_ConvertedCurrentPrice = null,$_CurrentPrice = null,$_HighBidder = null,$_LeadCount = null,$_MinimumToBid = null,$_QuantitySold = null,$_ReserveMet = null,$_SecondChanceEligible = null,$_BidderCount = null,$_ListingStatus = null,$_FinalValueFee = null,$_PromotionalSaleDetails = null,$_AdminEnded = null,$_SoldAsBin = null,$_any = null)
	{
		parent::__construct(array('BidCount'=>$_BidCount,'BidIncrement'=>$_BidIncrement,'ConvertedCurrentPrice'=>$_ConvertedCurrentPrice,'CurrentPrice'=>$_CurrentPrice,'HighBidder'=>$_HighBidder,'LeadCount'=>$_LeadCount,'MinimumToBid'=>$_MinimumToBid,'QuantitySold'=>$_QuantitySold,'ReserveMet'=>$_ReserveMet,'SecondChanceEligible'=>$_SecondChanceEligible,'BidderCount'=>$_BidderCount,'ListingStatus'=>$_ListingStatus,'FinalValueFee'=>$_FinalValueFee,'PromotionalSaleDetails'=>$_PromotionalSaleDetails,'AdminEnded'=>$_AdminEnded,'SoldAsBin'=>$_SoldAsBin,'any'=>$_any));
	}
	/**
	 * Set BidCount
	 * @param int BidCount
	 * @return int
	 */
	public function setBidCount($_BidCount)
	{
		return ($this->BidCount = $_BidCount);
	}
	/**
	 * Get BidCount
	 * @return int
	 */
	public function getBidCount()
	{
		return $this->BidCount;
	}
	/**
	 * Set BidIncrement
	 * @param AmountType BidIncrement
	 * @return AmountType
	 */
	public function setBidIncrement($_BidIncrement)
	{
		return ($this->BidIncrement = $_BidIncrement);
	}
	/**
	 * Get BidIncrement
	 * @return EbayTradingTypeAmountType
	 */
	public function getBidIncrement()
	{
		return $this->BidIncrement;
	}
	/**
	 * Set ConvertedCurrentPrice
	 * @param AmountType ConvertedCurrentPrice
	 * @return AmountType
	 */
	public function setConvertedCurrentPrice($_ConvertedCurrentPrice)
	{
		return ($this->ConvertedCurrentPrice = $_ConvertedCurrentPrice);
	}
	/**
	 * Get ConvertedCurrentPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getConvertedCurrentPrice()
	{
		return $this->ConvertedCurrentPrice;
	}
	/**
	 * Set CurrentPrice
	 * @param AmountType CurrentPrice
	 * @return AmountType
	 */
	public function setCurrentPrice($_CurrentPrice)
	{
		return ($this->CurrentPrice = $_CurrentPrice);
	}
	/**
	 * Get CurrentPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getCurrentPrice()
	{
		return $this->CurrentPrice;
	}
	/**
	 * Set HighBidder
	 * @param UserType HighBidder
	 * @return UserType
	 */
	public function setHighBidder($_HighBidder)
	{
		return ($this->HighBidder = $_HighBidder);
	}
	/**
	 * Get HighBidder
	 * @return EbayTradingTypeUserType
	 */
	public function getHighBidder()
	{
		return $this->HighBidder;
	}
	/**
	 * Set LeadCount
	 * @param int LeadCount
	 * @return int
	 */
	public function setLeadCount($_LeadCount)
	{
		return ($this->LeadCount = $_LeadCount);
	}
	/**
	 * Get LeadCount
	 * @return int
	 */
	public function getLeadCount()
	{
		return $this->LeadCount;
	}
	/**
	 * Set MinimumToBid
	 * @param AmountType MinimumToBid
	 * @return AmountType
	 */
	public function setMinimumToBid($_MinimumToBid)
	{
		return ($this->MinimumToBid = $_MinimumToBid);
	}
	/**
	 * Get MinimumToBid
	 * @return EbayTradingTypeAmountType
	 */
	public function getMinimumToBid()
	{
		return $this->MinimumToBid;
	}
	/**
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set ReserveMet
	 * @param boolean ReserveMet
	 * @return boolean
	 */
	public function setReserveMet($_ReserveMet)
	{
		return ($this->ReserveMet = $_ReserveMet);
	}
	/**
	 * Get ReserveMet
	 * @return boolean
	 */
	public function getReserveMet()
	{
		return $this->ReserveMet;
	}
	/**
	 * Set SecondChanceEligible
	 * @param boolean SecondChanceEligible
	 * @return boolean
	 */
	public function setSecondChanceEligible($_SecondChanceEligible)
	{
		return ($this->SecondChanceEligible = $_SecondChanceEligible);
	}
	/**
	 * Get SecondChanceEligible
	 * @return boolean
	 */
	public function getSecondChanceEligible()
	{
		return $this->SecondChanceEligible;
	}
	/**
	 * Set BidderCount
	 * @param long BidderCount
	 * @return long
	 */
	public function setBidderCount($_BidderCount)
	{
		return ($this->BidderCount = $_BidderCount);
	}
	/**
	 * Get BidderCount
	 * @return long
	 */
	public function getBidderCount()
	{
		return $this->BidderCount;
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
	 * Set FinalValueFee
	 * @param AmountType FinalValueFee
	 * @return AmountType
	 */
	public function setFinalValueFee($_FinalValueFee)
	{
		return ($this->FinalValueFee = $_FinalValueFee);
	}
	/**
	 * Get FinalValueFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getFinalValueFee()
	{
		return $this->FinalValueFee;
	}
	/**
	 * Set PromotionalSaleDetails
	 * @param PromotionalSaleDetailsType PromotionalSaleDetails
	 * @return PromotionalSaleDetailsType
	 */
	public function setPromotionalSaleDetails($_PromotionalSaleDetails)
	{
		return ($this->PromotionalSaleDetails = $_PromotionalSaleDetails);
	}
	/**
	 * Get PromotionalSaleDetails
	 * @return EbayTradingTypePromotionalSaleDetailsType
	 */
	public function getPromotionalSaleDetails()
	{
		return $this->PromotionalSaleDetails;
	}
	/**
	 * Set AdminEnded
	 * @param boolean AdminEnded
	 * @return boolean
	 */
	public function setAdminEnded($_AdminEnded)
	{
		return ($this->AdminEnded = $_AdminEnded);
	}
	/**
	 * Get AdminEnded
	 * @return boolean
	 */
	public function getAdminEnded()
	{
		return $this->AdminEnded;
	}
	/**
	 * Set SoldAsBin
	 * @param boolean SoldAsBin
	 * @return boolean
	 */
	public function setSoldAsBin($_SoldAsBin)
	{
		return ($this->SoldAsBin = $_SoldAsBin);
	}
	/**
	 * Get SoldAsBin
	 * @return boolean
	 */
	public function getSoldAsBin()
	{
		return $this->SoldAsBin;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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