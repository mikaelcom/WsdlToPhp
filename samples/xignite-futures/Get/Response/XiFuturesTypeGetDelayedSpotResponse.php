<?php
/**
 * Class file for XiFuturesTypeGetDelayedSpotResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedSpotResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedSpotResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedSpotResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuote
	 */
	public $GetDelayedSpotResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote GetDelayedSpotResult
	 * @return XiFuturesTypeGetDelayedSpotResponse
	 */
	public function __construct($_GetDelayedSpotResult = null)
	{
		parent::__construct(array('GetDelayedSpotResult'=>$_GetDelayedSpotResult));
	}
	/**
	 * Set GetDelayedSpotResult
	 * @param FutureQuote GetDelayedSpotResult
	 * @return FutureQuote
	 */
	public function setGetDelayedSpotResult($_GetDelayedSpotResult)
	{
		return ($this->GetDelayedSpotResult = $_GetDelayedSpotResult);
	}
	/**
	 * Get GetDelayedSpotResult
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getGetDelayedSpotResult()
	{
		return $this->GetDelayedSpotResult;
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