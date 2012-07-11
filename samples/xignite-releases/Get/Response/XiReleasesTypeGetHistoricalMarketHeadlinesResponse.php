<?php
/**
 * Class file for XiReleasesTypeGetHistoricalMarketHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetHistoricalMarketHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetHistoricalMarketHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetHistoricalMarketHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeMarketHeadlines
	 */
	public $GetHistoricalMarketHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeMarketHeadlines GetHistoricalMarketHeadlinesResult
	 * @return XiReleasesTypeGetHistoricalMarketHeadlinesResponse
	 */
	public function __construct($_GetHistoricalMarketHeadlinesResult = null)
	{
		parent::__construct(array('GetHistoricalMarketHeadlinesResult'=>$_GetHistoricalMarketHeadlinesResult));
	}
	/**
	 * Set GetHistoricalMarketHeadlinesResult
	 * @param MarketHeadlines GetHistoricalMarketHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetHistoricalMarketHeadlinesResult($_GetHistoricalMarketHeadlinesResult)
	{
		return ($this->GetHistoricalMarketHeadlinesResult = $_GetHistoricalMarketHeadlinesResult);
	}
	/**
	 * Get GetHistoricalMarketHeadlinesResult
	 * @return XiReleasesTypeMarketHeadlines
	 */
	public function getGetHistoricalMarketHeadlinesResult()
	{
		return $this->GetHistoricalMarketHeadlinesResult;
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