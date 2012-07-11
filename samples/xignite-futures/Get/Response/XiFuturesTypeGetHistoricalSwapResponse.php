<?php
/**
 * Class file for XiFuturesTypeGetHistoricalSwapResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalSwapResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalSwapResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalSwapResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuote
	 */
	public $GetHistoricalSwapResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote GetHistoricalSwapResult
	 * @return XiFuturesTypeGetHistoricalSwapResponse
	 */
	public function __construct($_GetHistoricalSwapResult = null)
	{
		parent::__construct(array('GetHistoricalSwapResult'=>$_GetHistoricalSwapResult));
	}
	/**
	 * Set GetHistoricalSwapResult
	 * @param FutureQuote GetHistoricalSwapResult
	 * @return FutureQuote
	 */
	public function setGetHistoricalSwapResult($_GetHistoricalSwapResult)
	{
		return ($this->GetHistoricalSwapResult = $_GetHistoricalSwapResult);
	}
	/**
	 * Get GetHistoricalSwapResult
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getGetHistoricalSwapResult()
	{
		return $this->GetHistoricalSwapResult;
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