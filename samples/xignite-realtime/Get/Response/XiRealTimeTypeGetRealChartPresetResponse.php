<?php
/**
 * Class file for XiRealTimeTypeGetRealChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetRealChartPresetResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetRealChartPresetResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetRealChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeIntradayChart
	 */
	public $GetRealChartPresetResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeIntradayChart GetRealChartPresetResult
	 * @return XiRealTimeTypeGetRealChartPresetResponse
	 */
	public function __construct($_GetRealChartPresetResult = null)
	{
		parent::__construct(array('GetRealChartPresetResult'=>$_GetRealChartPresetResult));
	}
	/**
	 * Set GetRealChartPresetResult
	 * @param IntradayChart GetRealChartPresetResult
	 * @return IntradayChart
	 */
	public function setGetRealChartPresetResult($_GetRealChartPresetResult)
	{
		return ($this->GetRealChartPresetResult = $_GetRealChartPresetResult);
	}
	/**
	 * Get GetRealChartPresetResult
	 * @return XiRealTimeTypeIntradayChart
	 */
	public function getGetRealChartPresetResult()
	{
		return $this->GetRealChartPresetResult;
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