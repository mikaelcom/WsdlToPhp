<?php
/**
 * Class file for XiQuotesTypeGetMarketSummaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetMarketSummaryResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetMarketSummaryResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetMarketSummaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeMarketSummary
	 */
	public $GetMarketSummaryResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeMarketSummary GetMarketSummaryResult
	 * @return XiQuotesTypeGetMarketSummaryResponse
	 */
	public function __construct($_GetMarketSummaryResult = null)
	{
		parent::__construct(array('GetMarketSummaryResult'=>$_GetMarketSummaryResult));
	}
	/**
	 * Set GetMarketSummaryResult
	 * @param MarketSummary GetMarketSummaryResult
	 * @return MarketSummary
	 */
	public function setGetMarketSummaryResult($_GetMarketSummaryResult)
	{
		return ($this->GetMarketSummaryResult = $_GetMarketSummaryResult);
	}
	/**
	 * Get GetMarketSummaryResult
	 * @return XiQuotesTypeMarketSummary
	 */
	public function getGetMarketSummaryResult()
	{
		return $this->GetMarketSummaryResult;
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