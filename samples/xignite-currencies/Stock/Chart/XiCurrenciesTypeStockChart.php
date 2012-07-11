<?php
/**
 * Class file for XiCurrenciesTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeStockChart
 * @date 08/07/2012
 */
class XiCurrenciesTypeStockChart extends XiCurrenciesTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeChartDesign Design
	 * @return XiCurrenciesTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiCurrenciesWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiCurrenciesTypeChartDesign
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