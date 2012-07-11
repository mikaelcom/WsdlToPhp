<?php
/**
 * Class file for XiFundDataTypeReport
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeReport
 * @date 08/07/2012
 */
class XiFundDataTypeReport extends XiFundDataTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSecurity
	 */
	public $Security;
	/**
	 * The ReportInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeReportInformation
	 */
	public $ReportInformation;
	/**
	 * The Registrant
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeRegistrant
	 */
	public $Registrant;
	/**
	 * The Advisers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfAdviser
	 */
	public $Advisers;
	/**
	 * The Administrators
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfThirdParty
	 */
	public $Administrators;
	/**
	 * The PrincipalUnderwriters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfThirdParty
	 */
	public $PrincipalUnderwriters;
	/**
	 * The ShareholderServicingAgents
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfThirdParty
	 */
	public $ShareholderServicingAgents;
	/**
	 * The IndependentPublicAccountants
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfThirdParty
	 */
	public $IndependentPublicAccountants;
	/**
	 * The AffiliatedBrokerDealers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfThirdParty
	 */
	public $AffiliatedBrokerDealers;
	/**
	 * The Custodians
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfCustodian
	 */
	public $Custodians;
	/**
	 * The LargestBrokerCommissions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfBrokerCommission
	 */
	public $LargestBrokerCommissions;
	/**
	 * The TotalBrokerageCommisions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalBrokerageCommisions;
	/**
	 * The LargestPortfolioTransactions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfPortfolioTransaction
	 */
	public $LargestPortfolioTransactions;
	/**
	 * The TotalPurchases
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalPurchases;
	/**
	 * The TotalSales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalSales;
	/**
	 * The HoldFifteenPercentHoldings
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $HoldFifteenPercentHoldings;
	/**
	 * The FifteenPercentHoldings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfFifteenPercentHolding
	 */
	public $FifteenPercentHoldings;
	/**
	 * The BrokerConsiderations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeBrokerConsiderations
	 */
	public $BrokerConsiderations;
	/**
	 * The OpenEnd
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $OpenEnd;
	/**
	 * The SalesLoad
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeSalesLoad
	 */
	public $SalesLoad;
	/**
	 * The Contracts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeContracts
	 */
	public $Contracts;
	/**
	 * The AdvisoryFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeAdvisoryFee
	 */
	public $AdvisoryFee;
	/**
	 * The Classification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeClassification
	 */
	public $Classification;
	/**
	 * The Financials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFinancials
	 */
	public $Financials;
	/**
	 * The Attachments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeAttachments
	 */
	public $Attachments;
	/**
	 * Constructor
	 * @param XiFundDataTypeSecurity Security
	 * @param XiFundDataTypeReportInformation ReportInformation
	 * @param XiFundDataTypeRegistrant Registrant
	 * @param XiFundDataTypeArrayOfAdviser Advisers
	 * @param XiFundDataTypeArrayOfThirdParty Administrators
	 * @param XiFundDataTypeArrayOfThirdParty PrincipalUnderwriters
	 * @param XiFundDataTypeArrayOfThirdParty ShareholderServicingAgents
	 * @param XiFundDataTypeArrayOfThirdParty IndependentPublicAccountants
	 * @param XiFundDataTypeArrayOfThirdParty AffiliatedBrokerDealers
	 * @param XiFundDataTypeArrayOfCustodian Custodians
	 * @param XiFundDataTypeArrayOfBrokerCommission LargestBrokerCommissions
	 * @param double TotalBrokerageCommisions
	 * @param XiFundDataTypeArrayOfPortfolioTransaction LargestPortfolioTransactions
	 * @param double TotalPurchases
	 * @param double TotalSales
	 * @param boolean HoldFifteenPercentHoldings
	 * @param XiFundDataTypeArrayOfFifteenPercentHolding FifteenPercentHoldings
	 * @param XiFundDataTypeBrokerConsiderations BrokerConsiderations
	 * @param boolean OpenEnd
	 * @param XiFundDataTypeSalesLoad SalesLoad
	 * @param XiFundDataTypeContracts Contracts
	 * @param XiFundDataTypeAdvisoryFee AdvisoryFee
	 * @param XiFundDataTypeClassification Classification
	 * @param XiFundDataTypeFinancials Financials
	 * @param XiFundDataTypeAttachments Attachments
	 * @return XiFundDataTypeReport
	 */
	public function __construct($_Security = null,$_ReportInformation = null,$_Registrant = null,$_Advisers = null,$_Administrators = null,$_PrincipalUnderwriters = null,$_ShareholderServicingAgents = null,$_IndependentPublicAccountants = null,$_AffiliatedBrokerDealers = null,$_Custodians = null,$_LargestBrokerCommissions = null,$_TotalBrokerageCommisions,$_LargestPortfolioTransactions = null,$_TotalPurchases,$_TotalSales,$_HoldFifteenPercentHoldings,$_FifteenPercentHoldings = null,$_BrokerConsiderations = null,$_OpenEnd,$_SalesLoad = null,$_Contracts = null,$_AdvisoryFee = null,$_Classification = null,$_Financials = null,$_Attachments = null)
	{
		XiFundDataWsdlClass::__construct(array('Security'=>$_Security,'ReportInformation'=>$_ReportInformation,'Registrant'=>$_Registrant,'Advisers'=>new XiFundDataTypeArrayOfAdviser($_Advisers),'Administrators'=>new XiFundDataTypeArrayOfThirdParty($_Administrators),'PrincipalUnderwriters'=>new XiFundDataTypeArrayOfThirdParty($_PrincipalUnderwriters),'ShareholderServicingAgents'=>new XiFundDataTypeArrayOfThirdParty($_ShareholderServicingAgents),'IndependentPublicAccountants'=>new XiFundDataTypeArrayOfThirdParty($_IndependentPublicAccountants),'AffiliatedBrokerDealers'=>new XiFundDataTypeArrayOfThirdParty($_AffiliatedBrokerDealers),'Custodians'=>new XiFundDataTypeArrayOfCustodian($_Custodians),'LargestBrokerCommissions'=>new XiFundDataTypeArrayOfBrokerCommission($_LargestBrokerCommissions),'TotalBrokerageCommisions'=>$_TotalBrokerageCommisions,'LargestPortfolioTransactions'=>new XiFundDataTypeArrayOfPortfolioTransaction($_LargestPortfolioTransactions),'TotalPurchases'=>$_TotalPurchases,'TotalSales'=>$_TotalSales,'HoldFifteenPercentHoldings'=>$_HoldFifteenPercentHoldings,'FifteenPercentHoldings'=>new XiFundDataTypeArrayOfFifteenPercentHolding($_FifteenPercentHoldings),'BrokerConsiderations'=>$_BrokerConsiderations,'OpenEnd'=>$_OpenEnd,'SalesLoad'=>$_SalesLoad,'Contracts'=>$_Contracts,'AdvisoryFee'=>$_AdvisoryFee,'Classification'=>$_Classification,'Financials'=>$_Financials,'Attachments'=>$_Attachments));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiFundDataTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ReportInformation
	 * @param ReportInformation ReportInformation
	 * @return ReportInformation
	 */
	public function setReportInformation($_ReportInformation)
	{
		return ($this->ReportInformation = $_ReportInformation);
	}
	/**
	 * Get ReportInformation
	 * @return XiFundDataTypeReportInformation
	 */
	public function getReportInformation()
	{
		return $this->ReportInformation;
	}
	/**
	 * Set Registrant
	 * @param Registrant Registrant
	 * @return Registrant
	 */
	public function setRegistrant($_Registrant)
	{
		return ($this->Registrant = $_Registrant);
	}
	/**
	 * Get Registrant
	 * @return XiFundDataTypeRegistrant
	 */
	public function getRegistrant()
	{
		return $this->Registrant;
	}
	/**
	 * Set Advisers
	 * @param ArrayOfAdviser Advisers
	 * @return ArrayOfAdviser
	 */
	public function setAdvisers($_Advisers)
	{
		return ($this->Advisers = $_Advisers);
	}
	/**
	 * Get Advisers
	 * @return XiFundDataTypeArrayOfAdviser
	 */
	public function getAdvisers()
	{
		return $this->Advisers;
	}
	/**
	 * Set Administrators
	 * @param ArrayOfThirdParty Administrators
	 * @return ArrayOfThirdParty
	 */
	public function setAdministrators($_Administrators)
	{
		return ($this->Administrators = $_Administrators);
	}
	/**
	 * Get Administrators
	 * @return XiFundDataTypeArrayOfThirdParty
	 */
	public function getAdministrators()
	{
		return $this->Administrators;
	}
	/**
	 * Set PrincipalUnderwriters
	 * @param ArrayOfThirdParty PrincipalUnderwriters
	 * @return ArrayOfThirdParty
	 */
	public function setPrincipalUnderwriters($_PrincipalUnderwriters)
	{
		return ($this->PrincipalUnderwriters = $_PrincipalUnderwriters);
	}
	/**
	 * Get PrincipalUnderwriters
	 * @return XiFundDataTypeArrayOfThirdParty
	 */
	public function getPrincipalUnderwriters()
	{
		return $this->PrincipalUnderwriters;
	}
	/**
	 * Set ShareholderServicingAgents
	 * @param ArrayOfThirdParty ShareholderServicingAgents
	 * @return ArrayOfThirdParty
	 */
	public function setShareholderServicingAgents($_ShareholderServicingAgents)
	{
		return ($this->ShareholderServicingAgents = $_ShareholderServicingAgents);
	}
	/**
	 * Get ShareholderServicingAgents
	 * @return XiFundDataTypeArrayOfThirdParty
	 */
	public function getShareholderServicingAgents()
	{
		return $this->ShareholderServicingAgents;
	}
	/**
	 * Set IndependentPublicAccountants
	 * @param ArrayOfThirdParty IndependentPublicAccountants
	 * @return ArrayOfThirdParty
	 */
	public function setIndependentPublicAccountants($_IndependentPublicAccountants)
	{
		return ($this->IndependentPublicAccountants = $_IndependentPublicAccountants);
	}
	/**
	 * Get IndependentPublicAccountants
	 * @return XiFundDataTypeArrayOfThirdParty
	 */
	public function getIndependentPublicAccountants()
	{
		return $this->IndependentPublicAccountants;
	}
	/**
	 * Set AffiliatedBrokerDealers
	 * @param ArrayOfThirdParty AffiliatedBrokerDealers
	 * @return ArrayOfThirdParty
	 */
	public function setAffiliatedBrokerDealers($_AffiliatedBrokerDealers)
	{
		return ($this->AffiliatedBrokerDealers = $_AffiliatedBrokerDealers);
	}
	/**
	 * Get AffiliatedBrokerDealers
	 * @return XiFundDataTypeArrayOfThirdParty
	 */
	public function getAffiliatedBrokerDealers()
	{
		return $this->AffiliatedBrokerDealers;
	}
	/**
	 * Set Custodians
	 * @param ArrayOfCustodian Custodians
	 * @return ArrayOfCustodian
	 */
	public function setCustodians($_Custodians)
	{
		return ($this->Custodians = $_Custodians);
	}
	/**
	 * Get Custodians
	 * @return XiFundDataTypeArrayOfCustodian
	 */
	public function getCustodians()
	{
		return $this->Custodians;
	}
	/**
	 * Set LargestBrokerCommissions
	 * @param ArrayOfBrokerCommission LargestBrokerCommissions
	 * @return ArrayOfBrokerCommission
	 */
	public function setLargestBrokerCommissions($_LargestBrokerCommissions)
	{
		return ($this->LargestBrokerCommissions = $_LargestBrokerCommissions);
	}
	/**
	 * Get LargestBrokerCommissions
	 * @return XiFundDataTypeArrayOfBrokerCommission
	 */
	public function getLargestBrokerCommissions()
	{
		return $this->LargestBrokerCommissions;
	}
	/**
	 * Set TotalBrokerageCommisions
	 * @param double TotalBrokerageCommisions
	 * @return double
	 */
	public function setTotalBrokerageCommisions($_TotalBrokerageCommisions)
	{
		return ($this->TotalBrokerageCommisions = $_TotalBrokerageCommisions);
	}
	/**
	 * Get TotalBrokerageCommisions
	 * @return double
	 */
	public function getTotalBrokerageCommisions()
	{
		return $this->TotalBrokerageCommisions;
	}
	/**
	 * Set LargestPortfolioTransactions
	 * @param ArrayOfPortfolioTransaction LargestPortfolioTransactions
	 * @return ArrayOfPortfolioTransaction
	 */
	public function setLargestPortfolioTransactions($_LargestPortfolioTransactions)
	{
		return ($this->LargestPortfolioTransactions = $_LargestPortfolioTransactions);
	}
	/**
	 * Get LargestPortfolioTransactions
	 * @return XiFundDataTypeArrayOfPortfolioTransaction
	 */
	public function getLargestPortfolioTransactions()
	{
		return $this->LargestPortfolioTransactions;
	}
	/**
	 * Set TotalPurchases
	 * @param double TotalPurchases
	 * @return double
	 */
	public function setTotalPurchases($_TotalPurchases)
	{
		return ($this->TotalPurchases = $_TotalPurchases);
	}
	/**
	 * Get TotalPurchases
	 * @return double
	 */
	public function getTotalPurchases()
	{
		return $this->TotalPurchases;
	}
	/**
	 * Set TotalSales
	 * @param double TotalSales
	 * @return double
	 */
	public function setTotalSales($_TotalSales)
	{
		return ($this->TotalSales = $_TotalSales);
	}
	/**
	 * Get TotalSales
	 * @return double
	 */
	public function getTotalSales()
	{
		return $this->TotalSales;
	}
	/**
	 * Set HoldFifteenPercentHoldings
	 * @param boolean HoldFifteenPercentHoldings
	 * @return boolean
	 */
	public function setHoldFifteenPercentHoldings($_HoldFifteenPercentHoldings)
	{
		return ($this->HoldFifteenPercentHoldings = $_HoldFifteenPercentHoldings);
	}
	/**
	 * Get HoldFifteenPercentHoldings
	 * @return boolean
	 */
	public function getHoldFifteenPercentHoldings()
	{
		return $this->HoldFifteenPercentHoldings;
	}
	/**
	 * Set FifteenPercentHoldings
	 * @param ArrayOfFifteenPercentHolding FifteenPercentHoldings
	 * @return ArrayOfFifteenPercentHolding
	 */
	public function setFifteenPercentHoldings($_FifteenPercentHoldings)
	{
		return ($this->FifteenPercentHoldings = $_FifteenPercentHoldings);
	}
	/**
	 * Get FifteenPercentHoldings
	 * @return XiFundDataTypeArrayOfFifteenPercentHolding
	 */
	public function getFifteenPercentHoldings()
	{
		return $this->FifteenPercentHoldings;
	}
	/**
	 * Set BrokerConsiderations
	 * @param BrokerConsiderations BrokerConsiderations
	 * @return BrokerConsiderations
	 */
	public function setBrokerConsiderations($_BrokerConsiderations)
	{
		return ($this->BrokerConsiderations = $_BrokerConsiderations);
	}
	/**
	 * Get BrokerConsiderations
	 * @return XiFundDataTypeBrokerConsiderations
	 */
	public function getBrokerConsiderations()
	{
		return $this->BrokerConsiderations;
	}
	/**
	 * Set OpenEnd
	 * @param boolean OpenEnd
	 * @return boolean
	 */
	public function setOpenEnd($_OpenEnd)
	{
		return ($this->OpenEnd = $_OpenEnd);
	}
	/**
	 * Get OpenEnd
	 * @return boolean
	 */
	public function getOpenEnd()
	{
		return $this->OpenEnd;
	}
	/**
	 * Set SalesLoad
	 * @param SalesLoad SalesLoad
	 * @return SalesLoad
	 */
	public function setSalesLoad($_SalesLoad)
	{
		return ($this->SalesLoad = $_SalesLoad);
	}
	/**
	 * Get SalesLoad
	 * @return XiFundDataTypeSalesLoad
	 */
	public function getSalesLoad()
	{
		return $this->SalesLoad;
	}
	/**
	 * Set Contracts
	 * @param Contracts Contracts
	 * @return Contracts
	 */
	public function setContracts($_Contracts)
	{
		return ($this->Contracts = $_Contracts);
	}
	/**
	 * Get Contracts
	 * @return XiFundDataTypeContracts
	 */
	public function getContracts()
	{
		return $this->Contracts;
	}
	/**
	 * Set AdvisoryFee
	 * @param AdvisoryFee AdvisoryFee
	 * @return AdvisoryFee
	 */
	public function setAdvisoryFee($_AdvisoryFee)
	{
		return ($this->AdvisoryFee = $_AdvisoryFee);
	}
	/**
	 * Get AdvisoryFee
	 * @return XiFundDataTypeAdvisoryFee
	 */
	public function getAdvisoryFee()
	{
		return $this->AdvisoryFee;
	}
	/**
	 * Set Classification
	 * @param Classification Classification
	 * @return Classification
	 */
	public function setClassification($_Classification)
	{
		return ($this->Classification = $_Classification);
	}
	/**
	 * Get Classification
	 * @return XiFundDataTypeClassification
	 */
	public function getClassification()
	{
		return $this->Classification;
	}
	/**
	 * Set Financials
	 * @param Financials Financials
	 * @return Financials
	 */
	public function setFinancials($_Financials)
	{
		return ($this->Financials = $_Financials);
	}
	/**
	 * Get Financials
	 * @return XiFundDataTypeFinancials
	 */
	public function getFinancials()
	{
		return $this->Financials;
	}
	/**
	 * Set Attachments
	 * @param Attachments Attachments
	 * @return Attachments
	 */
	public function setAttachments($_Attachments)
	{
		return ($this->Attachments = $_Attachments);
	}
	/**
	 * Get Attachments
	 * @return XiFundDataTypeAttachments
	 */
	public function getAttachments()
	{
		return $this->Attachments;
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