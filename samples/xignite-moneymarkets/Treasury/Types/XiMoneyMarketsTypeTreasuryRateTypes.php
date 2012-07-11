<?php
/**
 * Class file for XiMoneyMarketsTypeTreasuryRateTypes
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeTreasuryRateTypes
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeTreasuryRateTypes extends XiMoneyMarketsWsdlClass
{
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
	 * Constant for value 'FiveYear'
	 * @return string 'FiveYear'
	 */
	const VALUE_FIVEYEAR = 'FiveYear';
	/**
	 * Constant for value 'SevenYear'
	 * @return string 'SevenYear'
	 */
	const VALUE_SEVENYEAR = 'SevenYear';
	/**
	 * Constant for value 'TenYear'
	 * @return string 'TenYear'
	 */
	const VALUE_TENYEAR = 'TenYear';
	/**
	 * Constant for value 'TwentyYear'
	 * @return string 'TwentyYear'
	 */
	const VALUE_TWENTYYEAR = 'TwentyYear';
	/**
	 * Constant for value 'ThirtyYear'
	 * @return string 'ThirtyYear'
	 */
	const VALUE_THIRTYYEAR = 'ThirtyYear';
	/**
	 * Constructor
	 * @return XiMoneyMarketsTypeTreasuryRateTypes
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
		return in_array($_value,array(self::VALUE_ONEMONTH,self::VALUE_THREEMONTH,self::VALUE_SIXMONTH,self::VALUE_ONEYEAR,self::VALUE_TWOYEAR,self::VALUE_THREEYEAR,self::VALUE_FIVEYEAR,self::VALUE_SEVENYEAR,self::VALUE_TENYEAR,self::VALUE_TWENTYYEAR,self::VALUE_THIRTYYEAR));
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