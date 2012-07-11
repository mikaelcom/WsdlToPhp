<?php
/**
 * Class file for XiQuotesTypeGetDelayedChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedChartResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedChartResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedChartResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedChartResult
	 * @return XiQuotesTypeGetDelayedChartResponse
	 */
	public function __construct($_GetDelayedChartResult = null)
	{
		parent::__construct(array('GetDelayedChartResult'=>$_GetDelayedChartResult));
	}
	/**
	 * Set GetDelayedChartResult
	 * @param IntradayChart GetDelayedChartResult
	 * @return IntradayChart
	 */
	public function setGetDelayedChartResult($_GetDelayedChartResult)
	{
		return ($this->GetDelayedChartResult = $_GetDelayedChartResult);
	}
	/**
	 * Get GetDelayedChartResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedChartResult()
	{
		return $this->GetDelayedChartResult;
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