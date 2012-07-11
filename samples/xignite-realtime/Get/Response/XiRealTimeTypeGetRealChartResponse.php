<?php
/**
 * Class file for XiRealTimeTypeGetRealChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealChartResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealChartResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeIntradayChart
	 */
	public $GetRealChartResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeIntradayChart GetRealChartResult
	 * @return XiRealTimeTypeGetRealChartResponse
	 */
	public function __construct($_GetRealChartResult = null)
	{
		parent::__construct(array('GetRealChartResult'=>$_GetRealChartResult));
	}
	/**
	 * Set GetRealChartResult
	 * @param IntradayChart GetRealChartResult
	 * @return IntradayChart
	 */
	public function setGetRealChartResult($_GetRealChartResult)
	{
		return ($this->GetRealChartResult = $_GetRealChartResult);
	}
	/**
	 * Get GetRealChartResult
	 * @return XiRealTimeTypeIntradayChart
	 */
	public function getGetRealChartResult()
	{
		return $this->GetRealChartResult;
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