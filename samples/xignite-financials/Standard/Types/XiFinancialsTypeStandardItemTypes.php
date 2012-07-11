<?php
/**
 * Class file for XiFinancialsTypeStandardItemTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeStandardItemTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeStandardItemTypes extends XiFinancialsWsdlClass
{
	/**
	 * Constant for value 'Name'
	 * @return string 'Name'
	 */
	const VALUE_NAME = 'Name';
	/**
	 * Constant for value 'InterimEndingDate'
	 * @return string 'InterimEndingDate'
	 */
	const VALUE_INTERIMENDINGDATE = 'InterimEndingDate';
	/**
	 * Constant for value 'DatePreliminaryDataLoaded'
	 * @return string 'DatePreliminaryDataLoaded'
	 */
	const VALUE_DATEPRELIMINARYDATALOADED = 'DatePreliminaryDataLoaded';
	/**
	 * Constant for value 'EarningsPeriodIndicator'
	 * @return string 'EarningsPeriodIndicator'
	 */
	const VALUE_EARNINGSPERIODINDICATOR = 'EarningsPeriodIndicator';
	/**
	 * Constant for value 'QuarterlyIndicator'
	 * @return string 'QuarterlyIndicator'
	 */
	const VALUE_QUARTERLYINDICATOR = 'QuarterlyIndicator';
	/**
	 * Constant for value 'BasicEarningsIndicator'
	 * @return string 'BasicEarningsIndicator'
	 */
	const VALUE_BASICEARNINGSINDICATOR = 'BasicEarningsIndicator';
	/**
	 * Constant for value 'TemplateIndicator'
	 * @return string 'TemplateIndicator'
	 */
	const VALUE_TEMPLATEINDICATOR = 'TemplateIndicator';
	/**
	 * Constant for value 'PreliminaryFullContextIndicator'
	 * @return string 'PreliminaryFullContextIndicator'
	 */
	const VALUE_PRELIMINARYFULLCONTEXTINDICATOR = 'PreliminaryFullContextIndicator';
	/**
	 * Constant for value 'ProjectedFiscalYearEndDate'
	 * @return string 'ProjectedFiscalYearEndDate'
	 */
	const VALUE_PROJECTEDFISCALYEARENDDATE = 'ProjectedFiscalYearEndDate';
	/**
	 * Constant for value 'NumberOfMonthsSinceLastReportingPeriod'
	 * @return string 'NumberOfMonthsSinceLastReportingPeriod'
	 */
	const VALUE_NUMBEROFMONTHSSINCELASTREPORTINGPERIOD = 'NumberOfMonthsSinceLastReportingPeriod';
	/**
	 * Constant for value 'OperatingRevenue'
	 * @return string 'OperatingRevenue'
	 */
	const VALUE_OPERATINGREVENUE = 'OperatingRevenue';
	/**
	 * Constant for value 'TotalRevenue'
	 * @return string 'TotalRevenue'
	 */
	const VALUE_TOTALREVENUE = 'TotalRevenue';
	/**
	 * Constant for value 'AdjustmentsToRevenue'
	 * @return string 'AdjustmentsToRevenue'
	 */
	const VALUE_ADJUSTMENTSTOREVENUE = 'AdjustmentsToRevenue';
	/**
	 * Constant for value 'CostOfSales'
	 * @return string 'CostOfSales'
	 */
	const VALUE_COSTOFSALES = 'CostOfSales';
	/**
	 * Constant for value 'CostOfSalesWithDepreciation'
	 * @return string 'CostOfSalesWithDepreciation'
	 */
	const VALUE_COSTOFSALESWITHDEPRECIATION = 'CostOfSalesWithDepreciation';
	/**
	 * Constant for value 'GrossMargin'
	 * @return string 'GrossMargin'
	 */
	const VALUE_GROSSMARGIN = 'GrossMargin';
	/**
	 * Constant for value 'GrossOperatingProfit'
	 * @return string 'GrossOperatingProfit'
	 */
	const VALUE_GROSSOPERATINGPROFIT = 'GrossOperatingProfit';
	/**
	 * Constant for value 'ResearchAndDevelopmentExpenses'
	 * @return string 'ResearchAndDevelopmentExpenses'
	 */
	const VALUE_RESEARCHANDDEVELOPMENTEXPENSES = 'ResearchAndDevelopmentExpenses';
	/**
	 * Constant for value 'SellingGeneralAndAdministrativeExpenses'
	 * @return string 'SellingGeneralAndAdministrativeExpenses'
	 */
	const VALUE_SELLINGGENERALANDADMINISTRATIVEEXPENSES = 'SellingGeneralAndAdministrativeExpenses';
	/**
	 * Constant for value 'AdvertisingExpenses'
	 * @return string 'AdvertisingExpenses'
	 */
	const VALUE_ADVERTISINGEXPENSES = 'AdvertisingExpenses';
	/**
	 * Constant for value 'OperatingIncome'
	 * @return string 'OperatingIncome'
	 */
	const VALUE_OPERATINGINCOME = 'OperatingIncome';
	/**
	 * Constant for value 'OperatingIncomeBeforeDepreciation'
	 * @return string 'OperatingIncomeBeforeDepreciation'
	 */
	const VALUE_OPERATINGINCOMEBEFOREDEPRECIATION = 'OperatingIncomeBeforeDepreciation';
	/**
	 * Constant for value 'Depreciation'
	 * @return string 'Depreciation'
	 */
	const VALUE_DEPRECIATION = 'Depreciation';
	/**
	 * Constant for value 'DepreciationUnreconciled'
	 * @return string 'DepreciationUnreconciled'
	 */
	const VALUE_DEPRECIATIONUNRECONCILED = 'DepreciationUnreconciled';
	/**
	 * Constant for value 'Amortization'
	 * @return string 'Amortization'
	 */
	const VALUE_AMORTIZATION = 'Amortization';
	/**
	 * Constant for value 'AmortizationOfIntangibles'
	 * @return string 'AmortizationOfIntangibles'
	 */
	const VALUE_AMORTIZATIONOFINTANGIBLES = 'AmortizationOfIntangibles';
	/**
	 * Constant for value 'OperatingIncomeAfterDepreciation'
	 * @return string 'OperatingIncomeAfterDepreciation'
	 */
	const VALUE_OPERATINGINCOMEAFTERDEPRECIATION = 'OperatingIncomeAfterDepreciation';
	/**
	 * Constant for value 'InterestIncome'
	 * @return string 'InterestIncome'
	 */
	const VALUE_INTERESTINCOME = 'InterestIncome';
	/**
	 * Constant for value 'EarningsFromEquityInterest'
	 * @return string 'EarningsFromEquityInterest'
	 */
	const VALUE_EARNINGSFROMEQUITYINTEREST = 'EarningsFromEquityInterest';
	/**
	 * Constant for value 'NetOtherIncome'
	 * @return string 'NetOtherIncome'
	 */
	const VALUE_NETOTHERINCOME = 'NetOtherIncome';
	/**
	 * Constant for value 'IncomeAcquiredInProcessRAndD'
	 * @return string 'IncomeAcquiredInProcessRAndD'
	 */
	const VALUE_INCOMEACQUIREDINPROCESSRANDD = 'IncomeAcquiredInProcessRAndD';
	/**
	 * Constant for value 'IncomeRestructuringAndMAndA'
	 * @return string 'IncomeRestructuringAndMAndA'
	 */
	const VALUE_INCOMERESTRUCTURINGANDMANDA = 'IncomeRestructuringAndMAndA';
	/**
	 * Constant for value 'OtherSpecialCharges'
	 * @return string 'OtherSpecialCharges'
	 */
	const VALUE_OTHERSPECIALCHARGES = 'OtherSpecialCharges';
	/**
	 * Constant for value 'SpecialIncomeCharges'
	 * @return string 'SpecialIncomeCharges'
	 */
	const VALUE_SPECIALINCOMECHARGES = 'SpecialIncomeCharges';
	/**
	 * Constant for value 'TotalIncomeAvailableForInterestExpense'
	 * @return string 'TotalIncomeAvailableForInterestExpense'
	 */
	const VALUE_TOTALINCOMEAVAILABLEFORINTERESTEXPENSE = 'TotalIncomeAvailableForInterestExpense';
	/**
	 * Constant for value 'InterestExpense'
	 * @return string 'InterestExpense'
	 */
	const VALUE_INTERESTEXPENSE = 'InterestExpense';
	/**
	 * Constant for value 'PreTaxIncome'
	 * @return string 'PreTaxIncome'
	 */
	const VALUE_PRETAXINCOME = 'PreTaxIncome';
	/**
	 * Constant for value 'IncomeTaxes'
	 * @return string 'IncomeTaxes'
	 */
	const VALUE_INCOMETAXES = 'IncomeTaxes';
	/**
	 * Constant for value 'MinorityInterest'
	 * @return string 'MinorityInterest'
	 */
	const VALUE_MINORITYINTEREST = 'MinorityInterest';
	/**
	 * Constant for value 'PreferredSecuritiesOfSubsidiaryTrust'
	 * @return string 'PreferredSecuritiesOfSubsidiaryTrust'
	 */
	const VALUE_PREFERREDSECURITIESOFSUBSIDIARYTRUST = 'PreferredSecuritiesOfSubsidiaryTrust';
	/**
	 * Constant for value 'IncomeBeforeIncomeTaxes'
	 * @return string 'IncomeBeforeIncomeTaxes'
	 */
	const VALUE_INCOMEBEFOREINCOMETAXES = 'IncomeBeforeIncomeTaxes';
	/**
	 * Constant for value 'NetIncomeFromContinuingOperations'
	 * @return string 'NetIncomeFromContinuingOperations'
	 */
	const VALUE_NETINCOMEFROMCONTINUINGOPERATIONS = 'NetIncomeFromContinuingOperations';
	/**
	 * Constant for value 'NetIncomeFromDiscontinuedOperations'
	 * @return string 'NetIncomeFromDiscontinuedOperations'
	 */
	const VALUE_NETINCOMEFROMDISCONTINUEDOPERATIONS = 'NetIncomeFromDiscontinuedOperations';
	/**
	 * Constant for value 'NetIncomeFromTotalOperations'
	 * @return string 'NetIncomeFromTotalOperations'
	 */
	const VALUE_NETINCOMEFROMTOTALOPERATIONS = 'NetIncomeFromTotalOperations';
	/**
	 * Constant for value 'ExtraordinaryIncomeLosses'
	 * @return string 'ExtraordinaryIncomeLosses'
	 */
	const VALUE_EXTRAORDINARYINCOMELOSSES = 'ExtraordinaryIncomeLosses';
	/**
	 * Constant for value 'IncomeFromCummulatedEffectOfAccountingChanges'
	 * @return string 'IncomeFromCummulatedEffectOfAccountingChanges'
	 */
	const VALUE_INCOMEFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES = 'IncomeFromCummulatedEffectOfAccountingChanges';
	/**
	 * Constant for value 'IncomeFromTaxLossCarryForward'
	 * @return string 'IncomeFromTaxLossCarryForward'
	 */
	const VALUE_INCOMEFROMTAXLOSSCARRYFORWARD = 'IncomeFromTaxLossCarryForward';
	/**
	 * Constant for value 'OtherGainsAndLosses'
	 * @return string 'OtherGainsAndLosses'
	 */
	const VALUE_OTHERGAINSANDLOSSES = 'OtherGainsAndLosses';
	/**
	 * Constant for value 'TotalNetIncome'
	 * @return string 'TotalNetIncome'
	 */
	const VALUE_TOTALNETINCOME = 'TotalNetIncome';
	/**
	 * Constant for value 'NormalizedIncome'
	 * @return string 'NormalizedIncome'
	 */
	const VALUE_NORMALIZEDINCOME = 'NormalizedIncome';
	/**
	 * Constant for value 'NetIncomeAvailableForCommon'
	 * @return string 'NetIncomeAvailableForCommon'
	 */
	const VALUE_NETINCOMEAVAILABLEFORCOMMON = 'NetIncomeAvailableForCommon';
	/**
	 * Constant for value 'PreferredDividends'
	 * @return string 'PreferredDividends'
	 */
	const VALUE_PREFERREDDIVIDENDS = 'PreferredDividends';
	/**
	 * Constant for value 'ExciseTaxes'
	 * @return string 'ExciseTaxes'
	 */
	const VALUE_EXCISETAXES = 'ExciseTaxes';
	/**
	 * Constant for value 'BasicEPSFromContinuingOperations'
	 * @return string 'BasicEPSFromContinuingOperations'
	 */
	const VALUE_BASICEPSFROMCONTINUINGOPERATIONS = 'BasicEPSFromContinuingOperations';
	/**
	 * Constant for value 'BasicEPSFromDiscontinuedOperations'
	 * @return string 'BasicEPSFromDiscontinuedOperations'
	 */
	const VALUE_BASICEPSFROMDISCONTINUEDOPERATIONS = 'BasicEPSFromDiscontinuedOperations';
	/**
	 * Constant for value 'BasicEPSFromTotalOperations'
	 * @return string 'BasicEPSFromTotalOperations'
	 */
	const VALUE_BASICEPSFROMTOTALOPERATIONS = 'BasicEPSFromTotalOperations';
	/**
	 * Constant for value 'BasicEPSFromExtraordinaryIncome'
	 * @return string 'BasicEPSFromExtraordinaryIncome'
	 */
	const VALUE_BASICEPSFROMEXTRAORDINARYINCOME = 'BasicEPSFromExtraordinaryIncome';
	/**
	 * Constant for value 'BasicEPSFromCummulatedEffectOfAccountingChanges'
	 * @return string 'BasicEPSFromCummulatedEffectOfAccountingChanges'
	 */
	const VALUE_BASICEPSFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES = 'BasicEPSFromCummulatedEffectOfAccountingChanges';
	/**
	 * Constant for value 'BasicEPSFromTaxLossCarryForwards'
	 * @return string 'BasicEPSFromTaxLossCarryForwards'
	 */
	const VALUE_BASICEPSFROMTAXLOSSCARRYFORWARDS = 'BasicEPSFromTaxLossCarryForwards';
	/**
	 * Constant for value 'BasicEPSFromOtherGainsAndLosses'
	 * @return string 'BasicEPSFromOtherGainsAndLosses'
	 */
	const VALUE_BASICEPSFROMOTHERGAINSANDLOSSES = 'BasicEPSFromOtherGainsAndLosses';
	/**
	 * Constant for value 'BasicEPSTotal'
	 * @return string 'BasicEPSTotal'
	 */
	const VALUE_BASICEPSTOTAL = 'BasicEPSTotal';
	/**
	 * Constant for value 'BasicNormalizedNetIncomeShare'
	 * @return string 'BasicNormalizedNetIncomeShare'
	 */
	const VALUE_BASICNORMALIZEDNETINCOMESHARE = 'BasicNormalizedNetIncomeShare';
	/**
	 * Constant for value 'DilutedEPSFromContinuingOperations'
	 * @return string 'DilutedEPSFromContinuingOperations'
	 */
	const VALUE_DILUTEDEPSFROMCONTINUINGOPERATIONS = 'DilutedEPSFromContinuingOperations';
	/**
	 * Constant for value 'DilutedEPSFromDiscontinuedOperations'
	 * @return string 'DilutedEPSFromDiscontinuedOperations'
	 */
	const VALUE_DILUTEDEPSFROMDISCONTINUEDOPERATIONS = 'DilutedEPSFromDiscontinuedOperations';
	/**
	 * Constant for value 'DilutedEPSFromTotalOperations'
	 * @return string 'DilutedEPSFromTotalOperations'
	 */
	const VALUE_DILUTEDEPSFROMTOTALOPERATIONS = 'DilutedEPSFromTotalOperations';
	/**
	 * Constant for value 'DilutedEPSFromExtraordinaryIncome'
	 * @return string 'DilutedEPSFromExtraordinaryIncome'
	 */
	const VALUE_DILUTEDEPSFROMEXTRAORDINARYINCOME = 'DilutedEPSFromExtraordinaryIncome';
	/**
	 * Constant for value 'DilutedEPSFromCummulatedEffectOfAccountingChanges'
	 * @return string 'DilutedEPSFromCummulatedEffectOfAccountingChanges'
	 */
	const VALUE_DILUTEDEPSFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES = 'DilutedEPSFromCummulatedEffectOfAccountingChanges';
	/**
	 * Constant for value 'DilutedEPSFromTaxLossCarryForward'
	 * @return string 'DilutedEPSFromTaxLossCarryForward'
	 */
	const VALUE_DILUTEDEPSFROMTAXLOSSCARRYFORWARD = 'DilutedEPSFromTaxLossCarryForward';
	/**
	 * Constant for value 'DilutedEPSFromOtherGainsAndLosses'
	 * @return string 'DilutedEPSFromOtherGainsAndLosses'
	 */
	const VALUE_DILUTEDEPSFROMOTHERGAINSANDLOSSES = 'DilutedEPSFromOtherGainsAndLosses';
	/**
	 * Constant for value 'DilutedEPSTotal'
	 * @return string 'DilutedEPSTotal'
	 */
	const VALUE_DILUTEDEPSTOTAL = 'DilutedEPSTotal';
	/**
	 * Constant for value 'DilutedNormalizedNetIncomeShare'
	 * @return string 'DilutedNormalizedNetIncomeShare'
	 */
	const VALUE_DILUTEDNORMALIZEDNETINCOMESHARE = 'DilutedNormalizedNetIncomeShare';
	/**
	 * Constant for value 'DividendsPaidPerShare'
	 * @return string 'DividendsPaidPerShare'
	 */
	const VALUE_DIVIDENDSPAIDPERSHARE = 'DividendsPaidPerShare';
	/**
	 * Constant for value 'RevenuesYearToDate'
	 * @return string 'RevenuesYearToDate'
	 */
	const VALUE_REVENUESYEARTODATE = 'RevenuesYearToDate';
	/**
	 * Constant for value 'IncomeYearToDateFromTotalOperations'
	 * @return string 'IncomeYearToDateFromTotalOperations'
	 */
	const VALUE_INCOMEYEARTODATEFROMTOTALOPERATIONS = 'IncomeYearToDateFromTotalOperations';
	/**
	 * Constant for value 'DilutedEPSYearToDateFromTotalOperations'
	 * @return string 'DilutedEPSYearToDateFromTotalOperations'
	 */
	const VALUE_DILUTEDEPSYEARTODATEFROMTOTALOPERATIONS = 'DilutedEPSYearToDateFromTotalOperations';
	/**
	 * Constant for value 'DividendsPaidPerShareYearToDate'
	 * @return string 'DividendsPaidPerShareYearToDate'
	 */
	const VALUE_DIVIDENDSPAIDPERSHAREYEARTODATE = 'DividendsPaidPerShareYearToDate';
	/**
	 * Constant for value 'CashAndEquivalents'
	 * @return string 'CashAndEquivalents'
	 */
	const VALUE_CASHANDEQUIVALENTS = 'CashAndEquivalents';
	/**
	 * Constant for value 'RestrictedCash'
	 * @return string 'RestrictedCash'
	 */
	const VALUE_RESTRICTEDCASH = 'RestrictedCash';
	/**
	 * Constant for value 'MarketableSecurities'
	 * @return string 'MarketableSecurities'
	 */
	const VALUE_MARKETABLESECURITIES = 'MarketableSecurities';
	/**
	 * Constant for value 'AccountsReceivable'
	 * @return string 'AccountsReceivable'
	 */
	const VALUE_ACCOUNTSRECEIVABLE = 'AccountsReceivable';
	/**
	 * Constant for value 'LoansReceivable'
	 * @return string 'LoansReceivable'
	 */
	const VALUE_LOANSRECEIVABLE = 'LoansReceivable';
	/**
	 * Constant for value 'OtherReceivable'
	 * @return string 'OtherReceivable'
	 */
	const VALUE_OTHERRECEIVABLE = 'OtherReceivable';
	/**
	 * Constant for value 'Receivables'
	 * @return string 'Receivables'
	 */
	const VALUE_RECEIVABLES = 'Receivables';
	/**
	 * Constant for value 'RawMaterials'
	 * @return string 'RawMaterials'
	 */
	const VALUE_RAWMATERIALS = 'RawMaterials';
	/**
	 * Constant for value 'WorkInProgress'
	 * @return string 'WorkInProgress'
	 */
	const VALUE_WORKINPROGRESS = 'WorkInProgress';
	/**
	 * Constant for value 'PurchasedComponents'
	 * @return string 'PurchasedComponents'
	 */
	const VALUE_PURCHASEDCOMPONENTS = 'PurchasedComponents';
	/**
	 * Constant for value 'FinishedGoods'
	 * @return string 'FinishedGoods'
	 */
	const VALUE_FINISHEDGOODS = 'FinishedGoods';
	/**
	 * Constant for value 'OtherInventories'
	 * @return string 'OtherInventories'
	 */
	const VALUE_OTHERINVENTORIES = 'OtherInventories';
	/**
	 * Constant for value 'InventoriesAdjustmentsAndAllowances'
	 * @return string 'InventoriesAdjustmentsAndAllowances'
	 */
	const VALUE_INVENTORIESADJUSTMENTSANDALLOWANCES = 'InventoriesAdjustmentsAndAllowances';
	/**
	 * Constant for value 'Inventories'
	 * @return string 'Inventories'
	 */
	const VALUE_INVENTORIES = 'Inventories';
	/**
	 * Constant for value 'PrepaidExpenses'
	 * @return string 'PrepaidExpenses'
	 */
	const VALUE_PREPAIDEXPENSES = 'PrepaidExpenses';
	/**
	 * Constant for value 'CurrentDeferredIncomeTaxes'
	 * @return string 'CurrentDeferredIncomeTaxes'
	 */
	const VALUE_CURRENTDEFERREDINCOMETAXES = 'CurrentDeferredIncomeTaxes';
	/**
	 * Constant for value 'OtherCurrentAssets'
	 * @return string 'OtherCurrentAssets'
	 */
	const VALUE_OTHERCURRENTASSETS = 'OtherCurrentAssets';
	/**
	 * Constant for value 'TotalCurrentAssets'
	 * @return string 'TotalCurrentAssets'
	 */
	const VALUE_TOTALCURRENTASSETS = 'TotalCurrentAssets';
	/**
	 * Constant for value 'LandAndImprovements'
	 * @return string 'LandAndImprovements'
	 */
	const VALUE_LANDANDIMPROVEMENTS = 'LandAndImprovements';
	/**
	 * Constant for value 'BuildingAndImprovements'
	 * @return string 'BuildingAndImprovements'
	 */
	const VALUE_BUILDINGANDIMPROVEMENTS = 'BuildingAndImprovements';
	/**
	 * Constant for value 'MachineryFurnitureAndEquipment'
	 * @return string 'MachineryFurnitureAndEquipment'
	 */
	const VALUE_MACHINERYFURNITUREANDEQUIPMENT = 'MachineryFurnitureAndEquipment';
	/**
	 * Constant for value 'ConstructionInProgress'
	 * @return string 'ConstructionInProgress'
	 */
	const VALUE_CONSTRUCTIONINPROGRESS = 'ConstructionInProgress';
	/**
	 * Constant for value 'OtherFixedAssets'
	 * @return string 'OtherFixedAssets'
	 */
	const VALUE_OTHERFIXEDASSETS = 'OtherFixedAssets';
	/**
	 * Constant for value 'TotalFixedAssets'
	 * @return string 'TotalFixedAssets'
	 */
	const VALUE_TOTALFIXEDASSETS = 'TotalFixedAssets';
	/**
	 * Constant for value 'GrossFixedAssets'
	 * @return string 'GrossFixedAssets'
	 */
	const VALUE_GROSSFIXEDASSETS = 'GrossFixedAssets';
	/**
	 * Constant for value 'AccumulatedDepreciationAndDepletion'
	 * @return string 'AccumulatedDepreciationAndDepletion'
	 */
	const VALUE_ACCUMULATEDDEPRECIATIONANDDEPLETION = 'AccumulatedDepreciationAndDepletion';
	/**
	 * Constant for value 'NetFixedAssets'
	 * @return string 'NetFixedAssets'
	 */
	const VALUE_NETFIXEDASSETS = 'NetFixedAssets';
	/**
	 * Constant for value 'Intangibles'
	 * @return string 'Intangibles'
	 */
	const VALUE_INTANGIBLES = 'Intangibles';
	/**
	 * Constant for value 'CostInExcess'
	 * @return string 'CostInExcess'
	 */
	const VALUE_COSTINEXCESS = 'CostInExcess';
	/**
	 * Constant for value 'NonCurrentDeferredIncomeTaxes'
	 * @return string 'NonCurrentDeferredIncomeTaxes'
	 */
	const VALUE_NONCURRENTDEFERREDINCOMETAXES = 'NonCurrentDeferredIncomeTaxes';
	/**
	 * Constant for value 'OtherNonCurrentAssets'
	 * @return string 'OtherNonCurrentAssets'
	 */
	const VALUE_OTHERNONCURRENTASSETS = 'OtherNonCurrentAssets';
	/**
	 * Constant for value 'TotalNonCurrentAssets'
	 * @return string 'TotalNonCurrentAssets'
	 */
	const VALUE_TOTALNONCURRENTASSETS = 'TotalNonCurrentAssets';
	/**
	 * Constant for value 'TotalAssets'
	 * @return string 'TotalAssets'
	 */
	const VALUE_TOTALASSETS = 'TotalAssets';
	/**
	 * Constant for value 'InventoryValuationMethod'
	 * @return string 'InventoryValuationMethod'
	 */
	const VALUE_INVENTORYVALUATIONMETHOD = 'InventoryValuationMethod';
	/**
	 * Constant for value 'AccountsPayable'
	 * @return string 'AccountsPayable'
	 */
	const VALUE_ACCOUNTSPAYABLE = 'AccountsPayable';
	/**
	 * Constant for value 'NotesPayable'
	 * @return string 'NotesPayable'
	 */
	const VALUE_NOTESPAYABLE = 'NotesPayable';
	/**
	 * Constant for value 'ShortTermDebt'
	 * @return string 'ShortTermDebt'
	 */
	const VALUE_SHORTTERMDEBT = 'ShortTermDebt';
	/**
	 * Constant for value 'AccruedExpenses'
	 * @return string 'AccruedExpenses'
	 */
	const VALUE_ACCRUEDEXPENSES = 'AccruedExpenses';
	/**
	 * Constant for value 'AccruedLiabilities'
	 * @return string 'AccruedLiabilities'
	 */
	const VALUE_ACCRUEDLIABILITIES = 'AccruedLiabilities';
	/**
	 * Constant for value 'DeferredRevenues'
	 * @return string 'DeferredRevenues'
	 */
	const VALUE_DEFERREDREVENUES = 'DeferredRevenues';
	/**
	 * Constant for value 'CurrentDeferredIncomeTaxLiabilities'
	 * @return string 'CurrentDeferredIncomeTaxLiabilities'
	 */
	const VALUE_CURRENTDEFERREDINCOMETAXLIABILITIES = 'CurrentDeferredIncomeTaxLiabilities';
	/**
	 * Constant for value 'OtherCurrentLiabilities'
	 * @return string 'OtherCurrentLiabilities'
	 */
	const VALUE_OTHERCURRENTLIABILITIES = 'OtherCurrentLiabilities';
	/**
	 * Constant for value 'TotalCurrentLiabilities'
	 * @return string 'TotalCurrentLiabilities'
	 */
	const VALUE_TOTALCURRENTLIABILITIES = 'TotalCurrentLiabilities';
	/**
	 * Constant for value 'LongTermDebt'
	 * @return string 'LongTermDebt'
	 */
	const VALUE_LONGTERMDEBT = 'LongTermDebt';
	/**
	 * Constant for value 'CapitalLeaseObligations'
	 * @return string 'CapitalLeaseObligations'
	 */
	const VALUE_CAPITALLEASEOBLIGATIONS = 'CapitalLeaseObligations';
	/**
	 * Constant for value 'DeferredIncomeTaxLiabilities'
	 * @return string 'DeferredIncomeTaxLiabilities'
	 */
	const VALUE_DEFERREDINCOMETAXLIABILITIES = 'DeferredIncomeTaxLiabilities';
	/**
	 * Constant for value 'OtherNonCurrentLiabilities'
	 * @return string 'OtherNonCurrentLiabilities'
	 */
	const VALUE_OTHERNONCURRENTLIABILITIES = 'OtherNonCurrentLiabilities';
	/**
	 * Constant for value 'MinorityInterestLiabilities'
	 * @return string 'MinorityInterestLiabilities'
	 */
	const VALUE_MINORITYINTERESTLIABILITIES = 'MinorityInterestLiabilities';
	/**
	 * Constant for value 'PreferredSecuritiesOfSubsidiaryTrustLiabilities'
	 * @return string 'PreferredSecuritiesOfSubsidiaryTrustLiabilities'
	 */
	const VALUE_PREFERREDSECURITIESOFSUBSIDIARYTRUSTLIABILITIES = 'PreferredSecuritiesOfSubsidiaryTrustLiabilities';
	/**
	 * Constant for value 'PreferredEquityOutsideStockEquity'
	 * @return string 'PreferredEquityOutsideStockEquity'
	 */
	const VALUE_PREFERREDEQUITYOUTSIDESTOCKEQUITY = 'PreferredEquityOutsideStockEquity';
	/**
	 * Constant for value 'TotalNonCurrentLiabilities'
	 * @return string 'TotalNonCurrentLiabilities'
	 */
	const VALUE_TOTALNONCURRENTLIABILITIES = 'TotalNonCurrentLiabilities';
	/**
	 * Constant for value 'TotalLiabilities'
	 * @return string 'TotalLiabilities'
	 */
	const VALUE_TOTALLIABILITIES = 'TotalLiabilities';
	/**
	 * Constant for value 'PreferredStockEquity'
	 * @return string 'PreferredStockEquity'
	 */
	const VALUE_PREFERREDSTOCKEQUITY = 'PreferredStockEquity';
	/**
	 * Constant for value 'CommonStockEquity'
	 * @return string 'CommonStockEquity'
	 */
	const VALUE_COMMONSTOCKEQUITY = 'CommonStockEquity';
	/**
	 * Constant for value 'CommonPar'
	 * @return string 'CommonPar'
	 */
	const VALUE_COMMONPAR = 'CommonPar';
	/**
	 * Constant for value 'AdditionalPaidInCapital'
	 * @return string 'AdditionalPaidInCapital'
	 */
	const VALUE_ADDITIONALPAIDINCAPITAL = 'AdditionalPaidInCapital';
	/**
	 * Constant for value 'CumulativeTranslationAdjustment'
	 * @return string 'CumulativeTranslationAdjustment'
	 */
	const VALUE_CUMULATIVETRANSLATIONADJUSTMENT = 'CumulativeTranslationAdjustment';
	/**
	 * Constant for value 'RetainedEarnings'
	 * @return string 'RetainedEarnings'
	 */
	const VALUE_RETAINEDEARNINGS = 'RetainedEarnings';
	/**
	 * Constant for value 'TreasuryStock'
	 * @return string 'TreasuryStock'
	 */
	const VALUE_TREASURYSTOCK = 'TreasuryStock';
	/**
	 * Constant for value 'OtherEquityAdjustments'
	 * @return string 'OtherEquityAdjustments'
	 */
	const VALUE_OTHEREQUITYADJUSTMENTS = 'OtherEquityAdjustments';
	/**
	 * Constant for value 'TotalCapitalization'
	 * @return string 'TotalCapitalization'
	 */
	const VALUE_TOTALCAPITALIZATION = 'TotalCapitalization';
	/**
	 * Constant for value 'TotalEquity'
	 * @return string 'TotalEquity'
	 */
	const VALUE_TOTALEQUITY = 'TotalEquity';
	/**
	 * Constant for value 'TotalLiabilitiesAndStockEquity'
	 * @return string 'TotalLiabilitiesAndStockEquity'
	 */
	const VALUE_TOTALLIABILITIESANDSTOCKEQUITY = 'TotalLiabilitiesAndStockEquity';
	/**
	 * Constant for value 'CashFlow'
	 * @return string 'CashFlow'
	 */
	const VALUE_CASHFLOW = 'CashFlow';
	/**
	 * Constant for value 'WorkingCapital'
	 * @return string 'WorkingCapital'
	 */
	const VALUE_WORKINGCAPITAL = 'WorkingCapital';
	/**
	 * Constant for value 'FreeCashFlow'
	 * @return string 'FreeCashFlow'
	 */
	const VALUE_FREECASHFLOW = 'FreeCashFlow';
	/**
	 * Constant for value 'InvestedCapital'
	 * @return string 'InvestedCapital'
	 */
	const VALUE_INVESTEDCAPITAL = 'InvestedCapital';
	/**
	 * Constant for value 'SharesOutstandingCommonClassOnly'
	 * @return string 'SharesOutstandingCommonClassOnly'
	 */
	const VALUE_SHARESOUTSTANDINGCOMMONCLASSONLY = 'SharesOutstandingCommonClassOnly';
	/**
	 * Constant for value 'PreferredShares'
	 * @return string 'PreferredShares'
	 */
	const VALUE_PREFERREDSHARES = 'PreferredShares';
	/**
	 * Constant for value 'TotalOrdinaryShares'
	 * @return string 'TotalOrdinaryShares'
	 */
	const VALUE_TOTALORDINARYSHARES = 'TotalOrdinaryShares';
	/**
	 * Constant for value 'TotalCommonSharesOutstanding'
	 * @return string 'TotalCommonSharesOutstanding'
	 */
	const VALUE_TOTALCOMMONSHARESOUTSTANDING = 'TotalCommonSharesOutstanding';
	/**
	 * Constant for value 'TreasuryShares'
	 * @return string 'TreasuryShares'
	 */
	const VALUE_TREASURYSHARES = 'TreasuryShares';
	/**
	 * Constant for value 'BasicWeightedSharesOutstanding'
	 * @return string 'BasicWeightedSharesOutstanding'
	 */
	const VALUE_BASICWEIGHTEDSHARESOUTSTANDING = 'BasicWeightedSharesOutstanding';
	/**
	 * Constant for value 'DilutedWeightedSharesOutstanding'
	 * @return string 'DilutedWeightedSharesOutstanding'
	 */
	const VALUE_DILUTEDWEIGHTEDSHARESOUTSTANDING = 'DilutedWeightedSharesOutstanding';
	/**
	 * Constant for value 'NumberOfEmployees'
	 * @return string 'NumberOfEmployees'
	 */
	const VALUE_NUMBEROFEMPLOYEES = 'NumberOfEmployees';
	/**
	 * Constant for value 'NumberOfPartTimeEmployees'
	 * @return string 'NumberOfPartTimeEmployees'
	 */
	const VALUE_NUMBEROFPARTTIMEEMPLOYEES = 'NumberOfPartTimeEmployees';
	/**
	 * Constant for value 'NetIncomeOrLoss'
	 * @return string 'NetIncomeOrLoss'
	 */
	const VALUE_NETINCOMEORLOSS = 'NetIncomeOrLoss';
	/**
	 * Constant for value 'DepreciationExpenses'
	 * @return string 'DepreciationExpenses'
	 */
	const VALUE_DEPRECIATIONEXPENSES = 'DepreciationExpenses';
	/**
	 * Constant for value 'AmortizationExpenses'
	 * @return string 'AmortizationExpenses'
	 */
	const VALUE_AMORTIZATIONEXPENSES = 'AmortizationExpenses';
	/**
	 * Constant for value 'AmortizationOfIntangiblesExpenses'
	 * @return string 'AmortizationOfIntangiblesExpenses'
	 */
	const VALUE_AMORTIZATIONOFINTANGIBLESEXPENSES = 'AmortizationOfIntangiblesExpenses';
	/**
	 * Constant for value 'DeferredIncomeTaxes'
	 * @return string 'DeferredIncomeTaxes'
	 */
	const VALUE_DEFERREDINCOMETAXES = 'DeferredIncomeTaxes';
	/**
	 * Constant for value 'OperatingGainsOrLosses'
	 * @return string 'OperatingGainsOrLosses'
	 */
	const VALUE_OPERATINGGAINSORLOSSES = 'OperatingGainsOrLosses';
	/**
	 * Constant for value 'ExtraordinaryGainsOrLosses'
	 * @return string 'ExtraordinaryGainsOrLosses'
	 */
	const VALUE_EXTRAORDINARYGAINSORLOSSES = 'ExtraordinaryGainsOrLosses';
	/**
	 * Constant for value 'IncreaseOrDecreaseInReceivables'
	 * @return string 'IncreaseOrDecreaseInReceivables'
	 */
	const VALUE_INCREASEORDECREASEINRECEIVABLES = 'IncreaseOrDecreaseInReceivables';
	/**
	 * Constant for value 'IncreaseOrDecreaseInInventories'
	 * @return string 'IncreaseOrDecreaseInInventories'
	 */
	const VALUE_INCREASEORDECREASEININVENTORIES = 'IncreaseOrDecreaseInInventories';
	/**
	 * Constant for value 'IncreaseOrDecreaseInPrepaidExpenses'
	 * @return string 'IncreaseOrDecreaseInPrepaidExpenses'
	 */
	const VALUE_INCREASEORDECREASEINPREPAIDEXPENSES = 'IncreaseOrDecreaseInPrepaidExpenses';
	/**
	 * Constant for value 'IncreaseOrDecreaseInOtherCurrentAssets'
	 * @return string 'IncreaseOrDecreaseInOtherCurrentAssets'
	 */
	const VALUE_INCREASEORDECREASEINOTHERCURRENTASSETS = 'IncreaseOrDecreaseInOtherCurrentAssets';
	/**
	 * Constant for value 'IncreaseOrDecreaseInPayables'
	 * @return string 'IncreaseOrDecreaseInPayables'
	 */
	const VALUE_INCREASEORDECREASEINPAYABLES = 'IncreaseOrDecreaseInPayables';
	/**
	 * Constant for value 'IncreaseOrDecreaseInOtherCurrentLiabilities'
	 * @return string 'IncreaseOrDecreaseInOtherCurrentLiabilities'
	 */
	const VALUE_INCREASEORDECREASEINOTHERCURRENTLIABILITIES = 'IncreaseOrDecreaseInOtherCurrentLiabilities';
	/**
	 * Constant for value 'IncreaseOrDecreaseInOtherWorkingCapital'
	 * @return string 'IncreaseOrDecreaseInOtherWorkingCapital'
	 */
	const VALUE_INCREASEORDECREASEINOTHERWORKINGCAPITAL = 'IncreaseOrDecreaseInOtherWorkingCapital';
	/**
	 * Constant for value 'OtherNonCashItems'
	 * @return string 'OtherNonCashItems'
	 */
	const VALUE_OTHERNONCASHITEMS = 'OtherNonCashItems';
	/**
	 * Constant for value 'NetCashFromContinuingOperations'
	 * @return string 'NetCashFromContinuingOperations'
	 */
	const VALUE_NETCASHFROMCONTINUINGOPERATIONS = 'NetCashFromContinuingOperations';
	/**
	 * Constant for value 'NetCashFromDiscontinuedOperations'
	 * @return string 'NetCashFromDiscontinuedOperations'
	 */
	const VALUE_NETCASHFROMDISCONTINUEDOPERATIONS = 'NetCashFromDiscontinuedOperations';
	/**
	 * Constant for value 'NetCashFromOperatingActivities'
	 * @return string 'NetCashFromOperatingActivities'
	 */
	const VALUE_NETCASHFROMOPERATINGACTIVITIES = 'NetCashFromOperatingActivities';
	/**
	 * Constant for value 'SaleOfPropertyPlantAndEquipment'
	 * @return string 'SaleOfPropertyPlantAndEquipment'
	 */
	const VALUE_SALEOFPROPERTYPLANTANDEQUIPMENT = 'SaleOfPropertyPlantAndEquipment';
	/**
	 * Constant for value 'SaleOfLongTermInvestments'
	 * @return string 'SaleOfLongTermInvestments'
	 */
	const VALUE_SALEOFLONGTERMINVESTMENTS = 'SaleOfLongTermInvestments';
	/**
	 * Constant for value 'SaleOfShortTermInvestments'
	 * @return string 'SaleOfShortTermInvestments'
	 */
	const VALUE_SALEOFSHORTTERMINVESTMENTS = 'SaleOfShortTermInvestments';
	/**
	 * Constant for value 'PurchaseOfPropertyPlantAndEquipment'
	 * @return string 'PurchaseOfPropertyPlantAndEquipment'
	 */
	const VALUE_PURCHASEOFPROPERTYPLANTANDEQUIPMENT = 'PurchaseOfPropertyPlantAndEquipment';
	/**
	 * Constant for value 'Acquisitions'
	 * @return string 'Acquisitions'
	 */
	const VALUE_ACQUISITIONS = 'Acquisitions';
	/**
	 * Constant for value 'PurchaseOfLongTermInvestments'
	 * @return string 'PurchaseOfLongTermInvestments'
	 */
	const VALUE_PURCHASEOFLONGTERMINVESTMENTS = 'PurchaseOfLongTermInvestments';
	/**
	 * Constant for value 'PurchaseOfShortTermInvestments'
	 * @return string 'PurchaseOfShortTermInvestments'
	 */
	const VALUE_PURCHASEOFSHORTTERMINVESTMENTS = 'PurchaseOfShortTermInvestments';
	/**
	 * Constant for value 'OtherInvestingChangesNet'
	 * @return string 'OtherInvestingChangesNet'
	 */
	const VALUE_OTHERINVESTINGCHANGESNET = 'OtherInvestingChangesNet';
	/**
	 * Constant for value 'CashFromDiscontinuedInvestingActivities'
	 * @return string 'CashFromDiscontinuedInvestingActivities'
	 */
	const VALUE_CASHFROMDISCONTINUEDINVESTINGACTIVITIES = 'CashFromDiscontinuedInvestingActivities';
	/**
	 * Constant for value 'NetCashFromInvestingActivities'
	 * @return string 'NetCashFromInvestingActivities'
	 */
	const VALUE_NETCASHFROMINVESTINGACTIVITIES = 'NetCashFromInvestingActivities';
	/**
	 * Constant for value 'IssuanceOfDebt'
	 * @return string 'IssuanceOfDebt'
	 */
	const VALUE_ISSUANCEOFDEBT = 'IssuanceOfDebt';
	/**
	 * Constant for value 'IssuanceOfCapitalStock'
	 * @return string 'IssuanceOfCapitalStock'
	 */
	const VALUE_ISSUANCEOFCAPITALSTOCK = 'IssuanceOfCapitalStock';
	/**
	 * Constant for value 'RepaymentOfDebt'
	 * @return string 'RepaymentOfDebt'
	 */
	const VALUE_REPAYMENTOFDEBT = 'RepaymentOfDebt';
	/**
	 * Constant for value 'RepurchaseOfCapitalStock'
	 * @return string 'RepurchaseOfCapitalStock'
	 */
	const VALUE_REPURCHASEOFCAPITALSTOCK = 'RepurchaseOfCapitalStock';
	/**
	 * Constant for value 'PaymentofCashDividends'
	 * @return string 'PaymentofCashDividends'
	 */
	const VALUE_PAYMENTOFCASHDIVIDENDS = 'PaymentofCashDividends';
	/**
	 * Constant for value 'NetOtherFinancingCharges'
	 * @return string 'NetOtherFinancingCharges'
	 */
	const VALUE_NETOTHERFINANCINGCHARGES = 'NetOtherFinancingCharges';
	/**
	 * Constant for value 'CashFromDiscontinuedFinancingActivities'
	 * @return string 'CashFromDiscontinuedFinancingActivities'
	 */
	const VALUE_CASHFROMDISCONTINUEDFINANCINGACTIVITIES = 'CashFromDiscontinuedFinancingActivities';
	/**
	 * Constant for value 'NetCashFromFinancingActivities'
	 * @return string 'NetCashFromFinancingActivities'
	 */
	const VALUE_NETCASHFROMFINANCINGACTIVITIES = 'NetCashFromFinancingActivities';
	/**
	 * Constant for value 'EffectOfExchangeRateChanges'
	 * @return string 'EffectOfExchangeRateChanges'
	 */
	const VALUE_EFFECTOFEXCHANGERATECHANGES = 'EffectOfExchangeRateChanges';
	/**
	 * Constant for value 'NetChangeInCashAndCashEquivalents'
	 * @return string 'NetChangeInCashAndCashEquivalents'
	 */
	const VALUE_NETCHANGEINCASHANDCASHEQUIVALENTS = 'NetChangeInCashAndCashEquivalents';
	/**
	 * Constant for value 'CashAtBeginningOfPeriod'
	 * @return string 'CashAtBeginningOfPeriod'
	 */
	const VALUE_CASHATBEGINNINGOFPERIOD = 'CashAtBeginningOfPeriod';
	/**
	 * Constant for value 'CashAtEndOfPeriod'
	 * @return string 'CashAtEndOfPeriod'
	 */
	const VALUE_CASHATENDOFPERIOD = 'CashAtEndOfPeriod';
	/**
	 * Constant for value 'ForeignSales'
	 * @return string 'ForeignSales'
	 */
	const VALUE_FOREIGNSALES = 'ForeignSales';
	/**
	 * Constant for value 'DomesticSales'
	 * @return string 'DomesticSales'
	 */
	const VALUE_DOMESTICSALES = 'DomesticSales';
	/**
	 * Constant for value 'AuditorsName'
	 * @return string 'AuditorsName'
	 */
	const VALUE_AUDITORSNAME = 'AuditorsName';
	/**
	 * Constant for value 'AuditorsReport'
	 * @return string 'AuditorsReport'
	 */
	const VALUE_AUDITORSREPORT = 'AuditorsReport';
	/**
	 * Constant for value 'ClosePERatio'
	 * @return string 'ClosePERatio'
	 */
	const VALUE_CLOSEPERATIO = 'ClosePERatio';
	/**
	 * Constant for value 'HighPERatio'
	 * @return string 'HighPERatio'
	 */
	const VALUE_HIGHPERATIO = 'HighPERatio';
	/**
	 * Constant for value 'LowPERatio'
	 * @return string 'LowPERatio'
	 */
	const VALUE_LOWPERATIO = 'LowPERatio';
	/**
	 * Constant for value 'GrossProfitMargin'
	 * @return string 'GrossProfitMargin'
	 */
	const VALUE_GROSSPROFITMARGIN = 'GrossProfitMargin';
	/**
	 * Constant for value 'PreTaxProfitMargin'
	 * @return string 'PreTaxProfitMargin'
	 */
	const VALUE_PRETAXPROFITMARGIN = 'PreTaxProfitMargin';
	/**
	 * Constant for value 'PostTaxProfitMargin'
	 * @return string 'PostTaxProfitMargin'
	 */
	const VALUE_POSTTAXPROFITMARGIN = 'PostTaxProfitMargin';
	/**
	 * Constant for value 'NetProfitMargin'
	 * @return string 'NetProfitMargin'
	 */
	const VALUE_NETPROFITMARGIN = 'NetProfitMargin';
	/**
	 * Constant for value 'InterestCoverageFromContinuingOperations'
	 * @return string 'InterestCoverageFromContinuingOperations'
	 */
	const VALUE_INTERESTCOVERAGEFROMCONTINUINGOPERATIONS = 'InterestCoverageFromContinuingOperations';
	/**
	 * Constant for value 'InterestAsAPercentageOfInvestedCapital'
	 * @return string 'InterestAsAPercentageOfInvestedCapital'
	 */
	const VALUE_INTERESTASAPERCENTAGEOFINVESTEDCAPITAL = 'InterestAsAPercentageOfInvestedCapital';
	/**
	 * Constant for value 'EffectiveTaxRate'
	 * @return string 'EffectiveTaxRate'
	 */
	const VALUE_EFFECTIVETAXRATE = 'EffectiveTaxRate';
	/**
	 * Constant for value 'IncomePerEmployee'
	 * @return string 'IncomePerEmployee'
	 */
	const VALUE_INCOMEPEREMPLOYEE = 'IncomePerEmployee';
	/**
	 * Constant for value 'NormalizedClosePERatio'
	 * @return string 'NormalizedClosePERatio'
	 */
	const VALUE_NORMALIZEDCLOSEPERATIO = 'NormalizedClosePERatio';
	/**
	 * Constant for value 'NormalizedHighPERatio'
	 * @return string 'NormalizedHighPERatio'
	 */
	const VALUE_NORMALIZEDHIGHPERATIO = 'NormalizedHighPERatio';
	/**
	 * Constant for value 'NormalizedLowPERatio'
	 * @return string 'NormalizedLowPERatio'
	 */
	const VALUE_NORMALIZEDLOWPERATIO = 'NormalizedLowPERatio';
	/**
	 * Constant for value 'NormalizedNetProfitMargin'
	 * @return string 'NormalizedNetProfitMargin'
	 */
	const VALUE_NORMALIZEDNETPROFITMARGIN = 'NormalizedNetProfitMargin';
	/**
	 * Constant for value 'NormalizedReturnOnStockEquity'
	 * @return string 'NormalizedReturnOnStockEquity'
	 */
	const VALUE_NORMALIZEDRETURNONSTOCKEQUITY = 'NormalizedReturnOnStockEquity';
	/**
	 * Constant for value 'NormalizedReturnOnAssets'
	 * @return string 'NormalizedReturnOnAssets'
	 */
	const VALUE_NORMALIZEDRETURNONASSETS = 'NormalizedReturnOnAssets';
	/**
	 * Constant for value 'NormalizedReturnOnInvestedCapital'
	 * @return string 'NormalizedReturnOnInvestedCapital'
	 */
	const VALUE_NORMALIZEDRETURNONINVESTEDCAPITAL = 'NormalizedReturnOnInvestedCapital';
	/**
	 * Constant for value 'NormalizedIncomePerEmployee'
	 * @return string 'NormalizedIncomePerEmployee'
	 */
	const VALUE_NORMALIZEDINCOMEPEREMPLOYEE = 'NormalizedIncomePerEmployee';
	/**
	 * Constant for value 'QuickRatio'
	 * @return string 'QuickRatio'
	 */
	const VALUE_QUICKRATIO = 'QuickRatio';
	/**
	 * Constant for value 'CurrentRatio'
	 * @return string 'CurrentRatio'
	 */
	const VALUE_CURRENTRATIO = 'CurrentRatio';
	/**
	 * Constant for value 'PayoutRatio'
	 * @return string 'PayoutRatio'
	 */
	const VALUE_PAYOUTRATIO = 'PayoutRatio';
	/**
	 * Constant for value 'TotalDebtToEquityRatio'
	 * @return string 'TotalDebtToEquityRatio'
	 */
	const VALUE_TOTALDEBTTOEQUITYRATIO = 'TotalDebtToEquityRatio';
	/**
	 * Constant for value 'LongTermDebtToTotalCapital'
	 * @return string 'LongTermDebtToTotalCapital'
	 */
	const VALUE_LONGTERMDEBTTOTOTALCAPITAL = 'LongTermDebtToTotalCapital';
	/**
	 * Constant for value 'LeverageRatio'
	 * @return string 'LeverageRatio'
	 */
	const VALUE_LEVERAGERATIO = 'LeverageRatio';
	/**
	 * Constant for value 'AssetTurnover'
	 * @return string 'AssetTurnover'
	 */
	const VALUE_ASSETTURNOVER = 'AssetTurnover';
	/**
	 * Constant for value 'CashAsAPercentageOfRevenue'
	 * @return string 'CashAsAPercentageOfRevenue'
	 */
	const VALUE_CASHASAPERCENTAGEOFREVENUE = 'CashAsAPercentageOfRevenue';
	/**
	 * Constant for value 'ReceivablesAsAPercentageOfRevenue'
	 * @return string 'ReceivablesAsAPercentageOfRevenue'
	 */
	const VALUE_RECEIVABLESASAPERCENTAGEOFREVENUE = 'ReceivablesAsAPercentageOfRevenue';
	/**
	 * Constant for value 'SGAndAExpenseAsAPercentageOfRevenue'
	 * @return string 'SGAndAExpenseAsAPercentageOfRevenue'
	 */
	const VALUE_SGANDAEXPENSEASAPERCENTAGEOFREVENUE = 'SGAndAExpenseAsAPercentageOfRevenue';
	/**
	 * Constant for value 'RAndDExpenseAsAPercentageOfRevenue'
	 * @return string 'RAndDExpenseAsAPercentageOfRevenue'
	 */
	const VALUE_RANDDEXPENSEASAPERCENTAGEOFREVENUE = 'RAndDExpenseAsAPercentageOfRevenue';
	/**
	 * Constant for value 'RevenuePerCash'
	 * @return string 'RevenuePerCash'
	 */
	const VALUE_REVENUEPERCASH = 'RevenuePerCash';
	/**
	 * Constant for value 'RevenuePerPlant'
	 * @return string 'RevenuePerPlant'
	 */
	const VALUE_REVENUEPERPLANT = 'RevenuePerPlant';
	/**
	 * Constant for value 'RevenuePerCommonEquity'
	 * @return string 'RevenuePerCommonEquity'
	 */
	const VALUE_REVENUEPERCOMMONEQUITY = 'RevenuePerCommonEquity';
	/**
	 * Constant for value 'RevenuePerInvestedCapital'
	 * @return string 'RevenuePerInvestedCapital'
	 */
	const VALUE_REVENUEPERINVESTEDCAPITAL = 'RevenuePerInvestedCapital';
	/**
	 * Constant for value 'ReceivableTurnover'
	 * @return string 'ReceivableTurnover'
	 */
	const VALUE_RECEIVABLETURNOVER = 'ReceivableTurnover';
	/**
	 * Constant for value 'InventoryTurnover'
	 * @return string 'InventoryTurnover'
	 */
	const VALUE_INVENTORYTURNOVER = 'InventoryTurnover';
	/**
	 * Constant for value 'ReceivablesPerDaySales'
	 * @return string 'ReceivablesPerDaySales'
	 */
	const VALUE_RECEIVABLESPERDAYSALES = 'ReceivablesPerDaySales';
	/**
	 * Constant for value 'SalesPerReceivables'
	 * @return string 'SalesPerReceivables'
	 */
	const VALUE_SALESPERRECEIVABLES = 'SalesPerReceivables';
	/**
	 * Constant for value 'SalesPerInventory'
	 * @return string 'SalesPerInventory'
	 */
	const VALUE_SALESPERINVENTORY = 'SalesPerInventory';
	/**
	 * Constant for value 'RevenueToAssets'
	 * @return string 'RevenueToAssets'
	 */
	const VALUE_REVENUETOASSETS = 'RevenueToAssets';
	/**
	 * Constant for value 'NumberOfDaysCostOfGoodsSoldInInventory'
	 * @return string 'NumberOfDaysCostOfGoodsSoldInInventory'
	 */
	const VALUE_NUMBEROFDAYSCOSTOFGOODSSOLDININVENTORY = 'NumberOfDaysCostOfGoodsSoldInInventory';
	/**
	 * Constant for value 'CurrentAssetsPerShare'
	 * @return string 'CurrentAssetsPerShare'
	 */
	const VALUE_CURRENTASSETSPERSHARE = 'CurrentAssetsPerShare';
	/**
	 * Constant for value 'TotalAssetsPerShare'
	 * @return string 'TotalAssetsPerShare'
	 */
	const VALUE_TOTALASSETSPERSHARE = 'TotalAssetsPerShare';
	/**
	 * Constant for value 'IntangiblesAsPercentageBookValue'
	 * @return string 'IntangiblesAsPercentageBookValue'
	 */
	const VALUE_INTANGIBLESASPERCENTAGEBOOKVALUE = 'IntangiblesAsPercentageBookValue';
	/**
	 * Constant for value 'InventoryAsPercentageRevenue'
	 * @return string 'InventoryAsPercentageRevenue'
	 */
	const VALUE_INVENTORYASPERCENTAGEREVENUE = 'InventoryAsPercentageRevenue';
	/**
	 * Constant for value 'LongTermDebtPerShare'
	 * @return string 'LongTermDebtPerShare'
	 */
	const VALUE_LONGTERMDEBTPERSHARE = 'LongTermDebtPerShare';
	/**
	 * Constant for value 'CurrentLiabilitiesPerShare'
	 * @return string 'CurrentLiabilitiesPerShare'
	 */
	const VALUE_CURRENTLIABILITIESPERSHARE = 'CurrentLiabilitiesPerShare';
	/**
	 * Constant for value 'CashPerShare'
	 * @return string 'CashPerShare'
	 */
	const VALUE_CASHPERSHARE = 'CashPerShare';
	/**
	 * Constant for value 'LongTermDebtToEquityRatio'
	 * @return string 'LongTermDebtToEquityRatio'
	 */
	const VALUE_LONGTERMDEBTTOEQUITYRATIO = 'LongTermDebtToEquityRatio';
	/**
	 * Constant for value 'LongTermDebtAsAPercentageOfInvestedCapital'
	 * @return string 'LongTermDebtAsAPercentageOfInvestedCapital'
	 */
	const VALUE_LONGTERMDEBTASAPERCENTAGEOFINVESTEDCAPITAL = 'LongTermDebtAsAPercentageOfInvestedCapital';
	/**
	 * Constant for value 'LongTermDebtAsAPercentageOfTotalLiabilities'
	 * @return string 'LongTermDebtAsAPercentageOfTotalLiabilities'
	 */
	const VALUE_LONGTERMDEBTASAPERCENTAGEOFTOTALLIABILITIES = 'LongTermDebtAsAPercentageOfTotalLiabilities';
	/**
	 * Constant for value 'TotalLiabilitiesAsAPercentageOfTotalAssets'
	 * @return string 'TotalLiabilitiesAsAPercentageOfTotalAssets'
	 */
	const VALUE_TOTALLIABILITIESASAPERCENTAGEOFTOTALASSETS = 'TotalLiabilitiesAsAPercentageOfTotalAssets';
	/**
	 * Constant for value 'WorkingCapitalAsAPercentageOfEquity'
	 * @return string 'WorkingCapitalAsAPercentageOfEquity'
	 */
	const VALUE_WORKINGCAPITALASAPERCENTAGEOFEQUITY = 'WorkingCapitalAsAPercentageOfEquity';
	/**
	 * Constant for value 'RevenuePerShare'
	 * @return string 'RevenuePerShare'
	 */
	const VALUE_REVENUEPERSHARE = 'RevenuePerShare';
	/**
	 * Constant for value 'BookValuePerShare'
	 * @return string 'BookValuePerShare'
	 */
	const VALUE_BOOKVALUEPERSHARE = 'BookValuePerShare';
	/**
	 * Constant for value 'TangibleBookValuePerShare'
	 * @return string 'TangibleBookValuePerShare'
	 */
	const VALUE_TANGIBLEBOOKVALUEPERSHARE = 'TangibleBookValuePerShare';
	/**
	 * Constant for value 'PriceToRevenueRatio'
	 * @return string 'PriceToRevenueRatio'
	 */
	const VALUE_PRICETOREVENUERATIO = 'PriceToRevenueRatio';
	/**
	 * Constant for value 'PriceToEquityRatio'
	 * @return string 'PriceToEquityRatio'
	 */
	const VALUE_PRICETOEQUITYRATIO = 'PriceToEquityRatio';
	/**
	 * Constant for value 'PriceToTangibleBookRatio'
	 * @return string 'PriceToTangibleBookRatio'
	 */
	const VALUE_PRICETOTANGIBLEBOOKRATIO = 'PriceToTangibleBookRatio';
	/**
	 * Constant for value 'WorkingCapitalAsPercentageOfPrice'
	 * @return string 'WorkingCapitalAsPercentageOfPrice'
	 */
	const VALUE_WORKINGCAPITALASPERCENTAGEOFPRICE = 'WorkingCapitalAsPercentageOfPrice';
	/**
	 * Constant for value 'WorkingCapitalPerShare'
	 * @return string 'WorkingCapitalPerShare'
	 */
	const VALUE_WORKINGCAPITALPERSHARE = 'WorkingCapitalPerShare';
	/**
	 * Constant for value 'CashFlowPerShare'
	 * @return string 'CashFlowPerShare'
	 */
	const VALUE_CASHFLOWPERSHARE = 'CashFlowPerShare';
	/**
	 * Constant for value 'FreeCashFlowPerShare'
	 * @return string 'FreeCashFlowPerShare'
	 */
	const VALUE_FREECASHFLOWPERSHARE = 'FreeCashFlowPerShare';
	/**
	 * Constant for value 'ReturnOnStockEquity'
	 * @return string 'ReturnOnStockEquity'
	 */
	const VALUE_RETURNONSTOCKEQUITY = 'ReturnOnStockEquity';
	/**
	 * Constant for value 'ReturnOnInvestedCapital'
	 * @return string 'ReturnOnInvestedCapital'
	 */
	const VALUE_RETURNONINVESTEDCAPITAL = 'ReturnOnInvestedCapital';
	/**
	 * Constant for value 'ReturnOnAssets'
	 * @return string 'ReturnOnAssets'
	 */
	const VALUE_RETURNONASSETS = 'ReturnOnAssets';
	/**
	 * Constant for value 'PriceCashFlowRatio'
	 * @return string 'PriceCashFlowRatio'
	 */
	const VALUE_PRICECASHFLOWRATIO = 'PriceCashFlowRatio';
	/**
	 * Constant for value 'PriceFreeCashFlowRatio'
	 * @return string 'PriceFreeCashFlowRatio'
	 */
	const VALUE_PRICEFREECASHFLOWRATIO = 'PriceFreeCashFlowRatio';
	/**
	 * Constant for value 'SalesPerEmployee'
	 * @return string 'SalesPerEmployee'
	 */
	const VALUE_SALESPEREMPLOYEE = 'SalesPerEmployee';
	/**
	 * Constant for value 'PercentageSalesToIndustry'
	 * @return string 'PercentageSalesToIndustry'
	 */
	const VALUE_PERCENTAGESALESTOINDUSTRY = 'PercentageSalesToIndustry';
	/**
	 * Constant for value 'PercentageEarningsToIndustry'
	 * @return string 'PercentageEarningsToIndustry'
	 */
	const VALUE_PERCENTAGEEARNINGSTOINDUSTRY = 'PercentageEarningsToIndustry';
	/**
	 * Constant for value 'PercentageEPSToIndustry'
	 * @return string 'PercentageEPSToIndustry'
	 */
	const VALUE_PERCENTAGEEPSTOINDUSTRY = 'PercentageEPSToIndustry';
	/**
	 * Constant for value 'PercentagePriceToIndustry'
	 * @return string 'PercentagePriceToIndustry'
	 */
	const VALUE_PERCENTAGEPRICETOINDUSTRY = 'PercentagePriceToIndustry';
	/**
	 * Constant for value 'PercentagePEToIndustry'
	 * @return string 'PercentagePEToIndustry'
	 */
	const VALUE_PERCENTAGEPETOINDUSTRY = 'PercentagePEToIndustry';
	/**
	 * Constant for value 'PercentagePriceBookToIndustry'
	 * @return string 'PercentagePriceBookToIndustry'
	 */
	const VALUE_PERCENTAGEPRICEBOOKTOINDUSTRY = 'PercentagePriceBookToIndustry';
	/**
	 * Constant for value 'PercentagePriceSalesToIndustry'
	 * @return string 'PercentagePriceSalesToIndustry'
	 */
	const VALUE_PERCENTAGEPRICESALESTOINDUSTRY = 'PercentagePriceSalesToIndustry';
	/**
	 * Constant for value 'PercentagePriceCashFlowToIndustry'
	 * @return string 'PercentagePriceCashFlowToIndustry'
	 */
	const VALUE_PERCENTAGEPRICECASHFLOWTOINDUSTRY = 'PercentagePriceCashFlowToIndustry';
	/**
	 * Constant for value 'PercentagePriceFreeCashFlowToIndustry'
	 * @return string 'PercentagePriceFreeCashFlowToIndustry'
	 */
	const VALUE_PERCENTAGEPRICEFREECASHFLOWTOINDUSTRY = 'PercentagePriceFreeCashFlowToIndustry';
	/**
	 * Constant for value 'PercentageDebtEquityToIndustry'
	 * @return string 'PercentageDebtEquityToIndustry'
	 */
	const VALUE_PERCENTAGEDEBTEQUITYTOINDUSTRY = 'PercentageDebtEquityToIndustry';
	/**
	 * Constant for value 'PercentageCurrentRatioToIndustry'
	 * @return string 'PercentageCurrentRatioToIndustry'
	 */
	const VALUE_PERCENTAGECURRENTRATIOTOINDUSTRY = 'PercentageCurrentRatioToIndustry';
	/**
	 * Constant for value 'PercentageGrossProfitMarginToIndustry'
	 * @return string 'PercentageGrossProfitMarginToIndustry'
	 */
	const VALUE_PERCENTAGEGROSSPROFITMARGINTOINDUSTRY = 'PercentageGrossProfitMarginToIndustry';
	/**
	 * Constant for value 'PercentagePreTaxProfitMarginToIndustry'
	 * @return string 'PercentagePreTaxProfitMarginToIndustry'
	 */
	const VALUE_PERCENTAGEPRETAXPROFITMARGINTOINDUSTRY = 'PercentagePreTaxProfitMarginToIndustry';
	/**
	 * Constant for value 'PercentagePostTaxProfitMarginToIndustry'
	 * @return string 'PercentagePostTaxProfitMarginToIndustry'
	 */
	const VALUE_PERCENTAGEPOSTTAXPROFITMARGINTOINDUSTRY = 'PercentagePostTaxProfitMarginToIndustry';
	/**
	 * Constant for value 'PercentageNetProfitMarginToIndustry'
	 * @return string 'PercentageNetProfitMarginToIndustry'
	 */
	const VALUE_PERCENTAGENETPROFITMARGINTOINDUSTRY = 'PercentageNetProfitMarginToIndustry';
	/**
	 * Constant for value 'PercentageReturnOnEquityToIndustry'
	 * @return string 'PercentageReturnOnEquityToIndustry'
	 */
	const VALUE_PERCENTAGERETURNONEQUITYTOINDUSTRY = 'PercentageReturnOnEquityToIndustry';
	/**
	 * Constant for value 'PercentageLeverageRatioToIndustry'
	 * @return string 'PercentageLeverageRatioToIndustry'
	 */
	const VALUE_PERCENTAGELEVERAGERATIOTOINDUSTRY = 'PercentageLeverageRatioToIndustry';
	/**
	 * Constant for value 'PercentageAssetTurnoverToIndustry'
	 * @return string 'PercentageAssetTurnoverToIndustry'
	 */
	const VALUE_PERCENTAGEASSETTURNOVERTOINDUSTRY = 'PercentageAssetTurnoverToIndustry';
	/**
	 * Constant for value 'LastAnnualReportDate'
	 * @return string 'LastAnnualReportDate'
	 */
	const VALUE_LASTANNUALREPORTDATE = 'LastAnnualReportDate';
	/**
	 * Constant for value 'LastQuarterlyReportDate'
	 * @return string 'LastQuarterlyReportDate'
	 */
	const VALUE_LASTQUARTERLYREPORTDATE = 'LastQuarterlyReportDate';
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'TrueFloat'
	 * @return string 'TrueFloat'
	 */
	const VALUE_TRUEFLOAT = 'TrueFloat';
	/**
	 * Constructor
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_NAME,self::VALUE_INTERIMENDINGDATE,self::VALUE_DATEPRELIMINARYDATALOADED,self::VALUE_EARNINGSPERIODINDICATOR,self::VALUE_QUARTERLYINDICATOR,self::VALUE_BASICEARNINGSINDICATOR,self::VALUE_TEMPLATEINDICATOR,self::VALUE_PRELIMINARYFULLCONTEXTINDICATOR,self::VALUE_PROJECTEDFISCALYEARENDDATE,self::VALUE_NUMBEROFMONTHSSINCELASTREPORTINGPERIOD,self::VALUE_OPERATINGREVENUE,self::VALUE_TOTALREVENUE,self::VALUE_ADJUSTMENTSTOREVENUE,self::VALUE_COSTOFSALES,self::VALUE_COSTOFSALESWITHDEPRECIATION,self::VALUE_GROSSMARGIN,self::VALUE_GROSSOPERATINGPROFIT,self::VALUE_RESEARCHANDDEVELOPMENTEXPENSES,self::VALUE_SELLINGGENERALANDADMINISTRATIVEEXPENSES,self::VALUE_ADVERTISINGEXPENSES,self::VALUE_OPERATINGINCOME,self::VALUE_OPERATINGINCOMEBEFOREDEPRECIATION,self::VALUE_DEPRECIATION,self::VALUE_DEPRECIATIONUNRECONCILED,self::VALUE_AMORTIZATION,self::VALUE_AMORTIZATIONOFINTANGIBLES,self::VALUE_OPERATINGINCOMEAFTERDEPRECIATION,self::VALUE_INTERESTINCOME,self::VALUE_EARNINGSFROMEQUITYINTEREST,self::VALUE_NETOTHERINCOME,self::VALUE_INCOMEACQUIREDINPROCESSRANDD,self::VALUE_INCOMERESTRUCTURINGANDMANDA,self::VALUE_OTHERSPECIALCHARGES,self::VALUE_SPECIALINCOMECHARGES,self::VALUE_TOTALINCOMEAVAILABLEFORINTERESTEXPENSE,self::VALUE_INTERESTEXPENSE,self::VALUE_PRETAXINCOME,self::VALUE_INCOMETAXES,self::VALUE_MINORITYINTEREST,self::VALUE_PREFERREDSECURITIESOFSUBSIDIARYTRUST,self::VALUE_INCOMEBEFOREINCOMETAXES,self::VALUE_NETINCOMEFROMCONTINUINGOPERATIONS,self::VALUE_NETINCOMEFROMDISCONTINUEDOPERATIONS,self::VALUE_NETINCOMEFROMTOTALOPERATIONS,self::VALUE_EXTRAORDINARYINCOMELOSSES,self::VALUE_INCOMEFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES,self::VALUE_INCOMEFROMTAXLOSSCARRYFORWARD,self::VALUE_OTHERGAINSANDLOSSES,self::VALUE_TOTALNETINCOME,self::VALUE_NORMALIZEDINCOME,self::VALUE_NETINCOMEAVAILABLEFORCOMMON,self::VALUE_PREFERREDDIVIDENDS,self::VALUE_EXCISETAXES,self::VALUE_BASICEPSFROMCONTINUINGOPERATIONS,self::VALUE_BASICEPSFROMDISCONTINUEDOPERATIONS,self::VALUE_BASICEPSFROMTOTALOPERATIONS,self::VALUE_BASICEPSFROMEXTRAORDINARYINCOME,self::VALUE_BASICEPSFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES,self::VALUE_BASICEPSFROMTAXLOSSCARRYFORWARDS,self::VALUE_BASICEPSFROMOTHERGAINSANDLOSSES,self::VALUE_BASICEPSTOTAL,self::VALUE_BASICNORMALIZEDNETINCOMESHARE,self::VALUE_DILUTEDEPSFROMCONTINUINGOPERATIONS,self::VALUE_DILUTEDEPSFROMDISCONTINUEDOPERATIONS,self::VALUE_DILUTEDEPSFROMTOTALOPERATIONS,self::VALUE_DILUTEDEPSFROMEXTRAORDINARYINCOME,self::VALUE_DILUTEDEPSFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES,self::VALUE_DILUTEDEPSFROMTAXLOSSCARRYFORWARD,self::VALUE_DILUTEDEPSFROMOTHERGAINSANDLOSSES,self::VALUE_DILUTEDEPSTOTAL,self::VALUE_DILUTEDNORMALIZEDNETINCOMESHARE,self::VALUE_DIVIDENDSPAIDPERSHARE,self::VALUE_REVENUESYEARTODATE,self::VALUE_INCOMEYEARTODATEFROMTOTALOPERATIONS,self::VALUE_DILUTEDEPSYEARTODATEFROMTOTALOPERATIONS,self::VALUE_DIVIDENDSPAIDPERSHAREYEARTODATE,self::VALUE_CASHANDEQUIVALENTS,self::VALUE_RESTRICTEDCASH,self::VALUE_MARKETABLESECURITIES,self::VALUE_ACCOUNTSRECEIVABLE,self::VALUE_LOANSRECEIVABLE,self::VALUE_OTHERRECEIVABLE,self::VALUE_RECEIVABLES,self::VALUE_RAWMATERIALS,self::VALUE_WORKINPROGRESS,self::VALUE_PURCHASEDCOMPONENTS,self::VALUE_FINISHEDGOODS,self::VALUE_OTHERINVENTORIES,self::VALUE_INVENTORIESADJUSTMENTSANDALLOWANCES,self::VALUE_INVENTORIES,self::VALUE_PREPAIDEXPENSES,self::VALUE_CURRENTDEFERREDINCOMETAXES,self::VALUE_OTHERCURRENTASSETS,self::VALUE_TOTALCURRENTASSETS,self::VALUE_LANDANDIMPROVEMENTS,self::VALUE_BUILDINGANDIMPROVEMENTS,self::VALUE_MACHINERYFURNITUREANDEQUIPMENT,self::VALUE_CONSTRUCTIONINPROGRESS,self::VALUE_OTHERFIXEDASSETS,self::VALUE_TOTALFIXEDASSETS,self::VALUE_GROSSFIXEDASSETS,self::VALUE_ACCUMULATEDDEPRECIATIONANDDEPLETION,self::VALUE_NETFIXEDASSETS,self::VALUE_INTANGIBLES,self::VALUE_COSTINEXCESS,self::VALUE_NONCURRENTDEFERREDINCOMETAXES,self::VALUE_OTHERNONCURRENTASSETS,self::VALUE_TOTALNONCURRENTASSETS,self::VALUE_TOTALASSETS,self::VALUE_INVENTORYVALUATIONMETHOD,self::VALUE_ACCOUNTSPAYABLE,self::VALUE_NOTESPAYABLE,self::VALUE_SHORTTERMDEBT,self::VALUE_ACCRUEDEXPENSES,self::VALUE_ACCRUEDLIABILITIES,self::VALUE_DEFERREDREVENUES,self::VALUE_CURRENTDEFERREDINCOMETAXLIABILITIES,self::VALUE_OTHERCURRENTLIABILITIES,self::VALUE_TOTALCURRENTLIABILITIES,self::VALUE_LONGTERMDEBT,self::VALUE_CAPITALLEASEOBLIGATIONS,self::VALUE_DEFERREDINCOMETAXLIABILITIES,self::VALUE_OTHERNONCURRENTLIABILITIES,self::VALUE_MINORITYINTERESTLIABILITIES,self::VALUE_PREFERREDSECURITIESOFSUBSIDIARYTRUSTLIABILITIES,self::VALUE_PREFERREDEQUITYOUTSIDESTOCKEQUITY,self::VALUE_TOTALNONCURRENTLIABILITIES,self::VALUE_TOTALLIABILITIES,self::VALUE_PREFERREDSTOCKEQUITY,self::VALUE_COMMONSTOCKEQUITY,self::VALUE_COMMONPAR,self::VALUE_ADDITIONALPAIDINCAPITAL,self::VALUE_CUMULATIVETRANSLATIONADJUSTMENT,self::VALUE_RETAINEDEARNINGS,self::VALUE_TREASURYSTOCK,self::VALUE_OTHEREQUITYADJUSTMENTS,self::VALUE_TOTALCAPITALIZATION,self::VALUE_TOTALEQUITY,self::VALUE_TOTALLIABILITIESANDSTOCKEQUITY,self::VALUE_CASHFLOW,self::VALUE_WORKINGCAPITAL,self::VALUE_FREECASHFLOW,self::VALUE_INVESTEDCAPITAL,self::VALUE_SHARESOUTSTANDINGCOMMONCLASSONLY,self::VALUE_PREFERREDSHARES,self::VALUE_TOTALORDINARYSHARES,self::VALUE_TOTALCOMMONSHARESOUTSTANDING,self::VALUE_TREASURYSHARES,self::VALUE_BASICWEIGHTEDSHARESOUTSTANDING,self::VALUE_DILUTEDWEIGHTEDSHARESOUTSTANDING,self::VALUE_NUMBEROFEMPLOYEES,self::VALUE_NUMBEROFPARTTIMEEMPLOYEES,self::VALUE_NETINCOMEORLOSS,self::VALUE_DEPRECIATIONEXPENSES,self::VALUE_AMORTIZATIONEXPENSES,self::VALUE_AMORTIZATIONOFINTANGIBLESEXPENSES,self::VALUE_DEFERREDINCOMETAXES,self::VALUE_OPERATINGGAINSORLOSSES,self::VALUE_EXTRAORDINARYGAINSORLOSSES,self::VALUE_INCREASEORDECREASEINRECEIVABLES,self::VALUE_INCREASEORDECREASEININVENTORIES,self::VALUE_INCREASEORDECREASEINPREPAIDEXPENSES,self::VALUE_INCREASEORDECREASEINOTHERCURRENTASSETS,self::VALUE_INCREASEORDECREASEINPAYABLES,self::VALUE_INCREASEORDECREASEINOTHERCURRENTLIABILITIES,self::VALUE_INCREASEORDECREASEINOTHERWORKINGCAPITAL,self::VALUE_OTHERNONCASHITEMS,self::VALUE_NETCASHFROMCONTINUINGOPERATIONS,self::VALUE_NETCASHFROMDISCONTINUEDOPERATIONS,self::VALUE_NETCASHFROMOPERATINGACTIVITIES,self::VALUE_SALEOFPROPERTYPLANTANDEQUIPMENT,self::VALUE_SALEOFLONGTERMINVESTMENTS,self::VALUE_SALEOFSHORTTERMINVESTMENTS,self::VALUE_PURCHASEOFPROPERTYPLANTANDEQUIPMENT,self::VALUE_ACQUISITIONS,self::VALUE_PURCHASEOFLONGTERMINVESTMENTS,self::VALUE_PURCHASEOFSHORTTERMINVESTMENTS,self::VALUE_OTHERINVESTINGCHANGESNET,self::VALUE_CASHFROMDISCONTINUEDINVESTINGACTIVITIES,self::VALUE_NETCASHFROMINVESTINGACTIVITIES,self::VALUE_ISSUANCEOFDEBT,self::VALUE_ISSUANCEOFCAPITALSTOCK,self::VALUE_REPAYMENTOFDEBT,self::VALUE_REPURCHASEOFCAPITALSTOCK,self::VALUE_PAYMENTOFCASHDIVIDENDS,self::VALUE_NETOTHERFINANCINGCHARGES,self::VALUE_CASHFROMDISCONTINUEDFINANCINGACTIVITIES,self::VALUE_NETCASHFROMFINANCINGACTIVITIES,self::VALUE_EFFECTOFEXCHANGERATECHANGES,self::VALUE_NETCHANGEINCASHANDCASHEQUIVALENTS,self::VALUE_CASHATBEGINNINGOFPERIOD,self::VALUE_CASHATENDOFPERIOD,self::VALUE_FOREIGNSALES,self::VALUE_DOMESTICSALES,self::VALUE_AUDITORSNAME,self::VALUE_AUDITORSREPORT,self::VALUE_CLOSEPERATIO,self::VALUE_HIGHPERATIO,self::VALUE_LOWPERATIO,self::VALUE_GROSSPROFITMARGIN,self::VALUE_PRETAXPROFITMARGIN,self::VALUE_POSTTAXPROFITMARGIN,self::VALUE_NETPROFITMARGIN,self::VALUE_INTERESTCOVERAGEFROMCONTINUINGOPERATIONS,self::VALUE_INTERESTASAPERCENTAGEOFINVESTEDCAPITAL,self::VALUE_EFFECTIVETAXRATE,self::VALUE_INCOMEPEREMPLOYEE,self::VALUE_NORMALIZEDCLOSEPERATIO,self::VALUE_NORMALIZEDHIGHPERATIO,self::VALUE_NORMALIZEDLOWPERATIO,self::VALUE_NORMALIZEDNETPROFITMARGIN,self::VALUE_NORMALIZEDRETURNONSTOCKEQUITY,self::VALUE_NORMALIZEDRETURNONASSETS,self::VALUE_NORMALIZEDRETURNONINVESTEDCAPITAL,self::VALUE_NORMALIZEDINCOMEPEREMPLOYEE,self::VALUE_QUICKRATIO,self::VALUE_CURRENTRATIO,self::VALUE_PAYOUTRATIO,self::VALUE_TOTALDEBTTOEQUITYRATIO,self::VALUE_LONGTERMDEBTTOTOTALCAPITAL,self::VALUE_LEVERAGERATIO,self::VALUE_ASSETTURNOVER,self::VALUE_CASHASAPERCENTAGEOFREVENUE,self::VALUE_RECEIVABLESASAPERCENTAGEOFREVENUE,self::VALUE_SGANDAEXPENSEASAPERCENTAGEOFREVENUE,self::VALUE_RANDDEXPENSEASAPERCENTAGEOFREVENUE,self::VALUE_REVENUEPERCASH,self::VALUE_REVENUEPERPLANT,self::VALUE_REVENUEPERCOMMONEQUITY,self::VALUE_REVENUEPERINVESTEDCAPITAL,self::VALUE_RECEIVABLETURNOVER,self::VALUE_INVENTORYTURNOVER,self::VALUE_RECEIVABLESPERDAYSALES,self::VALUE_SALESPERRECEIVABLES,self::VALUE_SALESPERINVENTORY,self::VALUE_REVENUETOASSETS,self::VALUE_NUMBEROFDAYSCOSTOFGOODSSOLDININVENTORY,self::VALUE_CURRENTASSETSPERSHARE,self::VALUE_TOTALASSETSPERSHARE,self::VALUE_INTANGIBLESASPERCENTAGEBOOKVALUE,self::VALUE_INVENTORYASPERCENTAGEREVENUE,self::VALUE_LONGTERMDEBTPERSHARE,self::VALUE_CURRENTLIABILITIESPERSHARE,self::VALUE_CASHPERSHARE,self::VALUE_LONGTERMDEBTTOEQUITYRATIO,self::VALUE_LONGTERMDEBTASAPERCENTAGEOFINVESTEDCAPITAL,self::VALUE_LONGTERMDEBTASAPERCENTAGEOFTOTALLIABILITIES,self::VALUE_TOTALLIABILITIESASAPERCENTAGEOFTOTALASSETS,self::VALUE_WORKINGCAPITALASAPERCENTAGEOFEQUITY,self::VALUE_REVENUEPERSHARE,self::VALUE_BOOKVALUEPERSHARE,self::VALUE_TANGIBLEBOOKVALUEPERSHARE,self::VALUE_PRICETOREVENUERATIO,self::VALUE_PRICETOEQUITYRATIO,self::VALUE_PRICETOTANGIBLEBOOKRATIO,self::VALUE_WORKINGCAPITALASPERCENTAGEOFPRICE,self::VALUE_WORKINGCAPITALPERSHARE,self::VALUE_CASHFLOWPERSHARE,self::VALUE_FREECASHFLOWPERSHARE,self::VALUE_RETURNONSTOCKEQUITY,self::VALUE_RETURNONINVESTEDCAPITAL,self::VALUE_RETURNONASSETS,self::VALUE_PRICECASHFLOWRATIO,self::VALUE_PRICEFREECASHFLOWRATIO,self::VALUE_SALESPEREMPLOYEE,self::VALUE_PERCENTAGESALESTOINDUSTRY,self::VALUE_PERCENTAGEEARNINGSTOINDUSTRY,self::VALUE_PERCENTAGEEPSTOINDUSTRY,self::VALUE_PERCENTAGEPRICETOINDUSTRY,self::VALUE_PERCENTAGEPETOINDUSTRY,self::VALUE_PERCENTAGEPRICEBOOKTOINDUSTRY,self::VALUE_PERCENTAGEPRICESALESTOINDUSTRY,self::VALUE_PERCENTAGEPRICECASHFLOWTOINDUSTRY,self::VALUE_PERCENTAGEPRICEFREECASHFLOWTOINDUSTRY,self::VALUE_PERCENTAGEDEBTEQUITYTOINDUSTRY,self::VALUE_PERCENTAGECURRENTRATIOTOINDUSTRY,self::VALUE_PERCENTAGEGROSSPROFITMARGINTOINDUSTRY,self::VALUE_PERCENTAGEPRETAXPROFITMARGINTOINDUSTRY,self::VALUE_PERCENTAGEPOSTTAXPROFITMARGINTOINDUSTRY,self::VALUE_PERCENTAGENETPROFITMARGINTOINDUSTRY,self::VALUE_PERCENTAGERETURNONEQUITYTOINDUSTRY,self::VALUE_PERCENTAGELEVERAGERATIOTOINDUSTRY,self::VALUE_PERCENTAGEASSETTURNOVERTOINDUSTRY,self::VALUE_LASTANNUALREPORTDATE,self::VALUE_LASTQUARTERLYREPORTDATE,self::VALUE_NONE,self::VALUE_TRUEFLOAT));
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