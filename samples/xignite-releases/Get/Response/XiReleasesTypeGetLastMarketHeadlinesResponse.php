<?php
/**
 * Class file for XiReleasesTypeGetLastMarketHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetLastMarketHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetLastMarketHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetLastMarketHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeMarketHeadlines
	 */
	public $GetLastMarketHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeMarketHeadlines GetLastMarketHeadlinesResult
	 * @return XiReleasesTypeGetLastMarketHeadlinesResponse
	 */
	public function __construct($_GetLastMarketHeadlinesResult = null)
	{
		parent::__construct(array('GetLastMarketHeadlinesResult'=>$_GetLastMarketHeadlinesResult));
	}
	/**
	 * Set GetLastMarketHeadlinesResult
	 * @param MarketHeadlines GetLastMarketHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetLastMarketHeadlinesResult($_GetLastMarketHeadlinesResult)
	{
		return ($this->GetLastMarketHeadlinesResult = $_GetLastMarketHeadlinesResult);
	}
	/**
	 * Get GetLastMarketHeadlinesResult
	 * @return XiReleasesTypeMarketHeadlines
	 */
	public function getGetLastMarketHeadlinesResult()
	{
		return $this->GetLastMarketHeadlinesResult;
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