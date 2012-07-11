<?php
/**
 * Class file for XiMoneyMarketsTypeSwaptionTypes
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeSwaptionTypes
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeSwaptionTypes extends XiMoneyMarketsWsdlClass
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
	 * Constant for value 'EighteenMonth'
	 * @return string 'EighteenMonth'
	 */
	const VALUE_EIGHTEENMONTH = 'EighteenMonth';
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
	 * Constant for value 'FourYear'
	 * @return string 'FourYear'
	 */
	const VALUE_FOURYEAR = 'FourYear';
	/**
	 * Constant for value 'FiveYear'
	 * @return string 'FiveYear'
	 */
	const VALUE_FIVEYEAR = 'FiveYear';
	/**
	 * Constant for value 'SixYear'
	 * @return string 'SixYear'
	 */
	const VALUE_SIXYEAR = 'SixYear';
	/**
	 * Constant for value 'SevenYear'
	 * @return string 'SevenYear'
	 */
	const VALUE_SEVENYEAR = 'SevenYear';
	/**
	 * Constant for value 'EightYear'
	 * @return string 'EightYear'
	 */
	const VALUE_EIGHTYEAR = 'EightYear';
	/**
	 * Constant for value 'NineYear'
	 * @return string 'NineYear'
	 */
	const VALUE_NINEYEAR = 'NineYear';
	/**
	 * Constant for value 'TenYear'
	 * @return string 'TenYear'
	 */
	const VALUE_TENYEAR = 'TenYear';
	/**
	 * Constant for value 'TwelveYear'
	 * @return string 'TwelveYear'
	 */
	const VALUE_TWELVEYEAR = 'TwelveYear';
	/**
	 * Constant for value 'FifteenYear'
	 * @return string 'FifteenYear'
	 */
	const VALUE_FIFTEENYEAR = 'FifteenYear';
	/**
	 * Constant for value 'TwentyYear'
	 * @return string 'TwentyYear'
	 */
	const VALUE_TWENTYYEAR = 'TwentyYear';
	/**
	 * Constant for value 'TwentyFiveYear'
	 * @return string 'TwentyFiveYear'
	 */
	const VALUE_TWENTYFIVEYEAR = 'TwentyFiveYear';
	/**
	 * Constant for value 'ThirtyYear'
	 * @return string 'ThirtyYear'
	 */
	const VALUE_THIRTYYEAR = 'ThirtyYear';
	/**
	 * Constructor
	 * @return XiMoneyMarketsTypeSwaptionTypes
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
		return in_array($_value,array(self::VALUE_ONEMONTH,self::VALUE_TWOMONTH,self::VALUE_THREEMONTH,self::VALUE_FOURMONTH,self::VALUE_FIVEMONTH,self::VALUE_SIXMONTH,self::VALUE_SEVENMONTH,self::VALUE_EIGHTMONTH,self::VALUE_NINEMONTH,self::VALUE_TENMONTH,self::VALUE_ELEVENMONTH,self::VALUE_ONEYEAR,self::VALUE_EIGHTEENMONTH,self::VALUE_TWOYEAR,self::VALUE_THREEYEAR,self::VALUE_FOURYEAR,self::VALUE_FIVEYEAR,self::VALUE_SIXYEAR,self::VALUE_SEVENYEAR,self::VALUE_EIGHTYEAR,self::VALUE_NINEYEAR,self::VALUE_TENYEAR,self::VALUE_TWELVEYEAR,self::VALUE_FIFTEENYEAR,self::VALUE_TWENTYYEAR,self::VALUE_TWENTYFIVEYEAR,self::VALUE_THIRTYYEAR));
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