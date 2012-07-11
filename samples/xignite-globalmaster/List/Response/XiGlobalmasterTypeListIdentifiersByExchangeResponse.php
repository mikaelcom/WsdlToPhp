<?php
/**
 * Class file for XiGlobalmasterTypeListIdentifiersByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeListIdentifiersByExchangeResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeListIdentifiersByExchangeResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The ListIdentifiersByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeIdentifiersByExchange
	 */
	public $ListIdentifiersByExchangeResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeIdentifiersByExchange ListIdentifiersByExchangeResult
	 * @return XiGlobalmasterTypeListIdentifiersByExchangeResponse
	 */
	public function __construct($_ListIdentifiersByExchangeResult = null)
	{
		parent::__construct(array('ListIdentifiersByExchangeResult'=>$_ListIdentifiersByExchangeResult));
	}
	/**
	 * Set ListIdentifiersByExchangeResult
	 * @param IdentifiersByExchange ListIdentifiersByExchangeResult
	 * @return IdentifiersByExchange
	 */
	public function setListIdentifiersByExchangeResult($_ListIdentifiersByExchangeResult)
	{
		return ($this->ListIdentifiersByExchangeResult = $_ListIdentifiersByExchangeResult);
	}
	/**
	 * Get ListIdentifiersByExchangeResult
	 * @return XiGlobalmasterTypeIdentifiersByExchange
	 */
	public function getListIdentifiersByExchangeResult()
	{
		return $this->ListIdentifiersByExchangeResult;
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