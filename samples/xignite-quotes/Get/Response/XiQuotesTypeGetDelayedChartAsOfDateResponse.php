<?php
/**
 * Class file for XiQuotesTypeGetDelayedChartAsOfDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedChartAsOfDateResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedChartAsOfDateResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedChartAsOfDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedChartAsOfDateResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedChartAsOfDateResult
	 * @return XiQuotesTypeGetDelayedChartAsOfDateResponse
	 */
	public function __construct($_GetDelayedChartAsOfDateResult = null)
	{
		parent::__construct(array('GetDelayedChartAsOfDateResult'=>$_GetDelayedChartAsOfDateResult));
	}
	/**
	 * Set GetDelayedChartAsOfDateResult
	 * @param IntradayChart GetDelayedChartAsOfDateResult
	 * @return IntradayChart
	 */
	public function setGetDelayedChartAsOfDateResult($_GetDelayedChartAsOfDateResult)
	{
		return ($this->GetDelayedChartAsOfDateResult = $_GetDelayedChartAsOfDateResult);
	}
	/**
	 * Get GetDelayedChartAsOfDateResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedChartAsOfDateResult()
	{
		return $this->GetDelayedChartAsOfDateResult;
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