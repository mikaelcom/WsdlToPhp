<?php
/**
 * Class file for XiGlobalHistoricalTypeEndOfDayPriceMethods
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeEndOfDayPriceMethods
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeEndOfDayPriceMethods extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'LastTrade'
	 * @return string 'LastTrade'
	 */
	const VALUE_LASTTRADE = 'LastTrade';
	/**
	 * Constant for value 'Valuation'
	 * @return string 'Valuation'
	 */
	const VALUE_VALUATION = 'Valuation';
	/**
	 * Constant for value 'ExchangeLastTrade'
	 * @return string 'ExchangeLastTrade'
	 */
	const VALUE_EXCHANGELASTTRADE = 'ExchangeLastTrade';
	/**
	 * Constant for value 'ExchangeValuation'
	 * @return string 'ExchangeValuation'
	 */
	const VALUE_EXCHANGEVALUATION = 'ExchangeValuation';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypeEndOfDayPriceMethods
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
		return in_array($_value,array(self::VALUE_LASTTRADE,self::VALUE_VALUATION,self::VALUE_EXCHANGELASTTRADE,self::VALUE_EXCHANGEVALUATION));
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