<?php
/**
 * Class file for XiChartTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeStockChart
 * @date 08/07/2012
 */
class XiChartTypeStockChart extends XiChartTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiChartTypeChartDesign Design
	 * @return XiChartTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiChartWsdlClass::__construct(array('Design'=>$_Design));
	}
	/**
	 * Set Design
	 * @param ChartDesign Design
	 * @return ChartDesign
	 */
	public function setDesign($_Design)
	{
		return ($this->Design = $_Design);
	}
	/**
	 * Get Design
	 * @return XiChartTypeChartDesign
	 */
	public function getDesign()
	{
		return $this->Design;
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