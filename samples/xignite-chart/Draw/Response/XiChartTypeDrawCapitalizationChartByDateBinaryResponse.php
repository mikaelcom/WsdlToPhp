<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartByDateBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartByDateBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartByDateBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartByDateBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawCapitalizationChartByDateBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawCapitalizationChartByDateBinaryResult
	 * @return XiChartTypeDrawCapitalizationChartByDateBinaryResponse
	 */
	public function __construct($_DrawCapitalizationChartByDateBinaryResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartByDateBinaryResult'=>$_DrawCapitalizationChartByDateBinaryResult));
	}
	/**
	 * Set DrawCapitalizationChartByDateBinaryResult
	 * @param ChartBinary DrawCapitalizationChartByDateBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawCapitalizationChartByDateBinaryResult($_DrawCapitalizationChartByDateBinaryResult)
	{
		return ($this->DrawCapitalizationChartByDateBinaryResult = $_DrawCapitalizationChartByDateBinaryResult);
	}
	/**
	 * Get DrawCapitalizationChartByDateBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawCapitalizationChartByDateBinaryResult()
	{
		return $this->DrawCapitalizationChartByDateBinaryResult;
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