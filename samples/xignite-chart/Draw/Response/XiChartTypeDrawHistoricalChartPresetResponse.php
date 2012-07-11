<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartPresetResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartPresetResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeHistoricalChart
	 */
	public $DrawHistoricalChartPresetResult;
	/**
	 * Constructor
	 * @param XiChartTypeHistoricalChart DrawHistoricalChartPresetResult
	 * @return XiChartTypeDrawHistoricalChartPresetResponse
	 */
	public function __construct($_DrawHistoricalChartPresetResult = null)
	{
		parent::__construct(array('DrawHistoricalChartPresetResult'=>$_DrawHistoricalChartPresetResult));
	}
	/**
	 * Set DrawHistoricalChartPresetResult
	 * @param HistoricalChart DrawHistoricalChartPresetResult
	 * @return HistoricalChart
	 */
	public function setDrawHistoricalChartPresetResult($_DrawHistoricalChartPresetResult)
	{
		return ($this->DrawHistoricalChartPresetResult = $_DrawHistoricalChartPresetResult);
	}
	/**
	 * Get DrawHistoricalChartPresetResult
	 * @return XiChartTypeHistoricalChart
	 */
	public function getDrawHistoricalChartPresetResult()
	{
		return $this->DrawHistoricalChartPresetResult;
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