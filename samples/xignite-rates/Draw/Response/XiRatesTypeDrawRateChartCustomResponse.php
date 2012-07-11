<?php
/**
 * Class file for XiRatesTypeDrawRateChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawRateChartCustomResponse
 * @date 08/07/2012
 */
class XiRatesTypeDrawRateChartCustomResponse extends XiRatesWsdlClass
{
	/**
	 * The DrawRateChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateChart
	 */
	public $DrawRateChartCustomResult;
	/**
	 * Constructor
	 * @param XiRatesTypeRateChart DrawRateChartCustomResult
	 * @return XiRatesTypeDrawRateChartCustomResponse
	 */
	public function __construct($_DrawRateChartCustomResult = null)
	{
		parent::__construct(array('DrawRateChartCustomResult'=>$_DrawRateChartCustomResult));
	}
	/**
	 * Set DrawRateChartCustomResult
	 * @param RateChart DrawRateChartCustomResult
	 * @return RateChart
	 */
	public function setDrawRateChartCustomResult($_DrawRateChartCustomResult)
	{
		return ($this->DrawRateChartCustomResult = $_DrawRateChartCustomResult);
	}
	/**
	 * Get DrawRateChartCustomResult
	 * @return XiRatesTypeRateChart
	 */
	public function getDrawRateChartCustomResult()
	{
		return $this->DrawRateChartCustomResult;
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