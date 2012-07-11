<?php
/**
 * Class file for XiInterBanksTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeStockChart
 * @date 08/07/2012
 */
class XiInterBanksTypeStockChart extends XiInterBanksTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiInterBanksTypeChartDesign Design
	 * @return XiInterBanksTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiInterBanksWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiInterBanksTypeChartDesign
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