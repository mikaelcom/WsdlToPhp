<?php
/**
 * Class file for XiFuturesTypeGetAllHistoricalSwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetAllHistoricalSwapsResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetAllHistoricalSwapsResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetAllHistoricalSwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetAllHistoricalSwapsResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetAllHistoricalSwapsResult
	 * @return XiFuturesTypeGetAllHistoricalSwapsResponse
	 */
	public function __construct($_GetAllHistoricalSwapsResult = null)
	{
		parent::__construct(array('GetAllHistoricalSwapsResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetAllHistoricalSwapsResult)));
	}
	/**
	 * Set GetAllHistoricalSwapsResult
	 * @param ArrayOfFutureQuote GetAllHistoricalSwapsResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllHistoricalSwapsResult($_GetAllHistoricalSwapsResult)
	{
		return ($this->GetAllHistoricalSwapsResult = $_GetAllHistoricalSwapsResult);
	}
	/**
	 * Get GetAllHistoricalSwapsResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetAllHistoricalSwapsResult()
	{
		return $this->GetAllHistoricalSwapsResult;
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