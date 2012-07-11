<?php
/**
 * Class file for XiFuturesTypeGetDelayedFutureBySessionResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFutureBySessionResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFutureBySessionResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedFutureBySessionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuote
	 */
	public $GetDelayedFutureBySessionResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote GetDelayedFutureBySessionResult
	 * @return XiFuturesTypeGetDelayedFutureBySessionResponse
	 */
	public function __construct($_GetDelayedFutureBySessionResult = null)
	{
		parent::__construct(array('GetDelayedFutureBySessionResult'=>$_GetDelayedFutureBySessionResult));
	}
	/**
	 * Set GetDelayedFutureBySessionResult
	 * @param FutureQuote GetDelayedFutureBySessionResult
	 * @return FutureQuote
	 */
	public function setGetDelayedFutureBySessionResult($_GetDelayedFutureBySessionResult)
	{
		return ($this->GetDelayedFutureBySessionResult = $_GetDelayedFutureBySessionResult);
	}
	/**
	 * Get GetDelayedFutureBySessionResult
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getGetDelayedFutureBySessionResult()
	{
		return $this->GetDelayedFutureBySessionResult;
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