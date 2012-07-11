<?php
/**
 * Class file for XiFinancialsTypeGetFinancialServicesItemRange
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetFinancialServicesItemRange
 * @date 08/07/2012
 */
class XiFinancialsTypeGetFinancialServicesItemRange extends XiFinancialsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesItemTypes
	 */
	public $Type;
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The ReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReportTypes
	 */
	public $ReportType;
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
	 * Constructor
	 * @param XiFinancialsTypeFinancialServicesItemTypes Type
	 * @param string Identifier
	 * @param XiFinancialsTypeIdentifierTypes IdentifierType
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param string StartDate
	 * @param string EndDate
	 * @return XiFinancialsTypeGetFinancialServicesItemRange
	 */
	public function __construct($_Type,$_Identifier = null,$_IdentifierType,$_ReportType,$_StartDate = null,$_EndDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'ReportType'=>$_ReportType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate));
	}
	/**
	 * Set Type
	 * @param FinancialServicesItemTypes Type
	 * @return FinancialServicesItemTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFinancialsTypeFinancialServicesItemTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFinancialsTypeFinancialServicesItemTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiFinancialsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiFinancialsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set ReportType
	 * @param ReportTypes ReportType
	 * @return ReportTypes
	 */
	public function setReportType($_ReportType)
	{
		return ($this->ReportType = XiFinancialsTypeReportTypes::valueIsValid($_ReportType)?$_ReportType:null);
	}
	/**
	 * Get ReportType
	 * @return XiFinancialsTypeReportTypes
	 */
	public function getReportType()
	{
		return $this->ReportType;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>