<?php
/**
 * Class file for XiGlobalFundamentalsTypeListCompaniesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeListCompaniesResponse
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeListCompaniesResponse extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The ListCompaniesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeSymbolList
	 */
	public $ListCompaniesResult;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeSymbolList ListCompaniesResult
	 * @return XiGlobalFundamentalsTypeListCompaniesResponse
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
	 * @return XiGlobalFundamentalsTypeSymbolList
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