<?php
/**
 * Class file for XiFuturesTypeListFuturesByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListFuturesByExchangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListFuturesByExchangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListFuturesByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFuture
	 */
	public $ListFuturesByExchangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFuture ListFuturesByExchangeResult
	 * @return XiFuturesTypeListFuturesByExchangeResponse
	 */
	public function __construct($_ListFuturesByExchangeResult = null)
	{
		parent::__construct(array('ListFuturesByExchangeResult'=>new XiFuturesTypeArrayOfFuture($_ListFuturesByExchangeResult)));
	}
	/**
	 * Set ListFuturesByExchangeResult
	 * @param ArrayOfFuture ListFuturesByExchangeResult
	 * @return ArrayOfFuture
	 */
	public function setListFuturesByExchangeResult($_ListFuturesByExchangeResult)
	{
		return ($this->ListFuturesByExchangeResult = $_ListFuturesByExchangeResult);
	}
	/**
	 * Get ListFuturesByExchangeResult
	 * @return XiFuturesTypeArrayOfFuture
	 */
	public function getListFuturesByExchangeResult()
	{
		return $this->ListFuturesByExchangeResult;
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