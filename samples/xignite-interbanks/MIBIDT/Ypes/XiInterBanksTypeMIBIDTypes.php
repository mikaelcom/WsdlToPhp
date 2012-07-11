<?php
/**
 * Class file for XiInterBanksTypeMIBIDTypes
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeMIBIDTypes
 * @date 08/07/2012
 */
class XiInterBanksTypeMIBIDTypes extends XiInterBanksWsdlClass
{
	/**
	 * Constant for value 'Overnight'
	 * @return string 'Overnight'
	 */
	const VALUE_OVERNIGHT = 'Overnight';
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
	 * Constant for value 'ThreeMonth'
	 * @return string 'ThreeMonth'
	 */
	const VALUE_THREEMONTH = 'ThreeMonth';
	/**
	 * Constructor
	 * @return XiInterBanksTypeMIBIDTypes
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
		return in_array($_value,array(self::VALUE_OVERNIGHT,self::VALUE_TWOWEEK,self::VALUE_ONEMONTH,self::VALUE_THREEMONTH));
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