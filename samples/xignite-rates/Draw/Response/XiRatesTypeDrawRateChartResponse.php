<?php
/**
 * Class file for XiRatesTypeDrawRateChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawRateChartResponse
 * @date 08/07/2012
 */
class XiRatesTypeDrawRateChartResponse extends XiRatesWsdlClass
{
	/**
	 * The DrawRateChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateChart
	 */
	public $DrawRateChartResult;
	/**
	 * Constructor
	 * @param XiRatesTypeRateChart DrawRateChartResult
	 * @return XiRatesTypeDrawRateChartResponse
	 */
	public function __construct($_DrawRateChartResult = null)
	{
		parent::__construct(array('DrawRateChartResult'=>$_DrawRateChartResult));
	}
	/**
	 * Set DrawRateChartResult
	 * @param RateChart DrawRateChartResult
	 * @return RateChart
	 */
	public function setDrawRateChartResult($_DrawRateChartResult)
	{
		return ($this->DrawRateChartResult = $_DrawRateChartResult);
	}
	/**
	 * Get DrawRateChartResult
	 * @return XiRatesTypeRateChart
	 */
	public function getDrawRateChartResult()
	{
		return $this->DrawRateChartResult;
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