<?php
/**
 * Class file for XiQuotesTypeGetDelayedChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetDelayedChartPresetResponse
 * @date 08/07/2012
 */
class XiQuotesTypeGetDelayedChartPresetResponse extends XiQuotesWsdlClass
{
	/**
	 * The GetDelayedChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeIntradayChart
	 */
	public $GetDelayedChartPresetResult;
	/**
	 * Constructor
	 * @param XiQuotesTypeIntradayChart GetDelayedChartPresetResult
	 * @return XiQuotesTypeGetDelayedChartPresetResponse
	 */
	public function __construct($_GetDelayedChartPresetResult = null)
	{
		parent::__construct(array('GetDelayedChartPresetResult'=>$_GetDelayedChartPresetResult));
	}
	/**
	 * Set GetDelayedChartPresetResult
	 * @param IntradayChart GetDelayedChartPresetResult
	 * @return IntradayChart
	 */
	public function setGetDelayedChartPresetResult($_GetDelayedChartPresetResult)
	{
		return ($this->GetDelayedChartPresetResult = $_GetDelayedChartPresetResult);
	}
	/**
	 * Get GetDelayedChartPresetResult
	 * @return XiQuotesTypeIntradayChart
	 */
	public function getGetDelayedChartPresetResult()
	{
		return $this->GetDelayedChartPresetResult;
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