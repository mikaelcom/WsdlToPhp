<?php
/**
 * Class file for XiFinancialsTypeFinancialServicesNonOperatingExpenses
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeFinancialServicesNonOperatingExpenses
 * @date 08/07/2012
 */
class XiFinancialsTypeFinancialServicesNonOperatingExpenses extends XiFinancialsWsdlClass
{
	/**
	 * The InterestExpense
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestExpense;
	/**
	 * The PreTaxIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreTaxIncome;
	/**
	 * The IncomeTaxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomeTaxes;
	/**
	 * The MinorityInterest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MinorityInterest;
	/**
	 * The IncomeBeforeIncomeTaxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomeBeforeIncomeTaxes;
	/**
	 * The NetIncomeFromContinuingOperations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetIncomeFromContinuingOperations;
	/**
	 * The NetIncomeFromDiscontinuedOperations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetIncomeFromDiscontinuedOperations;
	/**
	 * The NetIncomeFromTotalOperations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetIncomeFromTotalOperations;
	/**
	 * Constructor
	 * @param double InterestExpense
	 * @param double PreTaxIncome
	 * @param double IncomeTaxes
	 * @param double MinorityInterest
	 * @param double IncomeBeforeIncomeTaxes
	 * @param double NetIncomeFromContinuingOperations
	 * @param double NetIncomeFromDiscontinuedOperations
	 * @param double NetIncomeFromTotalOperations
	 * @return XiFinancialsTypeFinancialServicesNonOperatingExpenses
	 */
	public function __construct($_InterestExpense,$_PreTaxIncome,$_IncomeTaxes,$_MinorityInterest,$_IncomeBeforeIncomeTaxes,$_NetIncomeFromContinuingOperations,$_NetIncomeFromDiscontinuedOperations,$_NetIncomeFromTotalOperations)
	{
		parent::__construct(array('InterestExpense'=>$_InterestExpense,'PreTaxIncome'=>$_PreTaxIncome,'IncomeTaxes'=>$_IncomeTaxes,'MinorityInterest'=>$_MinorityInterest,'IncomeBeforeIncomeTaxes'=>$_IncomeBeforeIncomeTaxes,'NetIncomeFromContinuingOperations'=>$_NetIncomeFromContinuingOperations,'NetIncomeFromDiscontinuedOperations'=>$_NetIncomeFromDiscontinuedOperations,'NetIncomeFromTotalOperations'=>$_NetIncomeFromTotalOperations));
	}
	/**
	 * Set InterestExpense
	 * @param double InterestExpense
	 * @return double
	 */
	public function setInterestExpense($_InterestExpense)
	{
		return ($this->InterestExpense = $_InterestExpense);
	}
	/**
	 * Get InterestExpense
	 * @return double
	 */
	public function getInterestExpense()
	{
		return $this->InterestExpense;
	}
	/**
	 * Set PreTaxIncome
	 * @param double PreTaxIncome
	 * @return double
	 */
	public function setPreTaxIncome($_PreTaxIncome)
	{
		return ($this->PreTaxIncome = $_PreTaxIncome);
	}
	/**
	 * Get PreTaxIncome
	 * @return double
	 */
	public function getPreTaxIncome()
	{
		return $this->PreTaxIncome;
	}
	/**
	 * Set IncomeTaxes
	 * @param double IncomeTaxes
	 * @return double
	 */
	public function setIncomeTaxes($_IncomeTaxes)
	{
		return ($this->IncomeTaxes = $_IncomeTaxes);
	}
	/**
	 * Get IncomeTaxes
	 * @return double
	 */
	public function getIncomeTaxes()
	{
		return $this->IncomeTaxes;
	}
	/**
	 * Set MinorityInterest
	 * @param double MinorityInterest
	 * @return double
	 */
	public function setMinorityInterest($_MinorityInterest)
	{
		return ($this->MinorityInterest = $_MinorityInterest);
	}
	/**
	 * Get MinorityInterest
	 * @return double
	 */
	public function getMinorityInterest()
	{
		return $this->MinorityInterest;
	}
	/**
	 * Set IncomeBeforeIncomeTaxes
	 * @param double IncomeBeforeIncomeTaxes
	 * @return double
	 */
	public function setIncomeBeforeIncomeTaxes($_IncomeBeforeIncomeTaxes)
	{
		return ($this->IncomeBeforeIncomeTaxes = $_IncomeBeforeIncomeTaxes);
	}
	/**
	 * Get IncomeBeforeIncomeTaxes
	 * @return double
	 */
	public function getIncomeBeforeIncomeTaxes()
	{
		return $this->IncomeBeforeIncomeTaxes;
	}
	/**
	 * Set NetIncomeFromContinuingOperations
	 * @param double NetIncomeFromContinuingOperations
	 * @return double
	 */
	public function setNetIncomeFromContinuingOperations($_NetIncomeFromContinuingOperations)
	{
		return ($this->NetIncomeFromContinuingOperations = $_NetIncomeFromContinuingOperations);
	}
	/**
	 * Get NetIncomeFromContinuingOperations
	 * @return double
	 */
	public function getNetIncomeFromContinuingOperations()
	{
		return $this->NetIncomeFromContinuingOperations;
	}
	/**
	 * Set NetIncomeFromDiscontinuedOperations
	 * @param double NetIncomeFromDiscontinuedOperations
	 * @return double
	 */
	public function setNetIncomeFromDiscontinuedOperations($_NetIncomeFromDiscontinuedOperations)
	{
		return ($this->NetIncomeFromDiscontinuedOperations = $_NetIncomeFromDiscontinuedOperations);
	}
	/**
	 * Get NetIncomeFromDiscontinuedOperations
	 * @return double
	 */
	public function getNetIncomeFromDiscontinuedOperations()
	{
		return $this->NetIncomeFromDiscontinuedOperations;
	}
	/**
	 * Set NetIncomeFromTotalOperations
	 * @param double NetIncomeFromTotalOperations
	 * @return double
	 */
	public function setNetIncomeFromTotalOperations($_NetIncomeFromTotalOperations)
	{
		return ($this->NetIncomeFromTotalOperations = $_NetIncomeFromTotalOperations);
	}
	/**
	 * Get NetIncomeFromTotalOperations
	 * @return double
	 */
	public function getNetIncomeFromTotalOperations()
	{
		return $this->NetIncomeFromTotalOperations;
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