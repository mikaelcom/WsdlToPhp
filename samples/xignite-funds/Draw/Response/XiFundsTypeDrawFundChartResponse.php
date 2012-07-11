<?php
/**
 * Class file for XiFundsTypeDrawFundChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeDrawFundChartResponse
 * @date 08/07/2012
 */
class XiFundsTypeDrawFundChartResponse extends XiFundsWsdlClass
{
	/**
	 * The DrawFundChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundChart
	 */
	public $DrawFundChartResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundChart DrawFundChartResult
	 * @return XiFundsTypeDrawFundChartResponse
	 */
	public function __construct($_DrawFundChartResult = null)
	{
		parent::__construct(array('DrawFundChartResult'=>$_DrawFundChartResult));
	}
	/**
	 * Set DrawFundChartResult
	 * @param FundChart DrawFundChartResult
	 * @return FundChart
	 */
	public function setDrawFundChartResult($_DrawFundChartResult)
	{
		return ($this->DrawFundChartResult = $_DrawFundChartResult);
	}
	/**
	 * Get DrawFundChartResult
	 * @return XiFundsTypeFundChart
	 */
	public function getDrawFundChartResult()
	{
		return $this->DrawFundChartResult;
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