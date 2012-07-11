<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartPresetBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartPresetBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartPresetBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartPresetBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawHistoricalChartPresetBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawHistoricalChartPresetBinaryResult
	 * @return XiChartTypeDrawHistoricalChartPresetBinaryResponse
	 */
	public function __construct($_DrawHistoricalChartPresetBinaryResult = null)
	{
		parent::__construct(array('DrawHistoricalChartPresetBinaryResult'=>$_DrawHistoricalChartPresetBinaryResult));
	}
	/**
	 * Set DrawHistoricalChartPresetBinaryResult
	 * @param ChartBinary DrawHistoricalChartPresetBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawHistoricalChartPresetBinaryResult($_DrawHistoricalChartPresetBinaryResult)
	{
		return ($this->DrawHistoricalChartPresetBinaryResult = $_DrawHistoricalChartPresetBinaryResult);
	}
	/**
	 * Get DrawHistoricalChartPresetBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawHistoricalChartPresetBinaryResult()
	{
		return $this->DrawHistoricalChartPresetBinaryResult;
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