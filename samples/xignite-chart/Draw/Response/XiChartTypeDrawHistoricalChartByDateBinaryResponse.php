<?php
/**
 * Class file for XiChartTypeDrawHistoricalChartByDateBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChartByDateBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChartByDateBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawHistoricalChartByDateBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawHistoricalChartByDateBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawHistoricalChartByDateBinaryResult
	 * @return XiChartTypeDrawHistoricalChartByDateBinaryResponse
	 */
	public function __construct($_DrawHistoricalChartByDateBinaryResult = null)
	{
		parent::__construct(array('DrawHistoricalChartByDateBinaryResult'=>$_DrawHistoricalChartByDateBinaryResult));
	}
	/**
	 * Set DrawHistoricalChartByDateBinaryResult
	 * @param ChartBinary DrawHistoricalChartByDateBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawHistoricalChartByDateBinaryResult($_DrawHistoricalChartByDateBinaryResult)
	{
		return ($this->DrawHistoricalChartByDateBinaryResult = $_DrawHistoricalChartByDateBinaryResult);
	}
	/**
	 * Get DrawHistoricalChartByDateBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawHistoricalChartByDateBinaryResult()
	{
		return $this->DrawHistoricalChartByDateBinaryResult;
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