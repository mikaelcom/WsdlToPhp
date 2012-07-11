<?php
/**
 * Class file for XiSecurityTypeLookupType
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupType
 * @date 08/07/2012
 */
class XiSecurityTypeLookupType extends XiSecurityWsdlClass
{
	/**
	 * Constant for value 'Stock'
	 * @return string 'Stock'
	 */
	const VALUE_STOCK = 'Stock';
	/**
	 * Constant for value 'Fund'
	 * @return string 'Fund'
	 */
	const VALUE_FUND = 'Fund';
	/**
	 * Constant for value 'Index'
	 * @return string 'Index'
	 */
	const VALUE_INDEX = 'Index';
	/**
	 * Constructor
	 * @return XiSecurityTypeLookupType
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
		return in_array($_value,array(self::VALUE_STOCK,self::VALUE_FUND,self::VALUE_INDEX));
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