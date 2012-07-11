<?php
/**
 * Class file for XiFundDataTypeSearchFundReports
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeSearchFundReports
 * @date 08/07/2012
 */
class XiFundDataTypeSearchFundReports extends XiFundDataWsdlClass
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The FamilyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FamilyName;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The ReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundReportTypes
	 */
	public $ReportType;
	/**
	 * Constructor
	 * @param string CIK
	 * @param string Symbol
	 * @param string Name
	 * @param string FamilyName
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiFundDataTypeFundReportTypes ReportType
	 * @return XiFundDataTypeSearchFundReports
	 */
	public function __construct($_CIK = null,$_Symbol = null,$_Name = null,$_FamilyName = null,$_StartDate = null,$_EndDate = null,$_ReportType)
	{
		parent::__construct(array('CIK'=>$_CIK,'Symbol'=>$_Symbol,'Name'=>$_Name,'FamilyName'=>$_FamilyName,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'ReportType'=>$_ReportType));
	}
	/**
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set FamilyName
	 * @param string FamilyName
	 * @return string
	 */
	public function setFamilyName($_FamilyName)
	{
		return ($this->FamilyName = $_FamilyName);
	}
	/**
	 * Get FamilyName
	 * @return string
	 */
	public function getFamilyName()
	{
		return $this->FamilyName;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set ReportType
	 * @param FundReportTypes ReportType
	 * @return FundReportTypes
	 */
	public function setReportType($_ReportType)
	{
		return ($this->ReportType = XiFundDataTypeFundReportTypes::valueIsValid($_ReportType)?$_ReportType:null);
	}
	/**
	 * Get ReportType
	 * @return XiFundDataTypeFundReportTypes
	 */
	public function getReportType()
	{
		return $this->ReportType;
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