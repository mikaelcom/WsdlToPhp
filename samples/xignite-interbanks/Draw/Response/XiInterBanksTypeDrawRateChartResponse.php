<?php
/**
 * Class file for XiInterBanksTypeDrawRateChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeDrawRateChartResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeDrawRateChartResponse extends XiInterBanksWsdlClass
{
	/**
	 * The DrawRateChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateChart
	 */
	public $DrawRateChartResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateChart DrawRateChartResult
	 * @return XiInterBanksTypeDrawRateChartResponse
	 */
	public function __construct($_DrawRateChartResult = null)
	{
		parent::__construct(array('DrawRateChartResult'=>$_DrawRateChartResult));
	}
	/**
	 * Set DrawRateChartResult
	 * @param RateChart DrawRateChartResult
	 * @return RateChart
	 */
	public function setDrawRateChartResult($_DrawRateChartResult)
	{
		return ($this->DrawRateChartResult = $_DrawRateChartResult);
	}
	/**
	 * Get DrawRateChartResult
	 * @return XiInterBanksTypeRateChart
	 */
	public function getDrawRateChartResult()
	{
		return $this->DrawRateChartResult;
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