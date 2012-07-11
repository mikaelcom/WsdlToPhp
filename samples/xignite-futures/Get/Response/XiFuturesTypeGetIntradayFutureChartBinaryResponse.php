<?php
/**
 * Class file for XiFuturesTypeGetIntradayFutureChartBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetIntradayFutureChartBinaryResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetIntradayFutureChartBinaryResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetIntradayFutureChartBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartBinary
	 */
	public $GetIntradayFutureChartBinaryResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartBinary GetIntradayFutureChartBinaryResult
	 * @return XiFuturesTypeGetIntradayFutureChartBinaryResponse
	 */
	public function __construct($_GetIntradayFutureChartBinaryResult = null)
	{
		parent::__construct(array('GetIntradayFutureChartBinaryResult'=>$_GetIntradayFutureChartBinaryResult));
	}
	/**
	 * Set GetIntradayFutureChartBinaryResult
	 * @param ChartBinary GetIntradayFutureChartBinaryResult
	 * @return ChartBinary
	 */
	public function setGetIntradayFutureChartBinaryResult($_GetIntradayFutureChartBinaryResult)
	{
		return ($this->GetIntradayFutureChartBinaryResult = $_GetIntradayFutureChartBinaryResult);
	}
	/**
	 * Get GetIntradayFutureChartBinaryResult
	 * @return XiFuturesTypeChartBinary
	 */
	public function getGetIntradayFutureChartBinaryResult()
	{
		return $this->GetIntradayFutureChartBinaryResult;
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