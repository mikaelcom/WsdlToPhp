<?php
/**
 * Class file for XiFuturesTypeListFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListFuturesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListFuturesResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFuture
	 */
	public $ListFuturesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFuture ListFuturesResult
	 * @return XiFuturesTypeListFuturesResponse
	 */
	public function __construct($_ListFuturesResult = null)
	{
		parent::__construct(array('ListFuturesResult'=>new XiFuturesTypeArrayOfFuture($_ListFuturesResult)));
	}
	/**
	 * Set ListFuturesResult
	 * @param ArrayOfFuture ListFuturesResult
	 * @return ArrayOfFuture
	 */
	public function setListFuturesResult($_ListFuturesResult)
	{
		return ($this->ListFuturesResult = $_ListFuturesResult);
	}
	/**
	 * Get ListFuturesResult
	 * @return XiFuturesTypeArrayOfFuture
	 */
	public function getListFuturesResult()
	{
		return $this->ListFuturesResult;
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