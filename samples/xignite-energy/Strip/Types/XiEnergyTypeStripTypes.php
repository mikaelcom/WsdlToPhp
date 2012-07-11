<?php
/**
 * Class file for XiEnergyTypeStripTypes
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeStripTypes
 * @date 08/07/2012
 */
class XiEnergyTypeStripTypes extends XiEnergyWsdlClass
{
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
	 * Constant for value 'TenYear'
	 * @return string 'TenYear'
	 */
	const VALUE_TENYEAR = 'TenYear';
	/**
	 * Constructor
	 * @return XiEnergyTypeStripTypes
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
		return in_array($_value,array(self::VALUE_THREEMONTH,self::VALUE_SIXMONTH,self::VALUE_ONEYEAR,self::VALUE_EIGHTEENMONTH,self::VALUE_TWOYEAR,self::VALUE_THREEYEAR,self::VALUE_FOURYEAR,self::VALUE_FIVEYEAR,self::VALUE_TENYEAR));
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