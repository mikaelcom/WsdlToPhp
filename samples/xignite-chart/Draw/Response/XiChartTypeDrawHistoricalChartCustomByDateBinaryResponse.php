<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartCustomByDateBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartCustomByDateBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartCustomByDateBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartCustomByDateBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawHistoricalChartCustomByDateBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawHistoricalChartCustomByDateBinaryResult
	 * @return XiChartTypeDrawHistoricalChartCustomByDateBinaryResponse
	 */
	public function __construct($_DrawHistoricalChartCustomByDateBinaryResult = null)
	{
		parent::__construct(array('DrawHistoricalChartCustomByDateBinaryResult'=>$_DrawHistoricalChartCustomByDateBinaryResult));
	}
	/**
	 * Set DrawHistoricalChartCustomByDateBinaryResult
	 * @param ChartBinary DrawHistoricalChartCustomByDateBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawHistoricalChartCustomByDateBinaryResult($_DrawHistoricalChartCustomByDateBinaryResult)
	{
		return ($this->DrawHistoricalChartCustomByDateBinaryResult = $_DrawHistoricalChartCustomByDateBinaryResult);
	}
	/**
	 * Get DrawHistoricalChartCustomByDateBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawHistoricalChartCustomByDateBinaryResult()
	{
		return $this->DrawHistoricalChartCustomByDateBinaryResult;
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