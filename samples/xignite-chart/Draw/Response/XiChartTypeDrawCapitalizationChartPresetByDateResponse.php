<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartPresetByDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartPresetByDateResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartPresetByDateResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartPresetByDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeCapitalizationChart
	 */
	public $DrawCapitalizationChartPresetByDateResult;
	/**
	 * Constructor
	 * @param XiChartTypeCapitalizationChart DrawCapitalizationChartPresetByDateResult
	 * @return XiChartTypeDrawCapitalizationChartPresetByDateResponse
	 */
	public function __construct($_DrawCapitalizationChartPresetByDateResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartPresetByDateResult'=>$_DrawCapitalizationChartPresetByDateResult));
	}
	/**
	 * Set DrawCapitalizationChartPresetByDateResult
	 * @param CapitalizationChart DrawCapitalizationChartPresetByDateResult
	 * @return CapitalizationChart
	 */
	public function setDrawCapitalizationChartPresetByDateResult($_DrawCapitalizationChartPresetByDateResult)
	{
		return ($this->DrawCapitalizationChartPresetByDateResult = $_DrawCapitalizationChartPresetByDateResult);
	}
	/**
	 * Get DrawCapitalizationChartPresetByDateResult
	 * @return XiChartTypeCapitalizationChart
	 */
	public function getDrawCapitalizationChartPresetByDateResult()
	{
		return $this->DrawCapitalizationChartPresetByDateResult;
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