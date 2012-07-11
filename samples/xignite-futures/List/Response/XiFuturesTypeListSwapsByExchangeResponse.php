<?php
/**
 * Class file for XiFuturesTypeListSwapsByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListSwapsByExchangeResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListSwapsByExchangeResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListSwapsByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFuture
	 */
	public $ListSwapsByExchangeResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFuture ListSwapsByExchangeResult
	 * @return XiFuturesTypeListSwapsByExchangeResponse
	 */
	public function __construct($_ListSwapsByExchangeResult = null)
	{
		parent::__construct(array('ListSwapsByExchangeResult'=>new XiFuturesTypeArrayOfFuture($_ListSwapsByExchangeResult)));
	}
	/**
	 * Set ListSwapsByExchangeResult
	 * @param ArrayOfFuture ListSwapsByExchangeResult
	 * @return ArrayOfFuture
	 */
	public function setListSwapsByExchangeResult($_ListSwapsByExchangeResult)
	{
		return ($this->ListSwapsByExchangeResult = $_ListSwapsByExchangeResult);
	}
	/**
	 * Get ListSwapsByExchangeResult
	 * @return XiFuturesTypeArrayOfFuture
	 */
	public function getListSwapsByExchangeResult()
	{
		return $this->ListSwapsByExchangeResult;
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