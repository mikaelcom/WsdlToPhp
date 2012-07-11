<?php
/**
 * Class file for XiFuturesTypeGetAllDelayedSwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetAllDelayedSwapsResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetAllDelayedSwapsResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetAllDelayedSwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFutureQuote
	 */
	public $GetAllDelayedSwapsResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFutureQuote GetAllDelayedSwapsResult
	 * @return XiFuturesTypeGetAllDelayedSwapsResponse
	 */
	public function __construct($_GetAllDelayedSwapsResult = null)
	{
		parent::__construct(array('GetAllDelayedSwapsResult'=>new XiFuturesTypeArrayOfFutureQuote($_GetAllDelayedSwapsResult)));
	}
	/**
	 * Set GetAllDelayedSwapsResult
	 * @param ArrayOfFutureQuote GetAllDelayedSwapsResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllDelayedSwapsResult($_GetAllDelayedSwapsResult)
	{
		return ($this->GetAllDelayedSwapsResult = $_GetAllDelayedSwapsResult);
	}
	/**
	 * Get GetAllDelayedSwapsResult
	 * @return XiFuturesTypeArrayOfFutureQuote
	 */
	public function getGetAllDelayedSwapsResult()
	{
		return $this->GetAllDelayedSwapsResult;
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