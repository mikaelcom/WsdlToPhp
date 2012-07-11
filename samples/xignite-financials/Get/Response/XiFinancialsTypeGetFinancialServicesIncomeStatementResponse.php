<?php
/**
 * Class file for XiFinancialsTypeGetFinancialServicesIncomeStatementResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetFinancialServicesIncomeStatementResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetFinancialServicesIncomeStatementResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetFinancialServicesIncomeStatementResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesIncomeStatement
	 */
	public $GetFinancialServicesIncomeStatementResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeFinancialServicesIncomeStatement GetFinancialServicesIncomeStatementResult
	 * @return XiFinancialsTypeGetFinancialServicesIncomeStatementResponse
	 */
	public function __construct($_GetFinancialServicesIncomeStatementResult = null)
	{
		parent::__construct(array('GetFinancialServicesIncomeStatementResult'=>$_GetFinancialServicesIncomeStatementResult));
	}
	/**
	 * Set GetFinancialServicesIncomeStatementResult
	 * @param FinancialServicesIncomeStatement GetFinancialServicesIncomeStatementResult
	 * @return FinancialServicesIncomeStatement
	 */
	public function setGetFinancialServicesIncomeStatementResult($_GetFinancialServicesIncomeStatementResult)
	{
		return ($this->GetFinancialServicesIncomeStatementResult = $_GetFinancialServicesIncomeStatementResult);
	}
	/**
	 * Get GetFinancialServicesIncomeStatementResult
	 * @return XiFinancialsTypeFinancialServicesIncomeStatement
	 */
	public function getGetFinancialServicesIncomeStatementResult()
	{
		return $this->GetFinancialServicesIncomeStatementResult;
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