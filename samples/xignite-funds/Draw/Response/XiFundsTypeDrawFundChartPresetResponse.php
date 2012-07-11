<?php
/**
 * Class file for XiFundsTypeDrawFundChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeDrawFundChartPresetResponse
 * @date 08/07/2012
 */
class XiFundsTypeDrawFundChartPresetResponse extends XiFundsWsdlClass
{
	/**
	 * The DrawFundChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeFundChart
	 */
	public $DrawFundChartPresetResult;
	/**
	 * Constructor
	 * @param XiFundsTypeFundChart DrawFundChartPresetResult
	 * @return XiFundsTypeDrawFundChartPresetResponse
	 */
	public function __construct($_DrawFundChartPresetResult = null)
	{
		parent::__construct(array('DrawFundChartPresetResult'=>$_DrawFundChartPresetResult));
	}
	/**
	 * Set DrawFundChartPresetResult
	 * @param FundChart DrawFundChartPresetResult
	 * @return FundChart
	 */
	public function setDrawFundChartPresetResult($_DrawFundChartPresetResult)
	{
		return ($this->DrawFundChartPresetResult = $_DrawFundChartPresetResult);
	}
	/**
	 * Get DrawFundChartPresetResult
	 * @return XiFundsTypeFundChart
	 */
	public function getDrawFundChartPresetResult()
	{
		return $this->DrawFundChartPresetResult;
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