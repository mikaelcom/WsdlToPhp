<?php
/**
 * Class file for XiFuturesTypeListFuturesByCategoryResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListFuturesByCategoryResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListFuturesByCategoryResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListFuturesByCategoryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFuture
	 */
	public $ListFuturesByCategoryResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFuture ListFuturesByCategoryResult
	 * @return XiFuturesTypeListFuturesByCategoryResponse
	 */
	public function __construct($_ListFuturesByCategoryResult = null)
	{
		parent::__construct(array('ListFuturesByCategoryResult'=>new XiFuturesTypeArrayOfFuture($_ListFuturesByCategoryResult)));
	}
	/**
	 * Set ListFuturesByCategoryResult
	 * @param ArrayOfFuture ListFuturesByCategoryResult
	 * @return ArrayOfFuture
	 */
	public function setListFuturesByCategoryResult($_ListFuturesByCategoryResult)
	{
		return ($this->ListFuturesByCategoryResult = $_ListFuturesByCategoryResult);
	}
	/**
	 * Get ListFuturesByCategoryResult
	 * @return XiFuturesTypeArrayOfFuture
	 */
	public function getListFuturesByCategoryResult()
	{
		return $this->ListFuturesByCategoryResult;
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