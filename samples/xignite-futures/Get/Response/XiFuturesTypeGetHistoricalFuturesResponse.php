<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFuturesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFuturesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetHistoricalFuturesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetHistoricalFuturesResult
	 * @return XiFuturesTypeGetHistoricalFuturesResponse
	 */
	public function __construct($_GetHistoricalFuturesResult = null)
	{
		parent::__construct(array('GetHistoricalFuturesResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetHistoricalFuturesResult)));
	}
	/**
	 * Set GetHistoricalFuturesResult
	 * @param ArrayOfFutureQuote GetHistoricalFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetHistoricalFuturesResult($_GetHistoricalFuturesResult)
	{
		return ($this->GetHistoricalFuturesResult = $_GetHistoricalFuturesResult);
	}
	/**
	 * Get GetHistoricalFuturesResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetHistoricalFuturesResult()
	{
		return $this->GetHistoricalFuturesResult;
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