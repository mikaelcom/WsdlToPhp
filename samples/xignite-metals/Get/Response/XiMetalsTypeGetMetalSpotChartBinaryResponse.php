<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotChartBinaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotChartBinaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartBinary
	 */
	public $GetMetalSpotChartBinaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartBinary GetMetalSpotChartBinaryResult
	 * @return XiMetalsTypeGetMetalSpotChartBinaryResponse
	 */
	public function __construct($_GetMetalSpotChartBinaryResult = null)
	{
		parent::__construct(array('GetMetalSpotChartBinaryResult'=>$_GetMetalSpotChartBinaryResult));
	}
	/**
	 * Set GetMetalSpotChartBinaryResult
	 * @param ChartBinary GetMetalSpotChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetMetalSpotChartBinaryResult($_GetMetalSpotChartBinaryResult)
	{
		return ($this->GetMetalSpotChartBinaryResult = $_GetMetalSpotChartBinaryResult);
	}
	/**
	 * Get GetMetalSpotChartBinaryResult
	 * @return XiMetalsTypeChartBinary
	 */
	public function getGetMetalSpotChartBinaryResult()
	{
		return $this->GetMetalSpotChartBinaryResult;
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