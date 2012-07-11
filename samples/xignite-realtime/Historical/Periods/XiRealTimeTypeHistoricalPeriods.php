<?php
/**
 * Class file for XiRealTimeTypeHistoricalPeriods
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeHistoricalPeriods
 * @date 08/07/2012
 */
class XiRealTimeTypeHistoricalPeriods extends XiRealTimeWsdlClass
{
	/**
	 * Constant for value 'PreviousDay'
	 * @return string 'PreviousDay'
	 */
	const VALUE_PREVIOUSDAY = 'PreviousDay';
	/**
	 * Constructor
	 * @return XiRealTimeTypeHistoricalPeriods
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
		return in_array($_value,array(self::VALUE_PREVIOUSDAY));
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