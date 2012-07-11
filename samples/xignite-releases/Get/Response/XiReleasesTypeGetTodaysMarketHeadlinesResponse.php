<?php
/**
 * Class file for XiReleasesTypeGetTodaysMarketHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetTodaysMarketHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetTodaysMarketHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetTodaysMarketHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeMarketHeadlines
	 */
	public $GetTodaysMarketHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeMarketHeadlines GetTodaysMarketHeadlinesResult
	 * @return XiReleasesTypeGetTodaysMarketHeadlinesResponse
	 */
	public function __construct($_GetTodaysMarketHeadlinesResult = null)
	{
		parent::__construct(array('GetTodaysMarketHeadlinesResult'=>$_GetTodaysMarketHeadlinesResult));
	}
	/**
	 * Set GetTodaysMarketHeadlinesResult
	 * @param MarketHeadlines GetTodaysMarketHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetTodaysMarketHeadlinesResult($_GetTodaysMarketHeadlinesResult)
	{
		return ($this->GetTodaysMarketHeadlinesResult = $_GetTodaysMarketHeadlinesResult);
	}
	/**
	 * Get GetTodaysMarketHeadlinesResult
	 * @return XiReleasesTypeMarketHeadlines
	 */
	public function getGetTodaysMarketHeadlinesResult()
	{
		return $this->GetTodaysMarketHeadlinesResult;
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