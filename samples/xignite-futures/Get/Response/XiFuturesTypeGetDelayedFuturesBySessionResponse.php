<?php
/**
 * Class file for XiFuturesTypeGetDelayedFuturesBySessionResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFuturesBySessionResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFuturesBySessionResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedFuturesBySessionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetDelayedFuturesBySessionResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetDelayedFuturesBySessionResult
	 * @return XiFuturesTypeGetDelayedFuturesBySessionResponse
	 */
	public function __construct($_GetDelayedFuturesBySessionResult = null)
	{
		parent::__construct(array('GetDelayedFuturesBySessionResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetDelayedFuturesBySessionResult)));
	}
	/**
	 * Set GetDelayedFuturesBySessionResult
	 * @param ArrayOfFutureQuote GetDelayedFuturesBySessionResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetDelayedFuturesBySessionResult($_GetDelayedFuturesBySessionResult)
	{
		return ($this->GetDelayedFuturesBySessionResult = $_GetDelayedFuturesBySessionResult);
	}
	/**
	 * Get GetDelayedFuturesBySessionResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetDelayedFuturesBySessionResult()
	{
		return $this->GetDelayedFuturesBySessionResult;
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