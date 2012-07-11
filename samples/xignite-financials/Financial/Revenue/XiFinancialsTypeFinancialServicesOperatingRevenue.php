<?php
/**
 * Class file for XiFinancialsTypeFinancialServicesOperatingRevenue
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeFinancialServicesOperatingRevenue
 * @date 08/07/2012
 */
class XiFinancialsTypeFinancialServicesOperatingRevenue extends XiFinancialsWsdlClass
{
	/**
	 * The OperatingRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OperatingRevenue;
	/**
	 * The AdjustmentsToRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AdjustmentsToRevenue;
	/**
	 * The GrossOperatingProfit
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrossOperatingProfit;
	/**
	 * The IncomeFromLoans
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomeFromLoans;
	/**
	 * The OtherInterestIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherInterestIncome;
	/**
	 * The IncomeFromFederalFundsSoldOrPurchased
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomeFromFederalFundsSoldOrPurchased;
	/**
	 * The IncomeFromInterestBearingDeposits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomeFromInterestBearingDeposits;
	/**
	 * The TotalInterestIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalInterestIncome;
	/**
	 * The InterestOnDeposits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestOnDeposits;
	/**
	 * The InterestOnShortTermDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestOnShortTermDebt;
	/**
	 * The InterestOnLongTermDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestOnLongTermDebt;
	/**
	 * The OtherInterestExpense
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherInterestExpense;
	/**
	 * The TotalInterestExpense
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalInterestExpense;
	/**
	 * The NetInterestIncomeOrExpense
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetInterestIncomeOrExpense;
	/**
	 * Constructor
	 * @param double OperatingRevenue
	 * @param double AdjustmentsToRevenue
	 * @param double GrossOperatingProfit
	 * @param double IncomeFromLoans
	 * @param double OtherInterestIncome
	 * @param double IncomeFromFederalFundsSoldOrPurchased
	 * @param double IncomeFromInterestBearingDeposits
	 * @param double TotalInterestIncome
	 * @param double InterestOnDeposits
	 * @param double InterestOnShortTermDebt
	 * @param double InterestOnLongTermDebt
	 * @param double OtherInterestExpense
	 * @param double TotalInterestExpense
	 * @param double NetInterestIncomeOrExpense
	 * @return XiFinancialsTypeFinancialServicesOperatingRevenue
	 */
	public function __construct($_OperatingRevenue,$_AdjustmentsToRevenue,$_GrossOperatingProfit,$_IncomeFromLoans,$_OtherInterestIncome,$_IncomeFromFederalFundsSoldOrPurchased,$_IncomeFromInterestBearingDeposits,$_TotalInterestIncome,$_InterestOnDeposits,$_InterestOnShortTermDebt,$_InterestOnLongTermDebt,$_OtherInterestExpense,$_TotalInterestExpense,$_NetInterestIncomeOrExpense)
	{
		parent::__construct(array('OperatingRevenue'=>$_OperatingRevenue,'AdjustmentsToRevenue'=>$_AdjustmentsToRevenue,'GrossOperatingProfit'=>$_GrossOperatingProfit,'IncomeFromLoans'=>$_IncomeFromLoans,'OtherInterestIncome'=>$_OtherInterestIncome,'IncomeFromFederalFundsSoldOrPurchased'=>$_IncomeFromFederalFundsSoldOrPurchased,'IncomeFromInterestBearingDeposits'=>$_IncomeFromInterestBearingDeposits,'TotalInterestIncome'=>$_TotalInterestIncome,'InterestOnDeposits'=>$_InterestOnDeposits,'InterestOnShortTermDebt'=>$_InterestOnShortTermDebt,'InterestOnLongTermDebt'=>$_InterestOnLongTermDebt,'OtherInterestExpense'=>$_OtherInterestExpense,'TotalInterestExpense'=>$_TotalInterestExpense,'NetInterestIncomeOrExpense'=>$_NetInterestIncomeOrExpense));
	}
	/**
	 * Set OperatingRevenue
	 * @param double OperatingRevenue
	 * @return double
	 */
	public function setOperatingRevenue($_OperatingRevenue)
	{
		return ($this->OperatingRevenue = $_OperatingRevenue);
	}
	/**
	 * Get OperatingRevenue
	 * @return double
	 */
	public function getOperatingRevenue()
	{
		return $this->OperatingRevenue;
	}
	/**
	 * Set AdjustmentsToRevenue
	 * @param double AdjustmentsToRevenue
	 * @return double
	 */
	public function setAdjustmentsToRevenue($_AdjustmentsToRevenue)
	{
		return ($this->AdjustmentsToRevenue = $_AdjustmentsToRevenue);
	}
	/**
	 * Get AdjustmentsToRevenue
	 * @return double
	 */
	public function getAdjustmentsToRevenue()
	{
		return $this->AdjustmentsToRevenue;
	}
	/**
	 * Set GrossOperatingProfit
	 * @param double GrossOperatingProfit
	 * @return double
	 */
	public function setGrossOperatingProfit($_GrossOperatingProfit)
	{
		return ($this->GrossOperatingProfit = $_GrossOperatingProfit);
	}
	/**
	 * Get GrossOperatingProfit
	 * @return double
	 */
	public function getGrossOperatingProfit()
	{
		return $this->GrossOperatingProfit;
	}
	/**
	 * Set IncomeFromLoans
	 * @param double IncomeFromLoans
	 * @return double
	 */
	public function setIncomeFromLoans($_IncomeFromLoans)
	{
		return ($this->IncomeFromLoans = $_IncomeFromLoans);
	}
	/**
	 * Get IncomeFromLoans
	 * @return double
	 */
	public function getIncomeFromLoans()
	{
		return $this->IncomeFromLoans;
	}
	/**
	 * Set OtherInterestIncome
	 * @param double OtherInterestIncome
	 * @return double
	 */
	public function setOtherInterestIncome($_OtherInterestIncome)
	{
		return ($this->OtherInterestIncome = $_OtherInterestIncome);
	}
	/**
	 * Get OtherInterestIncome
	 * @return double
	 */
	public function getOtherInterestIncome()
	{
		return $this->OtherInterestIncome;
	}
	/**
	 * Set IncomeFromFederalFundsSoldOrPurchased
	 * @param double IncomeFromFederalFundsSoldOrPurchased
	 * @return double
	 */
	public function setIncomeFromFederalFundsSoldOrPurchased($_IncomeFromFederalFundsSoldOrPurchased)
	{
		return ($this->IncomeFromFederalFundsSoldOrPurchased = $_IncomeFromFederalFundsSoldOrPurchased);
	}
	/**
	 * Get IncomeFromFederalFundsSoldOrPurchased
	 * @return double
	 */
	public function getIncomeFromFederalFundsSoldOrPurchased()
	{
		return $this->IncomeFromFederalFundsSoldOrPurchased;
	}
	/**
	 * Set IncomeFromInterestBearingDeposits
	 * @param double IncomeFromInterestBearingDeposits
	 * @return double
	 */
	public function setIncomeFromInterestBearingDeposits($_IncomeFromInterestBearingDeposits)
	{
		return ($this->IncomeFromInterestBearingDeposits = $_IncomeFromInterestBearingDeposits);
	}
	/**
	 * Get IncomeFromInterestBearingDeposits
	 * @return double
	 */
	public function getIncomeFromInterestBearingDeposits()
	{
		return $this->IncomeFromInterestBearingDeposits;
	}
	/**
	 * Set TotalInterestIncome
	 * @param double TotalInterestIncome
	 * @return double
	 */
	public function setTotalInterestIncome($_TotalInterestIncome)
	{
		return ($this->TotalInterestIncome = $_TotalInterestIncome);
	}
	/**
	 * Get TotalInterestIncome
	 * @return double
	 */
	public function getTotalInterestIncome()
	{
		return $this->TotalInterestIncome;
	}
	/**
	 * Set InterestOnDeposits
	 * @param double InterestOnDeposits
	 * @return double
	 */
	public function setInterestOnDeposits($_InterestOnDeposits)
	{
		return ($this->InterestOnDeposits = $_InterestOnDeposits);
	}
	/**
	 * Get InterestOnDeposits
	 * @return double
	 */
	public function getInterestOnDeposits()
	{
		return $this->InterestOnDeposits;
	}
	/**
	 * Set InterestOnShortTermDebt
	 * @param double InterestOnShortTermDebt
	 * @return double
	 */
	public function setInterestOnShortTermDebt($_InterestOnShortTermDebt)
	{
		return ($this->InterestOnShortTermDebt = $_InterestOnShortTermDebt);
	}
	/**
	 * Get InterestOnShortTermDebt
	 * @return double
	 */
	public function getInterestOnShortTermDebt()
	{
		return $this->InterestOnShortTermDebt;
	}
	/**
	 * Set InterestOnLongTermDebt
	 * @param double InterestOnLongTermDebt
	 * @return double
	 */
	public function setInterestOnLongTermDebt($_InterestOnLongTermDebt)
	{
		return ($this->InterestOnLongTermDebt = $_InterestOnLongTermDebt);
	}
	/**
	 * Get InterestOnLongTermDebt
	 * @return double
	 */
	public function getInterestOnLongTermDebt()
	{
		return $this->InterestOnLongTermDebt;
	}
	/**
	 * Set OtherInterestExpense
	 * @param double OtherInterestExpense
	 * @return double
	 */
	public function setOtherInterestExpense($_OtherInterestExpense)
	{
		return ($this->OtherInterestExpense = $_OtherInterestExpense);
	}
	/**
	 * Get OtherInterestExpense
	 * @return double
	 */
	public function getOtherInterestExpense()
	{
		return $this->OtherInterestExpense;
	}
	/**
	 * Set TotalInterestExpense
	 * @param double TotalInterestExpense
	 * @return double
	 */
	public function setTotalInterestExpense($_TotalInterestExpense)
	{
		return ($this->TotalInterestExpense = $_TotalInterestExpense);
	}
	/**
	 * Get TotalInterestExpense
	 * @return double
	 */
	public function getTotalInterestExpense()
	{
		return $this->TotalInterestExpense;
	}
	/**
	 * Set NetInterestIncomeOrExpense
	 * @param double NetInterestIncomeOrExpense
	 * @return double
	 */
	public function setNetInterestIncomeOrExpense($_NetInterestIncomeOrExpense)
	{
		return ($this->NetInterestIncomeOrExpense = $_NetInterestIncomeOrExpense);
	}
	/**
	 * Get NetInterestIncomeOrExpense
	 * @return double
	 */
	public function getNetInterestIncomeOrExpense()
	{
		return $this->NetInterestIncomeOrExpense;
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