<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawCapitalizationChartBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawCapitalizationChartBinaryResult
	 * @return XiChartTypeDrawCapitalizationChartBinaryResponse
	 */
	public function __construct($_DrawCapitalizationChartBinaryResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartBinaryResult'=>$_DrawCapitalizationChartBinaryResult));
	}
	/**
	 * Set DrawCapitalizationChartBinaryResult
	 * @param ChartBinary DrawCapitalizationChartBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawCapitalizationChartBinaryResult($_DrawCapitalizationChartBinaryResult)
	{
		return ($this->DrawCapitalizationChartBinaryResult = $_DrawCapitalizationChartBinaryResult);
	}
	/**
	 * Get DrawCapitalizationChartBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawCapitalizationChartBinaryResult()
	{
		return $this->DrawCapitalizationChartBinaryResult;
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