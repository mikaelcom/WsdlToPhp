<?php
/**
 * Class file for XiRatesTypeWSJRateTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeWSJRateTypes
 * @date 08/07/2012
 */
class XiRatesTypeWSJRateTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'PrimeRate'
	 * @return string 'PrimeRate'
	 */
	const VALUE_PRIMERATE = 'PrimeRate';
	/**
	 * Constant for value 'DiscountRate'
	 * @return string 'DiscountRate'
	 */
	const VALUE_DISCOUNTRATE = 'DiscountRate';
	/**
	 * Constant for value 'FederalFunds'
	 * @return string 'FederalFunds'
	 */
	const VALUE_FEDERALFUNDS = 'FederalFunds';
	/**
	 * Constant for value 'CallMoney'
	 * @return string 'CallMoney'
	 */
	const VALUE_CALLMONEY = 'CallMoney';
	/**
	 * Constant for value 'CommercialPaper'
	 * @return string 'CommercialPaper'
	 */
	const VALUE_COMMERCIALPAPER = 'CommercialPaper';
	/**
	 * Constant for value 'EuroCommercialPaper'
	 * @return string 'EuroCommercialPaper'
	 */
	const VALUE_EUROCOMMERCIALPAPER = 'EuroCommercialPaper';
	/**
	 * Constant for value 'DealerCommercialPaper'
	 * @return string 'DealerCommercialPaper'
	 */
	const VALUE_DEALERCOMMERCIALPAPER = 'DealerCommercialPaper';
	/**
	 * Constant for value 'CertificatesofDeposit'
	 * @return string 'CertificatesofDeposit'
	 */
	const VALUE_CERTIFICATESOFDEPOSIT = 'CertificatesofDeposit';
	/**
	 * Constant for value 'BankersAcceptances'
	 * @return string 'BankersAcceptances'
	 */
	const VALUE_BANKERSACCEPTANCES = 'BankersAcceptances';
	/**
	 * Constant for value 'LondonLateEurodollars'
	 * @return string 'LondonLateEurodollars'
	 */
	const VALUE_LONDONLATEEURODOLLARS = 'LondonLateEurodollars';
	/**
	 * Constant for value 'LIBOR'
	 * @return string 'LIBOR'
	 */
	const VALUE_LIBOR = 'LIBOR';
	/**
	 * Constant for value 'EuroLibor'
	 * @return string 'EuroLibor'
	 */
	const VALUE_EUROLIBOR = 'EuroLibor';
	/**
	 * Constant for value 'EURIBOR'
	 * @return string 'EURIBOR'
	 */
	const VALUE_EURIBOR = 'EURIBOR';
	/**
	 * Constant for value 'ForeignPrimeRates'
	 * @return string 'ForeignPrimeRates'
	 */
	const VALUE_FOREIGNPRIMERATES = 'ForeignPrimeRates';
	/**
	 * Constant for value 'TreasuryBills'
	 * @return string 'TreasuryBills'
	 */
	const VALUE_TREASURYBILLS = 'TreasuryBills';
	/**
	 * Constant for value 'OvernightRepurchaseRate'
	 * @return string 'OvernightRepurchaseRate'
	 */
	const VALUE_OVERNIGHTREPURCHASERATE = 'OvernightRepurchaseRate';
	/**
	 * Constant for value 'FreddieMac'
	 * @return string 'FreddieMac'
	 */
	const VALUE_FREDDIEMAC = 'FreddieMac';
	/**
	 * Constant for value 'FannieMae'
	 * @return string 'FannieMae'
	 */
	const VALUE_FANNIEMAE = 'FannieMae';
	/**
	 * Constant for value 'MerrillLynchReadyAssetsTrust'
	 * @return string 'MerrillLynchReadyAssetsTrust'
	 */
	const VALUE_MERRILLLYNCHREADYASSETSTRUST = 'MerrillLynchReadyAssetsTrust';
	/**
	 * Constant for value 'ConsumerPriceIndex'
	 * @return string 'ConsumerPriceIndex'
	 */
	const VALUE_CONSUMERPRICEINDEX = 'ConsumerPriceIndex';
	/**
	 * Constant for value 'EuroDollars'
	 * @return string 'EuroDollars'
	 */
	const VALUE_EURODOLLARS = 'EuroDollars';
	/**
	 * Constant for value 'LIBORSwaps'
	 * @return string 'LIBORSwaps'
	 */
	const VALUE_LIBORSWAPS = 'LIBORSwaps';
	/**
	 * Constant for value 'TIIE28'
	 * @return string 'TIIE28'
	 */
	const VALUE_TIIE28 = 'TIIE28';
	/**
	 * Constant for value 'TelerateLibor1Month'
	 * @return string 'TelerateLibor1Month'
	 */
	const VALUE_TELERATELIBOR1MONTH = 'TelerateLibor1Month';
	/**
	 * Constant for value 'TelerateLibor3Month'
	 * @return string 'TelerateLibor3Month'
	 */
	const VALUE_TELERATELIBOR3MONTH = 'TelerateLibor3Month';
	/**
	 * Constant for value 'FederalReserveDiscountBoston'
	 * @return string 'FederalReserveDiscountBoston'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTBOSTON = 'FederalReserveDiscountBoston';
	/**
	 * Constant for value 'FederalReserveDiscountNewYork'
	 * @return string 'FederalReserveDiscountNewYork'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTNEWYORK = 'FederalReserveDiscountNewYork';
	/**
	 * Constant for value 'FederalReserveDiscountPhiladelphia'
	 * @return string 'FederalReserveDiscountPhiladelphia'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTPHILADELPHIA = 'FederalReserveDiscountPhiladelphia';
	/**
	 * Constant for value 'FederalReserveDiscountCleveland'
	 * @return string 'FederalReserveDiscountCleveland'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTCLEVELAND = 'FederalReserveDiscountCleveland';
	/**
	 * Constant for value 'FederalReserveDiscountRichmond'
	 * @return string 'FederalReserveDiscountRichmond'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTRICHMOND = 'FederalReserveDiscountRichmond';
	/**
	 * Constant for value 'FederalReserveDiscountAtlanta'
	 * @return string 'FederalReserveDiscountAtlanta'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTATLANTA = 'FederalReserveDiscountAtlanta';
	/**
	 * Constant for value 'FederalReserveDiscountChicago'
	 * @return string 'FederalReserveDiscountChicago'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTCHICAGO = 'FederalReserveDiscountChicago';
	/**
	 * Constant for value 'FederalReserveDiscountStLouis'
	 * @return string 'FederalReserveDiscountStLouis'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTSTLOUIS = 'FederalReserveDiscountStLouis';
	/**
	 * Constant for value 'FederalReserveDiscountMinneapolis'
	 * @return string 'FederalReserveDiscountMinneapolis'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTMINNEAPOLIS = 'FederalReserveDiscountMinneapolis';
	/**
	 * Constant for value 'FederalReserveDiscountKansasCity'
	 * @return string 'FederalReserveDiscountKansasCity'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTKANSASCITY = 'FederalReserveDiscountKansasCity';
	/**
	 * Constant for value 'FederalReserveDiscountDallas'
	 * @return string 'FederalReserveDiscountDallas'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTDALLAS = 'FederalReserveDiscountDallas';
	/**
	 * Constant for value 'FederalReserveDiscountSanFrancisco'
	 * @return string 'FederalReserveDiscountSanFrancisco'
	 */
	const VALUE_FEDERALRESERVEDISCOUNTSANFRANCISCO = 'FederalReserveDiscountSanFrancisco';
	/**
	 * Constant for value 'MarketRateMO'
	 * @return string 'MarketRateMO'
	 */
	const VALUE_MARKETRATEMO = 'MarketRateMO';
	/**
	 * Constant for value 'FormulaRateTN'
	 * @return string 'FormulaRateTN'
	 */
	const VALUE_FORMULARATETN = 'FormulaRateTN';
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
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Libor1Month'
	 * @return string 'Libor1Month'
	 */
	const VALUE_LIBOR1MONTH = 'Libor1Month';
	/**
	 * Constant for value 'Libor3Months'
	 * @return string 'Libor3Months'
	 */
	const VALUE_LIBOR3MONTHS = 'Libor3Months';
	/**
	 * Constructor
	 * @return XiRatesTypeWSJRateTypes
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
		return in_array($_value,array(self::VALUE_PRIMERATE,self::VALUE_DISCOUNTRATE,self::VALUE_FEDERALFUNDS,self::VALUE_CALLMONEY,self::VALUE_COMMERCIALPAPER,self::VALUE_EUROCOMMERCIALPAPER,self::VALUE_DEALERCOMMERCIALPAPER,self::VALUE_CERTIFICATESOFDEPOSIT,self::VALUE_BANKERSACCEPTANCES,self::VALUE_LONDONLATEEURODOLLARS,self::VALUE_LIBOR,self::VALUE_EUROLIBOR,self::VALUE_EURIBOR,self::VALUE_FOREIGNPRIMERATES,self::VALUE_TREASURYBILLS,self::VALUE_OVERNIGHTREPURCHASERATE,self::VALUE_FREDDIEMAC,self::VALUE_FANNIEMAE,self::VALUE_MERRILLLYNCHREADYASSETSTRUST,self::VALUE_CONSUMERPRICEINDEX,self::VALUE_EURODOLLARS,self::VALUE_LIBORSWAPS,self::VALUE_TIIE28,self::VALUE_TELERATELIBOR1MONTH,self::VALUE_TELERATELIBOR3MONTH,self::VALUE_FEDERALRESERVEDISCOUNTBOSTON,self::VALUE_FEDERALRESERVEDISCOUNTNEWYORK,self::VALUE_FEDERALRESERVEDISCOUNTPHILADELPHIA,self::VALUE_FEDERALRESERVEDISCOUNTCLEVELAND,self::VALUE_FEDERALRESERVEDISCOUNTRICHMOND,self::VALUE_FEDERALRESERVEDISCOUNTATLANTA,self::VALUE_FEDERALRESERVEDISCOUNTCHICAGO,self::VALUE_FEDERALRESERVEDISCOUNTSTLOUIS,self::VALUE_FEDERALRESERVEDISCOUNTMINNEAPOLIS,self::VALUE_FEDERALRESERVEDISCOUNTKANSASCITY,self::VALUE_FEDERALRESERVEDISCOUNTDALLAS,self::VALUE_FEDERALRESERVEDISCOUNTSANFRANCISCO,self::VALUE_MARKETRATEMO,self::VALUE_FORMULARATETN,self::VALUE_CONNECTICUTDEPOSITRATEINDEX,self::VALUE_TBILLS6MONTHINEFFECT6MONTHSPRIORTOTHETRANSACTION,self::VALUE_TENNESSEEMAXIMUMEFFECTIVERATEOFINTEREST,self::VALUE_NONE,self::VALUE_LIBOR1MONTH,self::VALUE_LIBOR3MONTHS));
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