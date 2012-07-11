<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartCustomResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartCustomResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeCapitalizationChart
	 */
	public $DrawCapitalizationChartCustomResult;
	/**
	 * Constructor
	 * @param XiChartTypeCapitalizationChart DrawCapitalizationChartCustomResult
	 * @return XiChartTypeDrawCapitalizationChartCustomResponse
	 */
	public function __construct($_DrawCapitalizationChartCustomResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartCustomResult'=>$_DrawCapitalizationChartCustomResult));
	}
	/**
	 * Set DrawCapitalizationChartCustomResult
	 * @param CapitalizationChart DrawCapitalizationChartCustomResult
	 * @return CapitalizationChart
	 */
	public function setDrawCapitalizationChartCustomResult($_DrawCapitalizationChartCustomResult)
	{
		return ($this->DrawCapitalizationChartCustomResult = $_DrawCapitalizationChartCustomResult);
	}
	/**
	 * Get DrawCapitalizationChartCustomResult
	 * @return XiChartTypeCapitalizationChart
	 */
	public function getDrawCapitalizationChartCustomResult()
	{
		return $this->DrawCapitalizationChartCustomResult;
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