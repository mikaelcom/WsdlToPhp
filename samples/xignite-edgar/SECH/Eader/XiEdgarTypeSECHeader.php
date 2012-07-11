<?php
/**
 * Class file for XiEdgarTypeSECHeader
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSECHeader
 * @date 08/07/2012
 */
class XiEdgarTypeSECHeader extends XiEdgarTypeCommon
{
	/**
	 * The Number
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Number;
	/**
	 * The AccessionNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AccessionNumber;
	/**
	 * The ConformedSubmissionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConformedSubmissionType;
	/**
	 * The PublicDocumentCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PublicDocumentCount;
	/**
	 * The ConformedPeriodOfReport
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConformedPeriodOfReport;
	/**
	 * The ItemInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ItemInformation;
	/**
	 * The FiledAsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FiledAsOfDate;
	/**
	 * The DateOfFilingChange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DateOfFilingChange;
	/**
	 * The SROS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SROS;
	/**
	 * The Filer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeSECFiler
	 */
	public $Filer;
	/**
	 * Constructor
	 * @param string Number
	 * @param string AccessionNumber
	 * @param string ConformedSubmissionType
	 * @param string PublicDocumentCount
	 * @param string ConformedPeriodOfReport
	 * @param string ItemInformation
	 * @param string FiledAsOfDate
	 * @param string DateOfFilingChange
	 * @param string SROS
	 * @param XiEdgarTypeSECFiler Filer
	 * @return XiEdgarTypeSECHeader
	 */
	public function __construct($_Number = null,$_AccessionNumber = null,$_ConformedSubmissionType = null,$_PublicDocumentCount = null,$_ConformedPeriodOfReport = null,$_ItemInformation = null,$_FiledAsOfDate = null,$_DateOfFilingChange = null,$_SROS = null,$_Filer = null)
	{
		XiEdgarWsdlClass::__construct(array('Number'=>$_Number,'AccessionNumber'=>$_AccessionNumber,'ConformedSubmissionType'=>$_ConformedSubmissionType,'PublicDocumentCount'=>$_PublicDocumentCount,'ConformedPeriodOfReport'=>$_ConformedPeriodOfReport,'ItemInformation'=>$_ItemInformation,'FiledAsOfDate'=>$_FiledAsOfDate,'DateOfFilingChange'=>$_DateOfFilingChange,'SROS'=>$_SROS,'Filer'=>$_Filer));
	}
	/**
	 * Set Number
	 * @param string Number
	 * @return string
	 */
	public function setNumber($_Number)
	{
		return ($this->Number = $_Number);
	}
	/**
	 * Get Number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->Number;
	}
	/**
	 * Set AccessionNumber
	 * @param string AccessionNumber
	 * @return string
	 */
	public function setAccessionNumber($_AccessionNumber)
	{
		return ($this->AccessionNumber = $_AccessionNumber);
	}
	/**
	 * Get AccessionNumber
	 * @return string
	 */
	public function getAccessionNumber()
	{
		return $this->AccessionNumber;
	}
	/**
	 * Set ConformedSubmissionType
	 * @param string ConformedSubmissionType
	 * @return string
	 */
	public function setConformedSubmissionType($_ConformedSubmissionType)
	{
		return ($this->ConformedSubmissionType = $_ConformedSubmissionType);
	}
	/**
	 * Get ConformedSubmissionType
	 * @return string
	 */
	public function getConformedSubmissionType()
	{
		return $this->ConformedSubmissionType;
	}
	/**
	 * Set PublicDocumentCount
	 * @param string PublicDocumentCount
	 * @return string
	 */
	public function setPublicDocumentCount($_PublicDocumentCount)
	{
		return ($this->PublicDocumentCount = $_PublicDocumentCount);
	}
	/**
	 * Get PublicDocumentCount
	 * @return string
	 */
	public function getPublicDocumentCount()
	{
		return $this->PublicDocumentCount;
	}
	/**
	 * Set ConformedPeriodOfReport
	 * @param string ConformedPeriodOfReport
	 * @return string
	 */
	public function setConformedPeriodOfReport($_ConformedPeriodOfReport)
	{
		return ($this->ConformedPeriodOfReport = $_ConformedPeriodOfReport);
	}
	/**
	 * Get ConformedPeriodOfReport
	 * @return string
	 */
	public function getConformedPeriodOfReport()
	{
		return $this->ConformedPeriodOfReport;
	}
	/**
	 * Set ItemInformation
	 * @param string ItemInformation
	 * @return string
	 */
	public function setItemInformation($_ItemInformation)
	{
		return ($this->ItemInformation = $_ItemInformation);
	}
	/**
	 * Get ItemInformation
	 * @return string
	 */
	public function getItemInformation()
	{
		return $this->ItemInformation;
	}
	/**
	 * Set FiledAsOfDate
	 * @param string FiledAsOfDate
	 * @return string
	 */
	public function setFiledAsOfDate($_FiledAsOfDate)
	{
		return ($this->FiledAsOfDate = $_FiledAsOfDate);
	}
	/**
	 * Get FiledAsOfDate
	 * @return string
	 */
	public function getFiledAsOfDate()
	{
		return $this->FiledAsOfDate;
	}
	/**
	 * Set DateOfFilingChange
	 * @param string DateOfFilingChange
	 * @return string
	 */
	public function setDateOfFilingChange($_DateOfFilingChange)
	{
		return ($this->DateOfFilingChange = $_DateOfFilingChange);
	}
	/**
	 * Get DateOfFilingChange
	 * @return string
	 */
	public function getDateOfFilingChange()
	{
		return $this->DateOfFilingChange;
	}
	/**
	 * Set SROS
	 * @param string SROS
	 * @return string
	 */
	public function setSROS($_SROS)
	{
		return ($this->SROS = $_SROS);
	}
	/**
	 * Get SROS
	 * @return string
	 */
	public function getSROS()
	{
		return $this->SROS;
	}
	/**
	 * Set Filer
	 * @param SECFiler Filer
	 * @return SECFiler
	 */
	public function setFiler($_Filer)
	{
		return ($this->Filer = $_Filer);
	}
	/**
	 * Get Filer
	 * @return XiEdgarTypeSECFiler
	 */
	public function getFiler()
	{
		return $this->Filer;
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