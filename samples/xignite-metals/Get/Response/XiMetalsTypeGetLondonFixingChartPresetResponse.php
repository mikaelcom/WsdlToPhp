<?php
/**
 * Class file for XiMetalsTypeGetLondonFixingChartPresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLondonFixingChartPresetResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLondonFixingChartPresetResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLondonFixingChartPresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeLondonFixingChart
	 */
	public $GetLondonFixingChartPresetResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeLondonFixingChart GetLondonFixingChartPresetResult
	 * @return XiMetalsTypeGetLondonFixingChartPresetResponse
	 */
	public function __construct($_GetLondonFixingChartPresetResult = null)
	{
		parent::__construct(array('GetLondonFixingChartPresetResult'=>$_GetLondonFixingChartPresetResult));
	}
	/**
	 * Set GetLondonFixingChartPresetResult
	 * @param LondonFixingChart GetLondonFixingChartPresetResult
	 * @return LondonFixingChart
	 */
	public function setGetLondonFixingChartPresetResult($_GetLondonFixingChartPresetResult)
	{
		return ($this->GetLondonFixingChartPresetResult = $_GetLondonFixingChartPresetResult);
	}
	/**
	 * Get GetLondonFixingChartPresetResult
	 * @return XiMetalsTypeLondonFixingChart
	 */
	public function getGetLondonFixingChartPresetResult()
	{
		return $this->GetLondonFixingChartPresetResult;
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