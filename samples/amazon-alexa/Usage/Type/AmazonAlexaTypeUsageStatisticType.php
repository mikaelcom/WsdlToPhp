<?php
/**
 * Class file for AmazonAlexaTypeUsageStatisticType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeUsageStatisticType
 * @date 10/07/2012
 */
class AmazonAlexaTypeUsageStatisticType extends AmazonAlexaWsdlClass
{
	/**
	 * The TimeRange
	 * @var AmazonAlexaTypeTimeRangeType
	 */
	public $TimeRange;
	/**
	 * The Rank
	 * @var AmazonAlexaTypeTrafficStatType
	 */
	public $Rank;
	/**
	 * The Reach
	 * @var AmazonAlexaTypeReach
	 */
	public $Reach;
	/**
	 * The PageViews
	 * @var AmazonAlexaTypePageViews
	 */
	public $PageViews;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeTimeRangeType TimeRange
	 * @param AmazonAlexaTypeTrafficStatType Rank
	 * @param AmazonAlexaTypeReach Reach
	 * @param AmazonAlexaTypePageViews PageViews
	 * @return AmazonAlexaTypeUsageStatisticType
	 */
	public function __construct($_TimeRange = null,$_Rank = null,$_Reach = null,$_PageViews = null)
	{
		parent::__construct(array('TimeRange'=>$_TimeRange,'Rank'=>$_Rank,'Reach'=>$_Reach,'PageViews'=>$_PageViews));
	}
	/**
	 * Set TimeRange
	 * @param TimeRangeType TimeRange
	 * @return TimeRangeType
	 */
	public function setTimeRange($_TimeRange)
	{
		return ($this->TimeRange = $_TimeRange);
	}
	/**
	 * Get TimeRange
	 * @return AmazonAlexaTypeTimeRangeType
	 */
	public function getTimeRange()
	{
		return $this->TimeRange;
	}
	/**
	 * Set Rank
	 * @param TrafficStatType Rank
	 * @return TrafficStatType
	 */
	public function setRank($_Rank)
	{
		return ($this->Rank = $_Rank);
	}
	/**
	 * Get Rank
	 * @return AmazonAlexaTypeTrafficStatType
	 */
	public function getRank()
	{
		return $this->Rank;
	}
	/**
	 * Set Reach
	 * @param Reach Reach
	 * @return Reach
	 */
	public function setReach($_Reach)
	{
		return ($this->Reach = $_Reach);
	}
	/**
	 * Get Reach
	 * @return AmazonAlexaTypeReach
	 */
	public function getReach()
	{
		return $this->Reach;
	}
	/**
	 * Set PageViews
	 * @param PageViews PageViews
	 * @return PageViews
	 */
	public function setPageViews($_PageViews)
	{
		return ($this->PageViews = $_PageViews);
	}
	/**
	 * Get PageViews
	 * @return AmazonAlexaTypePageViews
	 */
	public function getPageViews()
	{
		return $this->PageViews;
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