<?php
/**
 * Class file for XiInterBanksTypeOIBORTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeOIBORTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeOIBORTypes extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'TomorrowNext'
	 * @return string 'TomorrowNext'
	 */
	const VALUE_TOMORROWNEXT = 'TomorrowNext';
	/**
	 * Constant for value 'SpotNext'
	 * @return string 'SpotNext'
	 */
	const VALUE_SPOTNEXT = 'SpotNext';
	/**
	 * Constant for value 'SpotWeek'
	 * @return string 'SpotWeek'
	 */
	const VALUE_SPOTWEEK = 'SpotWeek';
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
	 * Constant for value 'FourMonths'
	 * @return string 'FourMonths'
	 */
	const VALUE_FOURMONTHS = 'FourMonths';
	/**
	 * Constant for value 'FiveMonths'
	 * @return string 'FiveMonths'
	 */
	const VALUE_FIVEMONTHS = 'FiveMonths';
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
	 * Constructor
	 * @return XiInterBanksTypeOIBORTypes
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
		return in_array($_value,array(self::VALUE_TOMORROWNEXT,self::VALUE_SPOTNEXT,self::VALUE_SPOTWEEK,self::VALUE_TWOWEEK,self::VALUE_ONEMONTH,self::VALUE_TWOMONTH,self::VALUE_THREEMONTH,self::VALUE_FOURMONTHS,self::VALUE_FIVEMONTHS,self::VALUE_SIXMONTH,self::VALUE_NINEMONTH,self::VALUE_ONEYEAR));
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