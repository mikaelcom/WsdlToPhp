<?php
/**
 * Class file for XiFinancialsTypeGetFinancialServicesBalanceSheetResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetFinancialServicesBalanceSheetResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetFinancialServicesBalanceSheetResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetFinancialServicesBalanceSheetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeBalanceSheetFinancialServices
	 */
	public $GetFinancialServicesBalanceSheetResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeBalanceSheetFinancialServices GetFinancialServicesBalanceSheetResult
	 * @return XiFinancialsTypeGetFinancialServicesBalanceSheetResponse
	 */
	public function __construct($_GetFinancialServicesBalanceSheetResult = null)
	{
		parent::__construct(array('GetFinancialServicesBalanceSheetResult'=>$_GetFinancialServicesBalanceSheetResult));
	}
	/**
	 * Set GetFinancialServicesBalanceSheetResult
	 * @param BalanceSheetFinancialServices GetFinancialServicesBalanceSheetResult
	 * @return BalanceSheetFinancialServices
	 */
	public function setGetFinancialServicesBalanceSheetResult($_GetFinancialServicesBalanceSheetResult)
	{
		return ($this->GetFinancialServicesBalanceSheetResult = $_GetFinancialServicesBalanceSheetResult);
	}
	/**
	 * Get GetFinancialServicesBalanceSheetResult
	 * @return XiFinancialsTypeBalanceSheetFinancialServices
	 */
	public function getGetFinancialServicesBalanceSheetResult()
	{
		return $this->GetFinancialServicesBalanceSheetResult;
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