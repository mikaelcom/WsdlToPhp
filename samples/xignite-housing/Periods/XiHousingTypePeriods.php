<?php
/**
 * Class file for XiHousingTypePeriods
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypePeriods
 * @date 08/07/2012
 */
class XiHousingTypePeriods extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'Year'
	 * @return string 'Year'
	 */
	const VALUE_YEAR = 'Year';
	/**
	 * Constant for value 'Quarter'
	 * @return string 'Quarter'
	 */
	const VALUE_QUARTER = 'Quarter';
	/**
	 * Constant for value 'Month'
	 * @return string 'Month'
	 */
	const VALUE_MONTH = 'Month';
	/**
	 * Constructor
	 * @return XiHousingTypePeriods
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
		return in_array($_value,array(self::VALUE_YEAR,self::VALUE_QUARTER,self::VALUE_MONTH));
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