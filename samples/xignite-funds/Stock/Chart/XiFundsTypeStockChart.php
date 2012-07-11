<?php
/**
 * Class file for XiFundsTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeStockChart
 * @date 08/07/2012
 */
class XiFundsTypeStockChart extends XiFundsTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiFundsTypeChartDesign Design
	 * @return XiFundsTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiFundsWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiFundsTypeChartDesign
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