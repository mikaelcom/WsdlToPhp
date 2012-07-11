<?php
/**
 * Class file for EbayTradingTypeMyeBaySellingSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyeBaySellingSummaryType
 * Documentation : Contains summary information about the items the seller is selling.
 * @date 04/07/2012
 */
class EbayTradingTypeMyeBaySellingSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The ActiveAuctionCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of currently active auctions that will sell. That is, there is at least one bidder, and any reserve price has been met. Equivalent to the "Will Sell" value in My eBay.
	 * @var int
	 */
	public $ActiveAuctionCount;
	/**
	 * The AuctionSellingCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of currently active auctions for a given seller. Note that this does not include listings that are FixedPriceItem or StoresFixedPrice. Equivalent to the "Auction Quantity" value in My eBay.
	 * @var int
	 */
	public $AuctionSellingCount;
	/**
	 * The AuctionBidCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of bids made on the seller's active listings.
	 * @var int
	 */
	public $AuctionBidCount;
	/**
	 * The TotalAuctionSellingValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For all items that the seller has for sale, the total selling values of those items having bids and where the Reserve price is met (if a Reserve price is specified).
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalAuctionSellingValue;
	/**
	 * The TotalSoldCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of items that the seller has sold in the past 31 days.
	 * @var int
	 */
	public $TotalSoldCount;
	/**
	 * The TotalSoldValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total monetary value of the items the seller has sold.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalSoldValue;
	/**
	 * The SoldDurationInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The average duration, in days, of all items sold.
	 * @var int
	 */
	public $SoldDurationInDays;
	/**
	 * The ClassifiedAdCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of classified ad listings listed by the seller.
	 * @var int
	 */
	public $ClassifiedAdCount;
	/**
	 * The TotalLeadCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of leads from the seller's classified ad listings. Number indicates the total number of emails received for the listings
	 * @var int
	 */
	public $TotalLeadCount;
	/**
	 * The ClassifiedAdOfferCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of offers received on active Classified Ad listings.
	 * @var int
	 */
	public $ClassifiedAdOfferCount;
	/**
	 * The TotalListingsWithLeads
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of Classified Ad listings that have an associated lead.
	 * @var int
	 */
	public $TotalListingsWithLeads;
	/**
	 * The QuantityLimitRemaining
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The quantity of items that this seller can list. This number refers to the total quantity of items in all listings. For example, if the seller's limit was a quantity of 100, this could be 100 listings of one item each, or one listing with a quantity of 100 items. The seller will be unable to list additional items or quantities of items for sale in excess of this number for the current month unless the seller requests an increase from eBay using the "Request higher selling limits" link in the All Selling section of My eBay. (Under "Selling Limits".) Notice that the amount limit (see AmountLimitRemaining) may be reached before the quantity limit is reached.
	 * @var long
	 */
	public $QuantityLimitRemaining;
	/**
	 * The AmountLimitRemaining
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total value of the items listed price that this seller can list. This amount is the total of the prices specified upon listing. For example, for fixed price listings, this is the total of the fixed price amounts. For auction listings, this is the total of the starting prices. The seller will be unable to list an item if the amount of the item's fixed price or starting price (for auctions) exceeds the amount limit. This is part of the seller limit, which can be increased by requesting an increase from eBay using the "Request higher selling limits" link in the All Selling section of My eBay. (Under "Selling Limits".) Notice that the quantity limit (see QuantityLimitRemaining) may be reached before the amount limit is reached.
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountLimitRemaining;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int ActiveAuctionCount
	 * @param int AuctionSellingCount
	 * @param int AuctionBidCount
	 * @param EbayTradingTypeAmountType TotalAuctionSellingValue
	 * @param int TotalSoldCount
	 * @param EbayTradingTypeAmountType TotalSoldValue
	 * @param int SoldDurationInDays
	 * @param int ClassifiedAdCount
	 * @param int TotalLeadCount
	 * @param int ClassifiedAdOfferCount
	 * @param int TotalListingsWithLeads
	 * @param long QuantityLimitRemaining
	 * @param EbayTradingTypeAmountType AmountLimitRemaining
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyeBaySellingSummaryType
	 */
	public function __construct($_ActiveAuctionCount = null,$_AuctionSellingCount = null,$_AuctionBidCount = null,$_TotalAuctionSellingValue = null,$_TotalSoldCount = null,$_TotalSoldValue = null,$_SoldDurationInDays = null,$_ClassifiedAdCount = null,$_TotalLeadCount = null,$_ClassifiedAdOfferCount = null,$_TotalListingsWithLeads = null,$_QuantityLimitRemaining = null,$_AmountLimitRemaining = null,$_any = null)
	{
		parent::__construct(array('ActiveAuctionCount'=>$_ActiveAuctionCount,'AuctionSellingCount'=>$_AuctionSellingCount,'AuctionBidCount'=>$_AuctionBidCount,'TotalAuctionSellingValue'=>$_TotalAuctionSellingValue,'TotalSoldCount'=>$_TotalSoldCount,'TotalSoldValue'=>$_TotalSoldValue,'SoldDurationInDays'=>$_SoldDurationInDays,'ClassifiedAdCount'=>$_ClassifiedAdCount,'TotalLeadCount'=>$_TotalLeadCount,'ClassifiedAdOfferCount'=>$_ClassifiedAdOfferCount,'TotalListingsWithLeads'=>$_TotalListingsWithLeads,'QuantityLimitRemaining'=>$_QuantityLimitRemaining,'AmountLimitRemaining'=>$_AmountLimitRemaining,'any'=>$_any));
	}
	/**
	 * Set ActiveAuctionCount
	 * @param int ActiveAuctionCount
	 * @return int
	 */
	public function setActiveAuctionCount($_ActiveAuctionCount)
	{
		return ($this->ActiveAuctionCount = $_ActiveAuctionCount);
	}
	/**
	 * Get ActiveAuctionCount
	 * @return int
	 */
	public function getActiveAuctionCount()
	{
		return $this->ActiveAuctionCount;
	}
	/**
	 * Set AuctionSellingCount
	 * @param int AuctionSellingCount
	 * @return int
	 */
	public function setAuctionSellingCount($_AuctionSellingCount)
	{
		return ($this->AuctionSellingCount = $_AuctionSellingCount);
	}
	/**
	 * Get AuctionSellingCount
	 * @return int
	 */
	public function getAuctionSellingCount()
	{
		return $this->AuctionSellingCount;
	}
	/**
	 * Set AuctionBidCount
	 * @param int AuctionBidCount
	 * @return int
	 */
	public function setAuctionBidCount($_AuctionBidCount)
	{
		return ($this->AuctionBidCount = $_AuctionBidCount);
	}
	/**
	 * Get AuctionBidCount
	 * @return int
	 */
	public function getAuctionBidCount()
	{
		return $this->AuctionBidCount;
	}
	/**
	 * Set TotalAuctionSellingValue
	 * @param AmountType TotalAuctionSellingValue
	 * @return AmountType
	 */
	public function setTotalAuctionSellingValue($_TotalAuctionSellingValue)
	{
		return ($this->TotalAuctionSellingValue = $_TotalAuctionSellingValue);
	}
	/**
	 * Get TotalAuctionSellingValue
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalAuctionSellingValue()
	{
		return $this->TotalAuctionSellingValue;
	}
	/**
	 * Set TotalSoldCount
	 * @param int TotalSoldCount
	 * @return int
	 */
	public function setTotalSoldCount($_TotalSoldCount)
	{
		return ($this->TotalSoldCount = $_TotalSoldCount);
	}
	/**
	 * Get TotalSoldCount
	 * @return int
	 */
	public function getTotalSoldCount()
	{
		return $this->TotalSoldCount;
	}
	/**
	 * Set TotalSoldValue
	 * @param AmountType TotalSoldValue
	 * @return AmountType
	 */
	public function setTotalSoldValue($_TotalSoldValue)
	{
		return ($this->TotalSoldValue = $_TotalSoldValue);
	}
	/**
	 * Get TotalSoldValue
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalSoldValue()
	{
		return $this->TotalSoldValue;
	}
	/**
	 * Set SoldDurationInDays
	 * @param int SoldDurationInDays
	 * @return int
	 */
	public function setSoldDurationInDays($_SoldDurationInDays)
	{
		return ($this->SoldDurationInDays = $_SoldDurationInDays);
	}
	/**
	 * Get SoldDurationInDays
	 * @return int
	 */
	public function getSoldDurationInDays()
	{
		return $this->SoldDurationInDays;
	}
	/**
	 * Set ClassifiedAdCount
	 * @param int ClassifiedAdCount
	 * @return int
	 */
	public function setClassifiedAdCount($_ClassifiedAdCount)
	{
		return ($this->ClassifiedAdCount = $_ClassifiedAdCount);
	}
	/**
	 * Get ClassifiedAdCount
	 * @return int
	 */
	public function getClassifiedAdCount()
	{
		return $this->ClassifiedAdCount;
	}
	/**
	 * Set TotalLeadCount
	 * @param int TotalLeadCount
	 * @return int
	 */
	public function setTotalLeadCount($_TotalLeadCount)
	{
		return ($this->TotalLeadCount = $_TotalLeadCount);
	}
	/**
	 * Get TotalLeadCount
	 * @return int
	 */
	public function getTotalLeadCount()
	{
		return $this->TotalLeadCount;
	}
	/**
	 * Set ClassifiedAdOfferCount
	 * @param int ClassifiedAdOfferCount
	 * @return int
	 */
	public function setClassifiedAdOfferCount($_ClassifiedAdOfferCount)
	{
		return ($this->ClassifiedAdOfferCount = $_ClassifiedAdOfferCount);
	}
	/**
	 * Get ClassifiedAdOfferCount
	 * @return int
	 */
	public function getClassifiedAdOfferCount()
	{
		return $this->ClassifiedAdOfferCount;
	}
	/**
	 * Set TotalListingsWithLeads
	 * @param int TotalListingsWithLeads
	 * @return int
	 */
	public function setTotalListingsWithLeads($_TotalListingsWithLeads)
	{
		return ($this->TotalListingsWithLeads = $_TotalListingsWithLeads);
	}
	/**
	 * Get TotalListingsWithLeads
	 * @return int
	 */
	public function getTotalListingsWithLeads()
	{
		return $this->TotalListingsWithLeads;
	}
	/**
	 * Set QuantityLimitRemaining
	 * @param long QuantityLimitRemaining
	 * @return long
	 */
	public function setQuantityLimitRemaining($_QuantityLimitRemaining)
	{
		return ($this->QuantityLimitRemaining = $_QuantityLimitRemaining);
	}
	/**
	 * Get QuantityLimitRemaining
	 * @return long
	 */
	public function getQuantityLimitRemaining()
	{
		return $this->QuantityLimitRemaining;
	}
	/**
	 * Set AmountLimitRemaining
	 * @param AmountType AmountLimitRemaining
	 * @return AmountType
	 */
	public function setAmountLimitRemaining($_AmountLimitRemaining)
	{
		return ($this->AmountLimitRemaining = $_AmountLimitRemaining);
	}
	/**
	 * Get AmountLimitRemaining
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmountLimitRemaining()
	{
		return $this->AmountLimitRemaining;
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