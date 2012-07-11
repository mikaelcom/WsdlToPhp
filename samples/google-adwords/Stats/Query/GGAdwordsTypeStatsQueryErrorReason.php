<?php
/**
 * Class file for GGAdwordsTypeStatsQueryErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeStatsQueryErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeStatsQueryErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'DATE_NOT_IN_VALID_RANGE'
	 * Meta informations :
	 * 	- documentation : Date is outside of allowed range.
	 * @return string 'DATE_NOT_IN_VALID_RANGE'
	 */
	const VALUE_DATE_NOT_IN_VALID_RANGE = 'DATE_NOT_IN_VALID_RANGE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeStatsQueryErrorReason
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
		return in_array($_value,array(self::VALUE_DATE_NOT_IN_VALID_RANGE));
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