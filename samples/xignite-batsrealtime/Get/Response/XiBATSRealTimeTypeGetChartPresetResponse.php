<?php
/**
 * Class file for XiBATSRealTimeTypeGetChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeGetChartPresetResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeGetChartPresetResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The GetChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeIntradayChart
	 */
	public $GetChartPresetResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeIntradayChart GetChartPresetResult
	 * @return XiBATSRealTimeTypeGetChartPresetResponse
	 */
	public function __construct($_GetChartPresetResult = null)
	{
		parent::__construct(array('GetChartPresetResult'=>$_GetChartPresetResult));
	}
	/**
	 * Set GetChartPresetResult
	 * @param IntradayChart GetChartPresetResult
	 * @return IntradayChart
	 */
	public function setGetChartPresetResult($_GetChartPresetResult)
	{
		return ($this->GetChartPresetResult = $_GetChartPresetResult);
	}
	/**
	 * Get GetChartPresetResult
	 * @return XiBATSRealTimeTypeIntradayChart
	 */
	public function getGetChartPresetResult()
	{
		return $this->GetChartPresetResult;
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