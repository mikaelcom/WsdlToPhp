<?php
/**
 * Class file for XiFuturesTypeGetTopIndustryHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTopIndustryHeadlinesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetTopIndustryHeadlinesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetTopIndustryHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeMarketHeadlines
	 */
	public $GetTopIndustryHeadlinesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeMarketHeadlines GetTopIndustryHeadlinesResult
	 * @return XiFuturesTypeGetTopIndustryHeadlinesResponse
	 */
	public function __construct($_GetTopIndustryHeadlinesResult = null)
	{
		parent::__construct(array('GetTopIndustryHeadlinesResult'=>$_GetTopIndustryHeadlinesResult));
	}
	/**
	 * Set GetTopIndustryHeadlinesResult
	 * @param MarketHeadlines GetTopIndustryHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetTopIndustryHeadlinesResult($_GetTopIndustryHeadlinesResult)
	{
		return ($this->GetTopIndustryHeadlinesResult = $_GetTopIndustryHeadlinesResult);
	}
	/**
	 * Get GetTopIndustryHeadlinesResult
	 * @return XiFuturesTypeMarketHeadlines
	 */
	public function getGetTopIndustryHeadlinesResult()
	{
		return $this->GetTopIndustryHeadlinesResult;
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