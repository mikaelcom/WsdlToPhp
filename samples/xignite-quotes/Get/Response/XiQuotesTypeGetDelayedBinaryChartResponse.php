<?php
/**
 * Class file for XiQuotesTypeGetDelayedBinaryChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedBinaryChartResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedBinaryChartResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedBinaryChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedBinaryChartResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedBinaryChartResult
	 * @return XiQuotesTypeGetDelayedBinaryChartResponse
	 */
	public function __construct($_GetDelayedBinaryChartResult = null)
	{
		parent::__construct(array('GetDelayedBinaryChartResult'=>$_GetDelayedBinaryChartResult));
	}
	/**
	 * Set GetDelayedBinaryChartResult
	 * @param IntradayChart GetDelayedBinaryChartResult
	 * @return IntradayChart
	 */
	public function setGetDelayedBinaryChartResult($_GetDelayedBinaryChartResult)
	{
		return ($this->GetDelayedBinaryChartResult = $_GetDelayedBinaryChartResult);
	}
	/**
	 * Get GetDelayedBinaryChartResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedBinaryChartResult()
	{
		return $this->GetDelayedBinaryChartResult;
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