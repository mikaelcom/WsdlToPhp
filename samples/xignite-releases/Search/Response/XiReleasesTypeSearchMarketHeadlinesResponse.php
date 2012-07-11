<?php
/**
 * Class file for XiReleasesTypeSearchMarketHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeSearchMarketHeadlinesResponse
 * @date 08/07/2012
 */
class XiReleasesTypeSearchMarketHeadlinesResponse extends XiReleasesWsdlClass
{
	/**
	 * The SearchMarketHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiReleasesTypeMarketHeadlines
	 */
	public $SearchMarketHeadlinesResult;
	/**
	 * Constructor
	 * @param XiReleasesTypeMarketHeadlines SearchMarketHeadlinesResult
	 * @return XiReleasesTypeSearchMarketHeadlinesResponse
	 */
	public function __construct($_SearchMarketHeadlinesResult = null)
	{
		parent::__construct(array('SearchMarketHeadlinesResult'=>$_SearchMarketHeadlinesResult));
	}
	/**
	 * Set SearchMarketHeadlinesResult
	 * @param MarketHeadlines SearchMarketHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setSearchMarketHeadlinesResult($_SearchMarketHeadlinesResult)
	{
		return ($this->SearchMarketHeadlinesResult = $_SearchMarketHeadlinesResult);
	}
	/**
	 * Get SearchMarketHeadlinesResult
	 * @return XiReleasesTypeMarketHeadlines
	 */
	public function getSearchMarketHeadlinesResult()
	{
		return $this->SearchMarketHeadlinesResult;
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