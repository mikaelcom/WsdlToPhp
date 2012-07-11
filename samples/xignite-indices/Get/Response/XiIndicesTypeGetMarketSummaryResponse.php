<?php
/**
 * Class file for XiIndicesTypeGetMarketSummaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetMarketSummaryResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetMarketSummaryResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetMarketSummaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeMarketSummary
	 */
	public $GetMarketSummaryResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeMarketSummary GetMarketSummaryResult
	 * @return XiIndicesTypeGetMarketSummaryResponse
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
	 * @return XiIndicesTypeMarketSummary
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