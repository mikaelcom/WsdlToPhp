<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartCustomByDateBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartCustomByDateBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartCustomByDateBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartCustomByDateBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawCapitalizationChartCustomByDateBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawCapitalizationChartCustomByDateBinaryResult
	 * @return XiChartTypeDrawCapitalizationChartCustomByDateBinaryResponse
	 */
	public function __construct($_DrawCapitalizationChartCustomByDateBinaryResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartCustomByDateBinaryResult'=>$_DrawCapitalizationChartCustomByDateBinaryResult));
	}
	/**
	 * Set DrawCapitalizationChartCustomByDateBinaryResult
	 * @param ChartBinary DrawCapitalizationChartCustomByDateBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawCapitalizationChartCustomByDateBinaryResult($_DrawCapitalizationChartCustomByDateBinaryResult)
	{
		return ($this->DrawCapitalizationChartCustomByDateBinaryResult = $_DrawCapitalizationChartCustomByDateBinaryResult);
	}
	/**
	 * Get DrawCapitalizationChartCustomByDateBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawCapitalizationChartCustomByDateBinaryResult()
	{
		return $this->DrawCapitalizationChartCustomByDateBinaryResult;
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