<?php
/**
 * Class file for XiFinancialsTypeGetReport
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetReport
 * @date 08/07/2012
 */
class XiFinancialsTypeGetReport extends XiFinancialsWsdlClass
{
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
	 * The StatementType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStatementTypes
	 */
	public $StatementType;
	/**
	 * The ReportStyle
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReportStyles
	 */
	public $ReportStyle;
	/**
	 * The RoundingType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeRoundingTypes
	 */
	public $RoundingType;
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
	 * @param string Identifier
	 * @param XiFinancialsTypeIdentifierTypes IdentifierType
	 * @param XiFinancialsTypeStatementTypes StatementType
	 * @param XiFinancialsTypeReportStyles ReportStyle
	 * @param XiFinancialsTypeRoundingTypes RoundingType
	 * @param string AsOfDate
	 * @return XiFinancialsTypeGetReport
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_StatementType,$_ReportStyle,$_RoundingType,$_AsOfDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'StatementType'=>$_StatementType,'ReportStyle'=>$_ReportStyle,'RoundingType'=>$_RoundingType,'AsOfDate'=>$_AsOfDate));
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
	 * Set StatementType
	 * @param StatementTypes StatementType
	 * @return StatementTypes
	 */
	public function setStatementType($_StatementType)
	{
		return ($this->StatementType = XiFinancialsTypeStatementTypes::valueIsValid($_StatementType)?$_StatementType:null);
	}
	/**
	 * Get StatementType
	 * @return XiFinancialsTypeStatementTypes
	 */
	public function getStatementType()
	{
		return $this->StatementType;
	}
	/**
	 * Set ReportStyle
	 * @param ReportStyles ReportStyle
	 * @return ReportStyles
	 */
	public function setReportStyle($_ReportStyle)
	{
		return ($this->ReportStyle = XiFinancialsTypeReportStyles::valueIsValid($_ReportStyle)?$_ReportStyle:null);
	}
	/**
	 * Get ReportStyle
	 * @return XiFinancialsTypeReportStyles
	 */
	public function getReportStyle()
	{
		return $this->ReportStyle;
	}
	/**
	 * Set RoundingType
	 * @param RoundingTypes RoundingType
	 * @return RoundingTypes
	 */
	public function setRoundingType($_RoundingType)
	{
		return ($this->RoundingType = XiFinancialsTypeRoundingTypes::valueIsValid($_RoundingType)?$_RoundingType:null);
	}
	/**
	 * Get RoundingType
	 * @return XiFinancialsTypeRoundingTypes
	 */
	public function getRoundingType()
	{
		return $this->RoundingType;
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