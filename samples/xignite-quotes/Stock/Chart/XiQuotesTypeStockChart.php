<?php
/**
 * Class file for XiQuotesTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeStockChart
 * @date 08/07/2012
 */
class XiQuotesTypeStockChart extends XiQuotesTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiQuotesTypeChartDesign Design
	 * @return XiQuotesTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiQuotesWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiQuotesTypeChartDesign
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