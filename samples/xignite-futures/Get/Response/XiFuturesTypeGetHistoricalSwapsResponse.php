<?php
/**
 * Class file for XiFuturesTypeGetHistoricalSwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalSwapsResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalSwapsResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalSwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetHistoricalSwapsResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetHistoricalSwapsResult
	 * @return XiFuturesTypeGetHistoricalSwapsResponse
	 */
	public function __construct($_GetHistoricalSwapsResult = null)
	{
		parent::__construct(array('GetHistoricalSwapsResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetHistoricalSwapsResult)));
	}
	/**
	 * Set GetHistoricalSwapsResult
	 * @param ArrayOfFutureQuote GetHistoricalSwapsResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetHistoricalSwapsResult($_GetHistoricalSwapsResult)
	{
		return ($this->GetHistoricalSwapsResult = $_GetHistoricalSwapsResult);
	}
	/**
	 * Get GetHistoricalSwapsResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetHistoricalSwapsResult()
	{
		return $this->GetHistoricalSwapsResult;
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