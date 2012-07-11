<?php
/**
 * Class file for XiVWAPTypeHistoricalVWAPTypes
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeHistoricalVWAPTypes
 * @date 08/07/2012
 */
class XiVWAPTypeHistoricalVWAPTypes extends XiVWAPWsdlClass
{
	/**
	 * Constant for value 'Daily'
	 * @return string 'Daily'
	 */
	const VALUE_DAILY = 'Daily';
	/**
	 * Constant for value 'Weekly'
	 * @return string 'Weekly'
	 */
	const VALUE_WEEKLY = 'Weekly';
	/**
	 * Constant for value 'Monthly'
	 * @return string 'Monthly'
	 */
	const VALUE_MONTHLY = 'Monthly';
	/**
	 * Constant for value 'Period'
	 * @return string 'Period'
	 */
	const VALUE_PERIOD = 'Period';
	/**
	 * Constructor
	 * @return XiVWAPTypeHistoricalVWAPTypes
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
		return in_array($_value,array(self::VALUE_DAILY,self::VALUE_WEEKLY,self::VALUE_MONTHLY,self::VALUE_PERIOD));
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