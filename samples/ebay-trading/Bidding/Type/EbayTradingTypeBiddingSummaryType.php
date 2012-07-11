<?php
/**
 * Class file for EbayTradingTypeBiddingSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBiddingSummaryType
 * Documentation : Contains bidding summary information for the bidder of an item.
 * @date 04/07/2012
 */
class EbayTradingTypeBiddingSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The SummaryDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of days included in the summary. Currently always set to 30 days.
	 * @var int
	 */
	public $SummaryDays;
	/**
	 * The TotalBids
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of bids that the bidder has placed.
	 * @var int
	 */
	public $TotalBids;
	/**
	 * The BidActivityWithSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of the bidder's total bids that the bidder placed on items that the seller is offering.
	 * @var int
	 */
	public $BidActivityWithSeller;
	/**
	 * The BidsToUniqueSellers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of unique sellers whose items the bidder has placed bids on.
	 * @var int
	 */
	public $BidsToUniqueSellers;
	/**
	 * The BidsToUniqueCategories
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For items that the bidder has bid on, the number of unique categories that they belong to.
	 * @var int
	 */
	public $BidsToUniqueCategories;
	/**
	 * The BidRetractions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of bids that the bidder has retracted.
	 * @var int
	 */
	public $BidRetractions;
	/**
	 * The ItemBidDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Detail bidding information on the items that the bidder has bid on.
	 * @var EbayTradingTypeItemBidDetailsType
	 */
	public $ItemBidDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int SummaryDays
	 * @param int TotalBids
	 * @param int BidActivityWithSeller
	 * @param int BidsToUniqueSellers
	 * @param int BidsToUniqueCategories
	 * @param int BidRetractions
	 * @param EbayTradingTypeItemBidDetailsType ItemBidDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeBiddingSummaryType
	 */
	public function __construct($_SummaryDays = null,$_TotalBids = null,$_BidActivityWithSeller = null,$_BidsToUniqueSellers = null,$_BidsToUniqueCategories = null,$_BidRetractions = null,$_ItemBidDetails = null,$_any = null)
	{
		parent::__construct(array('SummaryDays'=>$_SummaryDays,'TotalBids'=>$_TotalBids,'BidActivityWithSeller'=>$_BidActivityWithSeller,'BidsToUniqueSellers'=>$_BidsToUniqueSellers,'BidsToUniqueCategories'=>$_BidsToUniqueCategories,'BidRetractions'=>$_BidRetractions,'ItemBidDetails'=>$_ItemBidDetails,'any'=>$_any));
	}
	/**
	 * Set SummaryDays
	 * @param int SummaryDays
	 * @return int
	 */
	public function setSummaryDays($_SummaryDays)
	{
		return ($this->SummaryDays = $_SummaryDays);
	}
	/**
	 * Get SummaryDays
	 * @return int
	 */
	public function getSummaryDays()
	{
		return $this->SummaryDays;
	}
	/**
	 * Set TotalBids
	 * @param int TotalBids
	 * @return int
	 */
	public function setTotalBids($_TotalBids)
	{
		return ($this->TotalBids = $_TotalBids);
	}
	/**
	 * Get TotalBids
	 * @return int
	 */
	public function getTotalBids()
	{
		return $this->TotalBids;
	}
	/**
	 * Set BidActivityWithSeller
	 * @param int BidActivityWithSeller
	 * @return int
	 */
	public function setBidActivityWithSeller($_BidActivityWithSeller)
	{
		return ($this->BidActivityWithSeller = $_BidActivityWithSeller);
	}
	/**
	 * Get BidActivityWithSeller
	 * @return int
	 */
	public function getBidActivityWithSeller()
	{
		return $this->BidActivityWithSeller;
	}
	/**
	 * Set BidsToUniqueSellers
	 * @param int BidsToUniqueSellers
	 * @return int
	 */
	public function setBidsToUniqueSellers($_BidsToUniqueSellers)
	{
		return ($this->BidsToUniqueSellers = $_BidsToUniqueSellers);
	}
	/**
	 * Get BidsToUniqueSellers
	 * @return int
	 */
	public function getBidsToUniqueSellers()
	{
		return $this->BidsToUniqueSellers;
	}
	/**
	 * Set BidsToUniqueCategories
	 * @param int BidsToUniqueCategories
	 * @return int
	 */
	public function setBidsToUniqueCategories($_BidsToUniqueCategories)
	{
		return ($this->BidsToUniqueCategories = $_BidsToUniqueCategories);
	}
	/**
	 * Get BidsToUniqueCategories
	 * @return int
	 */
	public function getBidsToUniqueCategories()
	{
		return $this->BidsToUniqueCategories;
	}
	/**
	 * Set BidRetractions
	 * @param int BidRetractions
	 * @return int
	 */
	public function setBidRetractions($_BidRetractions)
	{
		return ($this->BidRetractions = $_BidRetractions);
	}
	/**
	 * Get BidRetractions
	 * @return int
	 */
	public function getBidRetractions()
	{
		return $this->BidRetractions;
	}
	/**
	 * Set ItemBidDetails
	 * @param ItemBidDetailsType ItemBidDetails
	 * @return ItemBidDetailsType
	 */
	public function setItemBidDetails($_ItemBidDetails)
	{
		return ($this->ItemBidDetails = $_ItemBidDetails);
	}
	/**
	 * Get ItemBidDetails
	 * @return EbayTradingTypeItemBidDetailsType
	 */
	public function getItemBidDetails()
	{
		return $this->ItemBidDetails;
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