<?php
/**
 * Class file for ATReportingTypeReportType
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeReportType
 * @date 03/07/2012
 */
class ATReportingTypeReportType extends ATReportingWsdlClass
{
	/**
	 * Constant for value 'XML'
	 * @return string 'XML'
	 */
	const VALUE_XML = 'XML';
	/**
	 * Constant for value 'CSV'
	 * @return string 'CSV'
	 */
	const VALUE_CSV = 'CSV';
	/**
	 * Constructor
	 * @return ATReportingTypeReportType
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
		return in_array($_value,array(self::VALUE_XML,self::VALUE_CSV));
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