<?php
/**
 * Class file for XiFuturesTypeGetDelayedSwapResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedSwapResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedSwapResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedSwapResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuote
	 */
	public $GetDelayedSwapResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote GetDelayedSwapResult
	 * @return XiFuturesTypeGetDelayedSwapResponse
	 */
	public function __construct($_GetDelayedSwapResult = null)
	{
		parent::__construct(array('GetDelayedSwapResult'=>$_GetDelayedSwapResult));
	}
	/**
	 * Set GetDelayedSwapResult
	 * @param FutureQuote GetDelayedSwapResult
	 * @return FutureQuote
	 */
	public function setGetDelayedSwapResult($_GetDelayedSwapResult)
	{
		return ($this->GetDelayedSwapResult = $_GetDelayedSwapResult);
	}
	/**
	 * Get GetDelayedSwapResult
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getGetDelayedSwapResult()
	{
		return $this->GetDelayedSwapResult;
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