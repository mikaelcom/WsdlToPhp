<?php
/**
 * Class file for XiQuotesTypeGetDelayedChartAsOfDatePresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedChartAsOfDatePresetResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedChartAsOfDatePresetResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedChartAsOfDatePresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedChartAsOfDatePresetResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedChartAsOfDatePresetResult
	 * @return XiQuotesTypeGetDelayedChartAsOfDatePresetResponse
	 */
	public function __construct($_GetDelayedChartAsOfDatePresetResult = null)
	{
		parent::__construct(array('GetDelayedChartAsOfDatePresetResult'=>$_GetDelayedChartAsOfDatePresetResult));
	}
	/**
	 * Set GetDelayedChartAsOfDatePresetResult
	 * @param IntradayChart GetDelayedChartAsOfDatePresetResult
	 * @return IntradayChart
	 */
	public function setGetDelayedChartAsOfDatePresetResult($_GetDelayedChartAsOfDatePresetResult)
	{
		return ($this->GetDelayedChartAsOfDatePresetResult = $_GetDelayedChartAsOfDatePresetResult);
	}
	/**
	 * Get GetDelayedChartAsOfDatePresetResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedChartAsOfDatePresetResult()
	{
		return $this->GetDelayedChartAsOfDatePresetResult;
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