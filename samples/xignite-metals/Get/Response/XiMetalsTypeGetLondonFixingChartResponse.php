<?php
/**
 * Class file for XiMetalsTypeGetLondonFixingChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLondonFixingChartResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLondonFixingChartResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLondonFixingChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeLondonFixingChart
	 */
	public $GetLondonFixingChartResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeLondonFixingChart GetLondonFixingChartResult
	 * @return XiMetalsTypeGetLondonFixingChartResponse
	 */
	public function __construct($_GetLondonFixingChartResult = null)
	{
		parent::__construct(array('GetLondonFixingChartResult'=>$_GetLondonFixingChartResult));
	}
	/**
	 * Set GetLondonFixingChartResult
	 * @param LondonFixingChart GetLondonFixingChartResult
	 * @return LondonFixingChart
	 */
	public function setGetLondonFixingChartResult($_GetLondonFixingChartResult)
	{
		return ($this->GetLondonFixingChartResult = $_GetLondonFixingChartResult);
	}
	/**
	 * Get GetLondonFixingChartResult
	 * @return XiMetalsTypeLondonFixingChart
	 */
	public function getGetLondonFixingChartResult()
	{
		return $this->GetLondonFixingChartResult;
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