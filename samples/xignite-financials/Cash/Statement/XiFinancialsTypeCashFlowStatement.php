<?php
/**
 * Class file for XiFinancialsTypeCashFlowStatement
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeCashFlowStatement
 * @date 08/07/2012
 */
class XiFinancialsTypeCashFlowStatement extends XiFinancialsTypeCommon
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
	 * The CashAtBeginningOfPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashAtBeginningOfPeriod;
	/**
	 * The NetIncomeOrLoss
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetIncomeOrLoss;
	/**
	 * The CashFromOperatingActivities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeCashFromOperatingActivities
	 */
	public $CashFromOperatingActivities;
	/**
	 * The CashFromInvestingActivities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeCashFromInvestingActivities
	 */
	public $CashFromInvestingActivities;
	/**
	 * The CashFromFinancingActivities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeCashFromFinancingActivities
	 */
	public $CashFromFinancingActivities;
	/**
	 * The NetChangeinCashAndCashEquivalents
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetChangeinCashAndCashEquivalents;
	/**
	 * The CashAtEndOfPeriod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashAtEndOfPeriod;
	/**
	 * The EffectofExchangeRateChanges
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EffectofExchangeRateChanges;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param string FiscalQuarter
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param string AuditorsName
	 * @param string AuditorsReport
	 * @param double CashAtBeginningOfPeriod
	 * @param double NetIncomeOrLoss
	 * @param XiFinancialsTypeCashFromOperatingActivities CashFromOperatingActivities
	 * @param XiFinancialsTypeCashFromInvestingActivities CashFromInvestingActivities
	 * @param XiFinancialsTypeCashFromFinancingActivities CashFromFinancingActivities
	 * @param double NetChangeinCashAndCashEquivalents
	 * @param double CashAtEndOfPeriod
	 * @param double EffectofExchangeRateChanges
	 * @return XiFinancialsTypeCashFlowStatement
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_FiscalQuarter = null,$_ReportType,$_AuditorsName = null,$_AuditorsReport = null,$_CashAtBeginningOfPeriod,$_NetIncomeOrLoss,$_CashFromOperatingActivities = null,$_CashFromInvestingActivities = null,$_CashFromFinancingActivities = null,$_NetChangeinCashAndCashEquivalents,$_CashAtEndOfPeriod,$_EffectofExchangeRateChanges)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'FiscalQuarter'=>$_FiscalQuarter,'ReportType'=>$_ReportType,'AuditorsName'=>$_AuditorsName,'AuditorsReport'=>$_AuditorsReport,'CashAtBeginningOfPeriod'=>$_CashAtBeginningOfPeriod,'NetIncomeOrLoss'=>$_NetIncomeOrLoss,'CashFromOperatingActivities'=>$_CashFromOperatingActivities,'CashFromInvestingActivities'=>$_CashFromInvestingActivities,'CashFromFinancingActivities'=>$_CashFromFinancingActivities,'NetChangeinCashAndCashEquivalents'=>$_NetChangeinCashAndCashEquivalents,'CashAtEndOfPeriod'=>$_CashAtEndOfPeriod,'EffectofExchangeRateChanges'=>$_EffectofExchangeRateChanges));
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
	 * Set CashAtBeginningOfPeriod
	 * @param double CashAtBeginningOfPeriod
	 * @return double
	 */
	public function setCashAtBeginningOfPeriod($_CashAtBeginningOfPeriod)
	{
		return ($this->CashAtBeginningOfPeriod = $_CashAtBeginningOfPeriod);
	}
	/**
	 * Get CashAtBeginningOfPeriod
	 * @return double
	 */
	public function getCashAtBeginningOfPeriod()
	{
		return $this->CashAtBeginningOfPeriod;
	}
	/**
	 * Set NetIncomeOrLoss
	 * @param double NetIncomeOrLoss
	 * @return double
	 */
	public function setNetIncomeOrLoss($_NetIncomeOrLoss)
	{
		return ($this->NetIncomeOrLoss = $_NetIncomeOrLoss);
	}
	/**
	 * Get NetIncomeOrLoss
	 * @return double
	 */
	public function getNetIncomeOrLoss()
	{
		return $this->NetIncomeOrLoss;
	}
	/**
	 * Set CashFromOperatingActivities
	 * @param CashFromOperatingActivities CashFromOperatingActivities
	 * @return CashFromOperatingActivities
	 */
	public function setCashFromOperatingActivities($_CashFromOperatingActivities)
	{
		return ($this->CashFromOperatingActivities = $_CashFromOperatingActivities);
	}
	/**
	 * Get CashFromOperatingActivities
	 * @return XiFinancialsTypeCashFromOperatingActivities
	 */
	public function getCashFromOperatingActivities()
	{
		return $this->CashFromOperatingActivities;
	}
	/**
	 * Set CashFromInvestingActivities
	 * @param CashFromInvestingActivities CashFromInvestingActivities
	 * @return CashFromInvestingActivities
	 */
	public function setCashFromInvestingActivities($_CashFromInvestingActivities)
	{
		return ($this->CashFromInvestingActivities = $_CashFromInvestingActivities);
	}
	/**
	 * Get CashFromInvestingActivities
	 * @return XiFinancialsTypeCashFromInvestingActivities
	 */
	public function getCashFromInvestingActivities()
	{
		return $this->CashFromInvestingActivities;
	}
	/**
	 * Set CashFromFinancingActivities
	 * @param CashFromFinancingActivities CashFromFinancingActivities
	 * @return CashFromFinancingActivities
	 */
	public function setCashFromFinancingActivities($_CashFromFinancingActivities)
	{
		return ($this->CashFromFinancingActivities = $_CashFromFinancingActivities);
	}
	/**
	 * Get CashFromFinancingActivities
	 * @return XiFinancialsTypeCashFromFinancingActivities
	 */
	public function getCashFromFinancingActivities()
	{
		return $this->CashFromFinancingActivities;
	}
	/**
	 * Set NetChangeinCashAndCashEquivalents
	 * @param double NetChangeinCashAndCashEquivalents
	 * @return double
	 */
	public function setNetChangeinCashAndCashEquivalents($_NetChangeinCashAndCashEquivalents)
	{
		return ($this->NetChangeinCashAndCashEquivalents = $_NetChangeinCashAndCashEquivalents);
	}
	/**
	 * Get NetChangeinCashAndCashEquivalents
	 * @return double
	 */
	public function getNetChangeinCashAndCashEquivalents()
	{
		return $this->NetChangeinCashAndCashEquivalents;
	}
	/**
	 * Set CashAtEndOfPeriod
	 * @param double CashAtEndOfPeriod
	 * @return double
	 */
	public function setCashAtEndOfPeriod($_CashAtEndOfPeriod)
	{
		return ($this->CashAtEndOfPeriod = $_CashAtEndOfPeriod);
	}
	/**
	 * Get CashAtEndOfPeriod
	 * @return double
	 */
	public function getCashAtEndOfPeriod()
	{
		return $this->CashAtEndOfPeriod;
	}
	/**
	 * Set EffectofExchangeRateChanges
	 * @param double EffectofExchangeRateChanges
	 * @return double
	 */
	public function setEffectofExchangeRateChanges($_EffectofExchangeRateChanges)
	{
		return ($this->EffectofExchangeRateChanges = $_EffectofExchangeRateChanges);
	}
	/**
	 * Get EffectofExchangeRateChanges
	 * @return double
	 */
	public function getEffectofExchangeRateChanges()
	{
		return $this->EffectofExchangeRateChanges;
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