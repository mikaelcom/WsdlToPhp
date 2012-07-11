<?php
/**
 * Class file for XiFuturesTypeGetTodaysIndustryHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTodaysIndustryHeadlinesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetTodaysIndustryHeadlinesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetTodaysIndustryHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeMarketHeadlines
	 */
	public $GetTodaysIndustryHeadlinesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeMarketHeadlines GetTodaysIndustryHeadlinesResult
	 * @return XiFuturesTypeGetTodaysIndustryHeadlinesResponse
	 */
	public function __construct($_GetTodaysIndustryHeadlinesResult = null)
	{
		parent::__construct(array('GetTodaysIndustryHeadlinesResult'=>$_GetTodaysIndustryHeadlinesResult));
	}
	/**
	 * Set GetTodaysIndustryHeadlinesResult
	 * @param MarketHeadlines GetTodaysIndustryHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetTodaysIndustryHeadlinesResult($_GetTodaysIndustryHeadlinesResult)
	{
		return ($this->GetTodaysIndustryHeadlinesResult = $_GetTodaysIndustryHeadlinesResult);
	}
	/**
	 * Get GetTodaysIndustryHeadlinesResult
	 * @return XiFuturesTypeMarketHeadlines
	 */
	public function getGetTodaysIndustryHeadlinesResult()
	{
		return $this->GetTodaysIndustryHeadlinesResult;
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