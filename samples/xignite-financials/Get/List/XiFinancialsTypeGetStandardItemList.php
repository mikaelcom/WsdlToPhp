<?php
/**
 * Class file for XiFinancialsTypeGetStandardItemList
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetStandardItemList
 * @date 08/07/2012
 */
class XiFinancialsTypeGetStandardItemList extends XiFinancialsWsdlClass
{
	/**
	 * The Types
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfStandardItemTypes
	 */
	public $Types;
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfStandardItemTypes Types
	 * @param string Identifier
	 * @param XiFinancialsTypeIdentifierTypes IdentifierType
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param string AsOfDate
	 * @return XiFinancialsTypeGetStandardItemList
	 */
	public function __construct($_Types = null,$_Identifier = null,$_IdentifierType,$_ReportType,$_AsOfDate = null)
	{
		parent::__construct(array('Types'=>new XiFinancialsTypeArrayOfStandardItemTypes($_Types),'Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'ReportType'=>$_ReportType,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Types
	 * @param ArrayOfStandardItemTypes Types
	 * @return ArrayOfStandardItemTypes
	 */
	public function setTypes($_Types)
	{
		return ($this->Types = $_Types);
	}
	/**
	 * Get Types
	 * @return XiFinancialsTypeArrayOfStandardItemTypes
	 */
	public function getTypes()
	{
		return $this->Types;
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