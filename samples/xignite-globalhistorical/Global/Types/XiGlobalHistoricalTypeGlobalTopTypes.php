<?php
/**
 * Class file for XiGlobalHistoricalTypeGlobalTopTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGlobalTopTypes
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGlobalTopTypes extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'Gainers'
	 * @return string 'Gainers'
	 */
	const VALUE_GAINERS = 'Gainers';
	/**
	 * Constant for value 'Losers'
	 * @return string 'Losers'
	 */
	const VALUE_LOSERS = 'Losers';
	/**
	 * Constant for value 'Movers'
	 * @return string 'Movers'
	 */
	const VALUE_MOVERS = 'Movers';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypeGlobalTopTypes
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
		return in_array($_value,array(self::VALUE_GAINERS,self::VALUE_LOSERS,self::VALUE_MOVERS));
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