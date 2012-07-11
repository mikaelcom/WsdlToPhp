<?php
/**
 * Class file for XiMetalsTypeGetLondonFixingChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLondonFixingChartCustomResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLondonFixingChartCustomResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLondonFixingChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeLondonFixingChart
	 */
	public $GetLondonFixingChartCustomResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeLondonFixingChart GetLondonFixingChartCustomResult
	 * @return XiMetalsTypeGetLondonFixingChartCustomResponse
	 */
	public function __construct($_GetLondonFixingChartCustomResult = null)
	{
		parent::__construct(array('GetLondonFixingChartCustomResult'=>$_GetLondonFixingChartCustomResult));
	}
	/**
	 * Set GetLondonFixingChartCustomResult
	 * @param LondonFixingChart GetLondonFixingChartCustomResult
	 * @return LondonFixingChart
	 */
	public function setGetLondonFixingChartCustomResult($_GetLondonFixingChartCustomResult)
	{
		return ($this->GetLondonFixingChartCustomResult = $_GetLondonFixingChartCustomResult);
	}
	/**
	 * Get GetLondonFixingChartCustomResult
	 * @return XiMetalsTypeLondonFixingChart
	 */
	public function getGetLondonFixingChartCustomResult()
	{
		return $this->GetLondonFixingChartCustomResult;
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