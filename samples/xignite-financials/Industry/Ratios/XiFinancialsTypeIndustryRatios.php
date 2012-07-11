<?php
/**
 * Class file for XiFinancialsTypeIndustryRatios
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeIndustryRatios
 * @date 08/07/2012
 */
class XiFinancialsTypeIndustryRatios extends XiFinancialsTypeCommon
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
	 * The PercentageSalesToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageSalesToIndustry;
	/**
	 * The PercentageEarningsToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageEarningsToIndustry;
	/**
	 * The PercentageEPSToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageEPSToIndustry;
	/**
	 * The PercentagePriceToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePriceToIndustry;
	/**
	 * The PercentagePEToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePEToIndustry;
	/**
	 * The PercentagePriceBookToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePriceBookToIndustry;
	/**
	 * The PercentagePriceSalesToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePriceSalesToIndustry;
	/**
	 * The PercentagePriceCashFlowToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePriceCashFlowToIndustry;
	/**
	 * The PercentagePriceFreeCashFlowToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePriceFreeCashFlowToIndustry;
	/**
	 * The PercentageDebtEquityToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageDebtEquityToIndustry;
	/**
	 * The PercentageCurrentRatioToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageCurrentRatioToIndustry;
	/**
	 * The PercentageGrossProfitMarginToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageGrossProfitMarginToIndustry;
	/**
	 * The PercentagePreTaxProfitMarginToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePreTaxProfitMarginToIndustry;
	/**
	 * The PercentagePostTaxProfitMarginToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentagePostTaxProfitMarginToIndustry;
	/**
	 * The PercentageNetProfitMarginToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageNetProfitMarginToIndustry;
	/**
	 * The PercentageReturnOnEquityToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageReturnOnEquityToIndustry;
	/**
	 * The PercentageLeverageRatioToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageLeverageRatioToIndustry;
	/**
	 * The PercentageAssetTurnoverToIndustry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentageAssetTurnoverToIndustry;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param string FiscalQuarter
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param double PercentageSalesToIndustry
	 * @param double PercentageEarningsToIndustry
	 * @param double PercentageEPSToIndustry
	 * @param double PercentagePriceToIndustry
	 * @param double PercentagePEToIndustry
	 * @param double PercentagePriceBookToIndustry
	 * @param double PercentagePriceSalesToIndustry
	 * @param double PercentagePriceCashFlowToIndustry
	 * @param double PercentagePriceFreeCashFlowToIndustry
	 * @param double PercentageDebtEquityToIndustry
	 * @param double PercentageCurrentRatioToIndustry
	 * @param double PercentageGrossProfitMarginToIndustry
	 * @param double PercentagePreTaxProfitMarginToIndustry
	 * @param double PercentagePostTaxProfitMarginToIndustry
	 * @param double PercentageNetProfitMarginToIndustry
	 * @param double PercentageReturnOnEquityToIndustry
	 * @param double PercentageLeverageRatioToIndustry
	 * @param double PercentageAssetTurnoverToIndustry
	 * @return XiFinancialsTypeIndustryRatios
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_FiscalQuarter = null,$_ReportType,$_PercentageSalesToIndustry,$_PercentageEarningsToIndustry,$_PercentageEPSToIndustry,$_PercentagePriceToIndustry,$_PercentagePEToIndustry,$_PercentagePriceBookToIndustry,$_PercentagePriceSalesToIndustry,$_PercentagePriceCashFlowToIndustry,$_PercentagePriceFreeCashFlowToIndustry,$_PercentageDebtEquityToIndustry,$_PercentageCurrentRatioToIndustry,$_PercentageGrossProfitMarginToIndustry,$_PercentagePreTaxProfitMarginToIndustry,$_PercentagePostTaxProfitMarginToIndustry,$_PercentageNetProfitMarginToIndustry,$_PercentageReturnOnEquityToIndustry,$_PercentageLeverageRatioToIndustry,$_PercentageAssetTurnoverToIndustry)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'FiscalQuarter'=>$_FiscalQuarter,'ReportType'=>$_ReportType,'PercentageSalesToIndustry'=>$_PercentageSalesToIndustry,'PercentageEarningsToIndustry'=>$_PercentageEarningsToIndustry,'PercentageEPSToIndustry'=>$_PercentageEPSToIndustry,'PercentagePriceToIndustry'=>$_PercentagePriceToIndustry,'PercentagePEToIndustry'=>$_PercentagePEToIndustry,'PercentagePriceBookToIndustry'=>$_PercentagePriceBookToIndustry,'PercentagePriceSalesToIndustry'=>$_PercentagePriceSalesToIndustry,'PercentagePriceCashFlowToIndustry'=>$_PercentagePriceCashFlowToIndustry,'PercentagePriceFreeCashFlowToIndustry'=>$_PercentagePriceFreeCashFlowToIndustry,'PercentageDebtEquityToIndustry'=>$_PercentageDebtEquityToIndustry,'PercentageCurrentRatioToIndustry'=>$_PercentageCurrentRatioToIndustry,'PercentageGrossProfitMarginToIndustry'=>$_PercentageGrossProfitMarginToIndustry,'PercentagePreTaxProfitMarginToIndustry'=>$_PercentagePreTaxProfitMarginToIndustry,'PercentagePostTaxProfitMarginToIndustry'=>$_PercentagePostTaxProfitMarginToIndustry,'PercentageNetProfitMarginToIndustry'=>$_PercentageNetProfitMarginToIndustry,'PercentageReturnOnEquityToIndustry'=>$_PercentageReturnOnEquityToIndustry,'PercentageLeverageRatioToIndustry'=>$_PercentageLeverageRatioToIndustry,'PercentageAssetTurnoverToIndustry'=>$_PercentageAssetTurnoverToIndustry));
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
	 * Set PercentageSalesToIndustry
	 * @param double PercentageSalesToIndustry
	 * @return double
	 */
	public function setPercentageSalesToIndustry($_PercentageSalesToIndustry)
	{
		return ($this->PercentageSalesToIndustry = $_PercentageSalesToIndustry);
	}
	/**
	 * Get PercentageSalesToIndustry
	 * @return double
	 */
	public function getPercentageSalesToIndustry()
	{
		return $this->PercentageSalesToIndustry;
	}
	/**
	 * Set PercentageEarningsToIndustry
	 * @param double PercentageEarningsToIndustry
	 * @return double
	 */
	public function setPercentageEarningsToIndustry($_PercentageEarningsToIndustry)
	{
		return ($this->PercentageEarningsToIndustry = $_PercentageEarningsToIndustry);
	}
	/**
	 * Get PercentageEarningsToIndustry
	 * @return double
	 */
	public function getPercentageEarningsToIndustry()
	{
		return $this->PercentageEarningsToIndustry;
	}
	/**
	 * Set PercentageEPSToIndustry
	 * @param double PercentageEPSToIndustry
	 * @return double
	 */
	public function setPercentageEPSToIndustry($_PercentageEPSToIndustry)
	{
		return ($this->PercentageEPSToIndustry = $_PercentageEPSToIndustry);
	}
	/**
	 * Get PercentageEPSToIndustry
	 * @return double
	 */
	public function getPercentageEPSToIndustry()
	{
		return $this->PercentageEPSToIndustry;
	}
	/**
	 * Set PercentagePriceToIndustry
	 * @param double PercentagePriceToIndustry
	 * @return double
	 */
	public function setPercentagePriceToIndustry($_PercentagePriceToIndustry)
	{
		return ($this->PercentagePriceToIndustry = $_PercentagePriceToIndustry);
	}
	/**
	 * Get PercentagePriceToIndustry
	 * @return double
	 */
	public function getPercentagePriceToIndustry()
	{
		return $this->PercentagePriceToIndustry;
	}
	/**
	 * Set PercentagePEToIndustry
	 * @param double PercentagePEToIndustry
	 * @return double
	 */
	public function setPercentagePEToIndustry($_PercentagePEToIndustry)
	{
		return ($this->PercentagePEToIndustry = $_PercentagePEToIndustry);
	}
	/**
	 * Get PercentagePEToIndustry
	 * @return double
	 */
	public function getPercentagePEToIndustry()
	{
		return $this->PercentagePEToIndustry;
	}
	/**
	 * Set PercentagePriceBookToIndustry
	 * @param double PercentagePriceBookToIndustry
	 * @return double
	 */
	public function setPercentagePriceBookToIndustry($_PercentagePriceBookToIndustry)
	{
		return ($this->PercentagePriceBookToIndustry = $_PercentagePriceBookToIndustry);
	}
	/**
	 * Get PercentagePriceBookToIndustry
	 * @return double
	 */
	public function getPercentagePriceBookToIndustry()
	{
		return $this->PercentagePriceBookToIndustry;
	}
	/**
	 * Set PercentagePriceSalesToIndustry
	 * @param double PercentagePriceSalesToIndustry
	 * @return double
	 */
	public function setPercentagePriceSalesToIndustry($_PercentagePriceSalesToIndustry)
	{
		return ($this->PercentagePriceSalesToIndustry = $_PercentagePriceSalesToIndustry);
	}
	/**
	 * Get PercentagePriceSalesToIndustry
	 * @return double
	 */
	public function getPercentagePriceSalesToIndustry()
	{
		return $this->PercentagePriceSalesToIndustry;
	}
	/**
	 * Set PercentagePriceCashFlowToIndustry
	 * @param double PercentagePriceCashFlowToIndustry
	 * @return double
	 */
	public function setPercentagePriceCashFlowToIndustry($_PercentagePriceCashFlowToIndustry)
	{
		return ($this->PercentagePriceCashFlowToIndustry = $_PercentagePriceCashFlowToIndustry);
	}
	/**
	 * Get PercentagePriceCashFlowToIndustry
	 * @return double
	 */
	public function getPercentagePriceCashFlowToIndustry()
	{
		return $this->PercentagePriceCashFlowToIndustry;
	}
	/**
	 * Set PercentagePriceFreeCashFlowToIndustry
	 * @param double PercentagePriceFreeCashFlowToIndustry
	 * @return double
	 */
	public function setPercentagePriceFreeCashFlowToIndustry($_PercentagePriceFreeCashFlowToIndustry)
	{
		return ($this->PercentagePriceFreeCashFlowToIndustry = $_PercentagePriceFreeCashFlowToIndustry);
	}
	/**
	 * Get PercentagePriceFreeCashFlowToIndustry
	 * @return double
	 */
	public function getPercentagePriceFreeCashFlowToIndustry()
	{
		return $this->PercentagePriceFreeCashFlowToIndustry;
	}
	/**
	 * Set PercentageDebtEquityToIndustry
	 * @param double PercentageDebtEquityToIndustry
	 * @return double
	 */
	public function setPercentageDebtEquityToIndustry($_PercentageDebtEquityToIndustry)
	{
		return ($this->PercentageDebtEquityToIndustry = $_PercentageDebtEquityToIndustry);
	}
	/**
	 * Get PercentageDebtEquityToIndustry
	 * @return double
	 */
	public function getPercentageDebtEquityToIndustry()
	{
		return $this->PercentageDebtEquityToIndustry;
	}
	/**
	 * Set PercentageCurrentRatioToIndustry
	 * @param double PercentageCurrentRatioToIndustry
	 * @return double
	 */
	public function setPercentageCurrentRatioToIndustry($_PercentageCurrentRatioToIndustry)
	{
		return ($this->PercentageCurrentRatioToIndustry = $_PercentageCurrentRatioToIndustry);
	}
	/**
	 * Get PercentageCurrentRatioToIndustry
	 * @return double
	 */
	public function getPercentageCurrentRatioToIndustry()
	{
		return $this->PercentageCurrentRatioToIndustry;
	}
	/**
	 * Set PercentageGrossProfitMarginToIndustry
	 * @param double PercentageGrossProfitMarginToIndustry
	 * @return double
	 */
	public function setPercentageGrossProfitMarginToIndustry($_PercentageGrossProfitMarginToIndustry)
	{
		return ($this->PercentageGrossProfitMarginToIndustry = $_PercentageGrossProfitMarginToIndustry);
	}
	/**
	 * Get PercentageGrossProfitMarginToIndustry
	 * @return double
	 */
	public function getPercentageGrossProfitMarginToIndustry()
	{
		return $this->PercentageGrossProfitMarginToIndustry;
	}
	/**
	 * Set PercentagePreTaxProfitMarginToIndustry
	 * @param double PercentagePreTaxProfitMarginToIndustry
	 * @return double
	 */
	public function setPercentagePreTaxProfitMarginToIndustry($_PercentagePreTaxProfitMarginToIndustry)
	{
		return ($this->PercentagePreTaxProfitMarginToIndustry = $_PercentagePreTaxProfitMarginToIndustry);
	}
	/**
	 * Get PercentagePreTaxProfitMarginToIndustry
	 * @return double
	 */
	public function getPercentagePreTaxProfitMarginToIndustry()
	{
		return $this->PercentagePreTaxProfitMarginToIndustry;
	}
	/**
	 * Set PercentagePostTaxProfitMarginToIndustry
	 * @param double PercentagePostTaxProfitMarginToIndustry
	 * @return double
	 */
	public function setPercentagePostTaxProfitMarginToIndustry($_PercentagePostTaxProfitMarginToIndustry)
	{
		return ($this->PercentagePostTaxProfitMarginToIndustry = $_PercentagePostTaxProfitMarginToIndustry);
	}
	/**
	 * Get PercentagePostTaxProfitMarginToIndustry
	 * @return double
	 */
	public function getPercentagePostTaxProfitMarginToIndustry()
	{
		return $this->PercentagePostTaxProfitMarginToIndustry;
	}
	/**
	 * Set PercentageNetProfitMarginToIndustry
	 * @param double PercentageNetProfitMarginToIndustry
	 * @return double
	 */
	public function setPercentageNetProfitMarginToIndustry($_PercentageNetProfitMarginToIndustry)
	{
		return ($this->PercentageNetProfitMarginToIndustry = $_PercentageNetProfitMarginToIndustry);
	}
	/**
	 * Get PercentageNetProfitMarginToIndustry
	 * @return double
	 */
	public function getPercentageNetProfitMarginToIndustry()
	{
		return $this->PercentageNetProfitMarginToIndustry;
	}
	/**
	 * Set PercentageReturnOnEquityToIndustry
	 * @param double PercentageReturnOnEquityToIndustry
	 * @return double
	 */
	public function setPercentageReturnOnEquityToIndustry($_PercentageReturnOnEquityToIndustry)
	{
		return ($this->PercentageReturnOnEquityToIndustry = $_PercentageReturnOnEquityToIndustry);
	}
	/**
	 * Get PercentageReturnOnEquityToIndustry
	 * @return double
	 */
	public function getPercentageReturnOnEquityToIndustry()
	{
		return $this->PercentageReturnOnEquityToIndustry;
	}
	/**
	 * Set PercentageLeverageRatioToIndustry
	 * @param double PercentageLeverageRatioToIndustry
	 * @return double
	 */
	public function setPercentageLeverageRatioToIndustry($_PercentageLeverageRatioToIndustry)
	{
		return ($this->PercentageLeverageRatioToIndustry = $_PercentageLeverageRatioToIndustry);
	}
	/**
	 * Get PercentageLeverageRatioToIndustry
	 * @return double
	 */
	public function getPercentageLeverageRatioToIndustry()
	{
		return $this->PercentageLeverageRatioToIndustry;
	}
	/**
	 * Set PercentageAssetTurnoverToIndustry
	 * @param double PercentageAssetTurnoverToIndustry
	 * @return double
	 */
	public function setPercentageAssetTurnoverToIndustry($_PercentageAssetTurnoverToIndustry)
	{
		return ($this->PercentageAssetTurnoverToIndustry = $_PercentageAssetTurnoverToIndustry);
	}
	/**
	 * Get PercentageAssetTurnoverToIndustry
	 * @return double
	 */
	public function getPercentageAssetTurnoverToIndustry()
	{
		return $this->PercentageAssetTurnoverToIndustry;
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