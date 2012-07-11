<?php
/**
 * Class file for XiFundDataTypeSecurityTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeSecurityTypes
 * @date 08/07/2012
 */
class XiFundDataTypeSecurityTypes extends XiFundDataWsdlClass
{
	/**
	 * Constant for value 'Debt'
	 * @return string 'Debt'
	 */
	const VALUE_DEBT = 'Debt';
	/**
	 * Constant for value 'Equity'
	 * @return string 'Equity'
	 */
	const VALUE_EQUITY = 'Equity';
	/**
	 * Constructor
	 * @return XiFundDataTypeSecurityTypes
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
		return in_array($_value,array(self::VALUE_DEBT,self::VALUE_EQUITY));
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