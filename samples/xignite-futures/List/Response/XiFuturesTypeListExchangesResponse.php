<?php
/**
 * Class file for XiFuturesTypeListExchangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListExchangesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListExchangesResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListExchangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfExchange
	 */
	public $ListExchangesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfExchange ListExchangesResult
	 * @return XiFuturesTypeListExchangesResponse
	 */
	public function __construct($_ListExchangesResult = null)
	{
		parent::__construct(array('ListExchangesResult'=>new XiFuturesTypeArrayOfExchange($_ListExchangesResult)));
	}
	/**
	 * Set ListExchangesResult
	 * @param ArrayOfExchange ListExchangesResult
	 * @return ArrayOfExchange
	 */
	public function setListExchangesResult($_ListExchangesResult)
	{
		return ($this->ListExchangesResult = $_ListExchangesResult);
	}
	/**
	 * Get ListExchangesResult
	 * @return XiFuturesTypeArrayOfExchange
	 */
	public function getListExchangesResult()
	{
		return $this->ListExchangesResult;
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