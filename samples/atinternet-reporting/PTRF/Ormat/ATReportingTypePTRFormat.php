<?php
/**
 * Class file for ATReportingTypePTRFormat
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypePTRFormat
 * @date 03/07/2012
 */
class ATReportingTypePTRFormat extends ATReportingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'LastMinuteString'
	 * @return string 'LastMinuteString'
	 */
	const VALUE_LASTMINUTESTRING = 'LastMinuteString';
	/**
	 * Constructor
	 * @return ATReportingTypePTRFormat
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_LASTMINUTESTRING));
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