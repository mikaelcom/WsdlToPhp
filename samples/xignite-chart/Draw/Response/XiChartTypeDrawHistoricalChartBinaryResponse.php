<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawHistoricalChartBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawHistoricalChartBinaryResult
	 * @return XiChartTypeDrawHistoricalChartBinaryResponse
	 */
	public function __construct($_DrawHistoricalChartBinaryResult = null)
	{
		parent::__construct(array('DrawHistoricalChartBinaryResult'=>$_DrawHistoricalChartBinaryResult));
	}
	/**
	 * Set DrawHistoricalChartBinaryResult
	 * @param ChartBinary DrawHistoricalChartBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawHistoricalChartBinaryResult($_DrawHistoricalChartBinaryResult)
	{
		return ($this->DrawHistoricalChartBinaryResult = $_DrawHistoricalChartBinaryResult);
	}
	/**
	 * Get DrawHistoricalChartBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawHistoricalChartBinaryResult()
	{
		return $this->DrawHistoricalChartBinaryResult;
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