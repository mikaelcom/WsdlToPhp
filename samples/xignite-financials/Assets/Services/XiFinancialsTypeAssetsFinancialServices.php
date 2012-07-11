<?php
/**
 * Class file for XiFinancialsTypeAssetsFinancialServices
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeAssetsFinancialServices
 * @date 08/07/2012
 */
class XiFinancialsTypeAssetsFinancialServices extends XiFinancialsWsdlClass
{
	/**
	 * The CashAndDueFromBanks
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashAndDueFromBanks;
	/**
	 * The RestrictedCash
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RestrictedCash;
	/**
	 * The FederalFundsSoldOrSecuritiesPurchased
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FederalFundsSoldOrSecuritiesPurchased;
	/**
	 * The InterestBearingDepositsAtOtherBanks
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestBearingDepositsAtOtherBanks;
	/**
	 * The NetInvestmentSecurities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetInvestmentSecurities;
	/**
	 * The Loans
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Loans;
	/**
	 * The UnearnedPremiumsAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $UnearnedPremiumsAssets;
	/**
	 * The AllowanceForLoansAndLeaseLosses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AllowanceForLoansAndLeaseLosses;
	/**
	 * The NetLoans
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetLoans;
	/**
	 * The PremisesAndEquipment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PremisesAndEquipment;
	/**
	 * The DueFromCustomersAcceptance
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DueFromCustomersAcceptance;
	/**
	 * The TradingAccountSecurities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TradingAccountSecurities;
	/**
	 * The OtherReceivables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherReceivables;
	/**
	 * The AccruedInterest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedInterest;
	/**
	 * The DeferredAcquisitionCost
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DeferredAcquisitionCost;
	/**
	 * The AccruedInvestmentIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedInvestmentIncome;
	/**
	 * The SeparateAccountBusiness
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SeparateAccountBusiness;
	/**
	 * The TimeDepositsPlaced
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TimeDepositsPlaced;
	/**
	 * The IntangibleAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IntangibleAssets;
	/**
	 * The OtherAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherAssets;
	/**
	 * The TotalAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalAssets;
	/**
	 * Constructor
	 * @param double CashAndDueFromBanks
	 * @param double RestrictedCash
	 * @param double FederalFundsSoldOrSecuritiesPurchased
	 * @param double InterestBearingDepositsAtOtherBanks
	 * @param double NetInvestmentSecurities
	 * @param double Loans
	 * @param double UnearnedPremiumsAssets
	 * @param double AllowanceForLoansAndLeaseLosses
	 * @param double NetLoans
	 * @param double PremisesAndEquipment
	 * @param double DueFromCustomersAcceptance
	 * @param double TradingAccountSecurities
	 * @param double OtherReceivables
	 * @param double AccruedInterest
	 * @param double DeferredAcquisitionCost
	 * @param double AccruedInvestmentIncome
	 * @param double SeparateAccountBusiness
	 * @param double TimeDepositsPlaced
	 * @param double IntangibleAssets
	 * @param double OtherAssets
	 * @param double TotalAssets
	 * @return XiFinancialsTypeAssetsFinancialServices
	 */
	public function __construct($_CashAndDueFromBanks,$_RestrictedCash,$_FederalFundsSoldOrSecuritiesPurchased,$_InterestBearingDepositsAtOtherBanks,$_NetInvestmentSecurities,$_Loans,$_UnearnedPremiumsAssets,$_AllowanceForLoansAndLeaseLosses,$_NetLoans,$_PremisesAndEquipment,$_DueFromCustomersAcceptance,$_TradingAccountSecurities,$_OtherReceivables,$_AccruedInterest,$_DeferredAcquisitionCost,$_AccruedInvestmentIncome,$_SeparateAccountBusiness,$_TimeDepositsPlaced,$_IntangibleAssets,$_OtherAssets,$_TotalAssets)
	{
		parent::__construct(array('CashAndDueFromBanks'=>$_CashAndDueFromBanks,'RestrictedCash'=>$_RestrictedCash,'FederalFundsSoldOrSecuritiesPurchased'=>$_FederalFundsSoldOrSecuritiesPurchased,'InterestBearingDepositsAtOtherBanks'=>$_InterestBearingDepositsAtOtherBanks,'NetInvestmentSecurities'=>$_NetInvestmentSecurities,'Loans'=>$_Loans,'UnearnedPremiumsAssets'=>$_UnearnedPremiumsAssets,'AllowanceForLoansAndLeaseLosses'=>$_AllowanceForLoansAndLeaseLosses,'NetLoans'=>$_NetLoans,'PremisesAndEquipment'=>$_PremisesAndEquipment,'DueFromCustomersAcceptance'=>$_DueFromCustomersAcceptance,'TradingAccountSecurities'=>$_TradingAccountSecurities,'OtherReceivables'=>$_OtherReceivables,'AccruedInterest'=>$_AccruedInterest,'DeferredAcquisitionCost'=>$_DeferredAcquisitionCost,'AccruedInvestmentIncome'=>$_AccruedInvestmentIncome,'SeparateAccountBusiness'=>$_SeparateAccountBusiness,'TimeDepositsPlaced'=>$_TimeDepositsPlaced,'IntangibleAssets'=>$_IntangibleAssets,'OtherAssets'=>$_OtherAssets,'TotalAssets'=>$_TotalAssets));
	}
	/**
	 * Set CashAndDueFromBanks
	 * @param double CashAndDueFromBanks
	 * @return double
	 */
	public function setCashAndDueFromBanks($_CashAndDueFromBanks)
	{
		return ($this->CashAndDueFromBanks = $_CashAndDueFromBanks);
	}
	/**
	 * Get CashAndDueFromBanks
	 * @return double
	 */
	public function getCashAndDueFromBanks()
	{
		return $this->CashAndDueFromBanks;
	}
	/**
	 * Set RestrictedCash
	 * @param double RestrictedCash
	 * @return double
	 */
	public function setRestrictedCash($_RestrictedCash)
	{
		return ($this->RestrictedCash = $_RestrictedCash);
	}
	/**
	 * Get RestrictedCash
	 * @return double
	 */
	public function getRestrictedCash()
	{
		return $this->RestrictedCash;
	}
	/**
	 * Set FederalFundsSoldOrSecuritiesPurchased
	 * @param double FederalFundsSoldOrSecuritiesPurchased
	 * @return double
	 */
	public function setFederalFundsSoldOrSecuritiesPurchased($_FederalFundsSoldOrSecuritiesPurchased)
	{
		return ($this->FederalFundsSoldOrSecuritiesPurchased = $_FederalFundsSoldOrSecuritiesPurchased);
	}
	/**
	 * Get FederalFundsSoldOrSecuritiesPurchased
	 * @return double
	 */
	public function getFederalFundsSoldOrSecuritiesPurchased()
	{
		return $this->FederalFundsSoldOrSecuritiesPurchased;
	}
	/**
	 * Set InterestBearingDepositsAtOtherBanks
	 * @param double InterestBearingDepositsAtOtherBanks
	 * @return double
	 */
	public function setInterestBearingDepositsAtOtherBanks($_InterestBearingDepositsAtOtherBanks)
	{
		return ($this->InterestBearingDepositsAtOtherBanks = $_InterestBearingDepositsAtOtherBanks);
	}
	/**
	 * Get InterestBearingDepositsAtOtherBanks
	 * @return double
	 */
	public function getInterestBearingDepositsAtOtherBanks()
	{
		return $this->InterestBearingDepositsAtOtherBanks;
	}
	/**
	 * Set NetInvestmentSecurities
	 * @param double NetInvestmentSecurities
	 * @return double
	 */
	public function setNetInvestmentSecurities($_NetInvestmentSecurities)
	{
		return ($this->NetInvestmentSecurities = $_NetInvestmentSecurities);
	}
	/**
	 * Get NetInvestmentSecurities
	 * @return double
	 */
	public function getNetInvestmentSecurities()
	{
		return $this->NetInvestmentSecurities;
	}
	/**
	 * Set Loans
	 * @param double Loans
	 * @return double
	 */
	public function setLoans($_Loans)
	{
		return ($this->Loans = $_Loans);
	}
	/**
	 * Get Loans
	 * @return double
	 */
	public function getLoans()
	{
		return $this->Loans;
	}
	/**
	 * Set UnearnedPremiumsAssets
	 * @param double UnearnedPremiumsAssets
	 * @return double
	 */
	public function setUnearnedPremiumsAssets($_UnearnedPremiumsAssets)
	{
		return ($this->UnearnedPremiumsAssets = $_UnearnedPremiumsAssets);
	}
	/**
	 * Get UnearnedPremiumsAssets
	 * @return double
	 */
	public function getUnearnedPremiumsAssets()
	{
		return $this->UnearnedPremiumsAssets;
	}
	/**
	 * Set AllowanceForLoansAndLeaseLosses
	 * @param double AllowanceForLoansAndLeaseLosses
	 * @return double
	 */
	public function setAllowanceForLoansAndLeaseLosses($_AllowanceForLoansAndLeaseLosses)
	{
		return ($this->AllowanceForLoansAndLeaseLosses = $_AllowanceForLoansAndLeaseLosses);
	}
	/**
	 * Get AllowanceForLoansAndLeaseLosses
	 * @return double
	 */
	public function getAllowanceForLoansAndLeaseLosses()
	{
		return $this->AllowanceForLoansAndLeaseLosses;
	}
	/**
	 * Set NetLoans
	 * @param double NetLoans
	 * @return double
	 */
	public function setNetLoans($_NetLoans)
	{
		return ($this->NetLoans = $_NetLoans);
	}
	/**
	 * Get NetLoans
	 * @return double
	 */
	public function getNetLoans()
	{
		return $this->NetLoans;
	}
	/**
	 * Set PremisesAndEquipment
	 * @param double PremisesAndEquipment
	 * @return double
	 */
	public function setPremisesAndEquipment($_PremisesAndEquipment)
	{
		return ($this->PremisesAndEquipment = $_PremisesAndEquipment);
	}
	/**
	 * Get PremisesAndEquipment
	 * @return double
	 */
	public function getPremisesAndEquipment()
	{
		return $this->PremisesAndEquipment;
	}
	/**
	 * Set DueFromCustomersAcceptance
	 * @param double DueFromCustomersAcceptance
	 * @return double
	 */
	public function setDueFromCustomersAcceptance($_DueFromCustomersAcceptance)
	{
		return ($this->DueFromCustomersAcceptance = $_DueFromCustomersAcceptance);
	}
	/**
	 * Get DueFromCustomersAcceptance
	 * @return double
	 */
	public function getDueFromCustomersAcceptance()
	{
		return $this->DueFromCustomersAcceptance;
	}
	/**
	 * Set TradingAccountSecurities
	 * @param double TradingAccountSecurities
	 * @return double
	 */
	public function setTradingAccountSecurities($_TradingAccountSecurities)
	{
		return ($this->TradingAccountSecurities = $_TradingAccountSecurities);
	}
	/**
	 * Get TradingAccountSecurities
	 * @return double
	 */
	public function getTradingAccountSecurities()
	{
		return $this->TradingAccountSecurities;
	}
	/**
	 * Set OtherReceivables
	 * @param double OtherReceivables
	 * @return double
	 */
	public function setOtherReceivables($_OtherReceivables)
	{
		return ($this->OtherReceivables = $_OtherReceivables);
	}
	/**
	 * Get OtherReceivables
	 * @return double
	 */
	public function getOtherReceivables()
	{
		return $this->OtherReceivables;
	}
	/**
	 * Set AccruedInterest
	 * @param double AccruedInterest
	 * @return double
	 */
	public function setAccruedInterest($_AccruedInterest)
	{
		return ($this->AccruedInterest = $_AccruedInterest);
	}
	/**
	 * Get AccruedInterest
	 * @return double
	 */
	public function getAccruedInterest()
	{
		return $this->AccruedInterest;
	}
	/**
	 * Set DeferredAcquisitionCost
	 * @param double DeferredAcquisitionCost
	 * @return double
	 */
	public function setDeferredAcquisitionCost($_DeferredAcquisitionCost)
	{
		return ($this->DeferredAcquisitionCost = $_DeferredAcquisitionCost);
	}
	/**
	 * Get DeferredAcquisitionCost
	 * @return double
	 */
	public function getDeferredAcquisitionCost()
	{
		return $this->DeferredAcquisitionCost;
	}
	/**
	 * Set AccruedInvestmentIncome
	 * @param double AccruedInvestmentIncome
	 * @return double
	 */
	public function setAccruedInvestmentIncome($_AccruedInvestmentIncome)
	{
		return ($this->AccruedInvestmentIncome = $_AccruedInvestmentIncome);
	}
	/**
	 * Get AccruedInvestmentIncome
	 * @return double
	 */
	public function getAccruedInvestmentIncome()
	{
		return $this->AccruedInvestmentIncome;
	}
	/**
	 * Set SeparateAccountBusiness
	 * @param double SeparateAccountBusiness
	 * @return double
	 */
	public function setSeparateAccountBusiness($_SeparateAccountBusiness)
	{
		return ($this->SeparateAccountBusiness = $_SeparateAccountBusiness);
	}
	/**
	 * Get SeparateAccountBusiness
	 * @return double
	 */
	public function getSeparateAccountBusiness()
	{
		return $this->SeparateAccountBusiness;
	}
	/**
	 * Set TimeDepositsPlaced
	 * @param double TimeDepositsPlaced
	 * @return double
	 */
	public function setTimeDepositsPlaced($_TimeDepositsPlaced)
	{
		return ($this->TimeDepositsPlaced = $_TimeDepositsPlaced);
	}
	/**
	 * Get TimeDepositsPlaced
	 * @return double
	 */
	public function getTimeDepositsPlaced()
	{
		return $this->TimeDepositsPlaced;
	}
	/**
	 * Set IntangibleAssets
	 * @param double IntangibleAssets
	 * @return double
	 */
	public function setIntangibleAssets($_IntangibleAssets)
	{
		return ($this->IntangibleAssets = $_IntangibleAssets);
	}
	/**
	 * Get IntangibleAssets
	 * @return double
	 */
	public function getIntangibleAssets()
	{
		return $this->IntangibleAssets;
	}
	/**
	 * Set OtherAssets
	 * @param double OtherAssets
	 * @return double
	 */
	public function setOtherAssets($_OtherAssets)
	{
		return ($this->OtherAssets = $_OtherAssets);
	}
	/**
	 * Get OtherAssets
	 * @return double
	 */
	public function getOtherAssets()
	{
		return $this->OtherAssets;
	}
	/**
	 * Set TotalAssets
	 * @param double TotalAssets
	 * @return double
	 */
	public function setTotalAssets($_TotalAssets)
	{
		return ($this->TotalAssets = $_TotalAssets);
	}
	/**
	 * Get TotalAssets
	 * @return double
	 */
	public function getTotalAssets()
	{
		return $this->TotalAssets;
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