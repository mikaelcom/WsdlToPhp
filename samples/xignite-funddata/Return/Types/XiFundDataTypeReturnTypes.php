<?php
/**
 * Class file for XiFundDataTypeReturnTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeReturnTypes
 * @date 08/07/2012
 */
class XiFundDataTypeReturnTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'YTD'
	 * @return string 'YTD'
	 */
	const VALUE_YTD = 'YTD';
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
	 * Constant for value 'OneYear'
	 * @return string 'OneYear'
	 */
	const VALUE_ONEYEAR = 'OneYear';
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
	 * Constructor
	 * @return XiFundDataTypeReturnTypes
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
		return in_array($_value,array(self::VALUE_YTD,self::VALUE_ONEMONTH,self::VALUE_THREEMONTH,self::VALUE_ONEYEAR,self::VALUE_THREEYEAR,self::VALUE_FIVEYEAR,self::VALUE_TENYEAR));
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