<?php
/**
 * Class file for XiFuturesTypeGetDelayedSpotsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedSpotsResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedSpotsResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedSpotsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetDelayedSpotsResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetDelayedSpotsResult
	 * @return XiFuturesTypeGetDelayedSpotsResponse
	 */
	public function __construct($_GetDelayedSpotsResult = null)
	{
		parent::__construct(array('GetDelayedSpotsResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetDelayedSpotsResult)));
	}
	/**
	 * Set GetDelayedSpotsResult
	 * @param ArrayOfFutureQuote GetDelayedSpotsResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetDelayedSpotsResult($_GetDelayedSpotsResult)
	{
		return ($this->GetDelayedSpotsResult = $_GetDelayedSpotsResult);
	}
	/**
	 * Get GetDelayedSpotsResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetDelayedSpotsResult()
	{
		return $this->GetDelayedSpotsResult;
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