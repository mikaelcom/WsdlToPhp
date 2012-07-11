<?php
/**
 * Class file for XiRatesTypePeriodType
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypePeriodType
 * @date 08/07/2012
 */
class XiRatesTypePeriodType extends XiRatesWsdlClass
{
	/**
	 * Constant for value 'Morning'
	 * @return string 'Morning'
	 */
	const VALUE_MORNING = 'Morning';
	/**
	 * Constant for value 'Evening'
	 * @return string 'Evening'
	 */
	const VALUE_EVENING = 'Evening';
	/**
	 * Constructor
	 * @return XiRatesTypePeriodType
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
		return in_array($_value,array(self::VALUE_MORNING,self::VALUE_EVENING));
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