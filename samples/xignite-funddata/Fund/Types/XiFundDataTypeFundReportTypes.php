<?php
/**
 * Class file for XiFundDataTypeFundReportTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeFundReportTypes
 * @date 08/07/2012
 */
class XiFundDataTypeFundReportTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'All'
	 * @return string 'All'
	 */
	const VALUE_ALL = 'All';
	/**
	 * Constant for value 'Annual'
	 * @return string 'Annual'
	 */
	const VALUE_ANNUAL = 'Annual';
	/**
	 * Constant for value 'SemiAnnual'
	 * @return string 'SemiAnnual'
	 */
	const VALUE_SEMIANNUAL = 'SemiAnnual';
	/**
	 * Constructor
	 * @return XiFundDataTypeFundReportTypes
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
		return in_array($_value,array(self::VALUE_ALL,self::VALUE_ANNUAL,self::VALUE_SEMIANNUAL));
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