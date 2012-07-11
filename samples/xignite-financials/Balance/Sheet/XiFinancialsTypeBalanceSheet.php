<?php
/**
 * Class file for XiFinancialsTypeBalanceSheet
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeBalanceSheet
 * @date 08/07/2012
 */
class XiFinancialsTypeBalanceSheet extends XiFinancialsTypeCommon
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
	 * The Assets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeAssets
	 */
	public $Assets;
	/**
	 * The Liabilities
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeLiabilities
	 */
	public $Liabilities;
	/**
	 * The StockHoldersEquity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStockHoldersEquity
	 */
	public $StockHoldersEquity;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param string FiscalQuarter
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param string AuditorsName
	 * @param string AuditorsReport
	 * @param XiFinancialsTypeAssets Assets
	 * @param XiFinancialsTypeLiabilities Liabilities
	 * @param XiFinancialsTypeStockHoldersEquity StockHoldersEquity
	 * @return XiFinancialsTypeBalanceSheet
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_FiscalQuarter = null,$_ReportType,$_AuditorsName = null,$_AuditorsReport = null,$_Assets = null,$_Liabilities = null,$_StockHoldersEquity = null)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'FiscalQuarter'=>$_FiscalQuarter,'ReportType'=>$_ReportType,'AuditorsName'=>$_AuditorsName,'AuditorsReport'=>$_AuditorsReport,'Assets'=>$_Assets,'Liabilities'=>$_Liabilities,'StockHoldersEquity'=>$_StockHoldersEquity));
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
	 * Set Assets
	 * @param Assets Assets
	 * @return Assets
	 */
	public function setAssets($_Assets)
	{
		return ($this->Assets = $_Assets);
	}
	/**
	 * Get Assets
	 * @return XiFinancialsTypeAssets
	 */
	public function getAssets()
	{
		return $this->Assets;
	}
	/**
	 * Set Liabilities
	 * @param Liabilities Liabilities
	 * @return Liabilities
	 */
	public function setLiabilities($_Liabilities)
	{
		return ($this->Liabilities = $_Liabilities);
	}
	/**
	 * Get Liabilities
	 * @return XiFinancialsTypeLiabilities
	 */
	public function getLiabilities()
	{
		return $this->Liabilities;
	}
	/**
	 * Set StockHoldersEquity
	 * @param StockHoldersEquity StockHoldersEquity
	 * @return StockHoldersEquity
	 */
	public function setStockHoldersEquity($_StockHoldersEquity)
	{
		return ($this->StockHoldersEquity = $_StockHoldersEquity);
	}
	/**
	 * Get StockHoldersEquity
	 * @return XiFinancialsTypeStockHoldersEquity
	 */
	public function getStockHoldersEquity()
	{
		return $this->StockHoldersEquity;
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