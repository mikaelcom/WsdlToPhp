<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartPresetByDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartPresetByDateResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartPresetByDateResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartPresetByDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeHistoricalChart
	 */
	public $DrawHistoricalChartPresetByDateResult;
	/**
	 * Constructor
	 * @param XiChartTypeHistoricalChart DrawHistoricalChartPresetByDateResult
	 * @return XiChartTypeDrawHistoricalChartPresetByDateResponse
	 */
	public function __construct($_DrawHistoricalChartPresetByDateResult = null)
	{
		parent::__construct(array('DrawHistoricalChartPresetByDateResult'=>$_DrawHistoricalChartPresetByDateResult));
	}
	/**
	 * Set DrawHistoricalChartPresetByDateResult
	 * @param HistoricalChart DrawHistoricalChartPresetByDateResult
	 * @return HistoricalChart
	 */
	public function setDrawHistoricalChartPresetByDateResult($_DrawHistoricalChartPresetByDateResult)
	{
		return ($this->DrawHistoricalChartPresetByDateResult = $_DrawHistoricalChartPresetByDateResult);
	}
	/**
	 * Get DrawHistoricalChartPresetByDateResult
	 * @return XiChartTypeHistoricalChart
	 */
	public function getDrawHistoricalChartPresetByDateResult()
	{
		return $this->DrawHistoricalChartPresetByDateResult;
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