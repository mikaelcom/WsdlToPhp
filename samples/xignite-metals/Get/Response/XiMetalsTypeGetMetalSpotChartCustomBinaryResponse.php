<?php
/**
 * Class file for XiMetalsTypeGetMetalSpotChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetMetalSpotChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetMetalSpotChartCustomBinaryResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetMetalSpotChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeChartBinary
	 */
	public $GetMetalSpotChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeChartBinary GetMetalSpotChartCustomBinaryResult
	 * @return XiMetalsTypeGetMetalSpotChartCustomBinaryResponse
	 */
	public function __construct($_GetMetalSpotChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetMetalSpotChartCustomBinaryResult'=>$_GetMetalSpotChartCustomBinaryResult));
	}
	/**
	 * Set GetMetalSpotChartCustomBinaryResult
	 * @param ChartBinary GetMetalSpotChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetMetalSpotChartCustomBinaryResult($_GetMetalSpotChartCustomBinaryResult)
	{
		return ($this->GetMetalSpotChartCustomBinaryResult = $_GetMetalSpotChartCustomBinaryResult);
	}
	/**
	 * Get GetMetalSpotChartCustomBinaryResult
	 * @return XiMetalsTypeChartBinary
	 */
	public function getGetMetalSpotChartCustomBinaryResult()
	{
		return $this->GetMetalSpotChartCustomBinaryResult;
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