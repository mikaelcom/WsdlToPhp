<?php
/**
 * Class file for XiGlobalHistoricalTypeEndOfDayPriceMethodsUsed
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeEndOfDayPriceMethodsUsed
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeEndOfDayPriceMethodsUsed extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Exchange'
	 * @return string 'Exchange'
	 */
	const VALUE_EXCHANGE = 'Exchange';
	/**
	 * Constant for value 'Valuation'
	 * @return string 'Valuation'
	 */
	const VALUE_VALUATION = 'Valuation';
	/**
	 * Constant for value 'LastTrade'
	 * @return string 'LastTrade'
	 */
	const VALUE_LASTTRADE = 'LastTrade';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypeEndOfDayPriceMethodsUsed
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_EXCHANGE,self::VALUE_VALUATION,self::VALUE_LASTTRADE));
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