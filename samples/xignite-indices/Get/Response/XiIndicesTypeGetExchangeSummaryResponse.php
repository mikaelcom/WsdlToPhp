<?php
/**
 * Class file for XiIndicesTypeGetExchangeSummaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetExchangeSummaryResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetExchangeSummaryResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetExchangeSummaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeExchangeSummary
	 */
	public $GetExchangeSummaryResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeExchangeSummary GetExchangeSummaryResult
	 * @return XiIndicesTypeGetExchangeSummaryResponse
	 */
	public function __construct($_GetExchangeSummaryResult = null)
	{
		parent::__construct(array('GetExchangeSummaryResult'=>$_GetExchangeSummaryResult));
	}
	/**
	 * Set GetExchangeSummaryResult
	 * @param ExchangeSummary GetExchangeSummaryResult
	 * @return ExchangeSummary
	 */
	public function setGetExchangeSummaryResult($_GetExchangeSummaryResult)
	{
		return ($this->GetExchangeSummaryResult = $_GetExchangeSummaryResult);
	}
	/**
	 * Get GetExchangeSummaryResult
	 * @return XiIndicesTypeExchangeSummary
	 */
	public function getGetExchangeSummaryResult()
	{
		return $this->GetExchangeSummaryResult;
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