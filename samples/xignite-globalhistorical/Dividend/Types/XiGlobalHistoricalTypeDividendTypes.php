<?php
/**
 * Class file for XiGlobalHistoricalTypeDividendTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeDividendTypes
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeDividendTypes extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'OrdinaryDividend'
	 * @return string 'OrdinaryDividend'
	 */
	const VALUE_ORDINARYDIVIDEND = 'OrdinaryDividend';
	/**
	 * Constant for value 'ExtraDividend'
	 * @return string 'ExtraDividend'
	 */
	const VALUE_EXTRADIVIDEND = 'ExtraDividend';
	/**
	 * Constant for value 'BonusDividend'
	 * @return string 'BonusDividend'
	 */
	const VALUE_BONUSDIVIDEND = 'BonusDividend';
	/**
	 * Constant for value 'OrdinaryAndExtraDividendAndOrBonus'
	 * @return string 'OrdinaryAndExtraDividendAndOrBonus'
	 */
	const VALUE_ORDINARYANDEXTRADIVIDENDANDORBONUS = 'OrdinaryAndExtraDividendAndOrBonus';
	/**
	 * Constant for value 'LiquidationDistribution'
	 * @return string 'LiquidationDistribution'
	 */
	const VALUE_LIQUIDATIONDISTRIBUTION = 'LiquidationDistribution';
	/**
	 * Constant for value 'CapitalGainTrust'
	 * @return string 'CapitalGainTrust'
	 */
	const VALUE_CAPITALGAINTRUST = 'CapitalGainTrust';
	/**
	 * Constant for value 'NoDividend'
	 * @return string 'NoDividend'
	 */
	const VALUE_NODIVIDEND = 'NoDividend';
	/**
	 * Constant for value 'CapitalGainShortTerm'
	 * @return string 'CapitalGainShortTerm'
	 */
	const VALUE_CAPITALGAINSHORTTERM = 'CapitalGainShortTerm';
	/**
	 * Constant for value 'OtherDividendType'
	 * @return string 'OtherDividendType'
	 */
	const VALUE_OTHERDIVIDENDTYPE = 'OtherDividendType';
	/**
	 * Constant for value 'CapitalGainLongTerm'
	 * @return string 'CapitalGainLongTerm'
	 */
	const VALUE_CAPITALGAINLONGTERM = 'CapitalGainLongTerm';
	/**
	 * Constant for value 'GuaranteedDividend'
	 * @return string 'GuaranteedDividend'
	 */
	const VALUE_GUARANTEEDDIVIDEND = 'GuaranteedDividend';
	/**
	 * Constant for value 'ForeignIncomeDividend'
	 * @return string 'ForeignIncomeDividend'
	 */
	const VALUE_FOREIGNINCOMEDIVIDEND = 'ForeignIncomeDividend';
	/**
	 * Constant for value 'TaxDividend'
	 * @return string 'TaxDividend'
	 */
	const VALUE_TAXDIVIDEND = 'TaxDividend';
	/**
	 * Constant for value 'CapitalDistribution'
	 * @return string 'CapitalDistribution'
	 */
	const VALUE_CAPITALDISTRIBUTION = 'CapitalDistribution';
	/**
	 * Constant for value 'ReturnOnCapital'
	 * @return string 'ReturnOnCapital'
	 */
	const VALUE_RETURNONCAPITAL = 'ReturnOnCapital';
	/**
	 * Constant for value 'CapitalGainMediumTerm'
	 * @return string 'CapitalGainMediumTerm'
	 */
	const VALUE_CAPITALGAINMEDIUMTERM = 'CapitalGainMediumTerm';
	/**
	 * Constant for value 'DailyAccrualFund'
	 * @return string 'DailyAccrualFund'
	 */
	const VALUE_DAILYACCRUALFUND = 'DailyAccrualFund';
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'DefaultValue'
	 * @return string 'DefaultValue'
	 */
	const VALUE_DEFAULTVALUE = 'DefaultValue';
	/**
	 * Constant for value 'SpecialDividend'
	 * @return string 'SpecialDividend'
	 */
	const VALUE_SPECIALDIVIDEND = 'SpecialDividend';
	/**
	 * Constant for value 'YearEndDividend'
	 * @return string 'YearEndDividend'
	 */
	const VALUE_YEARENDDIVIDEND = 'YearEndDividend';
	/**
	 * Constant for value 'UnusualDividend'
	 * @return string 'UnusualDividend'
	 */
	const VALUE_UNUSUALDIVIDEND = 'UnusualDividend';
	/**
	 * Constant for value 'NormalDividend'
	 * @return string 'NormalDividend'
	 */
	const VALUE_NORMALDIVIDEND = 'NormalDividend';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypeDividendTypes
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_ORDINARYDIVIDEND,self::VALUE_EXTRADIVIDEND,self::VALUE_BONUSDIVIDEND,self::VALUE_ORDINARYANDEXTRADIVIDENDANDORBONUS,self::VALUE_LIQUIDATIONDISTRIBUTION,self::VALUE_CAPITALGAINTRUST,self::VALUE_NODIVIDEND,self::VALUE_CAPITALGAINSHORTTERM,self::VALUE_OTHERDIVIDENDTYPE,self::VALUE_CAPITALGAINLONGTERM,self::VALUE_GUARANTEEDDIVIDEND,self::VALUE_FOREIGNINCOMEDIVIDEND,self::VALUE_TAXDIVIDEND,self::VALUE_CAPITALDISTRIBUTION,self::VALUE_RETURNONCAPITAL,self::VALUE_CAPITALGAINMEDIUMTERM,self::VALUE_DAILYACCRUALFUND,self::VALUE_UNKNOWN,self::VALUE_DEFAULTVALUE,self::VALUE_SPECIALDIVIDEND,self::VALUE_YEARENDDIVIDEND,self::VALUE_UNUSUALDIVIDEND,self::VALUE_NORMALDIVIDEND));
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