<?php
/**
 * Class file for XiFinancialsTypeStockHoldersEquity
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeStockHoldersEquity
 * @date 08/07/2012
 */
class XiFinancialsTypeStockHoldersEquity extends XiFinancialsWsdlClass
{
	/**
	 * The PreferredStockEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreferredStockEquity;
	/**
	 * The CommonStockEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CommonStockEquity;
	/**
	 * The CommonPar
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CommonPar;
	/**
	 * The AdditionalPaidInCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AdditionalPaidInCapital;
	/**
	 * The CumulativeTranslationAdjustment
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CumulativeTranslationAdjustment;
	/**
	 * The RetainedEarnings
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RetainedEarnings;
	/**
	 * The TreasuryStock
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TreasuryStock;
	/**
	 * The OtherEquityAdjustments
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherEquityAdjustments;
	/**
	 * The TotalCapitalization
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalCapitalization;
	/**
	 * The TotalEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalEquity;
	/**
	 * The TotalLiabilitiesAndStockEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalLiabilitiesAndStockEquity;
	/**
	 * The CashFlow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashFlow;
	/**
	 * The WorkingCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $WorkingCapital;
	/**
	 * The FreeCashFlow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FreeCashFlow;
	/**
	 * The InvestedCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InvestedCapital;
	/**
	 * Constructor
	 * @param double PreferredStockEquity
	 * @param double CommonStockEquity
	 * @param double CommonPar
	 * @param double AdditionalPaidInCapital
	 * @param double CumulativeTranslationAdjustment
	 * @param double RetainedEarnings
	 * @param double TreasuryStock
	 * @param double OtherEquityAdjustments
	 * @param double TotalCapitalization
	 * @param double TotalEquity
	 * @param double TotalLiabilitiesAndStockEquity
	 * @param double CashFlow
	 * @param double WorkingCapital
	 * @param double FreeCashFlow
	 * @param double InvestedCapital
	 * @return XiFinancialsTypeStockHoldersEquity
	 */
	public function __construct($_PreferredStockEquity,$_CommonStockEquity,$_CommonPar,$_AdditionalPaidInCapital,$_CumulativeTranslationAdjustment,$_RetainedEarnings,$_TreasuryStock,$_OtherEquityAdjustments,$_TotalCapitalization,$_TotalEquity,$_TotalLiabilitiesAndStockEquity,$_CashFlow,$_WorkingCapital,$_FreeCashFlow,$_InvestedCapital)
	{
		parent::__construct(array('PreferredStockEquity'=>$_PreferredStockEquity,'CommonStockEquity'=>$_CommonStockEquity,'CommonPar'=>$_CommonPar,'AdditionalPaidInCapital'=>$_AdditionalPaidInCapital,'CumulativeTranslationAdjustment'=>$_CumulativeTranslationAdjustment,'RetainedEarnings'=>$_RetainedEarnings,'TreasuryStock'=>$_TreasuryStock,'OtherEquityAdjustments'=>$_OtherEquityAdjustments,'TotalCapitalization'=>$_TotalCapitalization,'TotalEquity'=>$_TotalEquity,'TotalLiabilitiesAndStockEquity'=>$_TotalLiabilitiesAndStockEquity,'CashFlow'=>$_CashFlow,'WorkingCapital'=>$_WorkingCapital,'FreeCashFlow'=>$_FreeCashFlow,'InvestedCapital'=>$_InvestedCapital));
	}
	/**
	 * Set PreferredStockEquity
	 * @param double PreferredStockEquity
	 * @return double
	 */
	public function setPreferredStockEquity($_PreferredStockEquity)
	{
		return ($this->PreferredStockEquity = $_PreferredStockEquity);
	}
	/**
	 * Get PreferredStockEquity
	 * @return double
	 */
	public function getPreferredStockEquity()
	{
		return $this->PreferredStockEquity;
	}
	/**
	 * Set CommonStockEquity
	 * @param double CommonStockEquity
	 * @return double
	 */
	public function setCommonStockEquity($_CommonStockEquity)
	{
		return ($this->CommonStockEquity = $_CommonStockEquity);
	}
	/**
	 * Get CommonStockEquity
	 * @return double
	 */
	public function getCommonStockEquity()
	{
		return $this->CommonStockEquity;
	}
	/**
	 * Set CommonPar
	 * @param double CommonPar
	 * @return double
	 */
	public function setCommonPar($_CommonPar)
	{
		return ($this->CommonPar = $_CommonPar);
	}
	/**
	 * Get CommonPar
	 * @return double
	 */
	public function getCommonPar()
	{
		return $this->CommonPar;
	}
	/**
	 * Set AdditionalPaidInCapital
	 * @param double AdditionalPaidInCapital
	 * @return double
	 */
	public function setAdditionalPaidInCapital($_AdditionalPaidInCapital)
	{
		return ($this->AdditionalPaidInCapital = $_AdditionalPaidInCapital);
	}
	/**
	 * Get AdditionalPaidInCapital
	 * @return double
	 */
	public function getAdditionalPaidInCapital()
	{
		return $this->AdditionalPaidInCapital;
	}
	/**
	 * Set CumulativeTranslationAdjustment
	 * @param double CumulativeTranslationAdjustment
	 * @return double
	 */
	public function setCumulativeTranslationAdjustment($_CumulativeTranslationAdjustment)
	{
		return ($this->CumulativeTranslationAdjustment = $_CumulativeTranslationAdjustment);
	}
	/**
	 * Get CumulativeTranslationAdjustment
	 * @return double
	 */
	public function getCumulativeTranslationAdjustment()
	{
		return $this->CumulativeTranslationAdjustment;
	}
	/**
	 * Set RetainedEarnings
	 * @param double RetainedEarnings
	 * @return double
	 */
	public function setRetainedEarnings($_RetainedEarnings)
	{
		return ($this->RetainedEarnings = $_RetainedEarnings);
	}
	/**
	 * Get RetainedEarnings
	 * @return double
	 */
	public function getRetainedEarnings()
	{
		return $this->RetainedEarnings;
	}
	/**
	 * Set TreasuryStock
	 * @param double TreasuryStock
	 * @return double
	 */
	public function setTreasuryStock($_TreasuryStock)
	{
		return ($this->TreasuryStock = $_TreasuryStock);
	}
	/**
	 * Get TreasuryStock
	 * @return double
	 */
	public function getTreasuryStock()
	{
		return $this->TreasuryStock;
	}
	/**
	 * Set OtherEquityAdjustments
	 * @param double OtherEquityAdjustments
	 * @return double
	 */
	public function setOtherEquityAdjustments($_OtherEquityAdjustments)
	{
		return ($this->OtherEquityAdjustments = $_OtherEquityAdjustments);
	}
	/**
	 * Get OtherEquityAdjustments
	 * @return double
	 */
	public function getOtherEquityAdjustments()
	{
		return $this->OtherEquityAdjustments;
	}
	/**
	 * Set TotalCapitalization
	 * @param double TotalCapitalization
	 * @return double
	 */
	public function setTotalCapitalization($_TotalCapitalization)
	{
		return ($this->TotalCapitalization = $_TotalCapitalization);
	}
	/**
	 * Get TotalCapitalization
	 * @return double
	 */
	public function getTotalCapitalization()
	{
		return $this->TotalCapitalization;
	}
	/**
	 * Set TotalEquity
	 * @param double TotalEquity
	 * @return double
	 */
	public function setTotalEquity($_TotalEquity)
	{
		return ($this->TotalEquity = $_TotalEquity);
	}
	/**
	 * Get TotalEquity
	 * @return double
	 */
	public function getTotalEquity()
	{
		return $this->TotalEquity;
	}
	/**
	 * Set TotalLiabilitiesAndStockEquity
	 * @param double TotalLiabilitiesAndStockEquity
	 * @return double
	 */
	public function setTotalLiabilitiesAndStockEquity($_TotalLiabilitiesAndStockEquity)
	{
		return ($this->TotalLiabilitiesAndStockEquity = $_TotalLiabilitiesAndStockEquity);
	}
	/**
	 * Get TotalLiabilitiesAndStockEquity
	 * @return double
	 */
	public function getTotalLiabilitiesAndStockEquity()
	{
		return $this->TotalLiabilitiesAndStockEquity;
	}
	/**
	 * Set CashFlow
	 * @param double CashFlow
	 * @return double
	 */
	public function setCashFlow($_CashFlow)
	{
		return ($this->CashFlow = $_CashFlow);
	}
	/**
	 * Get CashFlow
	 * @return double
	 */
	public function getCashFlow()
	{
		return $this->CashFlow;
	}
	/**
	 * Set WorkingCapital
	 * @param double WorkingCapital
	 * @return double
	 */
	public function setWorkingCapital($_WorkingCapital)
	{
		return ($this->WorkingCapital = $_WorkingCapital);
	}
	/**
	 * Get WorkingCapital
	 * @return double
	 */
	public function getWorkingCapital()
	{
		return $this->WorkingCapital;
	}
	/**
	 * Set FreeCashFlow
	 * @param double FreeCashFlow
	 * @return double
	 */
	public function setFreeCashFlow($_FreeCashFlow)
	{
		return ($this->FreeCashFlow = $_FreeCashFlow);
	}
	/**
	 * Get FreeCashFlow
	 * @return double
	 */
	public function getFreeCashFlow()
	{
		return $this->FreeCashFlow;
	}
	/**
	 * Set InvestedCapital
	 * @param double InvestedCapital
	 * @return double
	 */
	public function setInvestedCapital($_InvestedCapital)
	{
		return ($this->InvestedCapital = $_InvestedCapital);
	}
	/**
	 * Get InvestedCapital
	 * @return double
	 */
	public function getInvestedCapital()
	{
		return $this->InvestedCapital;
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