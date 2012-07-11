<?php
/**
 * Class file for XiBATSLastSaleTypeListTradedSymbolsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeListTradedSymbolsResponse
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeListTradedSymbolsResponse extends XiBATSLastSaleWsdlClass
{
	/**
	 * The ListTradedSymbolsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSLastSaleTypeSymbolList
	 */
	public $ListTradedSymbolsResult;
	/**
	 * Constructor
	 * @param XiBATSLastSaleTypeSymbolList ListTradedSymbolsResult
	 * @return XiBATSLastSaleTypeListTradedSymbolsResponse
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
	 * @return XiBATSLastSaleTypeSymbolList
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