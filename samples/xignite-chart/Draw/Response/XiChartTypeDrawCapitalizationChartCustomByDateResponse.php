<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartCustomByDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartCustomByDateResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartCustomByDateResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartCustomByDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeCapitalizationChart
	 */
	public $DrawCapitalizationChartCustomByDateResult;
	/**
	 * Constructor
	 * @param XiChartTypeCapitalizationChart DrawCapitalizationChartCustomByDateResult
	 * @return XiChartTypeDrawCapitalizationChartCustomByDateResponse
	 */
	public function __construct($_DrawCapitalizationChartCustomByDateResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartCustomByDateResult'=>$_DrawCapitalizationChartCustomByDateResult));
	}
	/**
	 * Set DrawCapitalizationChartCustomByDateResult
	 * @param CapitalizationChart DrawCapitalizationChartCustomByDateResult
	 * @return CapitalizationChart
	 */
	public function setDrawCapitalizationChartCustomByDateResult($_DrawCapitalizationChartCustomByDateResult)
	{
		return ($this->DrawCapitalizationChartCustomByDateResult = $_DrawCapitalizationChartCustomByDateResult);
	}
	/**
	 * Get DrawCapitalizationChartCustomByDateResult
	 * @return XiChartTypeCapitalizationChart
	 */
	public function getDrawCapitalizationChartCustomByDateResult()
	{
		return $this->DrawCapitalizationChartCustomByDateResult;
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