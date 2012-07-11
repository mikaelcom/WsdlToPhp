<?php
/**
 * Class file for XiRatesTypeDrawRateChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawRateChartPresetResponse
 * @date 08/07/2012
 */
class XiRatesTypeDrawRateChartPresetResponse extends XiRatesWsdlClass
{
	/**
	 * The DrawRateChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateChart
	 */
	public $DrawRateChartPresetResult;
	/**
	 * Constructor
	 * @param XiRatesTypeRateChart DrawRateChartPresetResult
	 * @return XiRatesTypeDrawRateChartPresetResponse
	 */
	public function __construct($_DrawRateChartPresetResult = null)
	{
		parent::__construct(array('DrawRateChartPresetResult'=>$_DrawRateChartPresetResult));
	}
	/**
	 * Set DrawRateChartPresetResult
	 * @param RateChart DrawRateChartPresetResult
	 * @return RateChart
	 */
	public function setDrawRateChartPresetResult($_DrawRateChartPresetResult)
	{
		return ($this->DrawRateChartPresetResult = $_DrawRateChartPresetResult);
	}
	/**
	 * Get DrawRateChartPresetResult
	 * @return XiRatesTypeRateChart
	 */
	public function getDrawRateChartPresetResult()
	{
		return $this->DrawRateChartPresetResult;
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