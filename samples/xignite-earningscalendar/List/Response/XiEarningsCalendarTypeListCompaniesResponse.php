<?php
/**
 * Class file for XiEarningsCalendarTypeListCompaniesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeListCompaniesResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeListCompaniesResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The ListCompaniesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeSymbolList
	 */
	public $ListCompaniesResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSymbolList ListCompaniesResult
	 * @return XiEarningsCalendarTypeListCompaniesResponse
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
	 * @return XiEarningsCalendarTypeSymbolList
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