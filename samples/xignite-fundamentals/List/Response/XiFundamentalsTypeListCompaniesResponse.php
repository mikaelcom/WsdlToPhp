<?php
/**
 * Class file for XiFundamentalsTypeListCompaniesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeListCompaniesResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeListCompaniesResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The ListCompaniesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeSymbolList
	 */
	public $ListCompaniesResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeSymbolList ListCompaniesResult
	 * @return XiFundamentalsTypeListCompaniesResponse
	 */
	public function __construct($_ListCompaniesResult = null)
	{
		parent::__construct(array('ListCompaniesResult'=>$_ListCompaniesResult));
	}
	/**
	 * Set ListCompaniesResult
	 * @param SymbolList ListCompaniesResult
	 * @return SymbolList
	 */
	public function setListCompaniesResult($_ListCompaniesResult)
	{
		return ($this->ListCompaniesResult = $_ListCompaniesResult);
	}
	/**
	 * Get ListCompaniesResult
	 * @return XiFundamentalsTypeSymbolList
	 */
	public function getListCompaniesResult()
	{
		return $this->ListCompaniesResult;
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