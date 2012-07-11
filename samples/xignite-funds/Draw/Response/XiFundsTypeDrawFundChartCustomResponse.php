<?php
/**
 * Class file for XiFundsTypeDrawFundChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeDrawFundChartCustomResponse
 * @date 08/07/2012
 */
class XiFundsTypeDrawFundChartCustomResponse extends XiFundsWsdlClass
{
	/**
	 * The DrawFundChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundChart
	 */
	public $DrawFundChartCustomResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundChart DrawFundChartCustomResult
	 * @return XiFundsTypeDrawFundChartCustomResponse
	 */
	public function __construct($_DrawFundChartCustomResult = null)
	{
		parent::__construct(array('DrawFundChartCustomResult'=>$_DrawFundChartCustomResult));
	}
	/**
	 * Set DrawFundChartCustomResult
	 * @param FundChart DrawFundChartCustomResult
	 * @return FundChart
	 */
	public function setDrawFundChartCustomResult($_DrawFundChartCustomResult)
	{
		return ($this->DrawFundChartCustomResult = $_DrawFundChartCustomResult);
	}
	/**
	 * Get DrawFundChartCustomResult
	 * @return XiFundsTypeFundChart
	 */
	public function getDrawFundChartCustomResult()
	{
		return $this->DrawFundChartCustomResult;
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