<?php
/**
 * Class file for XiEarningsCalendarTypeEarningTimeTypes
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningTimeTypes
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningTimeTypes extends XiEarningsCalendarWsdlClass
{
	/**
	 * Constant for value 'AfterMarket'
	 * @return string 'AfterMarket'
	 */
	const VALUE_AFTERMARKET = 'AfterMarket';
	/**
	 * Constant for value 'DuringMarket'
	 * @return string 'DuringMarket'
	 */
	const VALUE_DURINGMARKET = 'DuringMarket';
	/**
	 * Constant for value 'BeforeMarket'
	 * @return string 'BeforeMarket'
	 */
	const VALUE_BEFOREMARKET = 'BeforeMarket';
	/**
	 * Constant for value 'Unspecified'
	 * @return string 'Unspecified'
	 */
	const VALUE_UNSPECIFIED = 'Unspecified';
	/**
	 * Constructor
	 * @return XiEarningsCalendarTypeEarningTimeTypes
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
		return in_array($_value,array(self::VALUE_AFTERMARKET,self::VALUE_DURINGMARKET,self::VALUE_BEFOREMARKET,self::VALUE_UNSPECIFIED));
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