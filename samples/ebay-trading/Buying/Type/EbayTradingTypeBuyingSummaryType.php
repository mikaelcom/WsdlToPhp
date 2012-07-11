<?php
/**
 * Class file for EbayTradingTypeBuyingSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyingSummaryType
 * @date 04/07/2012
 */
class EbayTradingTypeBuyingSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The BiddingCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items the user has bid on.
	 * @var int
	 */
	public $BiddingCount;
	/**
	 * The WinningCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items the user has bid on and is winning, but that have not yet ended.
	 * @var int
	 */
	public $WinningCount;
	/**
	 * The TotalWinningCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total cost of items the user is presently winning.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalWinningCost;
	/**
	 * The WonCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items the user has bid on and won.
	 * @var int
	 */
	public $WonCount;
	/**
	 * The TotalWonCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total cost of items the user has bid on and won.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalWonCost;
	/**
	 * The WonDurationInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time period for which won items are displayed. Default is 31 days.
	 * @var int
	 */
	public $WonDurationInDays;
	/**
	 * The BestOfferCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of items the user has made best offers on.
	 * @var int
	 */
	public $BestOfferCount;
	/**
	 * Constructor
	 * @param int BiddingCount
	 * @param int WinningCount
	 * @param EbayTradingTypeAmountType TotalWinningCost
	 * @param int WonCount
	 * @param EbayTradingTypeAmountType TotalWonCost
	 * @param int WonDurationInDays
	 * @param int BestOfferCount
	 * @return EbayTradingTypeBuyingSummaryType
	 */
	public function __construct($_BiddingCount = null,$_WinningCount = null,$_TotalWinningCost = null,$_WonCount = null,$_TotalWonCost = null,$_WonDurationInDays = null,$_BestOfferCount = null)
	{
		parent::__construct(array('BiddingCount'=>$_BiddingCount,'WinningCount'=>$_WinningCount,'TotalWinningCost'=>$_TotalWinningCost,'WonCount'=>$_WonCount,'TotalWonCost'=>$_TotalWonCost,'WonDurationInDays'=>$_WonDurationInDays,'BestOfferCount'=>$_BestOfferCount));
	}
	/**
	 * Set BiddingCount
	 * @param int BiddingCount
	 * @return int
	 */
	public function setBiddingCount($_BiddingCount)
	{
		return ($this->BiddingCount = $_BiddingCount);
	}
	/**
	 * Get BiddingCount
	 * @return int
	 */
	public function getBiddingCount()
	{
		return $this->BiddingCount;
	}
	/**
	 * Set WinningCount
	 * @param int WinningCount
	 * @return int
	 */
	public function setWinningCount($_WinningCount)
	{
		return ($this->WinningCount = $_WinningCount);
	}
	/**
	 * Get WinningCount
	 * @return int
	 */
	public function getWinningCount()
	{
		return $this->WinningCount;
	}
	/**
	 * Set TotalWinningCost
	 * @param AmountType TotalWinningCost
	 * @return AmountType
	 */
	public function setTotalWinningCost($_TotalWinningCost)
	{
		return ($this->TotalWinningCost = $_TotalWinningCost);
	}
	/**
	 * Get TotalWinningCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalWinningCost()
	{
		return $this->TotalWinningCost;
	}
	/**
	 * Set WonCount
	 * @param int WonCount
	 * @return int
	 */
	public function setWonCount($_WonCount)
	{
		return ($this->WonCount = $_WonCount);
	}
	/**
	 * Get WonCount
	 * @return int
	 */
	public function getWonCount()
	{
		return $this->WonCount;
	}
	/**
	 * Set TotalWonCost
	 * @param AmountType TotalWonCost
	 * @return AmountType
	 */
	public function setTotalWonCost($_TotalWonCost)
	{
		return ($this->TotalWonCost = $_TotalWonCost);
	}
	/**
	 * Get TotalWonCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalWonCost()
	{
		return $this->TotalWonCost;
	}
	/**
	 * Set WonDurationInDays
	 * @param int WonDurationInDays
	 * @return int
	 */
	public function setWonDurationInDays($_WonDurationInDays)
	{
		return ($this->WonDurationInDays = $_WonDurationInDays);
	}
	/**
	 * Get WonDurationInDays
	 * @return int
	 */
	public function getWonDurationInDays()
	{
		return $this->WonDurationInDays;
	}
	/**
	 * Set BestOfferCount
	 * @param int BestOfferCount
	 * @return int
	 */
	public function setBestOfferCount($_BestOfferCount)
	{
		return ($this->BestOfferCount = $_BestOfferCount);
	}
	/**
	 * Get BestOfferCount
	 * @return int
	 */
	public function getBestOfferCount()
	{
		return $this->BestOfferCount;
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