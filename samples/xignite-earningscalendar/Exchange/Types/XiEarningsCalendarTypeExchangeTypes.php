<?php
/**
 * Class file for XiEarningsCalendarTypeExchangeTypes
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeExchangeTypes
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeExchangeTypes extends XiEarningsCalendarWsdlClass
{
	/**
	 * Constant for value 'NYSE'
	 * @return string 'NYSE'
	 */
	const VALUE_NYSE = 'NYSE';
	/**
	 * Constant for value 'NASDAQNM'
	 * @return string 'NASDAQNM'
	 */
	const VALUE_NASDAQNM = 'NASDAQNM';
	/**
	 * Constant for value 'NASDAQSC'
	 * @return string 'NASDAQSC'
	 */
	const VALUE_NASDAQSC = 'NASDAQSC';
	/**
	 * Constant for value 'AMEX'
	 * @return string 'AMEX'
	 */
	const VALUE_AMEX = 'AMEX';
	/**
	 * Constant for value 'PINKSHEETS'
	 * @return string 'PINKSHEETS'
	 */
	const VALUE_PINKSHEETS = 'PINKSHEETS';
	/**
	 * Constant for value 'OTCBB'
	 * @return string 'OTCBB'
	 */
	const VALUE_OTCBB = 'OTCBB';
	/**
	 * Constant for value 'IndustryGroups'
	 * @return string 'IndustryGroups'
	 */
	const VALUE_INDUSTRYGROUPS = 'IndustryGroups';
	/**
	 * Constant for value 'Indices'
	 * @return string 'Indices'
	 */
	const VALUE_INDICES = 'Indices';
	/**
	 * Constant for value 'NASDAQCM'
	 * @return string 'NASDAQCM'
	 */
	const VALUE_NASDAQCM = 'NASDAQCM';
	/**
	 * Constant for value 'NASDAQGM'
	 * @return string 'NASDAQGM'
	 */
	const VALUE_NASDAQGM = 'NASDAQGM';
	/**
	 * Constant for value 'NASDAQGS'
	 * @return string 'NASDAQGS'
	 */
	const VALUE_NASDAQGS = 'NASDAQGS';
	/**
	 * Constant for value 'TSX'
	 * @return string 'TSX'
	 */
	const VALUE_TSX = 'TSX';
	/**
	 * Constant for value 'TSXV'
	 * @return string 'TSXV'
	 */
	const VALUE_TSXV = 'TSXV';
	/**
	 * Constructor
	 * @return XiEarningsCalendarTypeExchangeTypes
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
		return in_array($_value,array(self::VALUE_NYSE,self::VALUE_NASDAQNM,self::VALUE_NASDAQSC,self::VALUE_AMEX,self::VALUE_PINKSHEETS,self::VALUE_OTCBB,self::VALUE_INDUSTRYGROUPS,self::VALUE_INDICES,self::VALUE_NASDAQCM,self::VALUE_NASDAQGM,self::VALUE_NASDAQGS,self::VALUE_TSX,self::VALUE_TSXV));
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