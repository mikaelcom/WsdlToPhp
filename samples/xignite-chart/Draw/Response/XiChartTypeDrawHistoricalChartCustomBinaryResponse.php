<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartCustomBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawHistoricalChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawHistoricalChartCustomBinaryResult
	 * @return XiChartTypeDrawHistoricalChartCustomBinaryResponse
	 */
	public function __construct($_DrawHistoricalChartCustomBinaryResult = null)
	{
		parent::__construct(array('DrawHistoricalChartCustomBinaryResult'=>$_DrawHistoricalChartCustomBinaryResult));
	}
	/**
	 * Set DrawHistoricalChartCustomBinaryResult
	 * @param ChartBinary DrawHistoricalChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawHistoricalChartCustomBinaryResult($_DrawHistoricalChartCustomBinaryResult)
	{
		return ($this->DrawHistoricalChartCustomBinaryResult = $_DrawHistoricalChartCustomBinaryResult);
	}
	/**
	 * Get DrawHistoricalChartCustomBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawHistoricalChartCustomBinaryResult()
	{
		return $this->DrawHistoricalChartCustomBinaryResult;
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