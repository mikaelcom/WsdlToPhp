<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartCustomBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawCapitalizationChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawCapitalizationChartCustomBinaryResult
	 * @return XiChartTypeDrawCapitalizationChartCustomBinaryResponse
	 */
	public function __construct($_DrawCapitalizationChartCustomBinaryResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartCustomBinaryResult'=>$_DrawCapitalizationChartCustomBinaryResult));
	}
	/**
	 * Set DrawCapitalizationChartCustomBinaryResult
	 * @param ChartBinary DrawCapitalizationChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawCapitalizationChartCustomBinaryResult($_DrawCapitalizationChartCustomBinaryResult)
	{
		return ($this->DrawCapitalizationChartCustomBinaryResult = $_DrawCapitalizationChartCustomBinaryResult);
	}
	/**
	 * Get DrawCapitalizationChartCustomBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawCapitalizationChartCustomBinaryResult()
	{
		return $this->DrawCapitalizationChartCustomBinaryResult;
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