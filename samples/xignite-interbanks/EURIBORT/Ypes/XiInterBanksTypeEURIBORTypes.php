<?php
/**
 * Class file for XiInterBanksTypeEURIBORTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeEURIBORTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeEURIBORTypes extends XiInterBanksWsdlClass
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
	 * Constant for value 'ThreeWeek'
	 * @return string 'ThreeWeek'
	 */
	const VALUE_THREEWEEK = 'ThreeWeek';
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
	 * Constant for value 'FourMonth'
	 * @return string 'FourMonth'
	 */
	const VALUE_FOURMONTH = 'FourMonth';
	/**
	 * Constant for value 'FiveMonth'
	 * @return string 'FiveMonth'
	 */
	const VALUE_FIVEMONTH = 'FiveMonth';
	/**
	 * Constant for value 'SixMonth'
	 * @return string 'SixMonth'
	 */
	const VALUE_SIXMONTH = 'SixMonth';
	/**
	 * Constant for value 'SevenMonth'
	 * @return string 'SevenMonth'
	 */
	const VALUE_SEVENMONTH = 'SevenMonth';
	/**
	 * Constant for value 'EightMonth'
	 * @return string 'EightMonth'
	 */
	const VALUE_EIGHTMONTH = 'EightMonth';
	/**
	 * Constant for value 'NineMonth'
	 * @return string 'NineMonth'
	 */
	const VALUE_NINEMONTH = 'NineMonth';
	/**
	 * Constant for value 'TenMonth'
	 * @return string 'TenMonth'
	 */
	const VALUE_TENMONTH = 'TenMonth';
	/**
	 * Constant for value 'ElevenMonth'
	 * @return string 'ElevenMonth'
	 */
	const VALUE_ELEVENMONTH = 'ElevenMonth';
	/**
	 * Constant for value 'OneYear'
	 * @return string 'OneYear'
	 */
	const VALUE_ONEYEAR = 'OneYear';
	/**
	 * Constructor
	 * @return XiInterBanksTypeEURIBORTypes
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
		return in_array($_value,array(self::VALUE_ONEWEEK,self::VALUE_TWOWEEK,self::VALUE_THREEWEEK,self::VALUE_ONEMONTH,self::VALUE_TWOMONTH,self::VALUE_THREEMONTH,self::VALUE_FOURMONTH,self::VALUE_FIVEMONTH,self::VALUE_SIXMONTH,self::VALUE_SEVENMONTH,self::VALUE_EIGHTMONTH,self::VALUE_NINEMONTH,self::VALUE_TENMONTH,self::VALUE_ELEVENMONTH,self::VALUE_ONEYEAR));
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