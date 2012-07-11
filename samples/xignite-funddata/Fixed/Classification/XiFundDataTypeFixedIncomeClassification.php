<?php
/**
 * Class file for XiFundDataTypeFixedIncomeClassification
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFixedIncomeClassification
 * @date 08/07/2012
 */
class XiFundDataTypeFixedIncomeClassification extends XiFundDataWsdlClass
{
	/**
	 * The Allocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFixedIncomeAllocation
	 */
	public $Allocation;
	/**
	 * The DollarWeightedPortfolioMaturityAsDays
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $DollarWeightedPortfolioMaturityAsDays;
	/**
	 * The DollarWeightedPortfolioMaturityAsYears
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DollarWeightedPortfolioMaturityAsYears;
	/**
	 * The PrincipalAndInterestPaymentGuaranteed
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PrincipalAndInterestPaymentGuaranteed;
	/**
	 * The IssuerDelinquent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IssuerDelinquent;
	/**
	 * The NAVDerivedFromGuarantees
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $NAVDerivedFromGuarantees;
	/**
	 * Constructor
	 * @param XiFundDataTypeFixedIncomeAllocation Allocation
	 * @param int DollarWeightedPortfolioMaturityAsDays
	 * @param double DollarWeightedPortfolioMaturityAsYears
	 * @param boolean PrincipalAndInterestPaymentGuaranteed
	 * @param boolean IssuerDelinquent
	 * @param boolean NAVDerivedFromGuarantees
	 * @return XiFundDataTypeFixedIncomeClassification
	 */
	public function __construct($_Allocation = null,$_DollarWeightedPortfolioMaturityAsDays,$_DollarWeightedPortfolioMaturityAsYears,$_PrincipalAndInterestPaymentGuaranteed,$_IssuerDelinquent,$_NAVDerivedFromGuarantees)
	{
		parent::__construct(array('Allocation'=>$_Allocation,'DollarWeightedPortfolioMaturityAsDays'=>$_DollarWeightedPortfolioMaturityAsDays,'DollarWeightedPortfolioMaturityAsYears'=>$_DollarWeightedPortfolioMaturityAsYears,'PrincipalAndInterestPaymentGuaranteed'=>$_PrincipalAndInterestPaymentGuaranteed,'IssuerDelinquent'=>$_IssuerDelinquent,'NAVDerivedFromGuarantees'=>$_NAVDerivedFromGuarantees));
	}
	/**
	 * Set Allocation
	 * @param FixedIncomeAllocation Allocation
	 * @return FixedIncomeAllocation
	 */
	public function setAllocation($_Allocation)
	{
		return ($this->Allocation = $_Allocation);
	}
	/**
	 * Get Allocation
	 * @return XiFundDataTypeFixedIncomeAllocation
	 */
	public function getAllocation()
	{
		return $this->Allocation;
	}
	/**
	 * Set DollarWeightedPortfolioMaturityAsDays
	 * @param int DollarWeightedPortfolioMaturityAsDays
	 * @return int
	 */
	public function setDollarWeightedPortfolioMaturityAsDays($_DollarWeightedPortfolioMaturityAsDays)
	{
		return ($this->DollarWeightedPortfolioMaturityAsDays = $_DollarWeightedPortfolioMaturityAsDays);
	}
	/**
	 * Get DollarWeightedPortfolioMaturityAsDays
	 * @return int
	 */
	public function getDollarWeightedPortfolioMaturityAsDays()
	{
		return $this->DollarWeightedPortfolioMaturityAsDays;
	}
	/**
	 * Set DollarWeightedPortfolioMaturityAsYears
	 * @param double DollarWeightedPortfolioMaturityAsYears
	 * @return double
	 */
	public function setDollarWeightedPortfolioMaturityAsYears($_DollarWeightedPortfolioMaturityAsYears)
	{
		return ($this->DollarWeightedPortfolioMaturityAsYears = $_DollarWeightedPortfolioMaturityAsYears);
	}
	/**
	 * Get DollarWeightedPortfolioMaturityAsYears
	 * @return double
	 */
	public function getDollarWeightedPortfolioMaturityAsYears()
	{
		return $this->DollarWeightedPortfolioMaturityAsYears;
	}
	/**
	 * Set PrincipalAndInterestPaymentGuaranteed
	 * @param boolean PrincipalAndInterestPaymentGuaranteed
	 * @return boolean
	 */
	public function setPrincipalAndInterestPaymentGuaranteed($_PrincipalAndInterestPaymentGuaranteed)
	{
		return ($this->PrincipalAndInterestPaymentGuaranteed = $_PrincipalAndInterestPaymentGuaranteed);
	}
	/**
	 * Get PrincipalAndInterestPaymentGuaranteed
	 * @return boolean
	 */
	public function getPrincipalAndInterestPaymentGuaranteed()
	{
		return $this->PrincipalAndInterestPaymentGuaranteed;
	}
	/**
	 * Set IssuerDelinquent
	 * @param boolean IssuerDelinquent
	 * @return boolean
	 */
	public function setIssuerDelinquent($_IssuerDelinquent)
	{
		return ($this->IssuerDelinquent = $_IssuerDelinquent);
	}
	/**
	 * Get IssuerDelinquent
	 * @return boolean
	 */
	public function getIssuerDelinquent()
	{
		return $this->IssuerDelinquent;
	}
	/**
	 * Set NAVDerivedFromGuarantees
	 * @param boolean NAVDerivedFromGuarantees
	 * @return boolean
	 */
	public function setNAVDerivedFromGuarantees($_NAVDerivedFromGuarantees)
	{
		return ($this->NAVDerivedFromGuarantees = $_NAVDerivedFromGuarantees);
	}
	/**
	 * Get NAVDerivedFromGuarantees
	 * @return boolean
	 */
	public function getNAVDerivedFromGuarantees()
	{
		return $this->NAVDerivedFromGuarantees;
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