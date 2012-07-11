<?php
/**
 * Class file for AmazonAlexaTypeContributingSiteType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeContributingSiteType
 * @date 10/07/2012
 */
class AmazonAlexaTypeContributingSiteType extends AmazonAlexaWsdlClass
{
	/**
	 * The DataUrl
	 * @var token
	 */
	public $DataUrl;
	/**
	 * The TimeRange
	 * @var AmazonAlexaTypeTimeRange
	 */
	public $TimeRange;
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
	 * @param token DataUrl
	 * @param AmazonAlexaTypeTimeRange TimeRange
	 * @param AmazonAlexaTypeReach Reach
	 * @param AmazonAlexaTypePageViews PageViews
	 * @return AmazonAlexaTypeContributingSiteType
	 */
	public function __construct($_DataUrl = null,$_TimeRange = null,$_Reach = null,$_PageViews = null)
	{
		parent::__construct(array('DataUrl'=>$_DataUrl,'TimeRange'=>$_TimeRange,'Reach'=>$_Reach,'PageViews'=>$_PageViews));
	}
	/**
	 * Set DataUrl
	 * @param token DataUrl
	 * @return token
	 */
	public function setDataUrl($_DataUrl)
	{
		return ($this->DataUrl = $_DataUrl);
	}
	/**
	 * Get DataUrl
	 * @return token
	 */
	public function getDataUrl()
	{
		return $this->DataUrl;
	}
	/**
	 * Set TimeRange
	 * @param TimeRange TimeRange
	 * @return TimeRange
	 */
	public function setTimeRange($_TimeRange)
	{
		return ($this->TimeRange = $_TimeRange);
	}
	/**
	 * Get TimeRange
	 * @return AmazonAlexaTypeTimeRange
	 */
	public function getTimeRange()
	{
		return $this->TimeRange;
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