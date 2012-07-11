<?php
/**
 * Class file for XiFuturesTypeGetAllDelayedFuturesBySessionResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetAllDelayedFuturesBySessionResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetAllDelayedFuturesBySessionResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetAllDelayedFuturesBySessionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetAllDelayedFuturesBySessionResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetAllDelayedFuturesBySessionResult
	 * @return XiFuturesTypeGetAllDelayedFuturesBySessionResponse
	 */
	public function __construct($_GetAllDelayedFuturesBySessionResult = null)
	{
		parent::__construct(array('GetAllDelayedFuturesBySessionResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetAllDelayedFuturesBySessionResult)));
	}
	/**
	 * Set GetAllDelayedFuturesBySessionResult
	 * @param ArrayOfFutureQuote GetAllDelayedFuturesBySessionResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllDelayedFuturesBySessionResult($_GetAllDelayedFuturesBySessionResult)
	{
		return ($this->GetAllDelayedFuturesBySessionResult = $_GetAllDelayedFuturesBySessionResult);
	}
	/**
	 * Get GetAllDelayedFuturesBySessionResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetAllDelayedFuturesBySessionResult()
	{
		return $this->GetAllDelayedFuturesBySessionResult;
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