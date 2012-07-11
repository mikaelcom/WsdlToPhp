<?php
/**
 * Class file for XiChartTypeDrawCapitalizationChartPresetByDateBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawCapitalizationChartPresetByDateBinaryResponse
 * @date 08/07/2012
 */
class XiChartTypeDrawCapitalizationChartPresetByDateBinaryResponse extends XiChartWsdlClass
{
	/**
	 * The DrawCapitalizationChartPresetByDateBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartBinary
	 */
	public $DrawCapitalizationChartPresetByDateBinaryResult;
	/**
	 * Constructor
	 * @param XiChartTypeChartBinary DrawCapitalizationChartPresetByDateBinaryResult
	 * @return XiChartTypeDrawCapitalizationChartPresetByDateBinaryResponse
	 */
	public function __construct($_DrawCapitalizationChartPresetByDateBinaryResult = null)
	{
		parent::__construct(array('DrawCapitalizationChartPresetByDateBinaryResult'=>$_DrawCapitalizationChartPresetByDateBinaryResult));
	}
	/**
	 * Set DrawCapitalizationChartPresetByDateBinaryResult
	 * @param ChartBinary DrawCapitalizationChartPresetByDateBinaryResult
	 * @return ChartBinary
	 */
	public function setDrawCapitalizationChartPresetByDateBinaryResult($_DrawCapitalizationChartPresetByDateBinaryResult)
	{
		return ($this->DrawCapitalizationChartPresetByDateBinaryResult = $_DrawCapitalizationChartPresetByDateBinaryResult);
	}
	/**
	 * Get DrawCapitalizationChartPresetByDateBinaryResult
	 * @return XiChartTypeChartBinary
	 */
	public function getDrawCapitalizationChartPresetByDateBinaryResult()
	{
		return $this->DrawCapitalizationChartPresetByDateBinaryResult;
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