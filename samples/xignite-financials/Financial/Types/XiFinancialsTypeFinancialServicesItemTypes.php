<?php
/**
 * Class file for XiFinancialsTypeFinancialServicesItemTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeFinancialServicesItemTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeFinancialServicesItemTypes extends XiFinancialsWsdlClass
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
	 * Constant for value 'IncomeFromLoans'
	 * @return string 'IncomeFromLoans'
	 */
	const VALUE_INCOMEFROMLOANS = 'IncomeFromLoans';
	/**
	 * Constant for value 'InvestmentSecuritiesIncome'
	 * @return string 'InvestmentSecuritiesIncome'
	 */
	const VALUE_INVESTMENTSECURITIESINCOME = 'InvestmentSecuritiesIncome';
	/**
	 * Constant for value 'LeaseFinancingIncome'
	 * @return string 'LeaseFinancingIncome'
	 */
	const VALUE_LEASEFINANCINGINCOME = 'LeaseFinancingIncome';
	/**
	 * Constant for value 'OtherInterestIncome'
	 * @return string 'OtherInterestIncome'
	 */
	const VALUE_OTHERINTERESTINCOME = 'OtherInterestIncome';
	/**
	 * Constant for value 'IncomeFromFederalFundsSoldOrPurchased'
	 * @return string 'IncomeFromFederalFundsSoldOrPurchased'
	 */
	const VALUE_INCOMEFROMFEDERALFUNDSSOLDORPURCHASED = 'IncomeFromFederalFundsSoldOrPurchased';
	/**
	 * Constant for value 'IncomeFromInterestBearingDeposits'
	 * @return string 'IncomeFromInterestBearingDeposits'
	 */
	const VALUE_INCOMEFROMINTERESTBEARINGDEPOSITS = 'IncomeFromInterestBearingDeposits';
	/**
	 * Constant for value 'IncomeFromLoansHeldForResale'
	 * @return string 'IncomeFromLoansHeldForResale'
	 */
	const VALUE_INCOMEFROMLOANSHELDFORRESALE = 'IncomeFromLoansHeldForResale';
	/**
	 * Constant for value 'TradingAccountSecuritiesIncome'
	 * @return string 'TradingAccountSecuritiesIncome'
	 */
	const VALUE_TRADINGACCOUNTSECURITIESINCOME = 'TradingAccountSecuritiesIncome';
	/**
	 * Constant for value 'IncomeFromTimeDepositsPlaced'
	 * @return string 'IncomeFromTimeDepositsPlaced'
	 */
	const VALUE_INCOMEFROMTIMEDEPOSITSPLACED = 'IncomeFromTimeDepositsPlaced';
	/**
	 * Constant for value 'OtherMoneyMarketInvestmentsIncome'
	 * @return string 'OtherMoneyMarketInvestmentsIncome'
	 */
	const VALUE_OTHERMONEYMARKETINVESTMENTSINCOME = 'OtherMoneyMarketInvestmentsIncome';
	/**
	 * Constant for value 'TotalMoneyMarketInvestmentsIncome'
	 * @return string 'TotalMoneyMarketInvestmentsIncome'
	 */
	const VALUE_TOTALMONEYMARKETINVESTMENTSINCOME = 'TotalMoneyMarketInvestmentsIncome';
	/**
	 * Constant for value 'TotalInterestIncome'
	 * @return string 'TotalInterestIncome'
	 */
	const VALUE_TOTALINTERESTINCOME = 'TotalInterestIncome';
	/**
	 * Constant for value 'InterestOnDeposits'
	 * @return string 'InterestOnDeposits'
	 */
	const VALUE_INTERESTONDEPOSITS = 'InterestOnDeposits';
	/**
	 * Constant for value 'InterestOnShortTermDebt'
	 * @return string 'InterestOnShortTermDebt'
	 */
	const VALUE_INTERESTONSHORTTERMDEBT = 'InterestOnShortTermDebt';
	/**
	 * Constant for value 'InterestOnLongTermDebt'
	 * @return string 'InterestOnLongTermDebt'
	 */
	const VALUE_INTERESTONLONGTERMDEBT = 'InterestOnLongTermDebt';
	/**
	 * Constant for value 'InterestOnFederalFundsPurchasedSold'
	 * @return string 'InterestOnFederalFundsPurchasedSold'
	 */
	const VALUE_INTERESTONFEDERALFUNDSPURCHASEDSOLD = 'InterestOnFederalFundsPurchasedSold';
	/**
	 * Constant for value 'InterestOnCapitalizedLeaseObligations'
	 * @return string 'InterestOnCapitalizedLeaseObligations'
	 */
	const VALUE_INTERESTONCAPITALIZEDLEASEOBLIGATIONS = 'InterestOnCapitalizedLeaseObligations';
	/**
	 * Constant for value 'OtherInterestExpense'
	 * @return string 'OtherInterestExpense'
	 */
	const VALUE_OTHERINTERESTEXPENSE = 'OtherInterestExpense';
	/**
	 * Constant for value 'TotalInterestExpense'
	 * @return string 'TotalInterestExpense'
	 */
	const VALUE_TOTALINTERESTEXPENSE = 'TotalInterestExpense';
	/**
	 * Constant for value 'NetInterestIncomeOrExpense'
	 * @return string 'NetInterestIncomeOrExpense'
	 */
	const VALUE_NETINTERESTINCOMEOREXPENSE = 'NetInterestIncomeOrExpense';
	/**
	 * Constant for value 'ProvisionForLoanLoss'
	 * @return string 'ProvisionForLoanLoss'
	 */
	const VALUE_PROVISIONFORLOANLOSS = 'ProvisionForLoanLoss';
	/**
	 * Constant for value 'TrustFeesByCommissions'
	 * @return string 'TrustFeesByCommissions'
	 */
	const VALUE_TRUSTFEESBYCOMMISSIONS = 'TrustFeesByCommissions';
	/**
	 * Constant for value 'ServiceChargeOnDepositAccounts'
	 * @return string 'ServiceChargeOnDepositAccounts'
	 */
	const VALUE_SERVICECHARGEONDEPOSITACCOUNTS = 'ServiceChargeOnDepositAccounts';
	/**
	 * Constant for value 'OtherServiceCharges'
	 * @return string 'OtherServiceCharges'
	 */
	const VALUE_OTHERSERVICECHARGES = 'OtherServiceCharges';
	/**
	 * Constant for value 'SecurityTransactions'
	 * @return string 'SecurityTransactions'
	 */
	const VALUE_SECURITYTRANSACTIONS = 'SecurityTransactions';
	/**
	 * Constant for value 'PremiumsEarned'
	 * @return string 'PremiumsEarned'
	 */
	const VALUE_PREMIUMSEARNED = 'PremiumsEarned';
	/**
	 * Constant for value 'NetRealizedCapitalGains'
	 * @return string 'NetRealizedCapitalGains'
	 */
	const VALUE_NETREALIZEDCAPITALGAINS = 'NetRealizedCapitalGains';
	/**
	 * Constant for value 'InvestmentBankingProfit'
	 * @return string 'InvestmentBankingProfit'
	 */
	const VALUE_INVESTMENTBANKINGPROFIT = 'InvestmentBankingProfit';
	/**
	 * Constant for value 'OtherNonInterestIncome'
	 * @return string 'OtherNonInterestIncome'
	 */
	const VALUE_OTHERNONINTERESTINCOME = 'OtherNonInterestIncome';
	/**
	 * Constant for value 'TotalNonInterestIncome'
	 * @return string 'TotalNonInterestIncome'
	 */
	const VALUE_TOTALNONINTERESTINCOME = 'TotalNonInterestIncome';
	/**
	 * Constant for value 'SalariesAndEmployeeBenefits'
	 * @return string 'SalariesAndEmployeeBenefits'
	 */
	const VALUE_SALARIESANDEMPLOYEEBENEFITS = 'SalariesAndEmployeeBenefits';
	/**
	 * Constant for value 'NetOccupancyExpense'
	 * @return string 'NetOccupancyExpense'
	 */
	const VALUE_NETOCCUPANCYEXPENSE = 'NetOccupancyExpense';
	/**
	 * Constant for value 'PromotionsandAdvertising'
	 * @return string 'PromotionsandAdvertising'
	 */
	const VALUE_PROMOTIONSANDADVERTISING = 'PromotionsandAdvertising';
	/**
	 * Constant for value 'PropertyLiabilityInsuranceClaims'
	 * @return string 'PropertyLiabilityInsuranceClaims'
	 */
	const VALUE_PROPERTYLIABILITYINSURANCECLAIMS = 'PropertyLiabilityInsuranceClaims';
	/**
	 * Constant for value 'PolicyAcquisitionCosts'
	 * @return string 'PolicyAcquisitionCosts'
	 */
	const VALUE_POLICYACQUISITIONCOSTS = 'PolicyAcquisitionCosts';
	/**
	 * Constant for value 'AmortizationOfDeferredPolicyAcquisitionCosts'
	 * @return string 'AmortizationOfDeferredPolicyAcquisitionCosts'
	 */
	const VALUE_AMORTIZATIONOFDEFERREDPOLICYACQUISITIONCOSTS = 'AmortizationOfDeferredPolicyAcquisitionCosts';
	/**
	 * Constant for value 'CurrentandFutureBenefits'
	 * @return string 'CurrentandFutureBenefits'
	 */
	const VALUE_CURRENTANDFUTUREBENEFITS = 'CurrentandFutureBenefits';
	/**
	 * Constant for value 'OtherNonInterestExpense'
	 * @return string 'OtherNonInterestExpense'
	 */
	const VALUE_OTHERNONINTERESTEXPENSE = 'OtherNonInterestExpense';
	/**
	 * Constant for value 'TotalNonInterestExpense'
	 * @return string 'TotalNonInterestExpense'
	 */
	const VALUE_TOTALNONINTERESTEXPENSE = 'TotalNonInterestExpense';
	/**
	 * Constant for value 'PremiumTaxOrCredit'
	 * @return string 'PremiumTaxOrCredit'
	 */
	const VALUE_PREMIUMTAXORCREDIT = 'PremiumTaxOrCredit';
	/**
	 * Constant for value 'MinorityInterestExpense'
	 * @return string 'MinorityInterestExpense'
	 */
	const VALUE_MINORITYINTERESTEXPENSE = 'MinorityInterestExpense';
	/**
	 * Constant for value 'IncomeTaxes'
	 * @return string 'IncomeTaxes'
	 */
	const VALUE_INCOMETAXES = 'IncomeTaxes';
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
	 * Constant for value 'OtherGainsOrLosses'
	 * @return string 'OtherGainsOrLosses'
	 */
	const VALUE_OTHERGAINSORLOSSES = 'OtherGainsOrLosses';
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
	 * Constant for value 'CashAndDueFromBanks'
	 * @return string 'CashAndDueFromBanks'
	 */
	const VALUE_CASHANDDUEFROMBANKS = 'CashAndDueFromBanks';
	/**
	 * Constant for value 'RestrictedCash'
	 * @return string 'RestrictedCash'
	 */
	const VALUE_RESTRICTEDCASH = 'RestrictedCash';
	/**
	 * Constant for value 'FederalFundsSoldOrSecuritiesPurchased'
	 * @return string 'FederalFundsSoldOrSecuritiesPurchased'
	 */
	const VALUE_FEDERALFUNDSSOLDORSECURITIESPURCHASED = 'FederalFundsSoldOrSecuritiesPurchased';
	/**
	 * Constant for value 'InterestBearingDepositsAtOtherBanks'
	 * @return string 'InterestBearingDepositsAtOtherBanks'
	 */
	const VALUE_INTERESTBEARINGDEPOSITSATOTHERBANKS = 'InterestBearingDepositsAtOtherBanks';
	/**
	 * Constant for value 'NetInvestmentSecurities'
	 * @return string 'NetInvestmentSecurities'
	 */
	const VALUE_NETINVESTMENTSECURITIES = 'NetInvestmentSecurities';
	/**
	 * Constant for value 'Loans'
	 * @return string 'Loans'
	 */
	const VALUE_LOANS = 'Loans';
	/**
	 * Constant for value 'UnearnedPremiumsAssets'
	 * @return string 'UnearnedPremiumsAssets'
	 */
	const VALUE_UNEARNEDPREMIUMSASSETS = 'UnearnedPremiumsAssets';
	/**
	 * Constant for value 'AllowanceForLoansAndLeaseLosses'
	 * @return string 'AllowanceForLoansAndLeaseLosses'
	 */
	const VALUE_ALLOWANCEFORLOANSANDLEASELOSSES = 'AllowanceForLoansAndLeaseLosses';
	/**
	 * Constant for value 'NetLoans'
	 * @return string 'NetLoans'
	 */
	const VALUE_NETLOANS = 'NetLoans';
	/**
	 * Constant for value 'PremisesAndEquipment'
	 * @return string 'PremisesAndEquipment'
	 */
	const VALUE_PREMISESANDEQUIPMENT = 'PremisesAndEquipment';
	/**
	 * Constant for value 'DueFromCustomersAcceptance'
	 * @return string 'DueFromCustomersAcceptance'
	 */
	const VALUE_DUEFROMCUSTOMERSACCEPTANCE = 'DueFromCustomersAcceptance';
	/**
	 * Constant for value 'TradingAccountSecurities'
	 * @return string 'TradingAccountSecurities'
	 */
	const VALUE_TRADINGACCOUNTSECURITIES = 'TradingAccountSecurities';
	/**
	 * Constant for value 'OtherReceivables'
	 * @return string 'OtherReceivables'
	 */
	const VALUE_OTHERRECEIVABLES = 'OtherReceivables';
	/**
	 * Constant for value 'AccruedInterest'
	 * @return string 'AccruedInterest'
	 */
	const VALUE_ACCRUEDINTEREST = 'AccruedInterest';
	/**
	 * Constant for value 'DeferredAcquisitionCost'
	 * @return string 'DeferredAcquisitionCost'
	 */
	const VALUE_DEFERREDACQUISITIONCOST = 'DeferredAcquisitionCost';
	/**
	 * Constant for value 'AccruedInvestmentIncome'
	 * @return string 'AccruedInvestmentIncome'
	 */
	const VALUE_ACCRUEDINVESTMENTINCOME = 'AccruedInvestmentIncome';
	/**
	 * Constant for value 'SeparateAccountBusiness'
	 * @return string 'SeparateAccountBusiness'
	 */
	const VALUE_SEPARATEACCOUNTBUSINESS = 'SeparateAccountBusiness';
	/**
	 * Constant for value 'TimeDepositsPlaced'
	 * @return string 'TimeDepositsPlaced'
	 */
	const VALUE_TIMEDEPOSITSPLACED = 'TimeDepositsPlaced';
	/**
	 * Constant for value 'IntangibleAssets'
	 * @return string 'IntangibleAssets'
	 */
	const VALUE_INTANGIBLEASSETS = 'IntangibleAssets';
	/**
	 * Constant for value 'OtherAssets'
	 * @return string 'OtherAssets'
	 */
	const VALUE_OTHERASSETS = 'OtherAssets';
	/**
	 * Constant for value 'TotalAssets'
	 * @return string 'TotalAssets'
	 */
	const VALUE_TOTALASSETS = 'TotalAssets';
	/**
	 * Constant for value 'NonInterestBearingDeposits'
	 * @return string 'NonInterestBearingDeposits'
	 */
	const VALUE_NONINTERESTBEARINGDEPOSITS = 'NonInterestBearingDeposits';
	/**
	 * Constant for value 'InterestBearingDeposits'
	 * @return string 'InterestBearingDeposits'
	 */
	const VALUE_INTERESTBEARINGDEPOSITS = 'InterestBearingDeposits';
	/**
	 * Constant for value 'ShortTermDebt'
	 * @return string 'ShortTermDebt'
	 */
	const VALUE_SHORTTERMDEBT = 'ShortTermDebt';
	/**
	 * Constant for value 'OtherLiabilities'
	 * @return string 'OtherLiabilities'
	 */
	const VALUE_OTHERLIABILITIES = 'OtherLiabilities';
	/**
	 * Constant for value 'BankersAcceptanceOutstanding'
	 * @return string 'BankersAcceptanceOutstanding'
	 */
	const VALUE_BANKERSACCEPTANCEOUTSTANDING = 'BankersAcceptanceOutstanding';
	/**
	 * Constant for value 'FederalsFundsPurchasedSecuritiesSold'
	 * @return string 'FederalsFundsPurchasedSecuritiesSold'
	 */
	const VALUE_FEDERALSFUNDSPURCHASEDSECURITIESSOLD = 'FederalsFundsPurchasedSecuritiesSold';
	/**
	 * Constant for value 'AccruedTaxes'
	 * @return string 'AccruedTaxes'
	 */
	const VALUE_ACCRUEDTAXES = 'AccruedTaxes';
	/**
	 * Constant for value 'AccruedInterestPayables'
	 * @return string 'AccruedInterestPayables'
	 */
	const VALUE_ACCRUEDINTERESTPAYABLES = 'AccruedInterestPayables';
	/**
	 * Constant for value 'OtherPayables'
	 * @return string 'OtherPayables'
	 */
	const VALUE_OTHERPAYABLES = 'OtherPayables';
	/**
	 * Constant for value 'CapitalLeaseObligations'
	 * @return string 'CapitalLeaseObligations'
	 */
	const VALUE_CAPITALLEASEOBLIGATIONS = 'CapitalLeaseObligations';
	/**
	 * Constant for value 'ClaimsAndClaimExpense'
	 * @return string 'ClaimsAndClaimExpense'
	 */
	const VALUE_CLAIMSANDCLAIMEXPENSE = 'ClaimsAndClaimExpense';
	/**
	 * Constant for value 'FuturePolicyBenefits'
	 * @return string 'FuturePolicyBenefits'
	 */
	const VALUE_FUTUREPOLICYBENEFITS = 'FuturePolicyBenefits';
	/**
	 * Constant for value 'UnearnedPremiumsLiabilities'
	 * @return string 'UnearnedPremiumsLiabilities'
	 */
	const VALUE_UNEARNEDPREMIUMSLIABILITIES = 'UnearnedPremiumsLiabilities';
	/**
	 * Constant for value 'PolicyHolderFunds'
	 * @return string 'PolicyHolderFunds'
	 */
	const VALUE_POLICYHOLDERFUNDS = 'PolicyHolderFunds';
	/**
	 * Constant for value 'ParticipatingPolicyholderEquity'
	 * @return string 'ParticipatingPolicyholderEquity'
	 */
	const VALUE_PARTICIPATINGPOLICYHOLDEREQUITY = 'ParticipatingPolicyholderEquity';
	/**
	 * Constant for value 'SeparateAccountsBusiness'
	 * @return string 'SeparateAccountsBusiness'
	 */
	const VALUE_SEPARATEACCOUNTSBUSINESS = 'SeparateAccountsBusiness';
	/**
	 * Constant for value 'MinorityInterest'
	 * @return string 'MinorityInterest'
	 */
	const VALUE_MINORITYINTEREST = 'MinorityInterest';
	/**
	 * Constant for value 'LongTermDebt'
	 * @return string 'LongTermDebt'
	 */
	const VALUE_LONGTERMDEBT = 'LongTermDebt';
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
	 * Constant for value 'ForeignCurrencyAdjustments'
	 * @return string 'ForeignCurrencyAdjustments'
	 */
	const VALUE_FOREIGNCURRENCYADJUSTMENTS = 'ForeignCurrencyAdjustments';
	/**
	 * Constant for value 'NetUnrealizedLossGainOnInvestments'
	 * @return string 'NetUnrealizedLossGainOnInvestments'
	 */
	const VALUE_NETUNREALIZEDLOSSGAINONINVESTMENTS = 'NetUnrealizedLossGainOnInvestments';
	/**
	 * Constant for value 'NetUnrealizedLossGainOnForeignCurrencies'
	 * @return string 'NetUnrealizedLossGainOnForeignCurrencies'
	 */
	const VALUE_NETUNREALIZEDLOSSGAINONFOREIGNCURRENCIES = 'NetUnrealizedLossGainOnForeignCurrencies';
	/**
	 * Constant for value 'NetOtherUnearnedLossesGains'
	 * @return string 'NetOtherUnearnedLossesGains'
	 */
	const VALUE_NETOTHERUNEARNEDLOSSESGAINS = 'NetOtherUnearnedLossesGains';
	/**
	 * Constant for value 'TotalEquity'
	 * @return string 'TotalEquity'
	 */
	const VALUE_TOTALEQUITY = 'TotalEquity';
	/**
	 * Constant for value 'TotalLiabilities'
	 * @return string 'TotalLiabilities'
	 */
	const VALUE_TOTALLIABILITIES = 'TotalLiabilities';
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
	 * Constant for value 'NetIncomeOrEarnings'
	 * @return string 'NetIncomeOrEarnings'
	 */
	const VALUE_NETINCOMEOREARNINGS = 'NetIncomeOrEarnings';
	/**
	 * Constant for value 'ProvisionForLoanLosses'
	 * @return string 'ProvisionForLoanLosses'
	 */
	const VALUE_PROVISIONFORLOANLOSSES = 'ProvisionForLoanLosses';
	/**
	 * Constant for value 'DepreciationAndAmortization'
	 * @return string 'DepreciationAndAmortization'
	 */
	const VALUE_DEPRECIATIONANDAMORTIZATION = 'DepreciationAndAmortization';
	/**
	 * Constant for value 'DeferredIncomeTaxes'
	 * @return string 'DeferredIncomeTaxes'
	 */
	const VALUE_DEFERREDINCOMETAXES = 'DeferredIncomeTaxes';
	/**
	 * Constant for value 'ChangeInAssetsReceivables'
	 * @return string 'ChangeInAssetsReceivables'
	 */
	const VALUE_CHANGEINASSETSRECEIVABLES = 'ChangeInAssetsReceivables';
	/**
	 * Constant for value 'ChangeInLiabilitiesPayables'
	 * @return string 'ChangeInLiabilitiesPayables'
	 */
	const VALUE_CHANGEINLIABILITIESPAYABLES = 'ChangeInLiabilitiesPayables';
	/**
	 * Constant for value 'InvestmentSecuritiesGain'
	 * @return string 'InvestmentSecuritiesGain'
	 */
	const VALUE_INVESTMENTSECURITIESGAIN = 'InvestmentSecuritiesGain';
	/**
	 * Constant for value 'NetPolicyAcquisitionCosts'
	 * @return string 'NetPolicyAcquisitionCosts'
	 */
	const VALUE_NETPOLICYACQUISITIONCOSTS = 'NetPolicyAcquisitionCosts';
	/**
	 * Constant for value 'RealizedInvestmentGains'
	 * @return string 'RealizedInvestmentGains'
	 */
	const VALUE_REALIZEDINVESTMENTGAINS = 'RealizedInvestmentGains';
	/**
	 * Constant for value 'NetPremiumsReceivables'
	 * @return string 'NetPremiumsReceivables'
	 */
	const VALUE_NETPREMIUMSRECEIVABLES = 'NetPremiumsReceivables';
	/**
	 * Constant for value 'ChangeInIncomeTaxes'
	 * @return string 'ChangeInIncomeTaxes'
	 */
	const VALUE_CHANGEININCOMETAXES = 'ChangeInIncomeTaxes';
	/**
	 * Constant for value 'OtherNonCashItems'
	 * @return string 'OtherNonCashItems'
	 */
	const VALUE_OTHERNONCASHITEMS = 'OtherNonCashItems';
	/**
	 * Constant for value 'NetCashFromOperatingActivities'
	 * @return string 'NetCashFromOperatingActivities'
	 */
	const VALUE_NETCASHFROMOPERATINGACTIVITIES = 'NetCashFromOperatingActivities';
	/**
	 * Constant for value 'ProceedsfromSaleAndMaturityOfInvestment'
	 * @return string 'ProceedsfromSaleAndMaturityOfInvestment'
	 */
	const VALUE_PROCEEDSFROMSALEANDMATURITYOFINVESTMENT = 'ProceedsfromSaleAndMaturityOfInvestment';
	/**
	 * Constant for value 'PurchaseOfInvestmentSecurities'
	 * @return string 'PurchaseOfInvestmentSecurities'
	 */
	const VALUE_PURCHASEOFINVESTMENTSECURITIES = 'PurchaseOfInvestmentSecurities';
	/**
	 * Constant for value 'NetIncreaseFederalFundsSold'
	 * @return string 'NetIncreaseFederalFundsSold'
	 */
	const VALUE_NETINCREASEFEDERALFUNDSSOLD = 'NetIncreaseFederalFundsSold';
	/**
	 * Constant for value 'PurchaseOfPropertyAndEquipment'
	 * @return string 'PurchaseOfPropertyAndEquipment'
	 */
	const VALUE_PURCHASEOFPROPERTYANDEQUIPMENT = 'PurchaseOfPropertyAndEquipment';
	/**
	 * Constant for value 'Acquisitions'
	 * @return string 'Acquisitions'
	 */
	const VALUE_ACQUISITIONS = 'Acquisitions';
	/**
	 * Constant for value 'NetOtherInvestingChanges'
	 * @return string 'NetOtherInvestingChanges'
	 */
	const VALUE_NETOTHERINVESTINGCHANGES = 'NetOtherInvestingChanges';
	/**
	 * Constant for value 'NetCashFromInvestingActivities'
	 * @return string 'NetCashFromInvestingActivities'
	 */
	const VALUE_NETCASHFROMINVESTINGACTIVITIES = 'NetCashFromInvestingActivities';
	/**
	 * Constant for value 'NetChangeInDeposits'
	 * @return string 'NetChangeInDeposits'
	 */
	const VALUE_NETCHANGEINDEPOSITS = 'NetChangeInDeposits';
	/**
	 * Constant for value 'CashDividendsPaid'
	 * @return string 'CashDividendsPaid'
	 */
	const VALUE_CASHDIVIDENDSPAID = 'CashDividendsPaid';
	/**
	 * Constant for value 'RepaymentOfLongTermDebt'
	 * @return string 'RepaymentOfLongTermDebt'
	 */
	const VALUE_REPAYMENTOFLONGTERMDEBT = 'RepaymentOfLongTermDebt';
	/**
	 * Constant for value 'ChangeOfShortTermDebt'
	 * @return string 'ChangeOfShortTermDebt'
	 */
	const VALUE_CHANGEOFSHORTTERMDEBT = 'ChangeOfShortTermDebt';
	/**
	 * Constant for value 'IssuanceOfLongTermDebt'
	 * @return string 'IssuanceOfLongTermDebt'
	 */
	const VALUE_ISSUANCEOFLONGTERMDEBT = 'IssuanceOfLongTermDebt';
	/**
	 * Constant for value 'IssuanceOfPreferredStock'
	 * @return string 'IssuanceOfPreferredStock'
	 */
	const VALUE_ISSUANCEOFPREFERREDSTOCK = 'IssuanceOfPreferredStock';
	/**
	 * Constant for value 'IssuanceOfCommonStock'
	 * @return string 'IssuanceOfCommonStock'
	 */
	const VALUE_ISSUANCEOFCOMMONSTOCK = 'IssuanceOfCommonStock';
	/**
	 * Constant for value 'PurchaseOfTreasuryStock'
	 * @return string 'PurchaseOfTreasuryStock'
	 */
	const VALUE_PURCHASEOFTREASURYSTOCK = 'PurchaseOfTreasuryStock';
	/**
	 * Constant for value 'OtherFinancingActivities'
	 * @return string 'OtherFinancingActivities'
	 */
	const VALUE_OTHERFINANCINGACTIVITIES = 'OtherFinancingActivities';
	/**
	 * Constant for value 'NetCashfromFinancingActivities'
	 * @return string 'NetCashfromFinancingActivities'
	 */
	const VALUE_NETCASHFROMFINANCINGACTIVITIES = 'NetCashfromFinancingActivities';
	/**
	 * Constant for value 'EffectOfExchangeRateChanges'
	 * @return string 'EffectOfExchangeRateChanges'
	 */
	const VALUE_EFFECTOFEXCHANGERATECHANGES = 'EffectOfExchangeRateChanges';
	/**
	 * Constant for value 'NetChangeinCashAndEquivalents'
	 * @return string 'NetChangeinCashAndEquivalents'
	 */
	const VALUE_NETCHANGEINCASHANDEQUIVALENTS = 'NetChangeinCashAndEquivalents';
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
	 * Constant for value 'TotalRiskBasedCapitalRatio'
	 * @return string 'TotalRiskBasedCapitalRatio'
	 */
	const VALUE_TOTALRISKBASEDCAPITALRATIO = 'TotalRiskBasedCapitalRatio';
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
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constructor
	 * @return XiFinancialsTypeFinancialServicesItemTypes
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
		return in_array($_value,array(self::VALUE_NAME,self::VALUE_INTERIMENDINGDATE,self::VALUE_DATEPRELIMINARYDATALOADED,self::VALUE_EARNINGSPERIODINDICATOR,self::VALUE_QUARTERLYINDICATOR,self::VALUE_BASICEARNINGSINDICATOR,self::VALUE_TEMPLATEINDICATOR,self::VALUE_PRELIMINARYFULLCONTEXTINDICATOR,self::VALUE_PROJECTEDFISCALYEARENDDATE,self::VALUE_NUMBEROFMONTHSSINCELASTREPORTINGPERIOD,self::VALUE_INCOMEFROMLOANS,self::VALUE_INVESTMENTSECURITIESINCOME,self::VALUE_LEASEFINANCINGINCOME,self::VALUE_OTHERINTERESTINCOME,self::VALUE_INCOMEFROMFEDERALFUNDSSOLDORPURCHASED,self::VALUE_INCOMEFROMINTERESTBEARINGDEPOSITS,self::VALUE_INCOMEFROMLOANSHELDFORRESALE,self::VALUE_TRADINGACCOUNTSECURITIESINCOME,self::VALUE_INCOMEFROMTIMEDEPOSITSPLACED,self::VALUE_OTHERMONEYMARKETINVESTMENTSINCOME,self::VALUE_TOTALMONEYMARKETINVESTMENTSINCOME,self::VALUE_TOTALINTERESTINCOME,self::VALUE_INTERESTONDEPOSITS,self::VALUE_INTERESTONSHORTTERMDEBT,self::VALUE_INTERESTONLONGTERMDEBT,self::VALUE_INTERESTONFEDERALFUNDSPURCHASEDSOLD,self::VALUE_INTERESTONCAPITALIZEDLEASEOBLIGATIONS,self::VALUE_OTHERINTERESTEXPENSE,self::VALUE_TOTALINTERESTEXPENSE,self::VALUE_NETINTERESTINCOMEOREXPENSE,self::VALUE_PROVISIONFORLOANLOSS,self::VALUE_TRUSTFEESBYCOMMISSIONS,self::VALUE_SERVICECHARGEONDEPOSITACCOUNTS,self::VALUE_OTHERSERVICECHARGES,self::VALUE_SECURITYTRANSACTIONS,self::VALUE_PREMIUMSEARNED,self::VALUE_NETREALIZEDCAPITALGAINS,self::VALUE_INVESTMENTBANKINGPROFIT,self::VALUE_OTHERNONINTERESTINCOME,self::VALUE_TOTALNONINTERESTINCOME,self::VALUE_SALARIESANDEMPLOYEEBENEFITS,self::VALUE_NETOCCUPANCYEXPENSE,self::VALUE_PROMOTIONSANDADVERTISING,self::VALUE_PROPERTYLIABILITYINSURANCECLAIMS,self::VALUE_POLICYACQUISITIONCOSTS,self::VALUE_AMORTIZATIONOFDEFERREDPOLICYACQUISITIONCOSTS,self::VALUE_CURRENTANDFUTUREBENEFITS,self::VALUE_OTHERNONINTERESTEXPENSE,self::VALUE_TOTALNONINTERESTEXPENSE,self::VALUE_PREMIUMTAXORCREDIT,self::VALUE_MINORITYINTERESTEXPENSE,self::VALUE_INCOMETAXES,self::VALUE_INCOMEACQUIREDINPROCESSRANDD,self::VALUE_INCOMERESTRUCTURINGANDMANDA,self::VALUE_OTHERSPECIALCHARGES,self::VALUE_SPECIALINCOMECHARGES,self::VALUE_NETINCOMEFROMCONTINUINGOPERATIONS,self::VALUE_NETINCOMEFROMDISCONTINUEDOPERATIONS,self::VALUE_NETINCOMEFROMTOTALOPERATIONS,self::VALUE_EXTRAORDINARYINCOMELOSSES,self::VALUE_INCOMEFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES,self::VALUE_INCOMEFROMTAXLOSSCARRYFORWARD,self::VALUE_OTHERGAINSORLOSSES,self::VALUE_TOTALNETINCOME,self::VALUE_NORMALIZEDINCOME,self::VALUE_NETINCOMEAVAILABLEFORCOMMON,self::VALUE_PREFERREDDIVIDENDS,self::VALUE_BASICEPSFROMCONTINUINGOPERATIONS,self::VALUE_BASICEPSFROMDISCONTINUEDOPERATIONS,self::VALUE_BASICEPSFROMTOTALOPERATIONS,self::VALUE_BASICEPSFROMEXTRAORDINARYINCOME,self::VALUE_BASICEPSFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES,self::VALUE_BASICEPSFROMTAXLOSSCARRYFORWARDS,self::VALUE_BASICEPSFROMOTHERGAINSANDLOSSES,self::VALUE_BASICEPSTOTAL,self::VALUE_BASICNORMALIZEDNETINCOMESHARE,self::VALUE_DILUTEDEPSFROMCONTINUINGOPERATIONS,self::VALUE_DILUTEDEPSFROMDISCONTINUEDOPERATIONS,self::VALUE_DILUTEDEPSFROMTOTALOPERATIONS,self::VALUE_DILUTEDEPSFROMEXTRAORDINARYINCOME,self::VALUE_DILUTEDEPSFROMCUMMULATEDEFFECTOFACCOUNTINGCHANGES,self::VALUE_DILUTEDEPSFROMTAXLOSSCARRYFORWARD,self::VALUE_DILUTEDEPSFROMOTHERGAINSANDLOSSES,self::VALUE_DILUTEDEPSTOTAL,self::VALUE_DILUTEDNORMALIZEDNETINCOMESHARE,self::VALUE_DIVIDENDSPAIDPERSHARE,self::VALUE_REVENUESYEARTODATE,self::VALUE_INCOMEYEARTODATEFROMTOTALOPERATIONS,self::VALUE_DILUTEDEPSYEARTODATEFROMTOTALOPERATIONS,self::VALUE_DIVIDENDSPAIDPERSHAREYEARTODATE,self::VALUE_CASHANDDUEFROMBANKS,self::VALUE_RESTRICTEDCASH,self::VALUE_FEDERALFUNDSSOLDORSECURITIESPURCHASED,self::VALUE_INTERESTBEARINGDEPOSITSATOTHERBANKS,self::VALUE_NETINVESTMENTSECURITIES,self::VALUE_LOANS,self::VALUE_UNEARNEDPREMIUMSASSETS,self::VALUE_ALLOWANCEFORLOANSANDLEASELOSSES,self::VALUE_NETLOANS,self::VALUE_PREMISESANDEQUIPMENT,self::VALUE_DUEFROMCUSTOMERSACCEPTANCE,self::VALUE_TRADINGACCOUNTSECURITIES,self::VALUE_OTHERRECEIVABLES,self::VALUE_ACCRUEDINTEREST,self::VALUE_DEFERREDACQUISITIONCOST,self::VALUE_ACCRUEDINVESTMENTINCOME,self::VALUE_SEPARATEACCOUNTBUSINESS,self::VALUE_TIMEDEPOSITSPLACED,self::VALUE_INTANGIBLEASSETS,self::VALUE_OTHERASSETS,self::VALUE_TOTALASSETS,self::VALUE_NONINTERESTBEARINGDEPOSITS,self::VALUE_INTERESTBEARINGDEPOSITS,self::VALUE_SHORTTERMDEBT,self::VALUE_OTHERLIABILITIES,self::VALUE_BANKERSACCEPTANCEOUTSTANDING,self::VALUE_FEDERALSFUNDSPURCHASEDSECURITIESSOLD,self::VALUE_ACCRUEDTAXES,self::VALUE_ACCRUEDINTERESTPAYABLES,self::VALUE_OTHERPAYABLES,self::VALUE_CAPITALLEASEOBLIGATIONS,self::VALUE_CLAIMSANDCLAIMEXPENSE,self::VALUE_FUTUREPOLICYBENEFITS,self::VALUE_UNEARNEDPREMIUMSLIABILITIES,self::VALUE_POLICYHOLDERFUNDS,self::VALUE_PARTICIPATINGPOLICYHOLDEREQUITY,self::VALUE_SEPARATEACCOUNTSBUSINESS,self::VALUE_MINORITYINTEREST,self::VALUE_LONGTERMDEBT,self::VALUE_PREFERREDSTOCKEQUITY,self::VALUE_COMMONSTOCKEQUITY,self::VALUE_COMMONPAR,self::VALUE_ADDITIONALPAIDINCAPITAL,self::VALUE_CUMULATIVETRANSLATIONADJUSTMENT,self::VALUE_RETAINEDEARNINGS,self::VALUE_TREASURYSTOCK,self::VALUE_OTHEREQUITYADJUSTMENTS,self::VALUE_FOREIGNCURRENCYADJUSTMENTS,self::VALUE_NETUNREALIZEDLOSSGAINONINVESTMENTS,self::VALUE_NETUNREALIZEDLOSSGAINONFOREIGNCURRENCIES,self::VALUE_NETOTHERUNEARNEDLOSSESGAINS,self::VALUE_TOTALEQUITY,self::VALUE_TOTALLIABILITIES,self::VALUE_SHARESOUTSTANDINGCOMMONCLASSONLY,self::VALUE_PREFERREDSHARES,self::VALUE_TOTALORDINARYSHARES,self::VALUE_TOTALCOMMONSHARESOUTSTANDING,self::VALUE_TREASURYSHARES,self::VALUE_BASICWEIGHTEDSHARESOUTSTANDING,self::VALUE_DILUTEDWEIGHTEDSHARESOUTSTANDING,self::VALUE_NUMBEROFEMPLOYEES,self::VALUE_NUMBEROFPARTTIMEEMPLOYEES,self::VALUE_NETINCOMEOREARNINGS,self::VALUE_PROVISIONFORLOANLOSSES,self::VALUE_DEPRECIATIONANDAMORTIZATION,self::VALUE_DEFERREDINCOMETAXES,self::VALUE_CHANGEINASSETSRECEIVABLES,self::VALUE_CHANGEINLIABILITIESPAYABLES,self::VALUE_INVESTMENTSECURITIESGAIN,self::VALUE_NETPOLICYACQUISITIONCOSTS,self::VALUE_REALIZEDINVESTMENTGAINS,self::VALUE_NETPREMIUMSRECEIVABLES,self::VALUE_CHANGEININCOMETAXES,self::VALUE_OTHERNONCASHITEMS,self::VALUE_NETCASHFROMOPERATINGACTIVITIES,self::VALUE_PROCEEDSFROMSALEANDMATURITYOFINVESTMENT,self::VALUE_PURCHASEOFINVESTMENTSECURITIES,self::VALUE_NETINCREASEFEDERALFUNDSSOLD,self::VALUE_PURCHASEOFPROPERTYANDEQUIPMENT,self::VALUE_ACQUISITIONS,self::VALUE_NETOTHERINVESTINGCHANGES,self::VALUE_NETCASHFROMINVESTINGACTIVITIES,self::VALUE_NETCHANGEINDEPOSITS,self::VALUE_CASHDIVIDENDSPAID,self::VALUE_REPAYMENTOFLONGTERMDEBT,self::VALUE_CHANGEOFSHORTTERMDEBT,self::VALUE_ISSUANCEOFLONGTERMDEBT,self::VALUE_ISSUANCEOFPREFERREDSTOCK,self::VALUE_ISSUANCEOFCOMMONSTOCK,self::VALUE_PURCHASEOFTREASURYSTOCK,self::VALUE_OTHERFINANCINGACTIVITIES,self::VALUE_NETCASHFROMFINANCINGACTIVITIES,self::VALUE_EFFECTOFEXCHANGERATECHANGES,self::VALUE_NETCHANGEINCASHANDEQUIVALENTS,self::VALUE_CASHATBEGINNINGOFPERIOD,self::VALUE_CASHATENDOFPERIOD,self::VALUE_TOTALRISKBASEDCAPITALRATIO,self::VALUE_AUDITORSNAME,self::VALUE_AUDITORSREPORT,self::VALUE_NONE));
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