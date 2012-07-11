<?php
/**
 * Class file for XiFuturesTypeListSwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeListSwapsResponse
 * @date 08/07/2012
 */
class XiFuturesTypeListSwapsResponse extends XiFuturesWsdlClass
{
	/**
	 * The ListSwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfFuture
	 */
	public $ListSwapsResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeArrayOfFuture ListSwapsResult
	 * @return XiFuturesTypeListSwapsResponse
	 */
	public function __construct($_ListSwapsResult = null)
	{
		parent::__construct(array('ListSwapsResult'=>new XiFuturesTypeArrayOfFuture($_ListSwapsResult)));
	}
	/**
	 * Set ListSwapsResult
	 * @param ArrayOfFuture ListSwapsResult
	 * @return ArrayOfFuture
	 */
	public function setListSwapsResult($_ListSwapsResult)
	{
		return ($this->ListSwapsResult = $_ListSwapsResult);
	}
	/**
	 * Get ListSwapsResult
	 * @return XiFuturesTypeArrayOfFuture
	 */
	public function getListSwapsResult()
	{
		return $this->ListSwapsResult;
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