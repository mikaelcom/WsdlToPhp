<?php
/**
 * Class file for XiFinancialsTypeLiabilitiesFinancialServices
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeLiabilitiesFinancialServices
 * @date 08/07/2012
 */
class XiFinancialsTypeLiabilitiesFinancialServices extends XiFinancialsWsdlClass
{
	/**
	 * The NonInterestBearingDeposits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NonInterestBearingDeposits;
	/**
	 * The InterestBearingDeposits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestBearingDeposits;
	/**
	 * The ShortTermDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ShortTermDebt;
	/**
	 * The OtherLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherLiabilities;
	/**
	 * The BankersAcceptanceOutstanding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BankersAcceptanceOutstanding;
	/**
	 * The FederalsFundsPurchasedSecuritiesSold
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FederalsFundsPurchasedSecuritiesSold;
	/**
	 * The AccruedTaxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedTaxes;
	/**
	 * The AccruedInterestPayables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedInterestPayables;
	/**
	 * The OtherPayables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherPayables;
	/**
	 * The CapitalLeaseObligations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CapitalLeaseObligations;
	/**
	 * The ClaimsAndClaimExpense
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ClaimsAndClaimExpense;
	/**
	 * The FuturePolicyBenefits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FuturePolicyBenefits;
	/**
	 * The UnearnedPremiumsLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $UnearnedPremiumsLiabilities;
	/**
	 * The PolicyHolderFunds
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PolicyHolderFunds;
	/**
	 * The ParticipatingPolicyholderEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ParticipatingPolicyholderEquity;
	/**
	 * The SeparateAccountsBusiness
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SeparateAccountsBusiness;
	/**
	 * The MinorityInterest
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MinorityInterest;
	/**
	 * The LongTermDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermDebt;
	/**
	 * The ForeignCurrencyAdjustments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ForeignCurrencyAdjustments;
	/**
	 * The NetUnrealizedLossGainOnInvestments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetUnrealizedLossGainOnInvestments;
	/**
	 * The NetUnrealizedLossGainOnForeignCurrencies
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetUnrealizedLossGainOnForeignCurrencies;
	/**
	 * The NetOtherUnearnedLossesGains
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetOtherUnearnedLossesGains;
	/**
	 * The TotalLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalLiabilities;
	/**
	 * Constructor
	 * @param double NonInterestBearingDeposits
	 * @param double InterestBearingDeposits
	 * @param double ShortTermDebt
	 * @param double OtherLiabilities
	 * @param double BankersAcceptanceOutstanding
	 * @param double FederalsFundsPurchasedSecuritiesSold
	 * @param double AccruedTaxes
	 * @param double AccruedInterestPayables
	 * @param double OtherPayables
	 * @param double CapitalLeaseObligations
	 * @param double ClaimsAndClaimExpense
	 * @param double FuturePolicyBenefits
	 * @param double UnearnedPremiumsLiabilities
	 * @param double PolicyHolderFunds
	 * @param double ParticipatingPolicyholderEquity
	 * @param double SeparateAccountsBusiness
	 * @param double MinorityInterest
	 * @param double LongTermDebt
	 * @param double ForeignCurrencyAdjustments
	 * @param double NetUnrealizedLossGainOnInvestments
	 * @param double NetUnrealizedLossGainOnForeignCurrencies
	 * @param double NetOtherUnearnedLossesGains
	 * @param double TotalLiabilities
	 * @return XiFinancialsTypeLiabilitiesFinancialServices
	 */
	public function __construct($_NonInterestBearingDeposits,$_InterestBearingDeposits,$_ShortTermDebt,$_OtherLiabilities,$_BankersAcceptanceOutstanding,$_FederalsFundsPurchasedSecuritiesSold,$_AccruedTaxes,$_AccruedInterestPayables,$_OtherPayables,$_CapitalLeaseObligations,$_ClaimsAndClaimExpense,$_FuturePolicyBenefits,$_UnearnedPremiumsLiabilities,$_PolicyHolderFunds,$_ParticipatingPolicyholderEquity,$_SeparateAccountsBusiness,$_MinorityInterest,$_LongTermDebt,$_ForeignCurrencyAdjustments,$_NetUnrealizedLossGainOnInvestments,$_NetUnrealizedLossGainOnForeignCurrencies,$_NetOtherUnearnedLossesGains,$_TotalLiabilities)
	{
		parent::__construct(array('NonInterestBearingDeposits'=>$_NonInterestBearingDeposits,'InterestBearingDeposits'=>$_InterestBearingDeposits,'ShortTermDebt'=>$_ShortTermDebt,'OtherLiabilities'=>$_OtherLiabilities,'BankersAcceptanceOutstanding'=>$_BankersAcceptanceOutstanding,'FederalsFundsPurchasedSecuritiesSold'=>$_FederalsFundsPurchasedSecuritiesSold,'AccruedTaxes'=>$_AccruedTaxes,'AccruedInterestPayables'=>$_AccruedInterestPayables,'OtherPayables'=>$_OtherPayables,'CapitalLeaseObligations'=>$_CapitalLeaseObligations,'ClaimsAndClaimExpense'=>$_ClaimsAndClaimExpense,'FuturePolicyBenefits'=>$_FuturePolicyBenefits,'UnearnedPremiumsLiabilities'=>$_UnearnedPremiumsLiabilities,'PolicyHolderFunds'=>$_PolicyHolderFunds,'ParticipatingPolicyholderEquity'=>$_ParticipatingPolicyholderEquity,'SeparateAccountsBusiness'=>$_SeparateAccountsBusiness,'MinorityInterest'=>$_MinorityInterest,'LongTermDebt'=>$_LongTermDebt,'ForeignCurrencyAdjustments'=>$_ForeignCurrencyAdjustments,'NetUnrealizedLossGainOnInvestments'=>$_NetUnrealizedLossGainOnInvestments,'NetUnrealizedLossGainOnForeignCurrencies'=>$_NetUnrealizedLossGainOnForeignCurrencies,'NetOtherUnearnedLossesGains'=>$_NetOtherUnearnedLossesGains,'TotalLiabilities'=>$_TotalLiabilities));
	}
	/**
	 * Set NonInterestBearingDeposits
	 * @param double NonInterestBearingDeposits
	 * @return double
	 */
	public function setNonInterestBearingDeposits($_NonInterestBearingDeposits)
	{
		return ($this->NonInterestBearingDeposits = $_NonInterestBearingDeposits);
	}
	/**
	 * Get NonInterestBearingDeposits
	 * @return double
	 */
	public function getNonInterestBearingDeposits()
	{
		return $this->NonInterestBearingDeposits;
	}
	/**
	 * Set InterestBearingDeposits
	 * @param double InterestBearingDeposits
	 * @return double
	 */
	public function setInterestBearingDeposits($_InterestBearingDeposits)
	{
		return ($this->InterestBearingDeposits = $_InterestBearingDeposits);
	}
	/**
	 * Get InterestBearingDeposits
	 * @return double
	 */
	public function getInterestBearingDeposits()
	{
		return $this->InterestBearingDeposits;
	}
	/**
	 * Set ShortTermDebt
	 * @param double ShortTermDebt
	 * @return double
	 */
	public function setShortTermDebt($_ShortTermDebt)
	{
		return ($this->ShortTermDebt = $_ShortTermDebt);
	}
	/**
	 * Get ShortTermDebt
	 * @return double
	 */
	public function getShortTermDebt()
	{
		return $this->ShortTermDebt;
	}
	/**
	 * Set OtherLiabilities
	 * @param double OtherLiabilities
	 * @return double
	 */
	public function setOtherLiabilities($_OtherLiabilities)
	{
		return ($this->OtherLiabilities = $_OtherLiabilities);
	}
	/**
	 * Get OtherLiabilities
	 * @return double
	 */
	public function getOtherLiabilities()
	{
		return $this->OtherLiabilities;
	}
	/**
	 * Set BankersAcceptanceOutstanding
	 * @param double BankersAcceptanceOutstanding
	 * @return double
	 */
	public function setBankersAcceptanceOutstanding($_BankersAcceptanceOutstanding)
	{
		return ($this->BankersAcceptanceOutstanding = $_BankersAcceptanceOutstanding);
	}
	/**
	 * Get BankersAcceptanceOutstanding
	 * @return double
	 */
	public function getBankersAcceptanceOutstanding()
	{
		return $this->BankersAcceptanceOutstanding;
	}
	/**
	 * Set FederalsFundsPurchasedSecuritiesSold
	 * @param double FederalsFundsPurchasedSecuritiesSold
	 * @return double
	 */
	public function setFederalsFundsPurchasedSecuritiesSold($_FederalsFundsPurchasedSecuritiesSold)
	{
		return ($this->FederalsFundsPurchasedSecuritiesSold = $_FederalsFundsPurchasedSecuritiesSold);
	}
	/**
	 * Get FederalsFundsPurchasedSecuritiesSold
	 * @return double
	 */
	public function getFederalsFundsPurchasedSecuritiesSold()
	{
		return $this->FederalsFundsPurchasedSecuritiesSold;
	}
	/**
	 * Set AccruedTaxes
	 * @param double AccruedTaxes
	 * @return double
	 */
	public function setAccruedTaxes($_AccruedTaxes)
	{
		return ($this->AccruedTaxes = $_AccruedTaxes);
	}
	/**
	 * Get AccruedTaxes
	 * @return double
	 */
	public function getAccruedTaxes()
	{
		return $this->AccruedTaxes;
	}
	/**
	 * Set AccruedInterestPayables
	 * @param double AccruedInterestPayables
	 * @return double
	 */
	public function setAccruedInterestPayables($_AccruedInterestPayables)
	{
		return ($this->AccruedInterestPayables = $_AccruedInterestPayables);
	}
	/**
	 * Get AccruedInterestPayables
	 * @return double
	 */
	public function getAccruedInterestPayables()
	{
		return $this->AccruedInterestPayables;
	}
	/**
	 * Set OtherPayables
	 * @param double OtherPayables
	 * @return double
	 */
	public function setOtherPayables($_OtherPayables)
	{
		return ($this->OtherPayables = $_OtherPayables);
	}
	/**
	 * Get OtherPayables
	 * @return double
	 */
	public function getOtherPayables()
	{
		return $this->OtherPayables;
	}
	/**
	 * Set CapitalLeaseObligations
	 * @param double CapitalLeaseObligations
	 * @return double
	 */
	public function setCapitalLeaseObligations($_CapitalLeaseObligations)
	{
		return ($this->CapitalLeaseObligations = $_CapitalLeaseObligations);
	}
	/**
	 * Get CapitalLeaseObligations
	 * @return double
	 */
	public function getCapitalLeaseObligations()
	{
		return $this->CapitalLeaseObligations;
	}
	/**
	 * Set ClaimsAndClaimExpense
	 * @param double ClaimsAndClaimExpense
	 * @return double
	 */
	public function setClaimsAndClaimExpense($_ClaimsAndClaimExpense)
	{
		return ($this->ClaimsAndClaimExpense = $_ClaimsAndClaimExpense);
	}
	/**
	 * Get ClaimsAndClaimExpense
	 * @return double
	 */
	public function getClaimsAndClaimExpense()
	{
		return $this->ClaimsAndClaimExpense;
	}
	/**
	 * Set FuturePolicyBenefits
	 * @param double FuturePolicyBenefits
	 * @return double
	 */
	public function setFuturePolicyBenefits($_FuturePolicyBenefits)
	{
		return ($this->FuturePolicyBenefits = $_FuturePolicyBenefits);
	}
	/**
	 * Get FuturePolicyBenefits
	 * @return double
	 */
	public function getFuturePolicyBenefits()
	{
		return $this->FuturePolicyBenefits;
	}
	/**
	 * Set UnearnedPremiumsLiabilities
	 * @param double UnearnedPremiumsLiabilities
	 * @return double
	 */
	public function setUnearnedPremiumsLiabilities($_UnearnedPremiumsLiabilities)
	{
		return ($this->UnearnedPremiumsLiabilities = $_UnearnedPremiumsLiabilities);
	}
	/**
	 * Get UnearnedPremiumsLiabilities
	 * @return double
	 */
	public function getUnearnedPremiumsLiabilities()
	{
		return $this->UnearnedPremiumsLiabilities;
	}
	/**
	 * Set PolicyHolderFunds
	 * @param double PolicyHolderFunds
	 * @return double
	 */
	public function setPolicyHolderFunds($_PolicyHolderFunds)
	{
		return ($this->PolicyHolderFunds = $_PolicyHolderFunds);
	}
	/**
	 * Get PolicyHolderFunds
	 * @return double
	 */
	public function getPolicyHolderFunds()
	{
		return $this->PolicyHolderFunds;
	}
	/**
	 * Set ParticipatingPolicyholderEquity
	 * @param double ParticipatingPolicyholderEquity
	 * @return double
	 */
	public function setParticipatingPolicyholderEquity($_ParticipatingPolicyholderEquity)
	{
		return ($this->ParticipatingPolicyholderEquity = $_ParticipatingPolicyholderEquity);
	}
	/**
	 * Get ParticipatingPolicyholderEquity
	 * @return double
	 */
	public function getParticipatingPolicyholderEquity()
	{
		return $this->ParticipatingPolicyholderEquity;
	}
	/**
	 * Set SeparateAccountsBusiness
	 * @param double SeparateAccountsBusiness
	 * @return double
	 */
	public function setSeparateAccountsBusiness($_SeparateAccountsBusiness)
	{
		return ($this->SeparateAccountsBusiness = $_SeparateAccountsBusiness);
	}
	/**
	 * Get SeparateAccountsBusiness
	 * @return double
	 */
	public function getSeparateAccountsBusiness()
	{
		return $this->SeparateAccountsBusiness;
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
	 * Set LongTermDebt
	 * @param double LongTermDebt
	 * @return double
	 */
	public function setLongTermDebt($_LongTermDebt)
	{
		return ($this->LongTermDebt = $_LongTermDebt);
	}
	/**
	 * Get LongTermDebt
	 * @return double
	 */
	public function getLongTermDebt()
	{
		return $this->LongTermDebt;
	}
	/**
	 * Set ForeignCurrencyAdjustments
	 * @param double ForeignCurrencyAdjustments
	 * @return double
	 */
	public function setForeignCurrencyAdjustments($_ForeignCurrencyAdjustments)
	{
		return ($this->ForeignCurrencyAdjustments = $_ForeignCurrencyAdjustments);
	}
	/**
	 * Get ForeignCurrencyAdjustments
	 * @return double
	 */
	public function getForeignCurrencyAdjustments()
	{
		return $this->ForeignCurrencyAdjustments;
	}
	/**
	 * Set NetUnrealizedLossGainOnInvestments
	 * @param double NetUnrealizedLossGainOnInvestments
	 * @return double
	 */
	public function setNetUnrealizedLossGainOnInvestments($_NetUnrealizedLossGainOnInvestments)
	{
		return ($this->NetUnrealizedLossGainOnInvestments = $_NetUnrealizedLossGainOnInvestments);
	}
	/**
	 * Get NetUnrealizedLossGainOnInvestments
	 * @return double
	 */
	public function getNetUnrealizedLossGainOnInvestments()
	{
		return $this->NetUnrealizedLossGainOnInvestments;
	}
	/**
	 * Set NetUnrealizedLossGainOnForeignCurrencies
	 * @param double NetUnrealizedLossGainOnForeignCurrencies
	 * @return double
	 */
	public function setNetUnrealizedLossGainOnForeignCurrencies($_NetUnrealizedLossGainOnForeignCurrencies)
	{
		return ($this->NetUnrealizedLossGainOnForeignCurrencies = $_NetUnrealizedLossGainOnForeignCurrencies);
	}
	/**
	 * Get NetUnrealizedLossGainOnForeignCurrencies
	 * @return double
	 */
	public function getNetUnrealizedLossGainOnForeignCurrencies()
	{
		return $this->NetUnrealizedLossGainOnForeignCurrencies;
	}
	/**
	 * Set NetOtherUnearnedLossesGains
	 * @param double NetOtherUnearnedLossesGains
	 * @return double
	 */
	public function setNetOtherUnearnedLossesGains($_NetOtherUnearnedLossesGains)
	{
		return ($this->NetOtherUnearnedLossesGains = $_NetOtherUnearnedLossesGains);
	}
	/**
	 * Get NetOtherUnearnedLossesGains
	 * @return double
	 */
	public function getNetOtherUnearnedLossesGains()
	{
		return $this->NetOtherUnearnedLossesGains;
	}
	/**
	 * Set TotalLiabilities
	 * @param double TotalLiabilities
	 * @return double
	 */
	public function setTotalLiabilities($_TotalLiabilities)
	{
		return ($this->TotalLiabilities = $_TotalLiabilities);
	}
	/**
	 * Get TotalLiabilities
	 * @return double
	 */
	public function getTotalLiabilities()
	{
		return $this->TotalLiabilities;
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