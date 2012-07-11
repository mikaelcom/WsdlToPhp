<?php
/**
 * Class file for XiGlobalFundamentalsTypeGlobalFundamentalTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeGlobalFundamentalTypes
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeGlobalFundamentalTypes extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * Constant for value 'LastDelayedPrice'
	 * @return string 'LastDelayedPrice'
	 */
	const VALUE_LASTDELAYEDPRICE = 'LastDelayedPrice';
	/**
	 * Constant for value 'LastOpen'
	 * @return string 'LastOpen'
	 */
	const VALUE_LASTOPEN = 'LastOpen';
	/**
	 * Constant for value 'LastHigh'
	 * @return string 'LastHigh'
	 */
	const VALUE_LASTHIGH = 'LastHigh';
	/**
	 * Constant for value 'LastLow'
	 * @return string 'LastLow'
	 */
	const VALUE_LASTLOW = 'LastLow';
	/**
	 * Constant for value 'LastVolume'
	 * @return string 'LastVolume'
	 */
	const VALUE_LASTVOLUME = 'LastVolume';
	/**
	 * Constant for value 'OneYearHigh'
	 * @return string 'OneYearHigh'
	 */
	const VALUE_ONEYEARHIGH = 'OneYearHigh';
	/**
	 * Constant for value 'OneYearLow'
	 * @return string 'OneYearLow'
	 */
	const VALUE_ONEYEARLOW = 'OneYearLow';
	/**
	 * Constant for value 'Beta'
	 * @return string 'Beta'
	 */
	const VALUE_BETA = 'Beta';
	/**
	 * Constant for value 'MarketCapitalization'
	 * @return string 'MarketCapitalization'
	 */
	const VALUE_MARKETCAPITALIZATION = 'MarketCapitalization';
	/**
	 * Constant for value 'SharesOutstanding'
	 * @return string 'SharesOutstanding'
	 */
	const VALUE_SHARESOUTSTANDING = 'SharesOutstanding';
	/**
	 * Constant for value 'LatestFiscalEPS'
	 * @return string 'LatestFiscalEPS'
	 */
	const VALUE_LATESTFISCALEPS = 'LatestFiscalEPS';
	/**
	 * Constant for value 'LatestFiscalDividendsPerShare'
	 * @return string 'LatestFiscalDividendsPerShare'
	 */
	const VALUE_LATESTFISCALDIVIDENDSPERSHARE = 'LatestFiscalDividendsPerShare';
	/**
	 * Constant for value 'LastDividendExDate'
	 * @return string 'LastDividendExDate'
	 */
	const VALUE_LASTDIVIDENDEXDATE = 'LastDividendExDate';
	/**
	 * Constant for value 'LastDividendYield'
	 * @return string 'LastDividendYield'
	 */
	const VALUE_LASTDIVIDENDYIELD = 'LastDividendYield';
	/**
	 * Constant for value 'PERatio'
	 * @return string 'PERatio'
	 */
	const VALUE_PERATIO = 'PERatio';
	/**
	 * Constant for value 'Currency'
	 * @return string 'Currency'
	 */
	const VALUE_CURRENCY = 'Currency';
	/**
	 * Constructor
	 * @return XiGlobalFundamentalsTypeGlobalFundamentalTypes
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
		return in_array($_value,array(self::VALUE_LASTDELAYEDPRICE,self::VALUE_LASTOPEN,self::VALUE_LASTHIGH,self::VALUE_LASTLOW,self::VALUE_LASTVOLUME,self::VALUE_ONEYEARHIGH,self::VALUE_ONEYEARLOW,self::VALUE_BETA,self::VALUE_MARKETCAPITALIZATION,self::VALUE_SHARESOUTSTANDING,self::VALUE_LATESTFISCALEPS,self::VALUE_LATESTFISCALDIVIDENDSPERSHARE,self::VALUE_LASTDIVIDENDEXDATE,self::VALUE_LASTDIVIDENDYIELD,self::VALUE_PERATIO,self::VALUE_CURRENCY));
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