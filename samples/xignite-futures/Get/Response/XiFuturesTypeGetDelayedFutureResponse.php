<?php
/**
 * Class file for XiFuturesTypeGetDelayedFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFutureResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFutureResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuote
	 */
	public $GetDelayedFutureResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote GetDelayedFutureResult
	 * @return XiFuturesTypeGetDelayedFutureResponse
	 */
	public function __construct($_GetDelayedFutureResult = null)
	{
		parent::__construct(array('GetDelayedFutureResult'=>$_GetDelayedFutureResult));
	}
	/**
	 * Set GetDelayedFutureResult
	 * @param FutureQuote GetDelayedFutureResult
	 * @return FutureQuote
	 */
	public function setGetDelayedFutureResult($_GetDelayedFutureResult)
	{
		return ($this->GetDelayedFutureResult = $_GetDelayedFutureResult);
	}
	/**
	 * Get GetDelayedFutureResult
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getGetDelayedFutureResult()
	{
		return $this->GetDelayedFutureResult;
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