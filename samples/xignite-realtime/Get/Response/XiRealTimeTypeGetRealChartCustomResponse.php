<?php
/**
 * Class file for XiRealTimeTypeGetRealChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealChartCustomResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealChartCustomResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeIntradayChart
	 */
	public $GetRealChartCustomResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeIntradayChart GetRealChartCustomResult
	 * @return XiRealTimeTypeGetRealChartCustomResponse
	 */
	public function __construct($_GetRealChartCustomResult = null)
	{
		parent::__construct(array('GetRealChartCustomResult'=>$_GetRealChartCustomResult));
	}
	/**
	 * Set GetRealChartCustomResult
	 * @param IntradayChart GetRealChartCustomResult
	 * @return IntradayChart
	 */
	public function setGetRealChartCustomResult($_GetRealChartCustomResult)
	{
		return ($this->GetRealChartCustomResult = $_GetRealChartCustomResult);
	}
	/**
	 * Get GetRealChartCustomResult
	 * @return XiRealTimeTypeIntradayChart
	 */
	public function getGetRealChartCustomResult()
	{
		return $this->GetRealChartCustomResult;
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