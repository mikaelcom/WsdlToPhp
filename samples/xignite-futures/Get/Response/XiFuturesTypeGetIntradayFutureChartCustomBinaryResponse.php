<?php
/**
 * Class file for XiFuturesTypeGetIntradayFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetIntradayFutureChartCustomBinaryResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetIntradayFutureChartCustomBinaryResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetIntradayFutureChartCustomBinaryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeChartBinary
	 */
	public $GetIntradayFutureChartCustomBinaryResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeChartBinary GetIntradayFutureChartCustomBinaryResult
	 * @return XiFuturesTypeGetIntradayFutureChartCustomBinaryResponse
	 */
	public function __construct($_GetIntradayFutureChartCustomBinaryResult = null)
	{
		parent::__construct(array('GetIntradayFutureChartCustomBinaryResult'=>$_GetIntradayFutureChartCustomBinaryResult));
	}
	/**
	 * Set GetIntradayFutureChartCustomBinaryResult
	 * @param ChartBinary GetIntradayFutureChartCustomBinaryResult
	 * @return ChartBinary
	 */
	public function setGetIntradayFutureChartCustomBinaryResult($_GetIntradayFutureChartCustomBinaryResult)
	{
		return ($this->GetIntradayFutureChartCustomBinaryResult = $_GetIntradayFutureChartCustomBinaryResult);
	}
	/**
	 * Get GetIntradayFutureChartCustomBinaryResult
	 * @return XiFuturesTypeChartBinary
	 */
	public function getGetIntradayFutureChartCustomBinaryResult()
	{
		return $this->GetIntradayFutureChartCustomBinaryResult;
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