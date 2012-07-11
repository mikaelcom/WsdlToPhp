<?php
/**
 * Class file for XiFinancialsTypeFinancials
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeFinancials
 * @date 08/07/2012
 */
class XiFinancialsTypeFinancials extends XiFinancialsTypeCommon
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
	 * The ReportDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReportDate;
	/**
	 * The ReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReportTypes
	 */
	public $ReportType;
	/**
	 * The Financials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfFinancial
	 */
	public $Financials;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param XiFinancialsTypeArrayOfFinancial Financials
	 * @return XiFinancialsTypeFinancials
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_ReportType,$_Financials = null)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'ReportType'=>$_ReportType,'Financials'=>new XiFinancialsTypeArrayOfFinancial($_Financials)));
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
	 * Set ReportDate
	 * @param string ReportDate
	 * @return string
	 */
	public function setReportDate($_ReportDate)
	{
		return ($this->ReportDate = $_ReportDate);
	}
	/**
	 * Get ReportDate
	 * @return string
	 */
	public function getReportDate()
	{
		return $this->ReportDate;
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
	 * Set Financials
	 * @param ArrayOfFinancial Financials
	 * @return ArrayOfFinancial
	 */
	public function setFinancials($_Financials)
	{
		return ($this->Financials = $_Financials);
	}
	/**
	 * Get Financials
	 * @return XiFinancialsTypeArrayOfFinancial
	 */
	public function getFinancials()
	{
		return $this->Financials;
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