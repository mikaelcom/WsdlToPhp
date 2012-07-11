<?php
/**
 * Class file for XiFundDataTypeAdvisoryFee
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeAdvisoryFee
 * @date 08/07/2012
 */
class XiFundDataTypeAdvisoryFee extends XiFundDataWsdlClass
{
	/**
	 * The PercentageOfIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PercentageOfIncome;
	/**
	 * The PercentageOfIncomeAndAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PercentageOfIncomeAndAssets;
	/**
	 * The PerformanceBased
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PerformanceBased;
	/**
	 * The OtherRegistrantsPerformanceBased
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OtherRegistrantsPerformanceBased;
	/**
	 * The ExpensesReduced
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ExpensesReduced;
	/**
	 * The AssetsExpenseReduction
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AssetsExpenseReduction;
	/**
	 * The IncomeExpenseReduction
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IncomeExpenseReduction;
	/**
	 * The OverdraftsOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OverdraftsOutstanding;
	/**
	 * The BankLoansOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $BankLoansOutstanding;
	/**
	 * The NonInstitutionalAdvisers
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $NonInstitutionalAdvisers;
	/**
	 * The StockSplitOrDividend
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $StockSplitOrDividend;
	/**
	 * The UnreimbursedExpenses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeUnreimbursedExpenses
	 */
	public $UnreimbursedExpenses;
	/**
	 * Constructor
	 * @param boolean PercentageOfIncome
	 * @param boolean PercentageOfIncomeAndAssets
	 * @param boolean PerformanceBased
	 * @param boolean OtherRegistrantsPerformanceBased
	 * @param boolean ExpensesReduced
	 * @param boolean AssetsExpenseReduction
	 * @param boolean IncomeExpenseReduction
	 * @param boolean OverdraftsOutstanding
	 * @param boolean BankLoansOutstanding
	 * @param boolean NonInstitutionalAdvisers
	 * @param boolean StockSplitOrDividend
	 * @param XiFundDataTypeUnreimbursedExpenses UnreimbursedExpenses
	 * @return XiFundDataTypeAdvisoryFee
	 */
	public function __construct($_PercentageOfIncome,$_PercentageOfIncomeAndAssets,$_PerformanceBased,$_OtherRegistrantsPerformanceBased,$_ExpensesReduced,$_AssetsExpenseReduction,$_IncomeExpenseReduction,$_OverdraftsOutstanding,$_BankLoansOutstanding,$_NonInstitutionalAdvisers,$_StockSplitOrDividend,$_UnreimbursedExpenses = null)
	{
		parent::__construct(array('PercentageOfIncome'=>$_PercentageOfIncome,'PercentageOfIncomeAndAssets'=>$_PercentageOfIncomeAndAssets,'PerformanceBased'=>$_PerformanceBased,'OtherRegistrantsPerformanceBased'=>$_OtherRegistrantsPerformanceBased,'ExpensesReduced'=>$_ExpensesReduced,'AssetsExpenseReduction'=>$_AssetsExpenseReduction,'IncomeExpenseReduction'=>$_IncomeExpenseReduction,'OverdraftsOutstanding'=>$_OverdraftsOutstanding,'BankLoansOutstanding'=>$_BankLoansOutstanding,'NonInstitutionalAdvisers'=>$_NonInstitutionalAdvisers,'StockSplitOrDividend'=>$_StockSplitOrDividend,'UnreimbursedExpenses'=>$_UnreimbursedExpenses));
	}
	/**
	 * Set PercentageOfIncome
	 * @param boolean PercentageOfIncome
	 * @return boolean
	 */
	public function setPercentageOfIncome($_PercentageOfIncome)
	{
		return ($this->PercentageOfIncome = $_PercentageOfIncome);
	}
	/**
	 * Get PercentageOfIncome
	 * @return boolean
	 */
	public function getPercentageOfIncome()
	{
		return $this->PercentageOfIncome;
	}
	/**
	 * Set PercentageOfIncomeAndAssets
	 * @param boolean PercentageOfIncomeAndAssets
	 * @return boolean
	 */
	public function setPercentageOfIncomeAndAssets($_PercentageOfIncomeAndAssets)
	{
		return ($this->PercentageOfIncomeAndAssets = $_PercentageOfIncomeAndAssets);
	}
	/**
	 * Get PercentageOfIncomeAndAssets
	 * @return boolean
	 */
	public function getPercentageOfIncomeAndAssets()
	{
		return $this->PercentageOfIncomeAndAssets;
	}
	/**
	 * Set PerformanceBased
	 * @param boolean PerformanceBased
	 * @return boolean
	 */
	public function setPerformanceBased($_PerformanceBased)
	{
		return ($this->PerformanceBased = $_PerformanceBased);
	}
	/**
	 * Get PerformanceBased
	 * @return boolean
	 */
	public function getPerformanceBased()
	{
		return $this->PerformanceBased;
	}
	/**
	 * Set OtherRegistrantsPerformanceBased
	 * @param boolean OtherRegistrantsPerformanceBased
	 * @return boolean
	 */
	public function setOtherRegistrantsPerformanceBased($_OtherRegistrantsPerformanceBased)
	{
		return ($this->OtherRegistrantsPerformanceBased = $_OtherRegistrantsPerformanceBased);
	}
	/**
	 * Get OtherRegistrantsPerformanceBased
	 * @return boolean
	 */
	public function getOtherRegistrantsPerformanceBased()
	{
		return $this->OtherRegistrantsPerformanceBased;
	}
	/**
	 * Set ExpensesReduced
	 * @param boolean ExpensesReduced
	 * @return boolean
	 */
	public function setExpensesReduced($_ExpensesReduced)
	{
		return ($this->ExpensesReduced = $_ExpensesReduced);
	}
	/**
	 * Get ExpensesReduced
	 * @return boolean
	 */
	public function getExpensesReduced()
	{
		return $this->ExpensesReduced;
	}
	/**
	 * Set AssetsExpenseReduction
	 * @param boolean AssetsExpenseReduction
	 * @return boolean
	 */
	public function setAssetsExpenseReduction($_AssetsExpenseReduction)
	{
		return ($this->AssetsExpenseReduction = $_AssetsExpenseReduction);
	}
	/**
	 * Get AssetsExpenseReduction
	 * @return boolean
	 */
	public function getAssetsExpenseReduction()
	{
		return $this->AssetsExpenseReduction;
	}
	/**
	 * Set IncomeExpenseReduction
	 * @param boolean IncomeExpenseReduction
	 * @return boolean
	 */
	public function setIncomeExpenseReduction($_IncomeExpenseReduction)
	{
		return ($this->IncomeExpenseReduction = $_IncomeExpenseReduction);
	}
	/**
	 * Get IncomeExpenseReduction
	 * @return boolean
	 */
	public function getIncomeExpenseReduction()
	{
		return $this->IncomeExpenseReduction;
	}
	/**
	 * Set OverdraftsOutstanding
	 * @param boolean OverdraftsOutstanding
	 * @return boolean
	 */
	public function setOverdraftsOutstanding($_OverdraftsOutstanding)
	{
		return ($this->OverdraftsOutstanding = $_OverdraftsOutstanding);
	}
	/**
	 * Get OverdraftsOutstanding
	 * @return boolean
	 */
	public function getOverdraftsOutstanding()
	{
		return $this->OverdraftsOutstanding;
	}
	/**
	 * Set BankLoansOutstanding
	 * @param boolean BankLoansOutstanding
	 * @return boolean
	 */
	public function setBankLoansOutstanding($_BankLoansOutstanding)
	{
		return ($this->BankLoansOutstanding = $_BankLoansOutstanding);
	}
	/**
	 * Get BankLoansOutstanding
	 * @return boolean
	 */
	public function getBankLoansOutstanding()
	{
		return $this->BankLoansOutstanding;
	}
	/**
	 * Set NonInstitutionalAdvisers
	 * @param boolean NonInstitutionalAdvisers
	 * @return boolean
	 */
	public function setNonInstitutionalAdvisers($_NonInstitutionalAdvisers)
	{
		return ($this->NonInstitutionalAdvisers = $_NonInstitutionalAdvisers);
	}
	/**
	 * Get NonInstitutionalAdvisers
	 * @return boolean
	 */
	public function getNonInstitutionalAdvisers()
	{
		return $this->NonInstitutionalAdvisers;
	}
	/**
	 * Set StockSplitOrDividend
	 * @param boolean StockSplitOrDividend
	 * @return boolean
	 */
	public function setStockSplitOrDividend($_StockSplitOrDividend)
	{
		return ($this->StockSplitOrDividend = $_StockSplitOrDividend);
	}
	/**
	 * Get StockSplitOrDividend
	 * @return boolean
	 */
	public function getStockSplitOrDividend()
	{
		return $this->StockSplitOrDividend;
	}
	/**
	 * Set UnreimbursedExpenses
	 * @param UnreimbursedExpenses UnreimbursedExpenses
	 * @return UnreimbursedExpenses
	 */
	public function setUnreimbursedExpenses($_UnreimbursedExpenses)
	{
		return ($this->UnreimbursedExpenses = $_UnreimbursedExpenses);
	}
	/**
	 * Get UnreimbursedExpenses
	 * @return XiFundDataTypeUnreimbursedExpenses
	 */
	public function getUnreimbursedExpenses()
	{
		return $this->UnreimbursedExpenses;
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