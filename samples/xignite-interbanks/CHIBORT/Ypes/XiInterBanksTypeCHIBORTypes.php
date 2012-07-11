<?php
/**
 * Class file for XiInterBanksTypeCHIBORTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeCHIBORTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeCHIBORTypes extends XiInterBanksWsdlClass
{
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
	 * Constructor
	 * @return XiInterBanksTypeCHIBORTypes
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
		return in_array($_value,array(self::VALUE_OVERNIGHT,self::VALUE_ONEWEEK,self::VALUE_TWOWEEK,self::VALUE_THREEWEEK,self::VALUE_ONEMONTH,self::VALUE_TWOMONTH,self::VALUE_THREEMONTH,self::VALUE_FOURMONTH));
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