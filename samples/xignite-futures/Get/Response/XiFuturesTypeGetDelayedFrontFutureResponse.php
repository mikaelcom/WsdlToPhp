<?php
/**
 * Class file for XiFuturesTypeGetDelayedFrontFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFrontFutureResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFrontFutureResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedFrontFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuote
	 */
	public $GetDelayedFrontFutureResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote GetDelayedFrontFutureResult
	 * @return XiFuturesTypeGetDelayedFrontFutureResponse
	 */
	public function __construct($_GetDelayedFrontFutureResult = null)
	{
		parent::__construct(array('GetDelayedFrontFutureResult'=>$_GetDelayedFrontFutureResult));
	}
	/**
	 * Set GetDelayedFrontFutureResult
	 * @param FutureQuote GetDelayedFrontFutureResult
	 * @return FutureQuote
	 */
	public function setGetDelayedFrontFutureResult($_GetDelayedFrontFutureResult)
	{
		return ($this->GetDelayedFrontFutureResult = $_GetDelayedFrontFutureResult);
	}
	/**
	 * Get GetDelayedFrontFutureResult
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getGetDelayedFrontFutureResult()
	{
		return $this->GetDelayedFrontFutureResult;
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