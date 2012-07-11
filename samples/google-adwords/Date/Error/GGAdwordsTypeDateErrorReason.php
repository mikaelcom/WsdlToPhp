<?php
/**
 * Class file for GGAdwordsTypeDateErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeDateErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeDateErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'INVALID_FIELD_VALUES_IN_DATE'
	 * Meta informations :
	 * 	- documentation : Given field values do not correspond to a valid date.
	 * @return string 'INVALID_FIELD_VALUES_IN_DATE'
	 */
	const VALUE_INVALID_FIELD_VALUES_IN_DATE = 'INVALID_FIELD_VALUES_IN_DATE';
	/**
	 * Constant for value 'INVALID_STRING_DATE'
	 * Meta informations :
	 * 	- documentation : The string date's format should be yyyymmdd.
	 * @return string 'INVALID_STRING_DATE'
	 */
	const VALUE_INVALID_STRING_DATE = 'INVALID_STRING_DATE';
	/**
	 * Constant for value 'INVALID_STRING_DATE_RANGE'
	 * Meta informations :
	 * 	- documentation : The string date range's format should be yyyymmdd yyyymmdd.
	 * @return string 'INVALID_STRING_DATE_RANGE'
	 */
	const VALUE_INVALID_STRING_DATE_RANGE = 'INVALID_STRING_DATE_RANGE';
	/**
	 * Constant for value 'INVALID_STRING_DATE_TIME'
	 * Meta informations :
	 * 	- documentation : The string date time's format should be yyyymmdd hhmmss [tz].
	 * @return string 'INVALID_STRING_DATE_TIME'
	 */
	const VALUE_INVALID_STRING_DATE_TIME = 'INVALID_STRING_DATE_TIME';
	/**
	 * Constant for value 'EARLIER_THAN_MINIMUM_DATE'
	 * Meta informations :
	 * 	- documentation : Date is before allowed minimum.
	 * @return string 'EARLIER_THAN_MINIMUM_DATE'
	 */
	const VALUE_EARLIER_THAN_MINIMUM_DATE = 'EARLIER_THAN_MINIMUM_DATE';
	/**
	 * Constant for value 'LATER_THAN_MAXIMUM_DATE'
	 * Meta informations :
	 * 	- documentation : Date is after allowed maximum.
	 * @return string 'LATER_THAN_MAXIMUM_DATE'
	 */
	const VALUE_LATER_THAN_MAXIMUM_DATE = 'LATER_THAN_MAXIMUM_DATE';
	/**
	 * Constant for value 'DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE'
	 * Meta informations :
	 * 	- documentation : Date range bounds are not in order.
	 * @return string 'DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE'
	 */
	const VALUE_DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE = 'DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE';
	/**
	 * Constant for value 'DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL'
	 * Meta informations :
	 * 	- documentation : Both dates in range are null.
	 * @return string 'DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL'
	 */
	const VALUE_DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL = 'DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL';
	/**
	 * Constructor
	 * @return GGAdwordsTypeDateErrorReason
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
		return in_array($_value,array(self::VALUE_INVALID_FIELD_VALUES_IN_DATE,self::VALUE_INVALID_STRING_DATE,self::VALUE_INVALID_STRING_DATE_RANGE,self::VALUE_INVALID_STRING_DATE_TIME,self::VALUE_EARLIER_THAN_MINIMUM_DATE,self::VALUE_LATER_THAN_MAXIMUM_DATE,self::VALUE_DATE_RANGE_MINIMUM_DATE_LATER_THAN_MAXIMUM_DATE,self::VALUE_DATE_RANGE_MINIMUM_AND_MAXIMUM_DATES_BOTH_NULL));
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