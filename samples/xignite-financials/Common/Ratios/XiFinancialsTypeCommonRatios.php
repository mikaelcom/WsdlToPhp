<?php
/**
 * Class file for XiFinancialsTypeCommonRatios
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeCommonRatios
 * @date 08/07/2012
 */
class XiFinancialsTypeCommonRatios extends XiFinancialsTypeCommon
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
	 * The ClosePERatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ClosePERatio;
	/**
	 * The HighPERatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $HighPERatio;
	/**
	 * The LowPERatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LowPERatio;
	/**
	 * The GrossProfitMargin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrossProfitMargin;
	/**
	 * The PreTaxProfitMargin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreTaxProfitMargin;
	/**
	 * The PostTaxProfitMargin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PostTaxProfitMargin;
	/**
	 * The NetProfitMargin
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetProfitMargin;
	/**
	 * The InterestCoverageFromContinuingOperations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestCoverageFromContinuingOperations;
	/**
	 * The InterestAsAPercentageOfInvestedCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InterestAsAPercentageOfInvestedCapital;
	/**
	 * The EffectiveTaxRate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EffectiveTaxRate;
	/**
	 * The IncomePerEmployee
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomePerEmployee;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param string FiscalQuarter
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param double ClosePERatio
	 * @param double HighPERatio
	 * @param double LowPERatio
	 * @param double GrossProfitMargin
	 * @param double PreTaxProfitMargin
	 * @param double PostTaxProfitMargin
	 * @param double NetProfitMargin
	 * @param double InterestCoverageFromContinuingOperations
	 * @param double InterestAsAPercentageOfInvestedCapital
	 * @param double EffectiveTaxRate
	 * @param double IncomePerEmployee
	 * @return XiFinancialsTypeCommonRatios
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_FiscalQuarter = null,$_ReportType,$_ClosePERatio,$_HighPERatio,$_LowPERatio,$_GrossProfitMargin,$_PreTaxProfitMargin,$_PostTaxProfitMargin,$_NetProfitMargin,$_InterestCoverageFromContinuingOperations,$_InterestAsAPercentageOfInvestedCapital,$_EffectiveTaxRate,$_IncomePerEmployee)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'FiscalQuarter'=>$_FiscalQuarter,'ReportType'=>$_ReportType,'ClosePERatio'=>$_ClosePERatio,'HighPERatio'=>$_HighPERatio,'LowPERatio'=>$_LowPERatio,'GrossProfitMargin'=>$_GrossProfitMargin,'PreTaxProfitMargin'=>$_PreTaxProfitMargin,'PostTaxProfitMargin'=>$_PostTaxProfitMargin,'NetProfitMargin'=>$_NetProfitMargin,'InterestCoverageFromContinuingOperations'=>$_InterestCoverageFromContinuingOperations,'InterestAsAPercentageOfInvestedCapital'=>$_InterestAsAPercentageOfInvestedCapital,'EffectiveTaxRate'=>$_EffectiveTaxRate,'IncomePerEmployee'=>$_IncomePerEmployee));
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
	 * Set ClosePERatio
	 * @param double ClosePERatio
	 * @return double
	 */
	public function setClosePERatio($_ClosePERatio)
	{
		return ($this->ClosePERatio = $_ClosePERatio);
	}
	/**
	 * Get ClosePERatio
	 * @return double
	 */
	public function getClosePERatio()
	{
		return $this->ClosePERatio;
	}
	/**
	 * Set HighPERatio
	 * @param double HighPERatio
	 * @return double
	 */
	public function setHighPERatio($_HighPERatio)
	{
		return ($this->HighPERatio = $_HighPERatio);
	}
	/**
	 * Get HighPERatio
	 * @return double
	 */
	public function getHighPERatio()
	{
		return $this->HighPERatio;
	}
	/**
	 * Set LowPERatio
	 * @param double LowPERatio
	 * @return double
	 */
	public function setLowPERatio($_LowPERatio)
	{
		return ($this->LowPERatio = $_LowPERatio);
	}
	/**
	 * Get LowPERatio
	 * @return double
	 */
	public function getLowPERatio()
	{
		return $this->LowPERatio;
	}
	/**
	 * Set GrossProfitMargin
	 * @param double GrossProfitMargin
	 * @return double
	 */
	public function setGrossProfitMargin($_GrossProfitMargin)
	{
		return ($this->GrossProfitMargin = $_GrossProfitMargin);
	}
	/**
	 * Get GrossProfitMargin
	 * @return double
	 */
	public function getGrossProfitMargin()
	{
		return $this->GrossProfitMargin;
	}
	/**
	 * Set PreTaxProfitMargin
	 * @param double PreTaxProfitMargin
	 * @return double
	 */
	public function setPreTaxProfitMargin($_PreTaxProfitMargin)
	{
		return ($this->PreTaxProfitMargin = $_PreTaxProfitMargin);
	}
	/**
	 * Get PreTaxProfitMargin
	 * @return double
	 */
	public function getPreTaxProfitMargin()
	{
		return $this->PreTaxProfitMargin;
	}
	/**
	 * Set PostTaxProfitMargin
	 * @param double PostTaxProfitMargin
	 * @return double
	 */
	public function setPostTaxProfitMargin($_PostTaxProfitMargin)
	{
		return ($this->PostTaxProfitMargin = $_PostTaxProfitMargin);
	}
	/**
	 * Get PostTaxProfitMargin
	 * @return double
	 */
	public function getPostTaxProfitMargin()
	{
		return $this->PostTaxProfitMargin;
	}
	/**
	 * Set NetProfitMargin
	 * @param double NetProfitMargin
	 * @return double
	 */
	public function setNetProfitMargin($_NetProfitMargin)
	{
		return ($this->NetProfitMargin = $_NetProfitMargin);
	}
	/**
	 * Get NetProfitMargin
	 * @return double
	 */
	public function getNetProfitMargin()
	{
		return $this->NetProfitMargin;
	}
	/**
	 * Set InterestCoverageFromContinuingOperations
	 * @param double InterestCoverageFromContinuingOperations
	 * @return double
	 */
	public function setInterestCoverageFromContinuingOperations($_InterestCoverageFromContinuingOperations)
	{
		return ($this->InterestCoverageFromContinuingOperations = $_InterestCoverageFromContinuingOperations);
	}
	/**
	 * Get InterestCoverageFromContinuingOperations
	 * @return double
	 */
	public function getInterestCoverageFromContinuingOperations()
	{
		return $this->InterestCoverageFromContinuingOperations;
	}
	/**
	 * Set InterestAsAPercentageOfInvestedCapital
	 * @param double InterestAsAPercentageOfInvestedCapital
	 * @return double
	 */
	public function setInterestAsAPercentageOfInvestedCapital($_InterestAsAPercentageOfInvestedCapital)
	{
		return ($this->InterestAsAPercentageOfInvestedCapital = $_InterestAsAPercentageOfInvestedCapital);
	}
	/**
	 * Get InterestAsAPercentageOfInvestedCapital
	 * @return double
	 */
	public function getInterestAsAPercentageOfInvestedCapital()
	{
		return $this->InterestAsAPercentageOfInvestedCapital;
	}
	/**
	 * Set EffectiveTaxRate
	 * @param double EffectiveTaxRate
	 * @return double
	 */
	public function setEffectiveTaxRate($_EffectiveTaxRate)
	{
		return ($this->EffectiveTaxRate = $_EffectiveTaxRate);
	}
	/**
	 * Get EffectiveTaxRate
	 * @return double
	 */
	public function getEffectiveTaxRate()
	{
		return $this->EffectiveTaxRate;
	}
	/**
	 * Set IncomePerEmployee
	 * @param double IncomePerEmployee
	 * @return double
	 */
	public function setIncomePerEmployee($_IncomePerEmployee)
	{
		return ($this->IncomePerEmployee = $_IncomePerEmployee);
	}
	/**
	 * Get IncomePerEmployee
	 * @return double
	 */
	public function getIncomePerEmployee()
	{
		return $this->IncomePerEmployee;
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