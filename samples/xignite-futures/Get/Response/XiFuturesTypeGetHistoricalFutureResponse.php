<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutureResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutureResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutureResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFutureResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFutureQuote
	 */
	public $GetHistoricalFutureResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeFutureQuote GetHistoricalFutureResult
	 * @return XiFuturesTypeGetHistoricalFutureResponse
	 */
	public function __construct($_GetHistoricalFutureResult = null)
	{
		parent::__construct(array('GetHistoricalFutureResult'=>$_GetHistoricalFutureResult));
	}
	/**
	 * Set GetHistoricalFutureResult
	 * @param FutureQuote GetHistoricalFutureResult
	 * @return FutureQuote
	 */
	public function setGetHistoricalFutureResult($_GetHistoricalFutureResult)
	{
		return ($this->GetHistoricalFutureResult = $_GetHistoricalFutureResult);
	}
	/**
	 * Get GetHistoricalFutureResult
	 * @return XiFuturesTypeFutureQuote
	 */
	public function getGetHistoricalFutureResult()
	{
		return $this->GetHistoricalFutureResult;
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