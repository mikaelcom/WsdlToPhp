<?php
/**
 * Class file for XiInsiderTypeOwnershipDocument
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeOwnershipDocument
 * @date 08/07/2012
 */
class XiInsiderTypeOwnershipDocument extends XiInsiderTypeCommon
{
	/**
	 * The schemaVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $schemaVersion;
	/**
	 * The documentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $documentType;
	/**
	 * The periodOfReport
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $periodOfReport;
	/**
	 * The notSubjectToSection16
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $notSubjectToSection16;
	/**
	 * The form3HoldingsReported
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $form3HoldingsReported;
	/**
	 * The form4TransactionsReported
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $form4TransactionsReported;
	/**
	 * The issuer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIssuer
	 */
	public $issuer;
	/**
	 * The reportingOwners
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfReportingOwner
	 */
	public $reportingOwners;
	/**
	 * The derivativeTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfDerivativeTable
	 */
	public $derivativeTable;
	/**
	 * The nonDerivativeTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfNonDerivativeTable
	 */
	public $nonDerivativeTable;
	/**
	 * The footnotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfFootnote
	 */
	public $footnotes;
	/**
	 * The ownerSignature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeOwnerSignature
	 */
	public $ownerSignature;
	/**
	 * Constructor
	 * @param string schemaVersion
	 * @param string documentType
	 * @param string periodOfReport
	 * @param boolean notSubjectToSection16
	 * @param boolean form3HoldingsReported
	 * @param boolean form4TransactionsReported
	 * @param XiInsiderTypeIssuer issuer
	 * @param XiInsiderTypeArrayOfReportingOwner reportingOwners
	 * @param XiInsiderTypeArrayOfDerivativeTable derivativeTable
	 * @param XiInsiderTypeArrayOfNonDerivativeTable nonDerivativeTable
	 * @param XiInsiderTypeArrayOfFootnote footnotes
	 * @param XiInsiderTypeOwnerSignature ownerSignature
	 * @return XiInsiderTypeOwnershipDocument
	 */
	public function __construct($_schemaVersion = null,$_documentType = null,$_periodOfReport = null,$_notSubjectToSection16,$_form3HoldingsReported,$_form4TransactionsReported,$_issuer = null,$_reportingOwners = null,$_derivativeTable = null,$_nonDerivativeTable = null,$_footnotes = null,$_ownerSignature = null)
	{
		XiInsiderWsdlClass::__construct(array('schemaVersion'=>$_schemaVersion,'documentType'=>$_documentType,'periodOfReport'=>$_periodOfReport,'notSubjectToSection16'=>$_notSubjectToSection16,'form3HoldingsReported'=>$_form3HoldingsReported,'form4TransactionsReported'=>$_form4TransactionsReported,'issuer'=>$_issuer,'reportingOwners'=>new XiInsiderTypeArrayOfReportingOwner($_reportingOwners),'derivativeTable'=>new XiInsiderTypeArrayOfDerivativeTable($_derivativeTable),'nonDerivativeTable'=>new XiInsiderTypeArrayOfNonDerivativeTable($_nonDerivativeTable),'footnotes'=>new XiInsiderTypeArrayOfFootnote($_footnotes),'ownerSignature'=>$_ownerSignature));
	}
	/**
	 * Set schemaVersion
	 * @param string schemaVersion
	 * @return string
	 */
	public function setSchemaVersion($_schemaVersion)
	{
		return ($this->schemaVersion = $_schemaVersion);
	}
	/**
	 * Get schemaVersion
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return $this->schemaVersion;
	}
	/**
	 * Set documentType
	 * @param string documentType
	 * @return string
	 */
	public function setDocumentType($_documentType)
	{
		return ($this->documentType = $_documentType);
	}
	/**
	 * Get documentType
	 * @return string
	 */
	public function getDocumentType()
	{
		return $this->documentType;
	}
	/**
	 * Set periodOfReport
	 * @param string periodOfReport
	 * @return string
	 */
	public function setPeriodOfReport($_periodOfReport)
	{
		return ($this->periodOfReport = $_periodOfReport);
	}
	/**
	 * Get periodOfReport
	 * @return string
	 */
	public function getPeriodOfReport()
	{
		return $this->periodOfReport;
	}
	/**
	 * Set notSubjectToSection16
	 * @param boolean notSubjectToSection16
	 * @return boolean
	 */
	public function setNotSubjectToSection16($_notSubjectToSection16)
	{
		return ($this->notSubjectToSection16 = $_notSubjectToSection16);
	}
	/**
	 * Get notSubjectToSection16
	 * @return boolean
	 */
	public function getNotSubjectToSection16()
	{
		return $this->notSubjectToSection16;
	}
	/**
	 * Set form3HoldingsReported
	 * @param boolean form3HoldingsReported
	 * @return boolean
	 */
	public function setForm3HoldingsReported($_form3HoldingsReported)
	{
		return ($this->form3HoldingsReported = $_form3HoldingsReported);
	}
	/**
	 * Get form3HoldingsReported
	 * @return boolean
	 */
	public function getForm3HoldingsReported()
	{
		return $this->form3HoldingsReported;
	}
	/**
	 * Set form4TransactionsReported
	 * @param boolean form4TransactionsReported
	 * @return boolean
	 */
	public function setForm4TransactionsReported($_form4TransactionsReported)
	{
		return ($this->form4TransactionsReported = $_form4TransactionsReported);
	}
	/**
	 * Get form4TransactionsReported
	 * @return boolean
	 */
	public function getForm4TransactionsReported()
	{
		return $this->form4TransactionsReported;
	}
	/**
	 * Set issuer
	 * @param issuer issuer
	 * @return issuer
	 */
	public function setIssuer($_issuer)
	{
		return ($this->issuer = $_issuer);
	}
	/**
	 * Get issuer
	 * @return XiInsiderTypeissuer
	 */
	public function getIssuer()
	{
		return $this->issuer;
	}
	/**
	 * Set reportingOwners
	 * @param ArrayOfReportingOwner reportingOwners
	 * @return ArrayOfReportingOwner
	 */
	public function setReportingOwners($_reportingOwners)
	{
		return ($this->reportingOwners = $_reportingOwners);
	}
	/**
	 * Get reportingOwners
	 * @return XiInsiderTypeArrayOfReportingOwner
	 */
	public function getReportingOwners()
	{
		return $this->reportingOwners;
	}
	/**
	 * Set derivativeTable
	 * @param ArrayOfDerivativeTable derivativeTable
	 * @return ArrayOfDerivativeTable
	 */
	public function setDerivativeTable($_derivativeTable)
	{
		return ($this->derivativeTable = $_derivativeTable);
	}
	/**
	 * Get derivativeTable
	 * @return XiInsiderTypeArrayOfDerivativeTable
	 */
	public function getDerivativeTable()
	{
		return $this->derivativeTable;
	}
	/**
	 * Set nonDerivativeTable
	 * @param ArrayOfNonDerivativeTable nonDerivativeTable
	 * @return ArrayOfNonDerivativeTable
	 */
	public function setNonDerivativeTable($_nonDerivativeTable)
	{
		return ($this->nonDerivativeTable = $_nonDerivativeTable);
	}
	/**
	 * Get nonDerivativeTable
	 * @return XiInsiderTypeArrayOfNonDerivativeTable
	 */
	public function getNonDerivativeTable()
	{
		return $this->nonDerivativeTable;
	}
	/**
	 * Set footnotes
	 * @param ArrayOfFootnote footnotes
	 * @return ArrayOfFootnote
	 */
	public function setFootnotes($_footnotes)
	{
		return ($this->footnotes = $_footnotes);
	}
	/**
	 * Get footnotes
	 * @return XiInsiderTypeArrayOfFootnote
	 */
	public function getFootnotes()
	{
		return $this->footnotes;
	}
	/**
	 * Set ownerSignature
	 * @param ownerSignature ownerSignature
	 * @return ownerSignature
	 */
	public function setOwnerSignature($_ownerSignature)
	{
		return ($this->ownerSignature = $_ownerSignature);
	}
	/**
	 * Get ownerSignature
	 * @return XiInsiderTypeownerSignature
	 */
	public function getOwnerSignature()
	{
		return $this->ownerSignature;
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