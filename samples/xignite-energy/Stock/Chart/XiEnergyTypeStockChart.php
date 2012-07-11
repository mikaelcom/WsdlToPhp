<?php
/**
 * Class file for XiEnergyTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeStockChart
 * @date 08/07/2012
 */
class XiEnergyTypeStockChart extends XiEnergyTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiEnergyTypeChartDesign Design
	 * @return XiEnergyTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiEnergyWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiEnergyTypeChartDesign
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