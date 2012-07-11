<?php
/**
 * Class file for XiFundDataTypeClassification
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeClassification
 * @date 08/07/2012
 */
class XiFundDataTypeClassification extends XiFundDataWsdlClass
{
	/**
	 * The InsuranceCompanyAccount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $InsuranceCompanyAccount;
	/**
	 * The InsuranceClassification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeInsuranceClassification
	 */
	public $InsuranceClassification;
	/**
	 * The InvestmentCompany
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $InvestmentCompany;
	/**
	 * The DiversifiedInvestmentCompanyDuringPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $DiversifiedInvestmentCompanyDuringPeriod;
	/**
	 * The DiversifiedInvestmentCompanyAtEndOfPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $DiversifiedInvestmentCompanyAtEndOfPeriod;
	/**
	 * The MinimumAccountSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MinimumAccountSize;
	/**
	 * The FixedIncomeFund
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FixedIncomeFund;
	/**
	 * The FixedIncomeClassification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFixedIncomeClassification
	 */
	public $FixedIncomeClassification;
	/**
	 * The EquityFund
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $EquityFund;
	/**
	 * The EquityClassification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeEquityClassification
	 */
	public $EquityClassification;
	/**
	 * The BalancedFund
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $BalancedFund;
	/**
	 * The MoreThanFiftyPercentMetals
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MoreThanFiftyPercentMetals;
	/**
	 * The MoreThanFiftyPercentInternational
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MoreThanFiftyPercentInternational;
	/**
	 * The IndexFund
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IndexFund;
	/**
	 * The PermittedInvestmentPolicies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeInvestmentPolicies
	 */
	public $PermittedInvestmentPolicies;
	/**
	 * The EngagedInvestmentPolicies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeInvestmentPolicies
	 */
	public $EngagedInvestmentPolicies;
	/**
	 * The Turnover
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeTurnover
	 */
	public $Turnover;
	/**
	 * Constructor
	 * @param boolean InsuranceCompanyAccount
	 * @param XiFundDataTypeInsuranceClassification InsuranceClassification
	 * @param boolean InvestmentCompany
	 * @param boolean DiversifiedInvestmentCompanyDuringPeriod
	 * @param boolean DiversifiedInvestmentCompanyAtEndOfPeriod
	 * @param double MinimumAccountSize
	 * @param boolean FixedIncomeFund
	 * @param XiFundDataTypeFixedIncomeClassification FixedIncomeClassification
	 * @param boolean EquityFund
	 * @param XiFundDataTypeEquityClassification EquityClassification
	 * @param boolean BalancedFund
	 * @param boolean MoreThanFiftyPercentMetals
	 * @param boolean MoreThanFiftyPercentInternational
	 * @param boolean IndexFund
	 * @param XiFundDataTypeInvestmentPolicies PermittedInvestmentPolicies
	 * @param XiFundDataTypeInvestmentPolicies EngagedInvestmentPolicies
	 * @param XiFundDataTypeTurnover Turnover
	 * @return XiFundDataTypeClassification
	 */
	public function __construct($_InsuranceCompanyAccount,$_InsuranceClassification = null,$_InvestmentCompany,$_DiversifiedInvestmentCompanyDuringPeriod,$_DiversifiedInvestmentCompanyAtEndOfPeriod,$_MinimumAccountSize,$_FixedIncomeFund,$_FixedIncomeClassification = null,$_EquityFund,$_EquityClassification = null,$_BalancedFund,$_MoreThanFiftyPercentMetals,$_MoreThanFiftyPercentInternational,$_IndexFund,$_PermittedInvestmentPolicies = null,$_EngagedInvestmentPolicies = null,$_Turnover = null)
	{
		parent::__construct(array('InsuranceCompanyAccount'=>$_InsuranceCompanyAccount,'InsuranceClassification'=>$_InsuranceClassification,'InvestmentCompany'=>$_InvestmentCompany,'DiversifiedInvestmentCompanyDuringPeriod'=>$_DiversifiedInvestmentCompanyDuringPeriod,'DiversifiedInvestmentCompanyAtEndOfPeriod'=>$_DiversifiedInvestmentCompanyAtEndOfPeriod,'MinimumAccountSize'=>$_MinimumAccountSize,'FixedIncomeFund'=>$_FixedIncomeFund,'FixedIncomeClassification'=>$_FixedIncomeClassification,'EquityFund'=>$_EquityFund,'EquityClassification'=>$_EquityClassification,'BalancedFund'=>$_BalancedFund,'MoreThanFiftyPercentMetals'=>$_MoreThanFiftyPercentMetals,'MoreThanFiftyPercentInternational'=>$_MoreThanFiftyPercentInternational,'IndexFund'=>$_IndexFund,'PermittedInvestmentPolicies'=>$_PermittedInvestmentPolicies,'EngagedInvestmentPolicies'=>$_EngagedInvestmentPolicies,'Turnover'=>$_Turnover));
	}
	/**
	 * Set InsuranceCompanyAccount
	 * @param boolean InsuranceCompanyAccount
	 * @return boolean
	 */
	public function setInsuranceCompanyAccount($_InsuranceCompanyAccount)
	{
		return ($this->InsuranceCompanyAccount = $_InsuranceCompanyAccount);
	}
	/**
	 * Get InsuranceCompanyAccount
	 * @return boolean
	 */
	public function getInsuranceCompanyAccount()
	{
		return $this->InsuranceCompanyAccount;
	}
	/**
	 * Set InsuranceClassification
	 * @param InsuranceClassification InsuranceClassification
	 * @return InsuranceClassification
	 */
	public function setInsuranceClassification($_InsuranceClassification)
	{
		return ($this->InsuranceClassification = $_InsuranceClassification);
	}
	/**
	 * Get InsuranceClassification
	 * @return XiFundDataTypeInsuranceClassification
	 */
	public function getInsuranceClassification()
	{
		return $this->InsuranceClassification;
	}
	/**
	 * Set InvestmentCompany
	 * @param boolean InvestmentCompany
	 * @return boolean
	 */
	public function setInvestmentCompany($_InvestmentCompany)
	{
		return ($this->InvestmentCompany = $_InvestmentCompany);
	}
	/**
	 * Get InvestmentCompany
	 * @return boolean
	 */
	public function getInvestmentCompany()
	{
		return $this->InvestmentCompany;
	}
	/**
	 * Set DiversifiedInvestmentCompanyDuringPeriod
	 * @param boolean DiversifiedInvestmentCompanyDuringPeriod
	 * @return boolean
	 */
	public function setDiversifiedInvestmentCompanyDuringPeriod($_DiversifiedInvestmentCompanyDuringPeriod)
	{
		return ($this->DiversifiedInvestmentCompanyDuringPeriod = $_DiversifiedInvestmentCompanyDuringPeriod);
	}
	/**
	 * Get DiversifiedInvestmentCompanyDuringPeriod
	 * @return boolean
	 */
	public function getDiversifiedInvestmentCompanyDuringPeriod()
	{
		return $this->DiversifiedInvestmentCompanyDuringPeriod;
	}
	/**
	 * Set DiversifiedInvestmentCompanyAtEndOfPeriod
	 * @param boolean DiversifiedInvestmentCompanyAtEndOfPeriod
	 * @return boolean
	 */
	public function setDiversifiedInvestmentCompanyAtEndOfPeriod($_DiversifiedInvestmentCompanyAtEndOfPeriod)
	{
		return ($this->DiversifiedInvestmentCompanyAtEndOfPeriod = $_DiversifiedInvestmentCompanyAtEndOfPeriod);
	}
	/**
	 * Get DiversifiedInvestmentCompanyAtEndOfPeriod
	 * @return boolean
	 */
	public function getDiversifiedInvestmentCompanyAtEndOfPeriod()
	{
		return $this->DiversifiedInvestmentCompanyAtEndOfPeriod;
	}
	/**
	 * Set MinimumAccountSize
	 * @param double MinimumAccountSize
	 * @return double
	 */
	public function setMinimumAccountSize($_MinimumAccountSize)
	{
		return ($this->MinimumAccountSize = $_MinimumAccountSize);
	}
	/**
	 * Get MinimumAccountSize
	 * @return double
	 */
	public function getMinimumAccountSize()
	{
		return $this->MinimumAccountSize;
	}
	/**
	 * Set FixedIncomeFund
	 * @param boolean FixedIncomeFund
	 * @return boolean
	 */
	public function setFixedIncomeFund($_FixedIncomeFund)
	{
		return ($this->FixedIncomeFund = $_FixedIncomeFund);
	}
	/**
	 * Get FixedIncomeFund
	 * @return boolean
	 */
	public function getFixedIncomeFund()
	{
		return $this->FixedIncomeFund;
	}
	/**
	 * Set FixedIncomeClassification
	 * @param FixedIncomeClassification FixedIncomeClassification
	 * @return FixedIncomeClassification
	 */
	public function setFixedIncomeClassification($_FixedIncomeClassification)
	{
		return ($this->FixedIncomeClassification = $_FixedIncomeClassification);
	}
	/**
	 * Get FixedIncomeClassification
	 * @return XiFundDataTypeFixedIncomeClassification
	 */
	public function getFixedIncomeClassification()
	{
		return $this->FixedIncomeClassification;
	}
	/**
	 * Set EquityFund
	 * @param boolean EquityFund
	 * @return boolean
	 */
	public function setEquityFund($_EquityFund)
	{
		return ($this->EquityFund = $_EquityFund);
	}
	/**
	 * Get EquityFund
	 * @return boolean
	 */
	public function getEquityFund()
	{
		return $this->EquityFund;
	}
	/**
	 * Set EquityClassification
	 * @param EquityClassification EquityClassification
	 * @return EquityClassification
	 */
	public function setEquityClassification($_EquityClassification)
	{
		return ($this->EquityClassification = $_EquityClassification);
	}
	/**
	 * Get EquityClassification
	 * @return XiFundDataTypeEquityClassification
	 */
	public function getEquityClassification()
	{
		return $this->EquityClassification;
	}
	/**
	 * Set BalancedFund
	 * @param boolean BalancedFund
	 * @return boolean
	 */
	public function setBalancedFund($_BalancedFund)
	{
		return ($this->BalancedFund = $_BalancedFund);
	}
	/**
	 * Get BalancedFund
	 * @return boolean
	 */
	public function getBalancedFund()
	{
		return $this->BalancedFund;
	}
	/**
	 * Set MoreThanFiftyPercentMetals
	 * @param boolean MoreThanFiftyPercentMetals
	 * @return boolean
	 */
	public function setMoreThanFiftyPercentMetals($_MoreThanFiftyPercentMetals)
	{
		return ($this->MoreThanFiftyPercentMetals = $_MoreThanFiftyPercentMetals);
	}
	/**
	 * Get MoreThanFiftyPercentMetals
	 * @return boolean
	 */
	public function getMoreThanFiftyPercentMetals()
	{
		return $this->MoreThanFiftyPercentMetals;
	}
	/**
	 * Set MoreThanFiftyPercentInternational
	 * @param boolean MoreThanFiftyPercentInternational
	 * @return boolean
	 */
	public function setMoreThanFiftyPercentInternational($_MoreThanFiftyPercentInternational)
	{
		return ($this->MoreThanFiftyPercentInternational = $_MoreThanFiftyPercentInternational);
	}
	/**
	 * Get MoreThanFiftyPercentInternational
	 * @return boolean
	 */
	public function getMoreThanFiftyPercentInternational()
	{
		return $this->MoreThanFiftyPercentInternational;
	}
	/**
	 * Set IndexFund
	 * @param boolean IndexFund
	 * @return boolean
	 */
	public function setIndexFund($_IndexFund)
	{
		return ($this->IndexFund = $_IndexFund);
	}
	/**
	 * Get IndexFund
	 * @return boolean
	 */
	public function getIndexFund()
	{
		return $this->IndexFund;
	}
	/**
	 * Set PermittedInvestmentPolicies
	 * @param InvestmentPolicies PermittedInvestmentPolicies
	 * @return InvestmentPolicies
	 */
	public function setPermittedInvestmentPolicies($_PermittedInvestmentPolicies)
	{
		return ($this->PermittedInvestmentPolicies = $_PermittedInvestmentPolicies);
	}
	/**
	 * Get PermittedInvestmentPolicies
	 * @return XiFundDataTypeInvestmentPolicies
	 */
	public function getPermittedInvestmentPolicies()
	{
		return $this->PermittedInvestmentPolicies;
	}
	/**
	 * Set EngagedInvestmentPolicies
	 * @param InvestmentPolicies EngagedInvestmentPolicies
	 * @return InvestmentPolicies
	 */
	public function setEngagedInvestmentPolicies($_EngagedInvestmentPolicies)
	{
		return ($this->EngagedInvestmentPolicies = $_EngagedInvestmentPolicies);
	}
	/**
	 * Get EngagedInvestmentPolicies
	 * @return XiFundDataTypeInvestmentPolicies
	 */
	public function getEngagedInvestmentPolicies()
	{
		return $this->EngagedInvestmentPolicies;
	}
	/**
	 * Set Turnover
	 * @param Turnover Turnover
	 * @return Turnover
	 */
	public function setTurnover($_Turnover)
	{
		return ($this->Turnover = $_Turnover);
	}
	/**
	 * Get Turnover
	 * @return XiFundDataTypeTurnover
	 */
	public function getTurnover()
	{
		return $this->Turnover;
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