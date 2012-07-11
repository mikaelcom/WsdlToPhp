<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutureChartCustomBinaryResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFutureChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartBinary
	 */
	public $GetHistoricalFutureChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartBinary GetHistoricalFutureChartCustomBinaryResult
	 * @return XiFuturesTypeGetHistoricalFutureChartCustomBinaryResponse
	 */
	public function __construct($_GetHistoricalFutureChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetHistoricalFutureChartCustomBinaryResult'=>$_GetHistoricalFutureChartCustomBinaryResult));
	}
	/**
	 * Set GetHistoricalFutureChartCustomBinaryResult
	 * @param ChartBinary GetHistoricalFutureChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetHistoricalFutureChartCustomBinaryResult($_GetHistoricalFutureChartCustomBinaryResult)
	{
		return ($this->GetHistoricalFutureChartCustomBinaryResult = $_GetHistoricalFutureChartCustomBinaryResult);
	}
	/**
	 * Get GetHistoricalFutureChartCustomBinaryResult
	 * @return XiFuturesTypeChartBinary
	 */
	public function getGetHistoricalFutureChartCustomBinaryResult()
	{
		return $this->GetHistoricalFutureChartCustomBinaryResult;
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