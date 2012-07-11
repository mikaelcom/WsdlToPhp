<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartPresetResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartPresetResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeCapitalizationChart
	 */
	public $DrawCapitalizationChartPresetResult;
	/**
	 * Constructor
	 * @param XiChartTypeCapitalizationChart DrawCapitalizationChartPresetResult
	 * @return XiChartTypeDrawCapitalizationChartPresetResponse
	 */
	public function __construct($_DrawCapitalizationChartPresetResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartPresetResult'=>$_DrawCapitalizationChartPresetResult));
	}
	/**
	 * Set DrawCapitalizationChartPresetResult
	 * @param CapitalizationChart DrawCapitalizationChartPresetResult
	 * @return CapitalizationChart
	 */
	public function setDrawCapitalizationChartPresetResult($_DrawCapitalizationChartPresetResult)
	{
		return ($this->DrawCapitalizationChartPresetResult = $_DrawCapitalizationChartPresetResult);
	}
	/**
	 * Get DrawCapitalizationChartPresetResult
	 * @return XiChartTypeCapitalizationChart
	 */
	public function getDrawCapitalizationChartPresetResult()
	{
		return $this->DrawCapitalizationChartPresetResult;
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