<?php
/**
 * Class file for XiWatchListsTypeRateTypes
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeRateTypes
 * @date 08/07/2012
 */
class XiWatchListsTypeRateTypes extends XiWatchListsWsdlClass
{
	/**
	 * Constant for value 'FederalFunds'
	 * @return string 'FederalFunds'
	 */
	const VALUE_FEDERALFUNDS = 'FederalFunds';
	/**
	 * Constant for value 'FederalFundsTargetRate'
	 * @return string 'FederalFundsTargetRate'
	 */
	const VALUE_FEDERALFUNDSTARGETRATE = 'FederalFundsTargetRate';
	/**
	 * Constant for value 'Libor1Month'
	 * @return string 'Libor1Month'
	 */
	const VALUE_LIBOR1MONTH = 'Libor1Month';
	/**
	 * Constant for value 'Libor2Month'
	 * @return string 'Libor2Month'
	 */
	const VALUE_LIBOR2MONTH = 'Libor2Month';
	/**
	 * Constant for value 'Libor3Month'
	 * @return string 'Libor3Month'
	 */
	const VALUE_LIBOR3MONTH = 'Libor3Month';
	/**
	 * Constant for value 'Libor4Month'
	 * @return string 'Libor4Month'
	 */
	const VALUE_LIBOR4MONTH = 'Libor4Month';
	/**
	 * Constant for value 'Libor5Month'
	 * @return string 'Libor5Month'
	 */
	const VALUE_LIBOR5MONTH = 'Libor5Month';
	/**
	 * Constant for value 'Libor6Month'
	 * @return string 'Libor6Month'
	 */
	const VALUE_LIBOR6MONTH = 'Libor6Month';
	/**
	 * Constant for value 'Libor7Month'
	 * @return string 'Libor7Month'
	 */
	const VALUE_LIBOR7MONTH = 'Libor7Month';
	/**
	 * Constant for value 'Libor8Month'
	 * @return string 'Libor8Month'
	 */
	const VALUE_LIBOR8MONTH = 'Libor8Month';
	/**
	 * Constant for value 'Libor9Month'
	 * @return string 'Libor9Month'
	 */
	const VALUE_LIBOR9MONTH = 'Libor9Month';
	/**
	 * Constant for value 'Libor10Month'
	 * @return string 'Libor10Month'
	 */
	const VALUE_LIBOR10MONTH = 'Libor10Month';
	/**
	 * Constant for value 'Libor11Month'
	 * @return string 'Libor11Month'
	 */
	const VALUE_LIBOR11MONTH = 'Libor11Month';
	/**
	 * Constant for value 'Libor1Year'
	 * @return string 'Libor1Year'
	 */
	const VALUE_LIBOR1YEAR = 'Libor1Year';
	/**
	 * Constant for value 'Libor1Week'
	 * @return string 'Libor1Week'
	 */
	const VALUE_LIBOR1WEEK = 'Libor1Week';
	/**
	 * Constant for value 'Libor2Week'
	 * @return string 'Libor2Week'
	 */
	const VALUE_LIBOR2WEEK = 'Libor2Week';
	/**
	 * Constant for value 'LiborOvernite'
	 * @return string 'LiborOvernite'
	 */
	const VALUE_LIBOROVERNITE = 'LiborOvernite';
	/**
	 * Constant for value 'CommercialPaperNonFinancial1Month'
	 * @return string 'CommercialPaperNonFinancial1Month'
	 */
	const VALUE_COMMERCIALPAPERNONFINANCIAL1MONTH = 'CommercialPaperNonFinancial1Month';
	/**
	 * Constant for value 'CommercialPaperNonFinancial2Month'
	 * @return string 'CommercialPaperNonFinancial2Month'
	 */
	const VALUE_COMMERCIALPAPERNONFINANCIAL2MONTH = 'CommercialPaperNonFinancial2Month';
	/**
	 * Constant for value 'CommercialPaperNonFinancial3Month'
	 * @return string 'CommercialPaperNonFinancial3Month'
	 */
	const VALUE_COMMERCIALPAPERNONFINANCIAL3MONTH = 'CommercialPaperNonFinancial3Month';
	/**
	 * Constant for value 'HistoricalCommercialPaperNonFinancial1Month'
	 * @return string 'HistoricalCommercialPaperNonFinancial1Month'
	 */
	const VALUE_HISTORICALCOMMERCIALPAPERNONFINANCIAL1MONTH = 'HistoricalCommercialPaperNonFinancial1Month';
	/**
	 * Constant for value 'HistoricalCommercialPaperNonFinancial3Month'
	 * @return string 'HistoricalCommercialPaperNonFinancial3Month'
	 */
	const VALUE_HISTORICALCOMMERCIALPAPERNONFINANCIAL3MONTH = 'HistoricalCommercialPaperNonFinancial3Month';
	/**
	 * Constant for value 'HistoricalCommercialPaperNonFinancial6Month'
	 * @return string 'HistoricalCommercialPaperNonFinancial6Month'
	 */
	const VALUE_HISTORICALCOMMERCIALPAPERNONFINANCIAL6MONTH = 'HistoricalCommercialPaperNonFinancial6Month';
	/**
	 * Constant for value 'BankersAcceptance3Month'
	 * @return string 'BankersAcceptance3Month'
	 */
	const VALUE_BANKERSACCEPTANCE3MONTH = 'BankersAcceptance3Month';
	/**
	 * Constant for value 'BankersAcceptance6Month'
	 * @return string 'BankersAcceptance6Month'
	 */
	const VALUE_BANKERSACCEPTANCE6MONTH = 'BankersAcceptance6Month';
	/**
	 * Constant for value 'CD1Month'
	 * @return string 'CD1Month'
	 */
	const VALUE_CD1MONTH = 'CD1Month';
	/**
	 * Constant for value 'CD3Month'
	 * @return string 'CD3Month'
	 */
	const VALUE_CD3MONTH = 'CD3Month';
	/**
	 * Constant for value 'CD6Month'
	 * @return string 'CD6Month'
	 */
	const VALUE_CD6MONTH = 'CD6Month';
	/**
	 * Constant for value 'EuroDollarDeposits1Month'
	 * @return string 'EuroDollarDeposits1Month'
	 */
	const VALUE_EURODOLLARDEPOSITS1MONTH = 'EuroDollarDeposits1Month';
	/**
	 * Constant for value 'EuroDollarDeposits3Month'
	 * @return string 'EuroDollarDeposits3Month'
	 */
	const VALUE_EURODOLLARDEPOSITS3MONTH = 'EuroDollarDeposits3Month';
	/**
	 * Constant for value 'EuroDollarDeposits6Month'
	 * @return string 'EuroDollarDeposits6Month'
	 */
	const VALUE_EURODOLLARDEPOSITS6MONTH = 'EuroDollarDeposits6Month';
	/**
	 * Constant for value 'Prime'
	 * @return string 'Prime'
	 */
	const VALUE_PRIME = 'Prime';
	/**
	 * Constant for value 'DiscountWindowBorrowing'
	 * @return string 'DiscountWindowBorrowing'
	 */
	const VALUE_DISCOUNTWINDOWBORROWING = 'DiscountWindowBorrowing';
	/**
	 * Constant for value 'DiscountWindowPrimaryCredit'
	 * @return string 'DiscountWindowPrimaryCredit'
	 */
	const VALUE_DISCOUNTWINDOWPRIMARYCREDIT = 'DiscountWindowPrimaryCredit';
	/**
	 * Constant for value 'TBillAuctionAverage3Month'
	 * @return string 'TBillAuctionAverage3Month'
	 */
	const VALUE_TBILLAUCTIONAVERAGE3MONTH = 'TBillAuctionAverage3Month';
	/**
	 * Constant for value 'TBillAuctionAverage6Month'
	 * @return string 'TBillAuctionAverage6Month'
	 */
	const VALUE_TBILLAUCTIONAVERAGE6MONTH = 'TBillAuctionAverage6Month';
	/**
	 * Constant for value 'TBillAuctionAverage1Year'
	 * @return string 'TBillAuctionAverage1Year'
	 */
	const VALUE_TBILLAUCTIONAVERAGE1YEAR = 'TBillAuctionAverage1Year';
	/**
	 * Constant for value 'TBillAuctionAverage4Week'
	 * @return string 'TBillAuctionAverage4Week'
	 */
	const VALUE_TBILLAUCTIONAVERAGE4WEEK = 'TBillAuctionAverage4Week';
	/**
	 * Constant for value 'TBillAuctionAverage13Week'
	 * @return string 'TBillAuctionAverage13Week'
	 */
	const VALUE_TBILLAUCTIONAVERAGE13WEEK = 'TBillAuctionAverage13Week';
	/**
	 * Constant for value 'TBillAuctionAverage26Week'
	 * @return string 'TBillAuctionAverage26Week'
	 */
	const VALUE_TBILLAUCTIONAVERAGE26WEEK = 'TBillAuctionAverage26Week';
	/**
	 * Constant for value 'TBillAuctionAverage52Week'
	 * @return string 'TBillAuctionAverage52Week'
	 */
	const VALUE_TBILLAUCTIONAVERAGE52WEEK = 'TBillAuctionAverage52Week';
	/**
	 * Constant for value 'TBillSecondaryMarket3Month'
	 * @return string 'TBillSecondaryMarket3Month'
	 */
	const VALUE_TBILLSECONDARYMARKET3MONTH = 'TBillSecondaryMarket3Month';
	/**
	 * Constant for value 'TBillSecondaryMarket6Month'
	 * @return string 'TBillSecondaryMarket6Month'
	 */
	const VALUE_TBILLSECONDARYMARKET6MONTH = 'TBillSecondaryMarket6Month';
	/**
	 * Constant for value 'TBillSecondaryMarket1Year'
	 * @return string 'TBillSecondaryMarket1Year'
	 */
	const VALUE_TBILLSECONDARYMARKET1YEAR = 'TBillSecondaryMarket1Year';
	/**
	 * Constant for value 'TBillSecondaryMarket4Week'
	 * @return string 'TBillSecondaryMarket4Week'
	 */
	const VALUE_TBILLSECONDARYMARKET4WEEK = 'TBillSecondaryMarket4Week';
	/**
	 * Constant for value 'TreasuryConstant1Month'
	 * @return string 'TreasuryConstant1Month'
	 */
	const VALUE_TREASURYCONSTANT1MONTH = 'TreasuryConstant1Month';
	/**
	 * Constant for value 'TreasuryConstant3Month'
	 * @return string 'TreasuryConstant3Month'
	 */
	const VALUE_TREASURYCONSTANT3MONTH = 'TreasuryConstant3Month';
	/**
	 * Constant for value 'TreasuryConstant6Month'
	 * @return string 'TreasuryConstant6Month'
	 */
	const VALUE_TREASURYCONSTANT6MONTH = 'TreasuryConstant6Month';
	/**
	 * Constant for value 'TreasuryConstant1Year'
	 * @return string 'TreasuryConstant1Year'
	 */
	const VALUE_TREASURYCONSTANT1YEAR = 'TreasuryConstant1Year';
	/**
	 * Constant for value 'TreasuryConstant2Year'
	 * @return string 'TreasuryConstant2Year'
	 */
	const VALUE_TREASURYCONSTANT2YEAR = 'TreasuryConstant2Year';
	/**
	 * Constant for value 'TreasuryConstant3Year'
	 * @return string 'TreasuryConstant3Year'
	 */
	const VALUE_TREASURYCONSTANT3YEAR = 'TreasuryConstant3Year';
	/**
	 * Constant for value 'TreasuryConstant5Year'
	 * @return string 'TreasuryConstant5Year'
	 */
	const VALUE_TREASURYCONSTANT5YEAR = 'TreasuryConstant5Year';
	/**
	 * Constant for value 'TreasuryConstant7Year'
	 * @return string 'TreasuryConstant7Year'
	 */
	const VALUE_TREASURYCONSTANT7YEAR = 'TreasuryConstant7Year';
	/**
	 * Constant for value 'TreasuryConstant10Year'
	 * @return string 'TreasuryConstant10Year'
	 */
	const VALUE_TREASURYCONSTANT10YEAR = 'TreasuryConstant10Year';
	/**
	 * Constant for value 'TreasuryConstant20Year'
	 * @return string 'TreasuryConstant20Year'
	 */
	const VALUE_TREASURYCONSTANT20YEAR = 'TreasuryConstant20Year';
	/**
	 * Constant for value 'TreasuryConstant20YearHistorical'
	 * @return string 'TreasuryConstant20YearHistorical'
	 */
	const VALUE_TREASURYCONSTANT20YEARHISTORICAL = 'TreasuryConstant20YearHistorical';
	/**
	 * Constant for value 'TreasuryConstant30Year'
	 * @return string 'TreasuryConstant30Year'
	 */
	const VALUE_TREASURYCONSTANT30YEAR = 'TreasuryConstant30Year';
	/**
	 * Constant for value 'TreasuryConstant10YearComposite'
	 * @return string 'TreasuryConstant10YearComposite'
	 */
	const VALUE_TREASURYCONSTANT10YEARCOMPOSITE = 'TreasuryConstant10YearComposite';
	/**
	 * Constant for value 'CommercialPaperFinancial1Month'
	 * @return string 'CommercialPaperFinancial1Month'
	 */
	const VALUE_COMMERCIALPAPERFINANCIAL1MONTH = 'CommercialPaperFinancial1Month';
	/**
	 * Constant for value 'CommercialPaperFinancial2Month'
	 * @return string 'CommercialPaperFinancial2Month'
	 */
	const VALUE_COMMERCIALPAPERFINANCIAL2MONTH = 'CommercialPaperFinancial2Month';
	/**
	 * Constant for value 'CommercialPaperFinancial3Month'
	 * @return string 'CommercialPaperFinancial3Month'
	 */
	const VALUE_COMMERCIALPAPERFINANCIAL3MONTH = 'CommercialPaperFinancial3Month';
	/**
	 * Constant for value 'HistoricalCommercialPaperFinancial1Month'
	 * @return string 'HistoricalCommercialPaperFinancial1Month'
	 */
	const VALUE_HISTORICALCOMMERCIALPAPERFINANCIAL1MONTH = 'HistoricalCommercialPaperFinancial1Month';
	/**
	 * Constant for value 'HistoricalCommercialPaperFinancial3Month'
	 * @return string 'HistoricalCommercialPaperFinancial3Month'
	 */
	const VALUE_HISTORICALCOMMERCIALPAPERFINANCIAL3MONTH = 'HistoricalCommercialPaperFinancial3Month';
	/**
	 * Constant for value 'HistoricalCommercialPaperFinancial6Month'
	 * @return string 'HistoricalCommercialPaperFinancial6Month'
	 */
	const VALUE_HISTORICALCOMMERCIALPAPERFINANCIAL6MONTH = 'HistoricalCommercialPaperFinancial6Month';
	/**
	 * Constant for value 'CorporateBondsMoodysSeasonedAaa'
	 * @return string 'CorporateBondsMoodysSeasonedAaa'
	 */
	const VALUE_CORPORATEBONDSMOODYSSEASONEDAAA = 'CorporateBondsMoodysSeasonedAaa';
	/**
	 * Constant for value 'CorporateBondsMoodysSeasonedBaa'
	 * @return string 'CorporateBondsMoodysSeasonedBaa'
	 */
	const VALUE_CORPORATEBONDSMOODYSSEASONEDBAA = 'CorporateBondsMoodysSeasonedBaa';
	/**
	 * Constant for value 'CorporateBondsAUtility'
	 * @return string 'CorporateBondsAUtility'
	 */
	const VALUE_CORPORATEBONDSAUTILITY = 'CorporateBondsAUtility';
	/**
	 * Constant for value 'StateAndLocalBonds'
	 * @return string 'StateAndLocalBonds'
	 */
	const VALUE_STATEANDLOCALBONDS = 'StateAndLocalBonds';
	/**
	 * Constant for value 'ConventionalMortgages'
	 * @return string 'ConventionalMortgages'
	 */
	const VALUE_CONVENTIONALMORTGAGES = 'ConventionalMortgages';
	/**
	 * Constant for value 'TreasuryLongTermAverageAverage'
	 * @return string 'TreasuryLongTermAverageAverage'
	 */
	const VALUE_TREASURYLONGTERMAVERAGEAVERAGE = 'TreasuryLongTermAverageAverage';
	/**
	 * Constant for value 'TreasuryLongTermAverageInflationIndexed'
	 * @return string 'TreasuryLongTermAverageInflationIndexed'
	 */
	const VALUE_TREASURYLONGTERMAVERAGEINFLATIONINDEXED = 'TreasuryLongTermAverageInflationIndexed';
	/**
	 * Constant for value 'TreasuryLongTermComposite'
	 * @return string 'TreasuryLongTermComposite'
	 */
	const VALUE_TREASURYLONGTERMCOMPOSITE = 'TreasuryLongTermComposite';
	/**
	 * Constant for value 'InterestRateSwapsOvernight'
	 * @return string 'InterestRateSwapsOvernight'
	 */
	const VALUE_INTERESTRATESWAPSOVERNIGHT = 'InterestRateSwapsOvernight';
	/**
	 * Constant for value 'InterestRateSwaps1Week'
	 * @return string 'InterestRateSwaps1Week'
	 */
	const VALUE_INTERESTRATESWAPS1WEEK = 'InterestRateSwaps1Week';
	/**
	 * Constant for value 'InterestRateSwaps2Week'
	 * @return string 'InterestRateSwaps2Week'
	 */
	const VALUE_INTERESTRATESWAPS2WEEK = 'InterestRateSwaps2Week';
	/**
	 * Constant for value 'InterestRateSwaps1Month'
	 * @return string 'InterestRateSwaps1Month'
	 */
	const VALUE_INTERESTRATESWAPS1MONTH = 'InterestRateSwaps1Month';
	/**
	 * Constant for value 'InterestRateSwaps2Month'
	 * @return string 'InterestRateSwaps2Month'
	 */
	const VALUE_INTERESTRATESWAPS2MONTH = 'InterestRateSwaps2Month';
	/**
	 * Constant for value 'InterestRateSwaps3Month'
	 * @return string 'InterestRateSwaps3Month'
	 */
	const VALUE_INTERESTRATESWAPS3MONTH = 'InterestRateSwaps3Month';
	/**
	 * Constant for value 'InterestRateSwaps4Month'
	 * @return string 'InterestRateSwaps4Month'
	 */
	const VALUE_INTERESTRATESWAPS4MONTH = 'InterestRateSwaps4Month';
	/**
	 * Constant for value 'InterestRateSwaps5Month'
	 * @return string 'InterestRateSwaps5Month'
	 */
	const VALUE_INTERESTRATESWAPS5MONTH = 'InterestRateSwaps5Month';
	/**
	 * Constant for value 'InterestRateSwaps6Month'
	 * @return string 'InterestRateSwaps6Month'
	 */
	const VALUE_INTERESTRATESWAPS6MONTH = 'InterestRateSwaps6Month';
	/**
	 * Constant for value 'InterestRateSwaps7Month'
	 * @return string 'InterestRateSwaps7Month'
	 */
	const VALUE_INTERESTRATESWAPS7MONTH = 'InterestRateSwaps7Month';
	/**
	 * Constant for value 'InterestRateSwaps8Month'
	 * @return string 'InterestRateSwaps8Month'
	 */
	const VALUE_INTERESTRATESWAPS8MONTH = 'InterestRateSwaps8Month';
	/**
	 * Constant for value 'InterestRateSwaps9Month'
	 * @return string 'InterestRateSwaps9Month'
	 */
	const VALUE_INTERESTRATESWAPS9MONTH = 'InterestRateSwaps9Month';
	/**
	 * Constant for value 'InterestRateSwaps10Month'
	 * @return string 'InterestRateSwaps10Month'
	 */
	const VALUE_INTERESTRATESWAPS10MONTH = 'InterestRateSwaps10Month';
	/**
	 * Constant for value 'InterestRateSwaps11Month'
	 * @return string 'InterestRateSwaps11Month'
	 */
	const VALUE_INTERESTRATESWAPS11MONTH = 'InterestRateSwaps11Month';
	/**
	 * Constant for value 'InterestRateSwaps1Year'
	 * @return string 'InterestRateSwaps1Year'
	 */
	const VALUE_INTERESTRATESWAPS1YEAR = 'InterestRateSwaps1Year';
	/**
	 * Constant for value 'InterestRateSwaps2Year'
	 * @return string 'InterestRateSwaps2Year'
	 */
	const VALUE_INTERESTRATESWAPS2YEAR = 'InterestRateSwaps2Year';
	/**
	 * Constant for value 'InterestRateSwaps3Year'
	 * @return string 'InterestRateSwaps3Year'
	 */
	const VALUE_INTERESTRATESWAPS3YEAR = 'InterestRateSwaps3Year';
	/**
	 * Constant for value 'InterestRateSwaps4Year'
	 * @return string 'InterestRateSwaps4Year'
	 */
	const VALUE_INTERESTRATESWAPS4YEAR = 'InterestRateSwaps4Year';
	/**
	 * Constant for value 'InterestRateSwaps5Year'
	 * @return string 'InterestRateSwaps5Year'
	 */
	const VALUE_INTERESTRATESWAPS5YEAR = 'InterestRateSwaps5Year';
	/**
	 * Constant for value 'InterestRateSwaps6Year'
	 * @return string 'InterestRateSwaps6Year'
	 */
	const VALUE_INTERESTRATESWAPS6YEAR = 'InterestRateSwaps6Year';
	/**
	 * Constant for value 'InterestRateSwaps7Year'
	 * @return string 'InterestRateSwaps7Year'
	 */
	const VALUE_INTERESTRATESWAPS7YEAR = 'InterestRateSwaps7Year';
	/**
	 * Constant for value 'InterestRateSwaps10Year'
	 * @return string 'InterestRateSwaps10Year'
	 */
	const VALUE_INTERESTRATESWAPS10YEAR = 'InterestRateSwaps10Year';
	/**
	 * Constant for value 'InterestRateSwaps20Year'
	 * @return string 'InterestRateSwaps20Year'
	 */
	const VALUE_INTERESTRATESWAPS20YEAR = 'InterestRateSwaps20Year';
	/**
	 * Constant for value 'InterestRateSwaps30Year'
	 * @return string 'InterestRateSwaps30Year'
	 */
	const VALUE_INTERESTRATESWAPS30YEAR = 'InterestRateSwaps30Year';
	/**
	 * Constant for value 'TreasuryInflationProtectedSecuritiesYield5Year'
	 * @return string 'TreasuryInflationProtectedSecuritiesYield5Year'
	 */
	const VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD5YEAR = 'TreasuryInflationProtectedSecuritiesYield5Year';
	/**
	 * Constant for value 'TreasuryInflationProtectedSecuritiesYield7Year'
	 * @return string 'TreasuryInflationProtectedSecuritiesYield7Year'
	 */
	const VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD7YEAR = 'TreasuryInflationProtectedSecuritiesYield7Year';
	/**
	 * Constant for value 'TreasuryInflationProtectedSecuritiesYield10Year'
	 * @return string 'TreasuryInflationProtectedSecuritiesYield10Year'
	 */
	const VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD10YEAR = 'TreasuryInflationProtectedSecuritiesYield10Year';
	/**
	 * Constant for value 'TreasuryInflationProtectedSecuritiesYield20Year'
	 * @return string 'TreasuryInflationProtectedSecuritiesYield20Year'
	 */
	const VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD20YEAR = 'TreasuryInflationProtectedSecuritiesYield20Year';
	/**
	 * Constant for value 'TreasuryInflationProtectedSecuritiesYield30Year'
	 * @return string 'TreasuryInflationProtectedSecuritiesYield30Year'
	 */
	const VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD30YEAR = 'TreasuryInflationProtectedSecuritiesYield30Year';
	/**
	 * Constant for value 'InterestRateSwapSpread1Year'
	 * @return string 'InterestRateSwapSpread1Year'
	 */
	const VALUE_INTERESTRATESWAPSPREAD1YEAR = 'InterestRateSwapSpread1Year';
	/**
	 * Constant for value 'InterestRateSwapSpread2Year'
	 * @return string 'InterestRateSwapSpread2Year'
	 */
	const VALUE_INTERESTRATESWAPSPREAD2YEAR = 'InterestRateSwapSpread2Year';
	/**
	 * Constant for value 'InterestRateSwapSpread3Year'
	 * @return string 'InterestRateSwapSpread3Year'
	 */
	const VALUE_INTERESTRATESWAPSPREAD3YEAR = 'InterestRateSwapSpread3Year';
	/**
	 * Constant for value 'InterestRateSwapSpread5Year'
	 * @return string 'InterestRateSwapSpread5Year'
	 */
	const VALUE_INTERESTRATESWAPSPREAD5YEAR = 'InterestRateSwapSpread5Year';
	/**
	 * Constant for value 'InterestRateSwapSpread7Year'
	 * @return string 'InterestRateSwapSpread7Year'
	 */
	const VALUE_INTERESTRATESWAPSPREAD7YEAR = 'InterestRateSwapSpread7Year';
	/**
	 * Constant for value 'InterestRateSwapSpread10Year'
	 * @return string 'InterestRateSwapSpread10Year'
	 */
	const VALUE_INTERESTRATESWAPSPREAD10YEAR = 'InterestRateSwapSpread10Year';
	/**
	 * Constant for value 'InterestRateSwapSpread30Year'
	 * @return string 'InterestRateSwapSpread30Year'
	 */
	const VALUE_INTERESTRATESWAPSPREAD30YEAR = 'InterestRateSwapSpread30Year';
	/**
	 * Constant for value 'REIBOROvernight'
	 * @return string 'REIBOROvernight'
	 */
	const VALUE_REIBOROVERNIGHT = 'REIBOROvernight';
	/**
	 * Constant for value 'REIBOR1Week'
	 * @return string 'REIBOR1Week'
	 */
	const VALUE_REIBOR1WEEK = 'REIBOR1Week';
	/**
	 * Constant for value 'REIBOR2Week'
	 * @return string 'REIBOR2Week'
	 */
	const VALUE_REIBOR2WEEK = 'REIBOR2Week';
	/**
	 * Constant for value 'REIBOR1Month'
	 * @return string 'REIBOR1Month'
	 */
	const VALUE_REIBOR1MONTH = 'REIBOR1Month';
	/**
	 * Constant for value 'REIBOR2Month'
	 * @return string 'REIBOR2Month'
	 */
	const VALUE_REIBOR2MONTH = 'REIBOR2Month';
	/**
	 * Constant for value 'REIBOR3Month'
	 * @return string 'REIBOR3Month'
	 */
	const VALUE_REIBOR3MONTH = 'REIBOR3Month';
	/**
	 * Constant for value 'REIBOR6Month'
	 * @return string 'REIBOR6Month'
	 */
	const VALUE_REIBOR6MONTH = 'REIBOR6Month';
	/**
	 * Constant for value 'REIBOR9Month'
	 * @return string 'REIBOR9Month'
	 */
	const VALUE_REIBOR9MONTH = 'REIBOR9Month';
	/**
	 * Constant for value 'REIBOR1Year'
	 * @return string 'REIBOR1Year'
	 */
	const VALUE_REIBOR1YEAR = 'REIBOR1Year';
	/**
	 * Constant for value 'REIBIDOvernight'
	 * @return string 'REIBIDOvernight'
	 */
	const VALUE_REIBIDOVERNIGHT = 'REIBIDOvernight';
	/**
	 * Constant for value 'REIBID1Week'
	 * @return string 'REIBID1Week'
	 */
	const VALUE_REIBID1WEEK = 'REIBID1Week';
	/**
	 * Constant for value 'REIBID2Week'
	 * @return string 'REIBID2Week'
	 */
	const VALUE_REIBID2WEEK = 'REIBID2Week';
	/**
	 * Constant for value 'REIBID1Month'
	 * @return string 'REIBID1Month'
	 */
	const VALUE_REIBID1MONTH = 'REIBID1Month';
	/**
	 * Constant for value 'REIBID2Month'
	 * @return string 'REIBID2Month'
	 */
	const VALUE_REIBID2MONTH = 'REIBID2Month';
	/**
	 * Constant for value 'REIBID3Month'
	 * @return string 'REIBID3Month'
	 */
	const VALUE_REIBID3MONTH = 'REIBID3Month';
	/**
	 * Constant for value 'REIBID6Month'
	 * @return string 'REIBID6Month'
	 */
	const VALUE_REIBID6MONTH = 'REIBID6Month';
	/**
	 * Constant for value 'REIBID9Month'
	 * @return string 'REIBID9Month'
	 */
	const VALUE_REIBID9MONTH = 'REIBID9Month';
	/**
	 * Constant for value 'REIBID1Year'
	 * @return string 'REIBID1Year'
	 */
	const VALUE_REIBID1YEAR = 'REIBID1Year';
	/**
	 * Constant for value 'OIBORTomorrowNext'
	 * @return string 'OIBORTomorrowNext'
	 */
	const VALUE_OIBORTOMORROWNEXT = 'OIBORTomorrowNext';
	/**
	 * Constant for value 'OIBORSpotNext'
	 * @return string 'OIBORSpotNext'
	 */
	const VALUE_OIBORSPOTNEXT = 'OIBORSpotNext';
	/**
	 * Constant for value 'OIBOR1Week'
	 * @return string 'OIBOR1Week'
	 */
	const VALUE_OIBOR1WEEK = 'OIBOR1Week';
	/**
	 * Constant for value 'OIBOR2Week'
	 * @return string 'OIBOR2Week'
	 */
	const VALUE_OIBOR2WEEK = 'OIBOR2Week';
	/**
	 * Constant for value 'OIBOR1Month'
	 * @return string 'OIBOR1Month'
	 */
	const VALUE_OIBOR1MONTH = 'OIBOR1Month';
	/**
	 * Constant for value 'OIBOR2Month'
	 * @return string 'OIBOR2Month'
	 */
	const VALUE_OIBOR2MONTH = 'OIBOR2Month';
	/**
	 * Constant for value 'OIBOR3Month'
	 * @return string 'OIBOR3Month'
	 */
	const VALUE_OIBOR3MONTH = 'OIBOR3Month';
	/**
	 * Constant for value 'OIBOR4Month'
	 * @return string 'OIBOR4Month'
	 */
	const VALUE_OIBOR4MONTH = 'OIBOR4Month';
	/**
	 * Constant for value 'OIBOR5Month'
	 * @return string 'OIBOR5Month'
	 */
	const VALUE_OIBOR5MONTH = 'OIBOR5Month';
	/**
	 * Constant for value 'OIBOR6Month'
	 * @return string 'OIBOR6Month'
	 */
	const VALUE_OIBOR6MONTH = 'OIBOR6Month';
	/**
	 * Constant for value 'OIBOR9Month'
	 * @return string 'OIBOR9Month'
	 */
	const VALUE_OIBOR9MONTH = 'OIBOR9Month';
	/**
	 * Constant for value 'OIBOR1Year'
	 * @return string 'OIBOR1Year'
	 */
	const VALUE_OIBOR1YEAR = 'OIBOR1Year';
	/**
	 * Constant for value 'STIBORTomorrowNext'
	 * @return string 'STIBORTomorrowNext'
	 */
	const VALUE_STIBORTOMORROWNEXT = 'STIBORTomorrowNext';
	/**
	 * Constant for value 'STIBOR1Week'
	 * @return string 'STIBOR1Week'
	 */
	const VALUE_STIBOR1WEEK = 'STIBOR1Week';
	/**
	 * Constant for value 'STIBOR1Month'
	 * @return string 'STIBOR1Month'
	 */
	const VALUE_STIBOR1MONTH = 'STIBOR1Month';
	/**
	 * Constant for value 'STIBOR2Month'
	 * @return string 'STIBOR2Month'
	 */
	const VALUE_STIBOR2MONTH = 'STIBOR2Month';
	/**
	 * Constant for value 'STIBOR3Month'
	 * @return string 'STIBOR3Month'
	 */
	const VALUE_STIBOR3MONTH = 'STIBOR3Month';
	/**
	 * Constant for value 'STIBOR6Month'
	 * @return string 'STIBOR6Month'
	 */
	const VALUE_STIBOR6MONTH = 'STIBOR6Month';
	/**
	 * Constant for value 'STIBOR9Month'
	 * @return string 'STIBOR9Month'
	 */
	const VALUE_STIBOR9MONTH = 'STIBOR9Month';
	/**
	 * Constant for value 'STIBOR1Year'
	 * @return string 'STIBOR1Year'
	 */
	const VALUE_STIBOR1YEAR = 'STIBOR1Year';
	/**
	 * Constant for value 'AIDIBOR1Month'
	 * @return string 'AIDIBOR1Month'
	 */
	const VALUE_AIDIBOR1MONTH = 'AIDIBOR1Month';
	/**
	 * Constant for value 'AIDIBOR3Month'
	 * @return string 'AIDIBOR3Month'
	 */
	const VALUE_AIDIBOR3MONTH = 'AIDIBOR3Month';
	/**
	 * Constant for value 'AIDIBOR6Month'
	 * @return string 'AIDIBOR6Month'
	 */
	const VALUE_AIDIBOR6MONTH = 'AIDIBOR6Month';
	/**
	 * Constant for value 'AIDIBOR1Year'
	 * @return string 'AIDIBOR1Year'
	 */
	const VALUE_AIDIBOR1YEAR = 'AIDIBOR1Year';
	/**
	 * Constant for value 'AIDIBOR1Week'
	 * @return string 'AIDIBOR1Week'
	 */
	const VALUE_AIDIBOR1WEEK = 'AIDIBOR1Week';
	/**
	 * Constant for value 'AIDIBOR2Month'
	 * @return string 'AIDIBOR2Month'
	 */
	const VALUE_AIDIBOR2MONTH = 'AIDIBOR2Month';
	/**
	 * Constant for value 'SIBOROvernight'
	 * @return string 'SIBOROvernight'
	 */
	const VALUE_SIBOROVERNIGHT = 'SIBOROvernight';
	/**
	 * Constant for value 'SIBORTomorrowNext'
	 * @return string 'SIBORTomorrowNext'
	 */
	const VALUE_SIBORTOMORROWNEXT = 'SIBORTomorrowNext';
	/**
	 * Constant for value 'SIBOR1Week'
	 * @return string 'SIBOR1Week'
	 */
	const VALUE_SIBOR1WEEK = 'SIBOR1Week';
	/**
	 * Constant for value 'SIBOR1Month'
	 * @return string 'SIBOR1Month'
	 */
	const VALUE_SIBOR1MONTH = 'SIBOR1Month';
	/**
	 * Constant for value 'SIBOR2Month'
	 * @return string 'SIBOR2Month'
	 */
	const VALUE_SIBOR2MONTH = 'SIBOR2Month';
	/**
	 * Constant for value 'SIBOR3Month'
	 * @return string 'SIBOR3Month'
	 */
	const VALUE_SIBOR3MONTH = 'SIBOR3Month';
	/**
	 * Constant for value 'SIBOR6Month'
	 * @return string 'SIBOR6Month'
	 */
	const VALUE_SIBOR6MONTH = 'SIBOR6Month';
	/**
	 * Constant for value 'SIBOR9Month'
	 * @return string 'SIBOR9Month'
	 */
	const VALUE_SIBOR9MONTH = 'SIBOR9Month';
	/**
	 * Constant for value 'SIBOR1Year'
	 * @return string 'SIBOR1Year'
	 */
	const VALUE_SIBOR1YEAR = 'SIBOR1Year';
	/**
	 * Constant for value 'SIBORSORA'
	 * @return string 'SIBORSORA'
	 */
	const VALUE_SIBORSORA = 'SIBORSORA';
	/**
	 * Constant for value 'SIBOROvernightRepo'
	 * @return string 'SIBOROvernightRepo'
	 */
	const VALUE_SIBOROVERNIGHTREPO = 'SIBOROvernightRepo';
	/**
	 * Constant for value 'RIGIBOROvernight'
	 * @return string 'RIGIBOROvernight'
	 */
	const VALUE_RIGIBOROVERNIGHT = 'RIGIBOROvernight';
	/**
	 * Constant for value 'RIGIBOR1Month'
	 * @return string 'RIGIBOR1Month'
	 */
	const VALUE_RIGIBOR1MONTH = 'RIGIBOR1Month';
	/**
	 * Constant for value 'RIGIBOR3Month'
	 * @return string 'RIGIBOR3Month'
	 */
	const VALUE_RIGIBOR3MONTH = 'RIGIBOR3Month';
	/**
	 * Constant for value 'RIGIBOR6Month'
	 * @return string 'RIGIBOR6Month'
	 */
	const VALUE_RIGIBOR6MONTH = 'RIGIBOR6Month';
	/**
	 * Constant for value 'RIGIBOR1Year'
	 * @return string 'RIGIBOR1Year'
	 */
	const VALUE_RIGIBOR1YEAR = 'RIGIBOR1Year';
	/**
	 * Constant for value 'RIGIBIDOvernight'
	 * @return string 'RIGIBIDOvernight'
	 */
	const VALUE_RIGIBIDOVERNIGHT = 'RIGIBIDOvernight';
	/**
	 * Constant for value 'WIBOROvernight'
	 * @return string 'WIBOROvernight'
	 */
	const VALUE_WIBOROVERNIGHT = 'WIBOROvernight';
	/**
	 * Constant for value 'WIBORTomorrowNext'
	 * @return string 'WIBORTomorrowNext'
	 */
	const VALUE_WIBORTOMORROWNEXT = 'WIBORTomorrowNext';
	/**
	 * Constant for value 'WIBOR1Week'
	 * @return string 'WIBOR1Week'
	 */
	const VALUE_WIBOR1WEEK = 'WIBOR1Week';
	/**
	 * Constant for value 'WIBOR2Week'
	 * @return string 'WIBOR2Week'
	 */
	const VALUE_WIBOR2WEEK = 'WIBOR2Week';
	/**
	 * Constant for value 'WIBOR1Month'
	 * @return string 'WIBOR1Month'
	 */
	const VALUE_WIBOR1MONTH = 'WIBOR1Month';
	/**
	 * Constant for value 'WIBOR3Month'
	 * @return string 'WIBOR3Month'
	 */
	const VALUE_WIBOR3MONTH = 'WIBOR3Month';
	/**
	 * Constant for value 'WIBOR4Month'
	 * @return string 'WIBOR4Month'
	 */
	const VALUE_WIBOR4MONTH = 'WIBOR4Month';
	/**
	 * Constant for value 'WIBOR6Month'
	 * @return string 'WIBOR6Month'
	 */
	const VALUE_WIBOR6MONTH = 'WIBOR6Month';
	/**
	 * Constant for value 'WIBOR9Month'
	 * @return string 'WIBOR9Month'
	 */
	const VALUE_WIBOR9MONTH = 'WIBOR9Month';
	/**
	 * Constant for value 'WIBOR1Year'
	 * @return string 'WIBOR1Year'
	 */
	const VALUE_WIBOR1YEAR = 'WIBOR1Year';
	/**
	 * Constant for value 'CIBOR1Week'
	 * @return string 'CIBOR1Week'
	 */
	const VALUE_CIBOR1WEEK = 'CIBOR1Week';
	/**
	 * Constant for value 'CIBOR2Week'
	 * @return string 'CIBOR2Week'
	 */
	const VALUE_CIBOR2WEEK = 'CIBOR2Week';
	/**
	 * Constant for value 'CIBOR1Month'
	 * @return string 'CIBOR1Month'
	 */
	const VALUE_CIBOR1MONTH = 'CIBOR1Month';
	/**
	 * Constant for value 'CIBOR2Month'
	 * @return string 'CIBOR2Month'
	 */
	const VALUE_CIBOR2MONTH = 'CIBOR2Month';
	/**
	 * Constant for value 'CIBOR3Month'
	 * @return string 'CIBOR3Month'
	 */
	const VALUE_CIBOR3MONTH = 'CIBOR3Month';
	/**
	 * Constant for value 'CIBOR4Month'
	 * @return string 'CIBOR4Month'
	 */
	const VALUE_CIBOR4MONTH = 'CIBOR4Month';
	/**
	 * Constant for value 'CIBOR5Month'
	 * @return string 'CIBOR5Month'
	 */
	const VALUE_CIBOR5MONTH = 'CIBOR5Month';
	/**
	 * Constant for value 'CIBOR6Month'
	 * @return string 'CIBOR6Month'
	 */
	const VALUE_CIBOR6MONTH = 'CIBOR6Month';
	/**
	 * Constant for value 'CIBOR7Month'
	 * @return string 'CIBOR7Month'
	 */
	const VALUE_CIBOR7MONTH = 'CIBOR7Month';
	/**
	 * Constant for value 'CIBOR8Month'
	 * @return string 'CIBOR8Month'
	 */
	const VALUE_CIBOR8MONTH = 'CIBOR8Month';
	/**
	 * Constant for value 'CIBOR9Month'
	 * @return string 'CIBOR9Month'
	 */
	const VALUE_CIBOR9MONTH = 'CIBOR9Month';
	/**
	 * Constant for value 'CIBOR10Month'
	 * @return string 'CIBOR10Month'
	 */
	const VALUE_CIBOR10MONTH = 'CIBOR10Month';
	/**
	 * Constant for value 'CIBOR11Month'
	 * @return string 'CIBOR11Month'
	 */
	const VALUE_CIBOR11MONTH = 'CIBOR11Month';
	/**
	 * Constant for value 'CIBOR1Year'
	 * @return string 'CIBOR1Year'
	 */
	const VALUE_CIBOR1YEAR = 'CIBOR1Year';
	/**
	 * Constant for value 'EURIBOR1Week'
	 * @return string 'EURIBOR1Week'
	 */
	const VALUE_EURIBOR1WEEK = 'EURIBOR1Week';
	/**
	 * Constant for value 'EURIBOR2Week'
	 * @return string 'EURIBOR2Week'
	 */
	const VALUE_EURIBOR2WEEK = 'EURIBOR2Week';
	/**
	 * Constant for value 'EURIBOR3Week'
	 * @return string 'EURIBOR3Week'
	 */
	const VALUE_EURIBOR3WEEK = 'EURIBOR3Week';
	/**
	 * Constant for value 'EURIBOR1Month'
	 * @return string 'EURIBOR1Month'
	 */
	const VALUE_EURIBOR1MONTH = 'EURIBOR1Month';
	/**
	 * Constant for value 'EURIBOR2Month'
	 * @return string 'EURIBOR2Month'
	 */
	const VALUE_EURIBOR2MONTH = 'EURIBOR2Month';
	/**
	 * Constant for value 'EURIBOR3Month'
	 * @return string 'EURIBOR3Month'
	 */
	const VALUE_EURIBOR3MONTH = 'EURIBOR3Month';
	/**
	 * Constant for value 'EURIBOR4Month'
	 * @return string 'EURIBOR4Month'
	 */
	const VALUE_EURIBOR4MONTH = 'EURIBOR4Month';
	/**
	 * Constant for value 'EURIBOR5Month'
	 * @return string 'EURIBOR5Month'
	 */
	const VALUE_EURIBOR5MONTH = 'EURIBOR5Month';
	/**
	 * Constant for value 'EURIBOR6Month'
	 * @return string 'EURIBOR6Month'
	 */
	const VALUE_EURIBOR6MONTH = 'EURIBOR6Month';
	/**
	 * Constant for value 'EURIBOR7Month'
	 * @return string 'EURIBOR7Month'
	 */
	const VALUE_EURIBOR7MONTH = 'EURIBOR7Month';
	/**
	 * Constant for value 'EURIBOR8Month'
	 * @return string 'EURIBOR8Month'
	 */
	const VALUE_EURIBOR8MONTH = 'EURIBOR8Month';
	/**
	 * Constant for value 'EURIBOR9Month'
	 * @return string 'EURIBOR9Month'
	 */
	const VALUE_EURIBOR9MONTH = 'EURIBOR9Month';
	/**
	 * Constant for value 'EURIBOR10Month'
	 * @return string 'EURIBOR10Month'
	 */
	const VALUE_EURIBOR10MONTH = 'EURIBOR10Month';
	/**
	 * Constant for value 'EURIBOR11Month'
	 * @return string 'EURIBOR11Month'
	 */
	const VALUE_EURIBOR11MONTH = 'EURIBOR11Month';
	/**
	 * Constant for value 'EURIBOR1Year'
	 * @return string 'EURIBOR1Year'
	 */
	const VALUE_EURIBOR1YEAR = 'EURIBOR1Year';
	/**
	 * Constant for value 'HIBOROvernight'
	 * @return string 'HIBOROvernight'
	 */
	const VALUE_HIBOROVERNIGHT = 'HIBOROvernight';
	/**
	 * Constant for value 'HIBOR1Week'
	 * @return string 'HIBOR1Week'
	 */
	const VALUE_HIBOR1WEEK = 'HIBOR1Week';
	/**
	 * Constant for value 'HIBOR2Week'
	 * @return string 'HIBOR2Week'
	 */
	const VALUE_HIBOR2WEEK = 'HIBOR2Week';
	/**
	 * Constant for value 'HIBOR1Month'
	 * @return string 'HIBOR1Month'
	 */
	const VALUE_HIBOR1MONTH = 'HIBOR1Month';
	/**
	 * Constant for value 'HIBOR2Month'
	 * @return string 'HIBOR2Month'
	 */
	const VALUE_HIBOR2MONTH = 'HIBOR2Month';
	/**
	 * Constant for value 'HIBOR3Month'
	 * @return string 'HIBOR3Month'
	 */
	const VALUE_HIBOR3MONTH = 'HIBOR3Month';
	/**
	 * Constant for value 'HIBOR4Month'
	 * @return string 'HIBOR4Month'
	 */
	const VALUE_HIBOR4MONTH = 'HIBOR4Month';
	/**
	 * Constant for value 'HIBOR5Month'
	 * @return string 'HIBOR5Month'
	 */
	const VALUE_HIBOR5MONTH = 'HIBOR5Month';
	/**
	 * Constant for value 'HIBOR6Month'
	 * @return string 'HIBOR6Month'
	 */
	const VALUE_HIBOR6MONTH = 'HIBOR6Month';
	/**
	 * Constant for value 'HIBOR7Month'
	 * @return string 'HIBOR7Month'
	 */
	const VALUE_HIBOR7MONTH = 'HIBOR7Month';
	/**
	 * Constant for value 'HIBOR8Month'
	 * @return string 'HIBOR8Month'
	 */
	const VALUE_HIBOR8MONTH = 'HIBOR8Month';
	/**
	 * Constant for value 'HIBOR9Month'
	 * @return string 'HIBOR9Month'
	 */
	const VALUE_HIBOR9MONTH = 'HIBOR9Month';
	/**
	 * Constant for value 'HIBOR10Month'
	 * @return string 'HIBOR10Month'
	 */
	const VALUE_HIBOR10MONTH = 'HIBOR10Month';
	/**
	 * Constant for value 'HIBOR11Month'
	 * @return string 'HIBOR11Month'
	 */
	const VALUE_HIBOR11MONTH = 'HIBOR11Month';
	/**
	 * Constant for value 'HIBOR1Year'
	 * @return string 'HIBOR1Year'
	 */
	const VALUE_HIBOR1YEAR = 'HIBOR1Year';
	/**
	 * Constant for value 'BUBOROvernight'
	 * @return string 'BUBOROvernight'
	 */
	const VALUE_BUBOROVERNIGHT = 'BUBOROvernight';
	/**
	 * Constant for value 'BUBOR1Week'
	 * @return string 'BUBOR1Week'
	 */
	const VALUE_BUBOR1WEEK = 'BUBOR1Week';
	/**
	 * Constant for value 'BUBOR2Week'
	 * @return string 'BUBOR2Week'
	 */
	const VALUE_BUBOR2WEEK = 'BUBOR2Week';
	/**
	 * Constant for value 'BUBOR1Month'
	 * @return string 'BUBOR1Month'
	 */
	const VALUE_BUBOR1MONTH = 'BUBOR1Month';
	/**
	 * Constant for value 'BUBOR2Month'
	 * @return string 'BUBOR2Month'
	 */
	const VALUE_BUBOR2MONTH = 'BUBOR2Month';
	/**
	 * Constant for value 'BUBOR3Month'
	 * @return string 'BUBOR3Month'
	 */
	const VALUE_BUBOR3MONTH = 'BUBOR3Month';
	/**
	 * Constant for value 'BUBOR4Month'
	 * @return string 'BUBOR4Month'
	 */
	const VALUE_BUBOR4MONTH = 'BUBOR4Month';
	/**
	 * Constant for value 'BUBOR5Month'
	 * @return string 'BUBOR5Month'
	 */
	const VALUE_BUBOR5MONTH = 'BUBOR5Month';
	/**
	 * Constant for value 'BUBOR6Month'
	 * @return string 'BUBOR6Month'
	 */
	const VALUE_BUBOR6MONTH = 'BUBOR6Month';
	/**
	 * Constant for value 'BUBOR7Month'
	 * @return string 'BUBOR7Month'
	 */
	const VALUE_BUBOR7MONTH = 'BUBOR7Month';
	/**
	 * Constant for value 'BUBOR8Month'
	 * @return string 'BUBOR8Month'
	 */
	const VALUE_BUBOR8MONTH = 'BUBOR8Month';
	/**
	 * Constant for value 'BUBOR9Month'
	 * @return string 'BUBOR9Month'
	 */
	const VALUE_BUBOR9MONTH = 'BUBOR9Month';
	/**
	 * Constant for value 'BUBOR10Month'
	 * @return string 'BUBOR10Month'
	 */
	const VALUE_BUBOR10MONTH = 'BUBOR10Month';
	/**
	 * Constant for value 'BUBOR11Month'
	 * @return string 'BUBOR11Month'
	 */
	const VALUE_BUBOR11MONTH = 'BUBOR11Month';
	/**
	 * Constant for value 'BUBOR1Year'
	 * @return string 'BUBOR1Year'
	 */
	const VALUE_BUBOR1YEAR = 'BUBOR1Year';
	/**
	 * Constant for value 'SOFIBOROvernight'
	 * @return string 'SOFIBOROvernight'
	 */
	const VALUE_SOFIBOROVERNIGHT = 'SOFIBOROvernight';
	/**
	 * Constant for value 'SOFIBOR1Week'
	 * @return string 'SOFIBOR1Week'
	 */
	const VALUE_SOFIBOR1WEEK = 'SOFIBOR1Week';
	/**
	 * Constant for value 'SOFIBOR1Month'
	 * @return string 'SOFIBOR1Month'
	 */
	const VALUE_SOFIBOR1MONTH = 'SOFIBOR1Month';
	/**
	 * Constant for value 'SOFIBOR2Month'
	 * @return string 'SOFIBOR2Month'
	 */
	const VALUE_SOFIBOR2MONTH = 'SOFIBOR2Month';
	/**
	 * Constant for value 'SOFIBOR3Month'
	 * @return string 'SOFIBOR3Month'
	 */
	const VALUE_SOFIBOR3MONTH = 'SOFIBOR3Month';
	/**
	 * Constant for value 'MIBOROvernight'
	 * @return string 'MIBOROvernight'
	 */
	const VALUE_MIBOROVERNIGHT = 'MIBOROvernight';
	/**
	 * Constant for value 'MIBOR2Week'
	 * @return string 'MIBOR2Week'
	 */
	const VALUE_MIBOR2WEEK = 'MIBOR2Week';
	/**
	 * Constant for value 'MIBOR1Month'
	 * @return string 'MIBOR1Month'
	 */
	const VALUE_MIBOR1MONTH = 'MIBOR1Month';
	/**
	 * Constant for value 'MIBOR3Month'
	 * @return string 'MIBOR3Month'
	 */
	const VALUE_MIBOR3MONTH = 'MIBOR3Month';
	/**
	 * Constant for value 'MIBIDOvernight'
	 * @return string 'MIBIDOvernight'
	 */
	const VALUE_MIBIDOVERNIGHT = 'MIBIDOvernight';
	/**
	 * Constant for value 'MIBID2Week'
	 * @return string 'MIBID2Week'
	 */
	const VALUE_MIBID2WEEK = 'MIBID2Week';
	/**
	 * Constant for value 'MIBID1Month'
	 * @return string 'MIBID1Month'
	 */
	const VALUE_MIBID1MONTH = 'MIBID1Month';
	/**
	 * Constant for value 'MIBID3Month'
	 * @return string 'MIBID3Month'
	 */
	const VALUE_MIBID3MONTH = 'MIBID3Month';
	/**
	 * Constant for value 'KORIBOR1Week'
	 * @return string 'KORIBOR1Week'
	 */
	const VALUE_KORIBOR1WEEK = 'KORIBOR1Week';
	/**
	 * Constant for value 'KORIBOR2Week'
	 * @return string 'KORIBOR2Week'
	 */
	const VALUE_KORIBOR2WEEK = 'KORIBOR2Week';
	/**
	 * Constant for value 'KORIBOR1Month'
	 * @return string 'KORIBOR1Month'
	 */
	const VALUE_KORIBOR1MONTH = 'KORIBOR1Month';
	/**
	 * Constant for value 'KORIBOR2Month'
	 * @return string 'KORIBOR2Month'
	 */
	const VALUE_KORIBOR2MONTH = 'KORIBOR2Month';
	/**
	 * Constant for value 'KORIBOR3Month'
	 * @return string 'KORIBOR3Month'
	 */
	const VALUE_KORIBOR3MONTH = 'KORIBOR3Month';
	/**
	 * Constant for value 'KORIBOR4Month'
	 * @return string 'KORIBOR4Month'
	 */
	const VALUE_KORIBOR4MONTH = 'KORIBOR4Month';
	/**
	 * Constant for value 'KORIBOR5Month'
	 * @return string 'KORIBOR5Month'
	 */
	const VALUE_KORIBOR5MONTH = 'KORIBOR5Month';
	/**
	 * Constant for value 'KORIBOR6Month'
	 * @return string 'KORIBOR6Month'
	 */
	const VALUE_KORIBOR6MONTH = 'KORIBOR6Month';
	/**
	 * Constant for value 'KORIBOR9Month'
	 * @return string 'KORIBOR9Month'
	 */
	const VALUE_KORIBOR9MONTH = 'KORIBOR9Month';
	/**
	 * Constant for value 'KORIBOR1Year'
	 * @return string 'KORIBOR1Year'
	 */
	const VALUE_KORIBOR1YEAR = 'KORIBOR1Year';
	/**
	 * Constant for value 'PRIBOROvernight'
	 * @return string 'PRIBOROvernight'
	 */
	const VALUE_PRIBOROVERNIGHT = 'PRIBOROvernight';
	/**
	 * Constant for value 'PRIBOR1Week'
	 * @return string 'PRIBOR1Week'
	 */
	const VALUE_PRIBOR1WEEK = 'PRIBOR1Week';
	/**
	 * Constant for value 'PRIBOR2Week'
	 * @return string 'PRIBOR2Week'
	 */
	const VALUE_PRIBOR2WEEK = 'PRIBOR2Week';
	/**
	 * Constant for value 'PRIBOR1Month'
	 * @return string 'PRIBOR1Month'
	 */
	const VALUE_PRIBOR1MONTH = 'PRIBOR1Month';
	/**
	 * Constant for value 'PRIBOR2Month'
	 * @return string 'PRIBOR2Month'
	 */
	const VALUE_PRIBOR2MONTH = 'PRIBOR2Month';
	/**
	 * Constant for value 'PRIBOR3Month'
	 * @return string 'PRIBOR3Month'
	 */
	const VALUE_PRIBOR3MONTH = 'PRIBOR3Month';
	/**
	 * Constant for value 'PRIBOR6Month'
	 * @return string 'PRIBOR6Month'
	 */
	const VALUE_PRIBOR6MONTH = 'PRIBOR6Month';
	/**
	 * Constant for value 'PRIBOR9Month'
	 * @return string 'PRIBOR9Month'
	 */
	const VALUE_PRIBOR9MONTH = 'PRIBOR9Month';
	/**
	 * Constant for value 'PRIBOR1Year'
	 * @return string 'PRIBOR1Year'
	 */
	const VALUE_PRIBOR1YEAR = 'PRIBOR1Year';
	/**
	 * Constant for value 'PRIBIDOvernight'
	 * @return string 'PRIBIDOvernight'
	 */
	const VALUE_PRIBIDOVERNIGHT = 'PRIBIDOvernight';
	/**
	 * Constant for value 'PRIBID1Week'
	 * @return string 'PRIBID1Week'
	 */
	const VALUE_PRIBID1WEEK = 'PRIBID1Week';
	/**
	 * Constant for value 'PRIBID2Week'
	 * @return string 'PRIBID2Week'
	 */
	const VALUE_PRIBID2WEEK = 'PRIBID2Week';
	/**
	 * Constant for value 'PRIBID1Month'
	 * @return string 'PRIBID1Month'
	 */
	const VALUE_PRIBID1MONTH = 'PRIBID1Month';
	/**
	 * Constant for value 'PRIBID2Month'
	 * @return string 'PRIBID2Month'
	 */
	const VALUE_PRIBID2MONTH = 'PRIBID2Month';
	/**
	 * Constant for value 'PRIBID3Month'
	 * @return string 'PRIBID3Month'
	 */
	const VALUE_PRIBID3MONTH = 'PRIBID3Month';
	/**
	 * Constant for value 'PRIBID6Month'
	 * @return string 'PRIBID6Month'
	 */
	const VALUE_PRIBID6MONTH = 'PRIBID6Month';
	/**
	 * Constant for value 'PRIBID9Month'
	 * @return string 'PRIBID9Month'
	 */
	const VALUE_PRIBID9MONTH = 'PRIBID9Month';
	/**
	 * Constant for value 'PRIBID1Year'
	 * @return string 'PRIBID1Year'
	 */
	const VALUE_PRIBID1YEAR = 'PRIBID1Year';
	/**
	 * Constant for value 'SABOROvernight'
	 * @return string 'SABOROvernight'
	 */
	const VALUE_SABOROVERNIGHT = 'SABOROvernight';
	/**
	 * Constant for value 'TURKIBOROvernight'
	 * @return string 'TURKIBOROvernight'
	 */
	const VALUE_TURKIBOROVERNIGHT = 'TURKIBOROvernight';
	/**
	 * Constant for value 'CHILIBOROvernight'
	 * @return string 'CHILIBOROvernight'
	 */
	const VALUE_CHILIBOROVERNIGHT = 'CHILIBOROvernight';
	/**
	 * Constant for value 'MEXIBOR1Month'
	 * @return string 'MEXIBOR1Month'
	 */
	const VALUE_MEXIBOR1MONTH = 'MEXIBOR1Month';
	/**
	 * Constant for value 'MEXIBOR3Month'
	 * @return string 'MEXIBOR3Month'
	 */
	const VALUE_MEXIBOR3MONTH = 'MEXIBOR3Month';
	/**
	 * Constant for value 'MEXIBOR6Month'
	 * @return string 'MEXIBOR6Month'
	 */
	const VALUE_MEXIBOR6MONTH = 'MEXIBOR6Month';
	/**
	 * Constant for value 'MEXIBOR9Month'
	 * @return string 'MEXIBOR9Month'
	 */
	const VALUE_MEXIBOR9MONTH = 'MEXIBOR9Month';
	/**
	 * Constant for value 'MEXIBOR1Year'
	 * @return string 'MEXIBOR1Year'
	 */
	const VALUE_MEXIBOR1YEAR = 'MEXIBOR1Year';
	/**
	 * Constant for value 'TELBOROvernight'
	 * @return string 'TELBOROvernight'
	 */
	const VALUE_TELBOROVERNIGHT = 'TELBOROvernight';
	/**
	 * Constant for value 'TELBOR1Week'
	 * @return string 'TELBOR1Week'
	 */
	const VALUE_TELBOR1WEEK = 'TELBOR1Week';
	/**
	 * Constant for value 'TELBOR1Month'
	 * @return string 'TELBOR1Month'
	 */
	const VALUE_TELBOR1MONTH = 'TELBOR1Month';
	/**
	 * Constant for value 'TELBOR2Month'
	 * @return string 'TELBOR2Month'
	 */
	const VALUE_TELBOR2MONTH = 'TELBOR2Month';
	/**
	 * Constant for value 'TELBOR3Month'
	 * @return string 'TELBOR3Month'
	 */
	const VALUE_TELBOR3MONTH = 'TELBOR3Month';
	/**
	 * Constant for value 'TELBOR6Month'
	 * @return string 'TELBOR6Month'
	 */
	const VALUE_TELBOR6MONTH = 'TELBOR6Month';
	/**
	 * Constant for value 'TELBOR9Month'
	 * @return string 'TELBOR9Month'
	 */
	const VALUE_TELBOR9MONTH = 'TELBOR9Month';
	/**
	 * Constant for value 'TELBOR1Year'
	 * @return string 'TELBOR1Year'
	 */
	const VALUE_TELBOR1YEAR = 'TELBOR1Year';
	/**
	 * Constant for value 'CHIBOROvernight'
	 * @return string 'CHIBOROvernight'
	 */
	const VALUE_CHIBOROVERNIGHT = 'CHIBOROvernight';
	/**
	 * Constant for value 'CHIBOR1Week'
	 * @return string 'CHIBOR1Week'
	 */
	const VALUE_CHIBOR1WEEK = 'CHIBOR1Week';
	/**
	 * Constant for value 'CHIBOR2Week'
	 * @return string 'CHIBOR2Week'
	 */
	const VALUE_CHIBOR2WEEK = 'CHIBOR2Week';
	/**
	 * Constant for value 'CHIBOR3Week'
	 * @return string 'CHIBOR3Week'
	 */
	const VALUE_CHIBOR3WEEK = 'CHIBOR3Week';
	/**
	 * Constant for value 'CHIBOR1Month'
	 * @return string 'CHIBOR1Month'
	 */
	const VALUE_CHIBOR1MONTH = 'CHIBOR1Month';
	/**
	 * Constant for value 'CHIBOR2Month'
	 * @return string 'CHIBOR2Month'
	 */
	const VALUE_CHIBOR2MONTH = 'CHIBOR2Month';
	/**
	 * Constant for value 'CHIBOR3Month'
	 * @return string 'CHIBOR3Month'
	 */
	const VALUE_CHIBOR3MONTH = 'CHIBOR3Month';
	/**
	 * Constant for value 'CHIBOR4Month'
	 * @return string 'CHIBOR4Month'
	 */
	const VALUE_CHIBOR4MONTH = 'CHIBOR4Month';
	/**
	 * Constant for value 'CHIBOR6Month'
	 * @return string 'CHIBOR6Month'
	 */
	const VALUE_CHIBOR6MONTH = 'CHIBOR6Month';
	/**
	 * Constant for value 'CHIBOR9Month'
	 * @return string 'CHIBOR9Month'
	 */
	const VALUE_CHIBOR9MONTH = 'CHIBOR9Month';
	/**
	 * Constant for value 'CHIBOR1Year'
	 * @return string 'CHIBOR1Year'
	 */
	const VALUE_CHIBOR1YEAR = 'CHIBOR1Year';
	/**
	 * Constant for value 'SHIBOROvernight'
	 * @return string 'SHIBOROvernight'
	 */
	const VALUE_SHIBOROVERNIGHT = 'SHIBOROvernight';
	/**
	 * Constant for value 'SHIBOR1Week'
	 * @return string 'SHIBOR1Week'
	 */
	const VALUE_SHIBOR1WEEK = 'SHIBOR1Week';
	/**
	 * Constant for value 'SHIBOR2Week'
	 * @return string 'SHIBOR2Week'
	 */
	const VALUE_SHIBOR2WEEK = 'SHIBOR2Week';
	/**
	 * Constant for value 'SHIBOR1Month'
	 * @return string 'SHIBOR1Month'
	 */
	const VALUE_SHIBOR1MONTH = 'SHIBOR1Month';
	/**
	 * Constant for value 'SHIBOR3Month'
	 * @return string 'SHIBOR3Month'
	 */
	const VALUE_SHIBOR3MONTH = 'SHIBOR3Month';
	/**
	 * Constant for value 'SHIBOR6Month'
	 * @return string 'SHIBOR6Month'
	 */
	const VALUE_SHIBOR6MONTH = 'SHIBOR6Month';
	/**
	 * Constant for value 'SHIBOR9Month'
	 * @return string 'SHIBOR9Month'
	 */
	const VALUE_SHIBOR9MONTH = 'SHIBOR9Month';
	/**
	 * Constant for value 'SHIBOR1Year'
	 * @return string 'SHIBOR1Year'
	 */
	const VALUE_SHIBOR1YEAR = 'SHIBOR1Year';
	/**
	 * Constant for value 'JIBOR1Month'
	 * @return string 'JIBOR1Month'
	 */
	const VALUE_JIBOR1MONTH = 'JIBOR1Month';
	/**
	 * Constant for value 'JIBOR3Month'
	 * @return string 'JIBOR3Month'
	 */
	const VALUE_JIBOR3MONTH = 'JIBOR3Month';
	/**
	 * Constant for value 'JIBOR6Month'
	 * @return string 'JIBOR6Month'
	 */
	const VALUE_JIBOR6MONTH = 'JIBOR6Month';
	/**
	 * Constant for value 'JIBOROvernight'
	 * @return string 'JIBOROvernight'
	 */
	const VALUE_JIBOROVERNIGHT = 'JIBOROvernight';
	/**
	 * Constant for value 'JIBOR1Week'
	 * @return string 'JIBOR1Week'
	 */
	const VALUE_JIBOR1WEEK = 'JIBOR1Week';
	/**
	 * Constant for value 'JIBOR1Year'
	 * @return string 'JIBOR1Year'
	 */
	const VALUE_JIBOR1YEAR = 'JIBOR1Year';
	/**
	 * Constant for value 'KLIBOR1Month'
	 * @return string 'KLIBOR1Month'
	 */
	const VALUE_KLIBOR1MONTH = 'KLIBOR1Month';
	/**
	 * Constant for value 'KLIBOR2Month'
	 * @return string 'KLIBOR2Month'
	 */
	const VALUE_KLIBOR2MONTH = 'KLIBOR2Month';
	/**
	 * Constant for value 'KLIBOR3Month'
	 * @return string 'KLIBOR3Month'
	 */
	const VALUE_KLIBOR3MONTH = 'KLIBOR3Month';
	/**
	 * Constant for value 'KLIBOR6Month'
	 * @return string 'KLIBOR6Month'
	 */
	const VALUE_KLIBOR6MONTH = 'KLIBOR6Month';
	/**
	 * Constant for value 'KLIBOR9Month'
	 * @return string 'KLIBOR9Month'
	 */
	const VALUE_KLIBOR9MONTH = 'KLIBOR9Month';
	/**
	 * Constant for value 'KLIBOR1Year'
	 * @return string 'KLIBOR1Year'
	 */
	const VALUE_KLIBOR1YEAR = 'KLIBOR1Year';
	/**
	 * Constant for value 'KLIBOROvernight'
	 * @return string 'KLIBOROvernight'
	 */
	const VALUE_KLIBOROVERNIGHT = 'KLIBOROvernight';
	/**
	 * Constant for value 'KLIBOR1Week'
	 * @return string 'KLIBOR1Week'
	 */
	const VALUE_KLIBOR1WEEK = 'KLIBOR1Week';
	/**
	 * Constant for value 'TIBOR1Week'
	 * @return string 'TIBOR1Week'
	 */
	const VALUE_TIBOR1WEEK = 'TIBOR1Week';
	/**
	 * Constant for value 'TIBOR1Month'
	 * @return string 'TIBOR1Month'
	 */
	const VALUE_TIBOR1MONTH = 'TIBOR1Month';
	/**
	 * Constant for value 'TIBOR2Month'
	 * @return string 'TIBOR2Month'
	 */
	const VALUE_TIBOR2MONTH = 'TIBOR2Month';
	/**
	 * Constant for value 'TIBOR3Month'
	 * @return string 'TIBOR3Month'
	 */
	const VALUE_TIBOR3MONTH = 'TIBOR3Month';
	/**
	 * Constant for value 'TIBOR6Month'
	 * @return string 'TIBOR6Month'
	 */
	const VALUE_TIBOR6MONTH = 'TIBOR6Month';
	/**
	 * Constant for value 'TIBOR9Month'
	 * @return string 'TIBOR9Month'
	 */
	const VALUE_TIBOR9MONTH = 'TIBOR9Month';
	/**
	 * Constant for value 'TIBOR1Year'
	 * @return string 'TIBOR1Year'
	 */
	const VALUE_TIBOR1YEAR = 'TIBOR1Year';
	/**
	 * Constant for value 'PHIBOROvernight'
	 * @return string 'PHIBOROvernight'
	 */
	const VALUE_PHIBOROVERNIGHT = 'PHIBOROvernight';
	/**
	 * Constant for value 'PHIBOR1Month'
	 * @return string 'PHIBOR1Month'
	 */
	const VALUE_PHIBOR1MONTH = 'PHIBOR1Month';
	/**
	 * Constant for value 'PHIBOR2Month'
	 * @return string 'PHIBOR2Month'
	 */
	const VALUE_PHIBOR2MONTH = 'PHIBOR2Month';
	/**
	 * Constant for value 'PHIBOR3Month'
	 * @return string 'PHIBOR3Month'
	 */
	const VALUE_PHIBOR3MONTH = 'PHIBOR3Month';
	/**
	 * Constant for value 'PHIBOR6Month'
	 * @return string 'PHIBOR6Month'
	 */
	const VALUE_PHIBOR6MONTH = 'PHIBOR6Month';
	/**
	 * Constant for value 'PHIBOR1Year'
	 * @return string 'PHIBOR1Year'
	 */
	const VALUE_PHIBOR1YEAR = 'PHIBOR1Year';
	/**
	 * Constant for value 'BKIBOR1Month'
	 * @return string 'BKIBOR1Month'
	 */
	const VALUE_BKIBOR1MONTH = 'BKIBOR1Month';
	/**
	 * Constant for value 'BKIBOR2Month'
	 * @return string 'BKIBOR2Month'
	 */
	const VALUE_BKIBOR2MONTH = 'BKIBOR2Month';
	/**
	 * Constant for value 'BKIBOR3Month'
	 * @return string 'BKIBOR3Month'
	 */
	const VALUE_BKIBOR3MONTH = 'BKIBOR3Month';
	/**
	 * Constant for value 'BKIBOR6Month'
	 * @return string 'BKIBOR6Month'
	 */
	const VALUE_BKIBOR6MONTH = 'BKIBOR6Month';
	/**
	 * Constant for value 'BKIBOR9Month'
	 * @return string 'BKIBOR9Month'
	 */
	const VALUE_BKIBOR9MONTH = 'BKIBOR9Month';
	/**
	 * Constant for value 'BKIBOR1Year'
	 * @return string 'BKIBOR1Year'
	 */
	const VALUE_BKIBOR1YEAR = 'BKIBOR1Year';
	/**
	 * Constant for value 'BKIBOROvernight'
	 * @return string 'BKIBOROvernight'
	 */
	const VALUE_BKIBOROVERNIGHT = 'BKIBOROvernight';
	/**
	 * Constant for value 'BKIBOR1Week'
	 * @return string 'BKIBOR1Week'
	 */
	const VALUE_BKIBOR1WEEK = 'BKIBOR1Week';
	/**
	 * Constant for value 'VNIBOROvernight'
	 * @return string 'VNIBOROvernight'
	 */
	const VALUE_VNIBOROVERNIGHT = 'VNIBOROvernight';
	/**
	 * Constant for value 'VNIBOR1Month'
	 * @return string 'VNIBOR1Month'
	 */
	const VALUE_VNIBOR1MONTH = 'VNIBOR1Month';
	/**
	 * Constant for value 'VNIBOR1Week'
	 * @return string 'VNIBOR1Week'
	 */
	const VALUE_VNIBOR1WEEK = 'VNIBOR1Week';
	/**
	 * Constant for value 'VNIBOR2Week'
	 * @return string 'VNIBOR2Week'
	 */
	const VALUE_VNIBOR2WEEK = 'VNIBOR2Week';
	/**
	 * Constant for value 'VNIBOR2Month'
	 * @return string 'VNIBOR2Month'
	 */
	const VALUE_VNIBOR2MONTH = 'VNIBOR2Month';
	/**
	 * Constant for value 'VNIBOR3Month'
	 * @return string 'VNIBOR3Month'
	 */
	const VALUE_VNIBOR3MONTH = 'VNIBOR3Month';
	/**
	 * Constant for value 'VNIBOR6Month'
	 * @return string 'VNIBOR6Month'
	 */
	const VALUE_VNIBOR6MONTH = 'VNIBOR6Month';
	/**
	 * Constant for value 'VNIBOR1Year'
	 * @return string 'VNIBOR1Year'
	 */
	const VALUE_VNIBOR1YEAR = 'VNIBOR1Year';
	/**
	 * Constant for value 'KAIBOR1Week'
	 * @return string 'KAIBOR1Week'
	 */
	const VALUE_KAIBOR1WEEK = 'KAIBOR1Week';
	/**
	 * Constant for value 'KAIBOR2Week'
	 * @return string 'KAIBOR2Week'
	 */
	const VALUE_KAIBOR2WEEK = 'KAIBOR2Week';
	/**
	 * Constant for value 'KAIBOR1Month'
	 * @return string 'KAIBOR1Month'
	 */
	const VALUE_KAIBOR1MONTH = 'KAIBOR1Month';
	/**
	 * Constant for value 'KAIBOR2Month'
	 * @return string 'KAIBOR2Month'
	 */
	const VALUE_KAIBOR2MONTH = 'KAIBOR2Month';
	/**
	 * Constant for value 'KAIBOR3Month'
	 * @return string 'KAIBOR3Month'
	 */
	const VALUE_KAIBOR3MONTH = 'KAIBOR3Month';
	/**
	 * Constant for value 'KAIBID1Week'
	 * @return string 'KAIBID1Week'
	 */
	const VALUE_KAIBID1WEEK = 'KAIBID1Week';
	/**
	 * Constant for value 'KAIBID2Week'
	 * @return string 'KAIBID2Week'
	 */
	const VALUE_KAIBID2WEEK = 'KAIBID2Week';
	/**
	 * Constant for value 'KAIBID1Month'
	 * @return string 'KAIBID1Month'
	 */
	const VALUE_KAIBID1MONTH = 'KAIBID1Month';
	/**
	 * Constant for value 'KAIBID2Month'
	 * @return string 'KAIBID2Month'
	 */
	const VALUE_KAIBID2MONTH = 'KAIBID2Month';
	/**
	 * Constant for value 'KAIBID3Month'
	 * @return string 'KAIBID3Month'
	 */
	const VALUE_KAIBID3MONTH = 'KAIBID3Month';
	/**
	 * Constant for value 'KIBOR1Week'
	 * @return string 'KIBOR1Week'
	 */
	const VALUE_KIBOR1WEEK = 'KIBOR1Week';
	/**
	 * Constant for value 'KIBOR2Week'
	 * @return string 'KIBOR2Week'
	 */
	const VALUE_KIBOR2WEEK = 'KIBOR2Week';
	/**
	 * Constant for value 'KIBOR1Month'
	 * @return string 'KIBOR1Month'
	 */
	const VALUE_KIBOR1MONTH = 'KIBOR1Month';
	/**
	 * Constant for value 'KIBOR3Month'
	 * @return string 'KIBOR3Month'
	 */
	const VALUE_KIBOR3MONTH = 'KIBOR3Month';
	/**
	 * Constant for value 'KIBOR6Month'
	 * @return string 'KIBOR6Month'
	 */
	const VALUE_KIBOR6MONTH = 'KIBOR6Month';
	/**
	 * Constant for value 'KIBOR9Month'
	 * @return string 'KIBOR9Month'
	 */
	const VALUE_KIBOR9MONTH = 'KIBOR9Month';
	/**
	 * Constant for value 'KIBOR1Year'
	 * @return string 'KIBOR1Year'
	 */
	const VALUE_KIBOR1YEAR = 'KIBOR1Year';
	/**
	 * Constant for value 'KIBOR2Year'
	 * @return string 'KIBOR2Year'
	 */
	const VALUE_KIBOR2YEAR = 'KIBOR2Year';
	/**
	 * Constant for value 'KIBOR3Year'
	 * @return string 'KIBOR3Year'
	 */
	const VALUE_KIBOR3YEAR = 'KIBOR3Year';
	/**
	 * Constant for value 'KIBID1Week'
	 * @return string 'KIBID1Week'
	 */
	const VALUE_KIBID1WEEK = 'KIBID1Week';
	/**
	 * Constant for value 'KIBID2Week'
	 * @return string 'KIBID2Week'
	 */
	const VALUE_KIBID2WEEK = 'KIBID2Week';
	/**
	 * Constant for value 'KIBID1Month'
	 * @return string 'KIBID1Month'
	 */
	const VALUE_KIBID1MONTH = 'KIBID1Month';
	/**
	 * Constant for value 'KIBID3Month'
	 * @return string 'KIBID3Month'
	 */
	const VALUE_KIBID3MONTH = 'KIBID3Month';
	/**
	 * Constant for value 'KIBID6Month'
	 * @return string 'KIBID6Month'
	 */
	const VALUE_KIBID6MONTH = 'KIBID6Month';
	/**
	 * Constant for value 'KIBID9Month'
	 * @return string 'KIBID9Month'
	 */
	const VALUE_KIBID9MONTH = 'KIBID9Month';
	/**
	 * Constant for value 'KIBID1Year'
	 * @return string 'KIBID1Year'
	 */
	const VALUE_KIBID1YEAR = 'KIBID1Year';
	/**
	 * Constant for value 'KIBID2Year'
	 * @return string 'KIBID2Year'
	 */
	const VALUE_KIBID2YEAR = 'KIBID2Year';
	/**
	 * Constant for value 'KIBID3Year'
	 * @return string 'KIBID3Year'
	 */
	const VALUE_KIBID3YEAR = 'KIBID3Year';
	/**
	 * Constant for value 'MOSIBOROvernight'
	 * @return string 'MOSIBOROvernight'
	 */
	const VALUE_MOSIBOROVERNIGHT = 'MOSIBOROvernight';
	/**
	 * Constant for value 'MOSIBOR1Week'
	 * @return string 'MOSIBOR1Week'
	 */
	const VALUE_MOSIBOR1WEEK = 'MOSIBOR1Week';
	/**
	 * Constant for value 'MOSIBOR1Month'
	 * @return string 'MOSIBOR1Month'
	 */
	const VALUE_MOSIBOR1MONTH = 'MOSIBOR1Month';
	/**
	 * Constant for value 'MOSIBOR3Month'
	 * @return string 'MOSIBOR3Month'
	 */
	const VALUE_MOSIBOR3MONTH = 'MOSIBOR3Month';
	/**
	 * Constant for value 'MOSIBOR6Month'
	 * @return string 'MOSIBOR6Month'
	 */
	const VALUE_MOSIBOR6MONTH = 'MOSIBOR6Month';
	/**
	 * Constant for value 'MOSIBOR1Year'
	 * @return string 'MOSIBOR1Year'
	 */
	const VALUE_MOSIBOR1YEAR = 'MOSIBOR1Year';
	/**
	 * Constant for value 'MOSIBIDOvernight'
	 * @return string 'MOSIBIDOvernight'
	 */
	const VALUE_MOSIBIDOVERNIGHT = 'MOSIBIDOvernight';
	/**
	 * Constant for value 'MOSIBID1Week'
	 * @return string 'MOSIBID1Week'
	 */
	const VALUE_MOSIBID1WEEK = 'MOSIBID1Week';
	/**
	 * Constant for value 'MOSIBID1Month'
	 * @return string 'MOSIBID1Month'
	 */
	const VALUE_MOSIBID1MONTH = 'MOSIBID1Month';
	/**
	 * Constant for value 'MOSIBID3Month'
	 * @return string 'MOSIBID3Month'
	 */
	const VALUE_MOSIBID3MONTH = 'MOSIBID3Month';
	/**
	 * Constant for value 'MOSIBID6Month'
	 * @return string 'MOSIBID6Month'
	 */
	const VALUE_MOSIBID6MONTH = 'MOSIBID6Month';
	/**
	 * Constant for value 'MOSIBID1Year'
	 * @return string 'MOSIBID1Year'
	 */
	const VALUE_MOSIBID1YEAR = 'MOSIBID1Year';
	/**
	 * Constant for value 'BRAZIBOROvernight'
	 * @return string 'BRAZIBOROvernight'
	 */
	const VALUE_BRAZIBOROVERNIGHT = 'BRAZIBOROvernight';
	/**
	 * Constant for value 'BRAZIBOR1Year'
	 * @return string 'BRAZIBOR1Year'
	 */
	const VALUE_BRAZIBOR1YEAR = 'BRAZIBOR1Year';
	/**
	 * Constant for value 'TRLIBOROvernight'
	 * @return string 'TRLIBOROvernight'
	 */
	const VALUE_TRLIBOROVERNIGHT = 'TRLIBOROvernight';
	/**
	 * Constant for value 'TRLIBOR1Week'
	 * @return string 'TRLIBOR1Week'
	 */
	const VALUE_TRLIBOR1WEEK = 'TRLIBOR1Week';
	/**
	 * Constant for value 'TRLIBOR1Month'
	 * @return string 'TRLIBOR1Month'
	 */
	const VALUE_TRLIBOR1MONTH = 'TRLIBOR1Month';
	/**
	 * Constant for value 'TRLIBOR2Month'
	 * @return string 'TRLIBOR2Month'
	 */
	const VALUE_TRLIBOR2MONTH = 'TRLIBOR2Month';
	/**
	 * Constant for value 'TRLIBOR3Month'
	 * @return string 'TRLIBOR3Month'
	 */
	const VALUE_TRLIBOR3MONTH = 'TRLIBOR3Month';
	/**
	 * Constant for value 'TRLIBOR6Month'
	 * @return string 'TRLIBOR6Month'
	 */
	const VALUE_TRLIBOR6MONTH = 'TRLIBOR6Month';
	/**
	 * Constant for value 'TRLIBOR9Month'
	 * @return string 'TRLIBOR9Month'
	 */
	const VALUE_TRLIBOR9MONTH = 'TRLIBOR9Month';
	/**
	 * Constant for value 'TRLIBOR1Year'
	 * @return string 'TRLIBOR1Year'
	 */
	const VALUE_TRLIBOR1YEAR = 'TRLIBOR1Year';
	/**
	 * Constant for value 'TRLIBIDOvernight'
	 * @return string 'TRLIBIDOvernight'
	 */
	const VALUE_TRLIBIDOVERNIGHT = 'TRLIBIDOvernight';
	/**
	 * Constant for value 'TRLIBID1Week'
	 * @return string 'TRLIBID1Week'
	 */
	const VALUE_TRLIBID1WEEK = 'TRLIBID1Week';
	/**
	 * Constant for value 'TRLIBID1Month'
	 * @return string 'TRLIBID1Month'
	 */
	const VALUE_TRLIBID1MONTH = 'TRLIBID1Month';
	/**
	 * Constant for value 'TRLIBID2Month'
	 * @return string 'TRLIBID2Month'
	 */
	const VALUE_TRLIBID2MONTH = 'TRLIBID2Month';
	/**
	 * Constant for value 'TRLIBID3Month'
	 * @return string 'TRLIBID3Month'
	 */
	const VALUE_TRLIBID3MONTH = 'TRLIBID3Month';
	/**
	 * Constant for value 'TRLIBID6Month'
	 * @return string 'TRLIBID6Month'
	 */
	const VALUE_TRLIBID6MONTH = 'TRLIBID6Month';
	/**
	 * Constant for value 'TRLIBID9Month'
	 * @return string 'TRLIBID9Month'
	 */
	const VALUE_TRLIBID9MONTH = 'TRLIBID9Month';
	/**
	 * Constant for value 'TRLIBID1Year'
	 * @return string 'TRLIBID1Year'
	 */
	const VALUE_TRLIBID1YEAR = 'TRLIBID1Year';
	/**
	 * Constant for value 'JIBAR1Month'
	 * @return string 'JIBAR1Month'
	 */
	const VALUE_JIBAR1MONTH = 'JIBAR1Month';
	/**
	 * Constant for value 'JIBAR3Month'
	 * @return string 'JIBAR3Month'
	 */
	const VALUE_JIBAR3MONTH = 'JIBAR3Month';
	/**
	 * Constant for value 'JIBAR6Month'
	 * @return string 'JIBAR6Month'
	 */
	const VALUE_JIBAR6MONTH = 'JIBAR6Month';
	/**
	 * Constant for value 'JIBAR9Month'
	 * @return string 'JIBAR9Month'
	 */
	const VALUE_JIBAR9MONTH = 'JIBAR9Month';
	/**
	 * Constant for value 'JIBAR1Year'
	 * @return string 'JIBAR1Year'
	 */
	const VALUE_JIBAR1YEAR = 'JIBAR1Year';
	/**
	 * Constant for value 'TAIBOROvernight'
	 * @return string 'TAIBOROvernight'
	 */
	const VALUE_TAIBOROVERNIGHT = 'TAIBOROvernight';
	/**
	 * Constant for value 'TAIBOR1Week'
	 * @return string 'TAIBOR1Week'
	 */
	const VALUE_TAIBOR1WEEK = 'TAIBOR1Week';
	/**
	 * Constant for value 'TAIBOR2Week'
	 * @return string 'TAIBOR2Week'
	 */
	const VALUE_TAIBOR2WEEK = 'TAIBOR2Week';
	/**
	 * Constant for value 'TAIBOR1Month'
	 * @return string 'TAIBOR1Month'
	 */
	const VALUE_TAIBOR1MONTH = 'TAIBOR1Month';
	/**
	 * Constant for value 'TAIBOR2Month'
	 * @return string 'TAIBOR2Month'
	 */
	const VALUE_TAIBOR2MONTH = 'TAIBOR2Month';
	/**
	 * Constant for value 'TAIBOR3Month'
	 * @return string 'TAIBOR3Month'
	 */
	const VALUE_TAIBOR3MONTH = 'TAIBOR3Month';
	/**
	 * Constant for value 'TAIBOR6Month'
	 * @return string 'TAIBOR6Month'
	 */
	const VALUE_TAIBOR6MONTH = 'TAIBOR6Month';
	/**
	 * Constant for value 'TAIBOR9Month'
	 * @return string 'TAIBOR9Month'
	 */
	const VALUE_TAIBOR9MONTH = 'TAIBOR9Month';
	/**
	 * Constant for value 'TAIBOR1Year'
	 * @return string 'TAIBOR1Year'
	 */
	const VALUE_TAIBOR1YEAR = 'TAIBOR1Year';
	/**
	 * Constant for value 'BRIBOROvernight'
	 * @return string 'BRIBOROvernight'
	 */
	const VALUE_BRIBOROVERNIGHT = 'BRIBOROvernight';
	/**
	 * Constant for value 'BRIBOR1Week'
	 * @return string 'BRIBOR1Week'
	 */
	const VALUE_BRIBOR1WEEK = 'BRIBOR1Week';
	/**
	 * Constant for value 'BRIBOR2Week'
	 * @return string 'BRIBOR2Week'
	 */
	const VALUE_BRIBOR2WEEK = 'BRIBOR2Week';
	/**
	 * Constant for value 'BRIBOR1Month'
	 * @return string 'BRIBOR1Month'
	 */
	const VALUE_BRIBOR1MONTH = 'BRIBOR1Month';
	/**
	 * Constant for value 'BRIBOR2Month'
	 * @return string 'BRIBOR2Month'
	 */
	const VALUE_BRIBOR2MONTH = 'BRIBOR2Month';
	/**
	 * Constant for value 'BRIBOR3Month'
	 * @return string 'BRIBOR3Month'
	 */
	const VALUE_BRIBOR3MONTH = 'BRIBOR3Month';
	/**
	 * Constant for value 'BRIBOR6Month'
	 * @return string 'BRIBOR6Month'
	 */
	const VALUE_BRIBOR6MONTH = 'BRIBOR6Month';
	/**
	 * Constant for value 'BRIBOR9Month'
	 * @return string 'BRIBOR9Month'
	 */
	const VALUE_BRIBOR9MONTH = 'BRIBOR9Month';
	/**
	 * Constant for value 'BRIBOR1Year'
	 * @return string 'BRIBOR1Year'
	 */
	const VALUE_BRIBOR1YEAR = 'BRIBOR1Year';
	/**
	 * Constant for value 'BRIBIDOvernight'
	 * @return string 'BRIBIDOvernight'
	 */
	const VALUE_BRIBIDOVERNIGHT = 'BRIBIDOvernight';
	/**
	 * Constant for value 'BRIBID1Week'
	 * @return string 'BRIBID1Week'
	 */
	const VALUE_BRIBID1WEEK = 'BRIBID1Week';
	/**
	 * Constant for value 'BRIBID2Week'
	 * @return string 'BRIBID2Week'
	 */
	const VALUE_BRIBID2WEEK = 'BRIBID2Week';
	/**
	 * Constant for value 'BRIBID1Month'
	 * @return string 'BRIBID1Month'
	 */
	const VALUE_BRIBID1MONTH = 'BRIBID1Month';
	/**
	 * Constant for value 'BRIBID2Month'
	 * @return string 'BRIBID2Month'
	 */
	const VALUE_BRIBID2MONTH = 'BRIBID2Month';
	/**
	 * Constant for value 'BRIBID3Month'
	 * @return string 'BRIBID3Month'
	 */
	const VALUE_BRIBID3MONTH = 'BRIBID3Month';
	/**
	 * Constant for value 'BRIBID6Month'
	 * @return string 'BRIBID6Month'
	 */
	const VALUE_BRIBID6MONTH = 'BRIBID6Month';
	/**
	 * Constant for value 'BRIBID9Month'
	 * @return string 'BRIBID9Month'
	 */
	const VALUE_BRIBID9MONTH = 'BRIBID9Month';
	/**
	 * Constant for value 'BRIBID1Year'
	 * @return string 'BRIBID1Year'
	 */
	const VALUE_BRIBID1YEAR = 'BRIBID1Year';
	/**
	 * Constant for value 'AustralianBankBills1Month'
	 * @return string 'AustralianBankBills1Month'
	 */
	const VALUE_AUSTRALIANBANKBILLS1MONTH = 'AustralianBankBills1Month';
	/**
	 * Constant for value 'AustralianBankBills2Month'
	 * @return string 'AustralianBankBills2Month'
	 */
	const VALUE_AUSTRALIANBANKBILLS2MONTH = 'AustralianBankBills2Month';
	/**
	 * Constant for value 'AustralianBankBills3Month'
	 * @return string 'AustralianBankBills3Month'
	 */
	const VALUE_AUSTRALIANBANKBILLS3MONTH = 'AustralianBankBills3Month';
	/**
	 * Constant for value 'AustralianBankBills4Month'
	 * @return string 'AustralianBankBills4Month'
	 */
	const VALUE_AUSTRALIANBANKBILLS4MONTH = 'AustralianBankBills4Month';
	/**
	 * Constant for value 'AustralianBankBills5Month'
	 * @return string 'AustralianBankBills5Month'
	 */
	const VALUE_AUSTRALIANBANKBILLS5MONTH = 'AustralianBankBills5Month';
	/**
	 * Constant for value 'AustralianBankBills6Month'
	 * @return string 'AustralianBankBills6Month'
	 */
	const VALUE_AUSTRALIANBANKBILLS6MONTH = 'AustralianBankBills6Month';
	/**
	 * Constant for value 'AustralianBankBills9Month'
	 * @return string 'AustralianBankBills9Month'
	 */
	const VALUE_AUSTRALIANBANKBILLS9MONTH = 'AustralianBankBills9Month';
	/**
	 * Constant for value 'AustralianBankBills1Year'
	 * @return string 'AustralianBankBills1Year'
	 */
	const VALUE_AUSTRALIANBANKBILLS1YEAR = 'AustralianBankBills1Year';
	/**
	 * Constant for value 'NationalOvernightAverage30YearFixed'
	 * @return string 'NationalOvernightAverage30YearFixed'
	 */
	const VALUE_NATIONALOVERNIGHTAVERAGE30YEARFIXED = 'NationalOvernightAverage30YearFixed';
	/**
	 * Constant for value 'NationalOvernightAverage15YearFixed'
	 * @return string 'NationalOvernightAverage15YearFixed'
	 */
	const VALUE_NATIONALOVERNIGHTAVERAGE15YEARFIXED = 'NationalOvernightAverage15YearFixed';
	/**
	 * Constant for value 'NationalOvernightAverage5YearAdjustable'
	 * @return string 'NationalOvernightAverage5YearAdjustable'
	 */
	const VALUE_NATIONALOVERNIGHTAVERAGE5YEARADJUSTABLE = 'NationalOvernightAverage5YearAdjustable';
	/**
	 * Constant for value 'BAIBOROvernight'
	 * @return string 'BAIBOROvernight'
	 */
	const VALUE_BAIBOROVERNIGHT = 'BAIBOROvernight';
	/**
	 * Constant for value 'BAIBOR1Week'
	 * @return string 'BAIBOR1Week'
	 */
	const VALUE_BAIBOR1WEEK = 'BAIBOR1Week';
	/**
	 * Constant for value 'BAIBOR1Month'
	 * @return string 'BAIBOR1Month'
	 */
	const VALUE_BAIBOR1MONTH = 'BAIBOR1Month';
	/**
	 * Constant for value 'BAIBOR3Month'
	 * @return string 'BAIBOR3Month'
	 */
	const VALUE_BAIBOR3MONTH = 'BAIBOR3Month';
	/**
	 * Constant for value 'BAIBOR6Month'
	 * @return string 'BAIBOR6Month'
	 */
	const VALUE_BAIBOR6MONTH = 'BAIBOR6Month';
	/**
	 * Constant for value 'BAIBOR9Month'
	 * @return string 'BAIBOR9Month'
	 */
	const VALUE_BAIBOR9MONTH = 'BAIBOR9Month';
	/**
	 * Constant for value 'BAIBOR1Year'
	 * @return string 'BAIBOR1Year'
	 */
	const VALUE_BAIBOR1YEAR = 'BAIBOR1Year';
	/**
	 * Constant for value 'BAIBOR18Month'
	 * @return string 'BAIBOR18Month'
	 */
	const VALUE_BAIBOR18MONTH = 'BAIBOR18Month';
	/**
	 * Constant for value 'COLIBOROvernight'
	 * @return string 'COLIBOROvernight'
	 */
	const VALUE_COLIBOROVERNIGHT = 'COLIBOROvernight';
	/**
	 * Constant for value 'COLIBOR1Month'
	 * @return string 'COLIBOR1Month'
	 */
	const VALUE_COLIBOR1MONTH = 'COLIBOR1Month';
	/**
	 * Constant for value 'TALIBIDOvernight'
	 * @return string 'TALIBIDOvernight'
	 */
	const VALUE_TALIBIDOVERNIGHT = 'TALIBIDOvernight';
	/**
	 * Constant for value 'TALIBID1Week'
	 * @return string 'TALIBID1Week'
	 */
	const VALUE_TALIBID1WEEK = 'TALIBID1Week';
	/**
	 * Constant for value 'TALIBID1Month'
	 * @return string 'TALIBID1Month'
	 */
	const VALUE_TALIBID1MONTH = 'TALIBID1Month';
	/**
	 * Constant for value 'TALIBID2Month'
	 * @return string 'TALIBID2Month'
	 */
	const VALUE_TALIBID2MONTH = 'TALIBID2Month';
	/**
	 * Constant for value 'TALIBID3Month'
	 * @return string 'TALIBID3Month'
	 */
	const VALUE_TALIBID3MONTH = 'TALIBID3Month';
	/**
	 * Constant for value 'TALIBID6Month'
	 * @return string 'TALIBID6Month'
	 */
	const VALUE_TALIBID6MONTH = 'TALIBID6Month';
	/**
	 * Constant for value 'TALIBID9Month'
	 * @return string 'TALIBID9Month'
	 */
	const VALUE_TALIBID9MONTH = 'TALIBID9Month';
	/**
	 * Constant for value 'TALIBID1Year'
	 * @return string 'TALIBID1Year'
	 */
	const VALUE_TALIBID1YEAR = 'TALIBID1Year';
	/**
	 * Constant for value 'TALIBOROvernight'
	 * @return string 'TALIBOROvernight'
	 */
	const VALUE_TALIBOROVERNIGHT = 'TALIBOROvernight';
	/**
	 * Constant for value 'TALIBOR1Week'
	 * @return string 'TALIBOR1Week'
	 */
	const VALUE_TALIBOR1WEEK = 'TALIBOR1Week';
	/**
	 * Constant for value 'TALIBOR1Month'
	 * @return string 'TALIBOR1Month'
	 */
	const VALUE_TALIBOR1MONTH = 'TALIBOR1Month';
	/**
	 * Constant for value 'TALIBOR2Month'
	 * @return string 'TALIBOR2Month'
	 */
	const VALUE_TALIBOR2MONTH = 'TALIBOR2Month';
	/**
	 * Constant for value 'TALIBOR3Month'
	 * @return string 'TALIBOR3Month'
	 */
	const VALUE_TALIBOR3MONTH = 'TALIBOR3Month';
	/**
	 * Constant for value 'TALIBOR6Month'
	 * @return string 'TALIBOR6Month'
	 */
	const VALUE_TALIBOR6MONTH = 'TALIBOR6Month';
	/**
	 * Constant for value 'TALIBOR9Month'
	 * @return string 'TALIBOR9Month'
	 */
	const VALUE_TALIBOR9MONTH = 'TALIBOR9Month';
	/**
	 * Constant for value 'TALIBOR1Year'
	 * @return string 'TALIBOR1Year'
	 */
	const VALUE_TALIBOR1YEAR = 'TALIBOR1Year';
	/**
	 * Constant for value 'VILIBOROvernight'
	 * @return string 'VILIBOROvernight'
	 */
	const VALUE_VILIBOROVERNIGHT = 'VILIBOROvernight';
	/**
	 * Constant for value 'VILIBOR1Week'
	 * @return string 'VILIBOR1Week'
	 */
	const VALUE_VILIBOR1WEEK = 'VILIBOR1Week';
	/**
	 * Constant for value 'VILIBOR2Week'
	 * @return string 'VILIBOR2Week'
	 */
	const VALUE_VILIBOR2WEEK = 'VILIBOR2Week';
	/**
	 * Constant for value 'VILIBOR1Month'
	 * @return string 'VILIBOR1Month'
	 */
	const VALUE_VILIBOR1MONTH = 'VILIBOR1Month';
	/**
	 * Constant for value 'VILIBOR3Month'
	 * @return string 'VILIBOR3Month'
	 */
	const VALUE_VILIBOR3MONTH = 'VILIBOR3Month';
	/**
	 * Constant for value 'VILIBOR6Month'
	 * @return string 'VILIBOR6Month'
	 */
	const VALUE_VILIBOR6MONTH = 'VILIBOR6Month';
	/**
	 * Constant for value 'VILIBOR1Year'
	 * @return string 'VILIBOR1Year'
	 */
	const VALUE_VILIBOR1YEAR = 'VILIBOR1Year';
	/**
	 * Constant for value 'EleventhDistrictCOFI'
	 * @return string 'EleventhDistrictCOFI'
	 */
	const VALUE_ELEVENTHDISTRICTCOFI = 'EleventhDistrictCOFI';
	/**
	 * Constant for value 'FNMA30YearRequiredNetYield10Days'
	 * @return string 'FNMA30YearRequiredNetYield10Days'
	 */
	const VALUE_FNMA30YEARREQUIREDNETYIELD10DAYS = 'FNMA30YearRequiredNetYield10Days';
	/**
	 * Constant for value 'FNMA30YearRequiredNetYield30Days'
	 * @return string 'FNMA30YearRequiredNetYield30Days'
	 */
	const VALUE_FNMA30YEARREQUIREDNETYIELD30DAYS = 'FNMA30YearRequiredNetYield30Days';
	/**
	 * Constant for value 'FNMA30YearRequiredNetYield60Days'
	 * @return string 'FNMA30YearRequiredNetYield60Days'
	 */
	const VALUE_FNMA30YEARREQUIREDNETYIELD60DAYS = 'FNMA30YearRequiredNetYield60Days';
	/**
	 * Constant for value 'FNMA30YearRequiredNetYield90Days'
	 * @return string 'FNMA30YearRequiredNetYield90Days'
	 */
	const VALUE_FNMA30YEARREQUIREDNETYIELD90DAYS = 'FNMA30YearRequiredNetYield90Days';
	/**
	 * Constant for value 'FNMA15YearRequiredNetYield10Days'
	 * @return string 'FNMA15YearRequiredNetYield10Days'
	 */
	const VALUE_FNMA15YEARREQUIREDNETYIELD10DAYS = 'FNMA15YearRequiredNetYield10Days';
	/**
	 * Constant for value 'FNMA15YearRequiredNetYield30Days'
	 * @return string 'FNMA15YearRequiredNetYield30Days'
	 */
	const VALUE_FNMA15YEARREQUIREDNETYIELD30DAYS = 'FNMA15YearRequiredNetYield30Days';
	/**
	 * Constant for value 'FNMA15YearRequiredNetYield60Days'
	 * @return string 'FNMA15YearRequiredNetYield60Days'
	 */
	const VALUE_FNMA15YEARREQUIREDNETYIELD60DAYS = 'FNMA15YearRequiredNetYield60Days';
	/**
	 * Constant for value 'FNMA15YearRequiredNetYield90Days'
	 * @return string 'FNMA15YearRequiredNetYield90Days'
	 */
	const VALUE_FNMA15YEARREQUIREDNETYIELD90DAYS = 'FNMA15YearRequiredNetYield90Days';
	/**
	 * Constant for value 'FNMA7YearRequiredNetYield10Days'
	 * @return string 'FNMA7YearRequiredNetYield10Days'
	 */
	const VALUE_FNMA7YEARREQUIREDNETYIELD10DAYS = 'FNMA7YearRequiredNetYield10Days';
	/**
	 * Constant for value 'FNMA7YearRequiredNetYield30Days'
	 * @return string 'FNMA7YearRequiredNetYield30Days'
	 */
	const VALUE_FNMA7YEARREQUIREDNETYIELD30DAYS = 'FNMA7YearRequiredNetYield30Days';
	/**
	 * Constant for value 'FNMA7YearRequiredNetYield60Days'
	 * @return string 'FNMA7YearRequiredNetYield60Days'
	 */
	const VALUE_FNMA7YEARREQUIREDNETYIELD60DAYS = 'FNMA7YearRequiredNetYield60Days';
	/**
	 * Constant for value 'FNMA7YearRequiredNetYield90Days'
	 * @return string 'FNMA7YearRequiredNetYield90Days'
	 */
	const VALUE_FNMA7YEARREQUIREDNETYIELD90DAYS = 'FNMA7YearRequiredNetYield90Days';
	/**
	 * Constant for value 'FNMA5YearRequiredNetYield10Days'
	 * @return string 'FNMA5YearRequiredNetYield10Days'
	 */
	const VALUE_FNMA5YEARREQUIREDNETYIELD10DAYS = 'FNMA5YearRequiredNetYield10Days';
	/**
	 * Constant for value 'FNMA5YearRequiredNetYield30Days'
	 * @return string 'FNMA5YearRequiredNetYield30Days'
	 */
	const VALUE_FNMA5YEARREQUIREDNETYIELD30DAYS = 'FNMA5YearRequiredNetYield30Days';
	/**
	 * Constant for value 'FNMA5YearRequiredNetYield60Days'
	 * @return string 'FNMA5YearRequiredNetYield60Days'
	 */
	const VALUE_FNMA5YEARREQUIREDNETYIELD60DAYS = 'FNMA5YearRequiredNetYield60Days';
	/**
	 * Constant for value 'FNMA5YearRequiredNetYield90Days'
	 * @return string 'FNMA5YearRequiredNetYield90Days'
	 */
	const VALUE_FNMA5YEARREQUIREDNETYIELD90DAYS = 'FNMA5YearRequiredNetYield90Days';
	/**
	 * Constant for value 'FNMA20YearRequiredNetYield10Days'
	 * @return string 'FNMA20YearRequiredNetYield10Days'
	 */
	const VALUE_FNMA20YEARREQUIREDNETYIELD10DAYS = 'FNMA20YearRequiredNetYield10Days';
	/**
	 * Constant for value 'FNMA20YearRequiredNetYield30Days'
	 * @return string 'FNMA20YearRequiredNetYield30Days'
	 */
	const VALUE_FNMA20YEARREQUIREDNETYIELD30DAYS = 'FNMA20YearRequiredNetYield30Days';
	/**
	 * Constant for value 'FNMA20YearRequiredNetYield60Days'
	 * @return string 'FNMA20YearRequiredNetYield60Days'
	 */
	const VALUE_FNMA20YEARREQUIREDNETYIELD60DAYS = 'FNMA20YearRequiredNetYield60Days';
	/**
	 * Constant for value 'FNMA20YearRequiredNetYield90Days'
	 * @return string 'FNMA20YearRequiredNetYield90Days'
	 */
	const VALUE_FNMA20YEARREQUIREDNETYIELD90DAYS = 'FNMA20YearRequiredNetYield90Days';
	/**
	 * Constant for value 'FHLMC1YearARM'
	 * @return string 'FHLMC1YearARM'
	 */
	const VALUE_FHLMC1YEARARM = 'FHLMC1YearARM';
	/**
	 * Constant for value 'CETES28'
	 * @return string 'CETES28'
	 */
	const VALUE_CETES28 = 'CETES28';
	/**
	 * Constant for value 'CETES91'
	 * @return string 'CETES91'
	 */
	const VALUE_CETES91 = 'CETES91';
	/**
	 * Constant for value 'TIIE28'
	 * @return string 'TIIE28'
	 */
	const VALUE_TIIE28 = 'TIIE28';
	/**
	 * Constant for value 'TIIE91'
	 * @return string 'TIIE91'
	 */
	const VALUE_TIIE91 = 'TIIE91';
	/**
	 * Constant for value 'BPA'
	 * @return string 'BPA'
	 */
	const VALUE_BPA = 'BPA';
	/**
	 * Constant for value 'WIFR'
	 * @return string 'WIFR'
	 */
	const VALUE_WIFR = 'WIFR';
	/**
	 * Constant for value 'TEDSpread'
	 * @return string 'TEDSpread'
	 */
	const VALUE_TEDSPREAD = 'TEDSpread';
	/**
	 * Constant for value 'IRCSection7520InterestRate'
	 * @return string 'IRCSection7520InterestRate'
	 */
	const VALUE_IRCSECTION7520INTERESTRATE = 'IRCSection7520InterestRate';
	/**
	 * Constant for value 'CanadianOvernightTargetRate'
	 * @return string 'CanadianOvernightTargetRate'
	 */
	const VALUE_CANADIANOVERNIGHTTARGETRATE = 'CanadianOvernightTargetRate';
	/**
	 * Constant for value 'CanadianOvernightRate'
	 * @return string 'CanadianOvernightRate'
	 */
	const VALUE_CANADIANOVERNIGHTRATE = 'CanadianOvernightRate';
	/**
	 * Constant for value 'CanadianBankRate'
	 * @return string 'CanadianBankRate'
	 */
	const VALUE_CANADIANBANKRATE = 'CanadianBankRate';
	/**
	 * Constant for value 'CanadianOvernightRepoRate'
	 * @return string 'CanadianOvernightRepoRate'
	 */
	const VALUE_CANADIANOVERNIGHTREPORATE = 'CanadianOvernightRepoRate';
	/**
	 * Constant for value 'CanadianOperatingBandHigh'
	 * @return string 'CanadianOperatingBandHigh'
	 */
	const VALUE_CANADIANOPERATINGBANDHIGH = 'CanadianOperatingBandHigh';
	/**
	 * Constant for value 'CanadianOperatingBandLow'
	 * @return string 'CanadianOperatingBandLow'
	 */
	const VALUE_CANADIANOPERATINGBANDLOW = 'CanadianOperatingBandLow';
	/**
	 * Constant for value 'CanadianLVTSSettlementBalancesTarget'
	 * @return string 'CanadianLVTSSettlementBalancesTarget'
	 */
	const VALUE_CANADIANLVTSSETTLEMENTBALANCESTARGET = 'CanadianLVTSSettlementBalancesTarget';
	/**
	 * Constant for value 'CanadianLVTSSettlementBalancesActual'
	 * @return string 'CanadianLVTSSettlementBalancesActual'
	 */
	const VALUE_CANADIANLVTSSETTLEMENTBALANCESACTUAL = 'CanadianLVTSSettlementBalancesActual';
	/**
	 * Constant for value 'CanadianBankersAcceptances1Month'
	 * @return string 'CanadianBankersAcceptances1Month'
	 */
	const VALUE_CANADIANBANKERSACCEPTANCES1MONTH = 'CanadianBankersAcceptances1Month';
	/**
	 * Constant for value 'CanadianBankersAcceptances3Month'
	 * @return string 'CanadianBankersAcceptances3Month'
	 */
	const VALUE_CANADIANBANKERSACCEPTANCES3MONTH = 'CanadianBankersAcceptances3Month';
	/**
	 * Constant for value 'CanadianPrimeCorporatePaperRate1Month'
	 * @return string 'CanadianPrimeCorporatePaperRate1Month'
	 */
	const VALUE_CANADIANPRIMECORPORATEPAPERRATE1MONTH = 'CanadianPrimeCorporatePaperRate1Month';
	/**
	 * Constant for value 'CanadianPrimeCorporatePaperRate2Month'
	 * @return string 'CanadianPrimeCorporatePaperRate2Month'
	 */
	const VALUE_CANADIANPRIMECORPORATEPAPERRATE2MONTH = 'CanadianPrimeCorporatePaperRate2Month';
	/**
	 * Constant for value 'CanadianPrimeCorporatePaperRate3Month'
	 * @return string 'CanadianPrimeCorporatePaperRate3Month'
	 */
	const VALUE_CANADIANPRIMECORPORATEPAPERRATE3MONTH = 'CanadianPrimeCorporatePaperRate3Month';
	/**
	 * Constant for value 'CanadianPrimeBusiness'
	 * @return string 'CanadianPrimeBusiness'
	 */
	const VALUE_CANADIANPRIMEBUSINESS = 'CanadianPrimeBusiness';
	/**
	 * Constant for value 'CanadianConventionalMortgage1Year'
	 * @return string 'CanadianConventionalMortgage1Year'
	 */
	const VALUE_CANADIANCONVENTIONALMORTGAGE1YEAR = 'CanadianConventionalMortgage1Year';
	/**
	 * Constant for value 'CanadianConventionalMortgage3Year'
	 * @return string 'CanadianConventionalMortgage3Year'
	 */
	const VALUE_CANADIANCONVENTIONALMORTGAGE3YEAR = 'CanadianConventionalMortgage3Year';
	/**
	 * Constant for value 'CanadianConventionalMortgage5Year'
	 * @return string 'CanadianConventionalMortgage5Year'
	 */
	const VALUE_CANADIANCONVENTIONALMORTGAGE5YEAR = 'CanadianConventionalMortgage5Year';
	/**
	 * Constant for value 'CanadianGuaranteedInvestmentCertificates1Year'
	 * @return string 'CanadianGuaranteedInvestmentCertificates1Year'
	 */
	const VALUE_CANADIANGUARANTEEDINVESTMENTCERTIFICATES1YEAR = 'CanadianGuaranteedInvestmentCertificates1Year';
	/**
	 * Constant for value 'CanadianGuaranteedInvestmentCertificates3Year'
	 * @return string 'CanadianGuaranteedInvestmentCertificates3Year'
	 */
	const VALUE_CANADIANGUARANTEEDINVESTMENTCERTIFICATES3YEAR = 'CanadianGuaranteedInvestmentCertificates3Year';
	/**
	 * Constant for value 'CanadianGuaranteedInvestmentCertificates5Year'
	 * @return string 'CanadianGuaranteedInvestmentCertificates5Year'
	 */
	const VALUE_CANADIANGUARANTEEDINVESTMENTCERTIFICATES5YEAR = 'CanadianGuaranteedInvestmentCertificates5Year';
	/**
	 * Constant for value 'Canadian5YearPersonalFixedTerm'
	 * @return string 'Canadian5YearPersonalFixedTerm'
	 */
	const VALUE_CANADIAN5YEARPERSONALFIXEDTERM = 'Canadian5YearPersonalFixedTerm';
	/**
	 * Constant for value 'Canadian1MonthTreasuryBill'
	 * @return string 'Canadian1MonthTreasuryBill'
	 */
	const VALUE_CANADIAN1MONTHTREASURYBILL = 'Canadian1MonthTreasuryBill';
	/**
	 * Constant for value 'Canadian3MonthTreasuryBill'
	 * @return string 'Canadian3MonthTreasuryBill'
	 */
	const VALUE_CANADIAN3MONTHTREASURYBILL = 'Canadian3MonthTreasuryBill';
	/**
	 * Constant for value 'Canadian6MonthTreasuryBill'
	 * @return string 'Canadian6MonthTreasuryBill'
	 */
	const VALUE_CANADIAN6MONTHTREASURYBILL = 'Canadian6MonthTreasuryBill';
	/**
	 * Constant for value 'Canadian1YearTreasuryBill'
	 * @return string 'Canadian1YearTreasuryBill'
	 */
	const VALUE_CANADIAN1YEARTREASURYBILL = 'Canadian1YearTreasuryBill';
	/**
	 * Constant for value 'Canadian2YearBenchmarkBondYield'
	 * @return string 'Canadian2YearBenchmarkBondYield'
	 */
	const VALUE_CANADIAN2YEARBENCHMARKBONDYIELD = 'Canadian2YearBenchmarkBondYield';
	/**
	 * Constant for value 'Canadian3YearBenchmarkBondYield'
	 * @return string 'Canadian3YearBenchmarkBondYield'
	 */
	const VALUE_CANADIAN3YEARBENCHMARKBONDYIELD = 'Canadian3YearBenchmarkBondYield';
	/**
	 * Constant for value 'Canadian5YearBenchmarkBondYield'
	 * @return string 'Canadian5YearBenchmarkBondYield'
	 */
	const VALUE_CANADIAN5YEARBENCHMARKBONDYIELD = 'Canadian5YearBenchmarkBondYield';
	/**
	 * Constant for value 'Canadian7YearBenchmarkBondYield'
	 * @return string 'Canadian7YearBenchmarkBondYield'
	 */
	const VALUE_CANADIAN7YEARBENCHMARKBONDYIELD = 'Canadian7YearBenchmarkBondYield';
	/**
	 * Constant for value 'Canadian10YearBenchmarkBondYield'
	 * @return string 'Canadian10YearBenchmarkBondYield'
	 */
	const VALUE_CANADIAN10YEARBENCHMARKBONDYIELD = 'Canadian10YearBenchmarkBondYield';
	/**
	 * Constant for value 'Canadian30YearBenchmarkBondYield'
	 * @return string 'Canadian30YearBenchmarkBondYield'
	 */
	const VALUE_CANADIAN30YEARBENCHMARKBONDYIELD = 'Canadian30YearBenchmarkBondYield';
	/**
	 * Constant for value 'TennesseeFormulaRate'
	 * @return string 'TennesseeFormulaRate'
	 */
	const VALUE_TENNESSEEFORMULARATE = 'TennesseeFormulaRate';
	/**
	 * Constant for value 'TennesseeEffectiveRate'
	 * @return string 'TennesseeEffectiveRate'
	 */
	const VALUE_TENNESSEEEFFECTIVERATE = 'TennesseeEffectiveRate';
	/**
	 * Constant for value 'KansasUsuryRate'
	 * @return string 'KansasUsuryRate'
	 */
	const VALUE_KANSASUSURYRATE = 'KansasUsuryRate';
	/**
	 * Constant for value 'KansasCodeMortgageRate'
	 * @return string 'KansasCodeMortgageRate'
	 */
	const VALUE_KANSASCODEMORTGAGERATE = 'KansasCodeMortgageRate';
	/**
	 * Constant for value 'MissouriMarketRate'
	 * @return string 'MissouriMarketRate'
	 */
	const VALUE_MISSOURIMARKETRATE = 'MissouriMarketRate';
	/**
	 * Constant for value 'ConnecticutDepositRateIndex'
	 * @return string 'ConnecticutDepositRateIndex'
	 */
	const VALUE_CONNECTICUTDEPOSITRATEINDEX = 'ConnecticutDepositRateIndex';
	/**
	 * Constant for value 'TBills6MonthInEffect6MonthsPriorToTheTransaction'
	 * @return string 'TBills6MonthInEffect6MonthsPriorToTheTransaction'
	 */
	const VALUE_TBILLS6MONTHINEFFECT6MONTHSPRIORTOTHETRANSACTION = 'TBills6MonthInEffect6MonthsPriorToTheTransaction';
	/**
	 * Constant for value 'TennesseeMaximumEffectiveRateOfInterest'
	 * @return string 'TennesseeMaximumEffectiveRateOfInterest'
	 */
	const VALUE_TENNESSEEMAXIMUMEFFECTIVERATEOFINTEREST = 'TennesseeMaximumEffectiveRateOfInterest';
	/**
	 * Constant for value 'FederalDiscountPrimaryBoston'
	 * @return string 'FederalDiscountPrimaryBoston'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYBOSTON = 'FederalDiscountPrimaryBoston';
	/**
	 * Constant for value 'FederalDiscountPrimaryNewYork'
	 * @return string 'FederalDiscountPrimaryNewYork'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYNEWYORK = 'FederalDiscountPrimaryNewYork';
	/**
	 * Constant for value 'FederalDiscountPrimaryPhiladelphia'
	 * @return string 'FederalDiscountPrimaryPhiladelphia'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYPHILADELPHIA = 'FederalDiscountPrimaryPhiladelphia';
	/**
	 * Constant for value 'FederalDiscountPrimaryCleveland'
	 * @return string 'FederalDiscountPrimaryCleveland'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYCLEVELAND = 'FederalDiscountPrimaryCleveland';
	/**
	 * Constant for value 'FederalDiscountPrimaryRichmond'
	 * @return string 'FederalDiscountPrimaryRichmond'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYRICHMOND = 'FederalDiscountPrimaryRichmond';
	/**
	 * Constant for value 'FederalDiscountPrimaryAtlanta'
	 * @return string 'FederalDiscountPrimaryAtlanta'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYATLANTA = 'FederalDiscountPrimaryAtlanta';
	/**
	 * Constant for value 'FederalDiscountPrimaryChicago'
	 * @return string 'FederalDiscountPrimaryChicago'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYCHICAGO = 'FederalDiscountPrimaryChicago';
	/**
	 * Constant for value 'FederalDiscountPrimaryStLouis'
	 * @return string 'FederalDiscountPrimaryStLouis'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYSTLOUIS = 'FederalDiscountPrimaryStLouis';
	/**
	 * Constant for value 'FederalDiscountPrimaryMinneapolis'
	 * @return string 'FederalDiscountPrimaryMinneapolis'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYMINNEAPOLIS = 'FederalDiscountPrimaryMinneapolis';
	/**
	 * Constant for value 'FederalDiscountPrimaryKansasCity'
	 * @return string 'FederalDiscountPrimaryKansasCity'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYKANSASCITY = 'FederalDiscountPrimaryKansasCity';
	/**
	 * Constant for value 'FederalDiscountPrimaryDallas'
	 * @return string 'FederalDiscountPrimaryDallas'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYDALLAS = 'FederalDiscountPrimaryDallas';
	/**
	 * Constant for value 'FederalDiscountPrimarySanFrancisco'
	 * @return string 'FederalDiscountPrimarySanFrancisco'
	 */
	const VALUE_FEDERALDISCOUNTPRIMARYSANFRANCISCO = 'FederalDiscountPrimarySanFrancisco';
	/**
	 * Constant for value 'FederalDiscountSecondaryBoston'
	 * @return string 'FederalDiscountSecondaryBoston'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYBOSTON = 'FederalDiscountSecondaryBoston';
	/**
	 * Constant for value 'FederalDiscountSecondaryNewYork'
	 * @return string 'FederalDiscountSecondaryNewYork'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYNEWYORK = 'FederalDiscountSecondaryNewYork';
	/**
	 * Constant for value 'FederalDiscountSecondaryPhiladelphia'
	 * @return string 'FederalDiscountSecondaryPhiladelphia'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYPHILADELPHIA = 'FederalDiscountSecondaryPhiladelphia';
	/**
	 * Constant for value 'FederalDiscountSecondaryCleveland'
	 * @return string 'FederalDiscountSecondaryCleveland'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYCLEVELAND = 'FederalDiscountSecondaryCleveland';
	/**
	 * Constant for value 'FederalDiscountSecondaryRichmond'
	 * @return string 'FederalDiscountSecondaryRichmond'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYRICHMOND = 'FederalDiscountSecondaryRichmond';
	/**
	 * Constant for value 'FederalDiscountSecondaryAtlanta'
	 * @return string 'FederalDiscountSecondaryAtlanta'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYATLANTA = 'FederalDiscountSecondaryAtlanta';
	/**
	 * Constant for value 'FederalDiscountSecondaryChicago'
	 * @return string 'FederalDiscountSecondaryChicago'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYCHICAGO = 'FederalDiscountSecondaryChicago';
	/**
	 * Constant for value 'FederalDiscountSecondaryStLouis'
	 * @return string 'FederalDiscountSecondaryStLouis'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYSTLOUIS = 'FederalDiscountSecondaryStLouis';
	/**
	 * Constant for value 'FederalDiscountSecondaryMinneapolis'
	 * @return string 'FederalDiscountSecondaryMinneapolis'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYMINNEAPOLIS = 'FederalDiscountSecondaryMinneapolis';
	/**
	 * Constant for value 'FederalDiscountSecondaryKansasCity'
	 * @return string 'FederalDiscountSecondaryKansasCity'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYKANSASCITY = 'FederalDiscountSecondaryKansasCity';
	/**
	 * Constant for value 'FederalDiscountSecondaryDallas'
	 * @return string 'FederalDiscountSecondaryDallas'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYDALLAS = 'FederalDiscountSecondaryDallas';
	/**
	 * Constant for value 'FederalDiscountSecondarySanFrancisco'
	 * @return string 'FederalDiscountSecondarySanFrancisco'
	 */
	const VALUE_FEDERALDISCOUNTSECONDARYSANFRANCISCO = 'FederalDiscountSecondarySanFrancisco';
	/**
	 * Constant for value 'MuniComposite2YearA'
	 * @return string 'MuniComposite2YearA'
	 */
	const VALUE_MUNICOMPOSITE2YEARA = 'MuniComposite2YearA';
	/**
	 * Constant for value 'MuniComposite2YearAA'
	 * @return string 'MuniComposite2YearAA'
	 */
	const VALUE_MUNICOMPOSITE2YEARAA = 'MuniComposite2YearAA';
	/**
	 * Constant for value 'MuniComposite2YearAAA'
	 * @return string 'MuniComposite2YearAAA'
	 */
	const VALUE_MUNICOMPOSITE2YEARAAA = 'MuniComposite2YearAAA';
	/**
	 * Constant for value 'MuniComposite5YearA'
	 * @return string 'MuniComposite5YearA'
	 */
	const VALUE_MUNICOMPOSITE5YEARA = 'MuniComposite5YearA';
	/**
	 * Constant for value 'MuniComposite5YearAA'
	 * @return string 'MuniComposite5YearAA'
	 */
	const VALUE_MUNICOMPOSITE5YEARAA = 'MuniComposite5YearAA';
	/**
	 * Constant for value 'MuniComposite5YearAAA'
	 * @return string 'MuniComposite5YearAAA'
	 */
	const VALUE_MUNICOMPOSITE5YEARAAA = 'MuniComposite5YearAAA';
	/**
	 * Constant for value 'MuniComposite10YearA'
	 * @return string 'MuniComposite10YearA'
	 */
	const VALUE_MUNICOMPOSITE10YEARA = 'MuniComposite10YearA';
	/**
	 * Constant for value 'MuniComposite10YearAA'
	 * @return string 'MuniComposite10YearAA'
	 */
	const VALUE_MUNICOMPOSITE10YEARAA = 'MuniComposite10YearAA';
	/**
	 * Constant for value 'MuniComposite10YearAAA'
	 * @return string 'MuniComposite10YearAAA'
	 */
	const VALUE_MUNICOMPOSITE10YEARAAA = 'MuniComposite10YearAAA';
	/**
	 * Constant for value 'MuniComposite20YearA'
	 * @return string 'MuniComposite20YearA'
	 */
	const VALUE_MUNICOMPOSITE20YEARA = 'MuniComposite20YearA';
	/**
	 * Constant for value 'MuniComposite20YearAA'
	 * @return string 'MuniComposite20YearAA'
	 */
	const VALUE_MUNICOMPOSITE20YEARAA = 'MuniComposite20YearAA';
	/**
	 * Constant for value 'MuniComposite20YearAAA'
	 * @return string 'MuniComposite20YearAAA'
	 */
	const VALUE_MUNICOMPOSITE20YEARAAA = 'MuniComposite20YearAAA';
	/**
	 * Constant for value 'TreasuryComposite3Month'
	 * @return string 'TreasuryComposite3Month'
	 */
	const VALUE_TREASURYCOMPOSITE3MONTH = 'TreasuryComposite3Month';
	/**
	 * Constant for value 'TreasuryComposite6Month'
	 * @return string 'TreasuryComposite6Month'
	 */
	const VALUE_TREASURYCOMPOSITE6MONTH = 'TreasuryComposite6Month';
	/**
	 * Constant for value 'TreasuryComposite2Year'
	 * @return string 'TreasuryComposite2Year'
	 */
	const VALUE_TREASURYCOMPOSITE2YEAR = 'TreasuryComposite2Year';
	/**
	 * Constant for value 'TreasuryComposite3Year'
	 * @return string 'TreasuryComposite3Year'
	 */
	const VALUE_TREASURYCOMPOSITE3YEAR = 'TreasuryComposite3Year';
	/**
	 * Constant for value 'TreasuryComposite5Year'
	 * @return string 'TreasuryComposite5Year'
	 */
	const VALUE_TREASURYCOMPOSITE5YEAR = 'TreasuryComposite5Year';
	/**
	 * Constant for value 'TreasuryComposite10Year'
	 * @return string 'TreasuryComposite10Year'
	 */
	const VALUE_TREASURYCOMPOSITE10YEAR = 'TreasuryComposite10Year';
	/**
	 * Constant for value 'TreasuryComposite30Year'
	 * @return string 'TreasuryComposite30Year'
	 */
	const VALUE_TREASURYCOMPOSITE30YEAR = 'TreasuryComposite30Year';
	/**
	 * Constant for value 'NationalAverageContractMortgageRate'
	 * @return string 'NationalAverageContractMortgageRate'
	 */
	const VALUE_NATIONALAVERAGECONTRACTMORTGAGERATE = 'NationalAverageContractMortgageRate';
	/**
	 * Constant for value 'FreddieMacSurvey30YearFixed'
	 * @return string 'FreddieMacSurvey30YearFixed'
	 */
	const VALUE_FREDDIEMACSURVEY30YEARFIXED = 'FreddieMacSurvey30YearFixed';
	/**
	 * Constant for value 'FreddieMacSurvey15YearFixed'
	 * @return string 'FreddieMacSurvey15YearFixed'
	 */
	const VALUE_FREDDIEMACSURVEY15YEARFIXED = 'FreddieMacSurvey15YearFixed';
	/**
	 * Constant for value 'FreddieMacSurvey5YearARM'
	 * @return string 'FreddieMacSurvey5YearARM'
	 */
	const VALUE_FREDDIEMACSURVEY5YEARARM = 'FreddieMacSurvey5YearARM';
	/**
	 * Constant for value 'FreddieMacSurvey1YearARM'
	 * @return string 'FreddieMacSurvey1YearARM'
	 */
	const VALUE_FREDDIEMACSURVEY1YEARARM = 'FreddieMacSurvey1YearARM';
	/**
	 * Constant for value 'FreddieMacSurvey30YearFixedPoints'
	 * @return string 'FreddieMacSurvey30YearFixedPoints'
	 */
	const VALUE_FREDDIEMACSURVEY30YEARFIXEDPOINTS = 'FreddieMacSurvey30YearFixedPoints';
	/**
	 * Constant for value 'FreddieMacSurvey15YearFixedPoints'
	 * @return string 'FreddieMacSurvey15YearFixedPoints'
	 */
	const VALUE_FREDDIEMACSURVEY15YEARFIXEDPOINTS = 'FreddieMacSurvey15YearFixedPoints';
	/**
	 * Constant for value 'FreddieMacSurvey5YearARMPoints'
	 * @return string 'FreddieMacSurvey5YearARMPoints'
	 */
	const VALUE_FREDDIEMACSURVEY5YEARARMPOINTS = 'FreddieMacSurvey5YearARMPoints';
	/**
	 * Constant for value 'FreddieMacSurvey1YearARMPoints'
	 * @return string 'FreddieMacSurvey1YearARMPoints'
	 */
	const VALUE_FREDDIEMACSURVEY1YEARARMPOINTS = 'FreddieMacSurvey1YearARMPoints';
	/**
	 * Constant for value 'LIBORSwaps2Year'
	 * @return string 'LIBORSwaps2Year'
	 */
	const VALUE_LIBORSWAPS2YEAR = 'LIBORSwaps2Year';
	/**
	 * Constant for value 'LIBORSwaps3Year'
	 * @return string 'LIBORSwaps3Year'
	 */
	const VALUE_LIBORSWAPS3YEAR = 'LIBORSwaps3Year';
	/**
	 * Constant for value 'LIBORSwaps5Year'
	 * @return string 'LIBORSwaps5Year'
	 */
	const VALUE_LIBORSWAPS5YEAR = 'LIBORSwaps5Year';
	/**
	 * Constant for value 'LIBORSwaps10Year'
	 * @return string 'LIBORSwaps10Year'
	 */
	const VALUE_LIBORSWAPS10YEAR = 'LIBORSwaps10Year';
	/**
	 * Constant for value 'LIBORSwaps20Year'
	 * @return string 'LIBORSwaps20Year'
	 */
	const VALUE_LIBORSWAPS20YEAR = 'LIBORSwaps20Year';
	/**
	 * Constant for value 'LIBORSwaps30Year'
	 * @return string 'LIBORSwaps30Year'
	 */
	const VALUE_LIBORSWAPS30YEAR = 'LIBORSwaps30Year';
	/**
	 * Constant for value 'BankOfEnglandBaseRate'
	 * @return string 'BankOfEnglandBaseRate'
	 */
	const VALUE_BANKOFENGLANDBASERATE = 'BankOfEnglandBaseRate';
	/**
	 * Constant for value 'EuropeanCentralBankLending'
	 * @return string 'EuropeanCentralBankLending'
	 */
	const VALUE_EUROPEANCENTRALBANKLENDING = 'EuropeanCentralBankLending';
	/**
	 * Constant for value 'EuropeanCentralBankRefinancing'
	 * @return string 'EuropeanCentralBankRefinancing'
	 */
	const VALUE_EUROPEANCENTRALBANKREFINANCING = 'EuropeanCentralBankRefinancing';
	/**
	 * Constant for value 'EuropeanCentralBankDeposit'
	 * @return string 'EuropeanCentralBankDeposit'
	 */
	const VALUE_EUROPEANCENTRALBANKDEPOSIT = 'EuropeanCentralBankDeposit';
	/**
	 * Constant for value 'EuroOverNightIndexAverage'
	 * @return string 'EuroOverNightIndexAverage'
	 */
	const VALUE_EUROOVERNIGHTINDEXAVERAGE = 'EuroOverNightIndexAverage';
	/**
	 * Constant for value 'CorporateBondCompositeMoodys5YearBBB'
	 * @return string 'CorporateBondCompositeMoodys5YearBBB'
	 */
	const VALUE_CORPORATEBONDCOMPOSITEMOODYS5YEARBBB = 'CorporateBondCompositeMoodys5YearBBB';
	/**
	 * Constant for value 'NorwegianOvernightWeightedAverage'
	 * @return string 'NorwegianOvernightWeightedAverage'
	 */
	const VALUE_NORWEGIANOVERNIGHTWEIGHTEDAVERAGE = 'NorwegianOvernightWeightedAverage';
	/**
	 * Constant for value 'Invalid'
	 * @return string 'Invalid'
	 */
	const VALUE_INVALID = 'Invalid';
	/**
	 * Constant for value 'Dummy'
	 * @return string 'Dummy'
	 */
	const VALUE_DUMMY = 'Dummy';
	/**
	 * Constant for value 'TreasuryConstant1YearAverage'
	 * @return string 'TreasuryConstant1YearAverage'
	 */
	const VALUE_TREASURYCONSTANT1YEARAVERAGE = 'TreasuryConstant1YearAverage';
	/**
	 * Constant for value 'TreasuryConstant2YearAverage'
	 * @return string 'TreasuryConstant2YearAverage'
	 */
	const VALUE_TREASURYCONSTANT2YEARAVERAGE = 'TreasuryConstant2YearAverage';
	/**
	 * Constant for value 'TreasuryConstant3YearAverage'
	 * @return string 'TreasuryConstant3YearAverage'
	 */
	const VALUE_TREASURYCONSTANT3YEARAVERAGE = 'TreasuryConstant3YearAverage';
	/**
	 * Constant for value 'TreasuryConstant5YearAverage'
	 * @return string 'TreasuryConstant5YearAverage'
	 */
	const VALUE_TREASURYCONSTANT5YEARAVERAGE = 'TreasuryConstant5YearAverage';
	/**
	 * Constant for value 'TBillSecondaryMarket3MonthAverage'
	 * @return string 'TBillSecondaryMarket3MonthAverage'
	 */
	const VALUE_TBILLSECONDARYMARKET3MONTHAVERAGE = 'TBillSecondaryMarket3MonthAverage';
	/**
	 * Constant for value 'CommercialPaperFinancial1MonthAverage'
	 * @return string 'CommercialPaperFinancial1MonthAverage'
	 */
	const VALUE_COMMERCIALPAPERFINANCIAL1MONTHAVERAGE = 'CommercialPaperFinancial1MonthAverage';
	/**
	 * Constant for value 'CommercialPaperNonFinancial1MonthAverage'
	 * @return string 'CommercialPaperNonFinancial1MonthAverage'
	 */
	const VALUE_COMMERCIALPAPERNONFINANCIAL1MONTHAVERAGE = 'CommercialPaperNonFinancial1MonthAverage';
	/**
	 * Constructor
	 * @return XiWatchListsTypeRateTypes
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
		return in_array($_value,array(self::VALUE_FEDERALFUNDS,self::VALUE_FEDERALFUNDSTARGETRATE,self::VALUE_LIBOR1MONTH,self::VALUE_LIBOR2MONTH,self::VALUE_LIBOR3MONTH,self::VALUE_LIBOR4MONTH,self::VALUE_LIBOR5MONTH,self::VALUE_LIBOR6MONTH,self::VALUE_LIBOR7MONTH,self::VALUE_LIBOR8MONTH,self::VALUE_LIBOR9MONTH,self::VALUE_LIBOR10MONTH,self::VALUE_LIBOR11MONTH,self::VALUE_LIBOR1YEAR,self::VALUE_LIBOR1WEEK,self::VALUE_LIBOR2WEEK,self::VALUE_LIBOROVERNITE,self::VALUE_COMMERCIALPAPERNONFINANCIAL1MONTH,self::VALUE_COMMERCIALPAPERNONFINANCIAL2MONTH,self::VALUE_COMMERCIALPAPERNONFINANCIAL3MONTH,self::VALUE_HISTORICALCOMMERCIALPAPERNONFINANCIAL1MONTH,self::VALUE_HISTORICALCOMMERCIALPAPERNONFINANCIAL3MONTH,self::VALUE_HISTORICALCOMMERCIALPAPERNONFINANCIAL6MONTH,self::VALUE_BANKERSACCEPTANCE3MONTH,self::VALUE_BANKERSACCEPTANCE6MONTH,self::VALUE_CD1MONTH,self::VALUE_CD3MONTH,self::VALUE_CD6MONTH,self::VALUE_EURODOLLARDEPOSITS1MONTH,self::VALUE_EURODOLLARDEPOSITS3MONTH,self::VALUE_EURODOLLARDEPOSITS6MONTH,self::VALUE_PRIME,self::VALUE_DISCOUNTWINDOWBORROWING,self::VALUE_DISCOUNTWINDOWPRIMARYCREDIT,self::VALUE_TBILLAUCTIONAVERAGE3MONTH,self::VALUE_TBILLAUCTIONAVERAGE6MONTH,self::VALUE_TBILLAUCTIONAVERAGE1YEAR,self::VALUE_TBILLAUCTIONAVERAGE4WEEK,self::VALUE_TBILLAUCTIONAVERAGE13WEEK,self::VALUE_TBILLAUCTIONAVERAGE26WEEK,self::VALUE_TBILLAUCTIONAVERAGE52WEEK,self::VALUE_TBILLSECONDARYMARKET3MONTH,self::VALUE_TBILLSECONDARYMARKET6MONTH,self::VALUE_TBILLSECONDARYMARKET1YEAR,self::VALUE_TBILLSECONDARYMARKET4WEEK,self::VALUE_TREASURYCONSTANT1MONTH,self::VALUE_TREASURYCONSTANT3MONTH,self::VALUE_TREASURYCONSTANT6MONTH,self::VALUE_TREASURYCONSTANT1YEAR,self::VALUE_TREASURYCONSTANT2YEAR,self::VALUE_TREASURYCONSTANT3YEAR,self::VALUE_TREASURYCONSTANT5YEAR,self::VALUE_TREASURYCONSTANT7YEAR,self::VALUE_TREASURYCONSTANT10YEAR,self::VALUE_TREASURYCONSTANT20YEAR,self::VALUE_TREASURYCONSTANT20YEARHISTORICAL,self::VALUE_TREASURYCONSTANT30YEAR,self::VALUE_TREASURYCONSTANT10YEARCOMPOSITE,self::VALUE_COMMERCIALPAPERFINANCIAL1MONTH,self::VALUE_COMMERCIALPAPERFINANCIAL2MONTH,self::VALUE_COMMERCIALPAPERFINANCIAL3MONTH,self::VALUE_HISTORICALCOMMERCIALPAPERFINANCIAL1MONTH,self::VALUE_HISTORICALCOMMERCIALPAPERFINANCIAL3MONTH,self::VALUE_HISTORICALCOMMERCIALPAPERFINANCIAL6MONTH,self::VALUE_CORPORATEBONDSMOODYSSEASONEDAAA,self::VALUE_CORPORATEBONDSMOODYSSEASONEDBAA,self::VALUE_CORPORATEBONDSAUTILITY,self::VALUE_STATEANDLOCALBONDS,self::VALUE_CONVENTIONALMORTGAGES,self::VALUE_TREASURYLONGTERMAVERAGEAVERAGE,self::VALUE_TREASURYLONGTERMAVERAGEINFLATIONINDEXED,self::VALUE_TREASURYLONGTERMCOMPOSITE,self::VALUE_INTERESTRATESWAPSOVERNIGHT,self::VALUE_INTERESTRATESWAPS1WEEK,self::VALUE_INTERESTRATESWAPS2WEEK,self::VALUE_INTERESTRATESWAPS1MONTH,self::VALUE_INTERESTRATESWAPS2MONTH,self::VALUE_INTERESTRATESWAPS3MONTH,self::VALUE_INTERESTRATESWAPS4MONTH,self::VALUE_INTERESTRATESWAPS5MONTH,self::VALUE_INTERESTRATESWAPS6MONTH,self::VALUE_INTERESTRATESWAPS7MONTH,self::VALUE_INTERESTRATESWAPS8MONTH,self::VALUE_INTERESTRATESWAPS9MONTH,self::VALUE_INTERESTRATESWAPS10MONTH,self::VALUE_INTERESTRATESWAPS11MONTH,self::VALUE_INTERESTRATESWAPS1YEAR,self::VALUE_INTERESTRATESWAPS2YEAR,self::VALUE_INTERESTRATESWAPS3YEAR,self::VALUE_INTERESTRATESWAPS4YEAR,self::VALUE_INTERESTRATESWAPS5YEAR,self::VALUE_INTERESTRATESWAPS6YEAR,self::VALUE_INTERESTRATESWAPS7YEAR,self::VALUE_INTERESTRATESWAPS10YEAR,self::VALUE_INTERESTRATESWAPS20YEAR,self::VALUE_INTERESTRATESWAPS30YEAR,self::VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD5YEAR,self::VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD7YEAR,self::VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD10YEAR,self::VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD20YEAR,self::VALUE_TREASURYINFLATIONPROTECTEDSECURITIESYIELD30YEAR,self::VALUE_INTERESTRATESWAPSPREAD1YEAR,self::VALUE_INTERESTRATESWAPSPREAD2YEAR,self::VALUE_INTERESTRATESWAPSPREAD3YEAR,self::VALUE_INTERESTRATESWAPSPREAD5YEAR,self::VALUE_INTERESTRATESWAPSPREAD7YEAR,self::VALUE_INTERESTRATESWAPSPREAD10YEAR,self::VALUE_INTERESTRATESWAPSPREAD30YEAR,self::VALUE_REIBOROVERNIGHT,self::VALUE_REIBOR1WEEK,self::VALUE_REIBOR2WEEK,self::VALUE_REIBOR1MONTH,self::VALUE_REIBOR2MONTH,self::VALUE_REIBOR3MONTH,self::VALUE_REIBOR6MONTH,self::VALUE_REIBOR9MONTH,self::VALUE_REIBOR1YEAR,self::VALUE_REIBIDOVERNIGHT,self::VALUE_REIBID1WEEK,self::VALUE_REIBID2WEEK,self::VALUE_REIBID1MONTH,self::VALUE_REIBID2MONTH,self::VALUE_REIBID3MONTH,self::VALUE_REIBID6MONTH,self::VALUE_REIBID9MONTH,self::VALUE_REIBID1YEAR,self::VALUE_OIBORTOMORROWNEXT,self::VALUE_OIBORSPOTNEXT,self::VALUE_OIBOR1WEEK,self::VALUE_OIBOR2WEEK,self::VALUE_OIBOR1MONTH,self::VALUE_OIBOR2MONTH,self::VALUE_OIBOR3MONTH,self::VALUE_OIBOR4MONTH,self::VALUE_OIBOR5MONTH,self::VALUE_OIBOR6MONTH,self::VALUE_OIBOR9MONTH,self::VALUE_OIBOR1YEAR,self::VALUE_STIBORTOMORROWNEXT,self::VALUE_STIBOR1WEEK,self::VALUE_STIBOR1MONTH,self::VALUE_STIBOR2MONTH,self::VALUE_STIBOR3MONTH,self::VALUE_STIBOR6MONTH,self::VALUE_STIBOR9MONTH,self::VALUE_STIBOR1YEAR,self::VALUE_AIDIBOR1MONTH,self::VALUE_AIDIBOR3MONTH,self::VALUE_AIDIBOR6MONTH,self::VALUE_AIDIBOR1YEAR,self::VALUE_AIDIBOR1WEEK,self::VALUE_AIDIBOR2MONTH,self::VALUE_SIBOROVERNIGHT,self::VALUE_SIBORTOMORROWNEXT,self::VALUE_SIBOR1WEEK,self::VALUE_SIBOR1MONTH,self::VALUE_SIBOR2MONTH,self::VALUE_SIBOR3MONTH,self::VALUE_SIBOR6MONTH,self::VALUE_SIBOR9MONTH,self::VALUE_SIBOR1YEAR,self::VALUE_SIBORSORA,self::VALUE_SIBOROVERNIGHTREPO,self::VALUE_RIGIBOROVERNIGHT,self::VALUE_RIGIBOR1MONTH,self::VALUE_RIGIBOR3MONTH,self::VALUE_RIGIBOR6MONTH,self::VALUE_RIGIBOR1YEAR,self::VALUE_RIGIBIDOVERNIGHT,self::VALUE_WIBOROVERNIGHT,self::VALUE_WIBORTOMORROWNEXT,self::VALUE_WIBOR1WEEK,self::VALUE_WIBOR2WEEK,self::VALUE_WIBOR1MONTH,self::VALUE_WIBOR3MONTH,self::VALUE_WIBOR4MONTH,self::VALUE_WIBOR6MONTH,self::VALUE_WIBOR9MONTH,self::VALUE_WIBOR1YEAR,self::VALUE_CIBOR1WEEK,self::VALUE_CIBOR2WEEK,self::VALUE_CIBOR1MONTH,self::VALUE_CIBOR2MONTH,self::VALUE_CIBOR3MONTH,self::VALUE_CIBOR4MONTH,self::VALUE_CIBOR5MONTH,self::VALUE_CIBOR6MONTH,self::VALUE_CIBOR7MONTH,self::VALUE_CIBOR8MONTH,self::VALUE_CIBOR9MONTH,self::VALUE_CIBOR10MONTH,self::VALUE_CIBOR11MONTH,self::VALUE_CIBOR1YEAR,self::VALUE_EURIBOR1WEEK,self::VALUE_EURIBOR2WEEK,self::VALUE_EURIBOR3WEEK,self::VALUE_EURIBOR1MONTH,self::VALUE_EURIBOR2MONTH,self::VALUE_EURIBOR3MONTH,self::VALUE_EURIBOR4MONTH,self::VALUE_EURIBOR5MONTH,self::VALUE_EURIBOR6MONTH,self::VALUE_EURIBOR7MONTH,self::VALUE_EURIBOR8MONTH,self::VALUE_EURIBOR9MONTH,self::VALUE_EURIBOR10MONTH,self::VALUE_EURIBOR11MONTH,self::VALUE_EURIBOR1YEAR,self::VALUE_HIBOROVERNIGHT,self::VALUE_HIBOR1WEEK,self::VALUE_HIBOR2WEEK,self::VALUE_HIBOR1MONTH,self::VALUE_HIBOR2MONTH,self::VALUE_HIBOR3MONTH,self::VALUE_HIBOR4MONTH,self::VALUE_HIBOR5MONTH,self::VALUE_HIBOR6MONTH,self::VALUE_HIBOR7MONTH,self::VALUE_HIBOR8MONTH,self::VALUE_HIBOR9MONTH,self::VALUE_HIBOR10MONTH,self::VALUE_HIBOR11MONTH,self::VALUE_HIBOR1YEAR,self::VALUE_BUBOROVERNIGHT,self::VALUE_BUBOR1WEEK,self::VALUE_BUBOR2WEEK,self::VALUE_BUBOR1MONTH,self::VALUE_BUBOR2MONTH,self::VALUE_BUBOR3MONTH,self::VALUE_BUBOR4MONTH,self::VALUE_BUBOR5MONTH,self::VALUE_BUBOR6MONTH,self::VALUE_BUBOR7MONTH,self::VALUE_BUBOR8MONTH,self::VALUE_BUBOR9MONTH,self::VALUE_BUBOR10MONTH,self::VALUE_BUBOR11MONTH,self::VALUE_BUBOR1YEAR,self::VALUE_SOFIBOROVERNIGHT,self::VALUE_SOFIBOR1WEEK,self::VALUE_SOFIBOR1MONTH,self::VALUE_SOFIBOR2MONTH,self::VALUE_SOFIBOR3MONTH,self::VALUE_MIBOROVERNIGHT,self::VALUE_MIBOR2WEEK,self::VALUE_MIBOR1MONTH,self::VALUE_MIBOR3MONTH,self::VALUE_MIBIDOVERNIGHT,self::VALUE_MIBID2WEEK,self::VALUE_MIBID1MONTH,self::VALUE_MIBID3MONTH,self::VALUE_KORIBOR1WEEK,self::VALUE_KORIBOR2WEEK,self::VALUE_KORIBOR1MONTH,self::VALUE_KORIBOR2MONTH,self::VALUE_KORIBOR3MONTH,self::VALUE_KORIBOR4MONTH,self::VALUE_KORIBOR5MONTH,self::VALUE_KORIBOR6MONTH,self::VALUE_KORIBOR9MONTH,self::VALUE_KORIBOR1YEAR,self::VALUE_PRIBOROVERNIGHT,self::VALUE_PRIBOR1WEEK,self::VALUE_PRIBOR2WEEK,self::VALUE_PRIBOR1MONTH,self::VALUE_PRIBOR2MONTH,self::VALUE_PRIBOR3MONTH,self::VALUE_PRIBOR6MONTH,self::VALUE_PRIBOR9MONTH,self::VALUE_PRIBOR1YEAR,self::VALUE_PRIBIDOVERNIGHT,self::VALUE_PRIBID1WEEK,self::VALUE_PRIBID2WEEK,self::VALUE_PRIBID1MONTH,self::VALUE_PRIBID2MONTH,self::VALUE_PRIBID3MONTH,self::VALUE_PRIBID6MONTH,self::VALUE_PRIBID9MONTH,self::VALUE_PRIBID1YEAR,self::VALUE_SABOROVERNIGHT,self::VALUE_TURKIBOROVERNIGHT,self::VALUE_CHILIBOROVERNIGHT,self::VALUE_MEXIBOR1MONTH,self::VALUE_MEXIBOR3MONTH,self::VALUE_MEXIBOR6MONTH,self::VALUE_MEXIBOR9MONTH,self::VALUE_MEXIBOR1YEAR,self::VALUE_TELBOROVERNIGHT,self::VALUE_TELBOR1WEEK,self::VALUE_TELBOR1MONTH,self::VALUE_TELBOR2MONTH,self::VALUE_TELBOR3MONTH,self::VALUE_TELBOR6MONTH,self::VALUE_TELBOR9MONTH,self::VALUE_TELBOR1YEAR,self::VALUE_CHIBOROVERNIGHT,self::VALUE_CHIBOR1WEEK,self::VALUE_CHIBOR2WEEK,self::VALUE_CHIBOR3WEEK,self::VALUE_CHIBOR1MONTH,self::VALUE_CHIBOR2MONTH,self::VALUE_CHIBOR3MONTH,self::VALUE_CHIBOR4MONTH,self::VALUE_CHIBOR6MONTH,self::VALUE_CHIBOR9MONTH,self::VALUE_CHIBOR1YEAR,self::VALUE_SHIBOROVERNIGHT,self::VALUE_SHIBOR1WEEK,self::VALUE_SHIBOR2WEEK,self::VALUE_SHIBOR1MONTH,self::VALUE_SHIBOR3MONTH,self::VALUE_SHIBOR6MONTH,self::VALUE_SHIBOR9MONTH,self::VALUE_SHIBOR1YEAR,self::VALUE_JIBOR1MONTH,self::VALUE_JIBOR3MONTH,self::VALUE_JIBOR6MONTH,self::VALUE_JIBOROVERNIGHT,self::VALUE_JIBOR1WEEK,self::VALUE_JIBOR1YEAR,self::VALUE_KLIBOR1MONTH,self::VALUE_KLIBOR2MONTH,self::VALUE_KLIBOR3MONTH,self::VALUE_KLIBOR6MONTH,self::VALUE_KLIBOR9MONTH,self::VALUE_KLIBOR1YEAR,self::VALUE_KLIBOROVERNIGHT,self::VALUE_KLIBOR1WEEK,self::VALUE_TIBOR1WEEK,self::VALUE_TIBOR1MONTH,self::VALUE_TIBOR2MONTH,self::VALUE_TIBOR3MONTH,self::VALUE_TIBOR6MONTH,self::VALUE_TIBOR9MONTH,self::VALUE_TIBOR1YEAR,self::VALUE_PHIBOROVERNIGHT,self::VALUE_PHIBOR1MONTH,self::VALUE_PHIBOR2MONTH,self::VALUE_PHIBOR3MONTH,self::VALUE_PHIBOR6MONTH,self::VALUE_PHIBOR1YEAR,self::VALUE_BKIBOR1MONTH,self::VALUE_BKIBOR2MONTH,self::VALUE_BKIBOR3MONTH,self::VALUE_BKIBOR6MONTH,self::VALUE_BKIBOR9MONTH,self::VALUE_BKIBOR1YEAR,self::VALUE_BKIBOROVERNIGHT,self::VALUE_BKIBOR1WEEK,self::VALUE_VNIBOROVERNIGHT,self::VALUE_VNIBOR1MONTH,self::VALUE_VNIBOR1WEEK,self::VALUE_VNIBOR2WEEK,self::VALUE_VNIBOR2MONTH,self::VALUE_VNIBOR3MONTH,self::VALUE_VNIBOR6MONTH,self::VALUE_VNIBOR1YEAR,self::VALUE_KAIBOR1WEEK,self::VALUE_KAIBOR2WEEK,self::VALUE_KAIBOR1MONTH,self::VALUE_KAIBOR2MONTH,self::VALUE_KAIBOR3MONTH,self::VALUE_KAIBID1WEEK,self::VALUE_KAIBID2WEEK,self::VALUE_KAIBID1MONTH,self::VALUE_KAIBID2MONTH,self::VALUE_KAIBID3MONTH,self::VALUE_KIBOR1WEEK,self::VALUE_KIBOR2WEEK,self::VALUE_KIBOR1MONTH,self::VALUE_KIBOR3MONTH,self::VALUE_KIBOR6MONTH,self::VALUE_KIBOR9MONTH,self::VALUE_KIBOR1YEAR,self::VALUE_KIBOR2YEAR,self::VALUE_KIBOR3YEAR,self::VALUE_KIBID1WEEK,self::VALUE_KIBID2WEEK,self::VALUE_KIBID1MONTH,self::VALUE_KIBID3MONTH,self::VALUE_KIBID6MONTH,self::VALUE_KIBID9MONTH,self::VALUE_KIBID1YEAR,self::VALUE_KIBID2YEAR,self::VALUE_KIBID3YEAR,self::VALUE_MOSIBOROVERNIGHT,self::VALUE_MOSIBOR1WEEK,self::VALUE_MOSIBOR1MONTH,self::VALUE_MOSIBOR3MONTH,self::VALUE_MOSIBOR6MONTH,self::VALUE_MOSIBOR1YEAR,self::VALUE_MOSIBIDOVERNIGHT,self::VALUE_MOSIBID1WEEK,self::VALUE_MOSIBID1MONTH,self::VALUE_MOSIBID3MONTH,self::VALUE_MOSIBID6MONTH,self::VALUE_MOSIBID1YEAR,self::VALUE_BRAZIBOROVERNIGHT,self::VALUE_BRAZIBOR1YEAR,self::VALUE_TRLIBOROVERNIGHT,self::VALUE_TRLIBOR1WEEK,self::VALUE_TRLIBOR1MONTH,self::VALUE_TRLIBOR2MONTH,self::VALUE_TRLIBOR3MONTH,self::VALUE_TRLIBOR6MONTH,self::VALUE_TRLIBOR9MONTH,self::VALUE_TRLIBOR1YEAR,self::VALUE_TRLIBIDOVERNIGHT,self::VALUE_TRLIBID1WEEK,self::VALUE_TRLIBID1MONTH,self::VALUE_TRLIBID2MONTH,self::VALUE_TRLIBID3MONTH,self::VALUE_TRLIBID6MONTH,self::VALUE_TRLIBID9MONTH,self::VALUE_TRLIBID1YEAR,self::VALUE_JIBAR1MONTH,self::VALUE_JIBAR3MONTH,self::VALUE_JIBAR6MONTH,self::VALUE_JIBAR9MONTH,self::VALUE_JIBAR1YEAR,self::VALUE_TAIBOROVERNIGHT,self::VALUE_TAIBOR1WEEK,self::VALUE_TAIBOR2WEEK,self::VALUE_TAIBOR1MONTH,self::VALUE_TAIBOR2MONTH,self::VALUE_TAIBOR3MONTH,self::VALUE_TAIBOR6MONTH,self::VALUE_TAIBOR9MONTH,self::VALUE_TAIBOR1YEAR,self::VALUE_BRIBOROVERNIGHT,self::VALUE_BRIBOR1WEEK,self::VALUE_BRIBOR2WEEK,self::VALUE_BRIBOR1MONTH,self::VALUE_BRIBOR2MONTH,self::VALUE_BRIBOR3MONTH,self::VALUE_BRIBOR6MONTH,self::VALUE_BRIBOR9MONTH,self::VALUE_BRIBOR1YEAR,self::VALUE_BRIBIDOVERNIGHT,self::VALUE_BRIBID1WEEK,self::VALUE_BRIBID2WEEK,self::VALUE_BRIBID1MONTH,self::VALUE_BRIBID2MONTH,self::VALUE_BRIBID3MONTH,self::VALUE_BRIBID6MONTH,self::VALUE_BRIBID9MONTH,self::VALUE_BRIBID1YEAR,self::VALUE_AUSTRALIANBANKBILLS1MONTH,self::VALUE_AUSTRALIANBANKBILLS2MONTH,self::VALUE_AUSTRALIANBANKBILLS3MONTH,self::VALUE_AUSTRALIANBANKBILLS4MONTH,self::VALUE_AUSTRALIANBANKBILLS5MONTH,self::VALUE_AUSTRALIANBANKBILLS6MONTH,self::VALUE_AUSTRALIANBANKBILLS9MONTH,self::VALUE_AUSTRALIANBANKBILLS1YEAR,self::VALUE_NATIONALOVERNIGHTAVERAGE30YEARFIXED,self::VALUE_NATIONALOVERNIGHTAVERAGE15YEARFIXED,self::VALUE_NATIONALOVERNIGHTAVERAGE5YEARADJUSTABLE,self::VALUE_BAIBOROVERNIGHT,self::VALUE_BAIBOR1WEEK,self::VALUE_BAIBOR1MONTH,self::VALUE_BAIBOR3MONTH,self::VALUE_BAIBOR6MONTH,self::VALUE_BAIBOR9MONTH,self::VALUE_BAIBOR1YEAR,self::VALUE_BAIBOR18MONTH,self::VALUE_COLIBOROVERNIGHT,self::VALUE_COLIBOR1MONTH,self::VALUE_TALIBIDOVERNIGHT,self::VALUE_TALIBID1WEEK,self::VALUE_TALIBID1MONTH,self::VALUE_TALIBID2MONTH,self::VALUE_TALIBID3MONTH,self::VALUE_TALIBID6MONTH,self::VALUE_TALIBID9MONTH,self::VALUE_TALIBID1YEAR,self::VALUE_TALIBOROVERNIGHT,self::VALUE_TALIBOR1WEEK,self::VALUE_TALIBOR1MONTH,self::VALUE_TALIBOR2MONTH,self::VALUE_TALIBOR3MONTH,self::VALUE_TALIBOR6MONTH,self::VALUE_TALIBOR9MONTH,self::VALUE_TALIBOR1YEAR,self::VALUE_VILIBOROVERNIGHT,self::VALUE_VILIBOR1WEEK,self::VALUE_VILIBOR2WEEK,self::VALUE_VILIBOR1MONTH,self::VALUE_VILIBOR3MONTH,self::VALUE_VILIBOR6MONTH,self::VALUE_VILIBOR1YEAR,self::VALUE_ELEVENTHDISTRICTCOFI,self::VALUE_FNMA30YEARREQUIREDNETYIELD10DAYS,self::VALUE_FNMA30YEARREQUIREDNETYIELD30DAYS,self::VALUE_FNMA30YEARREQUIREDNETYIELD60DAYS,self::VALUE_FNMA30YEARREQUIREDNETYIELD90DAYS,self::VALUE_FNMA15YEARREQUIREDNETYIELD10DAYS,self::VALUE_FNMA15YEARREQUIREDNETYIELD30DAYS,self::VALUE_FNMA15YEARREQUIREDNETYIELD60DAYS,self::VALUE_FNMA15YEARREQUIREDNETYIELD90DAYS,self::VALUE_FNMA7YEARREQUIREDNETYIELD10DAYS,self::VALUE_FNMA7YEARREQUIREDNETYIELD30DAYS,self::VALUE_FNMA7YEARREQUIREDNETYIELD60DAYS,self::VALUE_FNMA7YEARREQUIREDNETYIELD90DAYS,self::VALUE_FNMA5YEARREQUIREDNETYIELD10DAYS,self::VALUE_FNMA5YEARREQUIREDNETYIELD30DAYS,self::VALUE_FNMA5YEARREQUIREDNETYIELD60DAYS,self::VALUE_FNMA5YEARREQUIREDNETYIELD90DAYS,self::VALUE_FNMA20YEARREQUIREDNETYIELD10DAYS,self::VALUE_FNMA20YEARREQUIREDNETYIELD30DAYS,self::VALUE_FNMA20YEARREQUIREDNETYIELD60DAYS,self::VALUE_FNMA20YEARREQUIREDNETYIELD90DAYS,self::VALUE_FHLMC1YEARARM,self::VALUE_CETES28,self::VALUE_CETES91,self::VALUE_TIIE28,self::VALUE_TIIE91,self::VALUE_BPA,self::VALUE_WIFR,self::VALUE_TEDSPREAD,self::VALUE_IRCSECTION7520INTERESTRATE,self::VALUE_CANADIANOVERNIGHTTARGETRATE,self::VALUE_CANADIANOVERNIGHTRATE,self::VALUE_CANADIANBANKRATE,self::VALUE_CANADIANOVERNIGHTREPORATE,self::VALUE_CANADIANOPERATINGBANDHIGH,self::VALUE_CANADIANOPERATINGBANDLOW,self::VALUE_CANADIANLVTSSETTLEMENTBALANCESTARGET,self::VALUE_CANADIANLVTSSETTLEMENTBALANCESACTUAL,self::VALUE_CANADIANBANKERSACCEPTANCES1MONTH,self::VALUE_CANADIANBANKERSACCEPTANCES3MONTH,self::VALUE_CANADIANPRIMECORPORATEPAPERRATE1MONTH,self::VALUE_CANADIANPRIMECORPORATEPAPERRATE2MONTH,self::VALUE_CANADIANPRIMECORPORATEPAPERRATE3MONTH,self::VALUE_CANADIANPRIMEBUSINESS,self::VALUE_CANADIANCONVENTIONALMORTGAGE1YEAR,self::VALUE_CANADIANCONVENTIONALMORTGAGE3YEAR,self::VALUE_CANADIANCONVENTIONALMORTGAGE5YEAR,self::VALUE_CANADIANGUARANTEEDINVESTMENTCERTIFICATES1YEAR,self::VALUE_CANADIANGUARANTEEDINVESTMENTCERTIFICATES3YEAR,self::VALUE_CANADIANGUARANTEEDINVESTMENTCERTIFICATES5YEAR,self::VALUE_CANADIAN5YEARPERSONALFIXEDTERM,self::VALUE_CANADIAN1MONTHTREASURYBILL,self::VALUE_CANADIAN3MONTHTREASURYBILL,self::VALUE_CANADIAN6MONTHTREASURYBILL,self::VALUE_CANADIAN1YEARTREASURYBILL,self::VALUE_CANADIAN2YEARBENCHMARKBONDYIELD,self::VALUE_CANADIAN3YEARBENCHMARKBONDYIELD,self::VALUE_CANADIAN5YEARBENCHMARKBONDYIELD,self::VALUE_CANADIAN7YEARBENCHMARKBONDYIELD,self::VALUE_CANADIAN10YEARBENCHMARKBONDYIELD,self::VALUE_CANADIAN30YEARBENCHMARKBONDYIELD,self::VALUE_TENNESSEEFORMULARATE,self::VALUE_TENNESSEEEFFECTIVERATE,self::VALUE_KANSASUSURYRATE,self::VALUE_KANSASCODEMORTGAGERATE,self::VALUE_MISSOURIMARKETRATE,self::VALUE_CONNECTICUTDEPOSITRATEINDEX,self::VALUE_TBILLS6MONTHINEFFECT6MONTHSPRIORTOTHETRANSACTION,self::VALUE_TENNESSEEMAXIMUMEFFECTIVERATEOFINTEREST,self::VALUE_FEDERALDISCOUNTPRIMARYBOSTON,self::VALUE_FEDERALDISCOUNTPRIMARYNEWYORK,self::VALUE_FEDERALDISCOUNTPRIMARYPHILADELPHIA,self::VALUE_FEDERALDISCOUNTPRIMARYCLEVELAND,self::VALUE_FEDERALDISCOUNTPRIMARYRICHMOND,self::VALUE_FEDERALDISCOUNTPRIMARYATLANTA,self::VALUE_FEDERALDISCOUNTPRIMARYCHICAGO,self::VALUE_FEDERALDISCOUNTPRIMARYSTLOUIS,self::VALUE_FEDERALDISCOUNTPRIMARYMINNEAPOLIS,self::VALUE_FEDERALDISCOUNTPRIMARYKANSASCITY,self::VALUE_FEDERALDISCOUNTPRIMARYDALLAS,self::VALUE_FEDERALDISCOUNTPRIMARYSANFRANCISCO,self::VALUE_FEDERALDISCOUNTSECONDARYBOSTON,self::VALUE_FEDERALDISCOUNTSECONDARYNEWYORK,self::VALUE_FEDERALDISCOUNTSECONDARYPHILADELPHIA,self::VALUE_FEDERALDISCOUNTSECONDARYCLEVELAND,self::VALUE_FEDERALDISCOUNTSECONDARYRICHMOND,self::VALUE_FEDERALDISCOUNTSECONDARYATLANTA,self::VALUE_FEDERALDISCOUNTSECONDARYCHICAGO,self::VALUE_FEDERALDISCOUNTSECONDARYSTLOUIS,self::VALUE_FEDERALDISCOUNTSECONDARYMINNEAPOLIS,self::VALUE_FEDERALDISCOUNTSECONDARYKANSASCITY,self::VALUE_FEDERALDISCOUNTSECONDARYDALLAS,self::VALUE_FEDERALDISCOUNTSECONDARYSANFRANCISCO,self::VALUE_MUNICOMPOSITE2YEARA,self::VALUE_MUNICOMPOSITE2YEARAA,self::VALUE_MUNICOMPOSITE2YEARAAA,self::VALUE_MUNICOMPOSITE5YEARA,self::VALUE_MUNICOMPOSITE5YEARAA,self::VALUE_MUNICOMPOSITE5YEARAAA,self::VALUE_MUNICOMPOSITE10YEARA,self::VALUE_MUNICOMPOSITE10YEARAA,self::VALUE_MUNICOMPOSITE10YEARAAA,self::VALUE_MUNICOMPOSITE20YEARA,self::VALUE_MUNICOMPOSITE20YEARAA,self::VALUE_MUNICOMPOSITE20YEARAAA,self::VALUE_TREASURYCOMPOSITE3MONTH,self::VALUE_TREASURYCOMPOSITE6MONTH,self::VALUE_TREASURYCOMPOSITE2YEAR,self::VALUE_TREASURYCOMPOSITE3YEAR,self::VALUE_TREASURYCOMPOSITE5YEAR,self::VALUE_TREASURYCOMPOSITE10YEAR,self::VALUE_TREASURYCOMPOSITE30YEAR,self::VALUE_NATIONALAVERAGECONTRACTMORTGAGERATE,self::VALUE_FREDDIEMACSURVEY30YEARFIXED,self::VALUE_FREDDIEMACSURVEY15YEARFIXED,self::VALUE_FREDDIEMACSURVEY5YEARARM,self::VALUE_FREDDIEMACSURVEY1YEARARM,self::VALUE_FREDDIEMACSURVEY30YEARFIXEDPOINTS,self::VALUE_FREDDIEMACSURVEY15YEARFIXEDPOINTS,self::VALUE_FREDDIEMACSURVEY5YEARARMPOINTS,self::VALUE_FREDDIEMACSURVEY1YEARARMPOINTS,self::VALUE_LIBORSWAPS2YEAR,self::VALUE_LIBORSWAPS3YEAR,self::VALUE_LIBORSWAPS5YEAR,self::VALUE_LIBORSWAPS10YEAR,self::VALUE_LIBORSWAPS20YEAR,self::VALUE_LIBORSWAPS30YEAR,self::VALUE_BANKOFENGLANDBASERATE,self::VALUE_EUROPEANCENTRALBANKLENDING,self::VALUE_EUROPEANCENTRALBANKREFINANCING,self::VALUE_EUROPEANCENTRALBANKDEPOSIT,self::VALUE_EUROOVERNIGHTINDEXAVERAGE,self::VALUE_CORPORATEBONDCOMPOSITEMOODYS5YEARBBB,self::VALUE_NORWEGIANOVERNIGHTWEIGHTEDAVERAGE,self::VALUE_INVALID,self::VALUE_DUMMY,self::VALUE_TREASURYCONSTANT1YEARAVERAGE,self::VALUE_TREASURYCONSTANT2YEARAVERAGE,self::VALUE_TREASURYCONSTANT3YEARAVERAGE,self::VALUE_TREASURYCONSTANT5YEARAVERAGE,self::VALUE_TBILLSECONDARYMARKET3MONTHAVERAGE,self::VALUE_COMMERCIALPAPERFINANCIAL1MONTHAVERAGE,self::VALUE_COMMERCIALPAPERNONFINANCIAL1MONTHAVERAGE));
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