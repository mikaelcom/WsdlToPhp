<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartPresetBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartPresetBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartPresetBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartPresetBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawCapitalizationChartPresetBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawCapitalizationChartPresetBinaryResult
	 * @return XiChartTypeDrawCapitalizationChartPresetBinaryResponse
	 */
	public function __construct($_DrawCapitalizationChartPresetBinaryResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartPresetBinaryResult'=>$_DrawCapitalizationChartPresetBinaryResult));
	}
	/**
	 * Set DrawCapitalizationChartPresetBinaryResult
	 * @param ChartBinary DrawCapitalizationChartPresetBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawCapitalizationChartPresetBinaryResult($_DrawCapitalizationChartPresetBinaryResult)
	{
		return ($this->DrawCapitalizationChartPresetBinaryResult = $_DrawCapitalizationChartPresetBinaryResult);
	}
	/**
	 * Get DrawCapitalizationChartPresetBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawCapitalizationChartPresetBinaryResult()
	{
		return $this->DrawCapitalizationChartPresetBinaryResult;
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