<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeHistoricalChart
	 */
	public $DrawHistoricalChartResult;
	/**
	 * Constructor
	 * @param XiChartTypeHistoricalChart DrawHistoricalChartResult
	 * @return XiChartTypeDrawHistoricalChartResponse
	 */
	public function __construct($_DrawHistoricalChartResult = null)
	{
		parent::__construct(array('DrawHistoricalChartResult'=>$_DrawHistoricalChartResult));
	}
	/**
	 * Set DrawHistoricalChartResult
	 * @param HistoricalChart DrawHistoricalChartResult
	 * @return HistoricalChart
	 */
	public function setDrawHistoricalChartResult($_DrawHistoricalChartResult)
	{
		return ($this->DrawHistoricalChartResult = $_DrawHistoricalChartResult);
	}
	/**
	 * Get DrawHistoricalChartResult
	 * @return XiChartTypeHistoricalChart
	 */
	public function getDrawHistoricalChartResult()
	{
		return $this->DrawHistoricalChartResult;
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