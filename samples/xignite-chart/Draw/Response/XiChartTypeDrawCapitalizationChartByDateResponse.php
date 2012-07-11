<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartByDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartByDateResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartByDateResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartByDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeCapitalizationChart
	 */
	public $DrawCapitalizationChartByDateResult;
	/**
	 * Constructor
	 * @param XiChartTypeCapitalizationChart DrawCapitalizationChartByDateResult
	 * @return XiChartTypeDrawCapitalizationChartByDateResponse
	 */
	public function __construct($_DrawCapitalizationChartByDateResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartByDateResult'=>$_DrawCapitalizationChartByDateResult));
	}
	/**
	 * Set DrawCapitalizationChartByDateResult
	 * @param CapitalizationChart DrawCapitalizationChartByDateResult
	 * @return CapitalizationChart
	 */
	public function setDrawCapitalizationChartByDateResult($_DrawCapitalizationChartByDateResult)
	{
		return ($this->DrawCapitalizationChartByDateResult = $_DrawCapitalizationChartByDateResult);
	}
	/**
	 * Get DrawCapitalizationChartByDateResult
	 * @return XiChartTypeCapitalizationChart
	 */
	public function getDrawCapitalizationChartByDateResult()
	{
		return $this->DrawCapitalizationChartByDateResult;
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