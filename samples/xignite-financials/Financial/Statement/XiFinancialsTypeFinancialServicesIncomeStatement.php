<?php
/**
 * Class file for XiFinancialsTypeFinancialServicesIncomeStatement
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeFinancialServicesIncomeStatement
 * @date 08/07/2012
 */
class XiFinancialsTypeFinancialServicesIncomeStatement extends XiFinancialsTypeCommon
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
	 * The FiscalQuarter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FiscalQuarter;
	/**
	 * The ReportType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReportTypes
	 */
	public $ReportType;
	/**
	 * The AuditorsName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuditorsName;
	/**
	 * The AuditorsReport
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuditorsReport;
	/**
	 * The OperatingRevenue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesOperatingRevenue
	 */
	public $OperatingRevenue;
	/**
	 * The OperatingExpenses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesOperatingExpenses
	 */
	public $OperatingExpenses;
	/**
	 * The NonOperatingExpenses
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesNonOperatingExpenses
	 */
	public $NonOperatingExpenses;
	/**
	 * The NonRecurringEvents
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeNonRecurringEvents
	 */
	public $NonRecurringEvents;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param string FiscalQuarter
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param string AuditorsName
	 * @param string AuditorsReport
	 * @param XiFinancialsTypeFinancialServicesOperatingRevenue OperatingRevenue
	 * @param XiFinancialsTypeFinancialServicesOperatingExpenses OperatingExpenses
	 * @param XiFinancialsTypeFinancialServicesNonOperatingExpenses NonOperatingExpenses
	 * @param XiFinancialsTypeNonRecurringEvents NonRecurringEvents
	 * @return XiFinancialsTypeFinancialServicesIncomeStatement
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_FiscalQuarter = null,$_ReportType,$_AuditorsName = null,$_AuditorsReport = null,$_OperatingRevenue = null,$_OperatingExpenses = null,$_NonOperatingExpenses = null,$_NonRecurringEvents = null)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'FiscalQuarter'=>$_FiscalQuarter,'ReportType'=>$_ReportType,'AuditorsName'=>$_AuditorsName,'AuditorsReport'=>$_AuditorsReport,'OperatingRevenue'=>$_OperatingRevenue,'OperatingExpenses'=>$_OperatingExpenses,'NonOperatingExpenses'=>$_NonOperatingExpenses,'NonRecurringEvents'=>$_NonRecurringEvents));
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
	 * Set FiscalQuarter
	 * @param string FiscalQuarter
	 * @return string
	 */
	public function setFiscalQuarter($_FiscalQuarter)
	{
		return ($this->FiscalQuarter = $_FiscalQuarter);
	}
	/**
	 * Get FiscalQuarter
	 * @return string
	 */
	public function getFiscalQuarter()
	{
		return $this->FiscalQuarter;
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
	 * Set AuditorsName
	 * @param string AuditorsName
	 * @return string
	 */
	public function setAuditorsName($_AuditorsName)
	{
		return ($this->AuditorsName = $_AuditorsName);
	}
	/**
	 * Get AuditorsName
	 * @return string
	 */
	public function getAuditorsName()
	{
		return $this->AuditorsName;
	}
	/**
	 * Set AuditorsReport
	 * @param string AuditorsReport
	 * @return string
	 */
	public function setAuditorsReport($_AuditorsReport)
	{
		return ($this->AuditorsReport = $_AuditorsReport);
	}
	/**
	 * Get AuditorsReport
	 * @return string
	 */
	public function getAuditorsReport()
	{
		return $this->AuditorsReport;
	}
	/**
	 * Set OperatingRevenue
	 * @param FinancialServicesOperatingRevenue OperatingRevenue
	 * @return FinancialServicesOperatingRevenue
	 */
	public function setOperatingRevenue($_OperatingRevenue)
	{
		return ($this->OperatingRevenue = $_OperatingRevenue);
	}
	/**
	 * Get OperatingRevenue
	 * @return XiFinancialsTypeFinancialServicesOperatingRevenue
	 */
	public function getOperatingRevenue()
	{
		return $this->OperatingRevenue;
	}
	/**
	 * Set OperatingExpenses
	 * @param FinancialServicesOperatingExpenses OperatingExpenses
	 * @return FinancialServicesOperatingExpenses
	 */
	public function setOperatingExpenses($_OperatingExpenses)
	{
		return ($this->OperatingExpenses = $_OperatingExpenses);
	}
	/**
	 * Get OperatingExpenses
	 * @return XiFinancialsTypeFinancialServicesOperatingExpenses
	 */
	public function getOperatingExpenses()
	{
		return $this->OperatingExpenses;
	}
	/**
	 * Set NonOperatingExpenses
	 * @param FinancialServicesNonOperatingExpenses NonOperatingExpenses
	 * @return FinancialServicesNonOperatingExpenses
	 */
	public function setNonOperatingExpenses($_NonOperatingExpenses)
	{
		return ($this->NonOperatingExpenses = $_NonOperatingExpenses);
	}
	/**
	 * Get NonOperatingExpenses
	 * @return XiFinancialsTypeFinancialServicesNonOperatingExpenses
	 */
	public function getNonOperatingExpenses()
	{
		return $this->NonOperatingExpenses;
	}
	/**
	 * Set NonRecurringEvents
	 * @param NonRecurringEvents NonRecurringEvents
	 * @return NonRecurringEvents
	 */
	public function setNonRecurringEvents($_NonRecurringEvents)
	{
		return ($this->NonRecurringEvents = $_NonRecurringEvents);
	}
	/**
	 * Get NonRecurringEvents
	 * @return XiFinancialsTypeNonRecurringEvents
	 */
	public function getNonRecurringEvents()
	{
		return $this->NonRecurringEvents;
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