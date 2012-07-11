<?php
/**
 * Class file for XiInterBanksTypeDrawRateChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeDrawRateChartCustomResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeDrawRateChartCustomResponse extends XiInterBanksWsdlClass
{
	/**
	 * The DrawRateChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateChart
	 */
	public $DrawRateChartCustomResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateChart DrawRateChartCustomResult
	 * @return XiInterBanksTypeDrawRateChartCustomResponse
	 */
	public function __construct($_DrawRateChartCustomResult = null)
	{
		parent::__construct(array('DrawRateChartCustomResult'=>$_DrawRateChartCustomResult));
	}
	/**
	 * Set DrawRateChartCustomResult
	 * @param RateChart DrawRateChartCustomResult
	 * @return RateChart
	 */
	public function setDrawRateChartCustomResult($_DrawRateChartCustomResult)
	{
		return ($this->DrawRateChartCustomResult = $_DrawRateChartCustomResult);
	}
	/**
	 * Get DrawRateChartCustomResult
	 * @return XiInterBanksTypeRateChart
	 */
	public function getDrawRateChartCustomResult()
	{
		return $this->DrawRateChartCustomResult;
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