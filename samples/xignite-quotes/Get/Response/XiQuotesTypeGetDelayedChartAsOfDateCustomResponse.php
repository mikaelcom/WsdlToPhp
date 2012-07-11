<?php
/**
 * Class file for XiQuotesTypeGetDelayedChartAsOfDateCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedChartAsOfDateCustomResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedChartAsOfDateCustomResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedChartAsOfDateCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedChartAsOfDateCustomResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedChartAsOfDateCustomResult
	 * @return XiQuotesTypeGetDelayedChartAsOfDateCustomResponse
	 */
	public function __construct($_GetDelayedChartAsOfDateCustomResult = null)
	{
		parent::__construct(array('GetDelayedChartAsOfDateCustomResult'=>$_GetDelayedChartAsOfDateCustomResult));
	}
	/**
	 * Set GetDelayedChartAsOfDateCustomResult
	 * @param IntradayChart GetDelayedChartAsOfDateCustomResult
	 * @return IntradayChart
	 */
	public function setGetDelayedChartAsOfDateCustomResult($_GetDelayedChartAsOfDateCustomResult)
	{
		return ($this->GetDelayedChartAsOfDateCustomResult = $_GetDelayedChartAsOfDateCustomResult);
	}
	/**
	 * Get GetDelayedChartAsOfDateCustomResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedChartAsOfDateCustomResult()
	{
		return $this->GetDelayedChartAsOfDateCustomResult;
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