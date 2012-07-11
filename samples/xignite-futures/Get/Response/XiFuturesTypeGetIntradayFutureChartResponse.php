<?php
/**
 * Class file for XiFuturesTypeGetIntradayFutureChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetIntradayFutureChartResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetIntradayFutureChartResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetIntradayFutureChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeIntradayChart
	 */
	public $GetIntradayFutureChartResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeIntradayChart GetIntradayFutureChartResult
	 * @return XiFuturesTypeGetIntradayFutureChartResponse
	 */
	public function __construct($_GetIntradayFutureChartResult = null)
	{
		parent::__construct(array('GetIntradayFutureChartResult'=>$_GetIntradayFutureChartResult));
	}
	/**
	 * Set GetIntradayFutureChartResult
	 * @param IntradayChart GetIntradayFutureChartResult
	 * @return IntradayChart
	 */
	public function setGetIntradayFutureChartResult($_GetIntradayFutureChartResult)
	{
		return ($this->GetIntradayFutureChartResult = $_GetIntradayFutureChartResult);
	}
	/**
	 * Get GetIntradayFutureChartResult
	 * @return XiFuturesTypeIntradayChart
	 */
	public function getGetIntradayFutureChartResult()
	{
		return $this->GetIntradayFutureChartResult;
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