<?php
/**
 * Class file for ScienceGovSearchTypePeriodType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypePeriodType
 * @date 13/10/2012
 */
class ScienceGovSearchTypePeriodType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'DAY'
	 * @return string 'DAY'
	 */
	const VALUE_DAY = 'DAY';
	/**
	 * Constant for value 'MONTH'
	 * @return string 'MONTH'
	 */
	const VALUE_MONTH = 'MONTH';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypePeriodType
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
		return in_array($_value,array(self::VALUE_DAY,self::VALUE_MONTH));
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