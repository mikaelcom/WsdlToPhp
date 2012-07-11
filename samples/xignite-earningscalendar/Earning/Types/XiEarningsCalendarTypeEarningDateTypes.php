<?php
/**
 * Class file for XiEarningsCalendarTypeEarningDateTypes
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningDateTypes
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningDateTypes extends XiEarningsCalendarWsdlClass
{
	/**
	 * Constant for value 'Tentative'
	 * @return string 'Tentative'
	 */
	const VALUE_TENTATIVE = 'Tentative';
	/**
	 * Constant for value 'Verified'
	 * @return string 'Verified'
	 */
	const VALUE_VERIFIED = 'Verified';
	/**
	 * Constant for value 'Calculated'
	 * @return string 'Calculated'
	 */
	const VALUE_CALCULATED = 'Calculated';
	/**
	 * Constant for value 'Inferred'
	 * @return string 'Inferred'
	 */
	const VALUE_INFERRED = 'Inferred';
	/**
	 * Constructor
	 * @return XiEarningsCalendarTypeEarningDateTypes
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
		return in_array($_value,array(self::VALUE_TENTATIVE,self::VALUE_VERIFIED,self::VALUE_CALCULATED,self::VALUE_INFERRED));
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