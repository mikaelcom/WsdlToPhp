<?php
/**
 * Class file for XiFuturesTypeGetTopDelayedFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetTopDelayedFuturesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetTopDelayedFuturesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetTopDelayedFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetTopDelayedFuturesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetTopDelayedFuturesResult
	 * @return XiFuturesTypeGetTopDelayedFuturesResponse
	 */
	public function __construct($_GetTopDelayedFuturesResult = null)
	{
		parent::__construct(array('GetTopDelayedFuturesResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetTopDelayedFuturesResult)));
	}
	/**
	 * Set GetTopDelayedFuturesResult
	 * @param ArrayOfFutureQuote GetTopDelayedFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetTopDelayedFuturesResult($_GetTopDelayedFuturesResult)
	{
		return ($this->GetTopDelayedFuturesResult = $_GetTopDelayedFuturesResult);
	}
	/**
	 * Get GetTopDelayedFuturesResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetTopDelayedFuturesResult()
	{
		return $this->GetTopDelayedFuturesResult;
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