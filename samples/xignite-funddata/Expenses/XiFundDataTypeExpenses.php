<?php
/**
 * Class file for XiFundDataTypeExpenses
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeExpenses
 * @date 08/07/2012
 */
class XiFundDataTypeExpenses extends XiFundDataWsdlClass
{
	/**
	 * The GrossAdvisoryFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrossAdvisoryFees;
	/**
	 * The GrossAdministratorFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrossAdministratorFees;
	/**
	 * The SalariesAndOtherCompensation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SalariesAndOtherCompensation;
	/**
	 * The ShareholdersServicingAgentFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ShareholdersServicingAgentFees;
	/**
	 * The CustodianFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CustodianFees;
	/**
	 * The Postage
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Postage;
	/**
	 * The PrintingExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PrintingExpenses;
	/**
	 * The DirectorsFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DirectorsFees;
	/**
	 * The RegistrationFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RegistrationFees;
	/**
	 * The Taxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Taxes;
	/**
	 * The Interest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Interest;
	/**
	 * The BookeepingFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BookeepingFees;
	/**
	 * The AuditFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AuditFees;
	/**
	 * The LegalFees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LegalFees;
	/**
	 * The MarketingDistributionPayments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MarketingDistributionPayments;
	/**
	 * The AmortizationOfOrganizationExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AmortizationOfOrganizationExpenses;
	/**
	 * The ShareholderMeetingExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ShareholderMeetingExpenses;
	/**
	 * The OtherExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherExpenses;
	/**
	 * The TotalExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalExpenses;
	/**
	 * The ExpenseReimbursements
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExpenseReimbursements;
	/**
	 * The NetInvestmentIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetInvestmentIncome;
	/**
	 * The RealizedCapitalGains
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RealizedCapitalGains;
	/**
	 * The RealizedCapitalLosses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RealizedCapitalLosses;
	/**
	 * The NetUnrealizedAppreciationForPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetUnrealizedAppreciationForPeriod;
	/**
	 * The NetUnrealizedDepreciationForPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetUnrealizedDepreciationForPeriod;
	/**
	 * The TotalIncomeDividendsForWhichrecordDatePassed
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalIncomeDividendsForWhichrecordDatePassed;
	/**
	 * The SecondClassOpenEndCompanySharesDividends
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SecondClassOpenEndCompanySharesDividends;
	/**
	 * The TotalCapitalGainDistributions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalCapitalGainDistributions;
	/**
	 * The DividendPaidFromNetInvestmentIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DividendPaidFromNetInvestmentIncome;
	/**
	 * The DividendPaidForSecondClassOpenEndCompanyShares
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DividendPaidForSecondClassOpenEndCompanyShares;
	/**
	 * The DistributionsOfCapitalGains
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DistributionsOfCapitalGains;
	/**
	 * The OtherDistributions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherDistributions;
	/**
	 * Constructor
	 * @param double GrossAdvisoryFees
	 * @param double GrossAdministratorFees
	 * @param double SalariesAndOtherCompensation
	 * @param double ShareholdersServicingAgentFees
	 * @param double CustodianFees
	 * @param double Postage
	 * @param double PrintingExpenses
	 * @param double DirectorsFees
	 * @param double RegistrationFees
	 * @param double Taxes
	 * @param double Interest
	 * @param double BookeepingFees
	 * @param double AuditFees
	 * @param double LegalFees
	 * @param double MarketingDistributionPayments
	 * @param double AmortizationOfOrganizationExpenses
	 * @param double ShareholderMeetingExpenses
	 * @param double OtherExpenses
	 * @param double TotalExpenses
	 * @param double ExpenseReimbursements
	 * @param double NetInvestmentIncome
	 * @param double RealizedCapitalGains
	 * @param double RealizedCapitalLosses
	 * @param double NetUnrealizedAppreciationForPeriod
	 * @param double NetUnrealizedDepreciationForPeriod
	 * @param double TotalIncomeDividendsForWhichrecordDatePassed
	 * @param double SecondClassOpenEndCompanySharesDividends
	 * @param double TotalCapitalGainDistributions
	 * @param double DividendPaidFromNetInvestmentIncome
	 * @param double DividendPaidForSecondClassOpenEndCompanyShares
	 * @param double DistributionsOfCapitalGains
	 * @param double OtherDistributions
	 * @return XiFundDataTypeExpenses
	 */
	public function __construct($_GrossAdvisoryFees,$_GrossAdministratorFees,$_SalariesAndOtherCompensation,$_ShareholdersServicingAgentFees,$_CustodianFees,$_Postage,$_PrintingExpenses,$_DirectorsFees,$_RegistrationFees,$_Taxes,$_Interest,$_BookeepingFees,$_AuditFees,$_LegalFees,$_MarketingDistributionPayments,$_AmortizationOfOrganizationExpenses,$_ShareholderMeetingExpenses,$_OtherExpenses,$_TotalExpenses,$_ExpenseReimbursements,$_NetInvestmentIncome,$_RealizedCapitalGains,$_RealizedCapitalLosses,$_NetUnrealizedAppreciationForPeriod,$_NetUnrealizedDepreciationForPeriod,$_TotalIncomeDividendsForWhichrecordDatePassed,$_SecondClassOpenEndCompanySharesDividends,$_TotalCapitalGainDistributions,$_DividendPaidFromNetInvestmentIncome,$_DividendPaidForSecondClassOpenEndCompanyShares,$_DistributionsOfCapitalGains,$_OtherDistributions)
	{
		parent::__construct(array('GrossAdvisoryFees'=>$_GrossAdvisoryFees,'GrossAdministratorFees'=>$_GrossAdministratorFees,'SalariesAndOtherCompensation'=>$_SalariesAndOtherCompensation,'ShareholdersServicingAgentFees'=>$_ShareholdersServicingAgentFees,'CustodianFees'=>$_CustodianFees,'Postage'=>$_Postage,'PrintingExpenses'=>$_PrintingExpenses,'DirectorsFees'=>$_DirectorsFees,'RegistrationFees'=>$_RegistrationFees,'Taxes'=>$_Taxes,'Interest'=>$_Interest,'BookeepingFees'=>$_BookeepingFees,'AuditFees'=>$_AuditFees,'LegalFees'=>$_LegalFees,'MarketingDistributionPayments'=>$_MarketingDistributionPayments,'AmortizationOfOrganizationExpenses'=>$_AmortizationOfOrganizationExpenses,'ShareholderMeetingExpenses'=>$_ShareholderMeetingExpenses,'OtherExpenses'=>$_OtherExpenses,'TotalExpenses'=>$_TotalExpenses,'ExpenseReimbursements'=>$_ExpenseReimbursements,'NetInvestmentIncome'=>$_NetInvestmentIncome,'RealizedCapitalGains'=>$_RealizedCapitalGains,'RealizedCapitalLosses'=>$_RealizedCapitalLosses,'NetUnrealizedAppreciationForPeriod'=>$_NetUnrealizedAppreciationForPeriod,'NetUnrealizedDepreciationForPeriod'=>$_NetUnrealizedDepreciationForPeriod,'TotalIncomeDividendsForWhichrecordDatePassed'=>$_TotalIncomeDividendsForWhichrecordDatePassed,'SecondClassOpenEndCompanySharesDividends'=>$_SecondClassOpenEndCompanySharesDividends,'TotalCapitalGainDistributions'=>$_TotalCapitalGainDistributions,'DividendPaidFromNetInvestmentIncome'=>$_DividendPaidFromNetInvestmentIncome,'DividendPaidForSecondClassOpenEndCompanyShares'=>$_DividendPaidForSecondClassOpenEndCompanyShares,'DistributionsOfCapitalGains'=>$_DistributionsOfCapitalGains,'OtherDistributions'=>$_OtherDistributions));
	}
	/**
	 * Set GrossAdvisoryFees
	 * @param double GrossAdvisoryFees
	 * @return double
	 */
	public function setGrossAdvisoryFees($_GrossAdvisoryFees)
	{
		return ($this->GrossAdvisoryFees = $_GrossAdvisoryFees);
	}
	/**
	 * Get GrossAdvisoryFees
	 * @return double
	 */
	public function getGrossAdvisoryFees()
	{
		return $this->GrossAdvisoryFees;
	}
	/**
	 * Set GrossAdministratorFees
	 * @param double GrossAdministratorFees
	 * @return double
	 */
	public function setGrossAdministratorFees($_GrossAdministratorFees)
	{
		return ($this->GrossAdministratorFees = $_GrossAdministratorFees);
	}
	/**
	 * Get GrossAdministratorFees
	 * @return double
	 */
	public function getGrossAdministratorFees()
	{
		return $this->GrossAdministratorFees;
	}
	/**
	 * Set SalariesAndOtherCompensation
	 * @param double SalariesAndOtherCompensation
	 * @return double
	 */
	public function setSalariesAndOtherCompensation($_SalariesAndOtherCompensation)
	{
		return ($this->SalariesAndOtherCompensation = $_SalariesAndOtherCompensation);
	}
	/**
	 * Get SalariesAndOtherCompensation
	 * @return double
	 */
	public function getSalariesAndOtherCompensation()
	{
		return $this->SalariesAndOtherCompensation;
	}
	/**
	 * Set ShareholdersServicingAgentFees
	 * @param double ShareholdersServicingAgentFees
	 * @return double
	 */
	public function setShareholdersServicingAgentFees($_ShareholdersServicingAgentFees)
	{
		return ($this->ShareholdersServicingAgentFees = $_ShareholdersServicingAgentFees);
	}
	/**
	 * Get ShareholdersServicingAgentFees
	 * @return double
	 */
	public function getShareholdersServicingAgentFees()
	{
		return $this->ShareholdersServicingAgentFees;
	}
	/**
	 * Set CustodianFees
	 * @param double CustodianFees
	 * @return double
	 */
	public function setCustodianFees($_CustodianFees)
	{
		return ($this->CustodianFees = $_CustodianFees);
	}
	/**
	 * Get CustodianFees
	 * @return double
	 */
	public function getCustodianFees()
	{
		return $this->CustodianFees;
	}
	/**
	 * Set Postage
	 * @param double Postage
	 * @return double
	 */
	public function setPostage($_Postage)
	{
		return ($this->Postage = $_Postage);
	}
	/**
	 * Get Postage
	 * @return double
	 */
	public function getPostage()
	{
		return $this->Postage;
	}
	/**
	 * Set PrintingExpenses
	 * @param double PrintingExpenses
	 * @return double
	 */
	public function setPrintingExpenses($_PrintingExpenses)
	{
		return ($this->PrintingExpenses = $_PrintingExpenses);
	}
	/**
	 * Get PrintingExpenses
	 * @return double
	 */
	public function getPrintingExpenses()
	{
		return $this->PrintingExpenses;
	}
	/**
	 * Set DirectorsFees
	 * @param double DirectorsFees
	 * @return double
	 */
	public function setDirectorsFees($_DirectorsFees)
	{
		return ($this->DirectorsFees = $_DirectorsFees);
	}
	/**
	 * Get DirectorsFees
	 * @return double
	 */
	public function getDirectorsFees()
	{
		return $this->DirectorsFees;
	}
	/**
	 * Set RegistrationFees
	 * @param double RegistrationFees
	 * @return double
	 */
	public function setRegistrationFees($_RegistrationFees)
	{
		return ($this->RegistrationFees = $_RegistrationFees);
	}
	/**
	 * Get RegistrationFees
	 * @return double
	 */
	public function getRegistrationFees()
	{
		return $this->RegistrationFees;
	}
	/**
	 * Set Taxes
	 * @param double Taxes
	 * @return double
	 */
	public function setTaxes($_Taxes)
	{
		return ($this->Taxes = $_Taxes);
	}
	/**
	 * Get Taxes
	 * @return double
	 */
	public function getTaxes()
	{
		return $this->Taxes;
	}
	/**
	 * Set Interest
	 * @param double Interest
	 * @return double
	 */
	public function setInterest($_Interest)
	{
		return ($this->Interest = $_Interest);
	}
	/**
	 * Get Interest
	 * @return double
	 */
	public function getInterest()
	{
		return $this->Interest;
	}
	/**
	 * Set BookeepingFees
	 * @param double BookeepingFees
	 * @return double
	 */
	public function setBookeepingFees($_BookeepingFees)
	{
		return ($this->BookeepingFees = $_BookeepingFees);
	}
	/**
	 * Get BookeepingFees
	 * @return double
	 */
	public function getBookeepingFees()
	{
		return $this->BookeepingFees;
	}
	/**
	 * Set AuditFees
	 * @param double AuditFees
	 * @return double
	 */
	public function setAuditFees($_AuditFees)
	{
		return ($this->AuditFees = $_AuditFees);
	}
	/**
	 * Get AuditFees
	 * @return double
	 */
	public function getAuditFees()
	{
		return $this->AuditFees;
	}
	/**
	 * Set LegalFees
	 * @param double LegalFees
	 * @return double
	 */
	public function setLegalFees($_LegalFees)
	{
		return ($this->LegalFees = $_LegalFees);
	}
	/**
	 * Get LegalFees
	 * @return double
	 */
	public function getLegalFees()
	{
		return $this->LegalFees;
	}
	/**
	 * Set MarketingDistributionPayments
	 * @param double MarketingDistributionPayments
	 * @return double
	 */
	public function setMarketingDistributionPayments($_MarketingDistributionPayments)
	{
		return ($this->MarketingDistributionPayments = $_MarketingDistributionPayments);
	}
	/**
	 * Get MarketingDistributionPayments
	 * @return double
	 */
	public function getMarketingDistributionPayments()
	{
		return $this->MarketingDistributionPayments;
	}
	/**
	 * Set AmortizationOfOrganizationExpenses
	 * @param double AmortizationOfOrganizationExpenses
	 * @return double
	 */
	public function setAmortizationOfOrganizationExpenses($_AmortizationOfOrganizationExpenses)
	{
		return ($this->AmortizationOfOrganizationExpenses = $_AmortizationOfOrganizationExpenses);
	}
	/**
	 * Get AmortizationOfOrganizationExpenses
	 * @return double
	 */
	public function getAmortizationOfOrganizationExpenses()
	{
		return $this->AmortizationOfOrganizationExpenses;
	}
	/**
	 * Set ShareholderMeetingExpenses
	 * @param double ShareholderMeetingExpenses
	 * @return double
	 */
	public function setShareholderMeetingExpenses($_ShareholderMeetingExpenses)
	{
		return ($this->ShareholderMeetingExpenses = $_ShareholderMeetingExpenses);
	}
	/**
	 * Get ShareholderMeetingExpenses
	 * @return double
	 */
	public function getShareholderMeetingExpenses()
	{
		return $this->ShareholderMeetingExpenses;
	}
	/**
	 * Set OtherExpenses
	 * @param double OtherExpenses
	 * @return double
	 */
	public function setOtherExpenses($_OtherExpenses)
	{
		return ($this->OtherExpenses = $_OtherExpenses);
	}
	/**
	 * Get OtherExpenses
	 * @return double
	 */
	public function getOtherExpenses()
	{
		return $this->OtherExpenses;
	}
	/**
	 * Set TotalExpenses
	 * @param double TotalExpenses
	 * @return double
	 */
	public function setTotalExpenses($_TotalExpenses)
	{
		return ($this->TotalExpenses = $_TotalExpenses);
	}
	/**
	 * Get TotalExpenses
	 * @return double
	 */
	public function getTotalExpenses()
	{
		return $this->TotalExpenses;
	}
	/**
	 * Set ExpenseReimbursements
	 * @param double ExpenseReimbursements
	 * @return double
	 */
	public function setExpenseReimbursements($_ExpenseReimbursements)
	{
		return ($this->ExpenseReimbursements = $_ExpenseReimbursements);
	}
	/**
	 * Get ExpenseReimbursements
	 * @return double
	 */
	public function getExpenseReimbursements()
	{
		return $this->ExpenseReimbursements;
	}
	/**
	 * Set NetInvestmentIncome
	 * @param double NetInvestmentIncome
	 * @return double
	 */
	public function setNetInvestmentIncome($_NetInvestmentIncome)
	{
		return ($this->NetInvestmentIncome = $_NetInvestmentIncome);
	}
	/**
	 * Get NetInvestmentIncome
	 * @return double
	 */
	public function getNetInvestmentIncome()
	{
		return $this->NetInvestmentIncome;
	}
	/**
	 * Set RealizedCapitalGains
	 * @param double RealizedCapitalGains
	 * @return double
	 */
	public function setRealizedCapitalGains($_RealizedCapitalGains)
	{
		return ($this->RealizedCapitalGains = $_RealizedCapitalGains);
	}
	/**
	 * Get RealizedCapitalGains
	 * @return double
	 */
	public function getRealizedCapitalGains()
	{
		return $this->RealizedCapitalGains;
	}
	/**
	 * Set RealizedCapitalLosses
	 * @param double RealizedCapitalLosses
	 * @return double
	 */
	public function setRealizedCapitalLosses($_RealizedCapitalLosses)
	{
		return ($this->RealizedCapitalLosses = $_RealizedCapitalLosses);
	}
	/**
	 * Get RealizedCapitalLosses
	 * @return double
	 */
	public function getRealizedCapitalLosses()
	{
		return $this->RealizedCapitalLosses;
	}
	/**
	 * Set NetUnrealizedAppreciationForPeriod
	 * @param double NetUnrealizedAppreciationForPeriod
	 * @return double
	 */
	public function setNetUnrealizedAppreciationForPeriod($_NetUnrealizedAppreciationForPeriod)
	{
		return ($this->NetUnrealizedAppreciationForPeriod = $_NetUnrealizedAppreciationForPeriod);
	}
	/**
	 * Get NetUnrealizedAppreciationForPeriod
	 * @return double
	 */
	public function getNetUnrealizedAppreciationForPeriod()
	{
		return $this->NetUnrealizedAppreciationForPeriod;
	}
	/**
	 * Set NetUnrealizedDepreciationForPeriod
	 * @param double NetUnrealizedDepreciationForPeriod
	 * @return double
	 */
	public function setNetUnrealizedDepreciationForPeriod($_NetUnrealizedDepreciationForPeriod)
	{
		return ($this->NetUnrealizedDepreciationForPeriod = $_NetUnrealizedDepreciationForPeriod);
	}
	/**
	 * Get NetUnrealizedDepreciationForPeriod
	 * @return double
	 */
	public function getNetUnrealizedDepreciationForPeriod()
	{
		return $this->NetUnrealizedDepreciationForPeriod;
	}
	/**
	 * Set TotalIncomeDividendsForWhichrecordDatePassed
	 * @param double TotalIncomeDividendsForWhichrecordDatePassed
	 * @return double
	 */
	public function setTotalIncomeDividendsForWhichrecordDatePassed($_TotalIncomeDividendsForWhichrecordDatePassed)
	{
		return ($this->TotalIncomeDividendsForWhichrecordDatePassed = $_TotalIncomeDividendsForWhichrecordDatePassed);
	}
	/**
	 * Get TotalIncomeDividendsForWhichrecordDatePassed
	 * @return double
	 */
	public function getTotalIncomeDividendsForWhichrecordDatePassed()
	{
		return $this->TotalIncomeDividendsForWhichrecordDatePassed;
	}
	/**
	 * Set SecondClassOpenEndCompanySharesDividends
	 * @param double SecondClassOpenEndCompanySharesDividends
	 * @return double
	 */
	public function setSecondClassOpenEndCompanySharesDividends($_SecondClassOpenEndCompanySharesDividends)
	{
		return ($this->SecondClassOpenEndCompanySharesDividends = $_SecondClassOpenEndCompanySharesDividends);
	}
	/**
	 * Get SecondClassOpenEndCompanySharesDividends
	 * @return double
	 */
	public function getSecondClassOpenEndCompanySharesDividends()
	{
		return $this->SecondClassOpenEndCompanySharesDividends;
	}
	/**
	 * Set TotalCapitalGainDistributions
	 * @param double TotalCapitalGainDistributions
	 * @return double
	 */
	public function setTotalCapitalGainDistributions($_TotalCapitalGainDistributions)
	{
		return ($this->TotalCapitalGainDistributions = $_TotalCapitalGainDistributions);
	}
	/**
	 * Get TotalCapitalGainDistributions
	 * @return double
	 */
	public function getTotalCapitalGainDistributions()
	{
		return $this->TotalCapitalGainDistributions;
	}
	/**
	 * Set DividendPaidFromNetInvestmentIncome
	 * @param double DividendPaidFromNetInvestmentIncome
	 * @return double
	 */
	public function setDividendPaidFromNetInvestmentIncome($_DividendPaidFromNetInvestmentIncome)
	{
		return ($this->DividendPaidFromNetInvestmentIncome = $_DividendPaidFromNetInvestmentIncome);
	}
	/**
	 * Get DividendPaidFromNetInvestmentIncome
	 * @return double
	 */
	public function getDividendPaidFromNetInvestmentIncome()
	{
		return $this->DividendPaidFromNetInvestmentIncome;
	}
	/**
	 * Set DividendPaidForSecondClassOpenEndCompanyShares
	 * @param double DividendPaidForSecondClassOpenEndCompanyShares
	 * @return double
	 */
	public function setDividendPaidForSecondClassOpenEndCompanyShares($_DividendPaidForSecondClassOpenEndCompanyShares)
	{
		return ($this->DividendPaidForSecondClassOpenEndCompanyShares = $_DividendPaidForSecondClassOpenEndCompanyShares);
	}
	/**
	 * Get DividendPaidForSecondClassOpenEndCompanyShares
	 * @return double
	 */
	public function getDividendPaidForSecondClassOpenEndCompanyShares()
	{
		return $this->DividendPaidForSecondClassOpenEndCompanyShares;
	}
	/**
	 * Set DistributionsOfCapitalGains
	 * @param double DistributionsOfCapitalGains
	 * @return double
	 */
	public function setDistributionsOfCapitalGains($_DistributionsOfCapitalGains)
	{
		return ($this->DistributionsOfCapitalGains = $_DistributionsOfCapitalGains);
	}
	/**
	 * Get DistributionsOfCapitalGains
	 * @return double
	 */
	public function getDistributionsOfCapitalGains()
	{
		return $this->DistributionsOfCapitalGains;
	}
	/**
	 * Set OtherDistributions
	 * @param double OtherDistributions
	 * @return double
	 */
	public function setOtherDistributions($_OtherDistributions)
	{
		return ($this->OtherDistributions = $_OtherDistributions);
	}
	/**
	 * Get OtherDistributions
	 * @return double
	 */
	public function getOtherDistributions()
	{
		return $this->OtherDistributions;
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