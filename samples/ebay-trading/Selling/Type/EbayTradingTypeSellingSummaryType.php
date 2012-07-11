<?php
/**
 * Class file for EbayTradingTypeSellingSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingSummaryType
 * Documentation : Contains summary information about the items the seller is selling.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingSummaryType extends EbayTradingWsdlClass
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
	 * 	- documentation : The total value of all items the seller has for sale in all listings.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalAuctionSellingValue;
	/**
	 * The TotalSoldCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of items the seller has sold.
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
	 * Constructor
	 * @param int ActiveAuctionCount
	 * @param int AuctionSellingCount
	 * @param int AuctionBidCount
	 * @param EbayTradingTypeAmountType TotalAuctionSellingValue
	 * @param int TotalSoldCount
	 * @param EbayTradingTypeAmountType TotalSoldValue
	 * @param int SoldDurationInDays
	 * @return EbayTradingTypeSellingSummaryType
	 */
	public function __construct($_ActiveAuctionCount = null,$_AuctionSellingCount = null,$_AuctionBidCount = null,$_TotalAuctionSellingValue = null,$_TotalSoldCount = null,$_TotalSoldValue = null,$_SoldDurationInDays = null)
	{
		parent::__construct(array('ActiveAuctionCount'=>$_ActiveAuctionCount,'AuctionSellingCount'=>$_AuctionSellingCount,'AuctionBidCount'=>$_AuctionBidCount,'TotalAuctionSellingValue'=>$_TotalAuctionSellingValue,'TotalSoldCount'=>$_TotalSoldCount,'TotalSoldValue'=>$_TotalSoldValue,'SoldDurationInDays'=>$_SoldDurationInDays));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>