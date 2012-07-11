<?php
/**
 * Class file for XiMetalsTypeHistoricalPeriodTypes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeHistoricalPeriodTypes
 * @date 08/07/2012
 */
class XiMetalsTypeHistoricalPeriodTypes extends XiMetalsWsdlClass
{
	/**
	 * Constant for value 'Daily'
	 * @return string 'Daily'
	 */
	const VALUE_DAILY = 'Daily';
	/**
	 * Constructor
	 * @return XiMetalsTypeHistoricalPeriodTypes
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
		return in_array($_value,array(self::VALUE_DAILY));
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