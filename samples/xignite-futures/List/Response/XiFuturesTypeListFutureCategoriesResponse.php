<?php
/**
 * Class file for XiFuturesTypeListFutureCategoriesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListFutureCategoriesResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListFutureCategoriesResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListFutureCategoriesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfNameResult
	 */
	public $ListFutureCategoriesResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfNameResult ListFutureCategoriesResult
	 * @return XiFuturesTypeListFutureCategoriesResponse
	 */
	public function __construct($_ListFutureCategoriesResult = null)
	{
		parent::__construct(array('ListFutureCategoriesResult'=>new XiFuturesTypeArrayOfNameResult($_ListFutureCategoriesResult)));
	}
	/**
	 * Set ListFutureCategoriesResult
	 * @param ArrayOfNameResult ListFutureCategoriesResult
	 * @return ArrayOfNameResult
	 */
	public function setListFutureCategoriesResult($_ListFutureCategoriesResult)
	{
		return ($this->ListFutureCategoriesResult = $_ListFutureCategoriesResult);
	}
	/**
	 * Get ListFutureCategoriesResult
	 * @return XiFuturesTypeArrayOfNameResult
	 */
	public function getListFutureCategoriesResult()
	{
		return $this->ListFutureCategoriesResult;
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