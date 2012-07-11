<?php
/**
 * Class file for XiFuturesTypeGetAllDelayedFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetAllDelayedFuturesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetAllDelayedFuturesResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetAllDelayedFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetAllDelayedFuturesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetAllDelayedFuturesResult
	 * @return XiFuturesTypeGetAllDelayedFuturesResponse
	 */
	public function __construct($_GetAllDelayedFuturesResult = null)
	{
		parent::__construct(array('GetAllDelayedFuturesResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetAllDelayedFuturesResult)));
	}
	/**
	 * Set GetAllDelayedFuturesResult
	 * @param ArrayOfFutureQuote GetAllDelayedFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllDelayedFuturesResult($_GetAllDelayedFuturesResult)
	{
		return ($this->GetAllDelayedFuturesResult = $_GetAllDelayedFuturesResult);
	}
	/**
	 * Get GetAllDelayedFuturesResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetAllDelayedFuturesResult()
	{
		return $this->GetAllDelayedFuturesResult;
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