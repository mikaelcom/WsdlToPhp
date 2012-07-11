<?php
/**
 * Class file for XiGlobalHistoricalTypeEndOfDayPriceTimings
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeEndOfDayPriceTimings
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeEndOfDayPriceTimings extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Indicative'
	 * @return string 'Indicative'
	 */
	const VALUE_INDICATIVE = 'Indicative';
	/**
	 * Constant for value 'EndOfDay'
	 * @return string 'EndOfDay'
	 */
	const VALUE_ENDOFDAY = 'EndOfDay';
	/**
	 * Constant for value 'BeforeMarketOpen'
	 * @return string 'BeforeMarketOpen'
	 */
	const VALUE_BEFOREMARKETOPEN = 'BeforeMarketOpen';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypeEndOfDayPriceTimings
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_INDICATIVE,self::VALUE_ENDOFDAY,self::VALUE_BEFOREMARKETOPEN));
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