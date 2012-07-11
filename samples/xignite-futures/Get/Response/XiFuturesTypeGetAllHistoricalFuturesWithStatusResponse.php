<?php
/**
 * Class file for XiFuturesTypeGetAllHistoricalFuturesWithStatusResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetAllHistoricalFuturesWithStatusResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetAllHistoricalFuturesWithStatusResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetAllHistoricalFuturesWithStatusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuoteAndStatus
	 */
	public $GetAllHistoricalFuturesWithStatusResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuoteAndStatus GetAllHistoricalFuturesWithStatusResult
	 * @return XiFuturesTypeGetAllHistoricalFuturesWithStatusResponse
	 */
	public function __construct($_GetAllHistoricalFuturesWithStatusResult = null)
	{
		parent::__construct(array('GetAllHistoricalFuturesWithStatusResult'=>new XiFuturesTypeArrayOfFutureQuoteAndStatus($_GetAllHistoricalFuturesWithStatusResult)));
	}
	/**
	 * Set GetAllHistoricalFuturesWithStatusResult
	 * @param ArrayOfFutureQuoteAndStatus GetAllHistoricalFuturesWithStatusResult
	 * @return ArrayOfFutureQuoteAndStatus
	 */
	public function setGetAllHistoricalFuturesWithStatusResult($_GetAllHistoricalFuturesWithStatusResult)
	{
		return ($this->GetAllHistoricalFuturesWithStatusResult = $_GetAllHistoricalFuturesWithStatusResult);
	}
	/**
	 * Get GetAllHistoricalFuturesWithStatusResult
	 * @return XiFuturesTypeArrayOfFutureQuoteAndStatus
	 */
	public function getGetAllHistoricalFuturesWithStatusResult()
	{
		return $this->GetAllHistoricalFuturesWithStatusResult;
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