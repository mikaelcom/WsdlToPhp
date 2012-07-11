<?php
/**
 * Class file for XiFundDataTypeAttachments
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeAttachments
 * @date 08/07/2012
 */
class XiFundDataTypeAttachments extends XiFundDataWsdlClass
{
	/**
	 * The AttachmentsIncluded
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AttachmentsIncluded;
	/**
	 * The AccountantReport
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AccountantReport;
	/**
	 * The MattersSubmittedToVote
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $MattersSubmittedToVote;
	/**
	 * The InvestmentPolicies
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $InvestmentPolicies;
	/**
	 * The LegalProceeding
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $LegalProceeding;
	/**
	 * The ChangesInSecurityForDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ChangesInSecurityForDebt;
	/**
	 * The DefaultsInArrears
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $DefaultsInArrears;
	/**
	 * The ChangeInControl
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ChangeInControl;
	/**
	 * The TermsOfNewOrAmendedSecurities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $TermsOfNewOrAmendedSecurities;
	/**
	 * The ReevaluationOfAssetsOrRestatementsOfCapitalShareCount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ReevaluationOfAssetsOrRestatementsOfCapitalShareCount;
	/**
	 * The ChangeInRegistrantCertifyingAccount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ChangeInRegistrantCertifyingAccount;
	/**
	 * The ChangesInAccountingPrinciplesAndPractices
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ChangesInAccountingPrinciplesAndPractices;
	/**
	 * The Mergers
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Mergers;
	/**
	 * The Rule2a7Reporting
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Rule2a7Reporting;
	/**
	 * The Rule10f3Reporting
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Rule10f3Reporting;
	/**
	 * The ExemptiveOrdersReporting
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $ExemptiveOrdersReporting;
	/**
	 * The Exhibits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Exhibits;
	/**
	 * The SubItem77Q2Instructions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SubItem77Q2Instructions;
	/**
	 * The SubItem77Q3Instructions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SubItem77Q3Instructions;
	/**
	 * The DocumentURLs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeArrayOfDocumentURL
	 */
	public $DocumentURLs;
	/**
	 * Constructor
	 * @param boolean AttachmentsIncluded
	 * @param boolean AccountantReport
	 * @param boolean MattersSubmittedToVote
	 * @param boolean InvestmentPolicies
	 * @param boolean LegalProceeding
	 * @param boolean ChangesInSecurityForDebt
	 * @param boolean DefaultsInArrears
	 * @param boolean ChangeInControl
	 * @param boolean TermsOfNewOrAmendedSecurities
	 * @param boolean ReevaluationOfAssetsOrRestatementsOfCapitalShareCount
	 * @param boolean ChangeInRegistrantCertifyingAccount
	 * @param boolean ChangesInAccountingPrinciplesAndPractices
	 * @param boolean Mergers
	 * @param boolean Rule2a7Reporting
	 * @param boolean Rule10f3Reporting
	 * @param boolean ExemptiveOrdersReporting
	 * @param boolean Exhibits
	 * @param boolean SubItem77Q2Instructions
	 * @param boolean SubItem77Q3Instructions
	 * @param XiFundDataTypeArrayOfDocumentURL DocumentURLs
	 * @return XiFundDataTypeAttachments
	 */
	public function __construct($_AttachmentsIncluded,$_AccountantReport,$_MattersSubmittedToVote,$_InvestmentPolicies,$_LegalProceeding,$_ChangesInSecurityForDebt,$_DefaultsInArrears,$_ChangeInControl,$_TermsOfNewOrAmendedSecurities,$_ReevaluationOfAssetsOrRestatementsOfCapitalShareCount,$_ChangeInRegistrantCertifyingAccount,$_ChangesInAccountingPrinciplesAndPractices,$_Mergers,$_Rule2a7Reporting,$_Rule10f3Reporting,$_ExemptiveOrdersReporting,$_Exhibits,$_SubItem77Q2Instructions,$_SubItem77Q3Instructions,$_DocumentURLs = null)
	{
		parent::__construct(array('AttachmentsIncluded'=>$_AttachmentsIncluded,'AccountantReport'=>$_AccountantReport,'MattersSubmittedToVote'=>$_MattersSubmittedToVote,'InvestmentPolicies'=>$_InvestmentPolicies,'LegalProceeding'=>$_LegalProceeding,'ChangesInSecurityForDebt'=>$_ChangesInSecurityForDebt,'DefaultsInArrears'=>$_DefaultsInArrears,'ChangeInControl'=>$_ChangeInControl,'TermsOfNewOrAmendedSecurities'=>$_TermsOfNewOrAmendedSecurities,'ReevaluationOfAssetsOrRestatementsOfCapitalShareCount'=>$_ReevaluationOfAssetsOrRestatementsOfCapitalShareCount,'ChangeInRegistrantCertifyingAccount'=>$_ChangeInRegistrantCertifyingAccount,'ChangesInAccountingPrinciplesAndPractices'=>$_ChangesInAccountingPrinciplesAndPractices,'Mergers'=>$_Mergers,'Rule2a7Reporting'=>$_Rule2a7Reporting,'Rule10f3Reporting'=>$_Rule10f3Reporting,'ExemptiveOrdersReporting'=>$_ExemptiveOrdersReporting,'Exhibits'=>$_Exhibits,'SubItem77Q2Instructions'=>$_SubItem77Q2Instructions,'SubItem77Q3Instructions'=>$_SubItem77Q3Instructions,'DocumentURLs'=>new XiFundDataTypeArrayOfDocumentURL($_DocumentURLs)));
	}
	/**
	 * Set AttachmentsIncluded
	 * @param boolean AttachmentsIncluded
	 * @return boolean
	 */
	public function setAttachmentsIncluded($_AttachmentsIncluded)
	{
		return ($this->AttachmentsIncluded = $_AttachmentsIncluded);
	}
	/**
	 * Get AttachmentsIncluded
	 * @return boolean
	 */
	public function getAttachmentsIncluded()
	{
		return $this->AttachmentsIncluded;
	}
	/**
	 * Set AccountantReport
	 * @param boolean AccountantReport
	 * @return boolean
	 */
	public function setAccountantReport($_AccountantReport)
	{
		return ($this->AccountantReport = $_AccountantReport);
	}
	/**
	 * Get AccountantReport
	 * @return boolean
	 */
	public function getAccountantReport()
	{
		return $this->AccountantReport;
	}
	/**
	 * Set MattersSubmittedToVote
	 * @param boolean MattersSubmittedToVote
	 * @return boolean
	 */
	public function setMattersSubmittedToVote($_MattersSubmittedToVote)
	{
		return ($this->MattersSubmittedToVote = $_MattersSubmittedToVote);
	}
	/**
	 * Get MattersSubmittedToVote
	 * @return boolean
	 */
	public function getMattersSubmittedToVote()
	{
		return $this->MattersSubmittedToVote;
	}
	/**
	 * Set InvestmentPolicies
	 * @param boolean InvestmentPolicies
	 * @return boolean
	 */
	public function setInvestmentPolicies($_InvestmentPolicies)
	{
		return ($this->InvestmentPolicies = $_InvestmentPolicies);
	}
	/**
	 * Get InvestmentPolicies
	 * @return boolean
	 */
	public function getInvestmentPolicies()
	{
		return $this->InvestmentPolicies;
	}
	/**
	 * Set LegalProceeding
	 * @param boolean LegalProceeding
	 * @return boolean
	 */
	public function setLegalProceeding($_LegalProceeding)
	{
		return ($this->LegalProceeding = $_LegalProceeding);
	}
	/**
	 * Get LegalProceeding
	 * @return boolean
	 */
	public function getLegalProceeding()
	{
		return $this->LegalProceeding;
	}
	/**
	 * Set ChangesInSecurityForDebt
	 * @param boolean ChangesInSecurityForDebt
	 * @return boolean
	 */
	public function setChangesInSecurityForDebt($_ChangesInSecurityForDebt)
	{
		return ($this->ChangesInSecurityForDebt = $_ChangesInSecurityForDebt);
	}
	/**
	 * Get ChangesInSecurityForDebt
	 * @return boolean
	 */
	public function getChangesInSecurityForDebt()
	{
		return $this->ChangesInSecurityForDebt;
	}
	/**
	 * Set DefaultsInArrears
	 * @param boolean DefaultsInArrears
	 * @return boolean
	 */
	public function setDefaultsInArrears($_DefaultsInArrears)
	{
		return ($this->DefaultsInArrears = $_DefaultsInArrears);
	}
	/**
	 * Get DefaultsInArrears
	 * @return boolean
	 */
	public function getDefaultsInArrears()
	{
		return $this->DefaultsInArrears;
	}
	/**
	 * Set ChangeInControl
	 * @param boolean ChangeInControl
	 * @return boolean
	 */
	public function setChangeInControl($_ChangeInControl)
	{
		return ($this->ChangeInControl = $_ChangeInControl);
	}
	/**
	 * Get ChangeInControl
	 * @return boolean
	 */
	public function getChangeInControl()
	{
		return $this->ChangeInControl;
	}
	/**
	 * Set TermsOfNewOrAmendedSecurities
	 * @param boolean TermsOfNewOrAmendedSecurities
	 * @return boolean
	 */
	public function setTermsOfNewOrAmendedSecurities($_TermsOfNewOrAmendedSecurities)
	{
		return ($this->TermsOfNewOrAmendedSecurities = $_TermsOfNewOrAmendedSecurities);
	}
	/**
	 * Get TermsOfNewOrAmendedSecurities
	 * @return boolean
	 */
	public function getTermsOfNewOrAmendedSecurities()
	{
		return $this->TermsOfNewOrAmendedSecurities;
	}
	/**
	 * Set ReevaluationOfAssetsOrRestatementsOfCapitalShareCount
	 * @param boolean ReevaluationOfAssetsOrRestatementsOfCapitalShareCount
	 * @return boolean
	 */
	public function setReevaluationOfAssetsOrRestatementsOfCapitalShareCount($_ReevaluationOfAssetsOrRestatementsOfCapitalShareCount)
	{
		return ($this->ReevaluationOfAssetsOrRestatementsOfCapitalShareCount = $_ReevaluationOfAssetsOrRestatementsOfCapitalShareCount);
	}
	/**
	 * Get ReevaluationOfAssetsOrRestatementsOfCapitalShareCount
	 * @return boolean
	 */
	public function getReevaluationOfAssetsOrRestatementsOfCapitalShareCount()
	{
		return $this->ReevaluationOfAssetsOrRestatementsOfCapitalShareCount;
	}
	/**
	 * Set ChangeInRegistrantCertifyingAccount
	 * @param boolean ChangeInRegistrantCertifyingAccount
	 * @return boolean
	 */
	public function setChangeInRegistrantCertifyingAccount($_ChangeInRegistrantCertifyingAccount)
	{
		return ($this->ChangeInRegistrantCertifyingAccount = $_ChangeInRegistrantCertifyingAccount);
	}
	/**
	 * Get ChangeInRegistrantCertifyingAccount
	 * @return boolean
	 */
	public function getChangeInRegistrantCertifyingAccount()
	{
		return $this->ChangeInRegistrantCertifyingAccount;
	}
	/**
	 * Set ChangesInAccountingPrinciplesAndPractices
	 * @param boolean ChangesInAccountingPrinciplesAndPractices
	 * @return boolean
	 */
	public function setChangesInAccountingPrinciplesAndPractices($_ChangesInAccountingPrinciplesAndPractices)
	{
		return ($this->ChangesInAccountingPrinciplesAndPractices = $_ChangesInAccountingPrinciplesAndPractices);
	}
	/**
	 * Get ChangesInAccountingPrinciplesAndPractices
	 * @return boolean
	 */
	public function getChangesInAccountingPrinciplesAndPractices()
	{
		return $this->ChangesInAccountingPrinciplesAndPractices;
	}
	/**
	 * Set Mergers
	 * @param boolean Mergers
	 * @return boolean
	 */
	public function setMergers($_Mergers)
	{
		return ($this->Mergers = $_Mergers);
	}
	/**
	 * Get Mergers
	 * @return boolean
	 */
	public function getMergers()
	{
		return $this->Mergers;
	}
	/**
	 * Set Rule2a7Reporting
	 * @param boolean Rule2a7Reporting
	 * @return boolean
	 */
	public function setRule2a7Reporting($_Rule2a7Reporting)
	{
		return ($this->Rule2a7Reporting = $_Rule2a7Reporting);
	}
	/**
	 * Get Rule2a7Reporting
	 * @return boolean
	 */
	public function getRule2a7Reporting()
	{
		return $this->Rule2a7Reporting;
	}
	/**
	 * Set Rule10f3Reporting
	 * @param boolean Rule10f3Reporting
	 * @return boolean
	 */
	public function setRule10f3Reporting($_Rule10f3Reporting)
	{
		return ($this->Rule10f3Reporting = $_Rule10f3Reporting);
	}
	/**
	 * Get Rule10f3Reporting
	 * @return boolean
	 */
	public function getRule10f3Reporting()
	{
		return $this->Rule10f3Reporting;
	}
	/**
	 * Set ExemptiveOrdersReporting
	 * @param boolean ExemptiveOrdersReporting
	 * @return boolean
	 */
	public function setExemptiveOrdersReporting($_ExemptiveOrdersReporting)
	{
		return ($this->ExemptiveOrdersReporting = $_ExemptiveOrdersReporting);
	}
	/**
	 * Get ExemptiveOrdersReporting
	 * @return boolean
	 */
	public function getExemptiveOrdersReporting()
	{
		return $this->ExemptiveOrdersReporting;
	}
	/**
	 * Set Exhibits
	 * @param boolean Exhibits
	 * @return boolean
	 */
	public function setExhibits($_Exhibits)
	{
		return ($this->Exhibits = $_Exhibits);
	}
	/**
	 * Get Exhibits
	 * @return boolean
	 */
	public function getExhibits()
	{
		return $this->Exhibits;
	}
	/**
	 * Set SubItem77Q2Instructions
	 * @param boolean SubItem77Q2Instructions
	 * @return boolean
	 */
	public function setSubItem77Q2Instructions($_SubItem77Q2Instructions)
	{
		return ($this->SubItem77Q2Instructions = $_SubItem77Q2Instructions);
	}
	/**
	 * Get SubItem77Q2Instructions
	 * @return boolean
	 */
	public function getSubItem77Q2Instructions()
	{
		return $this->SubItem77Q2Instructions;
	}
	/**
	 * Set SubItem77Q3Instructions
	 * @param boolean SubItem77Q3Instructions
	 * @return boolean
	 */
	public function setSubItem77Q3Instructions($_SubItem77Q3Instructions)
	{
		return ($this->SubItem77Q3Instructions = $_SubItem77Q3Instructions);
	}
	/**
	 * Get SubItem77Q3Instructions
	 * @return boolean
	 */
	public function getSubItem77Q3Instructions()
	{
		return $this->SubItem77Q3Instructions;
	}
	/**
	 * Set DocumentURLs
	 * @param ArrayOfDocumentURL DocumentURLs
	 * @return ArrayOfDocumentURL
	 */
	public function setDocumentURLs($_DocumentURLs)
	{
		return ($this->DocumentURLs = $_DocumentURLs);
	}
	/**
	 * Get DocumentURLs
	 * @return XiFundDataTypeArrayOfDocumentURL
	 */
	public function getDocumentURLs()
	{
		return $this->DocumentURLs;
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