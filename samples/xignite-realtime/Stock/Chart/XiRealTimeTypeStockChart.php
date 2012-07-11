<?php
/**
 * Class file for XiRealTimeTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeStockChart
 * @date 08/07/2012
 */
class XiRealTimeTypeStockChart extends XiRealTimeTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiRealTimeTypeChartDesign Design
	 * @return XiRealTimeTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiRealTimeWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiRealTimeTypeChartDesign
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