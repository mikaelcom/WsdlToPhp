<?php
/**
 * Class file for XiInterBanksTypeDrawRateChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeDrawRateChartPresetResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeDrawRateChartPresetResponse extends XiInterBanksWsdlClass
{
	/**
	 * The DrawRateChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateChart
	 */
	public $DrawRateChartPresetResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateChart DrawRateChartPresetResult
	 * @return XiInterBanksTypeDrawRateChartPresetResponse
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
	 * @return XiInterBanksTypeRateChart
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