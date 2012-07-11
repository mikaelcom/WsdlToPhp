<?php
/**
 * Class file for XiGlobalHistoricalTypePeriodTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypePeriodTypes
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypePeriodTypes extends XiGlobalHistoricalWsdlClass
{
	/**
	 * Constant for value 'Day'
	 * @return string 'Day'
	 */
	const VALUE_DAY = 'Day';
	/**
	 * Constant for value 'Week'
	 * @return string 'Week'
	 */
	const VALUE_WEEK = 'Week';
	/**
	 * Constant for value 'Month'
	 * @return string 'Month'
	 */
	const VALUE_MONTH = 'Month';
	/**
	 * Constant for value 'Quarter'
	 * @return string 'Quarter'
	 */
	const VALUE_QUARTER = 'Quarter';
	/**
	 * Constant for value 'Year'
	 * @return string 'Year'
	 */
	const VALUE_YEAR = 'Year';
	/**
	 * Constructor
	 * @return XiGlobalHistoricalTypePeriodTypes
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
		return in_array($_value,array(self::VALUE_DAY,self::VALUE_WEEK,self::VALUE_MONTH,self::VALUE_QUARTER,self::VALUE_YEAR));
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