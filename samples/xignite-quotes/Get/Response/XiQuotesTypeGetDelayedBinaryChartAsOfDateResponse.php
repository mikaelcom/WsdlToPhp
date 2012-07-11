<?php
/**
 * Class file for XiQuotesTypeGetDelayedBinaryChartAsOfDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedBinaryChartAsOfDateResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedBinaryChartAsOfDateResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedBinaryChartAsOfDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedBinaryChartAsOfDateResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedBinaryChartAsOfDateResult
	 * @return XiQuotesTypeGetDelayedBinaryChartAsOfDateResponse
	 */
	public function __construct($_GetDelayedBinaryChartAsOfDateResult = null)
	{
		parent::__construct(array('GetDelayedBinaryChartAsOfDateResult'=>$_GetDelayedBinaryChartAsOfDateResult));
	}
	/**
	 * Set GetDelayedBinaryChartAsOfDateResult
	 * @param IntradayChart GetDelayedBinaryChartAsOfDateResult
	 * @return IntradayChart
	 */
	public function setGetDelayedBinaryChartAsOfDateResult($_GetDelayedBinaryChartAsOfDateResult)
	{
		return ($this->GetDelayedBinaryChartAsOfDateResult = $_GetDelayedBinaryChartAsOfDateResult);
	}
	/**
	 * Get GetDelayedBinaryChartAsOfDateResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedBinaryChartAsOfDateResult()
	{
		return $this->GetDelayedBinaryChartAsOfDateResult;
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