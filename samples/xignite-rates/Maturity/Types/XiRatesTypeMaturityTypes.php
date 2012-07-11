<?php
/**
 * Class file for XiRatesTypeMaturityTypes
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeMaturityTypes
 * @date 08/07/2012
 */
class XiRatesTypeMaturityTypes extends XiRatesWsdlClass
{
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
	 * Constant for value 'TenYear'
	 * @return string 'TenYear'
	 */
	const VALUE_TENYEAR = 'TenYear';
	/**
	 * Constant for value 'NineYear'
	 * @return string 'NineYear'
	 */
	const VALUE_NINEYEAR = 'NineYear';
	/**
	 * Constant for value 'NineteenYear'
	 * @return string 'NineteenYear'
	 */
	const VALUE_NINETEENYEAR = 'NineteenYear';
	/**
	 * Constant for value 'TwentyYear'
	 * @return string 'TwentyYear'
	 */
	const VALUE_TWENTYYEAR = 'TwentyYear';
	/**
	 * Constant for value 'TwentyNineYear'
	 * @return string 'TwentyNineYear'
	 */
	const VALUE_TWENTYNINEYEAR = 'TwentyNineYear';
	/**
	 * Constant for value 'ThirtyYear'
	 * @return string 'ThirtyYear'
	 */
	const VALUE_THIRTYYEAR = 'ThirtyYear';
	/**
	 * Constant for value 'NA'
	 * @return string 'NA'
	 */
	const VALUE_NA = 'NA';
	/**
	 * Constructor
	 * @return XiRatesTypeMaturityTypes
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
		return in_array($_value,array(self::VALUE_TWOYEAR,self::VALUE_THREEYEAR,self::VALUE_FIVEYEAR,self::VALUE_TENYEAR,self::VALUE_NINEYEAR,self::VALUE_NINETEENYEAR,self::VALUE_TWENTYYEAR,self::VALUE_TWENTYNINEYEAR,self::VALUE_THIRTYYEAR,self::VALUE_NA));
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