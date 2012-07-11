<?php
/**
 * Class file for XiFinancialsTypeGetStandardItems
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetStandardItems
 * @date 08/07/2012
 */
class XiFinancialsTypeGetStandardItems extends XiFinancialsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStandardItemTypes
	 */
	public $Type;
	/**
	 * The Identifiers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifiers;
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiFinancialsTypeStandardItemTypes Type
	 * @param string Identifiers
	 * @param XiFinancialsTypeIdentifierTypes IdentifierType
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param string AsOfDate
	 * @return XiFinancialsTypeGetStandardItems
	 */
	public function __construct($_Type,$_Identifiers = null,$_IdentifierType,$_ReportType,$_AsOfDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'ReportType'=>$_ReportType,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Type
	 * @param StandardItemTypes Type
	 * @return StandardItemTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFinancialsTypeStandardItemTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Identifiers
	 * @param string Identifiers
	 * @return string
	 */
	public function setIdentifiers($_Identifiers)
	{
		return ($this->Identifiers = $_Identifiers);
	}
	/**
	 * Get Identifiers
	 * @return string
	 */
	public function getIdentifiers()
	{
		return $this->Identifiers;
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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