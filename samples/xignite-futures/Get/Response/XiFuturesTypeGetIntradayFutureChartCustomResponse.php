<?php
/**
 * Class file for XiFuturesTypeGetIntradayFutureChartCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetIntradayFutureChartCustomResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetIntradayFutureChartCustomResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetIntradayFutureChartCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeIntradayChart
	 */
	public $GetIntradayFutureChartCustomResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeIntradayChart GetIntradayFutureChartCustomResult
	 * @return XiFuturesTypeGetIntradayFutureChartCustomResponse
	 */
	public function __construct($_GetIntradayFutureChartCustomResult = null)
	{
		parent::__construct(array('GetIntradayFutureChartCustomResult'=>$_GetIntradayFutureChartCustomResult));
	}
	/**
	 * Set GetIntradayFutureChartCustomResult
	 * @param IntradayChart GetIntradayFutureChartCustomResult
	 * @return IntradayChart
	 */
	public function setGetIntradayFutureChartCustomResult($_GetIntradayFutureChartCustomResult)
	{
		return ($this->GetIntradayFutureChartCustomResult = $_GetIntradayFutureChartCustomResult);
	}
	/**
	 * Get GetIntradayFutureChartCustomResult
	 * @return XiFuturesTypeIntradayChart
	 */
	public function getGetIntradayFutureChartCustomResult()
	{
		return $this->GetIntradayFutureChartCustomResult;
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