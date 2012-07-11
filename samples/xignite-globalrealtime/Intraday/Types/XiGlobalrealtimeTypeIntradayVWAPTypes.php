<?php
/**
 * Class file for XiGlobalrealtimeTypeIntradayVWAPTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeIntradayVWAPTypes
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeIntradayVWAPTypes extends XiGlobalrealtimeWsdlClass
{
	/**
	 * Constant for value 'RealTime'
	 * @return string 'RealTime'
	 */
	const VALUE_REALTIME = 'RealTime';
	/**
	 * Constant for value 'Delayed'
	 * @return string 'Delayed'
	 */
	const VALUE_DELAYED = 'Delayed';
	/**
	 * Constant for value 'OneMinute'
	 * @return string 'OneMinute'
	 */
	const VALUE_ONEMINUTE = 'OneMinute';
	/**
	 * Constant for value 'FiveMinute'
	 * @return string 'FiveMinute'
	 */
	const VALUE_FIVEMINUTE = 'FiveMinute';
	/**
	 * Constant for value 'TenMinute'
	 * @return string 'TenMinute'
	 */
	const VALUE_TENMINUTE = 'TenMinute';
	/**
	 * Constant for value 'ThirtyMinute'
	 * @return string 'ThirtyMinute'
	 */
	const VALUE_THIRTYMINUTE = 'ThirtyMinute';
	/**
	 * Constant for value 'OneHour'
	 * @return string 'OneHour'
	 */
	const VALUE_ONEHOUR = 'OneHour';
	/**
	 * Constant for value 'Period'
	 * @return string 'Period'
	 */
	const VALUE_PERIOD = 'Period';
	/**
	 * Constructor
	 * @return XiGlobalrealtimeTypeIntradayVWAPTypes
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
		return in_array($_value,array(self::VALUE_REALTIME,self::VALUE_DELAYED,self::VALUE_ONEMINUTE,self::VALUE_FIVEMINUTE,self::VALUE_TENMINUTE,self::VALUE_THIRTYMINUTE,self::VALUE_ONEHOUR,self::VALUE_PERIOD));
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