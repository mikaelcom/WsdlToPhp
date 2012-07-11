<?php
/**
 * Class file for XiFundDataTypePeriodTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypePeriodTypes
 * @date 08/07/2012
 */
class XiFundDataTypePeriodTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'FirstMonth'
	 * @return string 'FirstMonth'
	 */
	const VALUE_FIRSTMONTH = 'FirstMonth';
	/**
	 * Constant for value 'SecondMonth'
	 * @return string 'SecondMonth'
	 */
	const VALUE_SECONDMONTH = 'SecondMonth';
	/**
	 * Constant for value 'ThirdMonth'
	 * @return string 'ThirdMonth'
	 */
	const VALUE_THIRDMONTH = 'ThirdMonth';
	/**
	 * Constant for value 'FourthMonth'
	 * @return string 'FourthMonth'
	 */
	const VALUE_FOURTHMONTH = 'FourthMonth';
	/**
	 * Constant for value 'FifthMonth'
	 * @return string 'FifthMonth'
	 */
	const VALUE_FIFTHMONTH = 'FifthMonth';
	/**
	 * Constant for value 'SixthMonth'
	 * @return string 'SixthMonth'
	 */
	const VALUE_SIXTHMONTH = 'SixthMonth';
	/**
	 * Constant for value 'Total'
	 * @return string 'Total'
	 */
	const VALUE_TOTAL = 'Total';
	/**
	 * Constructor
	 * @return XiFundDataTypePeriodTypes
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
		return in_array($_value,array(self::VALUE_FIRSTMONTH,self::VALUE_SECONDMONTH,self::VALUE_THIRDMONTH,self::VALUE_FOURTHMONTH,self::VALUE_FIFTHMONTH,self::VALUE_SIXTHMONTH,self::VALUE_TOTAL));
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