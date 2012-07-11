<?php
/**
 * Class file for XiQuotesTypeGetDelayedChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedChartCustomResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedChartCustomResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedChartCustomResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedChartCustomResult
	 * @return XiQuotesTypeGetDelayedChartCustomResponse
	 */
	public function __construct($_GetDelayedChartCustomResult = null)
	{
		parent::__construct(array('GetDelayedChartCustomResult'=>$_GetDelayedChartCustomResult));
	}
	/**
	 * Set GetDelayedChartCustomResult
	 * @param IntradayChart GetDelayedChartCustomResult
	 * @return IntradayChart
	 */
	public function setGetDelayedChartCustomResult($_GetDelayedChartCustomResult)
	{
		return ($this->GetDelayedChartCustomResult = $_GetDelayedChartCustomResult);
	}
	/**
	 * Get GetDelayedChartCustomResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedChartCustomResult()
	{
		return $this->GetDelayedChartCustomResult;
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