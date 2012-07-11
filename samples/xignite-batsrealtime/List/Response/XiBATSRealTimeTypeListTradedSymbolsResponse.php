<?php
/**
 * Class file for XiBATSRealTimeTypeListTradedSymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeListTradedSymbolsResponse
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeListTradedSymbolsResponse extends XiBATSRealTimeWsdlClass
{
	/**
	 * The ListTradedSymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeSymbolList
	 */
	public $ListTradedSymbolsResult;
	/**
	 * Constructor
	 * @param XiBATSRealTimeTypeSymbolList ListTradedSymbolsResult
	 * @return XiBATSRealTimeTypeListTradedSymbolsResponse
	 */
	public function __construct($_ListTradedSymbolsResult = null)
	{
		parent::__construct(array('ListTradedSymbolsResult'=>$_ListTradedSymbolsResult));
	}
	/**
	 * Set ListTradedSymbolsResult
	 * @param SymbolList ListTradedSymbolsResult
	 * @return SymbolList
	 */
	public function setListTradedSymbolsResult($_ListTradedSymbolsResult)
	{
		return ($this->ListTradedSymbolsResult = $_ListTradedSymbolsResult);
	}
	/**
	 * Get ListTradedSymbolsResult
	 * @return XiBATSRealTimeTypeSymbolList
	 */
	public function getListTradedSymbolsResult()
	{
		return $this->ListTradedSymbolsResult;
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