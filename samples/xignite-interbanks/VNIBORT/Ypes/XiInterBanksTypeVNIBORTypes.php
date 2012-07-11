<?php
/**
 * Class file for XiInterBanksTypeVNIBORTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeVNIBORTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeVNIBORTypes extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'VNIBOROvernight'
	 * @return string 'VNIBOROvernight'
	 */
	const VALUE_VNIBOROVERNIGHT = 'VNIBOROvernight';
	/**
	 * Constant for value 'OneMonth'
	 * @return string 'OneMonth'
	 */
	const VALUE_ONEMONTH = 'OneMonth';
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
	 * Constant for value 'TwoMonth'
	 * @return string 'TwoMonth'
	 */
	const VALUE_TWOMONTH = 'TwoMonth';
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
	 * Constant for value 'OneYear'
	 * @return string 'OneYear'
	 */
	const VALUE_ONEYEAR = 'OneYear';
	/**
	 * Constructor
	 * @return XiInterBanksTypeVNIBORTypes
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
		return in_array($_value,array(self::VALUE_VNIBOROVERNIGHT,self::VALUE_ONEMONTH,self::VALUE_ONEWEEK,self::VALUE_TWOWEEK,self::VALUE_TWOMONTH,self::VALUE_THREEMONTH,self::VALUE_SIXMONTH,self::VALUE_ONEYEAR));
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