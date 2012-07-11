<?php
/**
 * Class file for XiGlobalquotesTypeTickPrecisions
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeTickPrecisions
 * @date 08/07/2012
 */
class XiGlobalquotesTypeTickPrecisions extends XiGlobalquotesWsdlClass
{
	/**
	 * Constant for value 'Seconds'
	 * @return string 'Seconds'
	 */
	const VALUE_SECONDS = 'Seconds';
	/**
	 * Constant for value 'Minutes'
	 * @return string 'Minutes'
	 */
	const VALUE_MINUTES = 'Minutes';
	/**
	 * Constant for value 'Hours'
	 * @return string 'Hours'
	 */
	const VALUE_HOURS = 'Hours';
	/**
	 * Constructor
	 * @return XiGlobalquotesTypeTickPrecisions
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
		return in_array($_value,array(self::VALUE_SECONDS,self::VALUE_MINUTES,self::VALUE_HOURS));
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