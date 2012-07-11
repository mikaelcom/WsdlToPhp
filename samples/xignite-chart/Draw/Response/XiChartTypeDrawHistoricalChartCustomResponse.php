<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartCustomResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartCustomResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeHistoricalChart
	 */
	public $DrawHistoricalChartCustomResult;
	/**
	 * Constructor
	 * @param XiChartTypeHistoricalChart DrawHistoricalChartCustomResult
	 * @return XiChartTypeDrawHistoricalChartCustomResponse
	 */
	public function __construct($_DrawHistoricalChartCustomResult = null)
	{
		parent::__construct(array('DrawHistoricalChartCustomResult'=>$_DrawHistoricalChartCustomResult));
	}
	/**
	 * Set DrawHistoricalChartCustomResult
	 * @param HistoricalChart DrawHistoricalChartCustomResult
	 * @return HistoricalChart
	 */
	public function setDrawHistoricalChartCustomResult($_DrawHistoricalChartCustomResult)
	{
		return ($this->DrawHistoricalChartCustomResult = $_DrawHistoricalChartCustomResult);
	}
	/**
	 * Get DrawHistoricalChartCustomResult
	 * @return XiChartTypeHistoricalChart
	 */
	public function getDrawHistoricalChartCustomResult()
	{
		return $this->DrawHistoricalChartCustomResult;
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