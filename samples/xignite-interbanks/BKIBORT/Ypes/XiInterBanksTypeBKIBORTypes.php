<?php
/**
 * Class file for XiInterBanksTypeBKIBORTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeBKIBORTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeBKIBORTypes extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'OneMonth'
	 * @return string 'OneMonth'
	 */
	const VALUE_ONEMONTH = 'OneMonth';
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
	 * Constant for value 'NineMonth'
	 * @return string 'NineMonth'
	 */
	const VALUE_NINEMONTH = 'NineMonth';
	/**
	 * Constant for value 'OneYear'
	 * @return string 'OneYear'
	 */
	const VALUE_ONEYEAR = 'OneYear';
	/**
	 * Constant for value 'Overnight'
	 * @return string 'Overnight'
	 */
	const VALUE_OVERNIGHT = 'Overnight';
	/**
	 * Constant for value 'OneWeek'
	 * @return string 'OneWeek'
	 */
	const VALUE_ONEWEEK = 'OneWeek';
	/**
	 * Constructor
	 * @return XiInterBanksTypeBKIBORTypes
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
		return in_array($_value,array(self::VALUE_ONEMONTH,self::VALUE_TWOMONTH,self::VALUE_THREEMONTH,self::VALUE_SIXMONTH,self::VALUE_NINEMONTH,self::VALUE_ONEYEAR,self::VALUE_OVERNIGHT,self::VALUE_ONEWEEK));
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