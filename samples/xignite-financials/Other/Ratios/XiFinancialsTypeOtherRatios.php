<?php
/**
 * Class file for XiFinancialsTypeOtherRatios
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeOtherRatios
 * @date 08/07/2012
 */
class XiFinancialsTypeOtherRatios extends XiFinancialsTypeCommon
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
	 * The QuickRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $QuickRatio;
	/**
	 * The CurrentRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CurrentRatio;
	/**
	 * The PayoutRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PayoutRatio;
	/**
	 * The TotalDebtToEquityRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalDebtToEquityRatio;
	/**
	 * The LongtermDebtToTotalCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongtermDebtToTotalCapital;
	/**
	 * The LeverageRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LeverageRatio;
	/**
	 * The AssetTurnover
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AssetTurnover;
	/**
	 * The CashAsAPercentageOfRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashAsAPercentageOfRevenue;
	/**
	 * The ReceivablesAsAPercentageOfRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReceivablesAsAPercentageOfRevenue;
	/**
	 * The SGAndAExpenseAsAPercentageOfRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SGAndAExpenseAsAPercentageOfRevenue;
	/**
	 * The RAndDExpenseAsAPercentageOfRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RAndDExpenseAsAPercentageOfRevenue;
	/**
	 * The RevenuePerCash
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RevenuePerCash;
	/**
	 * The RevenuePerPlant
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RevenuePerPlant;
	/**
	 * The RevenuePerCommonEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RevenuePerCommonEquity;
	/**
	 * The RevenuePerInvestedCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RevenuePerInvestedCapital;
	/**
	 * The ReceivableTurnover
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReceivableTurnover;
	/**
	 * The InventoryTurnover
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InventoryTurnover;
	/**
	 * The ReceivablesPerDaySales
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReceivablesPerDaySales;
	/**
	 * The SalesPerReceivables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SalesPerReceivables;
	/**
	 * The SalesPerInventory
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SalesPerInventory;
	/**
	 * The RevenueToAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RevenueToAssets;
	/**
	 * The NumberOfDaysCostOfGoodsSoldInInventory
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NumberOfDaysCostOfGoodsSoldInInventory;
	/**
	 * The CurrentAssetsPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CurrentAssetsPerShare;
	/**
	 * The TotalAssetsPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalAssetsPerShare;
	/**
	 * The IntangiblesAsPercentageBookValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IntangiblesAsPercentageBookValue;
	/**
	 * The InventoryAsPercentageRevenue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $InventoryAsPercentageRevenue;
	/**
	 * The LongTermDebtPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermDebtPerShare;
	/**
	 * The CurrentLiabilitiesPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CurrentLiabilitiesPerShare;
	/**
	 * The CashPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashPerShare;
	/**
	 * The LongTermDebtToEquityRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermDebtToEquityRatio;
	/**
	 * The LongTermDebtAsAPercentageOfInvestedCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermDebtAsAPercentageOfInvestedCapital;
	/**
	 * The LongTermDebtAsAPercentageOfTotalLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermDebtAsAPercentageOfTotalLiabilities;
	/**
	 * The TotalLiabilitiesAsAPercentageOfTotalAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalLiabilitiesAsAPercentageOfTotalAssets;
	/**
	 * The WorkingCapitalAsAPercentageOfEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $WorkingCapitalAsAPercentageOfEquity;
	/**
	 * The RevenuePerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RevenuePerShare;
	/**
	 * The BookValuePerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $BookValuePerShare;
	/**
	 * The TangibleBookValuePerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TangibleBookValuePerShare;
	/**
	 * The PriceToRevenueRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PriceToRevenueRatio;
	/**
	 * The PriceToEquityRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PriceToEquityRatio;
	/**
	 * The PriceToTangibleBookRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PriceToTangibleBookRatio;
	/**
	 * The WorkingCapitalAsPercentageOfPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $WorkingCapitalAsPercentageOfPrice;
	/**
	 * The WorkingCapitalPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $WorkingCapitalPerShare;
	/**
	 * The CashFlowPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CashFlowPerShare;
	/**
	 * The FreeCashFlowPerShare
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $FreeCashFlowPerShare;
	/**
	 * The ReturnOnStockEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReturnOnStockEquity;
	/**
	 * The ReturnOnInvestedCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReturnOnInvestedCapital;
	/**
	 * The ReturnOnAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ReturnOnAssets;
	/**
	 * The PriceCashFlowRatio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PriceCashFlowRatio;
	/**
	 * The PriceFreeCashFlowratio
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PriceFreeCashFlowratio;
	/**
	 * The SalesPerEmployee
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SalesPerEmployee;
	/**
	 * Constructor
	 * @param XiFinancialsTypeSecurity Security
	 * @param string AsOfDate
	 * @param string ReportDate
	 * @param string FiscalQuarter
	 * @param XiFinancialsTypeReportTypes ReportType
	 * @param double QuickRatio
	 * @param double CurrentRatio
	 * @param double PayoutRatio
	 * @param double TotalDebtToEquityRatio
	 * @param double LongtermDebtToTotalCapital
	 * @param double LeverageRatio
	 * @param double AssetTurnover
	 * @param double CashAsAPercentageOfRevenue
	 * @param double ReceivablesAsAPercentageOfRevenue
	 * @param double SGAndAExpenseAsAPercentageOfRevenue
	 * @param double RAndDExpenseAsAPercentageOfRevenue
	 * @param double RevenuePerCash
	 * @param double RevenuePerPlant
	 * @param double RevenuePerCommonEquity
	 * @param double RevenuePerInvestedCapital
	 * @param double ReceivableTurnover
	 * @param double InventoryTurnover
	 * @param double ReceivablesPerDaySales
	 * @param double SalesPerReceivables
	 * @param double SalesPerInventory
	 * @param double RevenueToAssets
	 * @param double NumberOfDaysCostOfGoodsSoldInInventory
	 * @param double CurrentAssetsPerShare
	 * @param double TotalAssetsPerShare
	 * @param double IntangiblesAsPercentageBookValue
	 * @param double InventoryAsPercentageRevenue
	 * @param double LongTermDebtPerShare
	 * @param double CurrentLiabilitiesPerShare
	 * @param double CashPerShare
	 * @param double LongTermDebtToEquityRatio
	 * @param double LongTermDebtAsAPercentageOfInvestedCapital
	 * @param double LongTermDebtAsAPercentageOfTotalLiabilities
	 * @param double TotalLiabilitiesAsAPercentageOfTotalAssets
	 * @param double WorkingCapitalAsAPercentageOfEquity
	 * @param double RevenuePerShare
	 * @param double BookValuePerShare
	 * @param double TangibleBookValuePerShare
	 * @param double PriceToRevenueRatio
	 * @param double PriceToEquityRatio
	 * @param double PriceToTangibleBookRatio
	 * @param double WorkingCapitalAsPercentageOfPrice
	 * @param double WorkingCapitalPerShare
	 * @param double CashFlowPerShare
	 * @param double FreeCashFlowPerShare
	 * @param double ReturnOnStockEquity
	 * @param double ReturnOnInvestedCapital
	 * @param double ReturnOnAssets
	 * @param double PriceCashFlowRatio
	 * @param double PriceFreeCashFlowratio
	 * @param double SalesPerEmployee
	 * @return XiFinancialsTypeOtherRatios
	 */
	public function __construct($_Security = null,$_AsOfDate = null,$_ReportDate = null,$_FiscalQuarter = null,$_ReportType,$_QuickRatio,$_CurrentRatio,$_PayoutRatio,$_TotalDebtToEquityRatio,$_LongtermDebtToTotalCapital,$_LeverageRatio,$_AssetTurnover,$_CashAsAPercentageOfRevenue,$_ReceivablesAsAPercentageOfRevenue,$_SGAndAExpenseAsAPercentageOfRevenue,$_RAndDExpenseAsAPercentageOfRevenue,$_RevenuePerCash,$_RevenuePerPlant,$_RevenuePerCommonEquity,$_RevenuePerInvestedCapital,$_ReceivableTurnover,$_InventoryTurnover,$_ReceivablesPerDaySales,$_SalesPerReceivables,$_SalesPerInventory,$_RevenueToAssets,$_NumberOfDaysCostOfGoodsSoldInInventory,$_CurrentAssetsPerShare,$_TotalAssetsPerShare,$_IntangiblesAsPercentageBookValue,$_InventoryAsPercentageRevenue,$_LongTermDebtPerShare,$_CurrentLiabilitiesPerShare,$_CashPerShare,$_LongTermDebtToEquityRatio,$_LongTermDebtAsAPercentageOfInvestedCapital,$_LongTermDebtAsAPercentageOfTotalLiabilities,$_TotalLiabilitiesAsAPercentageOfTotalAssets,$_WorkingCapitalAsAPercentageOfEquity,$_RevenuePerShare,$_BookValuePerShare,$_TangibleBookValuePerShare,$_PriceToRevenueRatio,$_PriceToEquityRatio,$_PriceToTangibleBookRatio,$_WorkingCapitalAsPercentageOfPrice,$_WorkingCapitalPerShare,$_CashFlowPerShare,$_FreeCashFlowPerShare,$_ReturnOnStockEquity,$_ReturnOnInvestedCapital,$_ReturnOnAssets,$_PriceCashFlowRatio,$_PriceFreeCashFlowratio,$_SalesPerEmployee)
	{
		XiFinancialsWsdlClass::__construct(array('Security'=>$_Security,'AsOfDate'=>$_AsOfDate,'ReportDate'=>$_ReportDate,'FiscalQuarter'=>$_FiscalQuarter,'ReportType'=>$_ReportType,'QuickRatio'=>$_QuickRatio,'CurrentRatio'=>$_CurrentRatio,'PayoutRatio'=>$_PayoutRatio,'TotalDebtToEquityRatio'=>$_TotalDebtToEquityRatio,'LongtermDebtToTotalCapital'=>$_LongtermDebtToTotalCapital,'LeverageRatio'=>$_LeverageRatio,'AssetTurnover'=>$_AssetTurnover,'CashAsAPercentageOfRevenue'=>$_CashAsAPercentageOfRevenue,'ReceivablesAsAPercentageOfRevenue'=>$_ReceivablesAsAPercentageOfRevenue,'SGAndAExpenseAsAPercentageOfRevenue'=>$_SGAndAExpenseAsAPercentageOfRevenue,'RAndDExpenseAsAPercentageOfRevenue'=>$_RAndDExpenseAsAPercentageOfRevenue,'RevenuePerCash'=>$_RevenuePerCash,'RevenuePerPlant'=>$_RevenuePerPlant,'RevenuePerCommonEquity'=>$_RevenuePerCommonEquity,'RevenuePerInvestedCapital'=>$_RevenuePerInvestedCapital,'ReceivableTurnover'=>$_ReceivableTurnover,'InventoryTurnover'=>$_InventoryTurnover,'ReceivablesPerDaySales'=>$_ReceivablesPerDaySales,'SalesPerReceivables'=>$_SalesPerReceivables,'SalesPerInventory'=>$_SalesPerInventory,'RevenueToAssets'=>$_RevenueToAssets,'NumberOfDaysCostOfGoodsSoldInInventory'=>$_NumberOfDaysCostOfGoodsSoldInInventory,'CurrentAssetsPerShare'=>$_CurrentAssetsPerShare,'TotalAssetsPerShare'=>$_TotalAssetsPerShare,'IntangiblesAsPercentageBookValue'=>$_IntangiblesAsPercentageBookValue,'InventoryAsPercentageRevenue'=>$_InventoryAsPercentageRevenue,'LongTermDebtPerShare'=>$_LongTermDebtPerShare,'CurrentLiabilitiesPerShare'=>$_CurrentLiabilitiesPerShare,'CashPerShare'=>$_CashPerShare,'LongTermDebtToEquityRatio'=>$_LongTermDebtToEquityRatio,'LongTermDebtAsAPercentageOfInvestedCapital'=>$_LongTermDebtAsAPercentageOfInvestedCapital,'LongTermDebtAsAPercentageOfTotalLiabilities'=>$_LongTermDebtAsAPercentageOfTotalLiabilities,'TotalLiabilitiesAsAPercentageOfTotalAssets'=>$_TotalLiabilitiesAsAPercentageOfTotalAssets,'WorkingCapitalAsAPercentageOfEquity'=>$_WorkingCapitalAsAPercentageOfEquity,'RevenuePerShare'=>$_RevenuePerShare,'BookValuePerShare'=>$_BookValuePerShare,'TangibleBookValuePerShare'=>$_TangibleBookValuePerShare,'PriceToRevenueRatio'=>$_PriceToRevenueRatio,'PriceToEquityRatio'=>$_PriceToEquityRatio,'PriceToTangibleBookRatio'=>$_PriceToTangibleBookRatio,'WorkingCapitalAsPercentageOfPrice'=>$_WorkingCapitalAsPercentageOfPrice,'WorkingCapitalPerShare'=>$_WorkingCapitalPerShare,'CashFlowPerShare'=>$_CashFlowPerShare,'FreeCashFlowPerShare'=>$_FreeCashFlowPerShare,'ReturnOnStockEquity'=>$_ReturnOnStockEquity,'ReturnOnInvestedCapital'=>$_ReturnOnInvestedCapital,'ReturnOnAssets'=>$_ReturnOnAssets,'PriceCashFlowRatio'=>$_PriceCashFlowRatio,'PriceFreeCashFlowratio'=>$_PriceFreeCashFlowratio,'SalesPerEmployee'=>$_SalesPerEmployee));
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
	 * Set QuickRatio
	 * @param double QuickRatio
	 * @return double
	 */
	public function setQuickRatio($_QuickRatio)
	{
		return ($this->QuickRatio = $_QuickRatio);
	}
	/**
	 * Get QuickRatio
	 * @return double
	 */
	public function getQuickRatio()
	{
		return $this->QuickRatio;
	}
	/**
	 * Set CurrentRatio
	 * @param double CurrentRatio
	 * @return double
	 */
	public function setCurrentRatio($_CurrentRatio)
	{
		return ($this->CurrentRatio = $_CurrentRatio);
	}
	/**
	 * Get CurrentRatio
	 * @return double
	 */
	public function getCurrentRatio()
	{
		return $this->CurrentRatio;
	}
	/**
	 * Set PayoutRatio
	 * @param double PayoutRatio
	 * @return double
	 */
	public function setPayoutRatio($_PayoutRatio)
	{
		return ($this->PayoutRatio = $_PayoutRatio);
	}
	/**
	 * Get PayoutRatio
	 * @return double
	 */
	public function getPayoutRatio()
	{
		return $this->PayoutRatio;
	}
	/**
	 * Set TotalDebtToEquityRatio
	 * @param double TotalDebtToEquityRatio
	 * @return double
	 */
	public function setTotalDebtToEquityRatio($_TotalDebtToEquityRatio)
	{
		return ($this->TotalDebtToEquityRatio = $_TotalDebtToEquityRatio);
	}
	/**
	 * Get TotalDebtToEquityRatio
	 * @return double
	 */
	public function getTotalDebtToEquityRatio()
	{
		return $this->TotalDebtToEquityRatio;
	}
	/**
	 * Set LongtermDebtToTotalCapital
	 * @param double LongtermDebtToTotalCapital
	 * @return double
	 */
	public function setLongtermDebtToTotalCapital($_LongtermDebtToTotalCapital)
	{
		return ($this->LongtermDebtToTotalCapital = $_LongtermDebtToTotalCapital);
	}
	/**
	 * Get LongtermDebtToTotalCapital
	 * @return double
	 */
	public function getLongtermDebtToTotalCapital()
	{
		return $this->LongtermDebtToTotalCapital;
	}
	/**
	 * Set LeverageRatio
	 * @param double LeverageRatio
	 * @return double
	 */
	public function setLeverageRatio($_LeverageRatio)
	{
		return ($this->LeverageRatio = $_LeverageRatio);
	}
	/**
	 * Get LeverageRatio
	 * @return double
	 */
	public function getLeverageRatio()
	{
		return $this->LeverageRatio;
	}
	/**
	 * Set AssetTurnover
	 * @param double AssetTurnover
	 * @return double
	 */
	public function setAssetTurnover($_AssetTurnover)
	{
		return ($this->AssetTurnover = $_AssetTurnover);
	}
	/**
	 * Get AssetTurnover
	 * @return double
	 */
	public function getAssetTurnover()
	{
		return $this->AssetTurnover;
	}
	/**
	 * Set CashAsAPercentageOfRevenue
	 * @param double CashAsAPercentageOfRevenue
	 * @return double
	 */
	public function setCashAsAPercentageOfRevenue($_CashAsAPercentageOfRevenue)
	{
		return ($this->CashAsAPercentageOfRevenue = $_CashAsAPercentageOfRevenue);
	}
	/**
	 * Get CashAsAPercentageOfRevenue
	 * @return double
	 */
	public function getCashAsAPercentageOfRevenue()
	{
		return $this->CashAsAPercentageOfRevenue;
	}
	/**
	 * Set ReceivablesAsAPercentageOfRevenue
	 * @param double ReceivablesAsAPercentageOfRevenue
	 * @return double
	 */
	public function setReceivablesAsAPercentageOfRevenue($_ReceivablesAsAPercentageOfRevenue)
	{
		return ($this->ReceivablesAsAPercentageOfRevenue = $_ReceivablesAsAPercentageOfRevenue);
	}
	/**
	 * Get ReceivablesAsAPercentageOfRevenue
	 * @return double
	 */
	public function getReceivablesAsAPercentageOfRevenue()
	{
		return $this->ReceivablesAsAPercentageOfRevenue;
	}
	/**
	 * Set SGAndAExpenseAsAPercentageOfRevenue
	 * @param double SGAndAExpenseAsAPercentageOfRevenue
	 * @return double
	 */
	public function setSGAndAExpenseAsAPercentageOfRevenue($_SGAndAExpenseAsAPercentageOfRevenue)
	{
		return ($this->SGAndAExpenseAsAPercentageOfRevenue = $_SGAndAExpenseAsAPercentageOfRevenue);
	}
	/**
	 * Get SGAndAExpenseAsAPercentageOfRevenue
	 * @return double
	 */
	public function getSGAndAExpenseAsAPercentageOfRevenue()
	{
		return $this->SGAndAExpenseAsAPercentageOfRevenue;
	}
	/**
	 * Set RAndDExpenseAsAPercentageOfRevenue
	 * @param double RAndDExpenseAsAPercentageOfRevenue
	 * @return double
	 */
	public function setRAndDExpenseAsAPercentageOfRevenue($_RAndDExpenseAsAPercentageOfRevenue)
	{
		return ($this->RAndDExpenseAsAPercentageOfRevenue = $_RAndDExpenseAsAPercentageOfRevenue);
	}
	/**
	 * Get RAndDExpenseAsAPercentageOfRevenue
	 * @return double
	 */
	public function getRAndDExpenseAsAPercentageOfRevenue()
	{
		return $this->RAndDExpenseAsAPercentageOfRevenue;
	}
	/**
	 * Set RevenuePerCash
	 * @param double RevenuePerCash
	 * @return double
	 */
	public function setRevenuePerCash($_RevenuePerCash)
	{
		return ($this->RevenuePerCash = $_RevenuePerCash);
	}
	/**
	 * Get RevenuePerCash
	 * @return double
	 */
	public function getRevenuePerCash()
	{
		return $this->RevenuePerCash;
	}
	/**
	 * Set RevenuePerPlant
	 * @param double RevenuePerPlant
	 * @return double
	 */
	public function setRevenuePerPlant($_RevenuePerPlant)
	{
		return ($this->RevenuePerPlant = $_RevenuePerPlant);
	}
	/**
	 * Get RevenuePerPlant
	 * @return double
	 */
	public function getRevenuePerPlant()
	{
		return $this->RevenuePerPlant;
	}
	/**
	 * Set RevenuePerCommonEquity
	 * @param double RevenuePerCommonEquity
	 * @return double
	 */
	public function setRevenuePerCommonEquity($_RevenuePerCommonEquity)
	{
		return ($this->RevenuePerCommonEquity = $_RevenuePerCommonEquity);
	}
	/**
	 * Get RevenuePerCommonEquity
	 * @return double
	 */
	public function getRevenuePerCommonEquity()
	{
		return $this->RevenuePerCommonEquity;
	}
	/**
	 * Set RevenuePerInvestedCapital
	 * @param double RevenuePerInvestedCapital
	 * @return double
	 */
	public function setRevenuePerInvestedCapital($_RevenuePerInvestedCapital)
	{
		return ($this->RevenuePerInvestedCapital = $_RevenuePerInvestedCapital);
	}
	/**
	 * Get RevenuePerInvestedCapital
	 * @return double
	 */
	public function getRevenuePerInvestedCapital()
	{
		return $this->RevenuePerInvestedCapital;
	}
	/**
	 * Set ReceivableTurnover
	 * @param double ReceivableTurnover
	 * @return double
	 */
	public function setReceivableTurnover($_ReceivableTurnover)
	{
		return ($this->ReceivableTurnover = $_ReceivableTurnover);
	}
	/**
	 * Get ReceivableTurnover
	 * @return double
	 */
	public function getReceivableTurnover()
	{
		return $this->ReceivableTurnover;
	}
	/**
	 * Set InventoryTurnover
	 * @param double InventoryTurnover
	 * @return double
	 */
	public function setInventoryTurnover($_InventoryTurnover)
	{
		return ($this->InventoryTurnover = $_InventoryTurnover);
	}
	/**
	 * Get InventoryTurnover
	 * @return double
	 */
	public function getInventoryTurnover()
	{
		return $this->InventoryTurnover;
	}
	/**
	 * Set ReceivablesPerDaySales
	 * @param double ReceivablesPerDaySales
	 * @return double
	 */
	public function setReceivablesPerDaySales($_ReceivablesPerDaySales)
	{
		return ($this->ReceivablesPerDaySales = $_ReceivablesPerDaySales);
	}
	/**
	 * Get ReceivablesPerDaySales
	 * @return double
	 */
	public function getReceivablesPerDaySales()
	{
		return $this->ReceivablesPerDaySales;
	}
	/**
	 * Set SalesPerReceivables
	 * @param double SalesPerReceivables
	 * @return double
	 */
	public function setSalesPerReceivables($_SalesPerReceivables)
	{
		return ($this->SalesPerReceivables = $_SalesPerReceivables);
	}
	/**
	 * Get SalesPerReceivables
	 * @return double
	 */
	public function getSalesPerReceivables()
	{
		return $this->SalesPerReceivables;
	}
	/**
	 * Set SalesPerInventory
	 * @param double SalesPerInventory
	 * @return double
	 */
	public function setSalesPerInventory($_SalesPerInventory)
	{
		return ($this->SalesPerInventory = $_SalesPerInventory);
	}
	/**
	 * Get SalesPerInventory
	 * @return double
	 */
	public function getSalesPerInventory()
	{
		return $this->SalesPerInventory;
	}
	/**
	 * Set RevenueToAssets
	 * @param double RevenueToAssets
	 * @return double
	 */
	public function setRevenueToAssets($_RevenueToAssets)
	{
		return ($this->RevenueToAssets = $_RevenueToAssets);
	}
	/**
	 * Get RevenueToAssets
	 * @return double
	 */
	public function getRevenueToAssets()
	{
		return $this->RevenueToAssets;
	}
	/**
	 * Set NumberOfDaysCostOfGoodsSoldInInventory
	 * @param double NumberOfDaysCostOfGoodsSoldInInventory
	 * @return double
	 */
	public function setNumberOfDaysCostOfGoodsSoldInInventory($_NumberOfDaysCostOfGoodsSoldInInventory)
	{
		return ($this->NumberOfDaysCostOfGoodsSoldInInventory = $_NumberOfDaysCostOfGoodsSoldInInventory);
	}
	/**
	 * Get NumberOfDaysCostOfGoodsSoldInInventory
	 * @return double
	 */
	public function getNumberOfDaysCostOfGoodsSoldInInventory()
	{
		return $this->NumberOfDaysCostOfGoodsSoldInInventory;
	}
	/**
	 * Set CurrentAssetsPerShare
	 * @param double CurrentAssetsPerShare
	 * @return double
	 */
	public function setCurrentAssetsPerShare($_CurrentAssetsPerShare)
	{
		return ($this->CurrentAssetsPerShare = $_CurrentAssetsPerShare);
	}
	/**
	 * Get CurrentAssetsPerShare
	 * @return double
	 */
	public function getCurrentAssetsPerShare()
	{
		return $this->CurrentAssetsPerShare;
	}
	/**
	 * Set TotalAssetsPerShare
	 * @param double TotalAssetsPerShare
	 * @return double
	 */
	public function setTotalAssetsPerShare($_TotalAssetsPerShare)
	{
		return ($this->TotalAssetsPerShare = $_TotalAssetsPerShare);
	}
	/**
	 * Get TotalAssetsPerShare
	 * @return double
	 */
	public function getTotalAssetsPerShare()
	{
		return $this->TotalAssetsPerShare;
	}
	/**
	 * Set IntangiblesAsPercentageBookValue
	 * @param double IntangiblesAsPercentageBookValue
	 * @return double
	 */
	public function setIntangiblesAsPercentageBookValue($_IntangiblesAsPercentageBookValue)
	{
		return ($this->IntangiblesAsPercentageBookValue = $_IntangiblesAsPercentageBookValue);
	}
	/**
	 * Get IntangiblesAsPercentageBookValue
	 * @return double
	 */
	public function getIntangiblesAsPercentageBookValue()
	{
		return $this->IntangiblesAsPercentageBookValue;
	}
	/**
	 * Set InventoryAsPercentageRevenue
	 * @param double InventoryAsPercentageRevenue
	 * @return double
	 */
	public function setInventoryAsPercentageRevenue($_InventoryAsPercentageRevenue)
	{
		return ($this->InventoryAsPercentageRevenue = $_InventoryAsPercentageRevenue);
	}
	/**
	 * Get InventoryAsPercentageRevenue
	 * @return double
	 */
	public function getInventoryAsPercentageRevenue()
	{
		return $this->InventoryAsPercentageRevenue;
	}
	/**
	 * Set LongTermDebtPerShare
	 * @param double LongTermDebtPerShare
	 * @return double
	 */
	public function setLongTermDebtPerShare($_LongTermDebtPerShare)
	{
		return ($this->LongTermDebtPerShare = $_LongTermDebtPerShare);
	}
	/**
	 * Get LongTermDebtPerShare
	 * @return double
	 */
	public function getLongTermDebtPerShare()
	{
		return $this->LongTermDebtPerShare;
	}
	/**
	 * Set CurrentLiabilitiesPerShare
	 * @param double CurrentLiabilitiesPerShare
	 * @return double
	 */
	public function setCurrentLiabilitiesPerShare($_CurrentLiabilitiesPerShare)
	{
		return ($this->CurrentLiabilitiesPerShare = $_CurrentLiabilitiesPerShare);
	}
	/**
	 * Get CurrentLiabilitiesPerShare
	 * @return double
	 */
	public function getCurrentLiabilitiesPerShare()
	{
		return $this->CurrentLiabilitiesPerShare;
	}
	/**
	 * Set CashPerShare
	 * @param double CashPerShare
	 * @return double
	 */
	public function setCashPerShare($_CashPerShare)
	{
		return ($this->CashPerShare = $_CashPerShare);
	}
	/**
	 * Get CashPerShare
	 * @return double
	 */
	public function getCashPerShare()
	{
		return $this->CashPerShare;
	}
	/**
	 * Set LongTermDebtToEquityRatio
	 * @param double LongTermDebtToEquityRatio
	 * @return double
	 */
	public function setLongTermDebtToEquityRatio($_LongTermDebtToEquityRatio)
	{
		return ($this->LongTermDebtToEquityRatio = $_LongTermDebtToEquityRatio);
	}
	/**
	 * Get LongTermDebtToEquityRatio
	 * @return double
	 */
	public function getLongTermDebtToEquityRatio()
	{
		return $this->LongTermDebtToEquityRatio;
	}
	/**
	 * Set LongTermDebtAsAPercentageOfInvestedCapital
	 * @param double LongTermDebtAsAPercentageOfInvestedCapital
	 * @return double
	 */
	public function setLongTermDebtAsAPercentageOfInvestedCapital($_LongTermDebtAsAPercentageOfInvestedCapital)
	{
		return ($this->LongTermDebtAsAPercentageOfInvestedCapital = $_LongTermDebtAsAPercentageOfInvestedCapital);
	}
	/**
	 * Get LongTermDebtAsAPercentageOfInvestedCapital
	 * @return double
	 */
	public function getLongTermDebtAsAPercentageOfInvestedCapital()
	{
		return $this->LongTermDebtAsAPercentageOfInvestedCapital;
	}
	/**
	 * Set LongTermDebtAsAPercentageOfTotalLiabilities
	 * @param double LongTermDebtAsAPercentageOfTotalLiabilities
	 * @return double
	 */
	public function setLongTermDebtAsAPercentageOfTotalLiabilities($_LongTermDebtAsAPercentageOfTotalLiabilities)
	{
		return ($this->LongTermDebtAsAPercentageOfTotalLiabilities = $_LongTermDebtAsAPercentageOfTotalLiabilities);
	}
	/**
	 * Get LongTermDebtAsAPercentageOfTotalLiabilities
	 * @return double
	 */
	public function getLongTermDebtAsAPercentageOfTotalLiabilities()
	{
		return $this->LongTermDebtAsAPercentageOfTotalLiabilities;
	}
	/**
	 * Set TotalLiabilitiesAsAPercentageOfTotalAssets
	 * @param double TotalLiabilitiesAsAPercentageOfTotalAssets
	 * @return double
	 */
	public function setTotalLiabilitiesAsAPercentageOfTotalAssets($_TotalLiabilitiesAsAPercentageOfTotalAssets)
	{
		return ($this->TotalLiabilitiesAsAPercentageOfTotalAssets = $_TotalLiabilitiesAsAPercentageOfTotalAssets);
	}
	/**
	 * Get TotalLiabilitiesAsAPercentageOfTotalAssets
	 * @return double
	 */
	public function getTotalLiabilitiesAsAPercentageOfTotalAssets()
	{
		return $this->TotalLiabilitiesAsAPercentageOfTotalAssets;
	}
	/**
	 * Set WorkingCapitalAsAPercentageOfEquity
	 * @param double WorkingCapitalAsAPercentageOfEquity
	 * @return double
	 */
	public function setWorkingCapitalAsAPercentageOfEquity($_WorkingCapitalAsAPercentageOfEquity)
	{
		return ($this->WorkingCapitalAsAPercentageOfEquity = $_WorkingCapitalAsAPercentageOfEquity);
	}
	/**
	 * Get WorkingCapitalAsAPercentageOfEquity
	 * @return double
	 */
	public function getWorkingCapitalAsAPercentageOfEquity()
	{
		return $this->WorkingCapitalAsAPercentageOfEquity;
	}
	/**
	 * Set RevenuePerShare
	 * @param double RevenuePerShare
	 * @return double
	 */
	public function setRevenuePerShare($_RevenuePerShare)
	{
		return ($this->RevenuePerShare = $_RevenuePerShare);
	}
	/**
	 * Get RevenuePerShare
	 * @return double
	 */
	public function getRevenuePerShare()
	{
		return $this->RevenuePerShare;
	}
	/**
	 * Set BookValuePerShare
	 * @param double BookValuePerShare
	 * @return double
	 */
	public function setBookValuePerShare($_BookValuePerShare)
	{
		return ($this->BookValuePerShare = $_BookValuePerShare);
	}
	/**
	 * Get BookValuePerShare
	 * @return double
	 */
	public function getBookValuePerShare()
	{
		return $this->BookValuePerShare;
	}
	/**
	 * Set TangibleBookValuePerShare
	 * @param double TangibleBookValuePerShare
	 * @return double
	 */
	public function setTangibleBookValuePerShare($_TangibleBookValuePerShare)
	{
		return ($this->TangibleBookValuePerShare = $_TangibleBookValuePerShare);
	}
	/**
	 * Get TangibleBookValuePerShare
	 * @return double
	 */
	public function getTangibleBookValuePerShare()
	{
		return $this->TangibleBookValuePerShare;
	}
	/**
	 * Set PriceToRevenueRatio
	 * @param double PriceToRevenueRatio
	 * @return double
	 */
	public function setPriceToRevenueRatio($_PriceToRevenueRatio)
	{
		return ($this->PriceToRevenueRatio = $_PriceToRevenueRatio);
	}
	/**
	 * Get PriceToRevenueRatio
	 * @return double
	 */
	public function getPriceToRevenueRatio()
	{
		return $this->PriceToRevenueRatio;
	}
	/**
	 * Set PriceToEquityRatio
	 * @param double PriceToEquityRatio
	 * @return double
	 */
	public function setPriceToEquityRatio($_PriceToEquityRatio)
	{
		return ($this->PriceToEquityRatio = $_PriceToEquityRatio);
	}
	/**
	 * Get PriceToEquityRatio
	 * @return double
	 */
	public function getPriceToEquityRatio()
	{
		return $this->PriceToEquityRatio;
	}
	/**
	 * Set PriceToTangibleBookRatio
	 * @param double PriceToTangibleBookRatio
	 * @return double
	 */
	public function setPriceToTangibleBookRatio($_PriceToTangibleBookRatio)
	{
		return ($this->PriceToTangibleBookRatio = $_PriceToTangibleBookRatio);
	}
	/**
	 * Get PriceToTangibleBookRatio
	 * @return double
	 */
	public function getPriceToTangibleBookRatio()
	{
		return $this->PriceToTangibleBookRatio;
	}
	/**
	 * Set WorkingCapitalAsPercentageOfPrice
	 * @param double WorkingCapitalAsPercentageOfPrice
	 * @return double
	 */
	public function setWorkingCapitalAsPercentageOfPrice($_WorkingCapitalAsPercentageOfPrice)
	{
		return ($this->WorkingCapitalAsPercentageOfPrice = $_WorkingCapitalAsPercentageOfPrice);
	}
	/**
	 * Get WorkingCapitalAsPercentageOfPrice
	 * @return double
	 */
	public function getWorkingCapitalAsPercentageOfPrice()
	{
		return $this->WorkingCapitalAsPercentageOfPrice;
	}
	/**
	 * Set WorkingCapitalPerShare
	 * @param double WorkingCapitalPerShare
	 * @return double
	 */
	public function setWorkingCapitalPerShare($_WorkingCapitalPerShare)
	{
		return ($this->WorkingCapitalPerShare = $_WorkingCapitalPerShare);
	}
	/**
	 * Get WorkingCapitalPerShare
	 * @return double
	 */
	public function getWorkingCapitalPerShare()
	{
		return $this->WorkingCapitalPerShare;
	}
	/**
	 * Set CashFlowPerShare
	 * @param double CashFlowPerShare
	 * @return double
	 */
	public function setCashFlowPerShare($_CashFlowPerShare)
	{
		return ($this->CashFlowPerShare = $_CashFlowPerShare);
	}
	/**
	 * Get CashFlowPerShare
	 * @return double
	 */
	public function getCashFlowPerShare()
	{
		return $this->CashFlowPerShare;
	}
	/**
	 * Set FreeCashFlowPerShare
	 * @param double FreeCashFlowPerShare
	 * @return double
	 */
	public function setFreeCashFlowPerShare($_FreeCashFlowPerShare)
	{
		return ($this->FreeCashFlowPerShare = $_FreeCashFlowPerShare);
	}
	/**
	 * Get FreeCashFlowPerShare
	 * @return double
	 */
	public function getFreeCashFlowPerShare()
	{
		return $this->FreeCashFlowPerShare;
	}
	/**
	 * Set ReturnOnStockEquity
	 * @param double ReturnOnStockEquity
	 * @return double
	 */
	public function setReturnOnStockEquity($_ReturnOnStockEquity)
	{
		return ($this->ReturnOnStockEquity = $_ReturnOnStockEquity);
	}
	/**
	 * Get ReturnOnStockEquity
	 * @return double
	 */
	public function getReturnOnStockEquity()
	{
		return $this->ReturnOnStockEquity;
	}
	/**
	 * Set ReturnOnInvestedCapital
	 * @param double ReturnOnInvestedCapital
	 * @return double
	 */
	public function setReturnOnInvestedCapital($_ReturnOnInvestedCapital)
	{
		return ($this->ReturnOnInvestedCapital = $_ReturnOnInvestedCapital);
	}
	/**
	 * Get ReturnOnInvestedCapital
	 * @return double
	 */
	public function getReturnOnInvestedCapital()
	{
		return $this->ReturnOnInvestedCapital;
	}
	/**
	 * Set ReturnOnAssets
	 * @param double ReturnOnAssets
	 * @return double
	 */
	public function setReturnOnAssets($_ReturnOnAssets)
	{
		return ($this->ReturnOnAssets = $_ReturnOnAssets);
	}
	/**
	 * Get ReturnOnAssets
	 * @return double
	 */
	public function getReturnOnAssets()
	{
		return $this->ReturnOnAssets;
	}
	/**
	 * Set PriceCashFlowRatio
	 * @param double PriceCashFlowRatio
	 * @return double
	 */
	public function setPriceCashFlowRatio($_PriceCashFlowRatio)
	{
		return ($this->PriceCashFlowRatio = $_PriceCashFlowRatio);
	}
	/**
	 * Get PriceCashFlowRatio
	 * @return double
	 */
	public function getPriceCashFlowRatio()
	{
		return $this->PriceCashFlowRatio;
	}
	/**
	 * Set PriceFreeCashFlowratio
	 * @param double PriceFreeCashFlowratio
	 * @return double
	 */
	public function setPriceFreeCashFlowratio($_PriceFreeCashFlowratio)
	{
		return ($this->PriceFreeCashFlowratio = $_PriceFreeCashFlowratio);
	}
	/**
	 * Get PriceFreeCashFlowratio
	 * @return double
	 */
	public function getPriceFreeCashFlowratio()
	{
		return $this->PriceFreeCashFlowratio;
	}
	/**
	 * Set SalesPerEmployee
	 * @param double SalesPerEmployee
	 * @return double
	 */
	public function setSalesPerEmployee($_SalesPerEmployee)
	{
		return ($this->SalesPerEmployee = $_SalesPerEmployee);
	}
	/**
	 * Get SalesPerEmployee
	 * @return double
	 */
	public function getSalesPerEmployee()
	{
		return $this->SalesPerEmployee;
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