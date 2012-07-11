<?php
/**
 * Class file for XiFuturesTypeGetDelayedFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFuturesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFuturesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetDelayedFuturesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetDelayedFuturesResult
	 * @return XiFuturesTypeGetDelayedFuturesResponse
	 */
	public function __construct($_GetDelayedFuturesResult = null)
	{
		parent::__construct(array('GetDelayedFuturesResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetDelayedFuturesResult)));
	}
	/**
	 * Set GetDelayedFuturesResult
	 * @param ArrayOfFutureQuote GetDelayedFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetDelayedFuturesResult($_GetDelayedFuturesResult)
	{
		return ($this->GetDelayedFuturesResult = $_GetDelayedFuturesResult);
	}
	/**
	 * Get GetDelayedFuturesResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetDelayedFuturesResult()
	{
		return $this->GetDelayedFuturesResult;
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