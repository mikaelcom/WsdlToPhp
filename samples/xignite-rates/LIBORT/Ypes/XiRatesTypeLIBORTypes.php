<?php
/**
 * Class file for XiRatesTypeLIBORTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeLIBORTypes
 * @date 08/07/2012
 */
class XiRatesTypeLIBORTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'OneMonth'
	 * @return string 'OneMonth'
	 */
	const VALUE_ONEMONTH = 'OneMonth';
	/**
	 * Constant for value 'TwoMonths'
	 * @return string 'TwoMonths'
	 */
	const VALUE_TWOMONTHS = 'TwoMonths';
	/**
	 * Constant for value 'ThreeMonths'
	 * @return string 'ThreeMonths'
	 */
	const VALUE_THREEMONTHS = 'ThreeMonths';
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
	 * Constant for value 'SixMonths'
	 * @return string 'SixMonths'
	 */
	const VALUE_SIXMONTHS = 'SixMonths';
	/**
	 * Constant for value 'SevenMonths'
	 * @return string 'SevenMonths'
	 */
	const VALUE_SEVENMONTHS = 'SevenMonths';
	/**
	 * Constant for value 'EightMonths'
	 * @return string 'EightMonths'
	 */
	const VALUE_EIGHTMONTHS = 'EightMonths';
	/**
	 * Constant for value 'NineMonths'
	 * @return string 'NineMonths'
	 */
	const VALUE_NINEMONTHS = 'NineMonths';
	/**
	 * Constant for value 'TenMonths'
	 * @return string 'TenMonths'
	 */
	const VALUE_TENMONTHS = 'TenMonths';
	/**
	 * Constant for value 'ElevenMonths'
	 * @return string 'ElevenMonths'
	 */
	const VALUE_ELEVENMONTHS = 'ElevenMonths';
	/**
	 * Constant for value 'OneYear'
	 * @return string 'OneYear'
	 */
	const VALUE_ONEYEAR = 'OneYear';
	/**
	 * Constant for value 'OneWeek'
	 * @return string 'OneWeek'
	 */
	const VALUE_ONEWEEK = 'OneWeek';
	/**
	 * Constant for value 'TwoWeeks'
	 * @return string 'TwoWeeks'
	 */
	const VALUE_TWOWEEKS = 'TwoWeeks';
	/**
	 * Constant for value 'Overnite'
	 * @return string 'Overnite'
	 */
	const VALUE_OVERNITE = 'Overnite';
	/**
	 * Constructor
	 * @return XiRatesTypeLIBORTypes
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
		return in_array($_value,array(self::VALUE_ONEMONTH,self::VALUE_TWOMONTHS,self::VALUE_THREEMONTHS,self::VALUE_FOURMONTHS,self::VALUE_FIVEMONTHS,self::VALUE_SIXMONTHS,self::VALUE_SEVENMONTHS,self::VALUE_EIGHTMONTHS,self::VALUE_NINEMONTHS,self::VALUE_TENMONTHS,self::VALUE_ELEVENMONTHS,self::VALUE_ONEYEAR,self::VALUE_ONEWEEK,self::VALUE_TWOWEEKS,self::VALUE_OVERNITE));
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