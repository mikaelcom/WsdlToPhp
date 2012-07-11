<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartPresetByDateBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartPresetByDateBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartPresetByDateBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartPresetByDateBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawHistoricalChartPresetByDateBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawHistoricalChartPresetByDateBinaryResult
	 * @return XiChartTypeDrawHistoricalChartPresetByDateBinaryResponse
	 */
	public function __construct($_DrawHistoricalChartPresetByDateBinaryResult = null)
	{
		parent::__construct(array('DrawHistoricalChartPresetByDateBinaryResult'=>$_DrawHistoricalChartPresetByDateBinaryResult));
	}
	/**
	 * Set DrawHistoricalChartPresetByDateBinaryResult
	 * @param ChartBinary DrawHistoricalChartPresetByDateBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawHistoricalChartPresetByDateBinaryResult($_DrawHistoricalChartPresetByDateBinaryResult)
	{
		return ($this->DrawHistoricalChartPresetByDateBinaryResult = $_DrawHistoricalChartPresetByDateBinaryResult);
	}
	/**
	 * Get DrawHistoricalChartPresetByDateBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawHistoricalChartPresetByDateBinaryResult()
	{
		return $this->DrawHistoricalChartPresetByDateBinaryResult;
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