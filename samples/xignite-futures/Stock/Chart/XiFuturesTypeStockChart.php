<?php
/**
 * Class file for XiFuturesTypeStockChart
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeStockChart
 * @date 08/07/2012
 */
class XiFuturesTypeStockChart extends XiFuturesTypeCommon
{
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartDesign Design
	 * @return XiFuturesTypeStockChart
	 */
	public function __construct($_Design = null)
	{
		XiFuturesWsdlClass::__construct(array('Design'=>$_Design));
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
	 * @return XiFuturesTypeChartDesign
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