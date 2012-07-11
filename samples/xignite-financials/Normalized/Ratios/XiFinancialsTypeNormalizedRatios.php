<?php
/**
 * Class file for XiFinancialsTypeNormalizedRatios
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeNormalizedRatios
 * @date 08/07/2012
 */
class XiFinancialsTypeNormalizedRatios extends XiFinancialsTypeCommon
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
	 * The NormalizedClosePERatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedClosePERatio;
	/**
	 * The NormalizedHighPERatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedHighPERatio;
	/**
	 * The NormalizedLowPERatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedLowPERatio;
	/**
	 * The NormalizedNetProfitMargin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedNetProfitMargin;
	/**
	 * The NormalizedReturnOnStockEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedReturnOnStockEquity;
	/**
	 * The NormalizedReturnOnAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedReturnOnAssets;
	/**
	 * The NormalizedReturnOnInvestedCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedReturnOnInvestedCapital;
	/**
	 * The NormalizedIncomePerEmployee
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedIncomePerEmployee;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param string FiscalQuarter
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param double NormalizedClosePERatio
	 * @param double NormalizedHighPERatio
	 * @param double NormalizedLowPERatio
	 * @param double NormalizedNetProfitMargin
	 * @param double NormalizedReturnOnStockEquity
	 * @param double NormalizedReturnOnAssets
	 * @param double NormalizedReturnOnInvestedCapital
	 * @param double NormalizedIncomePerEmployee
	 * @return XiFinancialsTypeNormalizedRatios
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_FiscalQuarter = null,$_ReportType,$_NormalizedClosePERatio,$_NormalizedHighPERatio,$_NormalizedLowPERatio,$_NormalizedNetProfitMargin,$_NormalizedReturnOnStockEquity,$_NormalizedReturnOnAssets,$_NormalizedReturnOnInvestedCapital,$_NormalizedIncomePerEmployee)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'FiscalQuarter'=>$_FiscalQuarter,'ReportType'=>$_ReportType,'NormalizedClosePERatio'=>$_NormalizedClosePERatio,'NormalizedHighPERatio'=>$_NormalizedHighPERatio,'NormalizedLowPERatio'=>$_NormalizedLowPERatio,'NormalizedNetProfitMargin'=>$_NormalizedNetProfitMargin,'NormalizedReturnOnStockEquity'=>$_NormalizedReturnOnStockEquity,'NormalizedReturnOnAssets'=>$_NormalizedReturnOnAssets,'NormalizedReturnOnInvestedCapital'=>$_NormalizedReturnOnInvestedCapital,'NormalizedIncomePerEmployee'=>$_NormalizedIncomePerEmployee));
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
	 * Set NormalizedClosePERatio
	 * @param double NormalizedClosePERatio
	 * @return double
	 */
	public function setNormalizedClosePERatio($_NormalizedClosePERatio)
	{
		return ($this->NormalizedClosePERatio = $_NormalizedClosePERatio);
	}
	/**
	 * Get NormalizedClosePERatio
	 * @return double
	 */
	public function getNormalizedClosePERatio()
	{
		return $this->NormalizedClosePERatio;
	}
	/**
	 * Set NormalizedHighPERatio
	 * @param double NormalizedHighPERatio
	 * @return double
	 */
	public function setNormalizedHighPERatio($_NormalizedHighPERatio)
	{
		return ($this->NormalizedHighPERatio = $_NormalizedHighPERatio);
	}
	/**
	 * Get NormalizedHighPERatio
	 * @return double
	 */
	public function getNormalizedHighPERatio()
	{
		return $this->NormalizedHighPERatio;
	}
	/**
	 * Set NormalizedLowPERatio
	 * @param double NormalizedLowPERatio
	 * @return double
	 */
	public function setNormalizedLowPERatio($_NormalizedLowPERatio)
	{
		return ($this->NormalizedLowPERatio = $_NormalizedLowPERatio);
	}
	/**
	 * Get NormalizedLowPERatio
	 * @return double
	 */
	public function getNormalizedLowPERatio()
	{
		return $this->NormalizedLowPERatio;
	}
	/**
	 * Set NormalizedNetProfitMargin
	 * @param double NormalizedNetProfitMargin
	 * @return double
	 */
	public function setNormalizedNetProfitMargin($_NormalizedNetProfitMargin)
	{
		return ($this->NormalizedNetProfitMargin = $_NormalizedNetProfitMargin);
	}
	/**
	 * Get NormalizedNetProfitMargin
	 * @return double
	 */
	public function getNormalizedNetProfitMargin()
	{
		return $this->NormalizedNetProfitMargin;
	}
	/**
	 * Set NormalizedReturnOnStockEquity
	 * @param double NormalizedReturnOnStockEquity
	 * @return double
	 */
	public function setNormalizedReturnOnStockEquity($_NormalizedReturnOnStockEquity)
	{
		return ($this->NormalizedReturnOnStockEquity = $_NormalizedReturnOnStockEquity);
	}
	/**
	 * Get NormalizedReturnOnStockEquity
	 * @return double
	 */
	public function getNormalizedReturnOnStockEquity()
	{
		return $this->NormalizedReturnOnStockEquity;
	}
	/**
	 * Set NormalizedReturnOnAssets
	 * @param double NormalizedReturnOnAssets
	 * @return double
	 */
	public function setNormalizedReturnOnAssets($_NormalizedReturnOnAssets)
	{
		return ($this->NormalizedReturnOnAssets = $_NormalizedReturnOnAssets);
	}
	/**
	 * Get NormalizedReturnOnAssets
	 * @return double
	 */
	public function getNormalizedReturnOnAssets()
	{
		return $this->NormalizedReturnOnAssets;
	}
	/**
	 * Set NormalizedReturnOnInvestedCapital
	 * @param double NormalizedReturnOnInvestedCapital
	 * @return double
	 */
	public function setNormalizedReturnOnInvestedCapital($_NormalizedReturnOnInvestedCapital)
	{
		return ($this->NormalizedReturnOnInvestedCapital = $_NormalizedReturnOnInvestedCapital);
	}
	/**
	 * Get NormalizedReturnOnInvestedCapital
	 * @return double
	 */
	public function getNormalizedReturnOnInvestedCapital()
	{
		return $this->NormalizedReturnOnInvestedCapital;
	}
	/**
	 * Set NormalizedIncomePerEmployee
	 * @param double NormalizedIncomePerEmployee
	 * @return double
	 */
	public function setNormalizedIncomePerEmployee($_NormalizedIncomePerEmployee)
	{
		return ($this->NormalizedIncomePerEmployee = $_NormalizedIncomePerEmployee);
	}
	/**
	 * Get NormalizedIncomePerEmployee
	 * @return double
	 */
	public function getNormalizedIncomePerEmployee()
	{
		return $this->NormalizedIncomePerEmployee;
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