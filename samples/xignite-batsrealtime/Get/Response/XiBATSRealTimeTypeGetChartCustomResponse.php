<?php
/**
 * Class file for XiBATSRealTimeTypeGetChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeGetChartCustomResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeGetChartCustomResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The GetChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeIntradayChart
	 */
	public $GetChartCustomResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeIntradayChart GetChartCustomResult
	 * @return XiBATSRealTimeTypeGetChartCustomResponse
	 */
	public function __construct($_GetChartCustomResult = null)
	{
		parent::__construct(array('GetChartCustomResult'=>$_GetChartCustomResult));
	}
	/**
	 * Set GetChartCustomResult
	 * @param IntradayChart GetChartCustomResult
	 * @return IntradayChart
	 */
	public function setGetChartCustomResult($_GetChartCustomResult)
	{
		return ($this->GetChartCustomResult = $_GetChartCustomResult);
	}
	/**
	 * Get GetChartCustomResult
	 * @return XiBATSRealTimeTypeIntradayChart
	 */
	public function getGetChartCustomResult()
	{
		return $this->GetChartCustomResult;
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