<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutureChartResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutureChartResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutureChartResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFutureChartResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeHistoricalChart
	 */
	public $GetHistoricalFutureChartResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeHistoricalChart GetHistoricalFutureChartResult
	 * @return XiFuturesTypeGetHistoricalFutureChartResponse
	 */
	public function __construct($_GetHistoricalFutureChartResult = null)
	{
		parent::__construct(array('GetHistoricalFutureChartResult'=>$_GetHistoricalFutureChartResult));
	}
	/**
	 * Set GetHistoricalFutureChartResult
	 * @param HistoricalChart GetHistoricalFutureChartResult
	 * @return HistoricalChart
	 */
	public function setGetHistoricalFutureChartResult($_GetHistoricalFutureChartResult)
	{
		return ($this->GetHistoricalFutureChartResult = $_GetHistoricalFutureChartResult);
	}
	/**
	 * Get GetHistoricalFutureChartResult
	 * @return XiFuturesTypeHistoricalChart
	 */
	public function getGetHistoricalFutureChartResult()
	{
		return $this->GetHistoricalFutureChartResult;
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