<?php
/**
 * Class file for XiReleasesTypeGetTopMarketHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeGetTopMarketHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeGetTopMarketHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The GetTopMarketHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeMarketHeadlines
	 */
	public $GetTopMarketHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeMarketHeadlines GetTopMarketHeadlinesResult
	 * @return XiReleasesTypeGetTopMarketHeadlinesResponse
	 */
	public function __construct($_GetTopMarketHeadlinesResult = null)
	{
		parent::__construct(array('GetTopMarketHeadlinesResult'=>$_GetTopMarketHeadlinesResult));
	}
	/**
	 * Set GetTopMarketHeadlinesResult
	 * @param MarketHeadlines GetTopMarketHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetTopMarketHeadlinesResult($_GetTopMarketHeadlinesResult)
	{
		return ($this->GetTopMarketHeadlinesResult = $_GetTopMarketHeadlinesResult);
	}
	/**
	 * Get GetTopMarketHeadlinesResult
	 * @return XiReleasesTypeMarketHeadlines
	 */
	public function getGetTopMarketHeadlinesResult()
	{
		return $this->GetTopMarketHeadlinesResult;
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