<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartCustomByDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartCustomByDateResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartCustomByDateResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartCustomByDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeHistoricalChart
	 */
	public $DrawHistoricalChartCustomByDateResult;
	/**
	 * Constructor
	 * @param XiChartTypeHistoricalChart DrawHistoricalChartCustomByDateResult
	 * @return XiChartTypeDrawHistoricalChartCustomByDateResponse
	 */
	public function __construct($_DrawHistoricalChartCustomByDateResult = null)
	{
		parent::__construct(array('DrawHistoricalChartCustomByDateResult'=>$_DrawHistoricalChartCustomByDateResult));
	}
	/**
	 * Set DrawHistoricalChartCustomByDateResult
	 * @param HistoricalChart DrawHistoricalChartCustomByDateResult
	 * @return HistoricalChart
	 */
	public function setDrawHistoricalChartCustomByDateResult($_DrawHistoricalChartCustomByDateResult)
	{
		return ($this->DrawHistoricalChartCustomByDateResult = $_DrawHistoricalChartCustomByDateResult);
	}
	/**
	 * Get DrawHistoricalChartCustomByDateResult
	 * @return XiChartTypeHistoricalChart
	 */
	public function getDrawHistoricalChartCustomByDateResult()
	{
		return $this->DrawHistoricalChartCustomByDateResult;
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