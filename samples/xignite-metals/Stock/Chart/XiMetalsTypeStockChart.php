<?php
/**
 * Class file for XiMetalsTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeStockChart
 * @date 08/07/2012
 */
class XiMetalsTypeStockChart extends XiMetalsTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartDesign Design
	 * @return XiMetalsTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiMetalsWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiMetalsTypeChartDesign
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