<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeCapitalizationChart
	 */
	public $DrawCapitalizationChartResult;
	/**
	 * Constructor
	 * @param XiChartTypeCapitalizationChart DrawCapitalizationChartResult
	 * @return XiChartTypeDrawCapitalizationChartResponse
	 */
	public function __construct($_DrawCapitalizationChartResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartResult'=>$_DrawCapitalizationChartResult));
	}
	/**
	 * Set DrawCapitalizationChartResult
	 * @param CapitalizationChart DrawCapitalizationChartResult
	 * @return CapitalizationChart
	 */
	public function setDrawCapitalizationChartResult($_DrawCapitalizationChartResult)
	{
		return ($this->DrawCapitalizationChartResult = $_DrawCapitalizationChartResult);
	}
	/**
	 * Get DrawCapitalizationChartResult
	 * @return XiChartTypeCapitalizationChart
	 */
	public function getDrawCapitalizationChartResult()
	{
		return $this->DrawCapitalizationChartResult;
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