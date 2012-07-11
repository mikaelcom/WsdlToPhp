<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartByDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartByDateResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartByDateResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartByDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeHistoricalChart
	 */
	public $DrawHistoricalChartByDateResult;
	/**
	 * Constructor
	 * @param XiChartTypeHistoricalChart DrawHistoricalChartByDateResult
	 * @return XiChartTypeDrawHistoricalChartByDateResponse
	 */
	public function __construct($_DrawHistoricalChartByDateResult = null)
	{
		parent::__construct(array('DrawHistoricalChartByDateResult'=>$_DrawHistoricalChartByDateResult));
	}
	/**
	 * Set DrawHistoricalChartByDateResult
	 * @param HistoricalChart DrawHistoricalChartByDateResult
	 * @return HistoricalChart
	 */
	public function setDrawHistoricalChartByDateResult($_DrawHistoricalChartByDateResult)
	{
		return ($this->DrawHistoricalChartByDateResult = $_DrawHistoricalChartByDateResult);
	}
	/**
	 * Get DrawHistoricalChartByDateResult
	 * @return XiChartTypeHistoricalChart
	 */
	public function getDrawHistoricalChartByDateResult()
	{
		return $this->DrawHistoricalChartByDateResult;
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