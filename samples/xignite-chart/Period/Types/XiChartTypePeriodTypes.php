<?php
/**
 * Class file for XiChartTypePeriodTypes
 * @date 08/07/2012
 */
/**
 * Class XiChartTypePeriodTypes
 * @date 08/07/2012
 */
class XiChartTypePeriodTypes extends XiChartWsdlClass
{
	/**
	 * Constant for value 'OneMonth'
	 * @return string 'OneMonth'
	 */
	const VALUE_ONEMONTH = 'OneMonth';
	/**
	 * Constant for value 'ThreeMonths'
	 * @return string 'ThreeMonths'
	 */
	const VALUE_THREEMONTHS = 'ThreeMonths';
	/**
	 * Constant for value 'SixMonths'
	 * @return string 'SixMonths'
	 */
	const VALUE_SIXMONTHS = 'SixMonths';
	/**
	 * Constant for value 'OneYear'
	 * @return string 'OneYear'
	 */
	const VALUE_ONEYEAR = 'OneYear';
	/**
	 * Constant for value 'TwoYears'
	 * @return string 'TwoYears'
	 */
	const VALUE_TWOYEARS = 'TwoYears';
	/**
	 * Constant for value 'ThreeYears'
	 * @return string 'ThreeYears'
	 */
	const VALUE_THREEYEARS = 'ThreeYears';
	/**
	 * Constant for value 'FourYears'
	 * @return string 'FourYears'
	 */
	const VALUE_FOURYEARS = 'FourYears';
	/**
	 * Constant for value 'FiveYears'
	 * @return string 'FiveYears'
	 */
	const VALUE_FIVEYEARS = 'FiveYears';
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constructor
	 * @return XiChartTypePeriodTypes
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
		return in_array($_value,array(self::VALUE_ONEMONTH,self::VALUE_THREEMONTHS,self::VALUE_SIXMONTHS,self::VALUE_ONEYEAR,self::VALUE_TWOYEARS,self::VALUE_THREEYEARS,self::VALUE_FOURYEARS,self::VALUE_FIVEYEARS,self::VALUE_ALL));
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