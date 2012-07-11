<?php
/**
 * Class file for XiFuturesTypeGetAllHistoricalFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetAllHistoricalFuturesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetAllHistoricalFuturesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetAllHistoricalFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetAllHistoricalFuturesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetAllHistoricalFuturesResult
	 * @return XiFuturesTypeGetAllHistoricalFuturesResponse
	 */
	public function __construct($_GetAllHistoricalFuturesResult = null)
	{
		parent::__construct(array('GetAllHistoricalFuturesResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetAllHistoricalFuturesResult)));
	}
	/**
	 * Set GetAllHistoricalFuturesResult
	 * @param ArrayOfFutureQuote GetAllHistoricalFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllHistoricalFuturesResult($_GetAllHistoricalFuturesResult)
	{
		return ($this->GetAllHistoricalFuturesResult = $_GetAllHistoricalFuturesResult);
	}
	/**
	 * Get GetAllHistoricalFuturesResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetAllHistoricalFuturesResult()
	{
		return $this->GetAllHistoricalFuturesResult;
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