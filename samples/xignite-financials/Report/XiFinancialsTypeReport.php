<?php
/**
 * Class file for XiFinancialsTypeReport
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeReport
 * @date 08/07/2012
 */
class XiFinancialsTypeReport extends XiFinancialsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeSecurity
	 */
	public $Security;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * The ReportStyle
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReportStyles
	 */
	public $ReportStyle;
	/**
	 * The StatementType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStatementTypes
	 */
	public $StatementType;
	/**
	 * The Lines
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfLine
	 */
	public $Lines;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param XiFinancialsTypeReportStyles ReportStyle
	 * @param XiFinancialsTypeStatementTypes StatementType
	 * @param XiFinancialsTypeArrayOfLine Lines
	 * @return XiFinancialsTypeReport
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportStyle,$_StatementType,$_Lines = null)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportStyle'=>$_ReportStyle,'StatementType'=>$_StatementType,'Lines'=>new XiFinancialsTypeArrayOfLine($_Lines)));
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
	 * @return XiFinancialsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set Lines
	 * @param ArrayOfLine Lines
	 * @return ArrayOfLine
	 */
	public function setLines($_Lines)
	{
		return ($this->Lines = $_Lines);
	}
	/**
	 * Get Lines
	 * @return XiFinancialsTypeArrayOfLine
	 */
	public function getLines()
	{
		return $this->Lines;
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