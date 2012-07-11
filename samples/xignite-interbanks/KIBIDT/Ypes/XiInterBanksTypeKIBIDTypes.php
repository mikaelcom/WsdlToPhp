<?php
/**
 * Class file for XiInterBanksTypeKIBIDTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeKIBIDTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeKIBIDTypes extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'OneWeek'
	 * @return string 'OneWeek'
	 */
	const VALUE_ONEWEEK = 'OneWeek';
	/**
	 * Constant for value 'TwoWeek'
	 * @return string 'TwoWeek'
	 */
	const VALUE_TWOWEEK = 'TwoWeek';
	/**
	 * Constant for value 'OneMonth'
	 * @return string 'OneMonth'
	 */
	const VALUE_ONEMONTH = 'OneMonth';
	/**
	 * Constant for value 'ThreeMonth'
	 * @return string 'ThreeMonth'
	 */
	const VALUE_THREEMONTH = 'ThreeMonth';
	/**
	 * Constant for value 'SixMonth'
	 * @return string 'SixMonth'
	 */
	const VALUE_SIXMONTH = 'SixMonth';
	/**
	 * Constant for value 'NoneMonth'
	 * @return string 'NoneMonth'
	 */
	const VALUE_NONEMONTH = 'NoneMonth';
	/**
	 * Constant for value 'OneYear'
	 * @return string 'OneYear'
	 */
	const VALUE_ONEYEAR = 'OneYear';
	/**
	 * Constant for value 'TwoYear'
	 * @return string 'TwoYear'
	 */
	const VALUE_TWOYEAR = 'TwoYear';
	/**
	 * Constant for value 'ThreeYear'
	 * @return string 'ThreeYear'
	 */
	const VALUE_THREEYEAR = 'ThreeYear';
	/**
	 * Constructor
	 * @return XiInterBanksTypeKIBIDTypes
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
		return in_array($_value,array(self::VALUE_ONEWEEK,self::VALUE_TWOWEEK,self::VALUE_ONEMONTH,self::VALUE_THREEMONTH,self::VALUE_SIXMONTH,self::VALUE_NONEMONTH,self::VALUE_ONEYEAR,self::VALUE_TWOYEAR,self::VALUE_THREEYEAR));
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