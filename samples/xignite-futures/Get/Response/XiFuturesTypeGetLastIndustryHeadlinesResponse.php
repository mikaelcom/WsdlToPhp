<?php
/**
 * Class file for XiFuturesTypeGetLastIndustryHeadlinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetLastIndustryHeadlinesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetLastIndustryHeadlinesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetLastIndustryHeadlinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeMarketHeadlines
	 */
	public $GetLastIndustryHeadlinesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeMarketHeadlines GetLastIndustryHeadlinesResult
	 * @return XiFuturesTypeGetLastIndustryHeadlinesResponse
	 */
	public function __construct($_GetLastIndustryHeadlinesResult = null)
	{
		parent::__construct(array('GetLastIndustryHeadlinesResult'=>$_GetLastIndustryHeadlinesResult));
	}
	/**
	 * Set GetLastIndustryHeadlinesResult
	 * @param MarketHeadlines GetLastIndustryHeadlinesResult
	 * @return MarketHeadlines
	 */
	public function setGetLastIndustryHeadlinesResult($_GetLastIndustryHeadlinesResult)
	{
		return ($this->GetLastIndustryHeadlinesResult = $_GetLastIndustryHeadlinesResult);
	}
	/**
	 * Get GetLastIndustryHeadlinesResult
	 * @return XiFuturesTypeMarketHeadlines
	 */
	public function getGetLastIndustryHeadlinesResult()
	{
		return $this->GetLastIndustryHeadlinesResult;
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