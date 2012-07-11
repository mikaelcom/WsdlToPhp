<?php
/**
 * Class file for XiRatesTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeStockChart
 * @date 08/07/2012
 */
class XiRatesTypeStockChart extends XiRatesTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiRatesTypeChartDesign Design
	 * @return XiRatesTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiRatesWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiRatesTypeChartDesign
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