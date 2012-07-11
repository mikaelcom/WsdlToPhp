<?php
/**
 * Class file for XiInterBanksTypeKAIBORTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeKAIBORTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeKAIBORTypes extends XiInterBanksWsdlClass
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
	 * Constructor
	 * @return XiInterBanksTypeKAIBORTypes
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
		return in_array($_value,array(self::VALUE_ONEWEEK,self::VALUE_TWOWEEK,self::VALUE_ONEMONTH,self::VALUE_TWOMONTH,self::VALUE_THREEMONTH));
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