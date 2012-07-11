<?php
/**
 * Class file for XiFundDataTypeReportInformation
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeReportInformation
 * @date 08/07/2012
 */
class XiFundDataTypeReportInformation extends XiFundDataWsdlClass
{
	/**
	 * The ReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeFundReportTypes
	 */
	public $ReportType;
	/**
	 * The SECType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SECType;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The SixMonthPeriodEnding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SixMonthPeriodEnding;
	/**
	 * The FiscalYearEnding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FiscalYearEnding;
	/**
	 * The TransitionReport
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $TransitionReport;
	/**
	 * The Amendment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Amendment;
	/**
	 * Constructor
	 * @param XiFundDataTypeFundReportTypes ReportType
	 * @param string SECType
	 * @param string Url
	 * @param string SixMonthPeriodEnding
	 * @param string FiscalYearEnding
	 * @param boolean TransitionReport
	 * @param boolean Amendment
	 * @return XiFundDataTypeReportInformation
	 */
	public function __construct($_ReportType,$_SECType = null,$_Url = null,$_SixMonthPeriodEnding = null,$_FiscalYearEnding = null,$_TransitionReport,$_Amendment)
	{
		parent::__construct(array('ReportType'=>$_ReportType,'SECType'=>$_SECType,'Url'=>$_Url,'SixMonthPeriodEnding'=>$_SixMonthPeriodEnding,'FiscalYearEnding'=>$_FiscalYearEnding,'TransitionReport'=>$_TransitionReport,'Amendment'=>$_Amendment));
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
	 * Set SECType
	 * @param string SECType
	 * @return string
	 */
	public function setSECType($_SECType)
	{
		return ($this->SECType = $_SECType);
	}
	/**
	 * Get SECType
	 * @return string
	 */
	public function getSECType()
	{
		return $this->SECType;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set SixMonthPeriodEnding
	 * @param string SixMonthPeriodEnding
	 * @return string
	 */
	public function setSixMonthPeriodEnding($_SixMonthPeriodEnding)
	{
		return ($this->SixMonthPeriodEnding = $_SixMonthPeriodEnding);
	}
	/**
	 * Get SixMonthPeriodEnding
	 * @return string
	 */
	public function getSixMonthPeriodEnding()
	{
		return $this->SixMonthPeriodEnding;
	}
	/**
	 * Set FiscalYearEnding
	 * @param string FiscalYearEnding
	 * @return string
	 */
	public function setFiscalYearEnding($_FiscalYearEnding)
	{
		return ($this->FiscalYearEnding = $_FiscalYearEnding);
	}
	/**
	 * Get FiscalYearEnding
	 * @return string
	 */
	public function getFiscalYearEnding()
	{
		return $this->FiscalYearEnding;
	}
	/**
	 * Set TransitionReport
	 * @param boolean TransitionReport
	 * @return boolean
	 */
	public function setTransitionReport($_TransitionReport)
	{
		return ($this->TransitionReport = $_TransitionReport);
	}
	/**
	 * Get TransitionReport
	 * @return boolean
	 */
	public function getTransitionReport()
	{
		return $this->TransitionReport;
	}
	/**
	 * Set Amendment
	 * @param boolean Amendment
	 * @return boolean
	 */
	public function setAmendment($_Amendment)
	{
		return ($this->Amendment = $_Amendment);
	}
	/**
	 * Get Amendment
	 * @return boolean
	 */
	public function getAmendment()
	{
		return $this->Amendment;
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