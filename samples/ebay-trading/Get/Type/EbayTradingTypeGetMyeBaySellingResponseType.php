<?php
/**
 * Class file for EbayTradingTypeGetMyeBaySellingResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyeBaySellingResponseType
 * Documentation : Returns summary and detail information about items the user is selling, items scheduled to sell, currently listed, sold, and closed but not sold.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyeBaySellingResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SellingSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains summary information about the items the user is selling.
	 * @var EbayTradingTypeSellingSummaryType
	 */
	public $SellingSummary;
	/**
	 * The ScheduledList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the user has scheduled for sale, but whose listings have not yet started.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $ScheduledList;
	/**
	 * The ActiveList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the user is selling that have active listings.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $ActiveList;
	/**
	 * The SoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the user has sold.
	 * @var EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public $SoldList;
	/**
	 * The UnsoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items whose listings have ended but that have not sold.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $UnsoldList;
	/**
	 * The Summary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains summary information about the items the user is selling.
	 * @var EbayTradingTypeMyeBaySellingSummaryType
	 */
	public $Summary;
	/**
	 * The BidList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the seller's active listings with bids. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $BidList;
	/**
	 * The DeletedFromSoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the seller has sold and deleted from My eBay.
	 * @var EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public $DeletedFromSoldList;
	/**
	 * The DeletedFromUnsoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items with listings that were ended or did not sell and have been deleted from My eBay.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $DeletedFromUnsoldList;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingSummaryType SellingSummary
	 * @param EbayTradingTypePaginatedItemArrayType ScheduledList
	 * @param EbayTradingTypePaginatedItemArrayType ActiveList
	 * @param EbayTradingTypePaginatedOrderTransactionArrayType SoldList
	 * @param EbayTradingTypePaginatedItemArrayType UnsoldList
	 * @param EbayTradingTypeMyeBaySellingSummaryType Summary
	 * @param EbayTradingTypePaginatedItemArrayType BidList
	 * @param EbayTradingTypePaginatedOrderTransactionArrayType DeletedFromSoldList
	 * @param EbayTradingTypePaginatedItemArrayType DeletedFromUnsoldList
	 * @return EbayTradingTypeGetMyeBaySellingResponseType
	 */
	public function __construct($_SellingSummary = null,$_ScheduledList = null,$_ActiveList = null,$_SoldList = null,$_UnsoldList = null,$_Summary = null,$_BidList = null,$_DeletedFromSoldList = null,$_DeletedFromUnsoldList = null)
	{
		EbayTradingWsdlClass::__construct(array('SellingSummary'=>$_SellingSummary,'ScheduledList'=>$_ScheduledList,'ActiveList'=>$_ActiveList,'SoldList'=>$_SoldList,'UnsoldList'=>$_UnsoldList,'Summary'=>$_Summary,'BidList'=>$_BidList,'DeletedFromSoldList'=>$_DeletedFromSoldList,'DeletedFromUnsoldList'=>$_DeletedFromUnsoldList));
	}
	/**
	 * Set SellingSummary
	 * @param SellingSummaryType SellingSummary
	 * @return SellingSummaryType
	 */
	public function setSellingSummary($_SellingSummary)
	{
		return ($this->SellingSummary = $_SellingSummary);
	}
	/**
	 * Get SellingSummary
	 * @return EbayTradingTypeSellingSummaryType
	 */
	public function getSellingSummary()
	{
		return $this->SellingSummary;
	}
	/**
	 * Set ScheduledList
	 * @param PaginatedItemArrayType ScheduledList
	 * @return PaginatedItemArrayType
	 */
	public function setScheduledList($_ScheduledList)
	{
		return ($this->ScheduledList = $_ScheduledList);
	}
	/**
	 * Get ScheduledList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getScheduledList()
	{
		return $this->ScheduledList;
	}
	/**
	 * Set ActiveList
	 * @param PaginatedItemArrayType ActiveList
	 * @return PaginatedItemArrayType
	 */
	public function setActiveList($_ActiveList)
	{
		return ($this->ActiveList = $_ActiveList);
	}
	/**
	 * Get ActiveList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getActiveList()
	{
		return $this->ActiveList;
	}
	/**
	 * Set SoldList
	 * @param PaginatedOrderTransactionArrayType SoldList
	 * @return PaginatedOrderTransactionArrayType
	 */
	public function setSoldList($_SoldList)
	{
		return ($this->SoldList = $_SoldList);
	}
	/**
	 * Get SoldList
	 * @return EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public function getSoldList()
	{
		return $this->SoldList;
	}
	/**
	 * Set UnsoldList
	 * @param PaginatedItemArrayType UnsoldList
	 * @return PaginatedItemArrayType
	 */
	public function setUnsoldList($_UnsoldList)
	{
		return ($this->UnsoldList = $_UnsoldList);
	}
	/**
	 * Get UnsoldList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getUnsoldList()
	{
		return $this->UnsoldList;
	}
	/**
	 * Set Summary
	 * @param MyeBaySellingSummaryType Summary
	 * @return MyeBaySellingSummaryType
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return EbayTradingTypeMyeBaySellingSummaryType
	 */
	public function getSummary()
	{
		return $this->Summary;
	}
	/**
	 * Set BidList
	 * @param PaginatedItemArrayType BidList
	 * @return PaginatedItemArrayType
	 */
	public function setBidList($_BidList)
	{
		return ($this->BidList = $_BidList);
	}
	/**
	 * Get BidList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getBidList()
	{
		return $this->BidList;
	}
	/**
	 * Set DeletedFromSoldList
	 * @param PaginatedOrderTransactionArrayType DeletedFromSoldList
	 * @return PaginatedOrderTransactionArrayType
	 */
	public function setDeletedFromSoldList($_DeletedFromSoldList)
	{
		return ($this->DeletedFromSoldList = $_DeletedFromSoldList);
	}
	/**
	 * Get DeletedFromSoldList
	 * @return EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public function getDeletedFromSoldList()
	{
		return $this->DeletedFromSoldList;
	}
	/**
	 * Set DeletedFromUnsoldList
	 * @param PaginatedItemArrayType DeletedFromUnsoldList
	 * @return PaginatedItemArrayType
	 */
	public function setDeletedFromUnsoldList($_DeletedFromUnsoldList)
	{
		return ($this->DeletedFromUnsoldList = $_DeletedFromUnsoldList);
	}
	/**
	 * Get DeletedFromUnsoldList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getDeletedFromUnsoldList()
	{
		return $this->DeletedFromUnsoldList;
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