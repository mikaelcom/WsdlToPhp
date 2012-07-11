<?php
/**
 * Class file for XiRatesTypeTermTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeTermTypes
 * @date 08/07/2012
 */
class XiRatesTypeTermTypes extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'EightDays'
	 * @return string 'EightDays'
	 */
	const VALUE_EIGHTDAYS = 'EightDays';
	/**
	 * Constant for value 'FourteenDays'
	 * @return string 'FourteenDays'
	 */
	const VALUE_FOURTEENDAYS = 'FourteenDays';
	/**
	 * Constant for value 'TwentyEightDays'
	 * @return string 'TwentyEightDays'
	 */
	const VALUE_TWENTYEIGHTDAYS = 'TwentyEightDays';
	/**
	 * Constant for value 'NinetyOneDays'
	 * @return string 'NinetyOneDays'
	 */
	const VALUE_NINETYONEDAYS = 'NinetyOneDays';
	/**
	 * Constant for value 'NinetyTwoDays'
	 * @return string 'NinetyTwoDays'
	 */
	const VALUE_NINETYTWODAYS = 'NinetyTwoDays';
	/**
	 * Constant for value 'HundredEightyTwoDays'
	 * @return string 'HundredEightyTwoDays'
	 */
	const VALUE_HUNDREDEIGHTYTWODAYS = 'HundredEightyTwoDays';
	/**
	 * Constant for value 'SixMonths'
	 * @return string 'SixMonths'
	 */
	const VALUE_SIXMONTHS = 'SixMonths';
	/**
	 * Constant for value 'NineMonths'
	 * @return string 'NineMonths'
	 */
	const VALUE_NINEMONTHS = 'NineMonths';
	/**
	 * Constant for value 'ElevenMonths'
	 * @return string 'ElevenMonths'
	 */
	const VALUE_ELEVENMONTHS = 'ElevenMonths';
	/**
	 * Constant for value 'OneDay'
	 * @return string 'OneDay'
	 */
	const VALUE_ONEDAY = 'OneDay';
	/**
	 * Constant for value 'NA'
	 * @return string 'NA'
	 */
	const VALUE_NA = 'NA';
	/**
	 * Constructor
	 * @return XiRatesTypeTermTypes
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
		return in_array($_value,array(self::VALUE_EIGHTDAYS,self::VALUE_FOURTEENDAYS,self::VALUE_TWENTYEIGHTDAYS,self::VALUE_NINETYONEDAYS,self::VALUE_NINETYTWODAYS,self::VALUE_HUNDREDEIGHTYTWODAYS,self::VALUE_SIXMONTHS,self::VALUE_NINEMONTHS,self::VALUE_ELEVENMONTHS,self::VALUE_ONEDAY,self::VALUE_NA));
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